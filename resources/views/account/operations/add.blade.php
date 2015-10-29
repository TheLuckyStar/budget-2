
<td class="row form-group {{ $errors->has('type') ? 'has-error' : '' }}">
    <select class="form-control" id="operation-add-select-type" name="type">
        <option selected="selected" value="">@lang('operation.fields.type')</option>
        <option value="revenue">@lang('operation.type.revenue')</option>
        <option value="outcome">@lang('operation.type.outcome')</option>
        <option value="incomingTransfer">@lang('operation.type.incomingTransfer')</option>
        <option value="outgoingTransfer">@lang('operation.type.outgoingTransfer')</option>
        {!! $account->recurringOperationsSelectOptions('revenue') !!}
        {!! $account->recurringOperationsSelectOptions('outcome') !!}
        {!! $account->recurringOperationsSelectOptions('incomingTransfer') !!}
        {!! $account->recurringOperationsSelectOptions('outgoingTransfer') !!}
    </select>
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
            'id' => 'operation-add-select-envelope_id',
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
            'id' => 'operation-add-select-to_account_id',
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
            'id' => 'operation-add-select-from_account_id',
            'placeholder' => trans('operation.fields.from_account_id')
        ]
    ) !!}

    @if ($errors->has('from_account_id'))
        {!! Html::ul($errors->get('from_account_id'), ['class' => 'help-block text-right']) !!}
    @endif

</td>

<td class="row form-group {{ $errors->has('date') ? 'has-error' : '' }}">
    {!! Form::text(
        'date',
        null,
        [
            'class' => 'form-control datepicker',
            'id' => 'operation-add-input-date',
            'placeholder' => trans('operation.fields.date'),
            'data-date-min-date' => $month->startOfMonth()->toDateString(),
            'data-date-max-date' => $month->endOfMonth()->toDateString(),
        ]
    ) !!}
    @if ($errors->has('date'))
        {!! Html::ul($errors->get('date'), ['class' => 'help-block text-right']) !!}
    @endif
</td>

<td class="row form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    {!! Form::text(
        'name',
        null,
        [
            'class' => 'form-control',
            'id' => 'operation-add-input-name',
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
                'id' => 'operation-add-input-amount',
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
        "Account\OperationsController@postAdd",
        '<i class="fa fa-fw fa-plus" title="'.trans('app.button.add').'"></i>',
        $account,
        ['class' => 'btn btn-success', 'title' => trans('app.button.add')]
    ) !!}

    <script type="text/javascript">
        OperationModule.initRow($('#row-operation-new'));
    </script>

</td>
