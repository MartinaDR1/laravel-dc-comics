@extends('layout.app')

@section('content')
<section class="bg-dark text-white">
    <div class="container py-5">
        <form class="row g-3" action="{{route('comics.store')}}" method="post">
            @csrf

            <div class="col-12">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="col-12">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" type="text" id="description" name="description" rows="3" ></textarea>
            </div>
            <div class="col-12">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control" id="thumb" name="thumb">
            </div>
            <div class="col-md-4">
                <label for="price" class="form-label">Price</label>
                <input type="number" step="0.01" name="price" id="price" class="form-control" aria-describedby="priceHelper">
            </div>
            <div class="col-md-2">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" name="series">
            </div>
            <div class="col-md-2">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date">
            </div>
            <div class="col-md-4">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" name="type">
            </div>
            <div class="col-md-4 mx-auto text-center pt-3">
                <button type="submit" class="btn btn-light text-dark px-4">Send</button>
            </div>
        </form>
    </div>
</section>


@endsection