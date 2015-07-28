<div id="envelope-view"
    class='row'
    data-horizontal-url="{{ action('AccountController@getSummary', $envelope->account) }}"
    data-vertical-url="{{ action('EnvelopeController@getView', $envelope) }}"
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

</div>
