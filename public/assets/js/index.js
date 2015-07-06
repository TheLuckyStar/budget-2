
// The module pattern
var IndexModule = (function() {

    // Container for page
    var page = $('#page-wrapper');

    // Refresh page with ajax call to url set in container attribute
    var refreshPage = function () {
        var url = page.data('url');

        console.log('Refresh page to '+url);
        page.load(url);
    };

    // Used on module loading
    var init = function () {
        refreshPage();
    };

    // Define public methods
    return {
        init: init,
        refreshPage: refreshPage
    };

})();

// Trigger module initilization
IndexModule.init();