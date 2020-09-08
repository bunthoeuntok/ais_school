<div class="navbar navbar-expand-md navbar-dark fixed-top">
    <div class="navbar-brand">
        <a href="{{ route('system.dashboard') }}" class="d-inline-block">
            <img src="{{ asset('assets/images/logo_light.png') }}" alt="">
        </a>
    </div>

    <div class="d-md-none">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
            <i class="icon-tree5"></i>
        </button>
        <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
            <i class="icon-paragraph-justify3"></i>
        </button>
    </div>

    <div class="collapse navbar-collapse" id="navbar-mobile">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
                    <i class="icon-paragraph-justify3"></i>
                </a>
            </li>

            <li class="nav-item dropdown">
                <a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
                    <i class="icon-git-compare"></i>
                    <span class="d-md-none ml-2">Git updates</span>
                    <span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">9</span>
                </a>

                <div class="dropdown-menu dropdown-content wmin-md-350">
                    <div class="dropdown-content-header">
                        <span class="font-weight-semibold">Git updates</span>
                        <a href="#" class="text-default"><i class="icon-sync"></i></a>
                    </div>

                    <div class="dropdown-content-body dropdown-scrollable">
                        <ul class="media-list">
                            <li class="media">
                                <div class="mr-3">
                                    <a href="#"
                                       class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i
                                            class="icon-git-pull-request"></i></a>
                                </div>

                                <div class="media-body">
                                    Drop the IE <a href="#">specific hacks</a> for temporal inputs
                                    <div class="text-muted font-size-sm">4 minutes ago</div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="dropdown-content-footer bg-light">
                        <a href="#" class="text-grey mr-auto">All updates</a>
                        <div>
                            <a href="#" class="text-grey" data-popup="tooltip" title="Mark all as read"><i
                                    class="icon-radio-unchecked"></i></a>
                            <a href="#" class="text-grey ml-2" data-popup="tooltip" title="Bug tracker"><i
                                    class="icon-bug2"></i></a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>

        <span class="badge bg-success ml-md-3 mr-md-auto">Online</span>
        <ul class="navbar-nav">
            <li class="nav-item dropdown language-switch dropdown-auto-width">
                <a href="javascript:void(0)" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                    <img src="{{ asset('assets/images/lang/100/en.png') }}" class="img-flag mr-2" alt="">
                    English
                </a>
{{--                <div class="dropdown-menu">--}}
{{--                    @foreach (Gb::languages() as $language)--}}
{{--                        <a href="{{ route( 'system-setting.locale', ['locale' => $language->code]) }}" class="dropdown-item {{ $language->code }}">--}}
{{--                            <img src="{{ asset($language->image) }}" style="width: 28px;" class="img-flag">--}}
{{--                            {{ $language->name }}--}}
{{--                        </a>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
            </li>
            <li class="nav-item dropdown dropdown-auto-width">
{{--                @foreach(Gb::years() as $year)--}}
{{--                    <a class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">--}}
{{--                        2020 - 2021--}}
{{--                    </a>--}}
{{--                @endforeach--}}

            </li>
            <li class="nav-item dropdown">
                <a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
                    <i class="icon-bubbles4"></i>
                    <span class="d-md-none ml-2">Messages</span>
                    <span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">2</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
                    <div class="dropdown-content-header">
                        <span class="font-weight-semibold">Recent (1) Messages</span>
                        <a href="#" class="text-default"><i class="icon-gear"></i></a>
                    </div>

                    <div class="dropdown-content-body dropdown-scrollable">
                        <ul class="media-list">
                            <li class="media">
                                <div class="mr-3 position-relative">
                                    <img src="{{ asset('assets/images/users/user.jpg') }}" width="36" height="36"
                                         class="rounded-circle" alt="">
                                </div>

                                <div class="media-body">
                                    <div class="media-title">
                                        <a href="#">
                                            <span class="font-weight-semibold">James Alexander</span>
                                            <span class="text-muted float-right font-size-sm">04:58</span>
                                        </a>
                                    </div>

                                    <span class="text-muted">who knows, maybe that would be the best thing for me...</span>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="dropdown-content-footer justify-content-center p-0">
                        <a href="" class="bg-light w-100 py-2" data-popup="tooltip" title="Load more"><span
                                class="d-block top-0 text-center font-weight-semibold">All Messages</span></a>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
                    <i class="icon-bell3"></i>
                    <span class="d-md-none ml-2">Notifications</span>
                    <span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">9+</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-300">
                    <div class="dropdown-content-header">
                        <span class="font-weight-semibold">Notifications</span>
                        <a href="#" class="text-default"><i class="icon-gear font-size-base"></i></a>
                    </div>

                    <div class="dropdown-content-body dropdown-scrollable">
                        <ul class="media-list">
                            <li class="media">
                                <div class="mr-3">
                                    <img src="{{ asset('assets/images/users/user.jpg') }}" width="36" height="36"
                                         class="rounded-circle" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#" class="media-title font-weight-semibold">Jordana Ansley</a>
                                    <span class="d-block text-muted font-size-sm">Lead web developer</span>
                                </div>
                                <div class="ml-3 align-self-center"><span
                                        class="badge badge-mark border-success"></span></div>
                            </li>
                        </ul>
                    </div>

                    <div class="dropdown-content-footer bg-light justify-content-center">
                        <a href="" class="d-block top-0 text-center font-weight-semibold">See All</a>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown dropdown-user">
                <a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
                    <img src="{{ asset('assets/images/users/user.jpg') }}" class="rounded-circle mr-2" width="34"
                         height="34" alt="">
                    <span>Harley</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
                    <a href="#" class="dropdown-item"><i class="icon-coins"></i> My balance</a>
                    <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Messages <span
                            class="badge badge-pill bg-blue ml-auto">58</span></a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
                    <a href="javascript:void(0);" onclick="logOut();" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
                </div>
            </li>
        </ul>
    </div>
</div>
