
<td class="row form-group {{ $errors->has('type') ? 'has-error' : '' }}">
    {!! Form::select(
        'type',
        [
            'intendedOutcome' => trans('operation.type.intendedOutcome', ['date' => '']),
            'effectiveOutcome' => trans('operation.type.effectiveOutcome'),
        ],
        null,
        [
            'class' => 'form-control',
            'id' => 'operation-add-select-type',
            'placeholder' => trans('operation.fields.type')
        ]
    ) !!}
    @if ($errors->has('type'))
        {!! Html::ul($errors->get('type'), ['class' => 'help-block text-right']) !!}
    @endif
</td>

<td class="row form-group {{ $errors->has('envelope_id') ? 'has-error' : '' }}">
    {!! Form::select(
        'envelope_id',
        $envelope->account->envelopes()->lists('name', 'id'),
        $envelope->id,
        [
            'class' => 'form-control',
            'id' => 'operation-add-select-envelope_id',
        ]
    ) !!}
    @if ($errors->has('envelope_id'))
        {!! Html::ul($errors->get('envelope_id'), ['class' => 'help-block text-right']) !!}
    @endif
</td>

<td class="row form-group {{ $errors->has('date') ? 'has-error' : '' }}">
    {{-- @TODO Fix widget position --}}
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
    <div class='input-group pull-right'>
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
        "Envelope\OperationsController@postAdd",
        '<i class="fa fa-fw fa-plus" title="'.trans('app.button.add').'"></i>',
        $envelope,
        ['class' => 'btn btn-success', 'title' => trans('app.button.add')]
    ) !!}
</td>

<script type="text/javascript">
    OperationModule.initRow($('#row-operation-new'));
</script>
