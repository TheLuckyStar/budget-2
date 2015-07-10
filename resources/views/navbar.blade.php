<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">{{ trans('app.layout.toggle') }}</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">
            <i class="fa fa-th-large" title="{{ trans('home.layout.title') }}"></i>
        </a>
    </div>

    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                {{ /*Auth::user()->name*/'' }} <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a href="#">
                        <i class="fa fa-fw fa-user"></i> {{ trans('profile.layout.title') }}
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <i class="fa fa-fw fa-power-off"></i> {{ trans('user.logout.title') }}
                    </a>
                </li>
            </ul>
        </li>
    </ul>

    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
    </div>
    <!-- /.navbar-collapse -->
</nav>