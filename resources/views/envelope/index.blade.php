<div id="envelope-index"
    class='row'
    data-horizontal-url="{{ action('AccountController@getSummary', $envelope->account) }}"
    data-vertical-url="{{ action('EnvelopeController@getSummary', $envelope) }}"
    data-account-id="{{ $envelope->account->id }}">

    @include('blocks.alerts')

    <div class='col-md-12'>
        <h1 class="page-header">
            {{ $envelope->account }}
            <small>
                {!! $envelope !!}
            </small>
        </h1>
    </div>

    <div class='col-md-12'>

        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="{{ $activeTab == 'summary' ? 'active' : '' }}">
                {!! Html::linkAction(
                    'EnvelopeController@getSummary',
                    trans('envelope.summary.title'),
                    $envelope,
                    ['class' => 'link-to-page', 'aria-controls' => 'summary', 'role' => 'tab', 'data-toggle' => 'tab']
                ) !!}
            </li>
            <li role="presentation" class="{{ $activeTab == 'operations' ? 'active' : '' }}">
                {!! Html::linkAction(
                    'EnvelopeController@getOperations',
                    trans('envelope.operations.title'),
                    $envelope,
                    ['class' => 'link-to-page', 'aria-controls' => 'operations', 'role' => 'tab', 'data-toggle' => 'tab']
                ) !!}
            </li>
            <li role="presentation" class="{{ $activeTab == 'development' ? 'active' : '' }}">
                {!! Html::linkAction(
                    'EnvelopeController@getDevelopment',
                    trans('envelope.development.title'),
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

</div>
