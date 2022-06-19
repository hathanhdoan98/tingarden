import {
    sendRequest
} from '../common/ajax'

import {
    getResponseMessage
} from '../common/helper.js'

function searchProduct(){
    if($('#keywords').val()){
        window.location.href = '/tat-ca?keyword=' + $('#keywords').val();
    }else{
        GLOBAL.showToastr("Nhập từ khóa tìm kiếm", 'error');
    }
}

$(document).delegate('.js-btnAddToCart', 'click', function (e) {
    var payload = {
        product_id: $(this).data('id'),
        quantity: 1
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

$(document).delegate('button.button-search', 'click', function (e) {
    searchProduct();
});

$('#keywords').keypress(function(e) {
    if (e.which == 13) {
       searchProduct();
    }
});
