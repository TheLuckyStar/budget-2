<div id="home-authenticated" class='row' data-horizontal-url="{{ action('HomeController@getIndex') }}">

    @include('blocks.alerts')

    @foreach ($accounts as $account)
        <div class="col-md-4">
            <div class="panel panel-primary">

                <div class="panel-heading">
                    <h4>
                        {!! $account->link() !!}
                    </h4>
                </div>

                <ul class="list-group">

                    <li class="list-group-item list-group-item-{{ $account->status }}">
                        @lang('account.summary.balance.title', [
                            'balance' => Html::formatPrice($account->balance, $account->currency, true)
                        ])
                    </li>

                    <li class="list-group-item list-group-item-{{ $account->envelopes_status }}">
                        @lang('account.summary.envelopes.title', [
                            'balance' => $account->envelopes->isEmpty() ? trans('home.authenticated.noEnvelope') : Html::formatPrice($account->envelopes_balance, $account->currency, true)
                        ])
                    </li>

                </ul>

            </div>
        </div>
    @endforeach

</div>
