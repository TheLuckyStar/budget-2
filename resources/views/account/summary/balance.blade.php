
<div class="panel panel-default">
    <div class="panel-heading text-right">
        <i class="fa fa-fw fa-pie-chart pull-left"></i>
        @lang('account.summary.balance.title', ['balance' => Html::formatPrice($account->balance)])
    </div>
    <div class="panel-body">
        <div id="account-summary-balance-chart"></div>
    </div>
</div>

<script type="text/javascript">

    Morris.Donut({
        element: 'account-summary-balance-chart',
        data: {!! $data !!},
        colors: {!! $colors !!},
        formatter: function (val, data) { return FormatModule.price(data.negative ? -val : val); },
        resize: true
    });

</script>
