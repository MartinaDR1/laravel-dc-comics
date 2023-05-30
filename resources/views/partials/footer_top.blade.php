<div class="footer_top py-3 text-white">
    <div class="container d-flex justify-content-between">
        <div class="row py-3">
            <div class="col-4">
                <ul class="list-unstyled ">
                    <h5 class="title">{{$footer[0]['title']}}</h5>
                    @foreach ($footer[0]['items'] as $footItem)
                        <li><a href="" class="text-secondary text-decoration-none">{{$footItem}}</a></li>
                    @endforeach
                </ul>

                <ul class="list-unstyled">
                    <h5 class="title">{{$footer[1]['title']}}</h5>
                    @foreach ($footer[1]['items'] as $footItem)
                        <li><a href="" class="text-secondary text-decoration-none">{{$footItem}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-4">
                <ul class="list-unstyled">
                    <h5 class="title">{{$footer[2]['title']}}</h5>
                    @foreach ($footer[2]['items'] as $footItem)
                        <li><a href="" class="text-secondary text-decoration-none">{{$footItem}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-4">
                <ul class="list-unstyled">
                    <h5 class="title">{{$footer[3]['title']}}</h5>
                    @foreach ($footer[3]['items'] as $footItem)
                        <li><a href="" class="text-secondary text-decoration-none">{{$footItem}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>