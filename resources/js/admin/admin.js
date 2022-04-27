import {sendRequest} from '../common/ajax.js';
import {
    showNotification,
    activeBtnStatus
} from '../common/helper.js';
require('../common/define.js');

function AdminObject() {
    //Attributes
    this.apiGetList = apiGetList;
    this.apiGetItem = apiGetItem;
    this.apiChangeStatus = apiChangeStatus;
    this.pagination = {
        currentPage : 1,
        lastPage : 1,
        perPage :  (typeof limit !== 'undefined') ? limit : _LIMIT,
        total : 0,

    };
    this.filter = {
        status : 1,
        keyword : '',
        sortKey : (typeof sortKey !== 'undefined') ? sortKey : _SORT_KEY,
        sortValue : (typeof sortValue !== 'undefined') ? sortValue : _SORT_VAL,
    }
    //Methods

    /**
     * Get data list
     */
    this.getList = function(){
        var payload = {
            limit : this.pagination.perPage,
            page : this.pagination.currentPage,
            filter : {
                status : this.filter.status,
                keyword : this.filter.keyword,
                sort_key : this.filter.sortKey,
                sort_value : this.filter.sortValue,
            },
        }
        var successCallback = function(response){
            activeBtnStatus(payload.filter.status);
            $(datatable).html(response.data);
        };
        sendRequest(
            'GET',
            payload,
            this.apiGetList,
            successCallback
        );
    },

    /**
     * Find one by id
     * @param int id 
     * @return Model
     */
    this.getItem = function(id, successCallback){
        
        this.apiGetItem = apiGetItem + '/' + id;
       
        sendRequest(
            'GET',
            {},
            this.apiGetItem,
            successCallback
        );
    },

    /**
     * Change status
     * @param int id 
     */
     this.changeStatus = function(id, status){
        var parent = this;
        var successCallback = function(response){
            showNotification(response.message, 'success');
            parent.setStatus($('.btn-status.active').data('status'));
            parent.setKeyword($('#keyword').val());
            parent.getList();
        };
        var failCallback = function(response){
            showNotification(response.message, 'danger');
        };

        sendRequest(
            'PUT',
            {
                id: id,
                status: status
            },
            this.apiChangeStatus,
            successCallback,
            failCallback
        );
        
    },
    
    // Set mothods
    this.setSortKey = function(sortKey){
        this.filter.sortKey = sortKey;
    }
    this.setSortValue = function(sortValue){
        this.filter.sortValue = sortValue;
    }
    this.setPage = function(page){
        this.pagination.currentPage = page;
    }
    this.setLimit = function(limit){
        this.pagination.perPage = limit;
    }
    this.setStatus = function(status){
        this.filter.status = status;
    }
    this.setKeyword = function(keyword){
        this.filter.keyword = keyword;
    }
}
export {AdminObject};