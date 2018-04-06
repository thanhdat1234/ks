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
    <meta name="author" content="Nguyễn Hoàng Thắng">
    <title>Trang chủ</title>
    @include('partial.style')
</head>
<body id="body" data-spy="scroll">
<!-- Header / start -->
@include('partial.header',$info)
<!-- Header / end -->
<!-- Section 1 / start -->
@include('partial.slider',$img_slider)
<!--section 1 / end-->
@include('partial.list_room',$room=$r_don)
@include('partial.list_room',$room=$r_doi)
<!-- section 1 / end -->
<!--section intro / start-->
@include('partial.info')
<!-- section 1 / end -->
<!-- footer / start -->
@include('partial.footer')
<!-- footer / end -->
@include('partial.scripts')

</body>