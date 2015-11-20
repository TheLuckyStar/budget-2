<div id="home-authenticated" class='row' data-horizontal-url="{{ action('HomeController@getIndex') }}">

    @include('blocks.breadcrumb', [
        'elements' => [],
        'active' => trans('home.authenticated.title'),
    ])

    @include('blocks.alerts')

    <div class="col-md-4">
        @foreach ($accounts as $account)
            <div class="panel panel-primary">

                <div class="panel-heading">
                    <h4>
                        {!! $account->link() !!}
                    </h4>
                </div>

                <ul class="list-group">

                    <li class="list-group-item list-group-item-{{ $account->status }}">
                        @lang('account.summary.balance.title', [
                            'balance' => Html::formatPrice($account->balance, $account->currency, true)
                        ])
                    </li>

                    <li class="list-group-item list-group-item-{{ $account->envelopes_status }}">
                        @lang('account.summary.envelopes.title', [
                            'balance' => $account->envelopes->isEmpty() ? trans('home.authenticated.noEnvelope') : Html::formatPrice($account->envelopes_balance, $account->currency, true)
                        ])
                    </li>

                </ul>

            </div>
        @endforeach
    </div>

    <div class="col-md-4">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4>
                    <i class="fa fa-fw fa-pie-chart pull-left"></i>
                    @lang('home.authenticated.allAccountsTitle', ['balance' => implode(' / ', $allAccountsBalance)])
                </h4>
            </div>
            <div class="panel-body">
                <div id="home-authenticated-allaccounts-chart"></div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4>
                    <i class="fa fa-fw fa-pie-chart pull-left"></i>
                    @lang('home.authenticated.allEnvelopesTitle', ['balance' => implode(' / ', $allEnvelopesBalance)])
                </h4>
            </div>
            <div class="panel-body">
                <div id="home-authenticated-allenvelopes-chart"></div>
            </div>
        </div>
    </div>

</div>

<script type="text/javascript">

    $('#home-authenticated-allaccounts-chart').each(function () {
        $(this).get(0).chart = Morris.Donut({
            element: $(this).attr('id'),
            data: {!! $allAccountsData !!},
            colors: {!! $allAccountsColors !!},
            formatter: function (val, data) { return FormatModule.price(data.negative ? -val : val, '{!! $account->currency !!}', true); },
            resize: true
        });
    });

    $('#home-authenticated-allenvelopes-chart').each(function () {
        $(this).get(0).chart = Morris.Donut({
            element: $(this).attr('id'),
            data: {!! $allEnvelopesData !!},
            colors: {!! $allEnvelopesColors !!},
            formatter: function (val, data) { return FormatModule.price(data.negative ? -val : val, '{!! $account->currency !!}', true); },
            resize: true
        });
    });

</script>
