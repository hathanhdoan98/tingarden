import {
    sendRequest
} from '../../common/ajax.js';

import {
    showNotification,
    getResponseMessage,
    formatMoney,
    showLoading,
    hideLoading
} from '../../common/helper.js';

function loading() {
    showLoading();
    $("#giohang").attr('disabled', true);
    $("#giohang").css('opacity', "0.5");
}

function stopLoading() {
    hideLoading();
    $("#giohang").attr('disabled', false);
    $("#giohang").css('opacity', "1");
}

/**
 * 
 * @param {int} productId 
 * @param {int} quantity 
 * @param {int} subPrice 
 * @returns void
 */
function syncDataStep(productId, quantity, subPrice) {
    $('tr[current-id="' + productId + '"]').each(function () {
        $(this).find("span.quantity").text(quantity);
        $(this).find("span.sub-price").text(formatMoney(subPrice));
    });
}

function updateCart(productId, quantity) {
    var payload = {
        product_id: productId,
        quantity: quantity
    }
    var successCallback = function (response) {
        $('#view-header').html(response.data.total_quantity);
        stopLoading();
    };
    var errorCallback = function (response) {
        response = response.responseJSON;
        var messages = response.message ? response.message : 'Thất bại';
        messages = getResponseMessage(messages);
        showNotification(messages, 'danger');
        stopLoading();
    };
    loading();
    sendRequest(
        'PUT',
        payload,
        apiUpdateCart,
        successCallback,
        errorCallback
    )
}

function calculateTotalSubPrice() {
    var totalSubPrice = 0;
    $('.update-sl').each(function () {
        totalSubPrice += $(this).data('price') * $(this).val();
    });
    $('span.price-temp').text(formatMoney(totalSubPrice, 'đ'));
    $('span.total-cart').text(formatMoney(totalSubPrice, 'đ'));
}

$(document).delegate('.btn-minus', 'click', function (e) {
    var quantityElm = $(this).next('input');
    var num = parseInt(quantityElm.val()) - 1;
    num = (num >= 1) ? num : 1;
    quantityElm.val(num);
    var subPrice = num * quantityElm.data('price');
    $(this).closest('tr').find('span.sub-price').text(formatMoney(subPrice, 'đ'));
    calculateTotalSubPrice();
    updateCart(quantityElm.attr('current-id'), num);
    syncDataStep(quantityElm.attr('current-id'), num, subPrice);
})

$(document).delegate('.btn-plus', 'click', function (e) {
    var quantityElm = $(this).prev('input');
    var num = parseInt(quantityElm.val()) + 1;
    num = num <= quantityElm.attr('max') ? num : quantityElm.attr('max');
    quantityElm.val(num);
    var subPrice = formatMoney(num * quantityElm.data('price'))
    $(this).closest('tr').find('span.sub-price').text(formatMoney(subPrice, 'đ'));
    calculateTotalSubPrice();
    updateCart(quantityElm.attr('current-id'), num);
    syncDataStep(quantityElm.attr('current-id'), num, subPrice);

})

$(document).delegate('.update-sl', 'change', function (e) {
    var quantity = $(this).val();
    if (quantity < 1) {
        quantity = 1
    } else if (quantity > 999) {
        quantity = 999
    }
    $(this).val(quantity);
    var productId = $(this).attr('current-id');
    var productPrice = $(this).data('price');
    var subPrice = quantity * productPrice;
    $(this).closest('tr').find('span.sub-price').text(formatMoney(subPrice, 'đ'));
    calculateTotalSubPrice();
    updateCart(productId, quantity);
    syncDataStep(productId, quantity, subPrice);
})

$(document).delegate('.remove-cart', 'click', function (e) {
    var productId = $(this).attr('current-id');
    var elm = $(this);
    loading();
    sendRequest(
        'DELETE', {
            product_id: productId
        },
        apiRemoveCart,
        function (response) {
            elm.closest('tr').remove();
            calculateTotalSubPrice();
            stopLoading();
            $('tr[current-id="' + productId + '"]').remove();
        },
        function (response) {
            response = response.responseJSON;
            var messages = response.message ? response.message : 'Thất bại';
            messages = getResponseMessage(messages);
            showNotification(messages, 'danger');
            stopLoading();
        }
    )
})

$(document).delegate('.swiper-slide', 'click', function (e) {
    var step = $(this).index() + 1;
    if (step == 1 || step == 2) {
        $('a[href="#step' + step + '"]').tab('show');
    }
})

$('#id_city').on('change', function () {
    var provinceCode = $(this).val();
    var api = apiGetDistricts.replace("#code#", provinceCode);
    sendRequest(
        'GET', {},
        api,
        function (response) {
            var xhtml = '<option value="">Chọn quận huyện</option>';
            response.data.forEach(element => {
                xhtml += '<option value="' + element.district_code + '">' + element.name + '</option>'
            });
            $('#id_dist').html(xhtml).selectpicker("refresh");
        }
    )
});

$('#id_dist').on('change', function () {
    var districtCode = $(this).val();
    var api = apiGetWards.replace("#code#", districtCode);
    sendRequest(
        'GET', {},
        api,
        function (response) {
            var xhtml = '<option value="">Chọn phường xã</option>';
            response.data.forEach(element => {
                xhtml += '<option value="' + element.ward_code + '">' + element.name + '</option>'
            });
            $('#id_ward').html(xhtml).selectpicker("refresh");
        }
    )
});

$('#xacnhan2').on('click', function () {
    var products = [];
    $('#ajaxLoadCart input[name="quantity"]').each(function () {
        products.push({
            id: $(this).attr('current-id'),
            quantity: $(this).val()
        });
    });
    console.log(products);
    if (!products.length) {
        GLOBAL.showToastr('Vui lòng chọn sản phẩm', 'error');
        return;
    }
    var payload = {
        customer: {
            name: $('#ten').val(),
            phone: $('#dienthoai').val(),
            email: $('#email').val(),
            address: $('#address').val(),
            province_code: $('#id_city').val(),
            district_code: $('#id_dist').val(),
            ward_code: $('#id_ward').val(),
        },
        products: products
    }
    sendRequest(
        'POST',
        payload,
        apiCreateOrder,
        function (response) {
            $("#order-code").text(response.data.code);
            $('a[href="#step4"]').tab('show');
        },
        function (response) {
            response = response.responseJSON;
            var messages = response.message ? response.message : 'Thất bại';
            messages = getResponseMessage(messages);
            GLOBAL.showToastr(messages, 'error');
        }
    )
});
