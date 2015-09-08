<td class="text-{{ $operation->getContextAttribute($account) }}">
    @lang(
        'operation.type.'.$operation->getTypeAttribute($account),
        ['date' => $operation->date->diffForHumans()]
    )
</td>

<td class="text-{{ $operation->getContextAttribute($account) }}">
    @if ($operation->getTypeAttribute($account) === 'outgoingTransfer')
        @lang('operation.fields.accountToPrefix') {!! $operation->accountTo->link() !!}
    @elseif ($operation->getTypeAttribute($account) === 'incomingTransfer')
        @lang('operation.fields.accountFromPrefix') {!! $operation->accountFrom->link() !!}
    @elseif ($operation->envelope)
        {!! $operation->envelope->link() !!}
    @endif
</td>

<td class="text-{{ $operation->getContextAttribute($account) }}">
    {{ $operation->date->formatLocalized('%A %e') }}
</td>

<td class="text-{{ $operation->getContextAttribute($account) }}">
    {{ $operation->name }}
</td>

<td class="text-{{ $operation->getContextAttribute($account) }} text-right">
    {{ Html::formatPrice(
        $operation->getContextAttribute($account) === 'success' ? $operation->amount : -$operation->amount,
        true
    ) }}
</td>

<td class="text-{{ $operation->getContextAttribute($account) }} text-right">
    {!! Html::linkAction(
        "Account\OperationsController@getUpdate",
        '<i class="fa fa-fw fa-pencil" title="'.trans('app.button.update').'"></i>',
        [$account, $operation->getTypeAttribute($account), $operation],
        [
            'class' => 'routable btn btn-xs btn-primary',
            'title' => trans('app.button.update'),
            'data-target' => '#row-'.$operation->getTypeAttribute($account).'-'.$operation->id,
        ]
    ) !!}

    <script type="text/javascript">
        OperationModule.initRow($('#row-{{ $operation->getTypeAttribute($account) }}-{{ $operation->id }}'));
    </script>

</td>
