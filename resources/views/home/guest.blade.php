<div id="home-guest" class='row' data-vertical-url="{{ action('HomeController@getIndex') }}">

    @include('blocks.alerts')

    <div class="col-md-12">
        <div class="jumbotron">
            <h1>@lang('home.guest.jumbotron.title')</h1>
            <p>@lang('app.layout.description')</p>
            <p class='text-right'>
                {!! Html::linkAction(
                    'Auth\AuthController@getLogin',
                    trans('user.register.title').' & '.trans('user.login.title'),
                    [],
                    [
                        'class' => 'routable btn btn-lg btn-primary',
                        'data-target' => '#page-wrapper',
                    ]
                ) !!}
                {!! Html::linkAction(
                    'Auth\AuthController@getLogin', // @TODO Link to demo page
                    trans('home.guest.jumbotron.demoButton'),
                    [],
                    [
                        'class' => 'routable btn btn-lg btn-warning',
                        'data-target' => '#page-wrapper',
                    ]
                ) !!}
            </p>
        </div>
    </div>

    <div class="col-md-12">
        <div class='row'>

            <div class="col-md-6">
                <div class="panel panel-info">
                    <div class="panel-heading text-right">
                        <i class="fa fa-fw fa-envelope fa-5x pull-left"></i>
                        <i>@lang('home.guest.benefits.subtitle')</i>
                        <h3>@lang('home.guest.benefits.title')</h3>
                    </div>
                    <ul class="list-group">
                        @foreach(trans('home.guest.benefits.content') as $content)
                            <li class="list-group-item">{{ $content }}</li>
                        @endforeach
                    </ul>
                    <div class="panel-footer">
                        @lang('home.guest.benefits.footer')
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="panel panel-info">
                    <div class="panel-heading text-right">
                        <i class="fa fa-fw fa-desktop fa-5x pull-left"></i>
                        <i>@lang('home.guest.usages.subtitle')</i>
                        <h3>@lang('home.guest.usages.title')</h3>
                    </div>
                    <ul class="list-group">
                        @foreach(trans('home.guest.usages.content') as $content)
                            <li class="list-group-item">{{ $content }}</li>
                        @endforeach
                    </ul>
                    <div class="panel-footer">
                        @lang('home.guest.usages.footer')
                    </div>
                </div>
            </div>

        </div>
        <div class='row'>

            <div class="col-md-6">
                <div class="panel panel-info">
                    <div class="panel-heading text-right">
                        <i class="fa fa-fw fa-star fa-5x pull-left"></i>
                        <i>@lang('home.guest.features.subtitle')</i>
                        <h3>@lang('home.guest.features.title')</h3>
                    </div>
                    <ul class="list-group">
                        @foreach(trans('home.guest.features.content') as $content)
                            <li class="list-group-item">{{ $content }}</li>
                        @endforeach
                    </ul>
                    <div class="panel-footer">
                        @lang('home.guest.features.footer')
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="panel panel-info">
                    <div class="panel-heading text-right">
                        <i class="fa fa-fw fa-user-secret fa-5x pull-left"></i>
                        <i>@lang('home.guest.trust.subtitle')</i>
                        <h3>@lang('home.guest.trust.title')</h3>
                    </div>
                    <ul class="list-group">
                        @foreach(trans('home.guest.trust.content') as $content)
                            <li class="list-group-item">{{ $content }}</li>
                        @endforeach
                    </ul>
                    <div class="panel-footer">
                        @lang('home.guest.trust.footer')
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
