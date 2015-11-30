/* global FormatModule */
/* global Morris */
/* global NavbarModule */
/* global RouterModule */

 /* exported AllocationModule */

// The module pattern
var AllocationModule = (function() {



    // Current currency
    var currency = null;



    // Handle submit form initialization
    var initSubmitForm = function (form) {
        form.submit(function () {
            var url = $(this).attr('action');
            var target = $($(this).data('target'));
            var data = $(this).find(':input').serializeArray();

            console.log('Submit form to ' + url);
            target.fadeTo('fast', 0.5, function() {
                $.post(url, data, function(data) {
                    target.html(data);
                    submitFormSuccess();
                }).fail(function (jqXHR, textStatus, errorThrown) {
                    RouterModule.submitFormFail($(this), jqXHR, errorThrown);
                }).always(function () {
                    target.fadeTo('fast', 1);
                });
            });

            return false;
        });
    };

    // Handle form post success
    var submitFormSuccess = function () {
        RouterModule.refresh($('#account-operations-table, #envelope-operations-table'));

        NavbarModule.refresh();

        RouterModule.refresh($('#account-summary-balance, #envelope-summary-balance'));
        RouterModule.refresh($('#account-summary-envelopes'));
        RouterModule.refresh($('#account-summary-events, #envelope-summary-events'));

        RouterModule.refresh($('#account-development-monthly, #envelope-development-monthly'));
        RouterModule.refresh($('#account-development-yearly, #envelope-development-yearly'));
    };



    // Refresh total income span content
    var refreshDefaultIncome = function (envelope_id) {
        var defaultIncome = $('#default-income-' + envelope_id);
        var allocatedIncome = $('#allocated-income-' + envelope_id);

        if (parseFloat(defaultIncome.data('value')) === parseFloat(allocatedIncome.val())) {
            defaultIncome.children('.fa').removeClass('fa-star-o').addClass('fa-star');
        } else {
            defaultIncome.children('.fa').removeClass('fa-star').addClass('fa-star-o');
        }
    };

    // Refresh total income span content
    var refreshTotalIncome = function (envelope_id) {
        var allocatedIncome = $('#allocated-income-' + envelope_id);
        var revenueIncome = $('#revenue-income-' + envelope_id);
        var totalIncome = $('#total-income-' + envelope_id);

        var income = parseFloat(allocatedIncome.val());

        if (revenueIncome.length) {
            income += parseFloat(revenueIncome.val());
        }

        totalIncome.html(FormatModule.price(income, currency));
    };

    // Refresh monthly income well
    var refreshMonthlyIncome = function (envelope_id) {
        var allocatedIncome = 0;
        $('.allocated-income').each(function () {
            allocatedIncome += parseFloat($(this).val());
        });
        $('#monthly-allocated-income').html(FormatModule.price(allocatedIncome, currency));

        var revenueIncome = 0;
        $('.revenue-income').each(function () {
            revenueIncome += parseFloat($(this).val());
        });
        $('#monthly-revenue-income').html(FormatModule.price(revenueIncome, currency));

        var totalIncome = allocatedIncome + revenueIncome;
        $('#monthly-total-income').html(FormatModule.price(totalIncome, currency));
    };



    // Handle button toolip
    var initIncomeButtons = function (target) {
        target.tooltip({
            container: 'body',
            html: true
        });
    };

    // Set allocated income to default income on button click
    var initDefaultIncome = function (target) {
        target.click(function () {
            var envelope_id = $(this).data('envelope_id');
            var defaultIncome = $(this);
            var allocatedIncome = $('#allocated-income-' + envelope_id);

            var income = parseFloat(defaultIncome.data('value'));

            allocatedIncome.val(income);
            allocatedIncome.change();
        });
    };

    // Refresh default income and total income on allocated income change
    var initAllocatedIncome = function (target) {
        target.change(function () {
            refreshDefaultIncome($(this).data('envelope_id'));
            refreshTotalIncome($(this).data('envelope_id'));
            refreshMonthlyIncome();
        }).change();
    };

    // Handle form initialization
    var initForm = function (form, _currency) {
        currency = _currency;
        initIncomeButtons(form.find('[data-toggle="tooltip"]'));
        initDefaultIncome(form.find('.default-income'));
        initAllocatedIncome(form.find('.allocated-income'));
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
