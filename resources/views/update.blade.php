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
<hr width="2%">

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">

<form class=" form-horizontal" role="form" action="{{route('updateJob')}}" method="post"
      enctype="multipart/form-data">
    <input type="hidden" name="id" value="{{$job->id}}">
    <div class="form-group"><br>
    <label for="title">Название</label>
    <input class="form-control" name="title" type="text" value="{{$job->title}}">
    </div>
    <div class="form-group"><br>
    <label for="title">Описание</label>
    <input class="form-control" name="description" type="text" value="{{$job->description}}">
    </div>
    <div class="form-group"><br>
    <label for="money">Зарплата</label>
    <input class="form-control" name="money" type="text"  value="{{$job->money}}">
    </div>

        <div class="form-group"><br>
            <label for="image" class="control-label">Изображение:</label>
            <img src="{{ $job->image }}" alt="" width="100px" height="100px" class="img-circle">

        </div>

    <div class="form-group">
        <label for="image" class=" control-label">Поменять изображенние:</label>
        <div class="">
            <input width="50%" id="image" class="form-control" type="file" name="image" accept="image/*"
                   value="{{ $job->image }}" autofocus>
        </div>
    </div>
    {{ csrf_field() }}

    <button id="save_button" class="form-control btn btn-primary" type="submit">Сохранить</button>
</form>

    </div>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>