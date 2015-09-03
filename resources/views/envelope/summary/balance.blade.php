
<div class="panel panel-{{ $envelope->status }}">
    <div class="panel-heading text-right">
        <i class="fa fa-fw fa-pie-chart pull-left"></i>
        @lang('envelope.summary.balance.title', ['balance' => Html::formatPrice($envelope->balance, true)])
    </div>
    <div class="panel-body">
        @if ($withChartData)
            <div id="envelope-summary-balance-chart"></div>
        @else
            <div class='alert alert-info'>
                @lang('envelope.summary.balance.emptyMessage', [
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

    $('#envelope-summary-balance-chart').each(function () {
        $(this).get(0).chart = Morris.Donut({
            element: $(this).attr('id'),
            data: {!! $data !!},
            colors: {!! $colors !!},
            formatter: function (val, data) { return FormatModule.price(val); },
            resize: true
        });
    });

</script>
