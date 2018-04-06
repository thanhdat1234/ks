<?php
/**
 * Created by PhpStorm.
 * User: ntdat
 * Date: 4/6/18
 * Time: 2:23 AM
 */
?>
<?php
    $img_s = json_decode($img_slider->content,true);
?>
<section class="section-1">
    <div class="main-slider">
        <div id="owl-carousel" class="owl-carousel">
            @foreach($img_s as $key=>$value)
            <div class="item">
                <a href="{{url('')}}">
                    <img src="{{url('public/images')}}/{{$img_slider->alias}}/{{$value}}" alt="hình ảnh nhà nghỉ thái bình">
                </a>
            </div>
            @endforeach
        </div>
    </div>
    <!-- another page jume here / start -->
    <span id="goto"> &nbsp; </span>
    <!-- another page jume here / end -->
</section>

