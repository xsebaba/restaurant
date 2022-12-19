@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-3">
            <div class="card">
                <a href="/" style="text-decoration: none; color:#232">
                <div class="card-body" style="text-align:center;">
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
