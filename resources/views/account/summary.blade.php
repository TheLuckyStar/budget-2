@extends('account.index')

@section('tabcontent')

    <div class='col-md-8'>
        <div class="panel panel-default">
            <div class="panel-heading text-right">
                <i class="fa fa-fw fa-pie-chart pull-left"></i>
                @lang('account.snapshot.title')
            </div>
            <div class="panel-body">
                <div class='row'>
                    <div class='col-md-6'>
                        <h3 class='text-center'>
                            @lang('account.snapshot.balanceTitle', ['balance' => Html::formatPrice($account->balance)])
                        </h3>
                        <div id="balance-chart"></div>
                    </div>
                    <div class='col-md-6'>
                        <h3 class='text-center'>
                            @lang('account.snapshot.envelopesTitle')
                        </h3>
                        <div id="envelopes-chart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class='col-md-4'>
        <div class="panel panel-default">
            <div class="panel-heading text-right">
                <i class="fa fa-fw fa-users pull-left"></i>
                @lang('account.users.title')
            </div>
            <ul class="list-group">
                <li class="list-group-item">
                    {!! $account->owner()->first()->link() !!}
                    <i class="fa fa-fw fa-star pull-right" title="@lang('account.users.owner')"></i>
                </li>
                @foreach($account->guests as $user)
                    <li class="list-group-item">
                        {!! Form::open(['action' => ['AccountController@postDetachUser', $account->id]]) !!}
                            {!! Form::hidden('user_id', $user->id) !!}
                            {!! $user->link() !!}
                            {!! Form::button(
                                '<i class="fa fa-fw fa-trash"></i>',
                                ['type' => 'submit', 'class' => 'btn btn-danger btn-xs pull-right']
                            ) !!}
                        {!! Form::close() !!}
                    </li>
                @endforeach
            </ul>
            {!! Form::open([
                'action' => ['AccountController@postAttachUser', $account->id],
                'class' => 'panel-footer'.($errors->has('email') ? ' has-error' : '')
            ]) !!}
                <div class="input-group">
                    {!! Form::email(
                        'email',
                        null,
                        ['class' => 'form-control', 'id' => 'input-email', 'placeholder' => trans('user.fields.email')]
                    ) !!}
                    <span class="input-group-btn">
                        {!! Form::button(
                            '<i class="fa fa-fw fa-plus"></i>',
                            ['type' => 'submit', 'class' => 'btn btn-success pull-right']
                        ) !!}
                    </span>
                </div>
                @if ($errors->has('email'))
                    {!! Html::ul($errors->get('email'), ['class' => 'help-block text-right']) !!}
                @endif
            {!! Form::close() !!}
        </div>
    </div>

    <div class='col-md-4'>
        <div class="panel panel-default">
            <div class="panel-heading text-right">
                <i class="fa fa-fw fa-history pull-left"></i>
                @lang('event.title')
            </div>
            <ul class="list-group">
                @foreach($events as $event)
                    <li class="list-group-item small">
                        {!! $event !!}
                    </li>
                @endforeach
            </ul>
            @if ($events->hasPages())
                <div class="panel-footer text-right">
                    {!! $events->render() !!}
                </div>
            @endif
        </div>
    </div>

    <script type="text/javascript">

        Morris.Donut({
            element: 'balance-chart',
            data: {!! $balanceData !!},
            colors: {!! $balanceColors !!},
            formatter: function (val, data) { return PageModule.formatPrice(val); },
            resize: true
        });

        Morris.Donut({
            element: 'envelopes-chart',
            data: {!! $envelopesData !!},
            colors: {!! $envelopesColors !!},
            formatter: function (val, data) { return PageModule.formatPrice(data.negative ? -val : val); },
            resize: true
        });

    </script>

@endsection
