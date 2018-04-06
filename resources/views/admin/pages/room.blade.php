@extends('admin.layouts.main')
<?php $title_z = $room->name ?>
<?php $dataz = $room?>
<?php $imgxz = json_decode($room->images,true);?>
@section('content')
		<div class="body-content">

			<div class="row thongtin">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 room-info">
						<div class="row">

							<div class=" col-md-8 col-lg-8">
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
								<!-- widget content -->
								<div class="widget-body" style="margin-bottom: 30px">

									<form name="uodatecode" action="{{route('admin.room.update',$dataz->alias)}}" method="post">
										<input type="text" hidden name="_token" value="{{csrf_token()}}">
										<fieldset>
											<input name="authenticity_token" type="hidden">
											<div class="form-group">
												<label class="title-form">Giá</label>
												<input class="form-control testInput" type="number" required name="price" value="{{$dataz->price?$dataz->price:''}}" placeholder="Nhập giá" title="Nhập giá">

											</div>
											<div class="form-group">
												<label class="title-form">Giá khuyến mãi</label>
													<input class="form-control testInput" placeholder="Nhập giá khuyễn mãi" title="Nhập giá khuyến mãi" name="sale" value="{{$dataz->sale?$dataz->sale:''}}">

											</div>
											<div class="form-group">
												<label class="title-form">Nội dung</label>
												<textarea name="contentz" id="contentz" hidden></textarea>

												<!-- widget grid -->
												<section id="widget-grid" class="">
													<div class="row">
														<article class="col-sm-12 col-md-12 col-lg-12">
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
																				{{$dataz->content}}
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
													</div>
													<!-- end row -->
												</section>
												<!-- end widget grid -->
											</div>
										</fieldset>
									</form>
								</div>
								<!-- end widget content -->
							</div>
						</div>
					</div>
				</div>

				<div class="row">

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
						<br>
						<i>Giới hạn hình ảnh rộng : {{$dataz->width}}  -  cao : {{$dataz->height}}</i>
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
					<!-- row / end -->
				</div>
				<!-- row / end -->
				<!-- Modal success -->
				<div id="modalHeaderColorSuccess" class="modal fade modal-header-color modal-block-success">
					<img src="{{url('public/admin/assets')}}/img/load.gif" id="load">
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
				<a data-toggle="modal" class="info-triggle" href="#modalHeaderColorSuccess" style="display: none;">Thông tin</a>
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

        $(function (e) {
            var obj = {'parent':'a[type="button"]','child':"input[name='myfile']",'link':'{{route('admin.room.postFile',$room->alias)}}','token':'{{csrf_token()}}'};
            uploadFile(e,obj);

            $('.fa-times').on('click',function(e){
                e.preventDefault();
                var id      = $(this).attr('data-id');
                var slug    = $(this).attr('data-slug');
                var obx     = {'id':id,'slug':slug,'_token':'{{csrf_token()}}'};
                $(this).data("id");
                $.post("{{route('admin.room.removeFile',$room->alias)}}",
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
        });


		function submitFormRoom() {
            var textareaValue = $(".summernote").code();
            $("#contentz").text(textareaValue);
            $('form[name="uodatecode"]').submit();

        }

        $(function(e){
            //console.log($(this).find('div.summernote').next());
				/*.next().children($('textarea.note-codable'),function(){
                console.log(this);
                console.log('123123');
                $(this).attr('name','content')
            });*/
		});

	</script>
@endsection
@section('headerz')
	<div class="project-context hidden-xs">

			<span class="label">
				<ol class="breadcrumb">
					<li>
						<a href="index.html" title="Quay về trang chủ">Trang chủ</a>
					</li>
					<li class="active">{{$room->name}}</li>
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
@endsection