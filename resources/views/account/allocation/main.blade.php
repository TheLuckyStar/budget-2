@if ($account->envelopes->count() === 0)
    <div class='alert alert-info'>
        @lang('account.allocation.main.emptyMessage', [
            'link' => Html::linkAction(
                'EnvelopeController@getAdd',
                '<i class="fa fa-fw fa-plus" title="'.trans('envelope.add.title').'"></i> '.trans('envelope.add.title'),
                $account,
                ['class' => 'routable', 'data-target' => '#page-wrapper']
            )
        ])
    </div>
@else
    {!! Form::open([
        'action' => ['Account\AllocationController@postMain', $account, $startOfMonth->toDateString()],
        'class' => 'panel panel-default',
        'id' => 'account-allocation-form',
        'data-target' => '#account-allocation-main',
    ]) !!}

        <div class="panel-heading text-center">
            {!! Html::linkAction(
                'Account\AllocationController@getMain',
                '<i class="fa fa-fw fa-arrow-left"></i> '.$prevMonth->formatLocalized('%B %Y'),
                [$account, $prevMonth->toDateString()],
                [
                    'class' => 'routable btn btn-xs btn-default pull-left',
                    'data-target' => '#account-allocation-main',
                ]
            ) !!}
            {{ $startOfMonth->formatLocalized('%B %Y') }}
            @if ($nextMonth->lte(Carbon\Carbon::now()))
                {!! Html::linkAction(
                    'Account\AllocationController@getMain',
                    $nextMonth->formatLocalized('%B %Y').' <i class="fa fa-fw fa-arrow-right"></i>',
                    [$account, $nextMonth->toDateString()],
                    [
                        'class' => 'routable btn btn-xs btn-default pull-right',
                        'data-target' => '#account-allocation-main',
                    ]
                ) !!}
            @endif
        </div>

        <div class='col-md-12 well'>
            <div class='col-md-4 text-center'>
                @lang('account.allocation.main.revenueIncome') :
                <span id="monthly-revenue-income"></span>
            </div>
            <div class='col-md-4 text-center'>
                @lang('account.allocation.main.allocatedIncome') :
                <span id="monthly-allocated-income"></span>
            </div>
            <div class='col-md-4 text-center'>
                @lang('account.allocation.main.totalIncome') :
                <span id="monthly-total-income"></span>
            </div>
        </div>

        <div class="panel-body">
            @foreach ($account->envelopes as $envelope)
                <div class='col-md-6'>
                    <div class="panel panel-default">

                        <div class="panel-heading">
                            {!! $envelope !!}
                            <span class='pull-right'>
                                <b>
                                    @lang('account.allocation.main.totalIncome') :
                                </b>
                                <span id='total-income-{{$envelope->id}}'></span>
                            </span>
                        </div>

                        <ul class="list-group">

                            @if ($revenues->where('envelope_id', $envelope->id)->count())
                                <li class="list-group-item">
                                    <div class='row'>
                                        <div class="col-xs-8 col-lg-5">
                                            {!! Form::label(
                                                'revenue-income-'.$envelope->id,
                                                trans('account.allocation.main.revenueIncome')
                                            ) !!}
                                        </div>
                                        <div class="col-xs-4 col-lg-2 text-right">
                                            <button type="button"
                                                class="btn btn-default btn-sm"
                                                data-toggle="tooltip"
                                                data-title="{{ implode(
                                                    '<br>',
                                                    $revenues->where('envelope_id', $envelope->id)->toNameAndAmountList()
                                                ) }}"
                                            >
                                                <span class="fa fa-fw fa-info"></span>
                                            </button>
                                        </div>
                                        <div class="col-md-12 col-lg-5">
                                            <div class='input-group'>
                                                {!! Form::text(
                                                    'revenue-income-'.$envelope->id,
                                                    Html::formatPrice(
                                                        $revenues->where('envelope_id', $envelope->id)->sum('amount'),
                                                        ''
                                                    ),
                                                    [
                                                        'class' => 'revenue-income form-control text-right',
                                                        'data-envelope_id' => $envelope->id,
                                                        'disabled'
                                                    ]
                                                ) !!}
                                                <span class="input-group-addon">
                                                    {{ $account->currency }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endif

                            <li class="list-group-item clearfix">
                                <div class='row'>
                                    <div class="col-xs-8 col-lg-5">
                                        {!! Form::label(
                                            'allocated-income-'.$envelope->id,
                                            trans('account.allocation.main.allocatedIncome')
                                        ) !!}
                                    </div>
                                    <div class="col-xs-4 col-lg-2 text-right">
                                        <button type="button"
                                            id="default-income-{{ $envelope->id }}"
                                            class="default-income btn btn-default btn-sm"
                                            data-toggle="tooltip"
                                            data-title="@lang('envelope.fields.default_income') : {{ Html::formatPrice($envelope->default_income, $envelope->currency) }}"
                                            data-envelope_id="{{ $envelope->id }}"
                                            data-value="{{ $envelope->default_income }}"
                                        >
                                            <span class="fa fa-fw"></span>
                                        </button>
                                    </div>
                                    <div class="col-md-12 col-lg-5">
                                        <div class='input-group'>
                                            {!! Form::text(
                                                'allocated-income-'.$envelope->id,
                                                isset($incomes[$envelope->id]) ? $incomes[$envelope->id] : 0,
                                                [
                                                    'class' => 'allocated-income form-control text-right',
                                                    'data-envelope_id' => $envelope->id,
                                                ]
                                            ) !!}
                                            <span class="input-group-addon">
                                                {{ $account->currency }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>

                    </div>
                </div>
            @endforeach
        </div>

        <div class="panel-footer text-right">
            {!! Form::submit(@trans('app.button.save'), [
                'class' => 'btn btn-xs btn-success',
                'form' => 'account-allocation-form',
            ]) !!}
        </div>

    </div>

    <script type="text/javascript">
        AllocationModule.initForm($('#account-allocation-form'), '{!! $account->currency !!}');
    </script>

@endif
