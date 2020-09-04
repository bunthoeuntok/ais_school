@extends('layouts.app')

@section('content')
	<!-- Page header -->
	<div class="page-header page-header-light page-header-margin">
		<div class="breadcrumb-line breadcrumb-line-light bg-white breadcrumb-line-component header-elements-md-inline">
			<div class="d-flex">
				<div class="breadcrumb">
					<a href="#" class="breadcrumb-item"><i class="icon-cog2 mr-2"></i> Settings</a>
					<span class="breadcrumb-item active">Users</span>
				</div>

				<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
			</div>

			<div class="header-elements d-none">
				<div class="breadcrumb justify-content-center">
					<a href="#" class="breadcrumb-elements-item">
						<i class="icon-comment-discussion mr-2"></i>
						Add User
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- /page header -->

	<div class="content">
		<div class="card">
			<div class="card-header">{{ __('Dashboard') }}</div>
			<div class="card-body">
				@if (session('status'))
					<div class="alert alert-success" role="alert">
						{{ session('status') }}
					</div>
				@endif

				{{ __('You are logged in!') }}
			</div>
		</div>
	</div>
@endsection
