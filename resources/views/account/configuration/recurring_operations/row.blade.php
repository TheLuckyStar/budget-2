<td class="text-{{ $recurringOperation->getContextAttribute($account) }}">
    @lang('operation.type.'.$recurringOperation->type)
</td>

<td class="text-{{ $recurringOperation->getContextAttribute($account) }}">
    @if ($recurringOperation->type === 'outgoingTransfer')
        @lang('operation.fields.accountToPrefix') {!! $recurringOperation->accountEntity->link() !!}
    @elseif ($recurringOperation->type === 'incomingTransfer')
        @lang('operation.fields.accountFromPrefix') {!! $recurringOperation->accountEntity->link() !!}
    @elseif ($recurringOperation->envelopeEntity)
        {!! $recurringOperation->envelopeEntity->link() !!}
    @endif
</td>

<td class="text-{{ $recurringOperation->getContextAttribute($account) }}">
    {{ $recurringOperation->name }}
</td>

<td class="text-{{ $recurringOperation->getContextAttribute($account) }} text-right">
    {{ Html::formatPrice(
        $recurringOperation->getContextAttribute($account) === 'success' || $recurringOperation->getContextAttribute($account) === 'info' ? $recurringOperation->amount : -$recurringOperation->amount,
        true
    ) }}
</td>

<td class="text-{{ $recurringOperation->getContextAttribute($account) }} text-right">
    {!! Html::linkAction(
        "Account\ConfigurationController@getRecurringOperationUpdate",
        '<i class="fa fa-fw fa-pencil" title="'.trans('app.button.update').'"></i>',
        [$account, $recurringOperation],
        [
            'class' => 'routable btn btn-xs btn-primary',
            'title' => trans('app.button.update'),
            'data-target' => '#row-recurring_operation-'.$recurringOperation->id,
        ]
    ) !!}

    <script type="text/javascript">
        OperationModule.initRow($('#row-recurring_operation-{{ $recurringOperation->id }}'));
    </script>

</td>
