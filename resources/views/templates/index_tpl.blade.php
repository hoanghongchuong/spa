@extends('index')
@section('content')

<?php
$setting = Cache::get('setting');
$sliders = DB::table('slider')->select()->where('status',1)->where('com','gioi-thieu')->orderBy('created_at','desc')->get();
?>
@include('templates.layout.slider')
<content>
    <div class="container">
        <div class="row content-1">
            <div class="col-xs-12 col-sm-12 col-md-12 col-large-12 text-1">
                <h1>DỊCH VỤ <span>SPA</span></h1>
                <!-- <p>Dịch vụ mang lại sự hài lòng cho khách hàng</p> -->
            </div>
            <div class="col-xs-2 col-sm-2 offset-md-5 col-md-2 col-large-2 img-1">
                <img src="{{ asset('public/images/icondv.png')}}">
            </div>      
        </div>
        <div class="row">
            @foreach(@$service as $s)
            <div class="col-xs-12 col-sm-6 col-md-4 col-large-4 dv-1">
                <div class="dv-img">
                    <img src="{{asset('upload/news/'.$s->photo)}}">
                </div>
                <div class="dv-text">
                    <h2>{{$s->name}}</h2>
                    <p>{!! $s->mota !!}</p>
                    <!-- <button type="button" class="btn btn-warning">Learn more</button> -->
                    <p><a href="{{url('dich-vu/'.$s->alias.'.html')}}" class="btn btn-warning" title="">Chi tiết</a></p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="container-fluid gt">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-large-6 gt-img">
                <img src="{{asset('upload/hinhanh/'.$about->photo)}}">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 col-large-6 gt-text text-1">
                <h1><span>Giới thiệu</span> về chúng tôi</h1>
                <!-- <p>Dịch vụ mang lại sự hài lòng cho khách hàng</p> -->
                <div class="img-gt">
                    <img src="{{asset('public/images/icondv.png')}}">
                </div>
                <div class="p">{!! $about->mota !!}</div>
                <!-- <button type="button" class="btn btn-warning gt-bt">Xem thêm</button> -->
                <p><a href="{{url('gioi-thieu')}}" title="">Xem thêm</a></p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row content-1">
            <div class="col-xs-12 col-sm-12 col-md-12 col-large-12 text-1">
                <h1>Đào tạo</h1>
                <!-- <p>Dịch vụ mang lại sự hài lòng cho khách hàng</p> -->
            </div>
            <div class="col-xs-2 col-sm-2 offset-md-5 col-md-2 col-large-2 img-1">
                <img src="{{asset('public/images/icondv.png')}}">
            </div>      
        </div>
        <div class="row content-dt">
            @foreach($daotao as $d)
            <div class="col-xs-4 col-sm-4 col-md-4 col-large-4">
                <div class="dt-img">
                    <a href="{{url('dao-tao/'.$d->alias.'.html')}}" title=""><img src="{{asset('upload/news/'.$d->photo)}}"></a>
                </div>
                <div class="dt-text">
                    <h3>{{$d->name}}</h3>
                    <p>{!! $d->mota !!}</p>
                    <p><a href="{{url('dao-tao/'.$d->alias.'.html')}}" class="btn btn-warning " title="">Chi tiết</a></p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="container-fluid ct">
        <div class="container">
            <div class="row content-1 content4">
                <div class="col-xs-12 col-sm-12 col-md-12 col-large-12 text-1 text-ct">
                    <h1>Chuyển giao <span>công nghệ</span></h1>
                    <!-- <p>Dịch vụ mang lại sự hài lòng cho khách hàng</p> -->
                </div>
                <div class="col-xs-2 col-sm-2 offset-md-5 col-md-2 col-large-2 img-1">
                    <img src="{{asset('public/images/icondv.png')}}">
                </div>      
            </div>
                <div class="row content-dt">
                    @foreach($congnghe as $c)
                    <div class="col-xs-4 col-sm-4 col-md-4 col-large-4">
                        <div class="dt-img">
                            <a href="{{url('chuyen-giao-cong-nghe/'.$c->alias.'.html')}}" title=""><img src="{{asset('upload/news/'.$c->photo)}}"></a>
                        </div>
                        <div class="dt-text ct-text">
                            <h3>{{$c->name}}</h3>
                            <p>{!! $c->mota !!}</p>
                           
                            <p><a href="{{url('chuyen-giao-cong-nghe/'.$c->alias.'.html')}}" class="btn btn-warning " title="">Chi tiết</a></p>
                        </div>
                    </div>
                    @endforeach
                </div>
        </div>
    </div>
    <div class="container">
        <div class="row content-1">
            <div class="col-xs-12 col-sm-12 col-md-12 col-large-12 text-1">
                <h1><span>Khách hàng</span> nói về chúng tôi</h1>
                <!-- <p>Dịch vụ mang lại sự hài lòng cho khách hàng</p> -->
            </div>
            <div class="col-xs-2 col-sm-2 offset-md-5 col-md-2 col-large-2 img-1">
                <img src="{{asset('public/images/icondv.png')}}">
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
