<div id="user-profile"
    class='row'
    data-horizontal-url="{{ action('UserController@getIndex') }}">

    @include('blocks.alerts')

    <div class='col-md-12'>
        <h1 class="page-header">
            <i class="fa fa-fw fa-user"></i>
            @lang('user.profile.title')
        </h1>
    </div>

    <div class="col-md-6 col-md-offset-3">
        <div class='row'>

            {!! Form::open([
                'action' => ['UserController@postProfile'],
                'class' => 'routable col-md-12',
                'data-target' => '#page-wrapper'
            ]) !!}
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <h3 class="panel-title text-right">
                            <i class="fa fa-fw fa-user pull-left"></i>
                            @lang('user.profile.title')
                        </h3>
                    </div>

                    <div class="panel-body">

                        <div class="col-md-12 form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            {!! Form::text(
                                'name',
                                $user->name,
                                ['class' => 'form-control', 'id' => 'input-name', 'placeholder' => trans('user.fields.name')]
                            ) !!}
                            @if ($errors->has('name'))
                                {!! Html::ul($errors->get('name'), ['class' => 'help-block text-right']) !!}
                            @endif
                        </div>

                        <div class="col-md-12 form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                            {!! Form::text(
                                'email',
                                $user->email,
                                ['class' => 'form-control', 'id' => 'input-email', 'placeholder' => trans('user.fields.email')]
                            ) !!}
                            @if ($errors->has('email'))
                                {!! Html::ul($errors->get('email'), ['class' => 'help-block text-right']) !!}
                            @endif
                        </div>

                        <div class="col-md-12 form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                            {!! Form::password(
                                'password',
                                ['class' => 'form-control', 'id' => 'input-password', 'placeholder' => trans('user.fields.password').' ('.trans('user.fields.passwordHelper').')']
                            ) !!}
                            @if ($errors->has('password'))
                                {!! Html::ul($errors->get('password'), ['class' => 'help-block text-right']) !!}
                            @endif
                        </div>

                        <div class="col-md-12 form-group {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                            {!! Form::password(
                                'password_confirmation',
                                ['class' => 'form-control', 'id' => 'input-password_confirmation', 'placeholder' => trans('user.fields.password_confirmation')]
                            ) !!}
                            @if ($errors->has('password_confirmation'))
                                {!! Html::ul($errors->get('password_confirmation'), ['class' => 'help-block text-right']) !!}
                            @endif
                        </div>

                        <div class="col-md-12 form-group {{ $errors->has('currency') ? 'has-error' : '' }}">
                            {!! Form::text(
                                'currency',
                                $user->currency,
                                ['class' => 'form-control', 'id' => 'input-currency', 'placeholder' => trans('user.fields.currency')]
                            ) !!}
                            @if ($errors->has('currency'))
                                {!! Html::ul($errors->get('currency'), ['class' => 'help-block text-right']) !!}
                            @endif
                        </div>

                   </div>

                    <div class="panel-footer text-right">
                        {!! Form::button(
                            trans('app.button.update'),
                            ['type' => 'submit', 'class' => 'btn btn-xs btn-success']
                        ) !!}
                    </div>

                </div>
            {!! Form::close() !!}

        </div>
    </div>

</div>
