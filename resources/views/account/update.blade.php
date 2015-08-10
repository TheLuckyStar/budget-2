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

                        <div class="col-sm-12 form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            {!! Form::text(
                                'name',
                                $account->name,
                                ['class' => 'form-control', 'id' => 'input-name', 'placeholder' => trans('account.fields.name')]
                            ) !!}
                            @if ($errors->has('name'))
                                {!! Html::ul($errors->get('name'), ['class' => 'help-block text-right']) !!}
                            @endif
                        </div>

                    </div>

                    <div class="panel-footer text-right">
                        {!! Html::linkAction(
                            'AccountController@getIndex',
                            trans('app.button.back'),
                            $account,
                            [
                                'class' => 'routable btn btn-xs btn-warning pull-left',
                                'data-target' => '#page-wrapper',
                            ]
                        ) !!}
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
            NavbarModule.emptyHorizontalMenu();
        });

    </script>

</div>
