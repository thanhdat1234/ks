<?php
$img = json_decode($room->images);
?>
<section id="single-room" class="image-hotel">
    <div class="biggest-bro">
        <div class="container">
            <div class="title-section">
                <h2 class="my-title">
                    {{$room->name}}
                </h2>
            </div>
            <!-- title-section / end -->
            <div class="image-sgroom">
                <div class="row">
                @if($img)
                    @foreach($img as $key =>$value)
                        @if($key >1)
                            @continue

                        @endif

                            <div class="col-md-6 col-lg-6">
                                <div class="img-content">
                                    <a href="">
                                        <img src="{{url('public/images')}}/{{$room->alias}}/{{$value}}" alt="hình ảnh {{$room->name}} nhà nghỉ thái bình">
                                    </a>
                                </div>
                            </div>

                    @endforeach
                @endif
                </div>
            </div>
            <!-- image-content / end -->
            <div class="info-motel">
                <div class="price">
                    <p>Giá :
                        <span class="red-price throug">{{number_format($room->price)}}đ</span>
                    </p>

                    @if($room->sale)
                    <p>Giá khuyến mãi:
                        <span class="red-price">{{number_format($room->sale)}}đ</span>
                    </p>
                    @endif
                </div>
                <div class="detail-room">
                    <a href="chi-tiet-{{$room->alias}}.html">Chi tiết phòng
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- another page jume here / start -->
    <span id="gotoo"> &nbsp; </span>
    <!-- another page jume here / end -->
</section>