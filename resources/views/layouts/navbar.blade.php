<style>
    .VIpgJd-ZVi9od-ORHb-OEVmcd {
        display: none !important;
    }

    body {
        top: 0px !important;
    }

    .fixed-con {
        z-index: 9724790009779558 !important;
        background-color: #f7f8fc;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        overflow-y: auto;
    }

    .VIpgJd-ZVi9od-aZ2wEe-wOHMyf {
        z-index: 9724790009779 !important;
        top: 0;
        left: unset;
        right: -5px;
        display: none !important;
        border-radius: 50%;
        border: 2px solid gold;
    }

    .VIpgJd-ZVi9od-aZ2wEe-OiiCO {
        width: 80px;
        height: 80px;
    }

    /*hide google translate link | logo | banner-frame */
    .goog-logo-link,
    .gskiptranslate,
    .goog-te-gadget span,
    .goog-te-banner-frame,
    #goog-gt-tt,
    .goog-te-balloon-frame,
    div#goog-gt- {
        display: none !important;
    }

    .goog-te-gadget {
        color: transparent !important;
        font-size: 0px;
    }

    .goog-text-highlight {
        background: none !important;
        box-shadow: none !important;
    }

    /*google translate Dropdown */

    #google_translate_element select {
        background: #f6edfd;
        color: #b42424;
        border: none;
        border-radius: 3px;
        padding: 6px 8px
    }

    #google_translate_element select>option:hover {
        background-color: #b42424 !important;
        color: white;
        border: none;
        border-radius: 3px;
        padding: 6px 8px
    }

    #goog-gt-tt,
    .goog-te-balloon-frame {
        display: none !important;
    }

    .goog-text-highlight {
        background: none !important;
        box-shadow: none !important;
    }
</style>
<header class="main-header-top hidden-print">
    <a href="index.html" class="logo"><img class="img-fluid able-logo"
            src="{{ asset('template/assets/images/logo/spectro.png') }}" alt="Theme-logo"></a>
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>
        <ul class="top-nav lft-nav">

            <div id='google_translate_element' style="padding: 5px;"></div>
            <script>
                function googleTranslateElementInit() {
                    new google.translate.TranslateElement({
                        pageLanguage: 'en',
                        includedLanguages: 'id,en,ja',
                        autoDisplay: 'true',
                        layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
                    }, 'google_translate_element');
                }
            </script>
            <script src='//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit'></script>
        </ul>
        <!-- Navbar Right Menu-->
        <div class="navbar-custom-menu">
            <ul class="top-nav">
                <!--Notification Menu-->
                <li class="dropdown notification-menu">
                    <a href="#!" data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle">
                        <i class="icon-bell"></i>
                        <span class="badge badge-danger header-badge">9</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="bell-notification">
                            <a href="javascript:;" class="media">
                                <span class="media-left media-icon">
                                    <img class="img-circle" src="{{ asset('template/assets/images/avatar-1.png') }}"
                                        alt="User Image">
                                </span>
                                <div class="media-body"><span class="block">Lisa sent you a mail</span><span
                                        class="text-muted block-time">2min ago</span></div>
                            </a>
                        </li>
                        <li class="bell-notification">
                            <a href="javascript:;" class="media">
                                <span class="media-left media-icon">
                                    <img class="img-circle" src="{{ asset('template/assets/images/avatar-2.png') }}"
                                        alt="User Image">
                                </span>
                                <div class="media-body"><span class="block">Server Not Working</span><span
                                        class="text-muted block-time">20min ago</span></div>
                            </a>
                        </li>
                        <li class="bell-notification">
                            <a href="javascript:;" class="media"><span class="media-left media-icon">
                                    <img class="img-circle" src="{{ asset('template/assets/images/avatar-3.png') }}"
                                        alt="User Image">
                                </span>
                                <div class="media-body"><span class="block">Transaction xyz complete</span><span
                                        class="text-muted block-time">3 hours ago</span></div>
                            </a>
                        </li>
                        <li class="not-footer">
                            <a href="#!">See all notifications.</a>
                        </li>
                    </ul>
                </li>

                <!-- chat dropdown -->
                {{-- <li class="pc-rheader-submenu ">
                    <a href="#!" class="drop icon-circle displayChatbox">
                        <i class="icon-bubbles"></i>
                        <span class="badge badge-danger header-badge">5</span>
                    </a>

                </li> --}}
                <!-- window screen -->
                <li class="pc-rheader-submenu">
                    <a href="#!" class="drop icon-circle" onclick="javascript:toggleFullScreen()">
                        <i class="icon-size-fullscreen"></i>
                    </a>
                </li>
                <!-- User Menu-->
                <li class="dropdown">
                    <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"
                        class="dropdown-toggle drop icon-circle drop-image">
                        <span><img class="img-circle " src="{{ asset('template/assets/images/avatar-1.png') }}"
                                style="width:40px;" alt="User Image"></span>
                        <span>Muhammad Raihan <i class=" icofont icofont-simple-down"></i></span>

                    </a>
                    <ul class="dropdown-menu settings-menu">
                        <li><a href="{{ route('user_settings') }}"><i class="icon-settings"></i> Settings</a></li>
                        <li><a href="{{ route('user_profile') }}"><i class="icon-user"></i> Profile</a></li>
                        <li><a href="#"><i class="icon-envelope-open"></i> My Messages</a></li>
                        <li class="p-0">
                            <div class="dropdown-divider m-0"></div>
                        </li>
                        <li><a href="#"><i class="icon-lock"></i> Lock Screen</a></li>
                        <li><a href="#"
                                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i
                                    class="icon-logout"></i>
                                {{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>

                    </ul>
                </li>
            </ul>

            <!-- search -->
            <div id="morphsearch" class="morphsearch">
                <form class="morphsearch-form">

                    <input class="morphsearch-input" type="search" placeholder="Search..." />

                    <button class="morphsearch-submit" type="submit">Search</button>

                </form>
                <div class="morphsearch-content">
                    <div class="dummy-column">
                        <h2>People</h2>
                        <a class="dummy-media-object" href="#!">
                            <img class="round"
                                src="http://0.gravatar.com/avatar/81b58502541f9445253f30497e53c280?s=50&d=identicon&r=G"
                                alt="Sara Soueidan" />
                            <h3>Sara Soueidan</h3>
                        </a>

                        <a class="dummy-media-object" href="#!">
                            <img class="round"
                                src="http://1.gravatar.com/avatar/9bc7250110c667cd35c0826059b81b75?s=50&d=identicon&r=G"
                                alt="Shaun Dona" />
                            <h3>Shaun Dona</h3>
                        </a>
                    </div>
                    <div class="dummy-column">
                        <h2>Popular</h2>
                        <a class="dummy-media-object" href="#!">
                            <img src="{{ asset('template/assets/images/avatar-1.png') }}"
                                alt="PagePreloadingEffect" />
                            <h3>Page Preloading Effect</h3>
                        </a>

                        <a class="dummy-media-object" href="#!">
                            <img src="{{ asset('template/assets/images/avatar-1.png') }}"
                                alt="DraggableDualViewSlideshow" />
                            <h3>Draggable Dual-View Slideshow</h3>
                        </a>
                    </div>
                    <div class="dummy-column">
                        <h2>Recent</h2>
                        <a class="dummy-media-object" href="#!">
                            <img src="{{ asset('template/assets/images/avatar-1.png') }}"
                                alt="TooltipStylesInspiration" />
                            <h3>Tooltip Styles Inspiration</h3>
                        </a>
                        <a class="dummy-media-object" href="#!">
                            <img src="{{ asset('template/assets/images/avatar-1.png') }}" alt="NotificationStyles" />
                            <h3>Notification Styles Inspiration</h3>
                        </a>
                    </div>
                </div>
                <!-- /morphsearch-content -->
                <span class="morphsearch-close"><i class="icofont icofont-search-alt-1"></i></span>
            </div>
            <!-- search end -->
        </div>
    </nav>
</header>

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        $("#skiptranslate").hide();
    });
</script>
