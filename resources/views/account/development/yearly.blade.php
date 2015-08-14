<div class="panel panel-default">
    <div class="panel-heading text-center">
        {!! Html::linkAction(
            'Account\DevelopmentController@getYearly',
            '<i class="fa fa-fw fa-arrow-left"></i> '.$prevYear->formatLocalized('%Y'),
            [$account, $prevYear->toDateString()],
            [
                'class' => 'routable btn btn-xs btn-default pull-left',
                'data-target' => '#account-development-yearly',
            ]
        ) !!}
        {{ $date->formatLocalized('%Y') }}
        {!! Html::linkAction(
            'Account\DevelopmentController@getYearly',
            $nextYear->formatLocalized('%Y').' <i class="fa fa-fw fa-arrow-right"></i>',
            [$account, $nextYear->toDateString()],
            [
                'class' => 'routable btn btn-xs btn-default pull-right',
                'data-target' => '#account-development-yearly',
            ]
        ) !!}
    </div>
    <div class="panel-body">
        <div id="account-development-yearly-chart"></div>
    </div>
</div>

<script type="text/javascript">

    $('#account-development-yearly-chart').get(0).chart = Morris.Area({
        element: 'account-development-yearly-chart',
        data: {!! $data !!},
        xkey: 'date',
        ykeys: [
            'revenue',
            'allocatedRevenue',
            'outcome',
        ],
        labels: [
            "@lang('operation.type.revenue')",
            "@lang('operation.type.allocatedRevenue')",
            "@lang('operation.type.outcome')",
        ],
        lineColors: {!! $colors !!},
        dateFormat: function (date) { return require('moment')(date).format("MMMM"); },
        xLabelFormat: function (date) {return require('moment')(date).subtract(1, 'months').format("MMMM"); },
        yLabelFormat: function (val) { return FormatModule.price(val); },
        smooth: false,
        resize: true,
        behaveLikeLine: true,
    });

</script>