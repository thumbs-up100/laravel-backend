<div class="navbar-panel">
    <div class="navbar-panel-inner">
        <div class="navbar-panel-cell flex-grow-1">
            <div class="navbar-search" id="navbar-search">
                <input class="navbar-search-input" type="text" placeholder="Search"/>
            </div>
        </div>
        <div class="navbar-panel-cell navbar-toggle-search-cell">
            <button class="navbar-toggle navbar-toggle-search mdi-magnify" title="Search"
                    data-multi-switch='{"targets":".navbar-panel","scope":"#navbar-search","isolate":"[data-multi-switch]"}'></button>
        </div>
        <div class="navbar-panel-cell">
            <button class="navbar-toggle linearicons-menu" title="Sidebar"
                    data-sidebar-switch="data-sidebar-switch"
                    data-multi-switch='{"targets":".sidebar","scope":".sidebar, [data-sidebar-switch]","isolate":"[data-multi-switch]:not([data-sidebar-switch])"}'></button>
        </div>
        <div class="navbar-panel-cell">
            <button class="navbar-toggle linearicons-envelope" title="Chat"
                    data-multi-switch='{"targets":"#subpanel-chat","scope":"#subpanel-chat","isolate":"[data-multi-switch]"}'></button>
            <div class="navbar-subpanel" id="subpanel-chat">
                <div class="navbar-subpanel-inner">
                    <div class="navbar-subpanel-header">
                        <h4>Chat</h4>
                    </div>
                    <div class="navbar-subpanel-body scroller scroller-vertical"
                         style="max-height: 400px;">
                        <div class="media media-cloud group-15">
                            <div class="media-item"><img class="rounded"
                                                         src="/images/users/user-02-50x50.jpg"
                                                         width="50" height="50" alt=""/></div>
                            <div class="media-body">
                                <h5 class="media-heading offline">Sara Marshall
                                    <small>- 12:30am</small>
                                </h5>
                                <div class="media-text">Cras sit amet nibh libero, in gravida nulla.
                                    Nulla
                                    vel metus scelerisque ante sollicitudin.
                                </div>
                            </div>
                        </div>
                        <div class="media media-cloud flex-row-reverse group-15">
                            <div class="media-item"><img class="rounded"
                                                         src="/images/users/user-03-50x50.jpg"
                                                         width="50" height="50" alt=""/></div>
                            <div class="media-body media-body-right-caret">
                                <h5 class="media-heading online">Tom Jorgensen
                                    <small>- 12:30am</small>
                                </h5>
                                <div class="media-text">Cras sit amet nibh libero, in gravida nulla.
                                    Nulla
                                    vel metus scelerisque ante sollicitudin.
                                </div>
                            </div>
                        </div>
                        <div class="media media-cloud group-15">
                            <div class="media-item"><img class="rounded"
                                                         src="/images/users/user-02-50x50.jpg"
                                                         width="50" height="50" alt=""/></div>
                            <div class="media-body">
                                <h5 class="media-heading offline">Sara Marshall
                                    <small>- 12:30am</small>
                                </h5>
                                <div class="media-text">Cras sit amet nibh libero, in gravida nulla.
                                    Nulla
                                    vel metus scelerisque ante sollicitudin.
                                </div>
                            </div>
                        </div>
                        <div class="media media-cloud flex-row-reverse group-15">
                            <div class="media-item"><img class="rounded"
                                                         src="/images/users/user-03-50x50.jpg"
                                                         width="50" height="50" alt=""/></div>
                            <div class="media-body media-body-right-caret">
                                <h5 class="media-heading online">Tom Jorgensen
                                    <small>- 12:30am</small>
                                </h5>
                                <div class="media-text">Cras sit amet nibh libero, in gravida nulla.
                                    Nulla
                                    vel metus scelerisque ante sollicitudin.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navbar-subpanel-footer">
                        <div class="input-group form-group">
                            <input class="form-control" type="text"
                                   placeholder="Enter your message here"/>
                            <div class="input-group-append">
                                <button class="btn btn-primary">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-panel-cell">
            <button class="navbar-toggle linearicons-alarm" title="Notifications"
                    data-multi-switch='{"targets":"#subpanel-notifications","scope":"#subpanel-notifications","isolate":"[data-multi-switch]"}'></button>
            <div class="navbar-badge badge badge-danger badge-pill">1</div>
            <div class="navbar-subpanel" id="subpanel-notifications">
                <div class="navbar-subpanel-inner">
                    <div class="navbar-subpanel-header">
                        <h4>Notifications</h4>
                    </div>
                    <div class="navbar-subpanel-body scroller scroller-vertical">
                        <div class="group-5">
                            <div class="alert alert-dismissible alert-primary alert-darker alert-sm"
                                 role="alert"><span
                                    class="alert-icon fa-telegram"></span><span>Message</span>
                                <button class="close" type="button" data-dismiss="alert"
                                        aria-label="Close">
                                    <span class="fa-close" aria-hidden="true"></span></button>
                            </div>
                            <div class="alert alert-dismissible alert-secondary alert-sm"
                                 role="alert"><span
                                    class="alert-icon fa-warning"></span><span>Warning</span>
                                <button class="close" type="button" data-dismiss="alert"
                                        aria-label="Close">
                                    <span class="fa-close" aria-hidden="true"></span></button>
                            </div>
                            <div class="alert alert-dismissible alert-danger alert-sm"
                                 role="alert"><span
                                    class="alert-icon fa-remove"></span><span>Error</span>
                                <button class="close" type="button" data-dismiss="alert"
                                        aria-label="Close">
                                    <span class="fa-close" aria-hidden="true"></span></button>
                            </div>
                            <div class="alert alert-dismissible alert-success alert-sm"
                                 role="alert"><span
                                    class="alert-icon fa-thumbs-up"></span><span>Success</span>
                                <button class="close" type="button" data-dismiss="alert"
                                        aria-label="Close">
                                    <span class="fa-close" aria-hidden="true"></span></button>
                            </div>
                        </div>
                    </div>
                    <div class="navbar-subpanel-footer"><a class="btn btn-primary btn-sm"
                                                           href="alerts.html">See more</a></div>
                </div>
            </div>
        </div>
        <div class="navbar-panel-cell">
            <button class="navbar-toggle mdi-blur-radial" title="multi-language"
                    data-multi-switch='{"targets":"#subpanel-multi-language","scope":"#subpanel-multi-language","isolate":"[data-multi-switch]"}'></button>
            <div class="navbar-subpanel" id="subpanel-multi-language">
                <div class="navbar-subpanel-inner">
                    <div class="navbar-subpanel-header">
                        <h4>{{ trans('general.lang') }}</h4>
                    </div>
                    <div class="navbar-subpanel-body scroller scroller-vertical">
                        <div class="group-5">
                            @foreach (Config::get('app.locales') as $lang => $language)
                                @if ($lang != App::getLocale())
                                    <a class="" href="{{ route('lang.change', $lang) }}">
                                        <div
                                            class="alert alert-dismissible alert-primary alert-darker alert-sm"
                                            role="alert">
                                            <span>{{$language}}</span>
                                        </div>
                                    </a>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-panel-cell">
            <div class="navbar-toggle navbar-user" title="User Menu"
                 data-multi-switch='{"targets":"#subpanel-user-menu","scope":"#subpanel-user-menu","isolate":"[data-multi-switch]"}'>
                <img class="rounded" src="/images/users/user-09-60x60.jpg" alt=""/></div>
            <div class="navbar-subpanel" id="subpanel-user-menu">
                <div class="navbar-subpanel-inner">
                    <div class="navbar-subpanel-header">
                        <div class="h3">{{ \Auth::guard('admin')->user()->name }}</div>
                    </div>
                    <div class="navbar-subpanel-body p-0 scroller scroller-vertical">
                        <div class="list-group list-group-flush"><a class="list-group-item rounded-0"
                                                                    href="#">
                                <div class="media align-items-center">
                                    <div class="pr-2"><span class="fa-user"></span></div>
                                    <div class="media-body">
                                        <h5>My Profile</h5>
                                    </div>
                                </div>
                            </a><a class="list-group-item rounded-0" href="#">
                                <div class="media align-items-center">
                                    <div class="pr-2"><span class="fa-envelope-o"></span></div>
                                    <div class="media-body">
                                        <h5>My Messages</h5>
                                    </div>
                                    <div class="badge badge-warning">12</div>
                                </div>
                            </a><a class="list-group-item rounded-0" href="#">
                                <div class="media align-items-center">
                                    <div class="pr-2"><span class="fa-rocket"></span></div>
                                    <div class="media-body">
                                        <h5>My Activities</h5>
                                    </div>
                                </div>
                            </a><a class="list-group-item rounded-0" href="#">
                                <div class="media align-items-center">
                                    <div class="pr-2"><span class="fa-desktop"></span></div>
                                    <div class="media-body">
                                        <h5>My Tasks</h5>
                                    </div>
                                    <div class="badge badge-success">05</div>
                                </div>
                            </a><a class="list-group-item rounded-0" href="#">
                                <div class="media align-items-center">
                                    <div class="pr-2"><span class="fa-line-chart"></span></div>
                                    <div class="media-body">
                                        <h5>Billing</h5>
                                    </div>
                                </div>
                            </a></div>
                    </div>
                    <div class="navbar-subpanel-footer p-2">
                        <div class="d-flex align-items-center justify-content-between">
                            <a class="btn btn-sm btn-danger" href="{{ route('admin::logout') }}">Sign
                                Out</a>
                            <a class="btn btn-sm btn-success"
                               href="{{ route('admin::adminUser.edit', ['id' => \Auth::guard('admin')->user()->id]) }}">{{ trans('adminUser.editAdministrator') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
