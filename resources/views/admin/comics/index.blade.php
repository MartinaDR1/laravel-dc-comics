@extends('layout.app')

@section('content')

<div class="container">
    @include('partials.session_message')

    <div class="d-flex justify-content-between my-3">
        <h3>Comics-List</h3>
        <a name="" id="" class="btn btn-primary" href="{{route('comics.create')}}" role="button">+</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Title</th>
                <th>Price</th>
                <th>Series</th>
                <th>Sale-date</th>
                <th>Type</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody class="table-group-divider">
            @forelse ($comics as $comic)
            <tr class="table-primary">
                <td scope="row">{{$comic->id}}</td>
                <td><img height="100" src="{{$comic['thumb'] }}" alt="{{$comic['title'] }}"></td>
                <td>{{$comic['title'] }}</td>
                <td>{{$comic['price'] }}</td>
                <td>{{$comic['series'] }}</td>
                <td>{{$comic['sale_date'] }}</td>
                <td>{{$comic['type'] }}</td>
                <td>
                    <button class="btn border-0 bg-transparent"> 
                        <a href="{{route('comics.show',$comic['id'])}}" title="View" class="text-decoration-none text-success">
                            <i class="fas fa-eye fa-sm fa-fw"></i>
                        </a>
                    </button>
                    <button class="btn border-0 bg-transparent">
                        <a href="{{route('comics.edit',$comic['id'])}}" title="Edit" class="text-decoration-none text-warning">
                            <i class="fas fa-pencil fa-sm fa-fw"></i>
                        </a>
                    </button>
                    
                    @include('partials.modal')
                </td>
               
            </tr>
            @empty
            <tr scope="row">
                <td>Sorry, no records</td>
            </tr>
            @endforelse

        </tbody>
    </table>
</div>


@endsection