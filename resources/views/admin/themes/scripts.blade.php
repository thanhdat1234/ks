<?php
/**
 * Created by PhpStorm.
 * User: ntdat
 * Date: 4/2/18
 * Time: 11:54 PM
 */?>
<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->

<script>
    if (!window.jQuery) {
        document.write('<script src="{!! asset('public/admin/assets') !!}/js/data/jquery-2.1.1.min.js"><\/script>');
    }
</script>


<script>
    if (!window.jQuery.ui) {
        document.write('<script src="{!! asset('public/admin/assets') !!}/js/data/jquery-ui-1.10.3.min.js"><\/script>');
    }
</script>

<!-- IMPORTANT: APP CONFIG -->
<script src="{!! asset('public/admin/assets') !!}/js/data/app.config.js"></script>

<!-- BOOTSTRAP JS -->
<script src="{!! asset('public/admin/assets') !!}/js/data/bootstrap.min.js"></script>

<!-- SPARKLINES -->
<script src="{!! asset('public/admin/assets') !!}/js/data/jquery.sparkline.min.js"></script>

<!-- JQUERY VALIDATE -->
<script src="{!! asset('public/admin/assets') !!}/js/data/jquery.validate.min.js"></script>

<!-- browser msie issue fix -->
<script src="{!! asset('public/admin/assets') !!}/js/data/jquery.mb.browser.min.js"></script>

<!-- FastClick: For mobile devices: you can disable this in app.js -->
<script src="{!! asset('public/admin/assets') !!}/js/data/fastclick.min.js"></script>

<script src="{!! asset('public/admin/assets') !!}/js/data/app.min.js"></script>
<script src="{!! asset('public/admin/assets') !!}/js/data/main.js"></script>




@yield('script')
<!-- IMPORTANT: APP CONFIG -->


<!-- Your GOOGLE ANALYTICS CODE Below -->
{{--<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-43548732-3']);
    _gaq.push(['_trackPageview']);

    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();
</script>--}}
