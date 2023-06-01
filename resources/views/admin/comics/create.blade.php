@extends('layout.app')

@section('content')
<section class="bg-dark text-white">
    <div class="container py-5">
        <form class="row g-3" action="{{route('comics.store')}}" method="post">
            @csrf

            <div class="col-12">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is invalid @enderror" id="title" name="title">
                @error('title')
                    <div class="alert alert-danger" role="alert">
                        <strong>Error:</strong>{{$message}}
                    </div>
                @enderror
            </div>
            <div class="col-12">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control @error('description') is invalid @enderror" type="text" id="description" name="description" rows="3" ></textarea>
                @error('description')
                    <div class="alert alert-danger" role="alert">
                        <strong>Error:</strong>{{$message}}
                    </div>
                @enderror
            </div>
            <div class="col-12">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control @error('thumb') is invalid @enderror" id="thumb" name="thumb">
                @error('thumb')
                    <div class="alert alert-danger" role="alert">
                        <strong>Error:</strong>{{$message}}
                    </div>
                @enderror
            </div>
            <div class="col-md-4">
                <label for="price" class="form-label">Price</label>
                <input type="number" step="0.01" name="price" id="price" class="form-control @error('price') is invalid @enderror" placeholder="99.99" aria-describedby="priceHelper">
                @error('price')
                    <div class="alert alert-danger" role="alert">
                        <strong>Error:</strong>{{$message}}
                    </div>
                @enderror
            </div>
            <div class="col-md-2">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control @error('series') is invalid @enderror" id="series" name="series">
                @error('series')
                    <div class="alert alert-danger" role="alert">
                        <strong>Error:</strong>{{$message}}
                    </div>
                @enderror
            </div>
            <div class="col-md-2">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="text" class="form-control @error('sale_date') is invalid @enderror" id="sale_date" name="sale_date">
                @error('sale_date')
                    <div class="alert alert-danger" role="alert">
                        <strong>Error:</strong>{{$message}}
                    </div>
                @enderror
            </div>
            <div class="col-md-4">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control @error('type') is invalid @enderror" id="type" name="type">
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