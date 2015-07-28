@extends('account.index')

@section('tabcontent')

    <div class='col-md-8'>
        <div class="panel panel-default">
            <div class="panel-heading text-right">
                <i class="fa fa-fw fa-pie-chart pull-left"></i>
                @lang('account.snapshot.title')
            </div>
            <div class="panel-footer">
                <div class='row'>
                    <div class='col-md-6'>
                        <h3 class='text-center'>
                            @lang('account.snapshot.balanceTitle')
                        </h3>
                        <div id="balance-chart"></div>
                    </div>
                    <div class='col-md-6'>
                        <h3 class='text-center'>
                            @lang('account.snapshot.envelopesTitle')
                        </h3>
                        <div id="envelopes-chart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class='col-md-4'>
        <div class="panel panel-default">
            <div class="panel-heading text-right">
                <i class="fa fa-fw fa-users pull-left"></i>
                @lang('account.users.title')
            </div>
            <ul class="list-group">
{{--
                @foreach($account->users as $user)
                    <li class="list-group-item">{{ $user }}</li>
                @endforeach
--}}
            </ul>
            <div class="panel-footer">
            </div>
        </div>
    </div>

    <div class='col-md-4'>
        <div class="panel panel-default">
            <div class="panel-heading text-right">
                <i class="fa fa-fw fa-history pull-left"></i>
                @lang('account.events.title')
            </div>
            <ul class="list-group">
{{--
                @foreach($account->users as $user)
                    <li class="list-group-item">{{ $user }}</li>
                @endforeach
--}}
            </ul>
            <div class="panel-footer">
            </div>
        </div>
    </div>

    <script type="text/javascript">

        Morris.Donut({
            element: 'balance-chart',
            data: {!! $balanceData !!},
            colors: {!! $balanceColors !!},
            formatter: function (val, data) { return val + '€' },
            resize: true
        });

        Morris.Donut({
            element: 'envelopes-chart',
            data: {!! $envelopesData !!},
            colors: {!! $envelopesColors !!},
            formatter: function (val, data) { return (data.negative ? -val : val) + '€' },
            resize: true
        });

    </script>

@endsection
