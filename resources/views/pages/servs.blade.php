@extends('layouts.master')

@section('content')
<main class="main">
    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs__wrap">
                <a href="/">Главная</a>&#8195;/&#8195;<span>Услуги</span>
            </div>
        </div>
    </div>
    <div class="farm">
        <section class="sec farm-sec">
            <div class="container">
                <h1 class="sec__title farm-sec__title">Услуги</h1>
                <div class="farm__wrap" id="wcredits">
                    <div class="farm__blc farm__blc--100 farm-fig-blc">
                        <img src="img/farm/fig-1.png" class="farm-fig-blc__img farm-fig-blc__img--1" alt="">
                        <div class="farm-fig-blc__main">
                            <h3 class="farm-fig-blc__title">Гранты, субсидии и кредитование <br> для фермеров и сельхозпроизводителей</h3>
                            <div class="farm-fig-blc__txt">
                                {!! $servs[0]['body'] !!}
                            </div>
                        </div>
                        <div class="farm-fig-blc__bar">
                            <button class="btn btn--green farm-fig-blc__btn js-order-btn" data-title="Оставить заявку на кредитование или субсидии" data-btn="Оставить заявку">Оставить заявку</button>
                            <a href="#credits" class="farm-fig-blc__link">Подробнее</a>
                        </div>
                    </div>
                    <div class="farm__blc farm__blc--50 farm-fig-blc" id="wbuh">
                        <img src="img/farm/fig-2.png" class="farm-fig-blc__img farm-fig-blc__img--2" alt="">
                        <div class="farm-fig-blc__main">
                            <h3 class="farm-fig-blc__title">Специализированная <br>бухгалтерия</h3>
                            <div class="farm-fig-blc__txt">
                                {!! $servs[1]['body'] !!}
                            </div>
                        </div>
                        <div class="farm-fig-blc__bar">
                            <button class="btn btn--green farm-fig-blc__btn js-order-btn" data-title="Стать нашим клиентом" data-btn="Оставить заявку">Стать клиентом</button>
                            <a href="#buh" class="farm-fig-blc__link">Подробнее</a>
                        </div>
                    </div>
                    <div class="farm__blc farm__blc--50 farm-fig-blc">
                        <img src="img/farm/fig-3.png" class="farm-fig-blc__img farm-fig-blc__img--3" alt="">
                        <div class="farm-fig-blc__main">
                            <h3 class="farm-fig-blc__title">Операции с землей <br>и недвижимостью</h3>
                            <div class="farm-fig-blc__txt">
                                {!! $servs[2]['body']!!}
                            </div>
                        </div>
                        <div class="farm-fig-blc__bar">
                            <button class="btn btn--green farm-fig-blc__btn js-order-btn" data-title="Операции с землей и недвижимостью" data-btn="Воспользоваться услугой">Воспользоваться услугой</button>
                            <a href="#operation" class="farm-fig-blc__link">Подробнее</a>
                        </div>
                    </div>
                    <div class="farm__blc farm__blc--50 farm-fig-blc" id="wurob">
                        <img src="img/farm/fig-4.png" class="farm-fig-blc__img farm-fig-blc__img--4" alt="">
                        <div class="farm-fig-blc__main">
                            <h3 class="farm-fig-blc__title">Юридическое <br>сопровождение</h3>
                            <div class="farm-fig-blc__txt">
                                {!! $servs[3]['body'] !!}
                            </div>
                        </div>
                        <div class="farm-fig-blc__bar">
                            <button class="btn btn--green farm-fig-blc__btn js-order-btn" data-title="Юридическое сопровождение" data-btn="Воспользоваться услугой">Воспользоваться услугой</button>
                            <a href="#urob" class="farm-fig-blc__link">Подробнее</a>
                        </div>
                    </div>
                    <div class="farm__blc farm__blc--50 farm-fig-blc">
                        <img src="img/farm/fig-5.png" class="farm-fig-blc__img farm-fig-blc__img--5" alt="">
                        <div class="farm-fig-blc__main">
                            <h3 class="farm-fig-blc__title">Ведение учёта в <br>ФГИС «Меркурий»</h3>
                            <div class="farm-fig-blc__txt">
                                    {!! $servs[4]['body']!!}
                            </div>
                        </div>
                        <div class="farm-fig-blc__bar">
                            <button class="btn btn--green farm-fig-blc__btn js-order-btn" data-title="Оставить заявку на ведение учета в ФГИС «Меркурий»" data-btn="Оставить заявку">Воспользоваться услугой</button>
                            <a href="#fgis" class="farm-fig-blc__link">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec credit-sec">
            <div class="container">
                <a name="credits"></a>
                <h2 class="sec__title">Гранты, кредитование и субсидии</h2>
                <div class="farm__wrap">
                    <div class="farm__blc farm__blc--50 farm-txt-blc">
                            {!! $servs[5]['body'] !!}
                    </div>
                    <div class="farm__blc farm__blc--25 farm-group-blc">
                        <div class="farm-group-blc__img"><img src="img/farm/ferm-1.jpg" alt=""></div>
                        <div class="farm-group-blc__title">Кредиты <br>в коммерческих <br>банках</div>
                    </div>
                    <div class="farm__blc farm__blc--25 farm-group-blc">
                        <div class="farm-group-blc__img"><img src="img/farm/ferm-2.jpg" alt=""></div>
                        <div class="farm-group-blc__title">Поддержка <br>и субсидии <br>от государства</div>
                    </div>
                    <div class="farm__blc farm__blc--100 farm-circ-blc">
                        <div class="farm-circ-blc__wrap">
                            <div class="farm-circ-blc__item">
                                <div class="farm-circ-blc__item-img"><img src="img/farm/ring-1.png" alt=""></div>
                                <div class="farm-circ-blc__item-title">Работаем <br>в сжатые сроки</div>
                            </div>
                            <div class="farm-circ-blc__item">
                                <div class="farm-circ-blc__item-img"><img src="img/farm/ring-2.png" alt=""></div>
                                <div class="farm-circ-blc__item-title">Подбираем самые <br>выгодные условия и <br>лучшие предложения <br>на рынке</div>
                            </div>
                            <div class="farm-circ-blc__item">
                                <div class="farm-circ-blc__item-img"><img src="img/farm/ring-3.png" alt=""></div>
                                <div class="farm-circ-blc__item-title">Даже с плохой <br>кредитной историей</div>
                            </div>
                            <div class="farm-circ-blc__item">
                                <div class="farm-circ-blc__item-img"><img src="img/farm/ring-4.png" alt=""></div>
                                <div class="farm-circ-blc__item-title">Сотрудничаем с банками и знаем, как добиться поддержки бизнеса от государства</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sec__bar">
                    <button class="btn btn--green farm-fig-blc__btn js-order-btn" data-title="Оставить заявку на гранты, кредитование и субсидии" data-btn="Оставить заявку">Оставить заявку</button>
                </div>
            </div>
        </section>                
        <section class="sec buh-sec">
            <div class="container">
                <a name="buh"></a>
                <h2 class="sec__title">Бухгалтерское обслуживание</h2>
                <div class="farm__wrap">
                    <div class="farm__blc farm__blc--33 farm-main-blc">
                        <div class="farm-main-blc__img"><img src="img/farm/ferm-3.jpg" alt=""></div>
                        <div class="farm-main-blc__main">
                            <h3 class="farm-main-blc__title">Мы знаем все нюансы вашего бизнеса</h3>
                            <div class="farm-main-blc__txt">
                                    {!! $servs[6]['body'] !!}
                            </div>
                        </div>
                    </div>
                    <div class="farm__blc farm__blc--33 farm-main-blc">
                        <div class="farm-main-blc__img"><img src="img/farm/ferm-4.jpg" alt=""></div>
                        <div class="farm-main-blc__main">
                            <h3 class="farm-main-blc__title">Мы умеем экономить ваши деньги</h3>
                            <div class="farm-main-blc__txt">
                                    {!! $servs[7]['body'] !!}
                            </div>
                        </div>
                    </div>
                    <div class="farm__blc farm__blc--33 farm-main-blc">
                        <div class="farm-main-blc__img"><img src="img/farm/ferm-5.jpg" alt=""></div>
                        <div class="farm-main-blc__main">
                            <h3 class="farm-main-blc__title">Мы расширяем ваши возможности</h3>
                            <div class="farm-main-blc__txt">
                                    {!! $servs[8]['body'] !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sec__bar">
                    
                    <button class="btn btn--green farm-main-blc__bar-btn js-order-btn" data-title="Бухгалтерское обслуживание" data-btn="Заказать услугу">Стать клиентом</button>
                </div>
            </div>
        </section>
        <section class="sec oper-sec">
            <div class="container">
                <a name="operation"></a>
                <h2 class="sec__title">Операции с землей и недвижимостью</h2>
                <div class="farm__wrap">
                    <div class="farm__blc farm__blc--50 farm-main-blc farm-main-blc--bar">
                        <div class="farm-main-blc__img"><img src="img/farm/ferm-6.jpg" alt=""></div>
                        <div class="farm-main-blc__main">
                            <h3 class="farm-main-blc__title">Покупка сельскохозяйственных <br>земель</h3>
                            <div class="farm-main-blc__txt">
                                    {!! $servs[9]['body'] !!}
                                 <p></p>
                                <p></p>
                            </div>
                        </div>
                        <div class="farm-main-blc__bar">
                            <button class="btn btn--green farm-main-blc__bar-btn js-order-btn" data-title="Помощь с покупкой сельскохозяйственых земель" data-btn="Заказать услугу">Заказать услугу</button>
                        </div>
                    </div>
                    <div class="farm__blc farm__blc--50 farm-main-blc farm-main-blc--bar">
                        <div class="farm-main-blc__img"><img src="img/farm/ferm-7.jpg" alt=""></div>
                        <div class="farm-main-blc__main">
                            <h3 class="farm-main-blc__title">Приобретение сельскохозяйственной <br>недвижимости</h3>
                            <div class="farm-main-blc__txt">
                                    {!! $servs[10]['body'] !!}
                            </div>
                        </div>
                        <div class="farm-main-blc__bar">
                            <button class="btn btn--green farm-main-blc__bar-btn js-order-btn" data-title="Помощь с приобретением недвижимости" data-btn="Заказать услугу">Заказать услугу</button>
                        </div>
                    </div>
                    {{-- <div class="farm__blc farm__blc--50 farm-main-blc farm-main-blc--bar">
                        <div class="farm-main-blc__img"><img src="img/farm/ferm-8.jpg" alt=""></div>
                        <div class="farm-main-blc__main">
                            <h3 class="farm-main-blc__title">Строительство в сельском хозяйстве</h3>
                            <div class="farm-main-blc__txt">
                                    {!! $servs[11]['body'] !!}
                            </div>
                        </div>
                        <div class="farm-main-blc__bar">
                            <button class="btn btn--green farm-main-blc__bar-btn js-order-btn" data-title="Строительство в сельском хозяйстве" data-btn="Заказать услугу">Заказать услугу</button>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
        <section class="sec jur-sec">
            <div class="container">
                <a name="urob"></a>
                <h2 class="sec__title">Юридическое обслуживание</h2>
                <div class="farm__wrap">
                    <div class="farm__blc farm__blc--33 farm-main-blc farm-main-blc--bar farm-main-blc--plus">
                        <div class="farm-main-blc__img"><img src="img/farm/ferm-8.jpg" alt=""></div>
                        <div class="farm-main-blc__main">
                            <h3 class="farm-main-blc__title">Помощь в составлении договора</h3>
                            <div class="farm-main-blc__txt">
                                    {!! $servs[12]['body'] !!}
                            </div>
                        </div>
                        <div class="farm-main-blc__bar">
                            <button class="btn btn--green farm-main-blc__bar-btn js-order-btn" data-title="Помощь при составлении договора" data-btn="Заказать услугу">Заказать услугу</button>
                        </div>
                    </div>
                    <div class="farm__blc farm__blc--33 farm-main-blc farm-main-blc--bar farm-main-blc--plus">
                        <div class="farm-main-blc__img"><img src="img/farm/ferm-9.jpg" alt=""></div>
                        <div class="farm-main-blc__main">
                            <h3 class="farm-main-blc__title">Судебные споры с контрагентами и контролирующими органами</h3>
                            <div class="farm-main-blc__txt">
                                      
                                    {!! $servs[13]['body'] !!}
                            </div>
                        </div>
                        <div class="farm-main-blc__bar">
                            <button class="btn btn--green farm-main-blc__bar-btn js-order-btn" data-title="Помощь в решении судебных споров" data-btn="Заказать услугу">Заказать услугу</button>
                        </div>
                    </div>
                    <div class="farm__blc farm__blc--33 farm-main-blc farm-main-blc--bar farm-main-blc--plus">
                        <div class="farm-main-blc__img"><img src="img/farm/ferm-10.jpg" alt=""></div>
                        <div class="farm-main-blc__main">
                            <h3 class="farm-main-blc__title">Регистрация фермерских хозяйств и кооперативов</h3>
                            <div class="farm-main-blc__txt">
                                    {!! $servs[14]['body'] !!}
                            </div>
                        </div>
                        <div class="farm-main-blc__bar">
                            <button class="btn btn--green farm-main-blc__bar-btn js-order-btn" data-title="Регистрация фермерских хозяйств и кооперативов" data-btn="Заказать услугу">Заказать услугу</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec fgis-sec">
            <div class="container">
                <a name="fgis"></a>
                <h2 class="sec__title">Ведение учёта в ФГИС «Меркурий»</h2>
                <div class="farm__wrap">
                    <div class="farm__blc farm__blc--100 farm-fig-blc">
                        <img src="img/farm/fig-6.png" class="farm-fig-blc__img farm-fig-blc__img--6" alt="">
                        <div class="farm-fig-blc__main">
                            <h3 class="farm-fig-blc__title red">Важно знать!</h3>
                            <div class="farm-fig-blc__txt">
                                    {!! $servs[15]['body'] !!}
                            </div>
                        </div>
                    </div>
                    <div class="farm__blc farm__blc--50 farm-circ-blc">
                        <h3 class="farm-circ-blc__title">Кто обязан использовать <br><span class="red">ФГИС «Меркурий»?</span></h3>
                        <div class="farm-circ-blc__wrap farm-circ-blc__wrap--3">
                            <div class="farm-circ-blc__item">
                                <div class="farm-circ-blc__item-img"><img src="img/farm/ring-5.png" alt=""></div>
                                <div class="farm-circ-blc__item-txt">
                                    <b>Фермеры</b>
                                </div>
                            </div>
                            <div class="farm-circ-blc__item">
                                <div class="farm-circ-blc__item-img"><img src="img/farm/ring-6.png" alt=""></div>
                                <div class="farm-circ-blc__item-txt">
                                    <b>Перевозчики</b>
                                </div>
                            </div>
                            <div class="farm-circ-blc__item">
                                <div class="farm-circ-blc__item-img"><img src="img/farm/ring-7.png" alt=""></div>
                                <div class="farm-circ-blc__item-txt">
                                    <b>Продавцы</b>
                                </div>
                            </div>                                    
                        </div>
                    </div>
                    <div class="farm__blc farm__blc--50 farm__blc--video farm-info-blc">
                       <div class="farm__blc-video">
                           <div class="farm__blc-video-blind js-blind" data-href="https://www.youtube.com/embed/YSapgj67_u8"></div>
                       </div>                                
                    </div>
                    <div class="farm__blc farm__blc--50 farm-info-blc farm-info-blc--middle">
                        <div class="farm-info-blc__q">
                            Что делать, если вы хотите <br>сэкономить время при внедрении <br>системы в свой бизнес-процесс?
                        </div>
                    </div>
                    <div class="farm__blc farm__blc--50 farm-info-blc farm-info-blc--green">
                        <div class="farm-info-blc__strong">
                            <p>Теперь Вам не обязательно самостоятельно регистрироваться в ФГИС Меркурий.</p>
                            <p>Получение и гашение ветеринарных свидетельств АгроДоход берёт на себя. Здесь настроена необходимая инфраструктура для ведения учёта товаров по новым правилам.</p>
                        </div>
                    </div>
                    <div class="farm__blc farm__blc--100 farm-circ-blc">
                        <h3 class="farm-circ-blc__title">Что значит воспользоваться нашим сервисом по работе <br>с ФГИС «Меркурий»?</h3>
                        <div class="farm-circ-blc__wrap">
                            <div class="farm-circ-blc__item">
                                <div class="farm-circ-blc__item-img"><img src="img/farm/ring-8.png" alt=""></div>
                                <div class="farm-circ-blc__item-txt">
                                    <b>Скорость</b>
                                    <p>С нами начать работу <br>с ФГИС «Меркурий» можно <br>уже сегодня</p>
                                </div>
                            </div>
                            <div class="farm-circ-blc__item">
                                <div class="farm-circ-blc__item-img"><img src="img/farm/ring-9.png" alt=""></div>
                                <div class="farm-circ-blc__item-txt">
                                    <b>Легальность</b>
                                    <p>Работа ведётся <br>по агентскому <br>договору</p>
                                </div>
                            </div>
                            <div class="farm-circ-blc__item">
                                <div class="farm-circ-blc__item-img"><img src="img/farm/ring-10.png" alt=""></div>
                                <div class="farm-circ-blc__item-txt">
                                    <b>Простота</b>
                                    <p>Весь учёт продукции <br>осуществляется <br>нашими сотрудниками</p>
                                </div>
                            </div>
                            <div class="farm-circ-blc__item">
                                <div class="farm-circ-blc__item-img"><img src="img/farm/ring-11.png" alt=""></div>
                                <div class="farm-circ-blc__item-txt">
                                    <b>Удобство</b>
                                    <p>Вы экономите время и силы <br>и занимаетесь только <br>своим бизнесом</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="video-wrapper" id="js-video-vrapper">
                        <div class="video-wrapper__overlay js-video-close"></div>
                        <div class="video-wrapper__container">
                            <button class="btn video-wrapper__close js-video-close" title="Закрыть">Закрыть</button>
                            <div class="video-wrapper__blc" id="js-video-container">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sec__bar">
                 
                    <button class="btn btn--green farm-fig-blc__btn js-order-btn" data-title="ФГИС Меркурий" data-btn="Воспользоваться услугой">Воспользоваться услугой</button>
                </div>
            </div>
        </section>
    </div>
</main>
@stop