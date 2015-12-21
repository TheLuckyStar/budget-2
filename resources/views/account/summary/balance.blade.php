
<div class="panel panel-{{ $account->status }}">
    <div class="panel-heading text-right">
        <i class="fa fa-fw fa-pie-chart pull-left"></i>
        @lang('account.summary.balance.title', ['balance' => Html::formatPrice($account->balance, $account->currency, true)])
    </div>
    <div class="panel-body">
        @if ($chart->hasData())
            <div id="account-summary-balance-chart"></div>
        @else
            <div class='alert alert-info'>
                @lang('account.summary.balance.emptyMessage', [
                    'link' => Html::link(
                        '#operations',
                        '<i class="fa fa-fw fa-plus" title="'.trans('operation.add.title').'"></i> '.trans('operation.add.title'),
                        ['class' => 'link-to-tab']
                    )
                ])
            </div>
        @endif
    </div>
</div>

<script type="text/javascript">

    $('#account-summary-balance-chart').each(function () {
        $(this).get(0).chart = Morris.Donut({
            element: $(this).attr('id'),
            data: {!! json_encode($chart->getData()) !!},
            colors: {!! json_encode($chart->getColors()) !!},
            formatter: function (val, data) { return FormatModule.price(data.negative ? -val : val, '{!! $account->currency !!}', true); },
            resize: true
        });
    });

</script>
