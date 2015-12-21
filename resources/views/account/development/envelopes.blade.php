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
        @if ($nextYear->lte(Carbon\Carbon::now()))
            {!! Html::linkAction(
                'Account\DevelopmentController@getEnvelopes',
                $nextYear->formatLocalized('%Y').' <i class="fa fa-fw fa-arrow-right"></i>',
                [$account, $nextYear->toDateString()],
                [
                    'class' => 'routable btn btn-xs btn-default pull-right',
                    'data-target' => '#account-development-envelopes',
                ]
            ) !!}
        @endif
    </div>
    <div class="panel-body">
        @if ($account->envelopes->count() === 0)
            <div class='alert alert-info'>
                @lang('account.development.envelopes.emptyMessage', [
                    'link' => Html::linkAction(
                        'EnvelopeController@getAdd',
                        '<i class="fa fa-fw fa-plus" title="'.trans('envelope.add.title').'"></i> '.trans('envelope.add.title'),
                        $account,
                        ['class' => 'routable', 'data-target' => '#page-wrapper']
                    )
                ])
            </div>
        @else
            <div id="account-development-envelopes-chart"></div>
        @endif
    </div>
</div>

<script type="text/javascript">

    $('#account-development-envelopes-chart').each(function () {
        $(this).get(0).chart = Morris.Line({
            element: $(this).attr('id'),
            data: {!! json_encode($chart->getData()) !!},
            xkey: 'date',
            ykeys: {!! json_encode($account->envelopes->lists('id')) !!},
            labels: {!! json_encode($account->envelopes->lists('name')) !!},
            dateFormat: function (date) { return require('moment')(date).format("MMMM"); },
            xLabelFormat: function (date) { return require('moment')(date).format("MMMM"); },
            yLabelFormat: function (val) { return FormatModule.price(val, '{!! $account->currency !!}'); },
            resize: true,
        });
    });

</script>
