@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="alert alert-success" role="alert">Alarm is currently activated</div>
            <div class="panel panel-default">
                <div class="panel-heading">PISafe Dashboard</div>

                <div class="panel-body">
                    <div class="jumbotron">
                        <h1>Hello, world!</h1>
                        <p>...</p>
                        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
                    </div>

                    <div class="alert alert-success" role="alert">...</div>
                    <div class="alert alert-info" role="alert">...</div>
                    <div class="alert alert-warning" role="alert">...</div>
                    <div class="alert alert-danger" role="alert">...</div>

                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            <span class="sr-only">60% Complete</span>
                        </div>
                    </div>



                    <div class="panel panel-default">
                        <div class="panel-heading">Panel heading without title</div>
                        <div class="panel-body">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                    60%
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
