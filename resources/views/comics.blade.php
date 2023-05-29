@extends('layout.app')

@section('content')
    
<section class="bg-dark pb-4">
    <div class="container text-center">
            
            <div class="current_series badge bg-primary rounded-0 px-4 py-2">
                <h5 class="text-uppercase">Current series</h5>
            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 row-cols-xl-6 g-4 py-3">
                @foreach($comics as $comic)
                <a href="{{route('comic', $comic->id)}}" class="text-decoration-none">
                    <div class="card bg-dark border-0" >
                        <img class="img card-img-top" src="{{$comic['thumb']}}" alt="{{ $comic['title'] }}">
                        <div class="card-body bg-dark">
                        
                            <h6 class="card-title text-white text-uppercase align-items-start">
                                    {{ $comic['title'] }}
                            </h6>
                        </div>
    
                      </div>
    
                    @endforeach
                </a>
            </div>

            <button type="submit" class="btn btn-primary text-uppercase rounded-0 px-5 fw-semibold">Load More</button>
    </div>
</section>



@endsection