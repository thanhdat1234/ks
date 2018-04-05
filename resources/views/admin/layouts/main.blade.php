<?php
/**
 * Created by PhpStorm.
 * User: ntdat
 * Date: 4/2/18
 * Time: 11:29 PM
 */
?>
        <!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="author" content="">
    @include('admin.themes.style')
</head>
<body class="smart-style-0" id="index">
{{--header--}}

@include('admin.partial.header')
<!-- #NAVIGATION -->
@include('admin.partial.navigation')


<!-- #MAIN PANEL -->
<div id="main" role="main">
    @yield('content')
</div>
<!-- END #MAIN PANEL -->
@include('admin.partial.footer')
<!-- #PLUGINS -->
@include('admin.themes.scripts')

</body>

</html>
