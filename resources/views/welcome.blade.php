@extends('layouts.site')

@section('title')
    prosperis
@endsection

@section('content')

    @if (count($errors) > 0)
        <script>
            window.alert( "Проверьте введенные вами данные!" );
        </script>
    @endif

    @if($flag === true)

        <script>
           window.alert( "Наш менеджер свяжется с вами в течении 48 часов!" );
           window.location = '{{route('index')}}';
        </script>
        @endif


<div class="first" id="1">
    <div class="row hight-header">
        <div class=" header both-padding">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                <img align="center" class="order2"  src="img/prosperis-logo.png"  height="130px" alt="">
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 header-text">
                <button note="подбор визы"  class="btn btn-danger red-button order1">Заказать звонок</button>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 header-text">

                <img height="20px" src="img/email.png"> <a href="mailto:prosperis.visa@gmail.com">prosperis.visa@gmail.com</a>
            <br> <br>
                <img height="20px" src="img/skype.png"><a href="skype:prosperis.visa?call"> prosperis.visa</a>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 header-text">
                <a href="tel:+380978563997"><h4>+380978563997</h4></a>
                <a href="tel:+380665236891"><h4>+380665236891</h4></a>
            </div>


        </div>
    </div>
    <div class="row  text-our-service both-margin">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <h4 align="center" class="text maintext"> {{$titles[0]->text}}</h4>
            <h4 align="center" class="text maintext"> {{$titles[1]->text}}</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-xs-12 col-sm-12 col-md-6 ">
            <img src="img/girl2.png" width="55%" id="girl">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4">
            <form action="{{route('createOrder')}}" class="order" method="post">

                <h3 align="center">При оформлении любой </h3>
                <h3 align="center">визы до 30.06.2017 </h3>
                <p align="center" class="red-text">СКИДКА 300 ГРН!</p>
                <input type="text" name="name" placeholder="Имя:" class="form-control"><br class="br">
                <input type="text" name="phone" placeholder="Телефон:" class="form-control"><br>
                <input  type="submit" value="Оставить заявку" class="order2 btn btn-danger form-control">
                <br><br>
                <p>Оставьте Вашу заявку для участия в акции!</p>
                {{ csrf_field() }}
            </form>
        </div>
    </div>
</div>
<div class="second-first" id="2">
    <div class="row">
        <h2 align="center">{{$titles[2]->text}}</h2>
    </div>
    <div class="row text-our-services both-margin-15">
        <h3 align="center">{{$titles[3]->text}}</h3>
    </div>
    <div class="row photo-three both-margin-15">
        <div class="col-xs-12 col-md-4 padding-photo">
            <div class="fon">
            <img width="100%" src="img/poland.jpg"><br><br>
            <input type="button" note="Визы в Польшу" class="btn btn-danger form-control order1" value="Узнать подробнее">
            </div>
        </div>
        <div class="col-xs-12 col-md-4 padding-photo">
            <div class="fon">
            <img width="100%" src="img/litva.jpg"><br><br>
            <input type="button" note="Визы в Литву" class="btn btn-danger form-control order1" value="Узнать подробнее">
            </div>
        </div>
        <div class="col-xs-12 col-md-4 padding-photo">
            <div class="fon">
            <img width="100%" src="img/spain.jpg"><br><br>
            <input type="button" note="Визы в Испанию" class="btn btn-danger form-control order1" value="Узнать подробнее">
            </div>
        </div>
    </div>
    <div class="row text-our-services both-margin-15 margin-bottom">
        <h3 align="center">{{$titles[4]->text}}</h3>
    </div>

    <div class="row marg both-margin-15 ">
        <div class="col-xs-12 col-md-6 ">
            <div class="fon margin-bottom-5 padding-2">
            <picture>
                <source srcset="img/image-3-1-small.jpg" media="(min-device-width:220px) and (max-device-width:319px)">
                <source srcset="img/image-3-1-small.jpg" media="(min-device-width:320px) and (max-device-width:480px)">
                <source srcset="img/image-3-1.jpg" media="(min-device-width:481px) and (max-device-width:1920px)">
                <img class="img-border" width="100%" srcset="" alt="Основное изображение">
            </picture>

            <input type="button" note="Визы в Польшу на 6 мес." class="btn btn-danger form-control margin-top-5 order1" value="Узнать подробнее">
            </div></div>
        <div class="col-xs-12 col-md-6 ">
            <div class="fon margin-bottom-5 padding-2">
            <picture>
                <source srcset="img/image-3-2-small.jpg" media="(min-device-width:220px) and (max-device-width:319px)">
                <source srcset="img/image-3-2-small.jpg" media="(min-device-width:320px) and (max-device-width:480px)">
                <source srcset="img/image-3-2.jpg" media="(min-device-width:481px) and (max-device-width:1920px)">
                <img class="img-border" width="100%" srcset="" alt="Основное изображение">
            </picture>

            <input type="button" note="Визы в Польшу на 12 мес." class="btn btn-danger form-control margin-top-5 order1" value="Узнать подробнее">
            </div></div>
    </div>
    {{--<div class="row text-our-services margin-bottom both-margin-15">
        <h3 align="center">Визы в Словакию</h3>
    </div>

    <div class="row photo-three both-margin-15">
        <picture>
            <source srcset="img/image-4-small.jpg" media="(min-device-width:220px) and (max-device-width:319px)">
            <source srcset="img/image-4-small.jpg" media="(min-device-width:320px) and (max-device-width:480px)">
            <source srcset="img/image-4.jpg" media="(min-device-width:481px) and (max-device-width:1920px)">
            <img width="100%" srcset="" alt="Основное изображение">
        </picture>
    </div>
    <div class="row marg both-margin-15">
        <div class="col-xs-12 ">
            <input type="button" class="btn btn-danger form-control margin-top-2" value="Узнать подробнее">
        </div>
    </div>--}}
    <div class="row text-our-services both-margin-15">
        <h3 align="center">{{$titles[5]->text}}</h3>
    </div>
    <div class="row photo-three both-margin-15">
        <div class="col-xs-12 col-md-4 padding-photo">
            <div class="fon">
            <img width="100%" src="img/adds-1.jpg"><br><br>
            <input type="button" note="Срочное приглашение" class="btn btn-danger form-control order1" value="Узнать подробнее">
            </div>
            </div>
        <div class="col-xs-12 col-md-4 padding-photo ">
            <div class="fon">
            <img width="100%" src="img/adds-2.jpg"><br><br>
            <input type="button" note="Страховка Княжа" class="btn btn-danger form-control order1" value="Узнать подробнее">
            </div>
        </div>
        <div class="col-xs-12 col-md-4 padding-photo ">
            <div class="fon">
            <img width="100%" src="img/adds-3.jpg"><br><br>
            <input type="button" note="Страховка PZU" class="btn btn-danger form-control order1" value="Узнать подробнее">
            </div>
        </div>
    </div>
</div>
<div class="second-second" id="3">
    <div class="row text-our-services both-margin-15 margin-bottom">
        <h3 align="center">{{$titles[6]->text}}</h3>
    </div>

    @if(count($jobs) > 10)
        @for($i=0; $i<10; $i++)
            @if(($i%2 == 0) || ($i == 0))<div class=" row both-margin-15 "> @endif

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 all-job img-job border-light">
                    <img class="img-border" width="100%"  src="{{$jobs[$i]->image}}"  alt="{{$jobs[$i]->description}}">
                </div>

                <div class="col-xs-12 col-sm-6 col-md-12 col-lg-3 all-job">
                    <h3 class="bold ">{{$jobs[$i]->title}}</h3>
                    <h4 >Зарплата от {{$jobs[$i]->money}} грн</h4>
                    <input note="{{$jobs[$i]->title}}" type="button" class="btn btn-danger order1 margin-bottom" value="Получить  вакансию">
                </div>
                @if(($i%2 != 0))</div> @endif
        @endfor
        @else

        @for($i=0; $i<count($jobs); $i++)
            @if(($i%2 == 0) || ($i == 0))<div class=" row both-margin-15 "> @endif

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 all-job img-job border-light">
                    <img class="img-border" width="100%"  src="{{$jobs[$i]->image}}"  alt="{{$jobs[$i]->description}}">
                </div>

                <div class="col-xs-12 col-sm-6 col-md-12 col-lg-3 all-job">
                    <h3 class="bold ">{{$jobs[$i]->title}}</h3>
                    <h4 >Зарплата от {{$jobs[$i]->money}} грн</h4>
                    <input note="{{$jobs[$i]->title}}" type="button" class="btn btn-danger order1 margin-bottom" value="Получить  вакансию">
                </div>
                @if(($i%2 != 0))</div> @endif
        @endfor
        @endif


    @if(count($jobs) > 10)
    <details>
        <summary  id="more">
            <h4 id="text-sum" class="order2" align="center">ПОКАЗАТЬ ВСЕ</h4>
        </summary>
        @for($i=10; $i<count($jobs); $i++)
            @if(($i%2 == 0) || ($i == 0))<div class=" row both-margin-15 "> @endif

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 all-job img-job border-light">
                    <img width="100%"  src="{{$jobs[$i]->image}}"  alt="">
                </div>

                <div class="col-xs-12 col-sm-6 col-md-12 col-lg-3 all-job">
                    <h3 class="bold ">{{$jobs[$i]->title}}</h3>
                    <h4 >Зарплата от {{$jobs[$i]->money}} грн</h4>
                    <input note="{{$jobs[$i]->title}}" type="button" class="btn btn-danger order1 margin-bottom" value="Получить  вакансию">
                </div>
                @if(($i%2 != 0))</div> @endif
        @endfor
    </details>
        @endif

</div>
<div class="third" id="4">
    <div class="row text-our-services both-margin-15 margin-bottom">
        <h3 align="center">{{$titles[7]->text}}</h3>
    </div>
    <div class="advantages row both-margin-15">
        <div class="col-lg-1"></div>
        <div class="col-md-6 col-lg-2 col-sm-12 col-xs-12">
            <img width="100%" class="img-border"   src="img/advantage-1.jpg"  alt="">
            <h4 align="center">Надежность</h4>
        </div>
        <div class="col-md-6 col-lg-2  col-sm-12 col-xs-12">
            <img width="100%" class="img-border"   src="img/advantage-2.jpg"  alt="">
            <h4 align="center">Скорость предоставления услуг</h4>
        </div>
        <div class="col-md-6 col-lg-2 col-sm-12 col-xs-12">
            <img width="100%"  class="img-border"  src="img/advantage-3.jpg"  alt="">
            <h4>Индивидуальный подход к клиенту</h4>
        </div>
        <div class="col-md-6  col-lg-2 col-sm-12 col-xs-12">
            <img width="100%"  class="img-border"  src="img/advantage-4.jpg"  alt="">
            <h4 align="center">Оптимальные цены</h4>
        </div>
        <div class="col-md-6 col-lg-2 col-sm-12 col-xs-12">
            <img width="100%" class="img-border"   src="img/advantage-5.jpg"  alt="">
            <h4 align="center">Только качественный подход к делу</h4>
        </div>
        <div class="col-lg-1"></div>

    </div>
    <div class="row text-our-services both-margin-15 margin-bottom">
        <h3 align="center">{{$titles[8]->text}}</h3>
    </div>
    <div class="row photo-three both-margin-15">
        <picture>
            <source srcset="img/way-small.png" media="(min-device-width:220px) and (max-device-width:319px)">
            <source srcset="img/way-small.png" media="(min-device-width:320px) and (max-device-width:480px)">
            <source srcset="img/way.png" media="(min-device-width:481px) and (max-device-width:1920px)">
            <img width="100%" srcset="" alt="Основное изображение">
        </picture>
    </div>
</div>


<div class="modal fade" tabindex="-1" role="dialog" id="call-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Заказать звонок</h4>
                <h5 class="modal-title">Наш менеджер свяжется с вами в ближайшее время!</h5>

            </div>
            <div class="modal-body">

                <form>

                <label for="name">Имя</label><br>
                <input id="name-order" name="name" type="text" value=""&hellip;><br>

                <label for="phone">Телефон</label><br>
                <input  id="phone-order" name="phone" type="text" value=""&hellip;><br>

                    <input  disabled  id="note-order"  name="note-order" type="hidden" value=""&hellip;>
                </form>
            </div>




            <div class="modal-footer">
                <button id="close-order" type="button" class="btn btn-default" data-dismiss="modal">Закрить</button>
                <button id="save-order" type="button" class="btn btn-primary">Отправить</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->




<div class="modal fade" tabindex="-1" role="dialog" id="modal-ok">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h5 class="modal-title">Наш менеджер свяжется с вами в течении 48 часов!</h5>
            </div>
            <div class="modal-footer">
                <button id="close-order" type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->








<div class="row text-our-services both-margin-15 margin-bottom">
    <h3 align="center">{{$titles[9]->text}}</h3>
</div>
<div class="row both-margin both-margin">

    <div class="col-md-6">

        <h4>г. Черновцы, ул.Небесной Сотни, 23А</h4>
        <div id="map1" style="height: 300px; width: 100%"></div>

    </div>
    <div class="col-md-6">

        <h4>г. Черновцы ул. Главная, 122А офис 214 и 216</h4>
        <div id="map2" style="height: 300px; width: 100%"></div>

    </div>

</div>


<div class="fourth call" id="5">
    <div class="row  both-margin-15 margin-bottom">
        <div class="col-md-12 col-lg-3 col-sm-12 col-xs-12 header-text">
            <h4 class="padding-text call-text" align="center">ПОДБОР ВИЗЫ ПОД ВАШИ ПЛАНЫ</h4>
            <h5 class="call-text" align="center">Наши специалисты сделают подбор визы под Ваш маршрут или Ваши цели, учитывая все требования.
                Для этого Вам просто нужно заказать звонок.</h5>
            <input  type="button" note="подбор визы" class="btn btn-danger form-control order1" value="Заказать звонок">
        </div>
        <div class="col-md-12 col-lg-4 col-sm-12 col-xs-12">
            <img src="img/girl2.png" width="100%" >
        </div>
        <div class="col-md-12 col-lg-5 col-sm-12 col-xs-12 header-text">
            <h4 class="call-text" align="center">БЕСПЛАТНАЯ КОНСУЛЬТАЦИЯ ПО РАБОТЕ В ПОЛЬШЕ</h4>
            <h5 class="call-text" align="center">Если Вы еще не определились, на какой вакансии хотите работать,
                наши специалисты помогут Вам с индивидуальным подбором вакансии в Польше.</h5>
            <form action="{{route('createOrder')}}" method="post">
                <input type="text" name="name" placeholder="Имя:" class="form-control "><br class="br">
                <input type="text" name="phone" placeholder="Телефон:" class="form-control "><br>
                <input type="submit" value="Заказать звонок" class="btn btn-danger form-control order2">
                {{ csrf_field() }}
            </form>
        </div>
    </div>
</div>
<script>
    var map1;
    var map2;
    function initMaps() {
        var uluru1 = {lat: 48.262345, lng: 25.940697};
        var uluru2 = {lat: 48.271537, lng: 25.945974};

        map1 = new google.maps.Map(document.getElementById('map1'), {
            zoom: 17,
            center: uluru1,
            scrollwheel: false
        });
        var marker1 = new google.maps.Marker({
            position: uluru1,
            map: map1
        });
        map2 = new google.maps.Map(document.getElementById('map2'), {
            zoom: 17,
            center: uluru2,
            scrollwheel: false
        });

        var marker2 = new google.maps.Marker({
            position: uluru2,
            map: map2
        });


    }



</script>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyADpTasWQH26bRlYP1zkZaGUDlJFRdvMGg&callback=initMaps">
</script>

<script>
    var token = '{{Session::token()}}';
    var url_save = '{{route('createOrder')}}';
</script>
    <div id="first" ><img id="up" src="img/up.png" alt=""></div>
    <h6 align="center">© 2017 Prosperis | Все права защищены</h6>
@endsection