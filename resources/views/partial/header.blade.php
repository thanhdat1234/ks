<header class="main-header">
    <!-- header-upper / end -->
    <div class="header-lower">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="logo">
                    <h1 id="b" class="navbar-brand" href="#">
                        <a href="{{url('')}}">NHÀ NGHỈ
                            <span>THÁI BÌNH</span>
                        </a>
                    </h1>
                </div>
            </div>
            <div class="auto-clear-fix row">
                <nav class="main-menu">
                    <div class="collapse navbar-collapse navbar-ex1-collapse" role="navigation" aria-expanded="false">
                        <ul class="navigation-menu nav navbar-nav">
                            <li>
                                <a href="{{url('')}}">Trang chủ </a>
                            </li>
                            <li class="dropdown child-menu">
                                <a href="#">Phòng nhà nghỉ
                                    <i class="click-show fa fa-plus hidden-lg hidden-sm hidden-md"></i>
                                </a>
                                <ul class="content-menu">
                                    <li>
                                        <a class="n1" href="{{route('home.page.room','phong-don')}}">Phòng đơn</a>
                                    </li>
                                    <li>
                                        <a class="n2" href="{{route('home.page.room','phong-doi')}}">Phòng đôi</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{route('home.page.img')}}">Hình ảnh</a>
                            </li>
                            <li>
                                <a href="{{route('home.page.service')}}">Dịch vụ</a>
                            </li>
                            <li class="phone">
                                @if($phone_a)
                                <a href="tel:{{$info->phone_a}}" title="Gọi {{ $info->phone_a }} ">
                                        <span style="color: red">
                                            <i class="fa fa-phone pulse-button" aria-hidden="true"></i>
                                        </span>
                                    <font color="black"> {{$info->phone_a}} </font>
                                </a>
                                @endif
                                @if($info->phone_b)
                                <a href="tel:{{$info->phone_b}}" title="Gọi 09818{{$info->phone_b}}">
                                        <span style="color: red">
                                            <i class="fa fa-phone pulse-button" aria-hidden="true"></i>
                                        </span>
                                    <font color="black">{{$info->phone_b}}</font>
                                </a>
                                @endif
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- main-menu / end -->
            </div>
        </div>
    </div>
</header>