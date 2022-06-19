import {
    sendRequest
} from '../../common/ajax'

import {
    getResponseMessage
} from '../../common/helper.js'

$(document).delegate('.btnAddToCart', 'click', function (e) {
    var payload = {
        product_id: $(this).data('id'),
        quantity: $('#qty').val()
    }
    var successCallback = function (response) {
        $('#view-header').html(response.data.total_quantity);
        GLOBAL.showToastr('Đã thêm vào giỏ hàng', 'success');
    };
    var errorCallback = function (response) {
        response = response.responseJSON;
        var message = response.message ? response.message : 'Thất bại';
        GLOBAL.showToastr(getResponseMessage(message), 'error');
    };

    sendRequest(
        'POST',
        payload,
        apiAddToCart,
        successCallback,
        errorCallback
    )
});

$(document).delegate('span.down', 'click', function (e) {
    var number_cart = $('input[name="qty"]'),
         currentVal = parseInt(number_cart.val());
    if (currentVal > 1) {
        var number_change = currentVal - 1;
        $(number_cart).val(number_change);
    }
})

$(document).delegate('span.up', 'click', function (e) {
    var number_cart = $('input[name="qty"]'),
    currentVal = parseInt(number_cart.val());
    if (currentVal < 999) {
        var number_change = currentVal + 1;
        $(number_cart).val(number_change);
    }
})

$(document).delegate('.buyCart', 'click', function (e) {
    var payload = {
        product_id: $(this).data('id'),
        quantity: $('#qty').val()
    }
    var successCallback = function (response) {
        $('#view-header').html(response.data.total_quantity);
        GLOBAL.showToastr('Đã thêm vào giỏ hàng', 'success');
        window.location.href = '/cart';
    };
    var errorCallback = function (response) {
        response = response.responseJSON;
        var message = response.message ? response.message : 'Thất bại';
        GLOBAL.showToastr(getResponseMessage(message), 'error');
    };

    sendRequest(
        'POST',
        payload,
        apiAddToCart,
        successCallback,
        errorCallback
    )
});