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
                    $newpage = new Domain;
                    $newpage->temp_id = $data['id'];
                    $newpage->title = $title;
                    $newpage->slug = str_slug($title, '-');
                    $newpage->seo_title = $data['title'];
                    $newpage->seo_description = $data['seo_description'];
                    $newpage->seo_keywords = $data['seo_keywords'];
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

            if($data['title']){
                $delimiter = "\n";
                $splitcontents = explode($delimiter, $data['title']);
                foreach ( $splitcontents as $title )
                {
                    $newpage = new Domain;
                    $newpage->temp_id = $data['id'];
                    $newpage->title = $title;
                    $newpage->slug = str_slug($title, '-');
                    $newpage->seo_title = $data['title'];
                    $newpage->seo_description = $data['seo_description'];
                    $newpage->seo_keywords = $data['seo_keywords'];
                    $newpage->save();
                }
            }

            if (!$request->ajax()) {
                $this->insertUpdateData($request, $slug, $dataType->editRows, $data);
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
            Domain::find('temp_id', '=', $request->ids)->delete();
            $ids = explode(',', $request->ids);
        } else {
            // Single item delete, get ID from URL
            Domain::where('temp_id', '=', $id)->delete();
            $ids[] = $id;
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

}
