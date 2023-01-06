@extends('layouts.app')

@section('content')
<div class="container">
        <div class="col-lg-6 col-md-8 col-sm-10 col-10">
           
                <h1 style="margin:40px 0 40px;"> Delete position from a menu </h1>
        
            
                    <div class="mb-3">
                        <h5>Name of a meal {{$menu->name_item}} </h5>
                        
                    </div>
                    <div class="mb-3">
                        <h5>Ingredients 
                        {{$menu->ingredients}} </h5>
                    </div>
                    <div class="mb-3">
                        <h5>Price {{$menu->price}} </h5>
                    </div>
                    <div class="mb-3">
                        
                        <div class="picture-wrapper">
                            <img src="{{$menu->imagepath}}" alt="Picture of a meal" style="max-width:300px"/>
                        </div>
                        
                    </div>
                    
                    
            
            </div>
            <div>
                <h4> Do you really want to delete item? </h4>
                    <div class="row">
                        <form action="/menu/delete/{{$menu->id}}" method="POST">
                            @csrf 
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Yes</button>
                        </form>
                        <a href="/menu">
                            <button type="submit" class="btn btn-success">No, I dont want to delete</button>
                        </a>
                    </div>
                </div>
        </div>

    </div>


@endsection