@if ($account->envelopes->count() === 0)
    <div class='alert alert-info'>
        @lang('account.allocation.sliders.emptyMessage', [
            'link' => Html::linkAction(
                'EnvelopeController@getAdd',
                '<i class="fa fa-fw fa-plus" title="'.trans('envelope.add.title').'"></i> '.trans('envelope.add.title'),
                $account,
                ['class' => 'routable', 'data-target' => '#page-wrapper']
            )
        ])
    </div>
@else
    <div class="panel panel-default table-responsive">

        <div class="panel-heading text-center">
            {!! Html::linkAction(
                'Account\AllocationController@getSliders',
                '<i class="fa fa-fw fa-arrow-left"></i> '.$prevMonth->formatLocalized('%B %Y'),
                [$account, $prevMonth->toDateString()],
                [
                    'class' => 'routable btn btn-xs btn-default pull-left',
                    'data-target' => '#account-allocation-sliders',
                ]
            ) !!}
            {{ $startOfMonth->formatLocalized('%B %Y') }}
            @if ($nextMonth->lte(Carbon\Carbon::now()))
                {!! Html::linkAction(
                    'Account\AllocationController@getSliders',
                    $nextMonth->formatLocalized('%B %Y').' <i class="fa fa-fw fa-arrow-right"></i>',
                    [$account, $nextMonth->toDateString()],
                    [
                        'class' => 'routable btn btn-xs btn-default pull-right',
                        'data-target' => '#account-allocation-sliders',
                    ]
                ) !!}
            @endif
        </div>

        <div class="panel-body">
            <div class="row">

                {!! Form::open([
                    'action' => ['Account\AllocationController@postSliders', $account, $startOfMonth->toDateString()],
                    'class' => 'col-md-6',
                    'id' => 'account-allocation-form',
                    'data-target' => '#account-allocation-sliders',
                ]) !!}
                    @foreach ($account->envelopes as $envelope)
                        <div class="price-slider row">

                            <div class="col-md-7">
                                <h4 class="great">
                                    {!! $envelope !!}
                                </h4>
                            </div>

                            <div class="col-md-5">
                                <div class='form-group'>
                                    <div class='input-group'>
                                        <span class="input-group-addon price-slider-prevIncome-button"
                                            title="@lang(
                                                'account.allocation.sliders.prevIncome',
                                                ['amount' => Html::formatPrice(
                                                    isset($prevIncomes[$envelope->id]) ?
                                                        $prevIncomes[$envelope->id] : 0,
                                                    $account->currency
                                                )]
                                            )"
                                            data-value='{{ isset($prevIncomes[$envelope->id]) ?
                                                $prevIncomes[$envelope->id] : 0 }}'
                                            data-target='#input-income-{{ $envelope->id }}'>
                                            <span class="fa fa-fw fa-history"></span>
                                        </span>
                                        {!! Form::text(
                                            'income-'.$envelope->id,
                                            isset($incomes[$envelope->id]) ? $incomes[$envelope->id] : 0,
                                            [
                                                'class' => 'form-control text-right',
                                                'id' => 'input-income-'.$envelope->id,
                                                'data-target' => '#slider-income-'.$envelope->id
                                            ]
                                        ) !!}
                                        <span class="input-group-addon">
                                            {{ $account->currency }}
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="slider small"
                                    id="slider-income-{{ $envelope->id }}"
                                    data-label="{{ $envelope->name }}"
                                    data-value="{{ isset($incomes[$envelope->id]) ? $incomes[$envelope->id] : 0 }}"
                                    data-target="#input-income-{{ $envelope->id }}"
                                    ></div>
                                <div class='small pull-right'></div>
                                <div class='small'>{{ Html::formatPrice(0, $account->currency) }}</div>
                            </div>

                        </div>
                    @endforeach
                {!! Form::close() !!}

                <div class="col-md-6">

                    <div class="well">
                        @lang('account.allocation.sliders.revenueInMonth') :
                        <strong class='pull-right'
                            id='allocation-sliders-revenueInMonth'
                            data-amount='{{ $revenue }}'>
                            {{ Html::formatPrice($revenue, $account->currency) }}
                        </strong>
                    </div>

                    <div class="well">
                        @lang('account.allocation.sliders.allocatedInMonth') :
                        <strong class="pull-right"
                            id='allocation-sliders-allocatedInMonth'></strong>
                    </div>

                    <div class="well">
                        <div class='row'>
                            <div class='col-md-4'>
                                <div class='col-md-12 col-sm-8'>
                                    @lang('account.allocation.sliders.unallocatedRevenueAt',
                                        ['date' => $prevMonth->format(trans('app.date.short'))])
                                </div>
                                <div class='col-md-12 col-sm-4 text-right'
                                    id='allocation-sliders-unallocatedRevenueBeforeMonth'
                                    data-amount="{{ $unallocatedRevenueBeforeMonth }}">
                                    <strong>
                                        {{ Html::formatPrice($unallocatedRevenueBeforeMonth, $account->currency) }}
                                    </strong>
                                </div>
                            </div>
                            <div class='col-md-4'>
                                <div class='col-md-12 col-sm-8'>
                                    @lang('account.allocation.sliders.unallocatedRevenueMonth')
                                </div>
                                <div class='col-md-12 col-sm-4 text-right'>
                                    <strong id='allocation-sliders-unallocatedRevenueMonth'
                                    data-amount="{{ $unallocatedRevenueMonth }}"></strong>
                                </div>
                            </div>
                            <div class='col-md-4'>
                                <div class='col-md-12 col-sm-8'>
                                    @lang('account.allocation.sliders.unallocatedRevenueAt',
                                        ['date' => $endOfMonth->format(trans('app.date.short'))])
                                </div>
                                <div class='col-md-12 col-sm-4 text-right'>
                                    <strong id='allocation-sliders-unallocatedRevenueAfterMonth'></strong>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 well">
                        <div class='text-center'>
                            <strong>
                                @lang('account.allocation.sliders.chartTitle', ['date' => $endOfMonth->formatLocalized('%B %Y')])
                            </strong>
                        </div>
                        <div id="account-allocation-revenue-chart"></div>
                    </div>

                </div>

            </div>
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
