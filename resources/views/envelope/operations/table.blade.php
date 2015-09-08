<div class="panel panel-default">
    <div class="panel-heading text-center">
        {!! Html::linkAction(
            'Envelope\OperationsController@getTable',
            '<i class="fa fa-fw fa-arrow-left"></i> '.$prevMonth->formatLocalized('%B %Y'),
            [$envelope, $prevMonth->toDateString()],
            [
                'class' => 'routable btn btn-xs btn-default pull-left',
                'data-target' => '#envelope-operations-table',
            ]
        ) !!}
        {{ $month->formatLocalized('%B %Y') }}
        {!! Html::linkAction(
            'Envelope\OperationsController@getTable',
            $nextMonth->formatLocalized('%B %Y').' <i class="fa fa-fw fa-arrow-right"></i>',
            [$envelope, $nextMonth->toDateString()],
            [
                'class' => 'routable btn btn-xs btn-default pull-right',
                'data-target' => '#envelope-operations-table',
            ]
        ) !!}
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>@lang('operation.fields.type')</th>
                <th>@lang('operation.fields.envelope_id')</th>
                <th>@lang('operation.fields.date')</th>
                <th>@lang('operation.fields.name')</th>
                <th class="text-right">@lang('operation.fields.amount')</th>
                <th></th>
            </tr>
        </thead>
        @foreach ($operations as $operation)
            <tr id='row-{{ $operation->type }}-{{ $operation->id }}'
                action='{{ action("Envelope\OperationsController@getUpdate", [$envelope, $operation->type, $operation]) }}'>
                @include('envelope.operations.row')
            </tr>
        @endforeach
        <tfoot>
            <tr id='row-operation-new'>
                @include('envelope.operations.add')
            </tr>
        </tfoot>
    </table>
    <div class="panel-footer clearfix">
        <div class='col-md-3 text-{{ $envelope->getStatusAttribute(null, $prevMonth->endOfMonth()) }}'>
            <div class='col-md-12 col-sm-8'>
                @lang('operation.aggregate.balanceAt', ['date' => $prevMonth->endOfMonth()->formatLocalized('%d/%m/%Y')])
            </div>
            <div class='col-md-12 col-sm-4 text-right'>
                {{ Html::formatPrice($envelope->getBalanceAttribute(null, $prevMonth), true) }}
            </div>
        </div>
        <div class='col-md-3 text-success'>
            <div class='col-md-12 col-sm-8'>
                @lang('operation.aggregate.totalIncome')
            </div>
            <div class='col-md-12 col-sm-4 text-right'>
                {{ Html::formatPrice($operations->filterIncomes()->sum('amount'), true) }}
            </div>
        </div>
        <div class='col-md-3 text-danger'>
            <div class='col-md-12 col-sm-8'>
                @lang('operation.aggregate.totalOutcome')
            </div>
            <div class='col-md-12 col-sm-4 text-right'>
                {{ Html::formatPrice(-$operations->filterOutcomes()->sum('amount')) }}
            </div>
        </div>
        <div class='col-md-3 text-{{ $envelope->getStatusAttribute(null, $month->endOfMonth()) }}'>
            <div class='col-md-12 col-sm-8'>
                @lang('operation.aggregate.balanceAt', ['date' => $month->endOfMonth()->formatLocalized('%d/%m/%Y')])
            </div>
            <div class='col-md-12 col-sm-4 text-right'>
                {{ Html::formatPrice($envelope->getBalanceAttribute(null, $month), true) }}
            </div>
        </div>
    </div>
</div>
