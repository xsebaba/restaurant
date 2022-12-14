@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <!--  <div class="col-md-8"> -->
        
         
            @foreach($types as $type)
                @if($type->menu)
                <div class="row">
                    <div>
        
                        <h2>{{$type->typename}}</h2>

                    </div>

                @foreach($type->menu as $item)
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem; margin-bottom:12px;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{$item->name_item}}</h5>
                            <p class="card-text">{{$item->ingredients}}</p>
                            <p class="card-text">Price: {{$item->price}} USD</p>
                            <a href="#" class="btn btn-info">Zamów</a>
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