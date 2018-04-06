@extends('admin.layouts.main')
<?php $title_z = $dataz->name ?>
@section('title',$title_z)
@section('content')
    <div class="body-content">

        <div class="row thongtin">
            <div class="row">

                <div class="col-md-12 col-lg-12">
                    <div class="jarviswidget jarviswidget-sortable" id="wid-id-2">
                        <!-- widget div-->
                        <div role="content">
                            @if(count($errors) > 0)
                                <div class="col-lg-12 my-alert">
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                <li>{!! $error !!}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <hr>
                                </div>
                            @endif
                            <div class="clearfix"></div>
                            <!-- widget edit box -->
                            <div class="jarviswidget-editbox">
                                <!-- This area used as dropdown edit box -->

                            </div>
                            <!-- end widget edit box -->

                            <!-- widget content -->
                            <div class="widget-body">
                                <form action="{{route('admin.info.update')}}" method="post" name="updateinfo">

                                        <input name="authenticity_token" type="hidden">
                                        <div class="form-group">
                                            <section class="col-md-8 col-lg-8">
                                                <label class="title-form">Email</label>
                                                <input class="form-control" placeholder="Nhập Email" name="email" value="{{$info->email?$info->email:''}}" required type="email">
                                            </section>
                                        </div>
                                        <!-- form / end -->
                                        <div class="form-group">
                                            <section class="col-md-4 col-lg-4">
                                                <label class="title-form">Số điện thoại 1</label>
                                                <input class="form-control" placeholder="Nhập số điện thoại 1" name="phone_a" value="{{$info->phone_a?$info->phone_a:''}}" type="text">
                                            </section>
                                            <section class="col-md-4 col-lg-4">
                                                <label class="title-form">Số điện thoại 2</label>
                                                <input class="form-control" placeholder="Nhập số điện thoại 2" name="phone_b" value="{{$info->phone_b?$info->phone_b:''}}" type="text">
                                            </section>
                                        </div>
                                        <!-- form / end -->
                                        <div class="form-group">
                                            <section class="col-md-8 col-lg-8">
                                                <label class="title-form">Địa chỉ</label>
                                                <input class="form-control" placeholder="Nhập địa chỉ" type="text" name="addr" value="{{$info->addr?$info->addr:''}}">
                                            </section>
                                        </div>
                                        <div class="form-group">
                                            <section class="col-md-8 col-lg-8">
                                                <label class="title-form">Nội dung trang giới thiệu</label>
                                                <textarea name="contentz" id="contentz" hidden></textarea>
                                            </section>
                                            <!-- widget grid -->
                                            <section id="widget-grid" class="">
                                                <article class="col-md-8 col-lg-8">
                                                    <div class="jarviswidget jarviswidget-color-blue" id="wid-id-0" data-widget-colorbutton="false" data-widget-editbutton="false"
                                                         data-widget-togglebutton="false" data-widget-fullscreenbutton="false" data-widget-sortable="false">
                                                        <header role="heading"></header>
                                                        <!-- widget div-->
                                                        <div>
                                                            <!-- widget edit box -->
                                                            <div class="jarviswidget-editbox">
                                                                <!-- This area used as dropdown edit box -->
                                                            </div>
                                                            <!-- end widget edit box -->
                                                            <!-- widget content -->
                                                            <div class="widget-body no-padding">
                                                                <textarea class="summernote">
                                                                    {{$info->content}}
                                                                </textarea>
                                                                <div class="widget-footer smart-form">
                                                                </div>
                                                            </div>
                                                            <!-- end widget content -->
                                                        </div>
                                                        <!-- end widget div -->
                                                    </div>
                                                    <!-- end widget -->
                                                </article>
                                                <!-- WIDGET END -->
                                            </section>
                                        </div>
                                        <!-- end widget grid -->=
                                <input type="text" hidden name="_token" value="{{csrf_token()}}">
                            <!-- form / end -->

                            <!-- fieldset / end -->
                            </form>

                        </div>
                        <!-- end widget content -->

                    </div>
                    <!-- end widget div -->

                </div>
            </div>
            <!-- Modal success -->
            <div id="modalHeaderColorSuccess" class="modal fade modal-header-color modal-block-success">
                <img src="{{url('public/admin')}}/img/load.gif" id="load">
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
            <!-- Modal success / end-->

        </div>
    </div>
@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>

    <script src="{{url('/public/admin/assets')}}/js/data/jquery.mb.browser.min.js"></script>

    <!-- JAVISWIDGET -->
    <script src="{{url('/public/admin/assets')}}/js/data/jarvis.widget.min.js"></script>

    <script type="text/javascript" src="{{url('/public/admin/assets')}}/js/data/summernote.min.js"></script>

    <script type="text/javascript" src="{{url('/public/admin/assets')}}/js/data/markdown.min.js"></script>


    <script src="{{url('/public/admin/assets')}}/js/data/autoNumeric.js"></script>

    <script src="{{url('/public/admin/assets')}}/js/data/examples.modals.js"></script>

    <script type="text/javascript">
        <!-- browser msie issue fix -->

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
            $('.summernote').summernote('code',{
                height: 180,
                focus: false,
                tabsize: 2,

            });
            //var markupStr = $('.summernote').summernote('code');
            //console.log(markupStr);
            // markdown
            $("#mymarkdown").markdown({
                autofocus: false,
                savable: true,
                onSave: function(e) {
                    alert("Saving '"+e.getContent()+"'...")
                },
            })

        };
        function testxx(e){
            console.log(e);
        }

        // end pagefunction

        // destroy generated instances
        // pagedestroy is called automatically before loading a new page
        // only usable in AJAX version!

        //$(".summernote").summernote('destroy');
        //var markupStr = $('.summernote').eq(1).summernote('code');
        //console.log(markupStr);

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
        loadScript("{{url('/public/admin/assets')}}/js/data/summernote.min.js", function () {
            loadScript("{{url('/public/admin/assets')}}/js/data/markdown.min.js", function () {
                loadScript("{{url('/public/admin/assets')}}/js/data/to-markdown.min.js", function () {
                    loadScript("{{url('/public/admin/assets')}}/js/data/bootstrap-markdown.min.js", pagefunction);
                });
            });
        });
        function submitFormRoom() {
            var textareaValue = $(".summernote").code();
            $("#contentz").text(textareaValue);
            $('form[name="updateinfo"]').submit();

        }

    </script>
@endsection
@section('headerz')
    <div class="project-context hidden-xs">

			<span class="label">
				<ol class="breadcrumb">
					<li>
						<a href="{{url('/admin')}}" title="Quay về trang chủ">Trang chủ</a>
					</li>
					<li class="active">{{$title_z}}</li>
				</ol>
			</span>
    </div>
    <!-- end projects dropdown -->
    <!-- #TOGGLE LAYOUT BUTTONS -->
    <!-- pulled right: nav area -->
    <div class="pull-right choose text-center">
        <a href="javascript:void(0)" class="btn btn-primary top-btn" data-toggle="modal" href="#modalHeaderColorSuccess" title="Lưu"
           onclick="return submitFormRoom();">
            <i class="fa fa-save"></i>Lưu</a>
        <!-- collapse menu button -->
        <div id="hide-menu" class="btn-header pull-right">
				<span>
					<a href="javascript:void(0);" data-action="toggleMenu" title="Collapse Menu">
						<i class="fa fa-reorder"></i>
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