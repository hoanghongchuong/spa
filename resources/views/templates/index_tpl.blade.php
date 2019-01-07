@extends('index')
@section('content')

<?php
$setting = Cache::get('setting');
$sliders = DB::table('slider')->select()->where('status',1)->where('com','gioi-thieu')->orderBy('created_at','desc')->get();
?>
<main role="main" class="main">
    <div class="img">
        <img src="{{asset('upload/hinhanh/'.$setting->photo)}}">
    </div>
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
                    <h1>WELCOME TO OUR SPA </h1>
                    <h2>CHECK OUT OUT SERVICES AND OFFERS</h1>
                    <p><a style="margin-right: 30px; " class="btn btn-lg btn-primary" href="#" role="button">Learn more</a> <a  style="margin-left: 30px;" class="btn btn-lg btn-primary" href="#" role="button">Book now</a></p>
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
<content>
    <div class="container">
        <div class="row content-1">
            <div class="col-xs-12 col-sm-12 col-md-12 col-large-12 text-1">
                <h1>DỊCH VỤ <span>SPA</span></h1>
                <p>Dịch vụ mang lại sự hài lòng cho khách hàng</p>
            </div>
            <div class="col-xs-2 col-sm-2 offset-md-5 col-md-2 col-large-2 img-1">
                <img src="images/icondv.png">
            </div>      
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 col-large-4 dv-1">
                <div class="dv-img">
                    <img src="images/dv.png">
                </div>
                <div class="dv-text">
                    <h2>That is a beautiful</h2>
                    <p>I think . I can fuck her</p>
                    <button type="button" class="btn btn-warning">Learn more</button>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-large-4 dv-1">
                <div class="dv-img">
                    <img src="images/dv.png">
                </div>
                <div class="dv-text">
                    <h2>That is a beautiful</h2>
                    <p>I think . I can fuck her</p>
                    <button type="button" class="btn btn-warning">Learn more</button>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-large-4 dv-1">
                <div class="dv-img">
                    <img src="images/dv.png">
                </div>
                <div class="dv-text">
                    <h2>That is a beautiful</h2>
                    <p>I think . I can fuck her</p>
                    <button type="button" class="btn btn-warning">Learn more</button>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-large-4 dv-1">
                <div class="dv-img">
                    <img src="images/dv.png">
                </div>
                <div class="dv-text">
                    <h2>That is a beautiful</h2>
                    <p>I think . I can fuck her</p>
                    <button type="button" class="btn btn-warning">Learn more</button>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-large-4 dv-1">
                <div class="dv-img">
                    <img src="images/dv.png">
                </div>
                <div class="dv-text">
                    <h2>That is a beautiful</h2>
                    <p>I think . I can fuck her</p>
                    <button type="button" class="btn btn-warning">Learn more</button>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-large-4 dv-1">
                <div class="dv-img">
                    <img src="images/dv.png">
                </div>
                <div class="dv-text">
                    <h2>That is a beautiful</h2>
                    <p>I think . I can fuck her</p>
                    <button type="button" class="btn btn-warning">Learn more</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid gt">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-large-6 gt-img">
                <img src="images/gt.png">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 col-large-6 gt-text text-1">
                <h1><span>Giới thiệu</span> về chúng tôi</h1>
                <p>Dịch vụ mang lại sự hài lòng cho khách hàng</p>
                <div class="img-gt">
                    <img src="images/icondv.png">
                </div>
                <p class="p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                <button type="button" class="btn btn-warning gt-bt">Click here</button>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row content-1">
            <div class="col-xs-12 col-sm-12 col-md-12 col-large-12 text-1">
                <h1>Đào tạo</h1>
                <p>Dịch vụ mang lại sự hài lòng cho khách hàng</p>
            </div>
            <div class="col-xs-2 col-sm-2 offset-md-5 col-md-2 col-large-2 img-1">
                <img src="images/icondv.png">
            </div>      
        </div>
        <div class="row content-dt">
            <div class="col-xs-4 col-sm-4 col-md-4 col-large-4">
                <div class="dt-img">
                    <img src="images/dt.png">
                </div>
                <div class="dt-text">
                    <h3>Yoga & Media Courses</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <button type="button" class="btn btn-warning ">Book now</button>
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-large-4">
                <div class="dt-img">
                    <img src="images/dt2.png">
                </div>
                <div class="dt-text">
                    <h3>Yoga & Media Courses</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <button type="button" class="btn btn-warning ">Book now</button>
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-large-4">
                <div class="dt-img">
                    <img src="images/dt3.png">
                </div>
                <div class="dt-text">
                    <h3>Yoga & Media Courses</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <button type="button" class="btn btn-warning ">Book now</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid ct">
        <div class="container">
            <div class="row content-1 content4">
                <div class="col-xs-12 col-sm-12 col-md-12 col-large-12 text-1 text-ct">
                    <h1>Chuyển giao <span>công nghệ</span></h1>
                    <p>Dịch vụ mang lại sự hài lòng cho khách hàng</p>
                </div>
                <div class="col-xs-2 col-sm-2 offset-md-5 col-md-2 col-large-2 img-1">
                    <img src="images/icondv.png">
                </div>      
            </div>
                <div class="row content-dt">
                <div class="col-xs-4 col-sm-4 col-md-4 col-large-4">
                    <div class="dt-img">
                        <img src="images/dt.png">
                    </div>
                    <div class="dt-text ct-text">
                        <h3>Yoga & Media Courses</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <button type="button" class="btn btn-warning ">Book now</button>
                    </div>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-large-4">
                    <div class="dt-img">
                        <img src="images/dt2.png">
                    </div>
                    <div class="dt-text ct-text">
                        <h3>Yoga & Media Courses</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <button type="button" class="btn btn-warning ">Book now</button>
                    </div>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-large-4">
                    <div class="dt-img">
                        <img src="images/dt3.png">
                    </div>
                    <div class="dt-text ct-text">
                        <h3>Yoga & Media Courses</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <button type="button" class="btn btn-warning ">Book now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row content-1">
            <div class="col-xs-12 col-sm-12 col-md-12 col-large-12 text-1">
                <h1><span>Khách hàng</span> nói về chúng tôi</h1>
                <p>Dịch vụ mang lại sự hài lòng cho khách hàng</p>
            </div>
            <div class="col-xs-2 col-sm-2 offset-md-5 col-md-2 col-large-2 img-1">
                <img src="images/icondv.png">
            </div>      
        </div>
        <div class="row cmt-max">
            @foreach($feedbacks as $fb)
            <div class="col-xs-12 col-sm-4 col-md-4 col-large-4 cmt">
                <div class="cmt-min">
                    <div><i class="fa fa-quote-left i" aria-hidden="true"></i></div>
                    <p>{!! $fb->content !!}</p>
                    <div class="comment">
                        <img src="{{asset('upload/hinhanh/'.$fb->photo)}}">
                        <h3>{{$fb->name}}</h3>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</content>
@endsection
