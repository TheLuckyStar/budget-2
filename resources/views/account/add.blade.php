<div id="account-add"
    class='row'
    data-horizontal-url="{{ action('AccountController@getAdd') }}">

    @include('blocks.alerts')

    <div class='col-md-12'>
        <h1 class="page-header">
            @lang('account.add.title')
        </h1>
    </div>

    <div class="col-md-10 col-md-offset-1">
        <div class='row'>

            {!! Form::open([
                'action' => ['AccountController@postAdd'],
                'class' => 'routable col-md-12',
                'data-target' => '#page-wrapper'
            ]) !!}
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <h3 class="panel-title text-right">
                            <i class="fa fa-fw fa-plus pull-left"></i>
                            @lang('account.add.title')
                        </h3>
                    </div>

                    <div class="panel-body">

                        <div class="col-md-6 form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            {!! Form::text(
                                'name',
                                null,
                                ['class' => 'form-control', 'id' => 'input-name', 'placeholder' => trans('account.fields.name')]
                            ) !!}
                            @if ($errors->has('name'))
                                {!! Html::ul($errors->get('name'), ['class' => 'help-block text-right']) !!}
                            @endif
                        </div>

                        <div class="col-md-6 form-group {{ $errors->has('balance') ? 'has-error' : '' }}">
                            <div class='input-group'>
                                {!! Form::text(
                                    'balance',
                                    null,
                                    ['class' => 'form-control text-right', 'id' => 'input-balance', 'placeholder' => trans('account.fields.balance')]
                                ) !!}
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-euro"></span>
                                </span>
                            </div>
                            <p class="help-block">
                                <p class='text-right'>
                                    @lang('account.fields.balanceHelper')
                                </p>
                            </p>
                            @if ($errors->has('balance'))
                                {!! Html::ul($errors->get('balance'), ['class' => 'help-block text-right']) !!}
                            @endif
                        </div>

                    </div>

                    <div class="panel-footer text-right">
                        {!! Form::button(
                            trans('app.button.add'),
                            ['type' => 'submit', 'class' => 'btn btn-xs btn-success']
                        ) !!}
                    </div>

                </div>
            {!! Form::close() !!}

        </div>
    </div>

</div>
