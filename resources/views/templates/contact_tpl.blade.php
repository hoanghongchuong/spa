@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $sliders = DB::table('slider')->select()->where('status',1)->where('com','gioi-thieu')->orderBy('created_at','desc')->get();
?>
@include('templates.layout.slider')
<div class="content-box content-box-page">   
    <div class="content-box-contact" style="margin-bottom: 30px; margin-top: 30px;">
        <div class="container">
            <div class="row info-company">
                <div class="col-sm-4">
                    <h1 class="title-contact">Liên Hệ</h1>
                    
                    <p><span class="fwb">Địa chỉ:</span> {{$setting->address}}</p>
                    <p><span class="fwb">Số điện thoại:</span> {{$setting->phone}}</p>
                    <p><span class="fwb">Email:</span> {{$setting->email}}</p>
                </div>
                <div class="col-sm-8">
                    <h2 class="title-send">Gửi tin nhắn</h2>
                    <form action="{{route('postContact')}}" method="post" accept-charset="utf-8" class="contact-frm">
                    	{{csrf_field()}}
                        <div class="row">                                
                                <div class="col-md-6">
                                    <label for="">Họ tên</label>                                       
                                    <input type="text" name="name" value="" required="" class="form-control" placeholder="">                                    
                                </div>
                                <div class="col-md-6">
                                    <label for="">Địa chỉ</label>
                                    <input type="text" name="address" value="" required="" class="form-control" placeholder="">                                        
                                </div>
                                <div class="col-md-6">
                                    <label for="">Số điện thoại</label>
                                    <input type="text" name="phone" value="" required="" class="form-control" placeholder="">
                                    
                                </div>
                                <div class="col-md-6">
                                    <label for="">Email</label>
                                    <input type="text" name="email" value="" class="form-control" placeholder="">
                                    
                                </div>
                                <div class="col-md-12">
                                    <label for="">Nội dung</label>
                                    <textarea name="content" rows="5" required="" class="form-control" placeholder="Nội dung"></textarea>
                                </div>
                                <div class="text-md-right btn-gui col-md-12" style="margin-top: 10px;">
                                    <button type="submit" class="btn bold more-btn btn-primary">GỬI</button>
                                </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <div class="map-box">
            <div class="container">
                {!! $setting->iframemap !!}
            </div>
        </div>
    </div>
</div>
@endsection
