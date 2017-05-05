@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Hi, Admin! </div>

                <div class="panel-body">
                    <form action="{{route('admin')}}">
                        <input type="submit" class="btn btn-primary" value="ADMINKA">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
