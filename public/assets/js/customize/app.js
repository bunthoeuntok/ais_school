var _App = function () {

    // DtataTable
    var _initDataTables = function (test) {
        $.extend($.fn.dataTable.defaults, {
            autoWidth: false,
            colReorder: true,
            searching: false,
            lengthChange: false,
            pageLength: 20,
            pagingType: "full_numbers",
            dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
            language: {
                search: '<span>Filter:</span> _INPUT_',
                searchPlaceholder: 'Type to filter...',
                lengthMenu: '<span>Show:</span> _MENU_',
                paginate: {
                    'first': '<i class="icon-previous2"></i>',
                    'last': '<i class="icon-next2"></i>',
                    'next': $('html').attr('dir') == 'rtl' ? '<i class="icon-arrow-left5"></i>' : '<i class="icon-arrow-right5"></i>',
                    'previous': $('html').attr('dir') == 'rtl' ? '<i class="icon-arrow-right5"></i>' : '<i class="icon-arrow-right5"></i>'
                }
            }
        });
    };
    // Uniform
    var _componentUniform = function () {
        if (!$().uniform) {
            console.warn('Warning - uniform.min.js is not loaded.');
            return;
        }

        // Default initialization
        $('.form-check-input-styled').uniform();

        //
        // Contextual colors
        //

        // Primary
        $('.form-check-input-styled-primary').uniform({
            wrapperClass: 'border-primary text-primary'
        });

        // Danger
        $('.form-check-input-styled-danger').uniform({
            wrapperClass: 'border-danger text-danger'
        });

        // Success
        $('.form-check-input-styled-success').uniform({
            wrapperClass: 'border-success text-success'
        });

        // Warning
        $('.form-check-input-styled-warning').uniform({
            wrapperClass: 'border-warning text-warning'
        });

        // Info
        $('.form-check-input-styled-info').uniform({
            wrapperClass: 'border-info text-info'
        });

        // Custom color
        $('.form-check-input-styled-custom').uniform({
            wrapperClass: 'border-indigo-400 text-indigo-400'
        });
    };

    // Switchery
    var _componentSwitchery = function () {
        if (typeof Switchery == 'undefined') {
            console.warn('Warning - switchery.min.js is not loaded.');
            return;
        }

        // Initialize multiple switches
        var elems = Array.prototype.slice.call(document.querySelectorAll('.form-check-input-switchery'));
        elems.forEach(function (html) {
            var switchery = new Switchery(html);
        });

        // Colored switches
        var primary = document.querySelector('.form-check-input-switchery-primary');
        var switchery = new Switchery(primary, {color: '#2196F3'});

        var danger = document.querySelector('.form-check-input-switchery-danger');
        var switchery = new Switchery(danger, {color: '#EF5350'});

        var warning = document.querySelector('.form-check-input-switchery-warning');
        var switchery = new Switchery(warning, {color: '#FF7043'});

        var info = document.querySelector('.form-check-input-switchery-info');
        var switchery = new Switchery(info, {color: '#00BCD4'});
    };

    // Bootstrap switch
    var _componentBootstrapSwitch = function () {
        if (!$().bootstrapSwitch) {
            console.warn('Warning - switch.min.js is not loaded.');
            return;
        }

        // Initialize
        $('.form-check-input-switch').bootstrapSwitch();
    };

    var _componentPerfectScrollbar = function () {
        if (typeof PerfectScrollbar == 'undefined') {
            console.warn('Warning - perfect_scrollbar.min.js is not loaded.');
            return;
        }

        $('.slim-scroll').each(function () {
            const ps = new PerfectScrollbar($(this)[0], {
                wheelSpeed: 2,
                wheelPropagation: true,
            });
        });
    };

    var _layoutChat = function () {
        if (!$('.slim-scroll-chat')) {
            $('.slim-scroll-chat').animate({
                scrollTop: $('.slim-scroll-chat')[0].scrollHeight - $('.slim-scroll-chat')[0].clientHeight
            }, 300);
        }
    };

    var _layoutChatHidden = function () {
        $('.nav-link[data-toggle="tab"]').on('shown.bs.tab', function (e) {
            _layoutChat();
        });
    };


//
// Return objects assigned to module
//

    return {
        initComponents: function () {
            _componentUniform();
            _componentSwitchery();
            _componentBootstrapSwitch();
            _componentPerfectScrollbar();
            _layoutChat();
            _layoutChatHidden();
            _initDataTables();
        }
    }
}();


// Initialize module
// ------------------------------

document.addEventListener('DOMContentLoaded', function () {
    _App.initComponents();
});
