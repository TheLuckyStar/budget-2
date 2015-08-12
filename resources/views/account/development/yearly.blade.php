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

    var monthLabels = {!! $monthLabels !!}

    Morris.Area({
        element: 'account-development-yearly-chart',
        data: {!! $data !!},
        xkey: 'date',
        ykeys: [
            'effective_outcome',
            'intended_outcome',
            'unallocated_balance',
            'allocated_balance',
        ],
        labels: [
            "@lang('operation.type.effectiveOutcome')",
            "@lang('operation.type.intendedOutcome')",
            "@lang('operation.type.unallocatedAvailable')",
            "@lang('operation.type.allocatedAvailable')",
        ],
        lineColors: {!! $colors !!},
        dateFormat: function (date) { return monthLabels[new Date(date).getMonth()]; },
        xLabelFormat: function (date) { return monthLabels[date.getMonth()]; },
        yLabelFormat: function (val) { return FormatModule.price(val); },
        smooth: false,
        resize: true,
    });

</script>