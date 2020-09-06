(function(window, $) { window.LaravelDataTables = window.LaravelDataTables || {};
window.LaravelDataTables["%1$s"] = new $.extend( $.fn.dataTable.defaults, {
autoWidth: true,
colReorder: true,
searching: true,
lengthChange: true,
pageLength: 50,
pagingType: "full_numbers",
dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
language: {
search: '<span>Filter:</span> _INPUT_',
searchPlaceholder: 'Type to filter...',
lengthMenu: '<span>Show:</span> _MENU_',
paginate: { 'first': '<i class="icon-previous2"></i>', 'last': '<i class="icon-next2"></i>', 'next': $('html').attr('dir') == 'rtl' ? '<i class="icon-arrow-left5"></i>' : '<i class="icon-arrow-right5"></i>', 'previous': $('html').attr('dir') == 'rtl' ? '<i class="icon-arrow-right5"></i>' : '<i class="icon-arrow-left5"></i>' }},
});
window.LaravelDataTables["%1$s"] = $("#%1$s").DataTable(%2$s); })(window, jQuery);


