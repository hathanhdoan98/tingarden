import {
    sendRequest
} from '../../common/ajax.js';

import {
    getResponseMessage
} from '../create-data.js';

import {
    showNotification
} from '../../common/helper.js';

$(document).delegate('.icon-setting', 'click', function (e) {
    e.preventDefault();
    $(this).closest('.setting').addClass('hide');
})

$(document).delegate('.icon-setting-web', 'click', function (e) {
    e.preventDefault();
    $('.setting-detail-web').removeClass('hide');
})

$(document).delegate('.icon-setting-system', 'click', function (e) {
    e.preventDefault();
    $('.setting-detail-system').removeClass('hide');
})

$(document).delegate('.icon-setting-payment', 'click', function (e) {
    e.preventDefault();
    $('.setting-detail-payment').removeClass('hide');
})

$(document).delegate('.icon-setting-detail, .btn-back', 'click', function (e) {
    e.preventDefault();
    $(this).closest('.setting-detail').addClass('hide');
    $('.setting').removeClass('hide');
})

$(document).delegate('.btn-add', 'click', function (e) {
    var type = $(this).data('type');
    var settingForm = $(this).closest('.setting-detail').find('.setting-form');
    var data = settingForm.serializeArray();
    var settings = [];
    var successCallback = function (response) {
        showNotification('Cập nhật thành công', 'success');
    };
    var failCallback = function (response) {
        response = response.responseJSON;
        var message = response.message ? response.message : 'Thất bại';
        message = getResponseMessage(message);
        showNotification(message, 'danger');
    }
    data.forEach(element => {
        settings.push({
            key: element.name,
            value: element.value,
            type: type,
        });
    });
    sendRequest('POST', {
            'settings': settings
        },
        apiUpdate,
        successCallback,
        failCallback
    );
})
