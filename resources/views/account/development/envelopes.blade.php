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
        <div id="account-development-envelopes-chart"></div>
    </div>
</div>

<script type="text/javascript">

    $('#account-development-envelopes-chart').get(0).chart = Morris.Line({
        element: 'account-development-envelopes-chart',
        data: {!! $data !!},
        xkey: 'date',
        ykeys: {!! json_encode($account->envelopes->lists('id')) !!},
        labels: {!! json_encode($account->envelopes->lists('name')) !!},

        dateFormat: function (date) { return require('moment')(date).format("MMMM"); },
        xLabelFormat: function (date) { return require('moment')(date).format("MMMM"); },
        yLabelFormat: function (val) { return FormatModule.price(val); },
        smooth: false,
        resize: true,
        behaveLikeLine: true,
    });

</script>
