
// The module pattern
var AllocationModule = (function() {



    // Collection of sliders
    sliders = {};

    // Donut revenue chart
    revenueChart = null;



    // Handle text input initialization
    var initTextInput = function (target) {
        target.change(function () {
            var slider = $($(this).data('target'));
            slider.slider('value', $(this).val());
            updateRevenueChart();
        });
    };

    // Handle slider initialization
    var initSliders = function (target) {
        target.each(function () {
            sliders[$(this).data('label')] = $(this).slider({
                animate: true,
                value: $(this).data('value'),
                min: 0,
                max: $(this).data('max'),
                step: 1,
                slide: function(event, ui) {
                    var input = $($(this).data('target'));
                    input.val(ui.value);
                    $(this).slider('value', ui.value);
                    updateRevenueChart();
                }
            });
            $(this).children('span').html('<i class="fa fa-fw fa-arrows-h"></i>');
        });
    };

    // Handle revenue chart initialization
    var initRevenueChart = function (target) {
        revenueChart = target.get(0).chart = Morris.Donut({
            element: target.attr('id'),
            data: [{label: 1, value: 1}],
            formatter: function (val, data) { return FormatModule.price(val); },
            resize: true
        });
        updateRevenueChart();
    };

    // Update revenue chart from sliders
    var updateRevenueChart = function () {
        var data = [];

        $.each(sliders, function(label, slider) {
            data.push({
                label: label,
                value: slider.slider('value')
            });
        });

        revenueChart.setData(data);
    };


    // Handle submit form initialization
    var initSubmitForm = function (form) {
        form.submit(function () {
            var url = $(this).attr('action');
            var target = $($(this).data('target'));
            var data = $(this).find(':input').serializeArray();
            console.log(url);

            $.post(url, data, function(data, textStatus, jqXHR) {
                target.html(data);
                submitFormSuccess();
            }).fail(function (jqXHR, textStatus, errorThrown) {
                RouterModule.submitFormFail($(this), jqXHR, errorThrown);
            });

            return false;
        });
    };

    // Handle form post success
    var submitFormSuccess = function (row) {
        RouterModule.refresh($('#account-operations-table, #envelope-operations-table'));

        NavbarModule.refresh();

        RouterModule.refresh($('#account-summary-balance, #envelope-summary-balance'));
        RouterModule.refresh($('#account-summary-events, #envelope-summary-events'));

        RouterModule.refresh($('#account-development-monthly, #envelope-development-monthly'));
        RouterModule.refresh($('#account-development-yearly, #envelope-development-yearly'));
    };

    // Handle form initialization
    var initForm = function (form) {
        initTextInput(form.find('input[type="text"]'));
        initSliders(form.find('.slider'));
        initRevenueChart($('#account-allocation-revenue-chart'));
        initSubmitForm(form);
    };

    // Called on module loading
    var init = function () {
    };



    // Define public methods
    return {
        init: init,
        initForm: initForm,
    };



})();
