<div class="navbar-sidebar-wrap">
    <div class="navbar-sidebar-panel">
        <button class="navbar-toggle-sidebar linearicons-menu"
                data-navigation-switch="data-navigation-switch"></button>
        <div class="navbar-logo"><a class="navbar-logo-link" href="javascript:;"
                                    onclick="Ajaxcontent('/admin/aggregation', this)"><img
                    class="navbar-logo-default" src="/images/logo-272x84.png" width="136"
                    alt="PART"/></a></div>
    </div>
    <div class="navbar-sidebar scroller scroller-vertical">
        <div class="tabs tabs-horizontal-left">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu-1"
                                        role="tab"
                                        aria-selected="true" title="Menu"><span
                            class="linearicons-icons"></span></a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#menu-2" role="tab"
                                        aria-selected="false" title="Tools"><span
                            class="linearicons-cog"></span></a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#menu-3" role="tab"
                                        aria-selected="false" title="System"><span
                            class="linearicons-cart"></span></a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#menu-4" role="tab"
                                        aria-selected="false" title="Elements"><span
                            class="linearicons-copy"></span></a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade active show" id="menu-1" role="tabpanel">
                    <!-- 左侧导航区域 -->
                    <ul class="navbar-navigation rd-navbar-nav">
                        <li class="navbar-navigation-item">
                            <a class="navbar-navigation-link" href="javascript:;" title="Dashboard"
                               onclick="Ajaxcontent('/admin/aggregation', this)"><span
                                    class="navbar-navigation-text">Dashboard</span></a>
                        </li>
                        @isset($light_menu['children'])
                            @foreach($light_menu['children']->groupBy('group') as $k => $menu)
                                @if($k != '')
                                    <li class="navbar-navigation-item">
                                        @foreach($menu as $sub)
                                            @if(intval($sub['status']) === App\Models\Admin\Menu::STATUS_ENABLE && ($isSuperAdmin || $user->can($sub['name'])))
                                                <a class="navbar-navigation-link" href="javascript:;"
                                                   title="{{ $k }}"><span
                                                        class="navbar-navigation-text">{{ $k }}</span></a>
                                                @break
                                            @endif
                                        @endforeach

                                        <ul class="rd-navbar-dropdown navbar-dropdown">
                                            @foreach($menu as $sub)
                                                @if(intval($sub['status']) === App\Models\Admin\Menu::STATUS_ENABLE && ($isSuperAdmin || $user->can($sub['name'])))
                                                    <li class="navbar-navigation-item">
                                                        <a class="navbar-navigation-link"
                                                           href="javascript:;"
                                                           title="{{ $sub['name'] }}"
                                                           onclick="Ajaxcontent('{{ $sub['url'] }}', this)"><span
                                                                class="navbar-navigation-text mdi-record">&nbsp;&nbsp;{{ $sub['name'] }}</span></a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>
                                @endif
                            @endforeach
                        @endisset

                        @isset($autoMenu)
                            <li class="navbar-navigation-item">
                                <a class="navbar-navigation-link" href="javascript:;"><span
                                        class="navbar-navigation-text">系统菜单</span></a>
                                <ul class="rd-navbar-dropdown navbar-dropdown">
                                    @foreach($autoMenu as $v)
                                        <li class="navbar-navigation-item">
                                            <a class="navbar-navigation-link"
                                               href="{{ $v['url'] }}"><span
                                                    class="navbar-navigation-text">{{ $v['name'] }}</span></a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @endisset
                    </ul>
                </div>
                <div class="tab-pane fade" id="menu-2" role="tabpanel">
                    <ul class="navbar-navigation rd-navbar-nav">
                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="#"
                                                              title="Admin plugins"><span
                                    class="navbar-navigation-text">Admin plugins</span></a>
                            <ul class="rd-navbar-dropdown navbar-dropdown">
                                <li class="navbar-navigation-item"><a class="navbar-navigation-link"
                                                                      href="admin-panels.html"
                                                                      title="Admin panels"><span
                                            class="navbar-navigation-text">Admin panels</span></a>
                                </li>
                                <li class="navbar-navigation-item"><a class="navbar-navigation-link"
                                                                      href="admin-modals.html"
                                                                      title="Admin modals"><span
                                            class="navbar-navigation-text">Admin modals</span></a>
                                </li>
                                <li class="navbar-navigation-item"><a class="navbar-navigation-link"
                                                                      href="admin-dock.html"
                                                                      title="Admin Dock"><span
                                            class="navbar-navigation-text">Admin Dock</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="#"
                                                              title="Admin layouts"><span
                                    class="navbar-navigation-text">Admin layouts</span></a>
                            <ul class="rd-navbar-dropdown navbar-dropdown">
                                <li class="navbar-navigation-item"><a class="navbar-navigation-link"
                                                                      href="navbar.html"
                                                                      title="Navbar"><span
                                            class="navbar-navigation-text">Navbar</span></a>
                                </li>
                                <li class="navbar-navigation-item"><a class="navbar-navigation-link"
                                                                      href="#" title="Topbar"><span
                                            class="navbar-navigation-text">Topbar</span></a>
                                    <ul class="rd-navbar-dropdown navbar-dropdown">
                                        <li class="navbar-navigation-item"><a
                                                class="navbar-navigation-link"
                                                href="topbar-menu.html"
                                                title="Topbar Menu"><span
                                                    class="navbar-navigation-text">Topbar Menu</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="navbar-navigation-item"><a class="navbar-navigation-link"
                                                                      href="#"
                                                                      title="Content Body"><span
                                            class="navbar-navigation-text">Content Body</span></a>
                                    <ul class="rd-navbar-dropdown navbar-dropdown">
                                        <li class="navbar-navigation-item"><a
                                                class="navbar-navigation-link"
                                                href="blank-starter.html"
                                                title="Blank Starter"><span
                                                    class="navbar-navigation-text">Blank Starter</span></a>
                                        </li>
                                        <li class="navbar-navigation-item"><a
                                                class="navbar-navigation-link"
                                                href="jumbotron.html"
                                                title="Jumbotron"><span
                                                    class="navbar-navigation-text">Jumbotron</span></a>
                                        </li>
                                        <li class="navbar-navigation-item"><a
                                                class="navbar-navigation-link"
                                                href="content-tabs.html"
                                                title="Content Tabs"><span
                                                    class="navbar-navigation-text">Content Tabs</span></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="menu-3" role="tabpanel">
                    <ul class="navbar-navigation rd-navbar-nav">
                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="#"
                                                              title="Info Panels"><span
                                    class="navbar-navigation-text">Info Panels</span></a>
                            <ul class="rd-navbar-dropdown navbar-dropdown">
                                <li class="navbar-navigation-item"><a class="navbar-navigation-link"
                                                                      href="tile-widgets.html"
                                                                      title="Tile Widgets"><span
                                            class="navbar-navigation-text">Tile Widgets</span></a>
                                </li>
                                <li class="navbar-navigation-item"><a class="navbar-navigation-link"
                                                                      href="panel-widgets.html"
                                                                      title="Panel Widgets"><span
                                            class="navbar-navigation-text">Panel Widgets</span></a>
                                </li>
                                <li class="navbar-navigation-item"><a class="navbar-navigation-link"
                                                                      href="admin-widgets.html"
                                                                      title="Admin Widgets"><span
                                            class="navbar-navigation-text">Admin Widgets</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="#"
                                                              title="E-commerce"><span
                                    class="navbar-navigation-text">E-commerce</span></a>
                            <ul class="rd-navbar-dropdown navbar-dropdown">
                                <li class="navbar-navigation-item"><a class="navbar-navigation-link"
                                                                      href="ecommerce-dashboard.html"
                                                                      title="Ecommerce Dashboard"><span
                                            class="navbar-navigation-text">Ecommerce Dashboard</span></a>
                                </li>
                                <li class="navbar-navigation-item"><a class="navbar-navigation-link"
                                                                      href="products.html"
                                                                      title="Products"><span
                                            class="navbar-navigation-text">Products</span></a>
                                </li>
                                <li class="navbar-navigation-item"><a class="navbar-navigation-link"
                                                                      href="orders.html"
                                                                      title="Orders"><span
                                            class="navbar-navigation-text">Orders</span></a>
                                </li>
                                <li class="navbar-navigation-item"><a class="navbar-navigation-link"
                                                                      href="customers.html"
                                                                      title="Customers"><span
                                            class="navbar-navigation-text">Customers</span></a>
                                </li>
                                <li class="navbar-navigation-item"><a class="navbar-navigation-link"
                                                                      href="store-settings.html"
                                                                      title="Store Settings"><span
                                            class="navbar-navigation-text">Store Settings</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="menu-4" role="tabpanel">
                    <ul class="navbar-navigation rd-navbar-nav">
                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="#"
                                                              title="UI Elements"><span
                                    class="navbar-navigation-text">UI Elements</span></a>
                            <ul class="rd-navbar-dropdown navbar-dropdown">
                                <li class="navbar-navigation-item"><a class="navbar-navigation-link"
                                                                      href="alerts.html"
                                                                      title="Alerts"><span
                                            class="navbar-navigation-text">Alerts</span></a>
                                </li>
                                <li class="navbar-navigation-item"><a class="navbar-navigation-link"
                                                                      href="animations.html"
                                                                      title="Animations"><span
                                            class="navbar-navigation-text">Animations</span></a>
                                </li>
                                <li class="navbar-navigation-item"><a class="navbar-navigation-link"
                                                                      href="buttons.html"
                                                                      title="Buttons"><span
                                            class="navbar-navigation-text">Buttons</span></a>
                                </li>
                                <li class="navbar-navigation-item"><a class="navbar-navigation-link"
                                                                      href="typography.html"
                                                                      title="Typography"><span
                                            class="navbar-navigation-text">Typography</span></a>
                                </li>
                                <li class="navbar-navigation-item"><a class="navbar-navigation-link"
                                                                      href="panel.html"
                                                                      title="Panel"><span
                                            class="navbar-navigation-text">Panel</span></a>
                                </li>
                                <li class="navbar-navigation-item"><a class="navbar-navigation-link"
                                                                      href="progress-bars.html"
                                                                      title="Progress Bars"><span
                                            class="navbar-navigation-text">Progress Bars</span></a>
                                </li>
                                <li class="navbar-navigation-item"><a class="navbar-navigation-link"
                                                                      href="tabs.html"
                                                                      title="Tabs"><span
                                            class="navbar-navigation-text">Tabs</span></a>
                                </li>
                                <li class="navbar-navigation-item"><a class="navbar-navigation-link"
                                                                      href="icons.html"
                                                                      title="Icons"><span
                                            class="navbar-navigation-text">Icons</span></a>
                                </li>
                                <li class="navbar-navigation-item"><a class="navbar-navigation-link"
                                                                      href="grid.html"
                                                                      title="Grid"><span
                                            class="navbar-navigation-text">Grid</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="#"
                                                              title="Form Elements"><span
                                    class="navbar-navigation-text">Form Elements</span></a>
                            <ul class="rd-navbar-dropdown navbar-dropdown">
                                <li class="navbar-navigation-item"><a class="navbar-navigation-link"
                                                                      href="basic-inputs.html"
                                                                      title="Basic Inputs"><span
                                            class="navbar-navigation-text">Basic Inputs</span></a>
                                </li>
                                <li class="navbar-navigation-item"><a class="navbar-navigation-link"
                                                                      href="plugin-inputs.html"
                                                                      title="Plugin Inputs"><span
                                            class="navbar-navigation-text">Plugin Inputs</span></a>
                                </li>
                                <li class="navbar-navigation-item"><a class="navbar-navigation-link"
                                                                      href="editors.html"
                                                                      title="Editors"><span
                                            class="navbar-navigation-text">Editors</span></a>
                                </li>
                                <li class="navbar-navigation-item"><a class="navbar-navigation-link"
                                                                      href="treeview.html"
                                                                      title="Treeview"><span
                                            class="navbar-navigation-text">Treeview</span></a>
                                </li>
                                <li class="navbar-navigation-item"><a class="navbar-navigation-link"
                                                                      href="nestable.html"
                                                                      title="Nestable"><span
                                            class="navbar-navigation-text">Nestable</span></a>
                                </li>
                                <li class="navbar-navigation-item"><a class="navbar-navigation-link"
                                                                      href="image-tools.html"
                                                                      title="Image tools"><span
                                            class="navbar-navigation-text">Image tools</span></a>
                                </li>
                                <li class="navbar-navigation-item"><a class="navbar-navigation-link"
                                                                      href="uploaders.html"
                                                                      title="Uploaders"><span
                                            class="navbar-navigation-text">Uploaders</span></a>
                                </li>
                                <li class="navbar-navigation-item"><a class="navbar-navigation-link"
                                                                      href="notifications.html"
                                                                      title="Notifications"><span
                                            class="navbar-navigation-text">Notifications</span></a>
                                </li>
                                <li class="navbar-navigation-item"><a class="navbar-navigation-link"
                                                                      href="content-sliders.html"
                                                                      title="Content Sliders"><span
                                            class="navbar-navigation-text">Content Sliders</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="#"
                                                              title="Plugins"><span
                                    class="navbar-navigation-text">Plugins</span></a>
                            <ul class="rd-navbar-dropdown navbar-dropdown">
                                <li class="navbar-navigation-item"><a class="navbar-navigation-link"
                                                                      href="#" title="Maps"><span
                                            class="navbar-navigation-text">Maps</span></a>
                                    <ul class="rd-navbar-dropdown navbar-dropdown">
                                        <li class="navbar-navigation-item"><a
                                                class="navbar-navigation-link"
                                                href="google-maps.html"
                                                title="Google Maps"><span
                                                    class="navbar-navigation-text">Google Maps</span></a>
                                        </li>
                                        <li class="navbar-navigation-item"><a
                                                class="navbar-navigation-link"
                                                href="jvector-map.html"
                                                title="jVector Map"><span
                                                    class="navbar-navigation-text">jVector Map</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="navbar-navigation-item"><a class="navbar-navigation-link"
                                                                      href="#" title="Charts"><span
                                            class="navbar-navigation-text">Charts</span></a>
                                    <ul class="rd-navbar-dropdown navbar-dropdown">
                                        <li class="navbar-navigation-item"><a
                                                class="navbar-navigation-link"
                                                href="highcharts.html"
                                                title="Highcharts"><span
                                                    class="navbar-navigation-text">Highcharts</span></a>
                                        </li>
                                        <li class="navbar-navigation-item"><a
                                                class="navbar-navigation-link"
                                                href="flotcharts.html"
                                                title="Flotcharts"><span
                                                    class="navbar-navigation-text">Flotcharts</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="navbar-navigation-item"><a class="navbar-navigation-link"
                                                                      href="#" title="Tables"><span
                                            class="navbar-navigation-text">Tables</span></a>
                                    <ul class="rd-navbar-dropdown navbar-dropdown">
                                        <li class="navbar-navigation-item"><a
                                                class="navbar-navigation-link"
                                                href="basic-tables.html"
                                                title="Basic Tables"><span
                                                    class="navbar-navigation-text">Basic Tables</span></a>
                                        </li>
                                        <li class="navbar-navigation-item"><a
                                                class="navbar-navigation-link"
                                                href="data-tables.html"
                                                title="Data Tables"><span
                                                    class="navbar-navigation-text">Data Tables</span></a>
                                        </li>
                                        <li class="navbar-navigation-item"><a
                                                class="navbar-navigation-link"
                                                href="pricing-tables.html"
                                                title="Pricing Tables"><span
                                                    class="navbar-navigation-text">Pricing Tables</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="navbar-navigation-item"><a class="navbar-navigation-link"
                                                                      href="#" title="Misc"><span
                                            class="navbar-navigation-text">Misc</span></a>
                                    <ul class="rd-navbar-dropdown navbar-dropdown">
                                        <li class="navbar-navigation-item"><a
                                                class="navbar-navigation-link"
                                                href="site-tour.html"
                                                title="Site Tour"><span
                                                    class="navbar-navigation-text">Site Tour</span></a>
                                        </li>
                                        <li class="navbar-navigation-item"><a
                                                class="navbar-navigation-link"
                                                href="session-timeout.html"
                                                title="Session Timeout"><span
                                                    class="navbar-navigation-text">Session Timeout</span></a>
                                        </li>
                                        <li class="navbar-navigation-item"><a
                                                class="navbar-navigation-link"
                                                href="page-progress-loader.html"
                                                title="Page Progress Loader"><span
                                                    class="navbar-navigation-text">Page Progress Loader</span></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="navbar-navigation-item"><a class="navbar-navigation-link" href="#"
                                                              title="Pages"><span
                                    class="navbar-navigation-text">Pages</span></a>
                            <ul class="rd-navbar-dropdown navbar-dropdown">
                                <li class="navbar-navigation-item"><a class="navbar-navigation-link"
                                                                      href="#" title="Utility"><span
                                            class="navbar-navigation-text">Utility</span></a>
                                    <ul class="rd-navbar-dropdown navbar-dropdown">
                                        <li class="navbar-navigation-item"><a
                                                class="navbar-navigation-link"
                                                href="confirmation.html"
                                                title="Confirmation"><span
                                                    class="navbar-navigation-text">Confirmation</span></a>
                                        </li>
                                        <li class="navbar-navigation-item"><a
                                                class="navbar-navigation-link"
                                                href="login.html"
                                                title="Login"><span
                                                    class="navbar-navigation-text">Login</span></a>
                                        </li>
                                        <li class="navbar-navigation-item"><a
                                                class="navbar-navigation-link"
                                                href="register.html"
                                                title="Register"><span
                                                    class="navbar-navigation-text">Register</span></a>
                                        </li>
                                        <li class="navbar-navigation-item"><a
                                                class="navbar-navigation-link"
                                                href="screenlock.html"
                                                title="Screenlock"><span
                                                    class="navbar-navigation-text">Screenlock</span></a>
                                        </li>
                                        <li class="navbar-navigation-item"><a
                                                class="navbar-navigation-link"
                                                href="password-reset.html"
                                                title="Password Reset"><span
                                                    class="navbar-navigation-text">Password Reset</span></a>
                                        </li>
                                        <li class="navbar-navigation-item"><a
                                                class="navbar-navigation-link"
                                                href="coming-soon.html"
                                                title="Coming Soon"><span
                                                    class="navbar-navigation-text">Coming Soon</span></a>
                                        </li>
                                        <li class="navbar-navigation-item"><a
                                                class="navbar-navigation-link"
                                                href="404.html"
                                                title="404"><span
                                                    class="navbar-navigation-text">404</span></a>
                                        </li>
                                        <li class="navbar-navigation-item"><a
                                                class="navbar-navigation-link"
                                                href="500.html"
                                                title="500"><span
                                                    class="navbar-navigation-text">500</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="navbar-navigation-item"><a class="navbar-navigation-link"
                                                                      href="#" title="Basic"><span
                                            class="navbar-navigation-text">Basic</span></a>
                                    <ul class="rd-navbar-dropdown navbar-dropdown">
                                        <li class="navbar-navigation-item"><a
                                                class="navbar-navigation-link"
                                                href="search-results.html"
                                                title="Search Results"><span
                                                    class="navbar-navigation-text">Search Results</span></a>
                                        </li>
                                        <li class="navbar-navigation-item"><a
                                                class="navbar-navigation-link"
                                                href="profile.html"
                                                title="Profile"><span
                                                    class="navbar-navigation-text">Profile</span></a>
                                        </li>
                                        <li class="navbar-navigation-item"><a
                                                class="navbar-navigation-link"
                                                href="timeline.html"
                                                title="Timeline"><span
                                                    class="navbar-navigation-text">Timeline</span></a>
                                        </li>
                                        <li class="navbar-navigation-item"><a
                                                class="navbar-navigation-link"
                                                href="faq.html"
                                                title="FAQ"><span
                                                    class="navbar-navigation-text">FAQ</span></a>
                                        </li>
                                        <li class="navbar-navigation-item"><a
                                                class="navbar-navigation-link"
                                                href="calendar.html"
                                                title="Calendar"><span
                                                    class="navbar-navigation-text">Calendar</span></a>
                                        </li>
                                        <li class="navbar-navigation-item"><a
                                                class="navbar-navigation-link"
                                                href="messages.html"
                                                title="Messages"><span
                                                    class="navbar-navigation-text">Messages</span></a>
                                        </li>
                                        <li class="navbar-navigation-item"><a
                                                class="navbar-navigation-link"
                                                href="messages-compose.html"
                                                title="Messages Compose"><span
                                                    class="navbar-navigation-text">Messages Compose</span></a>
                                        </li>
                                        <li class="navbar-navigation-item"><a
                                                class="navbar-navigation-link"
                                                href="gallery.html"
                                                title="Gallery"><span
                                                    class="navbar-navigation-text">Gallery</span></a>
                                        </li>
                                        <li class="navbar-navigation-item"><a
                                                class="navbar-navigation-link"
                                                href="printable-invoice.html"
                                                title="Printable Invoice"><span
                                                    class="navbar-navigation-text">Printable Invoice</span></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
