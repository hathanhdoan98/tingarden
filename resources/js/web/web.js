import {
    sendRequest
} from '../common/ajax'

import {
    showNotification
} from '../common/helper.js'

$(document).delegate('.js-btnAddToCart', 'click', function (e) {
    var payload = {
        product_id: $(this).data('id'),
        quantity: 1
    }
    var successCallback = function (response) {
        $('#view-header').html(response.data.total_quantity);
        showNotification('Đã thêm vào giỏ hàng', 'success')
    };
    var errorCallback = function (response) {
        showNotification('Thất bại', 'danger')
    };

    sendRequest(
        'POST',
        payload,
        apiAddToCart,
        successCallback,
        errorCallback
    )
});
