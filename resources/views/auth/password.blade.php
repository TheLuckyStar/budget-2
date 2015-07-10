
<div class="clearfix" id="auth-authenticate">

    @include('blocks.breadcrumb', [
        'elements' => [
            'HomeController@getIndex' => trans('home.guest.title'),
            'Auth\AuthController@getLogin' => trans('user.login.title').' & '.trans('user.register.title')
        ],
        'active' => trans('user.lostpassword.title')
    ])

    <div class="alert alert-info col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
      {!! trans('user.lostpassword.message') !!}
    </div>

    {!! Form::open([
        'action' => 'Auth\AuthController@postLogin',
        'class' => 'form-horizontal col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-8'
    ]) !!}
        <div class="panel panel-primary">

            <div class="panel-heading">
                <h3 class="panel-title text-right">
                    <i class="fa fa-fw fa-key pull-left"></i>
                    {!! trans('user.lostpassword.title') !!}
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
            </div>

            <div class="panel-footer text-right">
                {!! Form::button(trans('user.lostpassword.submit'), ['class' => 'btn btn-xs btn-success']) !!}
            </div>

        </div>
    {!! Form::close() !!}

</div>
