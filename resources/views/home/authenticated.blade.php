<div id="home-authenticated" class='row' data-horizontal-url="{{ action('HomeController@getIndex') }}">

    @include('blocks.alerts')

    @foreach ($accounts as $account)
        <div class="col-md-4">
            <div class="panel panel-{{ $account->envelopes_status }}">

                <div class="panel-heading">
                    {!! $account->link() !!}
                </div>

                <ul class="list-group">

                    <li class="list-group-item">
                        @lang('account.summary.balance.title', [
                            'balance' => Html::formatPrice($account->balance, $account->currency, true)
                        ])
                    </li>

                    <li class="list-group-item">
                        @lang('account.summary.envelopes.title', [
                            'balance' => $account->envelopes->isEmpty() ? trans('home.authenticated.noEnvelope') : Html::formatPrice($account->envelopes_balance, $account->currency, true)
                        ])
                    </li>

                </ul>

            </div>
        </div>
    @endforeach

</div>
