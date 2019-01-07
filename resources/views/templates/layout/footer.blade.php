<?php
    $setting = Cache::get('setting');
    $categories = DB::table('product_categories')->where('status',1)->where('parent_id',0)->get();
?>

<footer>
    <div class="container-fluid footer">
        <div class="container">
            <div class="row footer-ft">
                <div class="col-xs-4 col-sm-4 col-xs-4 col-large-4 ft">
                    <div class="lg-ft">
                        <img src="{{asset('upload/hinhanh/'.$setting->photo_footer)}}">
                    </div>
                    <div class="if">
                        <p>Email: {{$setting->email}}<br>
                           Phone: {{$setting->phone}}<br>
                           Address: {{$setting->address}}
                        </p>
                    </div>
                </div>
                <div class="col-xs-4 col-sm-4 col-xs-4 col-large-4 ft-text ft">
                    <h3>Feedback form</h3>
                    <form  action="{{route('postContact')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Name" name="name" required="" ">
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Email" name="email">
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Phone" name="phone" required="">
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Messgers" name="content" required="">
                        </div>
                        <button type="submit" class="btn btn-warning">Submit</button>
                    </form>
                </div>
                <div class="col-xs-4 col-sm-4 col-xs-4 col-large-4 ft-text ft">
                    <h3>Fanpage</h3>
                    <div class="fb">
                        <div class="fb-page" data-href="{{$setting->facebook}}" data-tabs="timeline" data-width="300" data-height="200" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="{{$setting->facebook}}" class="fb-xfbml-parse-ignore"><a href="{{$setting->facebook}}">Facebook</a></blockquote></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</footer>