@extends('layout.app')

@section('content')

<div class="container">
    @include('partials.session_message')
    
    <div class="d-flex justify-content-between my-3">
        <h3>Comincs-List</h3>
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

                    <a href="{{route('comics.show',$comic['id'])}}" title="View" class="text-decoration-none">
                        <i class="fas fa-eye fa-sm fa-fw"></i>
                    </a>
                    <a href="{{route('comics.edit',$comic['id'])}}" title="Edit" class="text-decoration-none">
                        <i class="fas fa-pencil fa-sm fa-fw"></i>
                    </a>
                    <form action="{{route('comics.destroy', $comic->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <a href="" title="Delete" class="text-decoration-none">
                            <i class="fas fa-trash fa-sm fa-fw"></i>
                        </a>
                    </form>
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