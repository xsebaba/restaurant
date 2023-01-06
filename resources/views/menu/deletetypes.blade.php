@extends('layouts.app')

@section('content')
<div class="container">
        <div class="col-lg-6 col-md-8 col-sm-10 col-10">
           
                <h1 style="margin:40px 0 40px;"> Delete position of a type</h1>
                    <div class="mb-3">
                        <h3>Name of a meal <b>{{$type->typename}}</b> </h3>
                    </div>
                
            </div>
            <div>
                @if(!$type->menu->count())
                <h4> Do you really want to delete item? </h4>
                    <div class="row">
                        <form action="/types/delete/{{$type->id}}" method="POST">
                            @csrf 
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Yes</button>
                        </form>
                        <a href="/types">
                            <button type="submit" class="btn btn-success">No, I dont want to delete</button>
                        </a>
                    </div>
                @else
                <h4> Unfortunately there are still menu items attached to this type. Please delete menu items that belongs to <b>{{$type->typename}} </b>first!</h4>

                <div class="mb-3" style="margin-top:10px;">
                    <form action="/types">
                        <input type="submit" class="btn btn-info" value="Go back"/>
                    </form>
                @endif
                </div>
            </div>
        </div>
</div>


@endsection