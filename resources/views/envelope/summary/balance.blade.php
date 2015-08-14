
<div class="panel panel-{{ $envelope->status }}">
    <div class="panel-heading text-right">
        <i class="fa fa-fw fa-pie-chart pull-left"></i>
        @lang('envelope.summary.balance.title', ['balance' => Html::formatPrice($envelope->balance, true)])
    </div>
    <div class="panel-body">
        <div id="envelope-summary-balance-chart"></div>
    </div>
</div>

<script type="text/javascript">

    $('#envelope-summary-balance-chart').get(0).chart = Morris.Donut({
        element: 'envelope-summary-balance-chart',
        data: {!! $data !!},
        colors: {!! $colors !!},
        formatter: function (val, data) { return FormatModule.price(val); },
        resize: true
    });

</script>
