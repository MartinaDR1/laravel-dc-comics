@extends('layout.app')


@section('content')

<div class="bg-primary">
    <div class="blue_banner container ">

        <img src="{{$comic['thumb']}}" class="cover" height="200">
    </div>
</div>
<section>
    <div class="container py-5">
        <div class="row">
            
            <div class="col-8">
                <h3 class="text-uppercase">{{ $comic['title']}}</h3>

                <div class="price bg_price px-3 py-2 d-flex justify-content-between align-items-center">
                    <div>
                        <span class="txt_price">U.S. Price</span>
                        <span class="text-white">  {{ $comic['price']}} </span>
                    </div>
                   
                    <div>
                        <span class="text-uppercase txt_price">Available</span>

                        <select name="check avaiability " id="select" class="bg_price border-0 text-white">
                            <option selected>Check avaiability</option>
                            <option value="available">Available</option>
                            <option value="not_available">Not Available</option>
    
                        </select>
                    </div>
                </div>

                <p>{{$comic['description']}}</p>
            </div>
            <div class="col-4">
                <img src="{{ Vite::asset('resources/img/adv.jpg') }}" height="180">
            </div>
        </div>
    </div>

    <div class="info bg-light py-5">
        <div class="container">
            <div class="row">

                <div class="col-6">
                    <h5>Specs</h5>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th class="fw-normal">Series:</th>
                                <td class="text-primary">{{$comic['series']}}</td>            
                            </tr>
                            <tr>
                                <th class="fw-normal">U.S. Price:</th>
                                <td>{{$comic['price']}}</td>            
                            </tr>
                            <tr>
                                <th class="fw-normal">On sale date:</th>
                                <td>{{$comic['sale_date']}}</td>            
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection