@extends('front_theme.layout.mastaring')
@section('content')


<div class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Blogs</div>
                </div>
                @foreach ($contents as $item)


                <div class="row pb-4">
                    <div class="col-md-5">
                        <div class="fh5co_hover_news_img"><a href="{{ url('/single') }}/{{ $item->id }}">
                            <div class="fh5co_news_img"><img src="{{ asset('photo/'. $item->photo) }}" alt=""/></div>
                            <div></a></div>
                        </div>
                    </div>
                    <div class="col-md-7 animate-box">
                        <a href="{{ url('/single') }}/{{ $item->id }}" class="fh5co_magna py-2"> {{$item->head}} </a> <a href="{{ url('/single') }}/{{ $item->id }}" class="fh5co_mini_time py-3">{{$item->name}} -
                       {{$item->date}} </a>
                        <div class="fh5co_consectetur"> {{$item->story}}
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Catagory</div>
                </div>
                <div class="clearfix"></div>
                <div class="fh5co_tags_all">
                    @foreach ($catagory as $item)


                    <a href="{{ url('/blogcatagory') }}/{{ $item->id }}" class="fh5co_tagg">{{ $item->Name }}</a>
                    @endforeach

                </div>
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">Most Popular</div>
                </div>

                <div class="row pb-3">


                    @foreach ($contents as $item)
                    <div class="col-5 align-self-center">
                        <a href="{{ url('/single') }}/{{ $item->id }}">
                        <img src="{{ asset('photo/'.$item->photo) }}" alt="img" class="fh5co_most_trading"/>
                    </div>
                    <div class="col-7 paddding">
                        <div class="most_fh5co_treding_font"> {{ $item->head }}.</div>
                        <div class="most_fh5co_treding_font_123"> {{ $item->date }}</div>
                    </div></a>
                    @endforeach
                </div>


            </div>

        </div>


    </div>
</div>
<div class="container-fluid pb-4 pt-5">
    <div class="container animate-box">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Trending</div>
        </div>
        <div class="owl-carousel owl-theme" id="slider2">
            @foreach ($contents as $item)


            <div class="item px-2">
                <div class="fh5co_hover_news_img"><a href="{{ url('/single') }}/{{ $item->id }}">
                    <div class="fh5co_news_img"><img src="{{ asset('photo/'.$item->photo) }}" alt=""/></div></a>
                    <div>
                        <a href="{{ url('/single') }}/{{ $item->id }}" class="d-block fh5co_small_post_heading"><span class="">T{{ $item->head }}</span></a>
                        <div class="c_g"><i class="fa fa-clock-o"></i>{{$item->date}}</div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
@endsection

