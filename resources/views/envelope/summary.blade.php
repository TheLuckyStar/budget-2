@extends('envelope.index')

@section('tabcontent')

    <div class='col-md-4'>
        <div class="panel panel-default">
            <div class="panel-heading text-right">
                <i class="fa fa-fw fa-pie-chart pull-left"></i>
                @lang('envelope.snapshot.title', ['balance' => Html::formatPrice($envelope->balance)])
            </div>
            <div class="panel-body">
                <div id="balance-chart"></div>
            </div>
        </div>
    </div>

    <div class='col-md-4'>
        <div class="panel panel-default">
            <div class="panel-heading text-right">
                <i class="fa fa-fw fa-exchange pull-left"></i>
                @lang('envelope.lastoperations.title')
            </div>
            <div class="panel-body">
            </div>
        </div>
    </div>

    <div class='col-md-4'>
        <div class="panel panel-default">
            <div class="panel-heading text-right">
                <i class="fa fa-fw fa-history pull-left"></i>
                @lang('event.title')
            </div>
            <ul class="list-group">
                @foreach($events as $event)
                    <li class="list-group-item small">
                        {!! $event !!}
                    </li>
                @endforeach
            </ul>
            @if ($events->hasPages())
                <div class="panel-footer text-right">
                    {!! $events->render() !!}
                </div>
            @endif
        </div>
    </div>

    <script type="text/javascript">

        Morris.Donut({
            element: 'balance-chart',
            data: {!! $chartData !!},
            colors: {!! $chartColors !!},
            formatter: function (val, data) { return PageModule.formatPrice(val); },
            resize: true
        });

    </script>

@endsection
