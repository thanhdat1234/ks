<?php
/**
 * Created by PhpStorm.
 * User: ntdat
 * Date: 4/6/18
 * Time: 2:23 AM
 */
?>
<!-- footer / start -->
<footer>
    <div class="footer-inner">
        <div class="container">
            <div class="row">
                <div class="title-section">
                    <h2 class="my-title">
                        NHÀ NGHỈ
                        <span> THÁI BÌNH</span>
                    </h2>
                </div>
                <!-- title-section / end -->
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="footer-col">
                        <div class="footer-contact">
                            <div class="foo">
                                <span class="foo-title">Địa chỉ: </span>
                                <span>
                                    {{$info->addr}}
                                </span>
                            </div>
                            <div class="foo">
                                <span class="foo-title">Điện thoại: </span>
                                <span>
                                        <a href="tel:{{$info->phone_a}}">{{$info->phone_a}}</a>
                                    </span>
                            </div>
                            <div class="foo">
                                <span class="foo-title">Email: </span>
                                <a href="{{$info->email}}">
                                    <span>{{$info->email}}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col / end -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="footer-col">
                        <h4 class="my-title">
                            Giới thiệu nhà nghỉ
                        </h4>
                        <!-- title-section / end -->
                        <div class="content-intro">
                            <p>"{!! $info->content!!}"</p>
                        </div>
                    </div>
                </div>
                <!-- col / end -->
            </div>
        </div>
</footer>