@extends('admin.layouts.main')
<?php $title_z = $dataz->name ?>
@section('title',$title_z)
@section('content')
    <div class="body-content">

        <div class="row thongtin">
            <div class="row">

                <!-- row / start -->
                <div class="row">
                    <div class="col-md-3 col-lg-3">
                        <section class="panel">
                            <header class="panel-heading">
                                <div class="panel-actions">
                                    <a href="#" class="fa fa-times"></a>
                                </div>

                                <h2 class="panel-title">Controls Disabled</h2>
                            </header>
                            <div class="panel-body">
                                <div class="owl-carousel owl-theme owl-carousel-init" style="display: block; opacity: 1;">
                                    <div class="owl-wrapper-outer autoHeight">
                                        <div class="owl-wrapper">
                                            <div class="owl-item">
                                                <div class="item">
                                                    <img alt="" class="img-responsive" src="{{url('public/admin/assets')}}/img/1.jpg">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
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
            <a data-toggle="modal" class="info-triggle" href="#modalHeaderColorInfo" style="display: none;">Thông tin</a>
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
    <script src="{{url('pubic/admin/assets')}}/js/data/autoNumeric.js"></script>
    <script type="text/javascript">

        /* DO NOT REMOVE : GLOBAL FUNCTIONS!
         *
         * pageSetUp(); WILL CALL THE FOLLOWING FUNCTIONS
         *
         * // activate tooltips
         * $("[rel=tooltip]").tooltip();
         *
         * // activate popovers
         * $("[rel=popover]").popover();
         *
         * // activate popovers with hover states
         * $("[rel=popover-hover]").popover({ trigger: "hover" });
         *
         * // activate inline charts
         * runAllCharts();
         *
         * // setup widgets
         * setup_widgets_desktop();
         *
         * // run form elements
         * runAllForms();
         *
         ********************************
         *
         * pageSetUp() is needed whenever you load a page.
         * It initializes and checks for all basic elements of the page
         * and makes rendering easier.
         *
         */

        pageSetUp();

        // PAGE RELATED SCRIPTS

        // pagefunction

        var pagefunction = function () {

            // summernote
            $('.summernote').summernote({
                height: 180,
                focus: false,
                tabsize: 2
            });

            // markdown
            $("#mymarkdown").markdown({
                autofocus: false,
                savable: true
            })

        };

        // end pagefunction

        // destroy generated instances
        // pagedestroy is called automatically before loading a new page
        // only usable in AJAX version!

        var pagedestroy = function () {

            // destroy summernote
            $(".summernote").summernote('destroy');

            //destroy markdown
            $("#mymarkdown").markdown('destroy');

            // debug msg
            if (debugState) {
                root.console.log("âœ” Summernote and Markdown editors destroyed");
            }

        }

        // end destroy

        // load summernote, and all markdown related plugins
        loadScript("js/data/summernote.min.js", function () {
            loadScript("js/data/markdown.min.js", function () {
                loadScript("js/data/to-markdown.min.js", function () {
                    loadScript("js/data/bootstrap-markdown.min.js", pagefunction);
                });
            });
        });

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

        <div class="upload-btn-wrapper">
            <a type="button" class="btn btn-primary top-btn" title="Chọn hình">
                <i class="fa fa-file"></i>Chọn hình</a>
            <input style="display: none;" type="file" name="myfile" />
        </div>


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