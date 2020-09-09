@extends('layouts.app')

@section('content')
	<!-- Page header -->
	<div class="page-header page-header-light page-header-margin">
		<div class="breadcrumb-line breadcrumb-line-light bg-white breadcrumb-line-component header-elements-md-inline">
			<div class="d-flex">
				<div class="breadcrumb">
					<a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
					<a href="components_breadcrumbs.html" class="breadcrumb-item">Components</a>
					<span class="breadcrumb-item active">Breadcrumbs</span>
				</div>

				<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
			</div>

			<div class="header-elements d-none">
				<div class="breadcrumb justify-content-center">
					<a href="{{ route('user-management.users.create') }}" class="breadcrumb-elements-item">
						<i class="icon-comment-discussion mr-2"></i>
						{{ app()->getLocale() }}
						{{ session('locale') }}
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- /page header -->
	<!-- Content area -->
	<div class="content">
		<div class="card">
			<div class="card-header bg-light header-elements-inline">
				<h5 class="card-title">Bordered table</h5>
				<div class="header-elements">
					<div class="list-icons">
						<a class="list-icons-item" data-action="collapse"></a>
					</div>
				</div>
			</div>
			<div class="card-body">

			</div>
		</div>
		<!-- /bordered table -->
	</div>

@endsection
