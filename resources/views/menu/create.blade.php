@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-lg-6 col-md-8 col-sm-10 col-10">
           
                <h1 style="margin:40px 0 40px;"> Edit position from a menu </h1>
        
            <div>

                <form action="/menu/create" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <label for="types" name="type_id">Chose a type of your meal </label>
                        <div class="col-mb-3">
                            <select class="select" name="type_id">    
                                @foreach($types as $type)
                                <option value="{{$type->id}}">{{$type->typename}}</option>
                                @endforeach
                            </select>
                        </div>
                        
                    </div>
                    <br>
                    <div class="mb-3">
                        <label for="name_item" class="form-label">Name of a meal</label>
                        <input type="text" class="form-control" name="name_item" required>
                        
                    </div>
                    <div class="mb-3">
                        <label for="ingredients" class="form-label">Ingredients</label>
                        <input type="text" class="form-control" name="ingredients">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control" name="price" required>
                    </div>
                    <div class="mb-3">
                        <label for="picture" class="form-label">Add a picture</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </div>

@endsection