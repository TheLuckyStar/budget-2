
<div id="auth-authenticate" class="row">

    @include('blocks.breadcrumb', [
        'elements' => ['HomeController@getIndex' => trans('home.guest.title')],
        'active' => trans('user.login.title').' & '.trans('user.register.title')
    ])

    <div class="col-md-10 col-md-offset-1">

        @include('blocks.alerts')

        {!! Form::open([
            'action' => 'Auth\AuthController@postLogin',
            'class' => 'form-horizontal col-sm-6'
        ]) !!}
            <div class="panel panel-primary">

                <div class="panel-heading">
                    <h3 class="panel-title text-right">
                        <i class="fa fa-fw fa-sign-in pull-left"></i>
                        {!! trans('user.login.title') !!}
                    </h3>
                </div>

                <div class="panel-body">
                    <div class="col-sm-12 form-group {{ session('from') === 'fr/auth/login' && $errors->has('email') ? 'has-error' : '' }}">
                        {!! Form::email(
                            'email',
                            Request::input('email'),
                            ['class' => 'form-control', 'id' => 'input-email', 'placeholder' => trans('user.fields.email')]
                        ) !!}
                        @if (session('from') === 'fr/auth/login' && $errors->has('email'))
                            {!! Html::ul($errors->get('email'), ['class' => 'help-block text-right']) !!}
                        @endif
                    </div>
                    <div class="col-sm-12 form-group {{ session('from') === 'fr/auth/login' && $errors->has('password') ? 'has-error' : '' }}">
                        {!! Form::password(
                            'password',
                            [
                                'class' => 'form-control',
                                'id' => 'input-password',
                                'placeholder' => trans('user.fields.password'),
                            ]
                        ) !!}
                        @if (session('from') === 'fr/auth/login' && $errors->has('password'))
                            {!! Html::ul($errors->get('password'), ['class' => 'help-block text-right']) !!}
                        @endif
                    </div>
                    <div class="col-sm-12 control-checkbox {{ session('from') === 'fr/auth/login' && $errors->has('remember') ? 'has-error' : '' }}">
                        {!! Form::checkbox(
                            'remember',
                            1,
                            Request::input('remember') === '1',
                            ['id' => 'checkbox-remember']
                        ) !!}
                        {{ trans('user.fields.remember') }}
                        @if (session('from') === 'fr/auth/login' && $errors->has('remember'))
                            {!! Html::ul($errors->get('remember'), ['class' => 'help-block text-right']) !!}
                        @endif
                    </div>
                </div>

                <div class="panel-footer text-right">
                    {!! Html::linkAction(
                        'Auth\PasswordController@getEmail',
                        trans('user.lostpassword.title'),
                        [],
                        ['class' => 'btn btn-warning btn-xs link-to-page pull-left']
                    ) !!}
                    {!! Form::button(
                        trans('user.login.submit'),
                        ['type' => 'submit', 'class' => 'btn btn-xs btn-success']
                    ) !!}
                </div>

            </div>
        {!! Form::close() !!}

        {!! Form::open([
            'action' => 'Auth\AuthController@postRegister',
            'class' => 'col-md-6'
        ]) !!}
            <div class="panel panel-primary">

                <div class="panel-heading">
                    <h3 class="panel-title text-right">
                        <i class="fa fa-fw fa-user-plus pull-left"></i>
                        {!! trans('user.register.title') !!}
                    </h3>
                </div>

                <div class="panel-body">
                    <div class="col-sm-12 form-group {{ session('from') === 'fr/auth/register' && $errors->has('email') ? 'has-error' : '' }}">
                        {!! Form::email(
                            'email',
                            Request::input('email'),
                            ['class' => 'form-control', 'id' => 'input-email', 'placeholder' => trans('user.fields.email')]
                        ) !!}
                        @if (session('from') === 'fr/auth/register' && $errors->has('email'))
                            {!! Html::ul($errors->get('email'), ['class' => 'help-block text-right']) !!}
                        @endif
                    </div>
                    <div class="col-sm-12 form-group {{ session('from') === 'fr/auth/register' && $errors->has('password') ? 'has-error' : '' }}">
                        {!! Form::password(
                            'password',
                            ['class' => 'form-control', 'id' => 'input-password', 'placeholder' => trans('user.fields.password')]
                        ) !!}
                        @if (session('from') === 'fr/auth/register' && $errors->has('password'))
                            {!! Html::ul($errors->get('password'), ['class' => 'help-block text-right']) !!}
                        @endif
                    </div>
                    <div class="col-sm-12 form-group {{ session('from') === 'fr/auth/register' && $errors->has('password_confirmation') ? 'has-error' : '' }}">
                        {!! Form::password(
                            'password_confirmation',
                            ['class' => 'form-control', 'id' => 'input-password-confirmation', 'placeholder' => trans('user.fields.password_confirmation')]
                        ) !!}
                        @if (session('from') === 'fr/auth/register' && $errors->has('password_confirmation'))
                            {!! Html::ul($errors->get('password_confirmation'), ['class' => 'help-block text-right']) !!}
                        @endif
                    </div>
                </div>

                <div class="panel-footer text-right">
                    {!! Form::button(
                        trans('user.register.submit'),
                        ['type' => 'submit', 'class' => 'btn btn-xs btn-success']
                    ) !!}
                </div>

            </div>
        {!! Form::close() !!}

    </div>

</div>
