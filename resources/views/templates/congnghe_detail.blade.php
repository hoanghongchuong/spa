@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
?>
@include('templates.layout.slider')
<content>
    <div class="container">
        <div class="row detail">
            <div class="col-xs-12 col-sm-12 col-md-8 col-large-8">
                <h1>{{$news_detail->name}}</h1>
                <div class="content_detail_news">{!! $news_detail->content !!}</div>
            </div>
           
            <div class="col-xs-12 col-sm-12 col-md-4 col-large-4 right-sidebar">
                <div class="service-list">
                        <!-- service list -->
                    <h2>Bài viết liên quan</h2>
                    <ul class="arrow-circle-o-right" style="padding-left: 0;">
                        @foreach($newsSameCate as $item)
                        <li>
                            <a href="{{url('chuyen-giao-cong-nghe/'.@$item->alias.'.html')}}">{{@$item->name}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</content>

@endsection

