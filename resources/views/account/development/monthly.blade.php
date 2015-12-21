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
        @if ($nextMonth->lte(Carbon\Carbon::now()))
            {!! Html::linkAction(
                'Account\DevelopmentController@getMonthly',
                $nextMonth->formatLocalized('%B %Y').' <i class="fa fa-fw fa-arrow-right"></i>',
                [$account, $nextMonth->toDateString()],
                [
                    'class' => 'routable btn btn-xs btn-default pull-right',
                    'data-target' => '#account-development-monthly',
                ]
            ) !!}
        @endif
    </div>
    <div class="panel-body">
        <div id="account-development-monthly-chart"></div>
    </div>
</div>

<script type="text/javascript">

    $('#account-development-monthly-chart').get(0).chart = Morris.Line({
        element: 'account-development-monthly-chart',
        data: {!! json_encode($chart->getData()) !!},
        xkey: 'date',
        ykeys: [
            'value',
        ],
        labels: [
            "@lang('operation.aggregate.balanceEnvelopes')",
        ],
        xLabels: 'day',
        lineColors: {!! json_encode($chart->getColors()) !!},
        dateFormat: function (date) { return FormatModule.date(new Date(date)); },
        xLabelFormat: function (date) { return date.getDate(); },
        yLabelFormat: function (val) { return FormatModule.price(val, '{!! $account->currency !!}'); },
        resize: true,
    });

</script>
