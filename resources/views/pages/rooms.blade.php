<!DOCTYPE html>
<html lang="en">
<?php
$img = json_decode($room->images);
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="utf-8">
    <!-- Meta Description -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Nguyễn Thành Đạt">
    <title>{{$room->name}}</title>
    @include('partial.style')
</head>

<body>
@include('partial.header',$info)
<section class="form-dp">
    <div class="container">
        <div class="row">
            <div class="col-md-12 details">
                <div class="panel panel-default">
                    <div class="panel-body" style="padding: 0;">
                        <div class="col-md-8 col-xs-12 col-sm-12" style="padding: 3px;">
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    @if($img)
                                        @foreach($img as $key=>$value)
                                            <li data-target="#myCarousel" data-slide-to="{{$key}}" class="{{$key==0?'active':''}}"></li>
                                        @endforeach
                                    @else

                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel" data-slide-to="1"></li>
                                    @endif

                                </ol>
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner img-mobile" role="listbox">
                                    @if($img)
                                        @foreach($img as $key=>$value)
                                        <div class="item {{$key==0?'active':''}}" >
                                            <img src="{{url('public/images')}}/{{$room->alias}}/{{$value}}">
                                        </div>
                                        @endforeach
                                    @else
                                    <div class="item active">
                                        <img src="img/phong1.jpg">
                                    </div>
                                    <div class="item">
                                        <img src="img/phong2.jpg" class="img-responsive">
                                    </div>
                                    @endif
                                </div>
                                <!-- Left and right controls -->
                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-xs-12 wow animated zoomIn divph" style="padding-left: 5px;">
                            <h3>
                                <strong>CHI TIẾT</strong>
                            </h3>
                            <div class="col-md-12 text-left">
                                <h4>
                                    <span class="price-text-color">Loại phòng: </span>
                                    <span class="type">{{$room->name}}</span>
                                </h4>
                                <h4>
                                    <span class="price-text-color">Giá phòng: </span>
                                    <span class="gia">{{number_format($room->price)}}đ</span>
                                </h4>
                                @if($room->sale)
                                    <h4>
                                        <span class="price-text-color">Giá khuyến mãi: </span>
                                        <span class="gia">{{number_format($room->sale)}}đ</span>
                                    </h4>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 wow animated zoomIn">
                    <span class="thumbnail">
                        <div class="img">
                            <h3>MÔ TẢ PHÒNG</h3>
                            @if($room->content)
                            <div class="content-main">
                                {!! $room->content !!}
                            </div>
                            @else
                            <div class="content-main">
                                Phòng VIP có diện tích khoảng 40-50 mét vuông nằm ở khu dãy trước của khách sạn rất yên tĩnh. Từ phòng quý khách có thế nhìn
                                được toàn cảnh vịnh Hạ Long .Phòng được trang bị một giường đôi với điều hòa nhiệt độ 2 chiều
                                nóng lạnh, phòng tắm với trang thiết bị hiện đại sang trọng, bàn làm việc, tivi LCD truyền
                                hình cáp với nhiều kênh giải trí hấp dẫn. Ngoài ra phòng còn được trang bị tủ lạnh, két sắt
                                an toàn, điện thoại để bàn, internet wifi miễn phí. Trong phòng chúng tôi phục vụ nước uống,
                                trà, cafe miễn phí. Giá phòng đã bao gồm ăn sáng tại khách sạn.
                            </div>
                            @endif
                            <!-- content-main / end -->
                        </div>
                        <!-- end / img -->
                    </span>
            </div>
        </div>
    </div>
</section>
<!-- footer / start -->
@include('partial.footer')
<!-- footer / end -->
@include('partial.scripts')
</body>