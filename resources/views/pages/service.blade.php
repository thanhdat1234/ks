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
    <title>Dịch vụ</title>
    @include('partial.style')
</head>

<body>
     @include('partial.header',$info)

     <div class="section section_tab_service">
        <div class="container text-center image-hotel">
            <div class="row col-md-12 image-pic animated fadeInUp">
                <h3>
                    <strong>Dịch vụ khác</strong>
                </h3>
            </div>
            <div class="content">
                <div class="tab-d animated fadeInUp">
                    <ul class="nav Dnav_Utabs_C" role="tablist">
                        <li role="presentation" class="active">
                            <a class="btn btn-style btn-style-small" href="#tab-service-1" aria-controls="tab-service-1" role="tab" data-toggle="tab">Đồ ăn</a>
                        </li>
                        <li role="presentation">
                            <a class="btn btn-style btn-style-small" href="#tab-service-2" aria-controls="tab-service-2" role="tab" data-toggle="tab">Thể thao</a>
                        </li>
                        <li role="presentation">
                            <a class="btn btn-style btn-style-small" href="#tab-service-3" aria-controls="tab-service-3" role="tab" data-toggle="tab">Đậu xe</a>
                        </li>
                        <li role="presentation">
                            <a class="btn btn-style btn-style-small" href="#tab-service-4" aria-controls="tab-service-4" role="tab" data-toggle="tab">Gym</a>
                        </li>
                        <li role="presentation">
                            <a class="btn btn-style btn-style-small" href="#tab-service-5" aria-controls="tab-service-5" role="tab" data-toggle="tab">Bơi lội</a>
                        </li>
                    </ul>
                    <div class="tab-content animated fadeInUp">
                        <div role="tabpanel" class="tab-pane fade in active" id="tab-service-1">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <a href="#">
                                        <img src="img/dichvu.jpg" alt="dịch vụ khách sạn mini an phú">
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="wrap-content-tab">
                                        <h2 class="title">
                                            <a href="#">Đồ ăn</a>
                                        </h2>
                                        <!-- content-main / start -->
                                        <div class="content-main">
                                            <p>
                                                <b class="summary">Đặt bàn gia đinh 4 người siêu ngọt</b>
                                            </p>
                                            <p>Lần đầu tiên, Mường Thanh – hệ thống khách sạn đạt tiêu chuẩn 5 sao. kết hợp
                                                cùng Marry.vn – kênh thông tin cưới hỏi số một Việt Nam giới thiệu và đem
                                                đến cho cô dâu Cras ac justo et augue suscipit euismod vel eget lectus. Proin
                                                vehicula nunc arcu, pulvinar accumsan nulla porta ve</p>
                                        </div>
                                        <!-- content-main / end -->
                                        <div class="info">
                                            <b>Giờ phục vụ: </b>24/24
                                            <b>Hotline: </b>{{$info->phone_a}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade " id="tab-service-2">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <a href="#">
                                        <img src="img/thethao.jpg" alt="dịch vụ khách sạn mini an phú">
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="wrap-content-tab">
                                        <h2 class="title">
                                            <a href="#">Thể thao</a>
                                        </h2>
                                        <!-- content-main / start -->
                                        <div class="content-main">
                                            <p>
                                                <b class="summary">Đặt bàn gia đinh 4 người siêu ngọt</b>
                                            </p>
                                            <p>Lần đầu tiên, Mường Thanh – hệ thống khách sạn đạt tiêu chuẩn 5 sao. kết hợp
                                                cùng Marry.vn – kênh thông tin cưới hỏi số một Việt Nam giới thiệu và đem
                                                đến cho cô dâu Cras ac justo et augue suscipit euismod vel eget lectus. Proin
                                                vehicula nunc arcu, pulvinar accumsan nulla porta ve</p>
                                        </div>
                                        <!-- content-main / end -->
                                        <div class="info">
                                            <b>Giờ phục vụ: </b>24/7
                                            <b>Hotline: </b>{{$info->phone_a}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade " id="tab-service-3">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <a href="#">
                                        <img src="img/dauxe.jpg" alt="dịch vụ khách sạn mini an phú">
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="wrap-content-tab">
                                        <h2 class="title">
                                            <a href="#">Đậu xe</a>
                                        </h2>
                                        <!-- content-main / start -->
                                        <div class="content-main">
                                            <p>
                                                <b class="summary">Đặt bàn gia đinh 4 người siêu ngọt</b>
                                            </p>
                                            <p>Lần đầu tiên, Mường Thanh – hệ thống khách sạn đạt tiêu chuẩn 5 sao. kết hợp
                                                cùng Marry.vn – kênh thông tin cưới hỏi số một Việt Nam giới thiệu và đem
                                                đến cho cô dâu Cras ac justo et augue suscipit euismod vel eget lectus. Proin
                                                vehicula nunc arcu, pulvinar accumsan nulla porta ve</p>
                                        </div>
                                        <!-- content-main / end -->
                                        <div class="info">
                                            <b>Giờ phục vụ: </b>24/24
                                            <b>Hotline: </b>{{$info->phone_a}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade " id="tab-service-4">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <a href="#">
                                        <img src="img/gym.jpg" alt="dịch vụ khách sạn mini an phú">
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="wrap-content-tab">
                                        <h2 class="title">
                                            <a href="#">Gym</a>
                                        </h2>
                                        <!-- content-main / start -->
                                        <div class="content-main">
                                            <p>
                                                <b class="summary">Đặt bàn gia đinh 4 người siêu ngọt</b>
                                            </p>
                                            <p>Lần đầu tiên, Mường Thanh – hệ thống khách sạn đạt tiêu chuẩn 5 sao. kết hợp
                                                cùng Marry.vn – kênh thông tin cưới hỏi số một Việt Nam giới thiệu và đem
                                                đến cho cô dâu Cras ac justo et augue suscipit euismod vel eget lectus. Proin
                                                vehicula nunc arcu, pulvinar accumsan nulla porta ve</p>
                                        </div>
                                        <!-- content-main / end -->
                                        <div class="info">
                                            <b>Giờ phục vụ: </b>24/24
                                            <b>Hotline: </b>{{$info->phone_a}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade " id="tab-service-5">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <a href="#">
                                        <img src="img/boiloi.jpg" alt="dịch vụ khách sạn mini an phú">
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="wrap-content-tab">
                                        <h2 class="title">
                                            <a href="#">Bơi lội</a>
                                        </h2>
                                        <!-- content-main / start -->
                                        <div class="content-main">
                                            <p>
                                                <b class="summary">Đặt bàn gia đinh 4 người siêu ngọt</b>
                                            </p>
                                            <p>Lần đầu tiên, Mường Thanh – hệ thống khách sạn đạt tiêu chuẩn 5 sao. kết hợp
                                                cùng Marry.vn – kênh thông tin cưới hỏi số một Việt Nam giới thiệu và đem
                                                đến cho cô dâu Cras ac justo et augue suscipit euismod vel eget lectus. Proin
                                                vehicula nunc arcu, pulvinar accumsan nulla porta ve</p>
                                        </div>
                                        <!-- content-main / end -->
                                        <div class="info">
                                            <b>Giờ phục vụ: </b>24/24
                                            <b>Hotline: </b>{{$info->phone_a}}</div>
                                    </div>
                                </div>
                                <!-- col / end -->
                            </div>
                        </div>
                        <!-- tabpanel / end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer / start -->
    @include('partial.footer')
    <!-- footer / end -->
    @include('partial.scripts')
</body>