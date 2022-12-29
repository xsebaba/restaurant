@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if(Session::has('success'))
            <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                <div id="class-message" class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            </div>
        @endif
        
         
            @foreach($types as $type)
                @if($type->menu)
                <div class="row" style="margin-top: 24px;">
                    <div style="margin-bottom: 24px;">
        
                        <h2>{{strtoupper($type->typename)}}</h2>

                    </div>

                @foreach($type->menu as $item)
                <div class="col-sm-3">
                    <div class="card" style="width: 16rem; margin-bottom:12px; margin-right:6px;">
                        <img src="{{$item->imagepath}}" class="card-img-top" alt="Picture of a meal">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{$item->name_item}}</h5>
                            <p class="card-text">{{$item->ingredients}}</p>
                            <p class="card-text">Price: {{$item->price}} USD</p>
                            <a href="/order/{{$item->id}}" class="btn btn-info">Zamów</a>
                        </div>
                    </div>
                </div>
                @endforeach
                </div>
                @endif
                
            @endforeach

       

      
    </div>
</div>
@endsection