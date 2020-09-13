<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
	<!-- Style CSS -->
	<link href="{{ asset('assets/css/icons/icomoon/styles.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/bootstrap_limitless.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/layout.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/components.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/colors.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/customize/app.css') }}" rel="stylesheet" type="text/css">

	<!-- Core JS files -->
    <script src="{{ asset('assets/js/main/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/main/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/loaders/blockui.min.js') }}"></script>

	<!-- /theme JS files -->
	<script src="{{ asset('assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
	<script src="{{ asset('assets/js/plugins/ui/perfect_scrollbar.min.js') }}"></script>
	<script src="{{ asset('assets/js/plugins/tables/datatables/datatables.min.js') }}"></script>
	<script src="{{ asset('assets/js/plugins/tables/datatables/extensions/col_reorder.min.js') }}"></script>
	<script src="{{ asset('assets/js/plugins/forms/selects/bootstrap_multiselect.js') }}"></script>
	<script src="{{ asset('assets/js/plugins/forms/selects/select2.min.js') }}"></script>

	<script src="{{ asset('assets/js/app.js') }}"></script>
	<script src="{{ asset('assets/js/customize/functions.js') }}"></script>
    <script src="{{ asset('assets/js/customize/app.js') }}"></script>
</head>
<body>
	<x-top-navbar></x-top-navbar>
	<div class="page-content">
		<x-left-sidebar></x-left-sidebar>
		<div class="content-wrapper">

			@yield('content')

			<div class="footer navbar navbar-expand-lg navbar-light">
                <div class="text-center d-lg-none w-100">
                    <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
                        <i class="icon-unfold mr-2"></i>
                        Footer
                    </button>
                </div>
                <div class="navbar-collapse collapse" id="navbar-footer">
                    <span class="navbar-text">
                        &copy; 2020 - 2021. <a href="#">#</a>
                    </span>
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item"><a href="#" class="navbar-nav-link font-weight-semibold"><span class="text-pink-400"><i class="icon-file-text2 mr-2"></i> Docs</span></a></li>
                    </ul>
                </div>
            </div>

		</div>

		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
	</div>
	<!-- /page content -->


    <script type="text/javascript">
        $(document).ready(function() {
            $('select').multiselect();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            });
            _LanguageSwitch();
        });

        function logOut() {
            $('#logout-form').submit();
        }

        var _LanguageSwitch = function () {
        // Define main elements
        var LanguageChange = 'en';
        LanguageChange = '{{ session('locale') }}';
        var $switchContainer = $('.language-switch'),
            englishLangClass = '.en',
            khmerLangClass = '.kh',
            chineseLangClass = '.ch',
            $localizationElement = $('body');
        // English
        if (LanguageChange === "en") {

            // Set active class
            $('.dropdown-item' + englishLangClass).addClass('active');
            $('.navbar-nav-link' + englishLangClass).parent().addClass('active');

            // Change language in dropdown
            $switchContainer.children('.dropdown-toggle').html(
                $switchContainer.find(englishLangClass).html()
            ).children('img').addClass('mr-2');
        }

        // Russian
        if (LanguageChange === "kh") {

            // Set active class
            $('.dropdown-item' + khmerLangClass).addClass('active');
            $('.navbar-nav-link' + khmerLangClass).parent().addClass('active');

            // Change language in dropdown
            $switchContainer.children('.dropdown-toggle').html(
                $switchContainer.find(khmerLangClass).html()
            ).children('img').addClass('mr-2');
        }

        // Ukrainian
        if (LanguageChange === "ch") {

            // Set active class
            $('.dropdown-item' + chineseLangClass).addClass('active');
            $('.navbar-nav-link' + chineseLangClass).parent().addClass('active');

            // Change language in dropdown
            $switchContainer.children('.dropdown-toggle').html(
                $switchContainer.find(chineseLangClass).html()
            ).children('img').addClass('mr-2');
        }
    };
    </script>
    @stack('script')
</body>
</html>
