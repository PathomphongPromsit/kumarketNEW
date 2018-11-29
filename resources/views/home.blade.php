@extends('layouts.app')
@section('content')
<div class="container">
    @if(\Session::has('error'))
    <div class="alert alert-danger">
        {{\Session::get('error')}}
    </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">KU SRC MARKET</div>
                <?php
                if(auth()->user()->isAdmin == 1){
                    echo '<script type="text/javascript"> window.location = "print"    </script>';
                }
                if(auth()->user()->isAdmin != 1){
                    echo '<script type="text/javascript"> window.location = "userview"    </script>';
                }
                ?>
            </div>
        </div>
    </div>
</div>
@endsection
