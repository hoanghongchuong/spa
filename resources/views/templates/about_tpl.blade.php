@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
?>
@include('templates.layout.slider')
<div class="content-box content-box-page" style="margin-top: 30px;">
	<div class="container">
		<div class="row content_about">
			<h1>{{$about->name}}</h1>
			<div class="">{!! $about->content !!}</div>
			
		</div>
	</div>
</div>
@endsection

