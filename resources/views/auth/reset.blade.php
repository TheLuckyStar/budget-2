
<div id="auth-reset" class="row">

    @include('blocks.breadcrumb', [
        'elements' => [
            'HomeController@getIndex' => trans('home.guest.title'),
            'Auth\AuthController@getLogin' => trans('user.login.title').' & '.trans('user.register.title')
        ],
        'active' => trans('user.resetpassword.title')
    ])

    <div class="col-md-10 col-md-offset-1">
        <div class='row'>

            @include('blocks.alerts')

            {!! Form::open([
                'action' => ['Auth\PasswordController@postReset', $token],
                'class' => 'form-horizontal col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-8'
            ]) !!}
                <div class="panel panel-primary">

                    <div class="panel-heading">
                        <h3 class="panel-title text-right">
                            <i class="fa fa-fw fa-key pull-left"></i>
                            @lang('user.resetpassword.title')
                        </h3>
                    </div>

                    <div class="panel-body">

                        <div class="col-sm-12 form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                            {!! Form::email(
                                'email',
                                $email,
                                ['class' => 'form-control', 'id' => 'input-email', 'placeholder' => trans('user.fields.email'), 'readonly']
                            ) !!}
                            @if ($errors->has('email'))
                                {!! Html::ul($errors->get('email'), ['class' => 'help-block text-right']) !!}
                            @endif
                        </div>

                        <div class="col-sm-12 form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                            {!! Form::password(
                                'password',
                                ['class' => 'form-control', 'id' => 'input-password', 'placeholder' => trans('user.fields.password')]
                            ) !!}
                            @if ($errors->has('password'))
                                {!! Html::ul($errors->get('password'), ['class' => 'help-block text-right']) !!}
                            @endif
                        </div>

                        <div class="col-sm-12 form-group {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                            {!! Form::password(
                                'password_confirmation',
                                ['class' => 'form-control', 'id' => 'input-password-confirmation', 'placeholder' => trans('user.fields.password_confirmation')]
                            ) !!}
                            @if ($errors->has('password_confirmation'))
                                {!! Html::ul($errors->get('password_confirmation'), ['class' => 'help-block text-right']) !!}
                            @endif
                        </div>

                    </div>

                    <div class="panel-footer text-right">
                        {!! Form::hidden('token', $token) !!}
                        {!! Form::button(
                            trans('app.button.save'),
                            ['type' => 'submit', 'class' => 'btn btn-xs btn-success']
                        ) !!}
                    </div>

                </div>
            {!! Form::close() !!}

        </div>
    </div>

</div>
