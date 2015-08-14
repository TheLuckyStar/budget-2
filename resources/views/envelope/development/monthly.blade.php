<div class="panel panel-default">
    <div class="panel-heading text-center">
        {!! Html::linkAction(
            'Envelope\DevelopmentController@getMonthly',
            '<i class="fa fa-fw fa-arrow-left"></i> '.$prevMonth->formatLocalized('%B %Y'),
            [$envelope, $prevMonth->toDateString()],
            [
                'class' => 'routable btn btn-xs btn-default pull-left',
                'data-target' => '#envelope-development-monthly',
            ]
        ) !!}
        {{ $date->formatLocalized('%B %Y') }}
        {!! Html::linkAction(
            'Envelope\DevelopmentController@getMonthly',
            $nextMonth->formatLocalized('%B %Y').' <i class="fa fa-fw fa-arrow-right"></i>',
            [$envelope, $nextMonth->toDateString()],
            [
                'class' => 'routable btn btn-xs btn-default pull-right',
                'data-target' => '#envelope-development-monthly',
            ]
        ) !!}
    </div>
    <div class="panel-body">
        <div id="envelope-development-monthly-chart"></div>
    </div>
</div>

<script type="text/javascript">

    $('#envelope-development-monthly-chart').get(0).chart = Morris.Area({
        element: 'envelope-development-monthly-chart',
        data: {!! $data !!},
        xkey: 'date',
        ykeys: [
            'income',
            'outcome',
        ],
        labels: [
            "@lang('operation.type.income')",
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
