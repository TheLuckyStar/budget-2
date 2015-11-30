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

        <table class="table table-striped">

            <thead>
                <tr>
                    <th>@lang('operation.fields.envelope_id')</th>
                    <th class='text-right'>@lang('account.allocation.main.revenueIncome')</th>
                    <th class='text-right'>@lang('account.allocation.main.allocatedIncome')</th>
                    <th class='text-right'>@lang('account.allocation.main.totalIncome')</th>
                </tr>
            </thead>

            @foreach ($account->envelopes as $envelope)
                <tr>

                    <td>
                        {!! $envelope !!}
                    </td>

                    <td>
                        @if ($revenues->where('envelope_id', $envelope->id)->count())
                            <div class='input-group pull-right'>
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
                                <span class="input-group-addon"
                                    data-toggle="tooltip"
                                    data-title="{{ implode(
                                        '<br>',
                                        $revenues->where('envelope_id', $envelope->id)->toNameAndAmountList()
                                    ) }}"
                                >
                                    <span class="fa fa-fw fa-info"></span>
                                </span>
                            </div>
                        @endif
                    </td>

                    <td>
                        <div class='input-group pull-right'>
                            {!! Form::text(
                                'allocated-income-'.$envelope->id,
                                isset($incomes[$envelope->id]) ? $incomes[$envelope->id] : 0,
                                [
                                    'class' => 'allocated-income form-control text-right',
                                    'id' => 'allocated-income-'.$envelope->id,
                                    'placeholder' => trans('envelope.fields.default_income_short').' : '.Html::formatPrice($envelope->default_income, $envelope->currency),
                                    'data-envelope_id' => $envelope->id,
                                ]
                            ) !!}
                            <span class="input-group-addon">
                                {{ $account->currency }}
                            </span>
                            <span class="default-income input-group-addon"
                                id="default-income-{{ $envelope->id }}"
                                data-toggle="tooltip"
                                data-title="@lang('envelope.fields.default_income') : {{ Html::formatPrice($envelope->default_income, $envelope->currency) }}"
                                data-envelope_id="{{ $envelope->id }}"
                                data-value="{{ $envelope->default_income }}"
                            >
                                <span class="fa fa-fw"></span>
                            </span>
                        </div>
                    </td>

                    <td class='text-right'>
                        <span id='total-income-{{$envelope->id}}'></span>
                    </td>

                </tr>
            @endforeach

            <tfoot>
                <tr class='active'>
                    <td>
                        @lang('account.allocation.main.totalIncome')
                    </td>
                    <td class='text-right' id="monthly-revenue-income"></td>
                    <td class='text-right' id="monthly-allocated-income"></td>
                    <td class='text-right' id="monthly-total-income"></td>
                </tr>
            </tfoot>

        </table>

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
