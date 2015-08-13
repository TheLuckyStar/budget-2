<div class="panel panel-default">
    <div class="panel-heading text-center">
        {!! Html::linkAction(
            'Account\DevelopmentController@getMonthly',
            '<i class="fa fa-fw fa-arrow-left"></i> '.$prevMonth->formatLocalized('%B %Y'),
            [$account, $prevMonth->toDateString()],
            [
                'class' => 'routable btn btn-xs btn-default pull-left',
                'data-target' => '#account-development-monthly',
            ]
        ) !!}
        {{ $date->formatLocalized('%B %Y') }}
        {!! Html::linkAction(
            'Account\DevelopmentController@getMonthly',
            $nextMonth->formatLocalized('%B %Y').' <i class="fa fa-fw fa-arrow-right"></i>',
            [$account, $nextMonth->toDateString()],
            [
                'class' => 'routable btn btn-xs btn-default pull-right',
                'data-target' => '#account-development-monthly',
            ]
        ) !!}
    </div>
    <div class="panel-body">
        <div id="account-development-monthly-chart"></div>
    </div>
</div>

<script type="text/javascript">
    Morris.Area({
        element: 'account-development-monthly-chart',
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
        dateFormat: function (date) { return FormatModule.date(new Date(date)); },
        xLabelFormat: function (date) { return date.getDate(); },
        yLabelFormat: function (val) { return FormatModule.price(val); },
        smooth: false,
        resize: true,
        behaveLikeLine: true,
    });
</script>
