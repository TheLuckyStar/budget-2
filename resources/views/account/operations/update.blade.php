
<td class="row form-group {{ $errors->has('type') ? 'has-error' : '' }}">
    {!! Form::select(
        'type',
        $operation instanceof App\Revenue ?
            ['revenue' => trans('operation.type.revenue')]
            : (
                $operation instanceof App\Outcome ?
                    ['outcome' => trans('operation.type.outcome')]
                    : [
                        'incomingTransfer' => trans('operation.type.incomingTransfer'),
                        'outgoingTransfer' => trans('operation.type.outgoingTransfer'),
                    ]
            ),
        $operation->getTypeAttribute($account),
        [
            'class' => 'form-control',
            'id' => 'operation-'.$operation->id.'-select-type'
        ]
    ) !!}
    @if ($errors->has('type'))
        {!! Html::ul($errors->get('type'), ['class' => 'help-block text-right']) !!}
    @endif
</td>

<td class="row form-group {{ $errors->has('envelope_id') || $errors->has('to_account_id') || $errors->has('from_account_id') ? 'has-error' : '' }}">

    {!! Form::select(
        'envelope_id',
        $account->envelopes()->lists('name', 'id'),
        $operation->envelope_id,
        [
            'class' => 'form-control',
            'id' => 'operation-'.$operation->id.'-select-envelope_id',
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
        $operation->from_account_id === $account->id ? $operation->to_account_id : $operation->from_account_id,
        [
            'class' => 'form-control',
            'id' => 'operation-'.$operation->id.'-select-to_account_id',
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
        $operation->from_account_id === $account->id ? $operation->to_account_id : $operation->from_account_id,
        [
            'class' => 'form-control',
            'id' => 'operation-'.$operation->id.'-select-from_account_id',
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
        $operation->date->format(trans('app.date.short')),
        [
            'class' => 'form-control datepicker',
            'id' => 'operation-'.$operation->id.'-input-date',
            'placeholder' => trans('operation.fields.date'),
        ]
    ) !!}
    @if ($errors->has('date'))
        {!! Html::ul($errors->get('date'), ['class' => 'help-block text-right']) !!}
    @endif
</td>

<td class="row form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    {!! Form::text(
        'name',
        $operation->name,
        [
            'class' => 'form-control',
            'id' => 'operation-'.$operation->id.'-input-name',
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
            $operation->amount,
            [
                'class' => 'form-control text-right',
                'id' => 'operation-'.$operation->id.'-input-amount',
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
        "Account\OperationsController@postUpdate",
        '<i class="fa fa-fw fa-pencil" title="'.trans('app.button.update').'"></i>',
        [$account, $operation->getTypeAttribute($account), $operation],
        ['class' => 'btn btn-xs btn-success', 'title' => trans('app.button.update')]
    ) !!}

    {!! Html::linkAction(
        "Account\OperationsController@postDelete",
        '<i class="fa fa-fw fa-trash" title="'.trans('app.button.delete').'"></i>',
        [$account, $operation->getTypeAttribute($account), $operation],
        ['class' => 'btn btn-xs btn-danger', 'title' => trans('app.button.delete')]
    ) !!}

    <script type="text/javascript">
        OperationModule.initRow($('#row-{{ $operation->getTypeAttribute($account) }}-{{ $operation->id }}'));
    </script>

</td>

