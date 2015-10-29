<div id="account-update"
    class='row'
    data-horizontal-url="{{ action('AccountController@getIndex', $account) }}"
    data-vertical-url="{{ action('AccountController@getIndex', $account) }}"
    data-account-id="{{ $account->id }}">

    @include('blocks.alerts')

    <div class='col-md-12'>
        <h1 class="page-header">
            <i class="fa fa-fw fa-pencil"></i>
            @lang('account.update.title')
            <small>
                {{ $account }}
            </small>
        </h1>
    </div>

    <div class="col-md-10 col-md-offset-1">
        <div class='row'>

            {!! Form::open([
                'action' => ['AccountController@postUpdate', $account],
                'class' => 'routable col-md-12',
                'data-target' => '#page-wrapper'
            ]) !!}
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <h3 class="panel-title text-right">
                            <i class="fa fa-fw fa-pencil pull-left"></i>
                            @lang('account.update.title')
                        </h3>
                    </div>

                    <div class="panel-body">

                        <div class="col-md-6 form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            {!! Form::text(
                                'name',
                                $account->name,
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
                                    $account->initialBalance->amount,
                                    ['class' => 'form-control text-right', 'id' => 'input-balance', 'placeholder' => trans('account.fields.balance')]
                                ) !!}
                                <span class="input-group-addon">
                                    {{ $account->currency }}
                                </span>
                            </div>
                            <p class="help-block">
                                @lang('account.fields.balanceHelper')
                            </p>
                            @if ($errors->has('balance'))
                                {!! Html::ul($errors->get('balance'), ['class' => 'help-block text-right']) !!}
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

    <script type="text/javascript">

        $('#account-update form').submit(function () {
            NavbarModule.refresh();
        });

    </script>

</div>
