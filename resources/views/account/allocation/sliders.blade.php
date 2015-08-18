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
        {!! Html::linkAction(
            'Account\AllocationController@getSliders',
            $nextMonth->formatLocalized('%B %Y').' <i class="fa fa-fw fa-arrow-right"></i>',
            [$account, $nextMonth->toDateString()],
            [
                'class' => 'routable btn btn-xs btn-default pull-right',
                'data-target' => '#account-allocation-sliders',
            ]
        ) !!}
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

                        <div class="col-md-8">
                            <h4 class="great">
                                {!! $envelope !!}
                            </h4>
                            @if (isset($prevIncomes[$envelope->id]))
                                <span class="small">
                                    <i>
                                        @lang('account.allocation.prevIncome', [
                                            'amount' => Html::formatPrice($prevIncomes[$envelope->id]),
                                        ])
                                    </i>
                                </span>
                            @endif
                        </div>

                        <div class="col-md-4">
                            <div class='form-group'>
                                <div class='input-group'>
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
                                        <span class="glyphicon glyphicon-euro"></span>
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
                            <div class='small'>{{ Html::formatPrice(0) }}</div>
                        </div>

                    </div>
                @endforeach
            {!! Form::close() !!}

            <div class="col-md-6">

                <div class="well">
                    @lang('account.allocation.revenueInMonth') :
                    <strong class='pull-right'
                        id='allocation-sliders-revenueInMonth'
                        data-amount='{{ $revenue }}'>
                        {{ Html::formatPrice($revenue) }}
                    </strong>
                </div>

                <div class="well">
                    @lang('account.allocation.allocatedInMonth') :
                    <strong class="pull-right"
                        id='allocation-sliders-allocatedInMonth'></strong>
                </div>

                <div class="well">
                    <div class='row'>
                        <div class='col-md-4'>
                            <div class='col-md-12 col-sm-8'>
                                @lang('account.allocation.unallocatedRevenueAt',
                                    ['date' => $prevMonth->format('d/m/Y')])
                            </div>
                            <div class='col-md-12 col-sm-4 text-right'
                                id='allocation-sliders-unallocatedRevenueBeforeMonth'
                                data-amount="{{ $unallocatedRevenueBeforeMonth }}">
                                <strong>
                                    {{ Html::formatPrice($unallocatedRevenueBeforeMonth) }}
                                </strong>
                            </div>
                        </div>
                        <div class='col-md-4'>
                            <div class='col-md-12 col-sm-8'>
                                @lang('account.allocation.unallocatedRevenueMonth')
                            </div>
                            <div class='col-md-12 col-sm-4 text-right'
                                id='allocation-sliders-unallocatedRevenueMonth'
                                data-amount="{{ $unallocatedRevenueMonth }}"></div>
                        </div>
                        <div class='col-md-4'>
                            <div class='col-md-12 col-sm-8'>
                                @lang('account.allocation.unallocatedRevenueAt',
                                    ['date' => $endOfMonth->format('d/m/Y')])
                            </div>
                            <div class='col-md-12 col-sm-4 text-right'
                                id='allocation-sliders-unallocatedRevenueAfterMonth'></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    @lang('account.allocation.chartTitle', ['date' => $endOfMonth->format('d/m/Y')])
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
    AllocationModule.initForm($('#account-allocation-form'));
</script>