@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="    col-md-10" style="box-shadow: 1px 1px 20px -5px grey;">
            <div>
                <h1> Welcome to admin panel </h1>
                <p> Edit choosen menu item or delete it. If you want to add new item find proper function below the table</p>
            </div>
            <div>
               
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col"></th>
                        <th scope="col">Type of a meal</th>
                        <th scope="col">Picture</th>
                        <th scope="col">Name</th>
                        <th scope="col">Ingredients/description</th>
                        <th scope="col">Price</th>
                        <th scope="col">Update</th>
                        <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($menus as $menu)
                        <tr>
                        <th scope="row"></th>
                            <td>{{$menu->type->typename}}</td>
                            <td><img src="{{asset('storage/' . $menu->imagepath)}}" class="img-fluid" style="max-height:50px; max-width:100px;" alt="Picture of a meal"></td>
                            <td>{{$menu->name_item}}</td>
                            <td>{{$menu->ingredients}}</td>
                            <td>{{$menu->price}}</td>
                            <td>
                                <a href="menu/edit/{{$menu->id}}">
                                    <button type="button" class="btn btn-warning">Update</button>
                                </a>
                            </td>
                            <td>
                                <a href="menu/delete/{{$menu->id}}"><button type="button" class="btn btn-danger">Delete</button>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div style="margin:10px 0 10px 0;">
                <br>
               <a href="/menu/create"style="text-decoration:none;" >
                    <button type="button" class="btn btn-primary"> Click here to add a <b>new position into your menu </b> </button>
                </a>
                <a href="/types" style="text-decoration:none;">
                    <button type="button" class="btn btn-primary"> Click here to edit a <b>type of menu position</b> </button>
                </a>
                <a href="/types/create" style="text-decoration:none;">
                    <button type="button" class="btn btn-primary"> Click here to add a <b>new type of your meal </b></button>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
