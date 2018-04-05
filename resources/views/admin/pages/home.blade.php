@extends('admin.layouts.main')
@section('title','Trang chu')
@section('content')
<div class="body-content">
</div>
@endsection
@section('headerz')
    <div class="project-context hidden-xs" id="menu">
			<span class="label">
				<ol class="breadcrumb">
					<li>
						<a href="#">Trang chủ</a>
					</li>
					<li class="active">Nhà nghỉ Thái Bình</li>
				</ol>
			</span>
    </div>
    <!-- end projects dropdown -->
    <!-- #TOGGLE LAYOUT BUTTONS -->
    <!-- pulled right: nav area -->
    <div class="pull-right">
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
