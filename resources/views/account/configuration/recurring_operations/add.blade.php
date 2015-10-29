
<td class="row form-group {{ $errors->has('type') ? 'has-error' : '' }}">
    {!! Form::select(
        'type',
        [
            'revenue' => trans('operation.type.revenue'),
            'outcome' => trans('operation.type.outcome'),
            'incomingTransfer' => trans('operation.type.incomingTransfer'),
            'outgoingTransfer' => trans('operation.type.outgoingTransfer'),
        ],
        null,
        [
            'class' => 'form-control',
            'id' => 'recurring_operation-add-select-type',
            'placeholder' => trans('operation.fields.type')
        ]
    ) !!}
    @if ($errors->has('type'))
        {!! Html::ul($errors->get('type'), ['class' => 'help-block text-right']) !!}
    @endif
</td>

<td class="row form-group {{ $errors->has('envelope_id') || $errors->has('account_id') ? 'has-error' : '' }}">

    {!! Form::select(
        'envelope_id',
        $account->envelopes()->lists('name', 'id'),
        null,
        [
            'class' => 'form-control',
            'id' => 'recurring_operation-add-select-envelope_id',
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
        null,
        [
            'class' => 'form-control',
            'id' => 'recurring_operation-add-select-to_account_id',
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
        null,
        [
            'class' => 'form-control',
            'id' => 'recurring_operation-add-select-from_account_id',
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
        null,
        [
            'class' => 'form-control',
            'id' => 'recurring_operation-add-input-name',
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
            null,
            [
                'class' => 'form-control text-right',
                'id' => 'recurring_operation-add-input-amount',
                'placeholder' => trans('operation.fields.amount')
            ]
        ) !!}
        <span class="input-group-addon">
            {{ $account->currency }}
        </span>
    </div>
    @if ($errors->has('amount'))
        {!! Html::ul($errors->get('amount'), ['class' => 'help-block text-right']) !!}
    @endif
</td>

<td class="text-right">

    {!! Form::token() !!}

    {!! Html::linkAction(
        "Account\ConfigurationController@postRecurringOperationAdd",
        '<i class="fa fa-fw fa-plus" title="'.trans('app.button.add').'"></i>',
        $account,
        ['class' => 'btn btn-success', 'title' => trans('app.button.add')]
    ) !!}

    <script type="text/javascript">
        OperationModule.initRow($('#row-recurring_operation-new'));
    </script>

</td>
