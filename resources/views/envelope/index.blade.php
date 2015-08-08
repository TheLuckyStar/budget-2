<div id="envelope-index"
    class='row'
    data-horizontal-url="{{ action('AccountController@getSummary', $envelope->account) }}"
    data-vertical-url="{{ action('EnvelopeController@getSummary', $envelope) }}"
    data-account-id="{{ $envelope->account->id }}">

    @include('blocks.alerts')

    <div class='col-md-12'>
        <h1 class="page-header">
            {!! $envelope !!}
            <small>
                {{ $envelope->account }}
            </small>
            <div class='pull-right'>
                {!! Html::linkAction(
                    'EnvelopeController@getUpdate',
                    '<i class="fa fa-fw fa-pencil" title="'.trans('app.button.update').'"></i> '.trans('app.button.update'),
                    $envelope,
                    ['class' => 'link-to-page btn btn-primary']
                ) !!}
                @if ($envelope->trashed())
                    {!! Html::linkAction(
                        'EnvelopeController@getRestore',
                        '<i class="fa fa-fw fa-recycle" title="'.trans('app.button.restore').'"></i> '.trans('app.button.restore'),
                        $envelope,
                        ['class' => 'link-to-page btn btn-success']
                    ) !!}
                @else
                {!! Html::linkAction(
                        'EnvelopeController@getDelete',
                        '<i class="fa fa-fw fa-archive" title="'.trans('app.button.archive').'"></i> '.trans('app.button.archive'),
                        $envelope,
                        ['class' => 'link-to-page btn btn-danger']
                    ) !!}
                @endif
            </div>
        </h1>
    </div>

    <div class='col-md-12'>

        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="{{ $activeTab == 'summary' ? 'active' : '' }}">
                {!! Html::linkAction(
                    'EnvelopeController@getSummary',
                    '<i class="fa fa-fw fa-th-large"></i> '
                        .trans('envelope.summary.title'),
                    $envelope,
                    ['class' => 'link-to-page', 'aria-controls' => 'summary', 'role' => 'tab', 'data-toggle' => 'tab']
                ) !!}
            </li>
            <li role="presentation" class="{{ $activeTab == 'operations' ? 'active' : '' }}">
                {!! Html::linkAction(
                    'EnvelopeController@getOperations',
                    '<i class="fa fa-fw fa-exchange"></i> '
                        .trans('operation.title'),
                    $envelope,
                    ['class' => 'link-to-page', 'aria-controls' => 'operations', 'role' => 'tab', 'data-toggle' => 'tab']
                ) !!}
            </li>
            <li role="presentation" class="{{ $activeTab == 'development' ? 'active' : '' }}">
                {!! Html::linkAction(
                    'EnvelopeController@getDevelopment',
                    '<i class="fa fa-fw fa-area-chart"></i> '
                        .trans('envelope.development.title'),
                    $envelope,
                    ['class' => 'link-to-page', 'aria-controls' => 'development', 'role' => 'tab', 'data-toggle' => 'tab']
                ) !!}
            </li>
        </ul>

        <div class="tab-content">
            <div role="tabpanel" class="tab-pane row active" id="{{ $activeTab }}">
                @yield('tabcontent')
            </div>
        </div>

    </div>

    <script type="text/javascript">
        $('.page-header .btn-danger, .page-header .btn-success').click(function () {
            NavbarModule.emptyVerticalMenu();
        });
    </script>

</div>
