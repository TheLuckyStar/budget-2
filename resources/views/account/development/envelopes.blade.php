<div class="panel panel-default">
    <div class="panel-heading text-center">
        {!! Html::linkAction(
            'Account\DevelopmentController@getEnvelopes',
            '<i class="fa fa-fw fa-arrow-left"></i> '.$prevYear->formatLocalized('%Y'),
            [$account, $prevYear->toDateString()],
            [
                'class' => 'routable btn btn-xs btn-default pull-left',
                'data-target' => '#account-development-envelopes',
            ]
        ) !!}
        {{ $date->formatLocalized('%Y') }}
        {!! Html::linkAction(
            'Account\DevelopmentController@getEnvelopes',
            $nextYear->formatLocalized('%Y').' <i class="fa fa-fw fa-arrow-right"></i>',
            [$account, $nextYear->toDateString()],
            [
                'class' => 'routable btn btn-xs btn-default pull-right',
                'data-target' => '#account-development-envelopes',
            ]
        ) !!}
    </div>
    <div class="panel-body">
        <div id="envelope-development-envelopes-chart"></div>
    </div>
</div>

<script type="text/javascript">

    Morris.Bar({
        element: 'envelope-development-envelopes-chart',
        data: {!! $data !!},
        xkey: 'date',
        ykeys: {!! json_encode($account->envelopes->lists('id')) !!},
        labels: {!! json_encode($account->envelopes->lists('name')) !!},
        stacked: true,
        // yLabelFormat: function (val) { return FormatModule.price(val); },
        resize: true,
    });

</script>
