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

        {!! Html::ul($horizontalMenu, ['class' => 'nav navbar-left top-nav small']) !!}

    </div>

    <div class="collapse navbar-collapse navbar-ex1-collapse">

            <ul class="nav navbar-right top-nav">
                <li>
                    @if (App::getLocale() === 'fr')
                        {!! Html::link('en', 'EN', ['class' => 'language-link']) !!}
                    @elseif (App::getLocale() === 'en')
                        {!! Html::link('fr', 'FR', ['class' => 'language-link']) !!}
                    @endif
                </li>
                <!-- Top Menu Items - These collapse to the responsive navigation menu on small screens -->
                @if (Auth::check())
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
                                {!! Html::linkAction(
                                    'Auth\AuthController@getLogout',
                                    '<i class="fa fa-fw fa-power-off"></i> '.trans('user.logout.title'),
                                    [],
                                    ['class' => 'routable', 'data-target' => '#page-wrapper']
                                ) !!}
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            {!! Html::ul($verticalMenu, ['class' => 'nav navbar-nav side-nav small']) !!}

    </div>

</nav>
