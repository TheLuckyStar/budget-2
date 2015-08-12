<div class="panel panel-default table-responsive">
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
            <tr>
                <th colspan='4'>
                    <b>
                        @lang('operation.aggregate.balanceAt', ['date' => $prevMonth->endOfMonth()->formatLocalized('%d/%m/%Y')])
                    </b>
                </th>
                <th class="text-right">
                    <b>
                        {{ Html::formatPrice($envelope->getBalanceAttribute(null, $prevMonth), true) }}
                    </b>
                </th>
                <th></th>
            </tr>
        </thead>
        @foreach ($operations as $operation)
            <tr class="text-{{ $operation->context }}">
                <td>
                    @lang(
                        'operation.type.'.$operation->type,
                        ['date' => $operation->date->diffForHumans()]
                    )
                </td>
                <td>{!! $operation->envelope !!}</td>
                <td>{{ $operation->date->formatLocalized('%A %e') }}</td>
                <td>{{ $operation->name }}</td>
                <td class="text-right">
                    {{ Html::formatPrice(
                        $operation instanceof App\Outcome ? -$operation->amount : $operation->amount,
                        true
                    ) }}
                </td>
                <td class="text-right">
                    {!! Html::linkAction(
                        'Envelope\OperationsController@getUpdate',
                        '<i class="fa fa-fw fa-pencil" title="'.trans('app.button.update').'"></i>',
                        [$envelope, get_class($operation), $operation],
                        ['class' => 'link-to-page btn btn-xs btn-primary']
                    ) !!}
                </td>
            </tr>
        @endforeach
        <tfoot>
            <tr>
                <td colspan='4'>
                    <b>
                        @lang('operation.aggregate.totalIncome')
                        ({{ $operations->filterIncomes()->count() }} @lang('operation.title'))
                    </b>
                </td>
                <td class="text-right">
                    <b>
                        {{ Html::formatPrice($operations->filterIncomes()->sum('amount'), true) }}
                    </b>
                </td>
                <td></td>
            </tr>
            <tr>
                <td colspan='4'>
                    <b>
                        @lang('operation.aggregate.totalOutcome')
                        ({{ $operations->filterOutcomes()->count() }} @lang('operation.title'))
                    </b>
                </td>
                <td class="text-right">
                    <b>
                        {{ Html::formatPrice(-$operations->filterOutcomes()->sum('amount')) }}
                    </b>
                </td>
                <td></td>
            </tr>
            <tr>
                <td colspan='4'>
                    <b>
                        @lang('operation.aggregate.balanceAt', ['date' => $month->endOfMonth()->formatLocalized('%d/%m/%Y')])
                    </b>
                </td>
                <td class="text-right">
                    <b>
                        {{ Html::formatPrice($envelope->getBalanceAttribute(null, $month), true) }}
                    </b>
                </td>
                <td></td>
            </tr>
            <tr>
                @include('envelope.operations.add')
            </tr>
        </tfoot>
    </table>
</div>
