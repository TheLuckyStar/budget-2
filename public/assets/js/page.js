
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

        NavbarModule.activeLinks(
            page.children(":first").data('horizontal-url'),
            page.children(":first").data('vertical-url')
        );
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
    }

    // Called on module loading
    var init = function () {

        // Click on some links should reload page asynchronously
        $(page).on('click', '.link-to-page', function () {
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
        refresh: refresh,
        submitForm: submitForm,
        linkToPage: linkToPage,
        getCurrentUrl: getUrlFromFragment,
    };



})();



// Trigger module initilization
PageModule.init();
