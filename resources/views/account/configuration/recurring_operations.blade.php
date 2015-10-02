<div class="panel panel-default">

    <div class="panel-heading text-right">
        <i class="fa fa-fw fa-repeat pull-left"></i>
        @lang('account.configuration.recurring_operations.title')
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>@lang('operation.fields.type')</th>
                <th>@lang('operation.fields.envelope_id') / @lang('operation.fields.account_id')</th>
                <th>@lang('operation.fields.name')</th>
                <th class="text-right">@lang('operation.fields.amount')</th>
                <th></th>
            </tr>
        </thead>
        @foreach($account->recurringOperations as $recurringOperation)
            <tr id='row-recurring_operation-{{ $recurringOperation->id }}'
                action='{{ action("Account\ConfigurationController@getRecurringOperationUpdate", [$account, $recurringOperation]) }}'
                data-refresh='#account-configuration-recurring_operations, #account-operations-table'>
                @include('account.configuration.recurring_operations.row')
            </tr>
        @endforeach
        <tfoot>
            <tr id='row-recurring_operation-new'
                data-refresh='#account-configuration-recurring_operations, #account-operations-table'>
                @include('account.configuration.recurring_operations.add')
            </tr>
        </tfoot>
    </table>

</div>
