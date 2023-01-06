@extends('layouts.app')

@section('content')
<div class="container">
        <div class="col-lg-6 col-md-8 col-sm-10 col-10">
           
                <h1 style="margin:40px 0 40px;"> Edit type of a meal </h1>
        
            <div class="">
                <form action="/types/edit/{{$type->id}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name_item" class="form-label">Change a typename</label>
                        <input type="text" class="form-control" name="typename" value="{{$type->typename}}">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

            <div class="mb-3" style="margin-top:10px;">
                <form action="/types">
                    <input type="submit" class="btn btn-info" value="Go back"/>
                </form>
            </div>
        </div>

    </div>
@endsection