
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">

    <title>Wenxin | Main</title>

    <link rel="apple-touch-icon" href="{{url('/vendors/remark/base/assets/images/apple-touch-icon.png')}}">
    <link rel="shortcut icon" href="{{url('/vendors/remark/base/assets/images/favicon.ico')}}">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{url('/vendors/remark/global/css/bootstrap.min.css?v2.1.0')}}">
    <link rel="stylesheet" href="{{url('/vendors/remark/global/css/bootstrap-extend.min.css?v2.1.0')}}">
    <link rel="stylesheet" href="{{url('/vendors/remark/base/assets/css/site.min.css?v2.1.0')}}">

    <!-- Skin tools (demo site only) -->
    <link rel="stylesheet" href="{{url('/vendors/remark/global/css/skintools.min.css?v2.1.0')}}">
    <script src="{{url('/vendors/remark/base/assets/js/sections/skintools.min.js')}}"></script>

    <!-- Plugins -->
    <link rel="stylesheet" href="{{url('/vendors/remark/global/vendor/animsition/animsition.min.css?v2.1.0')}}">
    <link rel="stylesheet" href="{{url('/vendors/remark/global/vendor/asscrollable/asScrollable.min.css?v2.1.0')}}">
    <link rel="stylesheet" href="{{url('/vendors/remark/global/vendor/switchery/switchery.min.css?v2.1.0')}}">
    <link rel="stylesheet" href="{{url('/vendors/remark/global/vendor/intro-js/introjs.min.css?v2.1.0')}}">
    <link rel="stylesheet" href="{{url('/vendors/remark/global/vendor/slidepanel/slidePanel.min.css?v2.1.0')}}">
    <link rel="stylesheet" href="{{url('/vendors/remark/global/vendor/flag-icon-css/flag-icon.min.css?v2.1.0')}}">

    <!-- Plugins For This Page -->
    <link rel="stylesheet" href="{{url('/vendors/remark/global/vendor/select2/select2.min.css?v2.1.0')}}">
    <link rel="stylesheet" href="{{url('/vendors/remark/global/vendor/bootstrap-markdown/bootstrap-markdown.min.css?v2.1.0')}}">
    <link rel="stylesheet" href="{{url('/vendors/remark/global/vendor/bootstrap-select/bootstrap-select.min.css?v2.1.0')}}">

    <!-- Page -->
    <link rel="stylesheet" href="{{url('/vendors/remark/base/assets/examples/css/apps/forum.min.css?v2.1.0')}}">

    <!-- Fonts -->
    <link rel="stylesheet" href="{{url('/vendors/remark/global/fonts/web-icons/web-icons.min.css?v2.1.0')}}">
    <link rel="stylesheet" href="{{url('/vendors/remark/global/fonts/brand-icons/brand-icons.min.css?v2.1.0')}}">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

    <link rel="stylesheet" href="{{url('/vendors/remark/global/fonts/font-awesome/font-awesome.min.css?v2.1.0')}}">

    <!--[if lt IE 9]>
    <script src="{{url('/vendors/remark/global/vendor/html5shiv/html5shiv.min.js')}}"></script>
    <![endif]-->

    <!--[if lt IE 10]>
    <script src="{{url('/vendors/remark/global/vendor/media-match/media.match.min.js')}}"></script>
    <script src="{{url('/vendors/remark/global/vendor/respond/respond.min.js')}}"></script>
    <![endif]-->

    <!-- Scripts -->
    <script src="{{url('/vendors/remark/global/vendor/modernizr/modernizr.min.js')}}"></script>
    <script src="{{url('/vendors/remark/global/vendor/breakpoints/breakpoints.min.js')}}"></script>
    <script>
        Breakpoints();
    </script>
</head>
<body class="app-forum">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">

    <div class="navbar-header">
        <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided"
                data-toggle="menubar">
            <span class="sr-only">Toggle navigation</span>
            <span class="hamburger-bar"></span>
        </button>
        <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse"
                data-toggle="collapse">
            <i class="icon wb-more-horizontal" aria-hidden="true"></i>
        </button>
        <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
            <img class="navbar-brand-logo" src="{{url('/vendors/remark/base/assets/images/logo.png')}}" title="Remark">
            <span class="navbar-brand-text">HAHAHA</span>
        </div>
        <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-search"
                data-toggle="collapse">
            <span class="sr-only">Toggle Search</span>
            <i class="icon wb-search" aria-hidden="true"></i>
        </button>
    </div>


</nav>
<div class="site-menubar">
    <div class="site-menubar-body">
        <div>
            <div>
                <ul class="site-menu">
                    <li class="site-menu-category">POSTS</li>
                    <li class="site-menu-item">
                        <a class="animsition-link" href="{{url('/tasks')}}">
                            <i class="site-menu-icon bd-angular" aria-hidden="true"></i>
                            <span class="site-menu-title">All Posts</span>
                        </a>
                    </li>

                    <li class="site-menu-item">
                        <a href="{{url('/mytasks')}}">
                            <i class="site-menu-icon wb-file" aria-hidden="true"></i>
                            <span class="site-menu-title">My Posts</span>
                        </a>
                    </li>
                </ul>


            </div>
        </div>
    </div>

    <div class="site-menubar-footer">

        <a href="{{url('/logout')}}" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
            <span class="icon wb-power" aria-hidden="true"></span>
        </a>
    </div>
</div>





@yield('contents')


<!-- Footer -->
<footer class="site-footer">
    <div class="site-footer-legal">© 2016 <a href="http://themeforest.net/item/remark-responsive-bootstrap-admin-template/11989202">Remark</a></div>
    <div class="site-footer-right">
        Edited with <i class="red-600 wb wb-heart"></i> by <a href="http://themeforest.net/user/amazingSurge">Wenxin</a>
    </div>
</footer>
<!-- Core  -->
<script src="{{url('/vendors/remark/global/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{url('/vendors/remark/global/vendor/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{url('/vendors/remark/global/vendor/animsition/animsition.min.js')}}"></script>
<script src="{{url('/vendors/remark/global/vendor/asscroll/jquery-asScroll.min.js')}}"></script>
<script src="{{url('/vendors/remark/global/vendor/mousewheel/jquery.mousewheel.min.js')}}"></script>
<script src="{{url('/vendors/remark/global/vendor/asscrollable/jquery.asScrollable.all.min.js')}}"></script>
<script src="{{url('/vendors/remark/global/vendor/ashoverscroll/jquery-asHoverScroll.min.js')}}"></script>

<!-- Plugins -->
<script src="{{url('/vendors/remark/global/vendor/switchery/switchery.min.js')}}"></script>
<script src="{{url('/vendors/remark/global/vendor/intro-js/intro.min.js')}}"></script>
<script src="{{url('/vendors/remark/global/vendor/screenfull/screenfull.min.js')}}"></script>
<script src="{{url('/vendors/remark/global/vendor/slidepanel/jquery-slidePanel.min.js')}}"></script>

<!-- Plugins For This Page -->
<script src="{{url('/vendors/remark/global/vendor/slidepanel/jquery-slidePanel.min.js')}}"></script>
<script src="{{url('/vendors/remark/global/vendor/bootstrap-markdown/bootstrap-markdown.js')}}"></script>
<script src="{{url('/vendors/remark/global/vendor/bootstrap-select/bootstrap-select.min.js')}}"></script>
<script src="{{url('/vendors/remark/global/vendor/marked/marked.min.js')}}"></script>
<script src="{{url('/vendors/remark/global/vendor/to-markdown/to-markdown.js')}}"></script>

<!-- Scripts -->
<script src="{{url('/vendors/remark/global/js/core.min.js')}}"></script>
<script src="{{url('/vendors/remark/base/assets/js/site.min.js')}}"></script>

<script src="{{url('/vendors/remark/base/assets/js/sections/menu.min.js')}}"></script>
<script src="{{url('/vendors/remark/base/assets/js/sections/menubar.min.js')}}"></script>
<script src="{{url('/vendors/remark/base/assets/js/sections/gridmenu.min.js')}}"></script>
<script src="{{url('/vendors/remark/base/assets/js/sections/sidebar.min.js')}}"></script>

<script src="{{url('/vendors/remark/global/js/configs/config-colors.min.js')}}"></script>
<script src="{{url('/vendors/remark/base/assets/js/configs/config-tour.min.js')}}"></script>

<script src="{{url('/vendors/remark/global/js/components/asscrollable.min.js')}}"></script>
<script src="{{url('/vendors/remark/global/js/components/animsition.min.js')}}"></script>
<script src="{{url('/vendors/remark/global/js/components/slidepanel.min.js')}}"></script>
<script src="{{url('/vendors/remark/global/js/components/switchery.min.js')}}"></script>

<script src="{{url('/vendors/remark/global/js/components/bootstrap-select.min.js')}}"></script>


<script src="{{url('/vendors/remark/base/assets/js/app.min.js')}}"></script>

<script src="{{url('/vendors/remark/base/assets/examples/js/apps/forum.min.js')}}"></script>


<!-- Google Analytics -->
<script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
        a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js',
            'ga');

    ga('create', 'UA-65522665-1', 'auto');
    ga('send', 'pageview');
</script>
</body>

</html>