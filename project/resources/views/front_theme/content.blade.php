@extends('front_theme.layout.mastaring')
@section('content')

@foreach ($contenthead as $item)


<div class="container-fluid paddding mb-5">
    <div class="row mx-0">
        <div class="col-md-6 col-12 paddding animate-box" data-animate-effect="fadeIn">
            <div class="fh5co_suceefh5co_height"><img src="{{ asset('photo/'.$item->photo) }}" alt="img"/>
                <div class="fh5co_suceefh5co_height_position_absolute"></div>
                <div class="fh5co_suceefh5co_height_position_absolute_font">
                    <div class=""><a href="{{ url('/single') }}/{{ $item->id }}" class="color_fff"> <i class="fa fa-clock-o"></i>{{ $item->date }}
                    </a></div>
                    <div class=""><a href="{{ url('/single') }}/{{ $item->id }}" class="fh5co_good_font">{{$item->head}} </a></div>
                </div>
            </div>
        </div>
        @endforeach
        <div class="col-md-6">
            <div class="row">

                @foreach ($content as $item)

                <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
                    <div class="fh5co_suceefh5co_height_2"><img src="{{ asset('photo/'.$item->photo) }}" alt="img"/>
                        <div class="fh5co_suceefh5co_height_position_absolute"></div>
                        <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                            <div class=""><a href="{{ url('/single') }}/{{ $item->id }}" class="color_fff"> <i class="fa fa-clock-o"></i>{{$item->date}} </a></div>
                            <div class=""><a href="{{ url('/single') }}/{{ $item->id }}" class="fh5co_good_font_2"> {{ $item->name }} <br>{{ $item->head }}</a></div>
                        </div>
                    </div>
                </div>

            </a>
                @endforeach


            </div>
        </div>
    </div>
</div>









<div class="cat">

<ul class="m">
    @foreach ($catagory as $item)


    <li class="n"><a href="{{ url('/blogcatagory') }}/{{ $item->id }}" class="o">{{  $item->Name }}</a></li>
    @endforeach


</ul>

</div>
<style>
    .cat{
        text-align: center;
        display: flex;
    }
    .m{
        margin-left:30%;
    }
       .m .n{
            display: inline-block;
            padding: 15px;
        }
        .m .n .o{
            text-decoration: none;
            font-size: 40px;
            color: black;
            font-weight: bold;
        }
        .m .n .o:hover{
            padding-bottom: 10px;
            border-bottom: 2px solid black;
            transition: 0.5s;
        }

</style>



<div class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">All-Content</div>
                </div>
                @foreach ($contents as $item)


                <div class="row pb-4">
                    <div class="col-md-5">
                        <div class="fh5co_hover_news_img">
                             <div class="fh5co_news_img"><img src="{{ asset('photo/'.$item->photo ) }}" alt=""></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="col-md-7 animate-box">
                        <a href="{{ url('/single') }}/{{ $item->id }}" class="fh5co_magna py-2"> {{$item->head}}   -
                        {{ $item->date }} </a>
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
                    @foreach ($content as $item)


                    <div class="col-5 align-self-center">
                        <img src="{{ asset('photo/'.$item->photo) }}" alt="img" class="fh5co_most_trading"/>
                    </div>
                    <div class="col-7 paddding">
                        <div class="most_fh5co_treding_font"> {{ $item->head }}</div>
                        <div class="most_fh5co_treding_font_123"> {{ $item->date }}</div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>

    </div>
</div>
@endsection
