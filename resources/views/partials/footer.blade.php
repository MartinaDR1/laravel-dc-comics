<footer>
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
    
    <div class="footer_bottom bg-dark py-4">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between h-100">
                <button type="button" class="btn btn-outline-primary rounded-0 text-white">SIGN-UP NOW</button>
                <div class="socials d-flex align-items-center">
                    <span class="text-primary"><strong> FOLLOW US</strong> </span>
                    <div class="social_icons ms-3 mx-1">
                        <a href=""class="text-decoration-none">
                            <img class="mx-1" src="{{ Vite::asset('resources/img/footer-facebook.png') }}">
                        </a>
                        <a href=""class="text-decoration-none">
                            <img class="mx-1" src="{{ Vite::asset('resources/img/footer-periscope.png') }}">
                        </a>
                        <a href=""class="text-decoration-none">
                            <img class="mx-1" src="{{ Vite::asset('resources/img/footer-pinterest.png') }}">
                        </a>
                        <a href=""class="text-decoration-none">
                            <img class="mx-1" src="{{ Vite::asset('resources/img/footer-twitter.png') }}">
                        </a>
                        <a href=""class="text-decoration-none">
                            <img class="mx-1" src="{{ Vite::asset('resources/img/footer-youtube.png') }}">
                        </a>
                    </div>
                </div>
            </div>
    
        </div>
    </div>
</footer>