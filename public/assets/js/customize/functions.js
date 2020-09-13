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
			var value = $(this).val();
			var regex = [];
			if (Array.isArray(value)) {
				regex = value.map(function (value) {
					return $.fn.dataTable.util.escapeRegex(value);
				}).join('|');
			}
			column.search(regex.length > 0 ? '^(' + regex + ')$' : value, true, false).draw();
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
	if (field.id) input.id = field.id;
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
