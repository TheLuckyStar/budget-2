<div id="account-index"
    class='row'
    data-horizontal-url="{{ action('AccountController@getIndex', $account) }}"
    data-vertical-url="{{ action('AccountController@getIndex', $account) }}"
    data-account-id="{{ $account->id }}">

    @include('blocks.alerts')

    <div class='col-md-12'>
        <h1 class="page-header">
            <i class="fa fa-fw fa-home" title="@lang('home.layout.title')"></i>
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
            <li role="presentation" class='active'>
                {!! Html::link(
                    '#summary',
                    '<i class="fa fa-fw fa-th-large"></i> '
                        .trans('account.summary.title'),
                    ['aria-controls' => 'summary', 'role' => 'tab', 'data-toggle' => 'tab']
                ) !!}
            </li>
            <li role="presentation">
                {!! Html::link(
                    '#operations',
                    '<i class="fa fa-fw fa-table"></i> '
                        .trans('operation.title'),
                    ['aria-controls' => 'operations', 'role' => 'tab', 'data-toggle' => 'tab']
                ) !!}
            </li>
            <li role="presentation">
                {!! Html::link(
                    '#development',
                    '<i class="fa fa-fw fa-area-chart"></i> '
                        .trans('account.development.title'),
                    ['aria-controls' => 'development', 'role' => 'tab', 'data-toggle' => 'tab']
                ) !!}
            </li>
        </ul>

        <div class="tab-content">
            <div role="tabpanel" class="tab-pane row active" id="summary">
                <div class='col-md-4' id='account-summary-balance' data-url='{{ action('Account\SummaryController@getBalance', $account) }}'></div>
                <div class='col-md-4' id='account-summary-envelopes' data-url='{{ action('Account\SummaryController@getEnvelopes', $account) }}'></div>
                <div class='col-md-4' id='account-summary-users' data-url='{{ action('Account\SummaryController@getUsers', $account) }}'></div>
                <div class='col-md-4' id='account-summary-events' data-url='{{ action('Account\SummaryController@getEvents', $account) }}'></div>
            </div>
            <div role="tabpanel" class="tab-pane row" id="operations">
                <div class='col-md-12' id='account-operations-table' data-url='{{ action('Account\OperationsController@getTable', $account) }}'></div>
            </div>
            <div role="tabpanel" class="tab-pane row" id="development">
                <div class='col-md-12' id='account-development-monthly' data-url='{{ action('Account\DevelopmentController@getMonthly', $account) }}'></div>
                <div class='col-md-12' id='account-development-yearly' data-url='{{ action('Account\DevelopmentController@getYearly', $account) }}'></div>
                <div class='col-md-12' id='account-development-envelopes' data-url='{{ action('Account\DevelopmentController@getEnvelopes', $account) }}'></div>
            </div>
        </div>

    </div>

    <script type="text/javascript">

        RouterModule.refresh($('#account-summary-balance'), function() {
            RouterModule.refresh($('#account-summary-envelopes'), function() {
                RouterModule.refresh($('#account-summary-users'), function() {
                    RouterModule.refresh($('#account-summary-events'), function() {
                        RouterModule.refresh($('#account-operations-table'), function() {
                            RouterModule.refresh($('#account-development-monthly'), function() {
                                RouterModule.refresh($('#account-development-yearly'), function() {
                                    RouterModule.refresh($('#account-development-envelopes'));
                                });
                            });
                        });
                    });
                });
            });
        });

        $('#account-index > div > ul.nav-tabs a').on('shown.bs.tab', function (e) {
            $(e.target.hash).find('div[id$="-chart"]').each(function() {
                $(this).get(0).chart.resizeHandler();
            });
        });

        $('.page-header .routable.btn-danger, .page-header .routable.btn-success').click(function () {
            RouterModule.clickLink($(this), NavbarModule.refresh);
            return false;
        });

    </script>

</div>
