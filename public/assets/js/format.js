 /* exported FormatModule */

// The module pattern
var FormatModule = (function() {

    //  Function from http://phpjs.org/functions/number_format/
    var number = function(number, decimals, dec_point, thousands_sep) {
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
    var price = function (price, forceSymbol) {
        if (forceSymbol === true && price >= 0) {
            return '+'+number(price, 2) + ' \u20AC';
        }

        return number(price, 2) + ' \u20AC';
    };

    // Return formated date to dd/mm/YYYY
    var date = function (d) {
        var date = d.getDate() < 10 ? '0' + d.getDate() : d.getDate();
        var month = d.getMonth() + 1 < 10 ? '0' + (d.getMonth() + 1) : d.getMonth() + 1;
        var year = d.getFullYear();
        return date + "/" + month + "/" + year;
    };

    // Return bootstrap aler
    var alert = function (content, level) {
        return '<div class="alert alert-' + level + '" role="alert">' + content + '</div>';
    };

    // Define public methods
    return {
        price: price,
        date: date,
        alert: alert,
    };

})();
