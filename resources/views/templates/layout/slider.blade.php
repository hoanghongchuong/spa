<?php
	$sliders = DB::table('slider')->select()->where('status',1)->where('com','gioi-thieu')->orderBy('created_at','desc')->get();

?>
@if(isset($sliders))
<main role="main" class="main">
    <!-- <div class="img">
        <img src="{{asset('upload/hinhanh/'.$setting->photo)}}">
    </div> -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol> -->
    <div class="carousel-inner">
        @foreach(@$sliders as $k=>$slider)
        <div class="carousel-item @if($k==0)active @endif">
            <img class="first-slide" src="{{asset('upload/hinhanh/'.$slider->photo)}}" alt="First slide">
             <div class="container">
                <div class="carousel-caption text-sl">
                    <h1>{{$slider->name}} </h1>
                    <h2>{!! $slider->mota !!}</h1>
                    <p><a style="margin-right: 30px; " class="btn btn-lg btn-primary" href="#" role="button">Chi tiết</a> <a  style="margin-left: 30px;" class="btn btn-lg btn-primary" href="{{url('lien-he')}}" role="button">Book now</a></p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    </div>
</main>
	
 @endif