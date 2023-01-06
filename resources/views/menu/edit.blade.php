@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-lg-6 col-md-8 col-sm-10 col-10">
           
                <h1 style="margin:40px 0 40px;"> Edit position from a menu </h1>
        
            <div class="">
                <form action="/menu/edit/{{$menu->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name_item" class="form-label">Name of a meal</label>
                        <input type="text" class="form-control" name="name_item" value="{{$menu->name_item}}">
                        
                    </div>
                    <div class="mb-3">
                        <label for="ingredients" class="form-label">Ingredients</label>
                        <input type="text" class="form-control" name="ingredients" value="{{$menu->ingredients}}">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control" name="price" value="{{$menu->price}}"></input>
                    </div>
                    <div class="mb-3">
                        <label for="picture" class="form-label">Change a picture</label>
                        <div class="picture-wrapper">
                            <img src="{{asset('storage/' . $menu->imagepath)}}" alt="Picture of a meal" style="max-width:300px"/>
                        </div>
                        <input type="file" class="form-control" name="image" value="{{$menu->imagepath}}"></input>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

            <div class="mb-3" style="margin-top:10px;">
                <form action="/admin">
                    <input type="submit" class="btn btn-info" value="Go back"/>
                </form>
            </div>
        </div>

    </div>

@endsection