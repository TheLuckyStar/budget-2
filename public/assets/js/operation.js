
// The module pattern
var OperationModule = (function() {

    var moment = require('moment');

    // Handle row initialization
    var initRow = function (row) {
        row.find('.datepicker').datetimepicker({
            locale: PageModule.locale,
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

        row.find('select[name="type"]').change(function () {
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

    // Called on module loading
    var init = function () {
    };



    // Define public methods
    return {
        init: init,
        initRow: initRow,
    };



})();
