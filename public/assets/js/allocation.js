
// The module pattern
var AllocationModule = (function() {



    // Collection of sliders
    sliders = {};

    // Donut revenue chart
    revenueChart = null;

    // Update data elements from sliders
    var updateData = function () {
        updateAggregates();
        updateRevenueChart();
    };

    // Update aggregates from sliders
    var updateAggregates = function () {
        var allocatedInMonth = 0;
        $.each(sliders, function(label, slider) {
            allocatedInMonth += slider.slider('value');
        });

        var revenueInMonth = $('#allocation-sliders-revenueInMonth').data('amount');
        var unallocatedRevenueBeforeMonth = $('#allocation-sliders-unallocatedRevenueBeforeMonth').data('amount');
        var unallocatedRevenueMonth = revenueInMonth - allocatedInMonth;
        var unallocatedRevenueAfterMonth = unallocatedRevenueBeforeMonth + unallocatedRevenueMonth;

        $('#allocation-sliders-allocatedInMonth').text(FormatModule.price(allocatedInMonth));
        $('#allocation-sliders-unallocatedRevenueMonth').data('amount', unallocatedRevenueMonth);
        $('#allocation-sliders-unallocatedRevenueMonth').text(FormatModule.price(unallocatedRevenueMonth));
        $('#allocation-sliders-unallocatedRevenueAfterMonth').text(FormatModule.price(unallocatedRevenueAfterMonth));
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

    // Update max value for sliders
    var updateSliders = function () {
        var unallocatedRevenueMonth = $('#allocation-sliders-unallocatedRevenueMonth').data('amount');

        $.each(sliders, function(label, slider) {
            var value = slider.slider('value');
            var max = value + Math.max(unallocatedRevenueMonth, 100);

            slider.slider('option', 'max', max);

            $(this).next('.pull-right').text(FormatModule.price(Math.round(max)));
        });
    };



    // Handle text input initialization
    var initTextInput = function (target) {
        target.change(function () {
            var slider = $($(this).data('target'));
            var val = $(this).val();

            if (val > slider.slider('option', 'max')) {
                slider.slider('option', 'max', val);
            }

            slider.slider('value', val);

            updateData();
            updateSliders();
        });
    };

    // Handle slider initialization
    var initSliders = function (target) {
        var unallocatedRevenueMonth = $('#allocation-sliders-unallocatedRevenueMonth').data('amount');

        target.each(function () {
            var max = parseFloat($(this).data('value')) + Math.max(unallocatedRevenueMonth, 100);

            sliders[$(this).data('label')] = $(this).slider({
                animate: true,
                value: $(this).data('value'),
                max: max,
                slide: function(event, ui) {
                    var input = $($(this).data('target'));
                    input.val(ui.value);
                    $(this).slider('value', ui.value);
                    updateData();
                },
                stop: function(event, ui) {
                    updateSliders();
                }
            });

            $(this).next('.pull-right').text(FormatModule.price(Math.round(max)));

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
        updateData();
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
