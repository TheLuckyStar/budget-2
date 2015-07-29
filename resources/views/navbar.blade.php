<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">@lang('app.layout.toggle')</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <div class='navbar-nav top-nav small'>
            @foreach ($horizontalMenu as $link)
                {!! $link !!}
            @endforeach
        </div>

    </div>

    <div class="collapse navbar-collapse navbar-ex1-collapse">

        <!-- Top Menu Items - These collapse to the responsive navigation menu on small screens -->
        @if (Auth::check())
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        {{ Auth::user()->name }} <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#">
                                <i class="fa fa-fw fa-user"></i> @lang('profile.layout.title')
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ action('Auth\AuthController@getLogout') }}" class='link-to-page' id='logout-link'>
                                <i class="fa fa-fw fa-power-off"></i> @lang('user.logout.title')
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        @endif

        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        {!! Html::ul($verticalMenu, ['class' => 'nav navbar-nav side-nav small']) !!}

    </div>

</nav>
