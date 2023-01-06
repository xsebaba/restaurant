@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if(Session::has('mssg'))
        <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
            <div id="class-message" class="alert alert-success">
                {{Session::get('mssg')}}
            </div>
        </div>
        @endif
        
            @foreach($types as $type)
            

                <div class="row" style="margin-top: 24px;">
                    <div class="row">
                        <div class="col-3">
                            <h2>{{strtoupper($type->typename)}}</h2> 
                        </div>
                        <div class="col-1">
                            <a style="text-decoration: none;" href="/types/edit/{{$type->id}}">
                                <h2> Edit</h2> 
                            </a>
                        </div>
                        <div class="col-1">
                            <a style="text-decoration: none;" href="/types/delete/{{$type->id}}">
                                <h2> Delete</h2> 
                            </a>
                        </div>
                       
                    </div>
                @foreach($type->menu as $item)
                <div class="col-xl-2 col-lg-3 col-sm-4">
                    <div class="card" style="width: 12rem; margin-bottom:12px; margin-right:6px; box-shadow: 2px 2px 3px -2px grey;">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{$item->name_item}}</h5>
                            <p class="card-text">Price: {{$item->price}} USD</p>
                        
                        </div>
                    </div>
                </div>
                @endforeach
                </div>
            
                
            @endforeach

       

      
    </div>
</div>
@endsection