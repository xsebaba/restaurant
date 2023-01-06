@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-lg-6 col-md-8 col-sm-10 col-10">
                <h1 style="margin:40px 0 40px;"> Enter new type of a meal </h1>
            <div>

                <form action="/types/create" method="POST">
                    @csrf
                    <br>
                    <div class="mb-3">
                        <label for="typename" class="form-label">Enter type of a meal</label>
                        <input type="text" class="form-control" name="typename" required>
                    </div>
                                        
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </div>

@endsection