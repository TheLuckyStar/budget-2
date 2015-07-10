
<div class="clearfix" id="auth-authenticate">

    @include('blocks.breadcrumb', [
        'elements' => ['HomeController@getIndex' => trans('home.guest.title')],
        'active' => trans('user.login.title').' & '.trans('user.register.title')
    ])

    {!! Form::open([
        'action' => 'Auth\AuthController@postLogin',
        'class' => 'form-horizontal col-md-5 col-md-offset-1 col-sm-6'
    ]) !!}
        <div class="panel panel-primary">

            <div class="panel-heading">
                <h3 class="panel-title text-right">
                    <i class="fa fa-fw fa-sign-in pull-left"></i>
                    {!! trans('user.login.title') !!}
                </h3>
            </div>

            <div class="panel-body">
                <div class="col-sm-12">
                    {!! Form::email(
                        'email',
                        Request::input('email'),
                        ['class' => 'form-control', 'id' => 'input-email', 'placeholder' => trans('user.fields.email')]
                    ) !!}
                </div>
                <div class="col-sm-12">
                    {!! Form::password(
                        'password',
                        ['class' => 'form-control', 'id' => 'input-password', 'placeholder' => trans('user.fields.password')]
                    ) !!}
                </div>
                <div class="col-sm-12 control-checkbox">
                    {!! Form::checkbox(
                        'remember',
                        1,
                        Request::input('checkbox-remember') === '1',
                        ['id' => 'checkbox-remember']
                    ) !!}
                    {{ trans('user.fields.remember') }}
                </div>
            </div>

            <div class="panel-footer text-right">
                {!! Html::linkAction(
                    'Auth\PasswordController@getEmail',
                    trans('user.lostpassword.title'),
                    [],
                    ['class' => 'btn btn-warning btn-xs link-to-page pull-left']
                ) !!}
                {!! Form::button(trans('user.login.submit'), ['class' => 'btn btn-xs btn-success']) !!}
            </div>

        </div>
    {!! Form::close() !!}

    {!! Form::open([
        'action' => 'Auth\AuthController@postRegister',
        'class' => 'col-md-5 col-sm-6'
    ]) !!}
        <div class="panel panel-primary">

            <div class="panel-heading">
                <h3 class="panel-title text-right">
                    <i class="fa fa-fw fa-user-plus pull-left"></i>
                    {!! trans('user.register.title') !!}
                </h3>
            </div>

            <div class="panel-body">
                <div class="col-sm-12">
                    {!! Form::email(
                        'email',
                        Request::input('email'),
                        ['class' => 'form-control', 'id' => 'input-email', 'placeholder' => trans('user.fields.email')]
                    ) !!}
                </div>
                <div class="col-sm-12">
                    {!! Form::password(
                        'password',
                        ['class' => 'form-control', 'id' => 'input-password', 'placeholder' => trans('user.fields.password')]
                    ) !!}
                </div>
                <div class="col-sm-12">
                    {!! Form::password(
                        'password_confirmation',
                        ['class' => 'form-control', 'id' => 'input-password-confirmation', 'placeholder' => trans('user.fields.password_confirmation')]
                    ) !!}
                </div>
            </div>

            <div class="panel-footer text-right">
                {!! Form::button(
                    trans('user.register.submit'),
                    ['class' => 'btn btn-xs btn-success']
                ) !!}
            </div>

        </div>
    {!! Form::close() !!}

</div>
