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
                'class' => 'form-horizontal col-md-12'
            ]) !!}
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <h3 class="panel-title text-right">
                            <i class="fa fa-fw fa-plus pull-left"></i>
                            @lang('account.add.title')
                        </h3>
                    </div>

                    <div class="panel-body">

                        <div class="col-sm-12 form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            {!! Form::text(
                                'name',
                                null,
                                ['class' => 'form-control', 'id' => 'input-name', 'placeholder' => trans('account.fields.name')]
                            ) !!}
                            @if ($errors->has('name'))
                                {!! Html::ul($errors->get('name'), ['class' => 'help-block text-right']) !!}
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
