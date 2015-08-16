<td class="text-{{ $operation->context }}">
    @lang(
        'operation.type.'.$operation->type,
        ['date' => $operation->date->diffForHumans()]
    )
</td>

<td class="text-{{ $operation->context }}">
    {{ $operation->date->formatLocalized('%A %e') }}
</td>

<td class="text-{{ $operation->context }}">
    {{ $operation->name }}
</td>

<td class="text-{{ $operation->context }} text-right">
    {{ Html::formatPrice(
        $operation instanceof App\Outcome ? -$operation->amount : $operation->amount,
        true
    ) }}
</td>

<td class="text-{{ $operation->context }} text-right">
    {{-- @todo Link to account/allocation route for revenue --}}
    @if ($operation->type !== 'revenue')
        {!! Html::linkAction(
            "Envelope\OperationsController@getUpdate",
            '<i class="fa fa-fw fa-pencil" title="'.trans('app.button.update').'"></i>',
            [$envelope, $operation->type, $operation],
            [
                'class' => 'routable btn btn-xs btn-primary',
                'title' => trans('app.button.update'),
                'data-target' => '#row-'.$operation->type.'-'.$operation->id,
            ]
        ) !!}
    @endif
</td>

<script type="text/javascript">
    OperationModule.initRow($('#row-{{ $operation->type }}-{{ $operation->id }}'));
</script>
