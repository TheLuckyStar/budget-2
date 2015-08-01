@extends('account.index')

@section('tabcontent')

    <div class='col-md-12'>
        <div class="panel panel-default">
            <div class="panel-heading text-right">
                <i class="fa fa-fw fa-area-chart pull-left"></i>
                @lang('account.development.monthTitle')
            </div>
            <div class="panel-body">
                <div id="monthly-chart"></div>
            </div>
            <div class="panel-footer text-center">
                {!! Html::linkAction(
                    'AccountController@getDevelopment',
                    '<i class="fa fa-fw fa-arrow-left"></i> '.$prevMonth->formatLocalized('%B %Y'),
                    [$account, $prevMonth->toDateString(), $year->toDateString(), $envelopeYear->toDateString()],
                    ['class' => 'link-to-page btn btn-xs btn-default pull-left']
                ) !!}
                {{ $month->formatLocalized('%B %Y') }}
                {!! Html::linkAction(
                    'AccountController@getDevelopment',
                    $nextMonth->formatLocalized('%B %Y').' <i class="fa fa-fw fa-arrow-right"></i>',
                    [$account, $nextMonth->toDateString(), $year->toDateString(), $envelopeYear->toDateString()],
                    ['class' => 'link-to-page btn btn-xs btn-default pull-right']
                ) !!}
            </div>
        </div>
    </div>

    <div class='col-md-12'>
        <div class="panel panel-default">
            <div class="panel-heading text-right">
                <i class="fa fa-fw fa-area-chart pull-left"></i>
                @lang('account.development.yearTitle')
            </div>
            <div class="panel-body">
                <div id="year-chart"></div>
            </div>
            <div class="panel-footer text-center">
                {!! Html::linkAction(
                    'AccountController@getDevelopment',
                    '<i class="fa fa-fw fa-arrow-left"></i> '.$prevYear->formatLocalized('%Y'),
                    [$account, $month->toDateString(), $prevYear->toDateString(), $envelopeYear->toDateString()],
                    ['class' => 'link-to-page btn btn-xs btn-default pull-left']
                ) !!}
                {{ $year->formatLocalized('%Y') }}
                {!! Html::linkAction(
                    'AccountController@getDevelopment',
                    $nextYear->formatLocalized('%Y').' <i class="fa fa-fw fa-arrow-right"></i>',
                    [$account, $month->toDateString(), $nextYear->toDateString(), $envelopeYear->toDateString()],
                    ['class' => 'link-to-page btn btn-xs btn-default pull-right']
                ) !!}
            </div>
        </div>
    </div>

    <div class='col-md-12'>
        <div class="panel panel-default">
            <div class="panel-heading text-right">
                <i class="fa fa-fw fa-bar-chart pull-left"></i>
                @lang('account.development.envelopesTitle')
            </div>
            <div class="panel-body">
                <div id="envelope-chart"></div>
            </div>
            <div class="panel-footer text-center">
                {!! Html::linkAction(
                    'AccountController@getDevelopment',
                    '<i class="fa fa-fw fa-arrow-left"></i> '.$prevEnvelopeYear->formatLocalized('%Y'),
                    [$account, $month->toDateString(), $year->toDateString(), $prevEnvelopeYear->toDateString()],
                    ['class' => 'link-to-page btn btn-xs btn-default pull-left']
                ) !!}
                {{ $envelopeYear->formatLocalized('%Y') }}
                {!! Html::linkAction(
                    'AccountController@getDevelopment',
                    $nextEnvelopeYear->formatLocalized('%Y').' <i class="fa fa-fw fa-arrow-right"></i>',
                    [$account, $month->toDateString(), $year->toDateString(), $nextEnvelopeYear->toDateString()],
                    ['class' => 'link-to-page btn btn-xs btn-default pull-right']
                ) !!}
            </div>
        </div>
    </div>

    <script type="text/javascript">

        Morris.Area({
            element: 'monthly-chart',
            data: {!! $monthData !!},
            xkey: 'date',
            ykeys: [
                'effective_outcome',
                'intended_outcome',
                'unallocated_balance',
                'allocated_balance',
            ],
            labels: [
                "@lang('outcome.effectiveTitle')",
                "@lang('outcome.intendedTitle')",
                "@lang('account.development.unallocatedBalanceTitle')",
                "@lang('account.development.allocatedBalanceTitle')",
            ],
            lineColors: {!! $monthColors !!},
            dateFormat: function (date) { return PageModule.formatDate(new Date(date)); },
            xLabelFormat: function (date) { return date.getDate(); },
            yLabelFormat: function (val) { return PageModule.formatPrice(val); },
            resize: true,
        });

        var monthLabels = {!! $montLabels !!}

        Morris.Area({
            element: 'year-chart',
            data: {!! $yearData !!},
            xkey: 'date',
            ykeys: [
                'effective_outcome',
                'intended_outcome',
                'balance',
            ],
            labels: [
                "@lang('outcome.effectiveTitle')",
                "@lang('outcome.intendedTitle')",
                "@lang('account.development.allocatedBalanceTitle')",
                "@lang('account.development.unallocatedBalanceTitle')",
            ],
            lineColors: {!! $yearColors !!},
            dateFormat: function (date) { return monthLabels[new Date(date).getMonth()]; },
            xLabelFormat: function (date) { return monthLabels[date.getMonth()]; },
            yLabelFormat: function (val) { return PageModule.formatPrice(val); },
            resize: true,
        });

        Morris.Bar({
            element: 'envelope-chart',
            data: {!! $envelopeData !!},
            xkey: 'date',
            ykeys: {!! json_encode($account->envelopes->lists('id')) !!},
            labels: {!! json_encode($account->envelopes->lists('name')) !!},
            stacked: true,
            // yLabelFormat: function (val) { return PageModule.formatPrice(val); },
            resize: true,
        });

    </script>

@endsection
