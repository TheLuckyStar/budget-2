
<div id="auth-authenticate" class="row" data-vertical-url="{{ action('Auth\AuthController@getLogin') }}">

    @include('blocks.breadcrumb', [
        'elements' => [
            'HomeController@getIndex' => trans('home.authenticated.title'),
        ],
        'active' => trans('user.login.title').' & '.trans('user.register.title')
    ])

    <div class="col-md-10 col-md-offset-1">
        <div class='row'>

            @include('blocks.alerts')

            {!! Form::open([
                'action' => 'Auth\AuthController@postLogin',
                'class' => 'routable col-sm-6',
                'data-target' => '#page-wrapper'
            ]) !!}
                <div class="panel panel-primary">

                    <div class="panel-heading">
                        <h3 class="panel-title text-right">
                            <i class="fa fa-fw fa-sign-in pull-left"></i>
                            @lang('user.login.title')
                        </h3>
                    </div>

                    <div class="panel-body row">

                        <div class="col-sm-12">
                            <div class='messagebox'></div>
                        </div>

                        <div class="col-sm-12 form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                            {!! Form::email(
                                'email',
                                null,
                                ['class' => 'form-control', 'id' => 'input-email', 'placeholder' => trans('user.fields.email')]
                            ) !!}
                            @if ($errors->has('email'))
                                {!! Html::ul($errors->get('email'), ['class' => 'help-block text-right']) !!}
                            @endif
                        </div>

                        <div class="col-sm-12 form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                            {!! Form::password(
                                'password',
                                [
                                    'class' => 'form-control',
                                    'id' => 'input-password',
                                    'placeholder' => trans('user.fields.password'),
                                ]
                            ) !!}
                            @if ($errors->has('password'))
                                {!! Html::ul($errors->get('password'), ['class' => 'help-block text-right']) !!}
                            @endif
                        </div>

                        <div class="col-sm-12 control-checkbox text-right {{ $errors->has('remember') ? 'has-error' : '' }}">
                            <label>
                                @lang('user.fields.remember')
                                {!! Form::checkbox(
                                    'remember',
                                    1,
                                    null,
                                    ['id' => 'checkbox-remember']
                                ) !!}
                            </label>
                            @if ($errors->has('remember'))
                                {!! Html::ul($errors->get('remember'), ['class' => 'help-block text-right']) !!}
                            @endif
                        </div>

                    </div>

                    <div class="panel-footer text-right">
                        {!! Html::linkAction(
                            'Auth\PasswordController@getEmail',
                            trans('user.lostpassword.title'),
                            [],
                            ['class' => 'routablebtn btn-warning btn-xs pull-left', 'data-target' => '#page-wrapper']
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
                'class' => 'routable col-md-6',
                'data-target' => '#page-wrapper'
            ]) !!}
                <div class="panel panel-primary">

                    <div class="panel-heading">
                        <h3 class="panel-title text-right">
                            <i class="fa fa-fw fa-user-plus pull-left"></i>
                            @lang('user.register.title')
                        </h3>
                    </div>

                    <div class="panel-body row">

                        <div class="col-sm-12 form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            {!! Form::text(
                                'name',
                                null,
                                ['class' => 'form-control', 'id' => 'input-name', 'placeholder' => trans('user.fields.name')]
                            ) !!}
                            @if ($errors->has('name'))
                                {!! Html::ul($errors->get('name'), ['class' => 'help-block text-right']) !!}
                            @endif
                        </div>

                        <div class="col-sm-12 form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                            {!! Form::email(
                                'email',
                                null,
                                ['class' => 'form-control', 'id' => 'input-email', 'placeholder' => trans('user.fields.email')]
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

                        <div class="col-md-12 form-group {{ $errors->has('currency') ? 'has-error' : '' }}">
                            {!! Form::text(
                                'currency',
                                null,
                                ['class' => 'form-control', 'id' => 'input-currency', 'placeholder' => trans('user.fields.currency')]
                            ) !!}
                            @if ($errors->has('currency'))
                                {!! Html::ul($errors->get('currency'), ['class' => 'help-block text-right']) !!}
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

</div>
