<div id="account-index"
    class='row'
    data-horizontal-url="{{ action('AccountController@getIndex', $account) }}"
    data-vertical-url="{{ action('AccountController@getIndex', $account) }}"
    data-account-id="{{ $account->id }}">

    @include('blocks.breadcrumb', [
        'elements' => [
            'HomeController@getIndex' => trans('home.authenticated.title'),
        ],
        'active' => $account
    ])

    @if ($account->envelopes->count() === 0)
        <div class='col-md-12'>
            <div class='alert alert-info'>
                @lang('account.index.noEnvelopeMessage', [
                    'link' => Html::linkAction(
                        'EnvelopeController@getAdd',
                        '<i class="fa fa-fw fa-plus" title="'.trans('envelope.add.title').'"></i> '.trans('envelope.add.title'),
                        $account,
                        ['class' => 'routable', 'data-target' => '#page-wrapper']
                    )
                ])
            </div>
        </div>
    @endif

    @include('blocks.alerts')

    <div class='col-md-12'>
        <h1 class="page-header">
            <i class="fa fa-fw fa-home" title="@lang('home.authenticated.title')"></i>
            @lang('account.index.title')
            <small>
                {{ $account }}
            </small>
            @if ($account->owner()->first()->id === Auth::user()->id)
                <div class='pull-right'>
                    {!! Html::linkAction(
                        'AccountController@getUpdate',
                        '<i class="fa fa-fw fa-pencil" title="'.trans('app.button.update').'"></i> '.trans('app.button.update'),
                        $account,
                        [
                            'class' => 'routable btn btn-primary',
                            'data-target' => '#page-wrapper',
                        ]
                    ) !!}
                    @if ($account->trashed())
                        {!! Html::linkAction(
                            'AccountController@getRestore',
                            '<i class="fa fa-fw fa-recycle" title="'.trans('app.button.restore').'"></i> '.trans('app.button.restore'),
                            $account,
                            [
                                'class' => 'routable btn btn-success',
                                'data-target' => '#page-wrapper',
                            ]
                        ) !!}
                    @else
                        {!! Html::linkAction(
                            'AccountController@getDelete',
                            '<i class="fa fa-fw fa-archive" title="'.trans('app.button.archive').'"></i> '.trans('app.button.archive'),
                            $account,
                            [
                                'class' => 'routable btn btn-danger',
                                'data-target' => '#page-wrapper',
                            ]
                        ) !!}
                    @endif
                </div>
            @endif
        </h1>
    </div>

    <div class='col-md-12'>

        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="{{ $activeTab === 'summary' ? 'active' : '' }}">
                {!! Html::link(
                    '#summary',
                    '<i class="fa fa-fw fa-th-large"></i> '
                        .trans('account.summary.title'),
                    ['aria-controls' => 'summary', 'role' => 'tab', 'data-toggle' => 'tab']
                ) !!}
            </li>
            <li role="presentation" class="{{ $activeTab === 'operations' ? 'active' : '' }}">
                {!! Html::link(
                    '#operations',
                    '<i class="fa fa-fw fa-table"></i> '
                        .trans('operation.title'),
                    ['aria-controls' => 'operations', 'role' => 'tab', 'data-toggle' => 'tab']
                ) !!}
            </li>
            <li role="presentation" class="{{ $activeTab === 'allocation' ? 'active' : '' }}">
                {!! Html::link(
                    '#allocation',
                    '<i class="fa fa-fw fa-sliders"></i> '
                        .trans('account.allocation.title'),
                    ['aria-controls' => 'allocation', 'role' => 'tab', 'data-toggle' => 'tab']
                ) !!}
            </li>
            <li role="presentation" class="{{ $activeTab === 'development' ? 'active' : '' }}">
                {!! Html::link(
                    '#development',
                    '<i class="fa fa-fw fa-area-chart"></i> '
                        .trans('account.development.title'),
                    ['aria-controls' => 'development', 'role' => 'tab', 'data-toggle' => 'tab']
                ) !!}
            </li>
            <li role="presentation" class="{{ $activeTab === 'configuration' ? 'active' : '' }}">
                {!! Html::link(
                    '#configuration',
                    '<i class="fa fa-fw fa-cog"></i> '
                        .trans('account.configuration.title'),
                    ['aria-controls' => 'configuration', 'role' => 'tab', 'data-toggle' => 'tab']
                ) !!}
            </li>
        </ul>

        <div class="tab-content">
            <div role="tabpanel" class="tab-pane row {{ $activeTab === 'summary' ? 'active' : ''}}" id="summary">
                <div class='col-md-4' id='account-summary-balance' data-url='{{ action('Account\SummaryController@getBalance', $account) }}'></div>
                <div class='col-md-4' id='account-summary-envelopes' data-url='{{ action('Account\SummaryController@getEnvelopes', $account) }}'></div>
                <div class='col-md-4' id='account-summary-events' data-url='{{ action('Account\SummaryController@getEvents', $account) }}'></div>
            </div>
            <div role="tabpanel" class="tab-pane row {{ $activeTab === 'operations' ? 'active' : ''}}" id="operations">
                <div class='col-md-12' id='account-operations-table' data-url='{{ action('Account\OperationsController@getTable', $account) }}'></div>
            </div>
            <div role="tabpanel" class="tab-pane row {{ $activeTab === 'allocation' ? 'active' : ''}}" id="allocation">
                <div class='col-md-12' id='account-allocation-sliders' data-url='{{ action('Account\AllocationController@getSliders', $account) }}'></div>
            </div>
            <div role="tabpanel" class="tab-pane row {{ $activeTab === 'development' ? 'active' : ''}}" id="development">
                <div class='col-md-12' id='account-development-monthly' data-url='{{ action('Account\DevelopmentController@getMonthly', $account) }}'></div>
                <div class='col-md-12' id='account-development-yearly' data-url='{{ action('Account\DevelopmentController@getYearly', $account) }}'></div>
                <div class='col-md-12' id='account-development-envelopes' data-url='{{ action('Account\DevelopmentController@getEnvelopes', $account) }}'></div>
            </div>
            <div role="tabpanel" class="tab-pane row {{ $activeTab === 'configuration' ? 'active' : ''}}" id="configuration">
                <div class='col-md-4' id='account-configuration-users' data-url='{{ action('Account\ConfigurationController@getUsers', $account) }}'></div>
                <div class='col-md-8' id='account-configuration-recurring_operations' data-url='{{ action('Account\ConfigurationController@getRecurringOperations', $account) }}'></div>
            </div>
        </div>

    </div>

    <script type="text/javascript">

        RouterModule.refresh($('#account-summary-balance'));
        RouterModule.refresh($('#account-summary-envelopes'));
        RouterModule.refresh($('#account-summary-events'));
        RouterModule.refresh($('#account-allocation-sliders'));
        RouterModule.refresh($('#account-operations-table'));
        RouterModule.refresh($('#account-development-monthly'));
        RouterModule.refresh($('#account-development-yearly'));
        RouterModule.refresh($('#account-development-envelopes'));
        RouterModule.refresh($('#account-configuration-users'));
        RouterModule.refresh($('#account-configuration-recurring_operations'));

        $('.page-header .routable.btn-danger, .page-header .routable.btn-success').click(function () {
            RouterModule.clickLink($(this), NavbarModule.refresh);
            return false;
        });

    </script>

</div>
