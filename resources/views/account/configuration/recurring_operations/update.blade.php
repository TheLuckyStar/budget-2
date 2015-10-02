
<td class="row form-group {{ $errors->has('type') ? 'has-error' : '' }}">
    {!! Form::select(
        'type',
        [
            'revenue' => trans('operation.type.revenue'),
            'outcome' => trans('operation.type.outcome'),
            'incomingTransfer' => trans('operation.type.incomingTransfer'),
            'outgoingTransfer' => trans('operation.type.outgoingTransfer'),
        ],
        $recurringOperation->type,
        [
            'class' => 'form-control',
            'id' => 'recurring_operation-'.$recurringOperation->id.'-select-type'
        ]
    ) !!}
    @if ($errors->has('type'))
        {!! Html::ul($errors->get('type'), ['class' => 'help-block text-right']) !!}
    @endif
</td>

<td class="row form-group {{ $errors->has('envelope_id') || $errors->has('to_account_id') ? 'has-error' : '' }}">

    {!! Form::select(
        'envelope_id',
        $account->envelopes()->lists('name', 'id'),
        $recurringOperation->type === 'outcome' ? $recurringOperation->entity_id : null,
        [
            'class' => 'form-control',
            'id' => 'recurring_operation-'.$recurringOperation->id.'-select-envelope_id',
            'placeholder' => trans('operation.fields.envelope_id')
        ]
    ) !!}

    @if ($errors->has('envelope_id'))
        {!! Html::ul($errors->get('envelope_id'), ['class' => 'help-block text-right']) !!}
    @endif

    {!! Form::select(
        'to_account_id',
        array_map(function ($val) {
            return trans('operation.fields.accountToPrefix').' '.$val;
        }, Auth::user()->accounts()->where('id', '!=', $account->id)->lists('name', 'id')->toArray()),
        $recurringOperation->type === 'outgoingTransfer' ? $recurringOperation->entity_id : null,
        [
            'class' => 'form-control',
            'id' => 'recurring_operation-'.$recurringOperation->id.'-select-to_account_id',
            'placeholder' => trans('operation.fields.to_account_id')
        ]
    ) !!}

    @if ($errors->has('to_account_id'))
        {!! Html::ul($errors->get('to_account_id'), ['class' => 'help-block text-right']) !!}
    @endif

    {!! Form::select(
        'from_account_id',
        array_map(function ($val) {
            return trans('operation.fields.accountFromPrefix').' '.$val;
        }, Auth::user()->accounts()->where('id', '!=', $account->id)->lists('name', 'id')->toArray()),
        $recurringOperation->type === 'incomingTransfer' ? $recurringOperation->entity_id : null,
        [
            'class' => 'form-control',
            'id' => 'recurring_operation-'.$recurringOperation->id.'-select-from_account_id',
            'placeholder' => trans('operation.fields.from_account_id')
        ]
    ) !!}

    @if ($errors->has('from_account_id'))
        {!! Html::ul($errors->get('from_account_id'), ['class' => 'help-block text-right']) !!}
    @endif

</td>

<td class="row form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    {!! Form::text(
        'name',
        $recurringOperation->name,
        [
            'class' => 'form-control',
            'id' => 'recurring_operation-'.$recurringOperation->id.'-input-name',
            'placeholder' => trans('operation.fields.name')
        ]
    ) !!}
    @if ($errors->has('name'))
        {!! Html::ul($errors->get('name'), ['class' => 'help-block text-right']) !!}
    @endif
</td>

<td class="row form-group {{ $errors->has('amount') ? 'has-error' : '' }}">
    <div class='input-group'>
        {!! Form::text(
            'amount',
            $recurringOperation->amount,
            [
                'class' => 'form-control text-right',
                'id' => 'recurring_operation-'.$recurringOperation->id.'-input-amount',
                'placeholder' => trans('operation.fields.amount')
            ]
        ) !!}
        <span class="input-group-addon">
            <span class="glyphicon glyphicon-euro"></span>
        </span>
    </div>
    @if ($errors->has('amount'))
        {!! Html::ul($errors->get('amount'), ['class' => 'help-block text-right']) !!}
    @endif
</td>

<td class="text-right">

    {!! Form::token() !!}

    {!! Html::linkAction(
        "Account\ConfigurationController@postRecurringOperationUpdate",
        '<i class="fa fa-fw fa-pencil" title="'.trans('app.button.update').'"></i>',
        [$account, $recurringOperation],
        ['class' => 'btn btn-xs btn-success', 'title' => trans('app.button.update')]
    ) !!}

    {!! Html::linkAction(
        "Account\ConfigurationController@postRecurringOperationDelete",
        '<i class="fa fa-fw fa-trash" title="'.trans('app.button.delete').'"></i>',
        [$account, $recurringOperation],
        ['class' => 'btn btn-xs btn-danger', 'title' => trans('app.button.delete')]
    ) !!}

    <script type="text/javascript">
        OperationModule.initRow($('#row-recurring_operation-{{ $recurringOperation->id }}'));
    </script>

</td>

