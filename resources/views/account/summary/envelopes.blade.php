
<div class="panel panel-default">
    <div class="panel-heading text-right">
        <i class="fa fa-fw fa-pie-chart pull-left"></i>
        @lang('account.summary.envelopes.title')
    </div>
    <div class="panel-body">
        <div id="account-envelopes-balance-chart"></div>
    </div>
</div>

<script type="text/javascript">

    Morris.Donut({
        element: 'account-envelopes-balance-chart',
        data: {!! $data !!},
        colors: {!! $colors !!},
        formatter: function (val, data) { return FormatModule.price(val); },
        resize: true
    });

</script>
