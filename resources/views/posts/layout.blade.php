
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">

    <title>Forum | Remark Admin Template</title>

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
            <span class="navbar-brand-text"> Remark</span>
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
                        <a class="animsition-link" href="../../angular/index.html">
                            <i class="site-menu-icon bd-angular" aria-hidden="true"></i>
                            <span class="site-menu-title">Post Dashboard</span>
                            <div class="site-menu-label">
                                <span class="label label-danger label-round">new</span>
                            </div>
                        </a>
                    </li>
                </ul>


            </div>
        </div>
    </div>

    <div class="site-menubar-footer">

        <a href="javascript:{{url('/login')}}" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
            <span class="icon wb-power" aria-hidden="true"></span>
        </a>
    </div>
</div>






<div class="page bg-white animsition">
    <!-- Forum Content -->
    <div class="page-main">

        <!-- Forum Content Header -->
        <div class="page-header">
            <h1 class="page-title">Current Post</h1>
            <form class="margin-top-20" action="#" role="search">
                <div class="input-search input-search-dark">
                    <input type="text" class="form-control width-full" placeholder="Search..." name="">
                    <button type="submit" class="input-search-btn">
                        <i class="icon wb-search" aria-hidden="true"></i>
                    </button>
                </div>
            </form>
        </div>

        <!-- Forum Nav -->
        <div class="page-nav-tabs">
            <ul class="nav nav-tabs nav-tabs-line" data-plugin="nav-tabs" role="tablist">
                <li class="active" role="presentation">
                    <a data-toggle="tab" href="#forum-newest" aria-controls="forum-newest" aria-expanded="true"
                       role="tab">Newest</a>
                </li>
            </ul>
        </div>

        <!-- Forum Content -->
        <div class="container">
            <div class="col-sm-offset-2 col-sm-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        New Task
                    </div>

                    <div class="panel-body">
                        <!-- Display Validation Errors -->


                                <!-- New Task Form -->
                        <form action="/task" method="POST" class="form-horizontal">
                            {{ csrf_field() }}

                                    <!-- Task Name -->
                            <div class="form-group">
                                <label for="task-name" class="col-sm-3 control-label">Task</label>

                                <div class="col-sm-6">
                                    <input type="text" name="name" id="task-name" class="form-control" value="{{ old('task') }}">
                                </div>
                            </div>

                            <!-- Add Task Button -->
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-6">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fa fa-btn fa-plus"></i>Add Task
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Current Tasks -->
                @if (count($tasks) > 0)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Current Tasks
                        </div>

                        <div class="panel-body">
                            <table class="table table-striped task-table">
                                <thead>
                                <th>Task</th>
                                <th>&nbsp;</th>
                                <tbody>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td class="table-text"><div>{{ $task->name }}</div></td>

                                        <!-- Task Delete Button -->
                                        <td>
                                            <form action="/task/{{ $task->id }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <button type="submit" id="delete-task-{{ $task->id }}" class="btn btn-danger">
                                                    <i class="fa fa-btn fa-trash"></i>Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>






<button class="site-action btn-raised btn btn-success btn-floating" data-target="#addTopicForm"
        data-toggle="modal" type="button">
    <i class="icon wb-pencil" aria-hidden="true"></i>
</button>
<!-- Add Topic Form -->
<div class="modal fade" id="addTopicForm" aria-hidden="true" aria-labelledby="addTopicForm"
     role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
                <h4 class="modal-title">Create New Topic</h4>
            </div>
            <div class="modal-body container-fluid">
                <form>
                    <div class="form-group">
                        <label class="control-label margin-bottom-15" for="topicTitle">Topic Title:</label>
                        <input type="text" class="form-control" id="topicTitle" name="title" placeholder="How To..."
                        />
                    </div>
                    <div class="form-group">
                        <textarea name="content" data-provide="markdown" data-iconlibrary="fa" rows="10"></textarea>
                    </div>

                </form>
            </div>
            <div class="modal-footer text-left">
                <button class="btn btn-primary" data-dismiss="modal" type="submit">Create</button>
                <a class="btn btn-sm btn-white" data-dismiss="modal" href="javascript:void(0)">Cancel</a>
            </div>
        </div>
    </div>
</div>
<!-- End Add Topic Form -->


<!-- Footer -->
<footer class="site-footer">
    <div class="site-footer-legal">© 2015 <a href="http://themeforest.net/item/remark-responsive-bootstrap-admin-template/11989202">Remark</a></div>
    <div class="site-footer-right">
        Crafted with <i class="red-600 wb wb-heart"></i> by <a href="http://themeforest.net/user/amazingSurge">amazingSurge</a>
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