@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Monitoring</div>
                    <div id="userApp"></div>
                <div class="panel-footer">
                    <input type="button" class="btn-primary btn-block save" onclick="console.log(this.props);" value="Save" />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
