<div id="account-index"
    class='row'
    data-horizontal-url="{{ action('AccountController@getSummary', $account) }}"
    data-vertical-url="{{ action('AccountController@getSummary', $account) }}"
    data-account-id="{{ $account->id }}">

    @include('blocks.alerts')

    <div class='col-md-12'>
        <h1 class="page-header">
            <i class="fa fa-fw fa-th-large" title="@lang('home.layout.title')"></i>
            @lang('account.index.title')
            <small>
                {{ $account }}
            </small>
            @if ($account->owner->first()->id === Auth::user()->id)
                <div class='pull-right'>
                    {!! Html::linkAction(
                        'AccountController@getUpdate',
                        '<i class="fa fa-fw fa-pencil" title="'.trans('app.button.update').'"></i> '.trans('app.button.update'),
                        $account,
                        ['class' => 'link-to-page btn btn-primary']
                    ) !!}
                    @if ($account->trashed())
                        {!! Html::linkAction(
                            'AccountController@getRestore',
                            '<i class="fa fa-fw fa-recycle" title="'.trans('app.button.restore').'"></i> '.trans('app.button.restore'),
                            $account,
                            ['class' => 'link-to-page btn btn-success']
                        ) !!}
                    @else
                        {!! Html::linkAction(
                            'AccountController@getDelete',
                            '<i class="fa fa-fw fa-archive" title="'.trans('app.button.archive').'"></i> '.trans('app.button.archive'),
                            $account,
                            ['class' => 'link-to-page btn btn-danger']
                        ) !!}
                    @endif
                </div>
            @endif
        </h1>
    </div>

    <div class='col-md-12'>

        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="{{ $activeTab == 'summary' ? 'active' : '' }}">
                {!! Html::linkAction(
                    'AccountController@getSummary',
                    trans('account.summary.title'),
                    $account,
                    ['class' => 'link-to-page', 'aria-controls' => 'summary', 'role' => 'tab', 'data-toggle' => 'tab']
                ) !!}
            </li>
            <li role="presentation" class="{{ $activeTab == 'operations' ? 'active' : '' }}">
                {!! Html::linkAction(
                    'AccountController@getOperations',
                    trans('operation.title'),
                    $account,
                    ['class' => 'link-to-page', 'aria-controls' => 'operations', 'role' => 'tab', 'data-toggle' => 'tab']
                ) !!}
            </li>
            <li role="presentation" class="{{ $activeTab == 'development' ? 'active' : '' }}">
                {!! Html::linkAction(
                    'AccountController@getDevelopment',
                    trans('account.development.title'),
                    $account,
                    ['class' => 'link-to-page', 'aria-controls' => 'development', 'role' => 'tab', 'data-toggle' => 'tab']
                ) !!}
            </li>
        </ul>

        <div class="tab-content">
            <div role="tabpanel" class="tab-pane row active" id="{{ $activeTab }}">
                @yield('tabcontent')
            </div>
        </div>

    </div>

    <script type="text/javascript">
        $('.page-header .btn-danger, .page-header .btn-success').click(function () {
            NavbarModule.emptyHorizontalMenu();
        });
    </script>

</div>
