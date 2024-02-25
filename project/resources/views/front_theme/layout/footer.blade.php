<div class="container-fluid fh5co_footer_bg pb-3">
    <div class="container animate-box">
        <div class="row">
            @foreach ($setting as $item)
            <div class="col-12 spdp_right py-5"><img src="{{ asset('logo/'.$item->logo) }}" alt="img" class="footer_logo"/></div>
            @endforeach
            <div class="clearfix"></div>
            <div class="col-12 col-md-4 col-lg-3">
                <div class="footer_main_title py-3"> About</div>
                <div class="footer_sub_about pb-3"> @foreach ($setting as $item)
                    {{$item->about}}
                @endforeach
                </div>
                <div class="footer_mediya_icon">
                    @foreach ($setting as $item)
                    @if ($item->google)
                    <div class="text-center d-inline-block"><a class="fh5co_display_table_footer" target="_blank" href="{{ $item->google }}">
                        <div class="fh5co_verticle_middle"><i class="fa fa-google-plus"></i></div>
                    </a></div>
                    @endif

                    @if ($item->twiter)
                    <div class="text-center d-inline-block"><a class="fh5co_display_table_footer" target="_blank" href="{{ $item->twiter }}">
                        <div class="fh5co_verticle_middle"><i class="fa fa-twitter"></i></div>
                    </a></div>
                    @endif
                    @if ($item->facebook)
                    <div class="text-center d-inline-block"><a class="fh5co_display_table_footer" target="_blank" href="{{ $item->facebook }}">
                        <div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div>
                    </a></div>
                    @endif
                    @endforeach
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-2">
                <div class="footer_main_title py-3"> Category</div>
                <ul class="footer_menu">
                    @foreach ($catagory as $item)


                    <li><a href="{{ url('/blogcatagory') }}/{{ $item->id }}" class=""><i class="fa fa-angle-right"></i>{{ $item->Name }}</a></li>
                    @endforeach
                </ul>
            </div>


        </div>





    </div>
</div>


<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="fa fa-arrow-up"></i></a>
</div>

<script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js') }}"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js') }}"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
<!-- Waypoints -->
<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
<!-- Main -->
<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>

