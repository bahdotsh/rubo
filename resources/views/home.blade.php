@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dash</div>

                <div class="panel-body">
                  <?php if(auth()->user()->type == 1){?>
                    <div class="panel-body">
                      <a href="{{url('admin/routes')}}">Admin</a>
                    </div><?php }
                    else echo '<div class="panel-heading">Normal User</div>';?>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
