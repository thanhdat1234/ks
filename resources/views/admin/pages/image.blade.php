@extends('admin.layouts.main')
<?php $title_z = $dataz->name ?>
<?php $imgxz = json_decode($dataz->content,true);?>
@section('title',$title_z)
@section('content')
    <div class="body-content">

        <div class="row thongtin">
            <div class="row">

                <!-- row / start -->
                <div class="row">
                    <i>Giới hạn hình ảnh rộng : {{$dataz->max_width}}  -  cao : {{$dataz->max_height}}</i>
                    <br>
                    <i>Khi bạn không chọn đúng kích thước hệ thống sẽ tự co hình ảnh giúp bạn !</i>
                    <br>
                    @if(!empty($imgxz))
                    @foreach($imgxz as $key => $value)
                    <div class="col-md-3 col-lg-3">
                        <section class="panel">
                            <header class="panel-heading">
                                <div class="panel-actions">
                                    <a href="#" class="fa fa-times" data-id="{{$key}}" data-slug="{{$dataz->alias}}"></a>
                                </div>

                                <h2 class="panel-title">Controls Disabled</h2>
                            </header>
                            <div class="panel-body">
                                <div class="owl-carousel owl-theme owl-carousel-init" style="display: block; opacity: 1;">
                                    <div class="owl-wrapper-outer autoHeight">
                                        <div class="owl-wrapper">
                                            <div class="owl-item">
                                                <div class="item">
                                                    <img alt="" class="img-responsive" src="{{url('public/images/')}}/{{$dataz->alias}}/{{$value}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    @endforeach
                    @else
                        <h2 class="alert alert-warning">Chưa có hình ảnh</h2>
                    @endif
                    <!-- col / end -->
                </div>
            </div>

            <!-- row / end -->
            <!-- Modal success -->
            <div id="modalHeaderColorSuccess" class="modal fade modal-block modal-header-color modal-block-success mfp-hide">
                <section class="form-modal modal-dialog">
                    <header class="panel-heading">
                        <h2 class="panel-title">Thành công!</h2>
                    </header>
                    <div class="panel-body">
                        <div class="modal-wrapper">
                            <div class="modal-icon">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </div>
                            <div class="modal-text">
                                <h4 style="color: black;">Lưu thành công !</h4>
                            </div>
                        </div>
                    </div>
                    <footer class="panel-footer">
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <button type="button" class="btn btn-success" data-dismiss="modal">OK</button>

                            </div>
                        </div>
                    </footer>
                </section>
            </div>
            <!-- Modal Info -->
            <a data-toggle="modal" class="info-triggle" href="#modalHeaderColorSuccess" style="display: none;">Thông tin</a>
            <div id="modalHeaderColorInfo" class="modal fade modal-block modal-header-color modal-block-info mfp-hide">
                <section class="panel">
                    <header class="panel-heading">
                        <h2 class="panel-title">Giới hạn hình ảnh!</h2>
                    </header>
                    <div class="panel-body">
                        <div class="modal-wrapper">
                            <div class="modal-icon">
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                            </div>
                            <div class="modal-text">
                                <h4 style="color: black;">Bạn không thể up thêm ảnh !</h4>
                            </div>
                        </div>
                    </div>
                    <footer class="panel-footer">
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <button type="button" class="btn btn-info" data-dismiss="modal">OK</button>

                            </div>
                        </div>
                    </footer>
                </section>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>

    <!-- SPARKLINES -->
    <script src="{!! asset('public/admin/assets') !!}/js/data/examples.modals.js"></script>
    <script type="text/javascript">
        $(function (e) {
            var obj = {'parent':'a[type="button"]','child':"input[name='myfile']",'link':'{{route('admin.images.postFile',$dataz->alias)}}','token':'{{csrf_token()}}'};
            uploadFile(e,obj);

            $('.fa-times').on('click',function(e){
                e.preventDefault();
                var id      = $(this).attr('data-id');
                var slug    = $(this).attr('data-slug');
                var obx     = {'id':id,'slug':slug,'_token':'{{csrf_token()}}'};
                $(this).data("id");
                $.post("{{route('admin.images.removeFile',$dataz->alias)}}",
                    obx
                    ,
                    function(data, status){
                        console.log(data);
                        if(data.code==1){
                            console.log(data);
                            window.location.reload();
                        }
                    });

            });
        })

    </script>
@endsection
@section('headerz')
    <!-- #PROJECTS: projects dropdown -->
    <div class="project-context hidden-xs">

			<span class="label">
				<ol class="breadcrumb">
					<li>
						<a href="index.html">Trang chủ</a>
					</li>
					<li class="active">{{$title_z}}</li>
				</ol>
			</span>
    </div>
    <!-- end projects dropdown -->
    <!-- #TOGGLE LAYOUT BUTTONS -->
    <!-- pulled right: nav area -->
    <div class="pull-right choose text-center">
        @if(count($imgxz) < $dataz->max)
        <div class="upload-btn-wrapper">
            <a type="button" class="btn btn-primary top-btn" title="Chọn hình">
                <i class="fa fa-file"></i>Chọn hình</a>
            <input style="display: none;" type="file" name="myfile" />
        </div>
        @else
        <div class="upload-btn-wrapper">
            <a class="alert alert-danger btn-block" title="Max file">Hạn chế số lượng hình : {{$dataz->max}} </a>
        </div>
        @endif


        <!-- collapse menu button -->
        <div id="hide-menu" class="btn-header pull-right">
				<span>
					<a href="javascript:void(0);" data-action="toggleMenu" title="Collapse Menu">
						<i class="fa fa-file"></i>
					</a>
				</span>
        </div>
        <!-- multiple lang dropdown : find all flags in the flags page -->
        <div id="fullscreen" class="btn-header transparent pull-right">
				<span>
					<a href="javascript:void(0);" data-action="launchFullscreen" title="Full Screen">
						<i class="fa fa-arrows-alt"></i>
					</a>
				</span>
        </div>
    </div>
    <!-- end pulled right: nav area -->
@endsection