require('../../common/define.js');
import {
    sendRequest
} from '../../common/ajax.js';

import {
    lazyloadImage
} from '../../common/api.js';

$(document).delegate('select[name="js-sort-by"], select[name="js-limit-by"]', 'change', function(e){
    var sort = $('select[name="js-sort-by"]').val().split("-");
    var limit = $('select[name="js-limit-by"]').val();
    var sortKey = sort[0];
    var sortValue = sort[1];
    var payload = {
        category_id : categoryId ?categoryId : null,
        sort_key : sortKey ? sortKey : _SORT_KEY,
        sort_value : _SORT[sortValue] ? _SORT[sortValue] : _SORT_VAL,
        limit : limit ? limit : _LIMIT
    }
    var successCallBack = function(response){
        $(dataList).html(response.data);
        lazyloadImage();
    }
    sendRequest(
        'GET',
        payload,
        apiGetProducts,
        successCallBack
    )
})

$(document).delegate('#pagingPage li', 'click', function(e){
    if($(this).attr('page')){
        var sort = $('select[name="js-sort-by"]').val().split("-");
        var limit = $('select[name="js-limit-by"]').val();
        var sortKey = sort[0];
        var sortValue = sort[1];
        var payload = {
            category_id : categoryId ? categoryId : null,
            sort_key : sortKey ? sortKey : _SORT_KEY,
            sort_value : _SORT[sortValue] ? _SORT[sortValue] : _SORT_VAL,
            limit : limit ? limit : _LIMIT,
            page : $(this).attr('page')
        }
        var successCallBack = function(response){
            $(dataList).html(response.data);
            lazyloadImage();
        }
        sendRequest(
            'GET',
            payload,
            apiGetProducts,
            successCallBack
        )
    }
})