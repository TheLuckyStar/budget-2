
// The module pattern
var RouterModule = (function() {



    // Get data from url and load it to target
    var load = function (url, target, callback) {
        console.log('Load ' + url + ' to target');

        target.load(url, null, function () {
            if (target.attr('id') === 'page-wrapper') {
                NavbarModule.activateLinks();
            }
            if (typeof callback == "function") {
                callback();
            }
        });
        target.data('url', url);
    };

    // Refresh target content from url set as data attribute
    var refresh = function (target, callback) {
        var url = target.data('url');
        load(url, target, callback);
    };



    // Hangle click with GET Ajax call
    var clickLink = function (link, callback) {
        var url = link.attr('href');

        if (link.hasClass('routable')) {
            var target = link.data('target');
        } else {
            var target = link.closest('.routable').data('target');
        }

        load(url, $(target), callback);
    };


    // Submit form with POST Ajax call
    var submitForm = function (form) {
        var url = form.attr('action');
        var target = $(form.data('target'));
        var data = form.find(':input').serializeArray();

        console.log('Submit form to ' + url);
        $.post(url, data, function(data, textStatus, jqXHR) {
            target.html(data);
            target.data('url', url);

            if (target.attr('id') === 'page-wrapper') {
                NavbarModule.activateLinks();
            }
        }).fail(function (jqXHR, textStatus, errorThrown) {
            submitFormFail(form, jqXHR, errorThrown);
        });
    };

    // Handle form post failure
    var submitFormFail = function(form, jqXHR, errorThrown) {
        console.log(jqXHR);
        form.find('.form-group.has-error .help-block').remove();
        form.find('.form-group').removeClass('.has-error');

        if (jqXHR.status === 422) {
            invalidForm(form, jqXHR.responseJSON);
            return;
        }

        var alert = FormatModule.alert(errorThrown, 'danger');
        form.find('.messagebox').html(alert);
    };

    // Add error messages to failed form inputs
    var invalidForm = function (form, errors) {
        $.each(errors, function(field, messages) {
            var formGroup = form.find('[name="' + field + '"]').closest('.form-group');

            var message = '';
            for (var i = 0; i < messages.length; ++i) {
                message += '<li>' + messages[i] + '</li>';
            }

            formGroup.addClass('has-error');
            formGroup.append('<ul class="help-block text-right">' + message + '</ul>');
        });
    };



    // Called on module loading
    var init = function () {

        // Click routable links should reload element asynchronously
        $('body').on('click', '.routable a, a.routable', function () {
            clickLink($(this));
            return false;
        });

        // Submitting routable forms should submit data asynchronously
        $('body').on('submit', 'form.routable', function () {
            submitForm($(this));
            return false;
        });
    };



    // Define public methods
    return {
        init: init,
        refresh: refresh,
        clickLink: clickLink,
        submitForm: submitForm,
        submitFormFail: submitFormFail,
        load: load,
    };



})();
