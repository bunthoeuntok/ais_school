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
		<!-- Bordered table -->
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
				<div id="form-filter-wrapper">
					<div id="form-filter">
						<div class="row" id="filter-content">

						</div>
					</div>
				</div>
			</div>
		</div>

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
				<div class="table-responsive">
					{!! $dataTable->table() !!}
				</div>
			</div>
		</div>
		<!-- /bordered table -->
	</div>

@endsection

@push('script')
	{!! $dataTable->scripts() !!}
	<script>
		function f() {
			$('#text-box').val(3343)
        }
		function searchColumn() {
			return [
				{
					index: 0,
					type: 'text',
					label: '{{ __('user.name') }}',
					id: 'text-box',
				},
				{
					index: 1,
					type: 'select',
					label: '{{ __('user.name') }}',
					placeholder: '{{ __('user.name') }}',
					multiple: true,
					options: [
						{
							value: '',
							text: 'Option 1'
						},
						{
							value: 1,
							text: 'Option 1'
						},
						{
							value: 2,
							text: 'Option 2'
						},
					]
				 },
				{
					index: 2,
					type: 'date',
					label: 'Created Date',
					placeholder: 'Created Date'},
				{
					index: 3,
					type: 'date',
					label: 'Updated Date',
					placeholder: 'Updated Date',
					events: [
						{
						    eventName: 'change',
							action: 'f'
						}
					]

				},
			]
		}



		function generateFormComponents(column, fields) {
			var index = $(column)[0][0];
			var filterContent = document.getElementById('filter-content');
			fields.forEach(function (field) {
				if (index !== field.index)
					return;
				var inputTypes = ['', 'text', 'number', 'date', 'time', 'hidden', 'radio', 'checkbox'];
				var col = '';
				if (inputTypes.includes(field.type) || !field.type) {
					col = generateInput(field);
				} else if (field.type === 'select') {
					col = generateSelect(field);
				}
				$(col[0]).appendTo(filterContent);
				$(col[1]).on('change', function () {
					column.search($(this).val(), false, false, true).draw();
				});
			});
		}

		function generateInput(field) {
			var col = document.createElement('div');
			var control = document.createElement('div');
			var label = document.createElement('label');
			var input = document.createElement('input');

			col.className = 'col-md-4 col-lg-3';
			control.className = 'form-group';
			label.innerText = field.label || '';
			input.className = 'form-control input-control-sm';
			input.type = field.type || 'text';
			input.placeholder = field.placeholder || '';
			input.id = field.id || '';
			if (field.events) {
				field.events.forEach(function (event) {
					input.addEventListener(event.eventName, function () {
						if (typeof window[event.action] === 'function') window[event.action]();
					});
				});

			}

			control.appendChild(label);
			control.appendChild(input);
			col.appendChild(control);

			return [col, input];
		}

		function generateSelect(field) {
			var col = document.createElement('div');
			var control = document.createElement('div');
			var label = document.createElement('label');
			var select = document.createElement('select');

			col.className = 'col-md-4 col-lg-3';
			control.className = 'form-group';
			label.innerText = field.label || '';
			select.className = 'form-control data-table-multiselect';
			select.multiple = !!field.multiple;
			select.id = field.id || 0;
			field.options.forEach(function(item) {
				var option = document.createElement('option');
				option.value = item.value;
				option.innerText = item.text;
				select.appendChild(option);
			});

			control.appendChild(label);
			control.appendChild(select);
			col.appendChild(control);

			return [col, select];
		}
	</script>
@endpush
