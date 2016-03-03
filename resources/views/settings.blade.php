@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Settings</div>

                <div class="panel-body">
                    <div class="checkbox">
                        <label>
                            <input name="voice-prompts" type="checkbox" class="toggle-switch" data-toggle="toggle">
                            <span>Voice Prompts</span>
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input name="door-chime" type="checkbox" class="toggle-switch" data-toggle="toggle">
                            <span>Door Chime</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page-script')
    <script type="text/javascript">
        (function() {

            jQuery('.toggle-switch').bootstrapSwitch('state', true);

        })(jQuery);
    </script>
@endsection