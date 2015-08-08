@extends('account.index')

@section('tabcontent')

    <div class='col-md-12'>
        <div class="panel panel-default table-responsive">
            <div class="panel-heading text-center">
                {!! Html::linkAction(
                    'Account\OperationController@getIndex',
                    '<i class="fa fa-fw fa-arrow-left"></i> '.$prevMonth->formatLocalized('%B %Y'),
                    [$account, $prevMonth->toDateString()],
                    ['class' => 'link-to-page btn btn-xs btn-default pull-left']
                ) !!}
                {{ $month->formatLocalized('%B %Y') }}
                {!! Html::linkAction(
                    'Account\OperationController@getIndex',
                    $nextMonth->formatLocalized('%B %Y').' <i class="fa fa-fw fa-arrow-right"></i>',
                    [$account, $nextMonth->toDateString()],
                    ['class' => 'link-to-page btn btn-xs btn-default pull-right']
                ) !!}
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>@lang('operation.fields.type')</th>
                        <th>@lang('operation.fields.envelope_id')</th>
                        <th>@lang('operation.fields.date')</th>
                        <th>@lang('operation.fields.name')</th>
                        <th class="text-right">@lang('operation.fields.amount')</th>
                        <th></th>
                    </tr>
                </thead>
                @foreach ($operations as $operation)
                    <tr class="{{ $operation->context }}">
                        <td>
                            @lang(
                                'operation.type.'.$operation->type,
                                ['date' => $operation->date->diffForHumans()]
                            )
                        </td>
                        <td>{!! $operation->envelope !!}</td>
                        <td>{{ $operation->date->formatLocalized('%A %e') }}</td>
                        <td>{{ $operation->name }}</td>
                        <td class="text-right">
                            {{ Html::formatPrice(
                                $operation->amount,
                                $operation->amount_symbol
                            ) }}
                        </td>
                        <td class="text-right">
                            {!! Html::linkAction(
                                'Account\OperationController@getUpdate',
                                '<i class="fa fa-fw fa-pencil" title="'.trans('app.button.update').'"></i>',
                                [$account, get_class($operation), $operation],
                                ['class' => 'link-to-page btn btn-xs btn-primary']
                            ) !!}
                        </td>
                    </tr>
                @endforeach
                <tfoot>
                    <tr>
                        <td colspan='4'>
                            <b>
                                @lang('operation.total')
                            </b>
                        </td>
                        <td class="text-right">
                            <b>
                                {{ Html::formatPrice($operations->balance(), true) }}
                            </b>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        @include('account.operations.add')
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

@endsection
