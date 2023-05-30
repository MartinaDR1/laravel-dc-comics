<button type="button" class="btn text-danger" data-bs-toggle="modal" data-bs-target="#modal{{$comic->id}}">
    <i class="fas fa-trash fa-sm fa-fw"></i>
</button>

<div class="modal fade" id="modal{{$comic->id}}" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modal{{$comic->title}}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
        <div class="modal-content" id="modal">
            <div class="modal-header">
                <h5 class="modal-title" id="modal{{$comic->title}}">Delete {{$comic->title}}?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex">
                <img src="{{$comic['thumb']}}" class="cover" height="200">
                <span class="p-2">
                    Are you sure you want to delete the <strong>{{$comic->title}}</strong>?
                </span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                <form action="{{route('comics.destroy', $comic->id)}}" method="post">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger" title="Delete" >Conferm</button>
                </form>
            </div>
        </div>
    </div>
</div>
