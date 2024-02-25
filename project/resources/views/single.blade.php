@extends('front_theme.layout.mastaring')



@section('content')





<div class="center">
    <img src="{{ asset('photo/'. $content->photo) }}" alt="image" style="text-align: center; margin-left:20%; width: 400px; border-radius: 10%; " >
</div>

<div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <p style="font-weight: bold;">
                    {{$content->head}}
                </p>
                <p>
                    {{$content->story}}
                </p>



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
                    <div class="col-5 align-self-center">
                        <img src="{{ asset('photo/'.$content->photo) }}" alt="img" class="fh5co_most_trading"/>
                    </div>
                    <div class="col-7 paddding">
                        <div class="most_fh5co_treding_font"> {{ $content->head }}</div>
                        <div class="most_fh5co_treding_font_123"> {{ $content->date }}</div>
                    </div>
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
                <div class="fh5co_hover_news_img">
                    <div class="fh5co_news_img"><img src="{{ asset('photo/'.$item->photo) }}" alt=""/></div>
                    <div>
                        <a href="{{ url('/single') }}/{{ $item->id }}" class="d-block fh5co_small_post_heading"><span class="">{{ $item->head }}</span></a>
                        <div class="c_g"><i class="fa fa-clock-o"></i> {{ $item->date }}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


@endsection
