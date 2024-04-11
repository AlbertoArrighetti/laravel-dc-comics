@extends('layouts/app')

@section('content')

    <div class="container py-5">
        <h1>Add a new comic</h1>

        <form action="{{route('comics.store')}}" method="POST">
            @csrf
    
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control" id="title" name="title" required>
            </div>
    
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea type="text" class="form-control" id="description" name="description"></textarea>
            </div>
    
            <div class="mb-3">
                <label for="thumb" class="form-label">Add a URL for a Thumb</label>
                <input type="text" class="form-control" id="thumb" name="thumb">
            </div>

            <div class="row">
                <div class="mb-3 col">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder='es: $20.00' required>
                </div>
    
                <div class="mb-3 col">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control" id="series" name="series" required>
                </div>
        
                <div class="mb-3 col">
                    <label for="sale_date" class="form-label">Sales Date</label>
                    <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder='YY-MM-DD' required>
                </div>

                <div class="mb-3 col">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" class="form-control" id="type" name="type" required>
                </div>
            </div>


            <div class="mb-3">
                <label for="artists" class="form-label">Artists</label>
                <textarea type="text" class="form-control" id="artists" name="artists" placeholder='es: name, name, ...' required></textarea>
            </div>

            <div class="mb-5">
                <label for="writers" class="form-label">Writers</label>
                <textarea type="text" class="form-control" id="writers" name="writers" placeholder='es: name, name, ...' required></textarea>
            </div>





    
            <button type="submit" class="btn btn-primary">Salva</button>
    
        </form>

        <br>
        <a href="{{route('comics.index')}}">Torna alla lista</a>
    </div>
@endsection