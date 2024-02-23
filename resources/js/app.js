import './bootstrap';

function updateUrlParam(elementId, paramName, paramsToRemove) {
    // Retrieve the value from the specified element
    var paramValue = $('#' + elementId).val();

    // Get the current URL
    var url = window.location.href;
    var queryStringStartIndex = url.indexOf('?');
    var baseUrl = queryStringStartIndex !== -1 ? url.slice(0, queryStringStartIndex) : url;
    var queryString = queryStringStartIndex !== -1 ? url.slice(queryStringStartIndex + 1) : '';

    // Parse the query string into an object
    var params = {};
    queryString.split('&').forEach(function(param) {
        var keyValue = param.split('=');
        var key = decodeURIComponent(keyValue[0]);
        var value = keyValue.length > 1 ? decodeURIComponent(keyValue[1]) : '';
        if (!params[key]) {
            params[key] = [];
        }
        params[key].push(value);
    });

    // Remove specified parameters from the object
    if (paramsToRemove && paramsToRemove.length > 0) {
        paramsToRemove.forEach(function(param) {
            delete params[param];
        });
    }

    // Set the new parameter value
    params[paramName] = [paramValue];

    // Construct the new query string
    var newQueryString = Object.keys(params)
        .map(function(key) {
            return params[key].map(function(value) {
                return encodeURIComponent(key) + '=' + encodeURIComponent(value);
            }).join('&');
        })
        .join('&');

    // Construct the new URL
    var newUrl = baseUrl + (newQueryString ? '?' + newQueryString : '');

    // Reload the page with the modified URL
    window.location.href = newUrl;
}




$(document).ready(function() {
    $('#countryDropdown').change(function() {
        updateUrlParam('countryDropdown', 'country', ['state']);
    });

    $('#stateDropdown').change(function() {
        updateUrlParam('stateDropdown', 'state');
    });
});
