
// The module pattern
var OperationModule = (function() {

    var moment = require('moment');

    // Handle datepicker initialization
    var initDatepicker = function (target) {
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
    var initDateSelectType = function (target) {
        target.change(function () {
            var row = $(this).closest('tr');

            var enabled = row.find('input, select:not([name="type"]), button');
            var disabled = row.find('input, select:not([name="type"]), button');

            if ($(this).val() === '') {
                enabled = $();
            } else if ($(this).val() === 'revenue') {
                enabled = enabled.not('select[name="envelope_id"]');
                disabled = disabled.filter('select[name="envelope_id"]');
            } else {
                disabled = $();
            }

            enabled.removeAttr('disabled');
            disabled.attr('disabled', 'disabled');
        }).change();
    };

    // Handle submit button initialization
    var initSubmitButton = function (target) {
        target.click(function () {
            alert('send');
        });
    };

    // Handle row initialization
    var initRow = function (row) {
        initDatepicker(row.find('.datepicker'));
        initDateSelectType(row.find('select[name="type"]'));
        initSubmitButton(row.find('button'));
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
