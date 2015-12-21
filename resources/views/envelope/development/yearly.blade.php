<div class="panel panel-default">
    <div class="panel-heading text-center">
        {!! Html::linkAction(
            'Envelope\DevelopmentController@getYearly',
            '<i class="fa fa-fw fa-arrow-left"></i> '.$prevYear->formatLocalized('%Y'),
            [$envelope, $prevYear->toDateString()],
            [
                'class' => 'routable btn btn-xs btn-default pull-left',
                'data-target' => '#envelope-development-yearly',
            ]
        ) !!}
        {{ $date->formatLocalized('%B %Y') }} - {{ $date->copy()->addMonths(11)->formatLocalized('%B %Y') }}
        @if ($nextYear->lte(Carbon\Carbon::now()))
            {!! Html::linkAction(
                'Envelope\DevelopmentController@getYearly',
                $nextYear->formatLocalized('%Y').' <i class="fa fa-fw fa-arrow-right"></i>',
                [$envelope, $nextYear->toDateString()],
                [
                    'class' => 'routable btn btn-xs btn-default pull-right',
                    'data-target' => '#envelope-development-yearly',
                ]
            ) !!}
        @endif
    </div>
    <div class="panel-body">
        <div id="envelope-development-yearly-chart"></div>
    </div>
</div>

<script type="text/javascript">

    $('#envelope-development-yearly-chart').get(0).chart = Morris.Line({
        element: 'envelope-development-yearly-chart',
        data: {!! json_encode($chart->getData()) !!},
        xkey: 'date',
        ykeys: [
            'value',
        ],
        labels: [
            "@lang('operation.aggregate.balance')",
        ],
        lineColors: {!! json_encode($chart->getColors()) !!},
        dateFormat: function (date) { return require('moment')(date).format("MMMM"); },
        xLabelFormat: function (date) {return require('moment')(date).format("MMMM"); },
        yLabelFormat: function (val) { return FormatModule.price(val, '{!! $envelope->currency !!}'); },
        resize: true,
    });

</script>