@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-3">
            <div class="card">
                <a href="/menu" style="text-decoration: none; color:#232"> 
                <div class="card-body" style="text-align:center; box-shadow: 5px 5px 10px -3px grey;">Click to check a menu <br>
                    @if (session('status'))
                        <div class="alert alert-warning" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
