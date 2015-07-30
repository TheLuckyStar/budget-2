
// The module pattern
var PageModule = (function() {



    // Container for page
    var page = $('#page-wrapper');

    // Base url for fragment writting
    var baseUrl = page.data('url').slice(0, -4);

    // Locale for fragment writting
    var locale = page.data('locale');



    // Remove base url from string
    var getPathFromUrl = function (url) {
        return url.replace(new RegExp('^(' + locale + '/)|(' + baseUrl + ')'), '');
    };

    // Fragment accessor
    var getUrlFromFragment = function () {
        var fragment = window.location.hash.substr(1);

        if (fragment) {
            return baseUrl + fragment;
        }

        return fragment;
    };

    // Fragment mutator
    var setUrlToFragment = function (url) {
        window.location.hash = getPathFromUrl(url);
    };



    // Return URL to find active horizontal menu link
    var getHorizontalUrl = function () {
        return page.children(":first").data('horizontal-url');
    };

    // Return URL to find active vertical menu link
    var getVerticalUrl = function () {
        return page.children(":first").data('vertical-url');
    };

    // Return current account ID to request vertical menu
    var getAccountId = function () {
        return page.children(":first").data('account-id');
    };



    // Refresh page with ajax call from url set in container attribute
    var refresh = function (url) {
        if (url === undefined) {
            var url = getUrlFromFragment(url) ? getUrlFromFragment(url) : page.data('url');
        }

        console.log('Refresh page from ' + url);
        $.get(url).always(function (data) {
            render(data.content, data.from);
        });
    };

    // Render page with string content. Set url in fragment if provided
    var render = function (content, url) {
        if (typeof url === 'string') {
            if (getPathFromUrl(url) != getPathFromUrl(getUrlFromFragment())) {
                $(window).scrollTop(0);
            }

            setUrlToFragment(url);
        }

        console.log('Render page');
        page.html(content);

        NavbarModule.activeLinks();
    };



    // Submit form with POST Ajax call
    var submitForm = function (form) {
        var url = form.attr('action');
        var data = form.serializeArray();

        console.log('Submit form to ' + url);
        $.post(url, data).always(function (data) {
            render(data.content, data.from);
        });
    };



    // Click on some links should reload page asynchronously
    var linkToPage = function (link) {
        var url = $(link).attr('href');
        refresh(url);

        $(link).parents('.dropdown').children('.dropdown-toggle').dropdown("toggle");

        return false;
    };



    //  Function from http://phpjs.org/functions/number_format/
    var number_format = function(number, decimals, dec_point, thousands_sep) {
        number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
        var n = !isFinite(+number) ? 0 : +number,
        prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
        sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
        dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
        s = '',
        toFixedFix = function(n, prec) {
            var k = Math.pow(10, prec);
            return '' + (Math.round(n * k) / k)
            .toFixed(prec);
        };
        // Fix for IE parseFloat(0.55).toFixed(0) = 0;
        s = (prec ? toFixedFix(n, prec) : '' + Math.round(n))
        .split('.');
        if (s[0].length > 3) {
          s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
        }
        if ((s[1] || '').length < prec) {
            s[1] = s[1] || '';
            s[1] += new Array(prec - s[1].length + 1).join('0');
        }
        return s.join(dec);
    };

    // Return formated price with currency
    var formatPrice = function (price) {
        return number_format(price, 2)+' €';
    };


    // Called on module loading
    var init = function () {

        // Click on some links should reload page asynchronously
        $(page).on('click', '.link-to-page, .pagination a', function () {
            linkToPage($(this));
            return false;
        });

        // Submitting forms should send data asynchronously
        $(page).on('submit', 'form', function () {
            submitForm($(this));
            return false;
        });

        // First page content loading
        refresh();
    };



    // Define public methods
    return {
        init: init,
        linkToPage: linkToPage,
        getHorizontalUrl: getHorizontalUrl,
        getVerticalUrl: getVerticalUrl,
        getAccountId: getAccountId,
        formatPrice: formatPrice,
    };



})();



// Trigger module initilization
PageModule.init();
