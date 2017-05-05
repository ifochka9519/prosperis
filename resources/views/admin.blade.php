<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <script src="/jquery/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/admin.js"></script>
    <title>Admin</title>
</head>
<body>

@if($flag === true)

    <script>
        window.alert( "Изменения сохранены!" );
        window.location = '{{route('admin')}}';
    </script>
@endif
<div id="blue"></div>
<div class="both-margin">




<ul class="nav nav-tabs nav-stacked">
    <li role="presentation" class="active"> <details>
            <summary>
                <h4>ВСЕ ВАКАНСИИ</h4>
            </summary>
            <div class="row">
                <div class="col-md-3"></div>

                <div class="col-md-6">
                    @foreach($jobs as $job)
                        <div  class="fon margin-bottom">
                            <img src="{{$job->image}}" width="200px" alt="">
                            <h4>{{$job->title}}
                                <a id="delete{{$job->id}}" hidden href="{{route('deleteJob',$job->id)}}"></a>
                                <span job="{{$job->id}}"    class="glyphicon glyphicon-remove text-admin red remove" aria-hidden="true"></span>
                                <a href="{{route('updateJobView',$job->id)}}"><span class="glyphicon glyphicon-pencil text-admin edit" aria-hidden="true"></span></a>
                            </h4>
                        </div>
                    @endforeach
                </div>

            </div>
        </details></li>
    <li role="presentation"> <details>
            <summary>
                <h4>НОВАЯ ВАКАНСИЯ</h4>
            </summary>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <form class=" form-horizontal" role="form" action="{{route('createJob')}}" method="post"
                          enctype="multipart/form-data">
                        <label for="title">Название</label>
                        <input class="form-control" name="title" type="text">
                        <label for="title">Описание</label>
                        <input class="form-control" name="description" type="text">
                        <label for="money">Зарплата</label>
                        <input class="form-control" name="money" type="text">
                        <label for="image">Изображение</label>
                        <input id="image" class="form-control" type="file" name="image" accept="image/*"
                               value="" autofocus><br>
                        <button class="form-control btn btn-primary" type="submit">ДОБАВИТЬ</button>
                        {{ csrf_field() }}
                    </form>
                </div>

            </div>
        </details></li>
    <li role="presentation"><details>
            <summary>
                <h4>ЗАГОЛОВКИ</h4>
            </summary>
            <div class="row">
                <div class="col-md-3"></div>

                <div class="col-md-6">
                    @foreach($titles as $title)
                        <div  class="fon margin-bottom">
                            <h4 class="border-bottom"><span class="glyphicon glyphicon-circle-arrow-right margin-bottom-2" aria-hidden="true"></span>{{$title->description}}</h4>
                            <h5 >{{$title->text}}
                                <span text="{{$title->text}}" description="{{$title->description}}" id="{{$title->id}}" class="glyphicon glyphicon-pencil text-admin edit-title margin-bottom-2" aria-hidden="true"></span>
                            </h5>
                        </div>
                    @endforeach
                </div>

            </div>
        </details></li>
</ul>






    </div>


<div class="modal fade" tabindex="-1" role="dialog" id="modal_change">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Изменить заголовок</h4>
            </div>
            <div class="modal-body">

                <form>

                    <label for="text_change">Текст</label><br>
                    <textarea id="text_change" name="text_change"&hellip;></textarea><br>

                    <label for="description_change">Описание</label><br>
                    <textarea  id="description_change" name="description_change"&hellip;></textarea><br>

                    <input  disabled  id="id_change"  name="id_change" type="hidden" value=""&hellip;>
                </form>
            </div>




            <div class="modal-footer">
                <button id="close" type="button" class="btn btn-default" data-dismiss="modal">Закрить</button>
                <button id="save_change" type="button" class="btn btn-primary">Сохранить</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
    var token = '{{Session::token()}}';
    var urlT = '{{route('saveChangeText')}}';
</script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>