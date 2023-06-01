@extends('layout.app')

@section('content')
<section class="bg-dark text-white">
    <div class="container py-5">
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors-> all() as $error)
                        <li><strong>Error</strong>{{$error}}</li>
                    @endforeach
                </ul>
                 
            </div>
            
        @endif
        <form class="row g-3" action="{{route('comics.update', $comic->id)}}" method="post">
            @csrf
            @method('PUT')

            <h4>Edit {{$comic->title}}</h4>
            
            <div class="col-12">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{old('title', $comic->title)}}">
                @error('title')
                    <div class="alert alert-danger" role="alert">
                        <strong>Error:</strong>{{$message}}
                    </div>
                @enderror
            </div>
            <div class="col-12">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" value="{{old('description', $comic->description)}}" id="description" rows="5">{{$comic->description}}</textarea>
                @error('description')
                    <div class="alert alert-danger" role="alert">
                        <strong>Error:</strong>{{$message}}
                    </div>
                @enderror
            </div>
            <div class="col-12">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" name="thumb" id="thumb" class="form-control" aria-describedby="thumbHelper" value="{{old('thumb', $comic->thumb)}}">
                @error('thumb')
                    <div class="alert alert-danger" role="alert">
                        <strong>Error:</strong>{{$message}}
                    </div>
                @enderror
            </div>
            <div class="col-md-4">
                <label for="price" class="form-label">Price</label>
                <input type="text" step="0.01" name="price" id="price" class="form-control" aria-describedby="priceHelper" value="{{old('price', $comic->price)}}">
                @error('price')
                    <div class="alert alert-danger" role="alert">
                        <strong>Error:</strong>{{$message}}
                    </div>
                @enderror
            </div>
            <div class="col-md-2">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" name="series" value="{{old('series', $comic->series)}}">
                @error('series')
                    <div class="alert alert-danger" role="alert">
                        <strong>Error:</strong>{{$message}}
                    </div>
                @enderror
            </div>
            <div class="col-md-2">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{old('sale_date', $comic->sale_date)}}">
                @error('sale_date')
                    <div class="alert alert-danger" role="alert">
                        <strong>Error:</strong>{{$message}}
                    </div>
                @enderror
            </div>
            <div class="col-md-4">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" name="type" value="{{old('type', $comic->type)}}">
                @error('type')
                    <div class="alert alert-danger" role="alert">
                        <strong>Error:</strong>{{$message}}
                    </div>
                @enderror
            </div>
            <div class="col-md-4 mx-auto text-center pt-3">
                <button type="submit" class="btn btn-light text-dark px-4">Send</button>
            </div>
        </form>
    </div>
</section>


@endsection