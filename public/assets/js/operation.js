/* global confirm */
/* global RouterModule */
/* global NavbarModule */

/* exported OperationModule */

// The module pattern
var OperationModule = (function() {

    // Handle datepicker initialization
    var initDatepicker = function (target) {
        target.parent().css('position', 'relative');

        target.datetimepicker({
            locale: $('#page-wrapper').data('locale'),
            format: 'L',
            icons: {
                time: 'fa fa-clock-o',
                date: 'fa fa-calendar',
                up: 'fa fa-chevron-up',
                down: 'fa fa-chevron-down',
                previous: 'fa fa-chevron-left',
                next: 'fa fa-chevron-right',
                today: 'fa fa-crosshairs',
                clear: 'fa fa-trash',
                close: 'fa fa-times',
            },
        });
    };

    // Handle select type initialization
    var initSelectType = function (target) {
        target.change(function () {
            var row = $(this).closest('tr');

            var enabled = row.find('input, select:not([name="type"]), a');
            var disabled = row.find('input, select:not([name="type"]), a');

            if ($(this).val() === '') {
                enabled = $();
            } else if ($(this).val() === 'revenue') {
                enabled = enabled.not('select[name="envelope_id"], select[name="from_account_id"], select[name="to_account_id"]');
                disabled = disabled.filter('select[name="envelope_id"], select[name="from_account_id"], select[name="to_account_id"]');
            } else if ($(this).val() === 'intendedOutcome' || $(this).val() === 'effectiveOutcome') {
                enabled = enabled.not('select[name="from_account_id"], select[name="to_account_id"]');
                disabled = disabled.filter('select[name="from_account_id"], select[name="to_account_id"]');
            } else if ($(this).val() === 'outgoingTransfer') {
                enabled = enabled.not('select[name="envelope_id"], select[name="from_account_id"]');
                disabled = disabled.filter('select[name="envelope_id"], select[name="from_account_id"]');
            } else if ($(this).val() === 'incomingTransfer') {
                enabled = enabled.not('select[name="envelope_id"], select[name="to_account_id"]');
                disabled = disabled.filter('select[name="envelope_id"], select[name="to_account_id"]');
            }

            enabled.removeAttr('disabled').removeClass('disabled');
            disabled.attr('disabled', 'disabled').addClass('disabled');
        }).change();
    };

    // Handle submit links initialization
    var initSubmitLinks = function (target) {
        target.click(function () {
            var url = $(this).attr('href');
            var row = $(this).closest('tr');
            var data = row.find(':input').serializeArray();

            if ($(this).hasClass('btn-danger')) {
                var msg = $(this).attr('title') + ' ?';

                if (confirm(msg) === false) {
                    return false;
                }
            }

            target.fadeTo('fast', 0.5, function() {
                $.post(url, data, function() {
                    submitFormSuccess();
                }).fail(function (jqXHR, textStatus, errorThrown) {
                    RouterModule.submitFormFail(row, jqXHR, errorThrown);
                });
            });

            return false;
        });
    };

    // Handle submit links initialization
    var initEnterKey = function (target) {
        $(target).keyup(function (e) {
            if (e.keyCode != 13) {
                return true;
            }

            var row = $(this).closest('tr');
            var link = row.find('a.btn.btn-success:not(.routable)');

            link.click();
        });
    };

    // Handle form post success
    var submitFormSuccess = function () {
        RouterModule.refresh($('#account-operations-table, #envelope-operations-table'));

        NavbarModule.refresh();

        RouterModule.refresh($('#account-summary-balance, #envelope-summary-balance'));
        RouterModule.refresh($('#account-summary-events, #envelope-summary-events'));

        RouterModule.refresh($('#account-allocation-sliders'));

        RouterModule.refresh($('#account-development-monthly, #envelope-development-monthly'));
        RouterModule.refresh($('#account-development-yearly, #envelope-development-yearly'));
    };

    // Handle row initialization
    var initRow = function (row) {
        initDatepicker(row.find('.datepicker'));
        initSelectType(row.find('select[name="type"]'));
        initSubmitLinks(row.find('a.btn:not(.routable)'));
        initEnterKey(row.find('input'));
    };

    // Called on module loading
    var init = function () {
    };



    // Define public methods
    return {
        init: init,
        initRow: initRow,
    };



})();
