@extends('envelope.index')

@section('tabcontent')

    <div class='col-md-12'>
        <div class="panel panel-default">
            <div class="panel-heading text-center">
                {!! Html::linkAction(
                    'EnvelopeController@getDevelopment',
                    '<i class="fa fa-fw fa-arrow-left"></i> '.$prevMonth->formatLocalized('%B %Y'),
                    [$envelope, $prevMonth->toDateString(), $year->toDateString()],
                    ['class' => 'link-to-page btn btn-xs btn-default pull-left']
                ) !!}
                {{ $month->formatLocalized('%B %Y') }}
                {!! Html::linkAction(
                    'EnvelopeController@getDevelopment',
                    $nextMonth->formatLocalized('%B %Y').' <i class="fa fa-fw fa-arrow-right"></i>',
                    [$envelope, $nextMonth->toDateString(), $year->toDateString()],
                    ['class' => 'link-to-page btn btn-xs btn-default pull-right']
                ) !!}
            </div>
            <div class="panel-body">
                <div id="monthly-chart"></div>
            </div>
        </div>
    </div>

    <div class='col-md-12'>
        <div class="panel panel-default">
            <div class="panel-heading text-center">
                {!! Html::linkAction(
                    'EnvelopeController@getDevelopment',
                    '<i class="fa fa-fw fa-arrow-left"></i> '.$prevYear->formatLocalized('%Y'),
                    [$envelope, $month->toDateString(), $prevYear->toDateString()],
                    ['class' => 'link-to-page btn btn-xs btn-default pull-left']
                ) !!}
                {{ $year->formatLocalized('%Y') }}
                {!! Html::linkAction(
                    'EnvelopeController@getDevelopment',
                    $nextYear->formatLocalized('%Y').' <i class="fa fa-fw fa-arrow-right"></i>',
                    [$envelope, $month->toDateString(), $nextYear->toDateString()],
                    ['class' => 'link-to-page btn btn-xs btn-default pull-right']
                ) !!}
            </div>
            <div class="panel-body">
                <div id="year-chart"></div>
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
                'balance',
            ],
            labels: [
                "@lang('operation.type.effectiveOutcome')",
                "@lang('operation.type.intendedOutcome')",
                "@lang('operation.type.available')",
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
                "@lang('operation.type.effectiveOutcome')",
                "@lang('operation.type.intendedOutcome')",
                "@lang('operation.type.available')",
            ],
            lineColors: {!! $yearColors !!},
            dateFormat: function (date) { return monthLabels[new Date(date).getMonth()]; },
            xLabelFormat: function (date) { return monthLabels[date.getMonth()]; },
            yLabelFormat: function (val) { return PageModule.formatPrice(val); },
            resize: true,
        });

    </script>

@endsection
