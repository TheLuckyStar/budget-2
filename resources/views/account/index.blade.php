<div id="account-index"
    class='row'
    data-horizontal-url="{{ action('AccountController@getSummary', $account) }}"
    data-vertical-url="{{ action('AccountController@getSummary', $account) }}"
    data-account-id="{{ $account->id }}">

    @include('blocks.alerts')

    <div class='col-md-12'>
        <h1 class="page-header">
            {{ $account }}
            <small>
                <i class="fa fa-fw fa-th-large" title="@lang('home.layout.title')"></i>
                @lang('account.index.title')
            </small>
        </h1>
    </div>

    <div class='col-md-12'>

        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="{{ $activeTab == 'summary' ? 'active' : '' }}">
                {!! Html::linkAction(
                    'AccountController@getSummary',
                    trans('account.summary.title'),
                    $account,
                    ['class' => 'link-to-page', 'aria-controls' => 'summary', 'role' => 'tab', 'data-toggle' => 'tab']
                ) !!}
            </li>
            <li role="presentation" class="{{ $activeTab == 'revenues' ? 'active' : '' }}">
                {!! Html::linkAction(
                    'AccountController@getRevenues',
                    trans('revenue.title'),
                    $account,
                    ['class' => 'link-to-page', 'aria-controls' => 'revenues', 'role' => 'tab', 'data-toggle' => 'tab']
                ) !!}
            </li>
            <li role="presentation" class="{{ $activeTab == 'outcomes' ? 'active' : '' }}">
                {!! Html::linkAction(
                    'AccountController@getOutcomes',
                    trans('outcome.title'),
                    $account,
                    ['class' => 'link-to-page', 'aria-controls' => 'outcomes', 'role' => 'tab', 'data-toggle' => 'tab']
                ) !!}
            </li>
            <li role="presentation" class="{{ $activeTab == 'development' ? 'active' : '' }}">
                {!! Html::linkAction(
                    'AccountController@getDevelopment',
                    trans('account.development.title'),
                    $account,
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
