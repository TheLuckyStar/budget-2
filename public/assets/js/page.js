
// The module pattern
var PageModule = (function() {



    // Container for page
    var page = $('#page-wrapper');

    // Base url for fragment writting
    var baseUrl = page.data('url').slice(0, -4);

    // Locale for fragment writting
    var locale = page.data('locale');



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
        url = url.replace(new RegExp('$('+baseUrl+')|('+locale+'/)'), '');
        window.location.hash = url;
    };



    // Refresh page with ajax call to url set in container attribute
    var refreshPage = function (url) {
        if (url === undefined) {
            var url = getUrlFromFragment(url) ? getUrlFromFragment(url) : page.data('url');
        }

        console.log('Refresh page to '+url);
        $.get(url).always(function (data) {
            renderPage(data.content, data.from);
        });
    };

    // Render page with string content. Set url in fragment if provided
    var renderPage = function (content, url) {
        if (typeof url === 'string') {
            setUrlToFragment(url);
        }

        console.log('Render page');
        page.html(content);
    };



    // Submit form with POST Ajax call
    var submitForm = function (form) {
        var url = form.attr('action');
        var data = form.serializeArray();

        console.log('Submit form to '+url);
        $.post(url, data).always(function (data) {
            renderPage(data.content, data.from);
        });
    };



    // Called on module loading
    var init = function () {

        // Click on some links should reload page asynchronously
        $(page).on('click', '.link-to-page', function () {
            var url = $(this).attr('href');
            refreshPage(url);
            return false;
        });

        // Submitting forms should send data asynchronously
        $(page).on('submit', 'form', function () {
            submitForm($(this));
            return false;
        });

        // First page content loading
        refreshPage();
    };



    // Define public methods
    return {
        init: init,
        refreshPage: refreshPage
    };



})();



// Trigger module initilization
PageModule.init();
