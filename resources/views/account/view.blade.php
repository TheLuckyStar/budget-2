<div id="account-view"
    class='row'
    data-horizontal-url="{{ action('AccountController@getView', $account) }}"
    data-vertical-url="{{ action('AccountController@getView', $account) }}"
    data-account-id="{{ $account->id }}">

    @include('blocks.alerts')

    <div class='col-md-12'>
        <h1 class="page-header">
            {{ $account }}
            <small>
                @lang('account.view.title')
            </small>
        </h1>
    </div>

</div>
