<div class="panel panel-default">

    <div class="panel-heading text-right">
        <i class="fa fa-fw fa-users pull-left"></i>
        @lang('account.configuration.users.title')
    </div>

    <ul class="list-group">
        <li class="list-group-item">
            {!! $account->owner()->first()->link() !!}
            <i class="fa fa-fw fa-star pull-right" title="@lang('account.configuration.users.owner')"></i>
        </li>
        @foreach($account->guests as $user)
            <li class="list-group-item">
                {!! Form::open([
                    'action' => ['Account\ConfigurationController@postDetachUser', $account->id],
                    'class' => 'routable',
                    'data-target' => '#account-configuration-users',
                ]) !!}
                    {!! Form::hidden('user_id', $user->id) !!}
                    {!! $user->link() !!}
                    {!! Form::button(
                        '<i class="fa fa-fw fa-trash"></i>',
                        ['type' => 'submit', 'class' => 'btn btn-danger btn-xs pull-right']
                    ) !!}
                {!! Form::close() !!}
            </li>
        @endforeach
        @foreach($account->invitations as $invitation)
            <li class="list-group-item">
                {!! Form::open([
                    'action' => ['Account\ConfigurationController@postDetachInvitation', $account->id],
                    'class' => 'routable',
                    'data-target' => '#account-configuration-users',
                ]) !!}
                    {!! Form::hidden('invitation_id', $invitation->id) !!}
                    {!! $invitation->link() !!}
                    {!! Form::button(
                        '<i class="fa fa-fw fa-trash"></i>',
                        ['type' => 'submit', 'class' => 'btn btn-danger btn-xs pull-right']
                    ) !!}
                {!! Form::close() !!}
            </li>
        @endforeach
    </ul>

    {!! Form::open([
        'action' => ['Account\ConfigurationController@postAttachUser', $account->id],
        'class' => 'routable panel-footer'.($errors->has('email') ? ' has-error' : ''),
        'data-target' => '#account-configuration-users',
    ]) !!}

        <div class='messagebox'></div>

        <div class="form-group">
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
        </div>

        @if ($errors->has('email'))
            {!! Html::ul($errors->get('email'), ['class' => 'help-block text-right']) !!}
        @endif

    {!! Form::close() !!}

</div>
