@extends('layouts/app')

@section('content')

    <div class="container py-5">
        <h1 class="text-center mb-4">Edit a comic</h1>

        
        <form action="{{route('comics.update', $comic->id)}}" method="POST">
            @csrf
            @method('PUT')
    
            <div class="mb-3">
              <label for="title" class="form-label">Title :</label>
              <input type="text" value="{{$comic->title}}" class="form-control" id="title" name="title">
            </div>
    
            <div class="mb-3">
                <label for="description" class="form-label">Description :</label>
                <textarea type="text" class="form-control" id="description" rows='6' name="description">{{$comic->description}}</textarea>
            </div>
    
            <div class="mb-3">
                <label for="thumb" class="form-label">Add a URL for a Thumb :</label>
                <input type="text" value="{{$comic->thumb}}" class="form-control" id="thumb" name="thumb">
            </div>

            <div class="row">
                <div class="mb-3 col">
                    <label for="price" class="form-label">Price :</label>
                    <input type="text" value="{{$comic->price}}" class="form-control" id="price" name="price" placeholder='es: $20.00'>
                </div>
    
                <div class="mb-3 col">
                    <label for="series" class="form-label">Series :</label>
                    <input type="text" value="{{$comic->series}}" class="form-control" id="series" name="series">
                </div>
        
                <div class="mb-3 col">
                    <label for="sale_date" class="form-label">Sales Date :</label>
                    <input type="date" value="{{$comic->sale_date}}" class="form-control" id="sale_date" name="sale_date" placeholder='YY-MM-DD'>
                </div>

                <div class="mb-3 col">
                    <label for="type" class="form-label">Type :</label>
                    <input type="text" value="{{$comic->type}}" class="form-control" id="type" name="type">
                </div>
            </div>


            <div class="mb-3">
                <label for="artists" class="form-label">Artists :</label>
                <textarea type="text" class="form-control" id="artists" name="artists" placeholder='es: name, name, ...'>{{$comic->artists}}</textarea>
            </div>

            <div class="mb-5">
                <label for="writers" class="form-label">Writers :</label>
                <textarea type="text" class="form-control" id="writers" name="writers" placeholder='es: name, name, ...'>{{$comic->writers}}</textarea>
            </div>

            
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary  ">Save changes</button>
                
                <a class="btn btn-success " href="{{route('comics.show', $comic->id)}}">Cancel changes</a>
            </div>

        </form>

    </div>
@endsection