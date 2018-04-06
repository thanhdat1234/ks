<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="utf-8">
    <!-- Meta Description -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Nguyễn Thành Đạt">
    <title>Hình ảnh</title>
    @include('partial.style')
</head>
<body>
@include('partial.header',$info)
    @if($imgs)
        @foreach($imgs as $item)
        <!-- end hình ảnh nhà nghỉ section -->
        <section class="island-phuquy">
            <div class="container ">
                <div class="row ">
                    <div class="title-section">
                        <h2 class="my-title">
                            {!! $item->name !!}
                        </h2>
                    </div>
                    <p>Giới thiệu về {!! str_replace('Hình ảnh',"",$item->name)  !!}</p>
                    <!-- title-section / end -->
                </div>
                <?php $img = json_decode($item->content)?>
                <div class="row ">

                            @foreach($img as $key=>$value)
                        <div class="col-lg-4 col-md-4 col-sm-4 wow animated fadeInDown">
                        <span class="thumbnail ">
                            <div class="img ">
                                <img src="{{url('public/images')}}/{{$item->alias}}/{{$value}}" class="img-responsive myImg" alt="{{$item->name}}" />
                            </div>
                            </span>
                        </div>
                            @endforeach

                </div>
            </div>
        </section>
        <section class="testi-sec ">
            <div class="overlay "></div>
        </section>
        @endforeach
    @else
    <!-- end hình ảnh nhà nghỉ section -->
    <section class="island-phuquy">
        <div class="container ">
            <div class="row ">
                <div class="title-section">
                    <h2 class="my-title">
                        HÌNH ẢNH ĐẢO PHÚ QUÝ
                    </h2>
                </div>
                <p>Giới thiệu về đảo Phú Quý</p>
                <!-- title-section / end -->
            </div>
            <div class="row ">
                <div class="col-lg-4 col-md-4 col-sm-4 wow animated fadeInDown">
                        <span class="thumbnail ">
                            <div class="img ">
                                <img src="img/dao/dao1.jpg " class="img-responsive myImg" alt="hình ảnh đảo phú quý" />
                            </div>
                        </span>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 wow animated fadeInDown ">
                        <span class="thumbnail ">
                            <div class="img ">
                                <img src="img/dao/dao2.jpg " class="img-responsive myImg" alt="hình ảnh đảo phú quý" />
                            </div>
                        </span>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 wow animated fadeInDown">
                        <span class="thumbnail ">
                            <div class="img ">
                                <img src="img/dao/dao3.jpg " class="img-responsive myImg " alt="hình ảnh đảo phú quý" />
                            </div>
                        </span>
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-4 col-md-4 col-sm-4 wow animated fadeInDown ">
                        <span class="thumbnail ">
                            <div class="img ">
                                <img src="img/dao/dao4.jpg " class="img-responsive myImg" alt="hình ảnh đảo phú quý" />
                            </div>
                        </span>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 wow animated fadeInDown ">
                        <span class="thumbnail ">
                            <div class="img ">
                                <img src="img/dao/dao5.jpg " class="img-responsive myImg" alt="hình ảnh đảo phú quý" />
                            </div>
                        </span>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 wow animated fadeInDown ">
                        <span class="thumbnail ">
                            <div class="img ">
                                <img src="img/dao/dao6.jpg " class="img-responsive myImg" alt="hình ảnh đảo phú quý" />
                            </div>
                        </span>
                </div>
            </div>
        </div>
    </section>
    @endif
<!-- footer / start -->
@include('partial.footer')
<!-- footer / end -->
@include('partial.scripts')
</body>