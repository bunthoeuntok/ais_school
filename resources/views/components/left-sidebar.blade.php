<div class="sidebar sidebar-dark sidebar-main sidebar-fixed sidebar-expand-md">
	<!-- Sidebar mobile toggler -->
	<div class="sidebar-mobile-toggler text-center">
		<a href="#" class="sidebar-mobile-main-toggle">
			<i class="icon-arrow-left8"></i>
		</a>
		Navigation
		<a href="#" class="sidebar-mobile-expand">
			<i class="icon-screen-full"></i>
			<i class="icon-screen-normal"></i>
		</a>
	</div>
	<!-- /sidebar mobile toggler -->


	<!-- Sidebar content -->
	<div class="sidebar-content slim-scroll">
		<!-- Main navigation -->
		<div class="card card-sidebar-mobile">
			<ul class="nav nav-sidebar" data-nav-type="accordion">

				<!-- Main -->
				<li class="nav-item-header">
					<div class="text-uppercase font-size-xs line-height-xs">Page</div>
					<i class="icon-menu" title="Main"></i></li>
				<li class="nav-item">
					<a href="{{ route('system.dashboard') }}" class="nav-link">
						<i class="icon-home4"></i>
						<span>
                            Dashboard
                            <span class="d-block font-weight-normal opacity-50">No active orders</span>
                        </span>
					</a>
				</li>
				@foreach(\App\Helpers\GlobalHelper::modules() as $module)
					<li class="nav-item nav-item-submenu {{ \App\Helpers\GlobalHelper::activePage(1, $module->slug) }}">
						<a href="#" class="nav-link"><i class="{{ $module->icon }}"></i>
							<span>{{ __($module->slug) }}</span></a>
						<ul class="nav nav-group-sub" data-submenu-title="Layouts">
							@foreach ($module->pages as $page)
								@can($page->can_access)
									<li class="nav-item">
										<a href="{{ route($page->route_name) }}"
										   class="nav-link {{ \App\Helpers\GlobalHelper::activePage(2, $page->slug) }}">
											<i class="{{ $page->icon }}"></i>
											{{ $page->name }}
										</a>
									</li>
								@endcan
							@endforeach

						</ul>
					</li>
				@endforeach


			</ul>
		</div>
		<!-- /main navigation -->

	</div>
	<!-- /sidebar content -->

</div>
