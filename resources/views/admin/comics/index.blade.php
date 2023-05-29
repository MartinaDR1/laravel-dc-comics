@extends('layout.app')

@section('content')

<div class="container">
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
                    <a href="" title="Edit" class="text-decoration-none">
                        <i class="fas fa-pencil fa-sm fa-fw"></i>
                    </a>
                    <a href="" title="Delete" class="text-decoration-none">
                        <i class="fas fa-trash fa-sm fa-fw"></i>
                    </a>

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