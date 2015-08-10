
<div id="auth-password" class="row">

    @include('blocks.breadcrumb', [
        'elements' => [
            'HomeController@getIndex' => trans('home.guest.title'),
            'Auth\AuthController@getLogin' => trans('user.login.title').' & '.trans('user.register.title')
        ],
        'active' => trans('user.lostpassword.title')
    ])

    <div class="col-md-10 col-md-offset-1">
        <div class='row'>

            @include('blocks.alerts')

            <div class="alert alert-info">
              @lang('user.lostpassword.message')
            </div>

            {!! Form::open([
                'action' => 'Auth\PasswordController@postEmail',
                'class' => 'routable col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-8',
                'data-target' => '#page-wrapper'
            ]) !!}
                <div class="panel panel-primary">

                    <div class="panel-heading">
                        <h3 class="panel-title text-right">
                            <i class="fa fa-fw fa-key pull-left"></i>
                            @lang('user.lostpassword.title')
                        </h3>
                    </div>

                    <div class="panel-body">
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
                    </div>

                    <div class="panel-footer text-right">
                        {!! Form::button(
                            trans('user.lostpassword.submit'),
                            ['type' => 'submit', 'class' => 'btn btn-xs btn-success']
                        ) !!}
                    </div>

                </div>
            {!! Form::close() !!}

        </div>
    </div>

</div>
