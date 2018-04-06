<?php
/**
 * Created by PhpStorm.
 * User: ntdat
 * Date: 4/2/18
 * Time: 11:56 PM
 */?>
<!-- Left panel : Navigation area -->
<aside id="left-panel">
    <!-- NAVIGATION : This navigation is also responsive-->
    <nav>
        <ul>

            <li class="">
                <a href="" onclick="location.href='{{ url('/admin')}}'" title="Trang chủ">
                    <i class="fa fa-lg fa-fw fa-home"></i>
                    <span class="menu-item-parent">Trang chủ</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-lg fa-fw fa fa-info-circle"></i>
                    <span class="menu-item-parent">Thông tin phòng</span>
                </a>
                <ul>
                    <li>
                        <a href="" onclick="location.href='{{ route('admin.room.getList','phong-don') }}'" title="Phòng đơn">Phòng đơn</a>
                    </li>
                    <li>
                        <a href="" onclick="location.href='{{ route('admin.room.getList','phong-doi') }}'" title="Phòng đôi">Phòng đôi</a>
                    </li>
                </ul>
            </li>
            <!-- li / end -->
            <li>
                <a href=""  onclick="location.href='{{ route('admin.info.getList','thong-tin-nha-nghi') }}'" title="thông tin nhà nghỉ">
                    <i class="fa fa-lg fa fa-building-o" aria-hidden="true"></i>
                    <span class="menu-item-parent">Thông tin nhà nghỉ</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-lg fa-fw fa fa-picture-o"></i>
                    <span class="menu-item-parent">Hình ảnh</span>
                </a>
                <ul>
                    @if($img_m && $img_m!= null)
                        @foreach($img_m as $item)
                            <li>
                                <a href="" onclick="location.href='{{route('admin.images.getList',$item->alias)}}'" title="{{$item->name}}">{{$item->name}}</a>
                            </li>
                        @endforeach
                    @endif

                </ul>
            </li>
            <!-- li / end -->
        </ul>
    </nav>
</aside>
<!-- END NAVIGATION -->
