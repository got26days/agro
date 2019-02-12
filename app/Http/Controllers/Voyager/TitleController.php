<?php

namespace App\Http\Controllers\Voyager;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Database\Schema\SchemaManager;
use TCG\Voyager\Events\BreadDataAdded;
use TCG\Voyager\Events\BreadDataDeleted;
use TCG\Voyager\Events\BreadDataUpdated;
use TCG\Voyager\Events\BreadImagesDeleted;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Http\Controllers\Traits\BreadRelationshipParser;
use App\Domain;
use Validator;

class TitleController extends \TCG\Voyager\Http\Controllers\VoyagerBaseController
{

    
    /**
     * POST BRE(A)D - Store data.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

        

        $slug = $this->getSlug($request);
        $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();
        // Check permission
        $this->authorize('add', app($dataType->model_name));
        // Validate fields with ajax
        $val = $this->validateBread($request->all(), $dataType->addRows);
        if ($val->fails()) {
            return response()->json(['errors' => $val->messages()]);
        }
        if (!$request->has('_validate')) {
            $data = $this->insertUpdateData($request, $slug, $dataType->addRows, new $dataType->model_name());

            // return $data;

            event(new BreadDataAdded($dataType, $data));

            if($data['title']){
                $delimiter = "\n";
                $splitcontents = explode($delimiter, $data['title']);



                foreach ( $splitcontents as $title )
                {

                    $result = explode(' > ',$title);

                    $newpage = new Domain;
                    $newpage->request = $result[0];
                    $newpage->temp_id = $data['id'];
                    $newpage->title = $result[1];


                    $newpage->slug =  md5(microtime());
                    $newpage->seo_title = $data['seo_title'];
                    $newpage->seo_description = $data['seo_description'];
                    $newpage->seo_keywords = $data['seo_keywords'];


                    $newpage->image = $data['image'];
                    $newpage->body = $data['body'];
                    $newpage->image1 = $data['image1'];
                    $newpage->title1 = $data['title1'];
                    $newpage->body1 = $data['body1'];
                    $newpage->image2 = $data['image2'];
                    $newpage->title2 = $data['title2'];
                    $newpage->body2 = $data['body2'];
                    $newpage->image3 = $data['image3'];
                    $newpage->title3 = $data['title3'];
                    $newpage->body3 = $data['body3'];   

                    $newpage->save();

                    $slug = str_slug($result[1], '-');
                    $alldomains = Domain::where('slug', '=', $slug)->first();
                    if($alldomains){
                        $newpage->slug = $slug .'-' . $newpage['id'];
                    } else {
                        $newpage->slug = $slug;
                    }
                    $newpage->save();
                }
            }



            if ($request->ajax()) {
                return response()->json(['success' => true, 'data' => $data]);
            }
            return redirect()
                ->route("voyager.{$dataType->slug}.index")
                ->with([
                        'message'    => __('voyager::generic.successfully_added_new')." {$dataType->display_name_singular}",
                        'alert-type' => 'success',
                    ]);
        }
    }

    // POST BR(E)AD
    public function update(Request $request, $id)
    {
        $slug = $this->getSlug($request);
        $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();
        // Compatibility with Model binding.
        $id = $id instanceof Model ? $id->{$id->getKeyName()} : $id;
        $data = call_user_func([$dataType->model_name, 'findOrFail'], $id);
        // Check permission
        $this->authorize('edit', $data);
        // Validate fields with ajax
        $val = $this->validateBread($request->all(), $dataType->editRows, $dataType->name, $id);
        if ($val->fails()) {
            return response()->json(['errors' => $val->messages()]);
        }
    

        Domain::where('temp_id', '=', $id)->delete();


        if (!$request->ajax()) {
            $this->insertUpdateData($request, $slug, $dataType->editRows, $data);

            if($data['title']){
            
    
                $delimiter = "\n";
                $splitcontents = explode($delimiter, $data['title']);


                foreach ( $splitcontents as $title )
                {



                    $result = explode(' > ',$title);

            
                    

                    $newpage = new Domain;

                    $newpage->request = $result[0];

                    $newpage->temp_id = $data['id'];
                    $newpage->title = $result[1];
                    $newpage->slug = md5(microtime());
                    $newpage->seo_title = $data['seo_title'];
                    $newpage->seo_description = $data['seo_description'];
                    $newpage->seo_keywords = $data['seo_keywords'];

                    $newpage->image = $data['image'];
                    $newpage->body = $data['body'];
                    $newpage->image1 = $data['image1'];
                    $newpage->title1 = $data['title1'];
                    $newpage->body1 = $data['body1'];
                    $newpage->image2 = $data['image2'];
                    $newpage->title2 = $data['title2'];
                    $newpage->body2 = $data['body2'];
                    $newpage->image3 = $data['image3'];
                    $newpage->title3 = $data['title3'];
                    $newpage->body3 = $data['body3'];   

                    $newpage->save();

                    $slug = str_slug($result[1], '-');
                    $alldomains = Domain::where('slug', '=', $slug)->first();
                    if($alldomains){
                        $newpage->slug = $slug .'-' . $newpage['id'];
                    } else {
                        $newpage->slug = $slug;
                    }
                    $newpage->save();
                }
            }

            event(new BreadDataUpdated($dataType, $data));
            return redirect()
                ->route("voyager.{$dataType->slug}.index")
                ->with([
                    'message'    => __('voyager::generic.successfully_updated')." {$dataType->display_name_singular}",
                    'alert-type' => 'success',
                ]);
        }
    }

        
    public function destroy(Request $request, $id)
    {
        $slug = $this->getSlug($request);
        $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();
        // Check permission
        $this->authorize('delete', app($dataType->model_name));
        // Init array of IDs
        $ids = [];
        if (empty($id)) {
            // Bulk delete, get IDs from POST
            $ids = explode(',', $request->ids);

            $over_domain = Domain::where('temp_id', '=', $request->ids)->delete();
        } else {
            // Single item delete, get ID from URL
            $ids[] = $id;
            $over_domain = Domain::where('temp_id', '=', $id)->delete();
        }
        foreach ($ids as $id) {
            $data = call_user_func([$dataType->model_name, 'findOrFail'], $id);
            $this->cleanup($dataType, $data);
        }
        $displayName = count($ids) > 1 ? $dataType->display_name_plural : $dataType->display_name_singular;
        $res = $data->destroy($ids);
        $data = $res
            ? [
                'message'    => __('voyager::generic.successfully_deleted')." {$displayName}",
                'alert-type' => 'success',
            ]
            : [
                'message'    => __('voyager::generic.error_deleting')." {$displayName}",
                'alert-type' => 'error',
            ];
        if ($res) {
            event(new BreadDataDeleted($dataType, $data));
        }
        return redirect()->route("voyager.{$dataType->slug}.index")->with($data);
    }

       /**
     * Delete all images related to a BREAD item.
     *
     * @param \Illuminate\Database\Eloquent\Model $data
     * @param \Illuminate\Database\Eloquent\Model $rows
     *
     * @return void
     */
    public function deleteBreadImages($data, $rows)
    {
        foreach ($rows as $row) {
            if ($data->{$row->field} != config('voyager.user.default_avatar')) {
                $this->deleteFileIfExists($data->{$row->field});
            }
            if (isset($row->details->thumbnails)) {
                foreach ($row->details->thumbnails as $thumbnail) {
                    $ext = explode('.', $data->{$row->field});
                    $extension = '.'.$ext[count($ext) - 1];
                    $path = str_replace($extension, '', $data->{$row->field});
                    $thumb_name = $thumbnail->name;
                    $this->deleteFileIfExists($path.'-'.$thumb_name.$extension);
                }
            }
        }
        if ($rows->count() > 0) {
            event(new BreadImagesDeleted($data, $rows));
        }
    }
    /**
     * Order BREAD items.
     *
     * @param string $table
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function order(Request $request)
    {
        $slug = $this->getSlug($request);
        $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();
        // Check permission
        $this->authorize('edit', app($dataType->model_name));
        if (!isset($dataType->order_column) || !isset($dataType->order_display_column)) {
            return redirect()
            ->route("voyager.{$dataType->slug}.index")
            ->with([
                'message'    => __('voyager::bread.ordering_not_set'),
                'alert-type' => 'error',
            ]);
        }
        $model = app($dataType->model_name);
        $results = $model->orderBy($dataType->order_column, $dataType->order_direction)->get();
        $display_column = $dataType->order_display_column;
        $dataRow = Voyager::model('DataRow')->whereDataTypeId($dataType->id)->whereField($display_column)->first();
        $view = 'voyager::bread.order';
        if (view()->exists("voyager::$slug.order")) {
            $view = "voyager::$slug.order";
        }
        return Voyager::view($view, compact(
            'dataType',
            'display_column',
            'dataRow',
            'results'
        ));
    }
    public function update_order(Request $request)
    {
        $slug = $this->getSlug($request);
        $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();
        // Check permission
        $this->authorize('edit', app($dataType->model_name));
        $model = app($dataType->model_name);
        $order = json_decode($request->input('order'));
        $column = $dataType->order_column;
        foreach ($order as $key => $item) {
            $i = $model->findOrFail($item->id);
            $i->$column = ($key + 1);
            $i->save();
        }
    }
    

}
