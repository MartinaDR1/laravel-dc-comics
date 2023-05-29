<div class="banner bg-primary py-5">
    <div class="container text-center d-flex justify-content-between">
        @foreach($banner as $item)
        <div class="item">
            <img src="{{ Vite::asset('resources/img/'.$item['img']) }}" height="42">
            <span class="text-uppercase text-white">{{$item['title']}}</span>
        </div>

        @endforeach
      
    </div>
</div>