/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/common/ajax.js":
/*!*************************************!*\
  !*** ./resources/js/common/ajax.js ***!
  \*************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "sendFormData": () => (/* binding */ sendFormData),
/* harmony export */   "sendRequest": () => (/* binding */ sendRequest)
/* harmony export */ });
/**
 * @param method
 * @param payload
 * @param url
 * @param callback
 * @param callBackError
 * @param isSkipLoading
 * @param currentRequest
 */
function sendRequest(method, payload, url, callback, callBackError, isSkipLoading, currentRequest) {
  $.ajaxSetup({
    cache: false
  });
  return $.ajax({
    type: method,
    data: payload,
    url: url,
    context: this,
    dataType: "json",
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    success: function success(response) {
      if (typeof AmagiLoader != 'undefined') {
        AmagiLoader.hide();
      }

      callback(response);
    },
    beforeSend: function beforeSend() {
      if (!isSkipLoading && typeof AmagiLoader != 'undefined') {
        AmagiLoader.show();
      } //Cancel request if multiple same api called on the same time


      if (currentRequest) {
        currentRequest.abort();
      }
    },
    error: function error(response) {
      if (typeof AmagiLoader != 'undefined') {
        AmagiLoader.hide();
      }

      if (callBackError) {
        callBackError(response);
      }
    }
  });
}
/**
 * @param method
 * @param payload
 * @param url
 * @param callback
 * @param callBackError
 * @param currentRequest
 * @param isSkipLoadingStop
 */


function sendFormData(method, payload, url, callback, callBackError, currentRequest) {
  $.ajaxSetup({
    cache: false
  });
  return $.ajax({
    type: method,
    data: payload,
    url: url,
    context: this,
    dataType: "json",
    contentType: false,
    processData: false,
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    success: function success(response) {
      callback(response);
    },
    beforeSend: function beforeSend() {
      //Cancel request if multiple same api called on the same time
      if (currentRequest) {
        currentRequest.abort();
      }
    },
    error: function error(response) {
      if (callBackError) {
        callBackError(response);
      }
    }
  });
}



/***/ }),

/***/ "./resources/js/common/helper.js":
/*!***************************************!*\
  !*** ./resources/js/common/helper.js ***!
  \***************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "activeBtnStatus": () => (/* binding */ activeBtnStatus),
/* harmony export */   "createErrorMessage": () => (/* binding */ createErrorMessage),
/* harmony export */   "createSlug": () => (/* binding */ createSlug),
/* harmony export */   "formatDate": () => (/* binding */ formatDate),
/* harmony export */   "formatMoney": () => (/* binding */ formatMoney),
/* harmony export */   "formatNumber": () => (/* binding */ formatNumber),
/* harmony export */   "getResponseMessage": () => (/* binding */ getResponseMessage),
/* harmony export */   "hideLoading": () => (/* binding */ hideLoading),
/* harmony export */   "keyBy": () => (/* binding */ keyBy),
/* harmony export */   "randomCharacter": () => (/* binding */ randomCharacter),
/* harmony export */   "randomNumber": () => (/* binding */ randomNumber),
/* harmony export */   "refactorUrl": () => (/* binding */ refactorUrl),
/* harmony export */   "removeAllErrorMessage": () => (/* binding */ removeAllErrorMessage),
/* harmony export */   "removeArrayElement": () => (/* binding */ removeArrayElement),
/* harmony export */   "setURLSearchParam": () => (/* binding */ setURLSearchParam),
/* harmony export */   "showLoading": () => (/* binding */ showLoading),
/* harmony export */   "showNotification": () => (/* binding */ showNotification),
/* harmony export */   "sliceContent": () => (/* binding */ sliceContent)
/* harmony export */ });
function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }

/**
 * Slug a string
 * @param slug
 * @param space
 * @return string
 */
function createSlug(slug) {
  var space = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : '-';
  return function (space) {
    var space = space || '-';
    slug = '' + slug;
    slug = slug.toLowerCase();
    slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
    slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
    slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
    slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
    slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
    slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
    slug = slug.replace(/đ/gi, 'd');
    slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
    slug = slug.replace(/ /gi, space);
    slug = slug.replace(/\-\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-/gi, '-');
    slug = slug.replace(/\-\-/gi, '-');
    slug = '@' + slug + '@';
    slug = slug.replace(/\@\-|\-\@|\@/gi, '');
    return slug;
  }(space);
}
/**
 * Format number to money
 * @param value
 * @param string|null currencyUnit
 * @return int|float
 */


function formatMoney(value) {
  var currencyUnit = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : '';
  value = value ? value : 0;
  var text = value.toString();
  var splice = text.split('.');
  var result = splice[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");

  if (splice.length > 1) {
    result += '.' + splice[1].substr(0, 2);
  }

  result = currencyUnit ? result + " " + currencyUnit.trim() : result;
  return result;
}
/**
 * Format number
 * @param num
 * @return int|float
 */


function formatNumber(num) {
  return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,');
}
/**
 * Format date
 * @param date
 * @param format
 * @return string
 */


function formatDate(date, format) {
  var date = new Date(date),
      day = date.getDate(),
      month = date.getMonth() + 1,
      year = date.getFullYear(),
      hours = date.getHours(),
      minutes = date.getMinutes(),
      seconds = date.getSeconds();

  if (!format) {
    format = "dd/mm/yyyy";
  }

  format = format.replace("mm", month.toString().replace(/^(\d)$/, '0$1'));

  if (format.indexOf("yyyy") > -1) {
    format = format.replace("yyyy", year.toString());
  } else if (format.indexOf("yy") > -1) {
    format = format.replace("yy", year.toString().substr(2, 2));
  }

  format = format.replace("dd", day.toString().replace(/^(\d)$/, '0$1'));

  if (format.indexOf("t") > -1) {
    if (hours > 11) {
      format = format.replace("t", "pm");
    } else {
      format = format.replace("t", "am");
    }
  }

  if (format.indexOf("HH") > -1) {
    format = format.replace("HH", hours.toString().replace(/^(\d)$/, '0$1'));
  }

  if (format.indexOf("hh") > -1) {
    if (hours > 12) {
      hours -= 12;
    }

    if (hours === 0) {
      hours = 12;
    }

    format = format.replace("hh", hours.toString().replace(/^(\d)$/, '0$1'));
  }

  if (format.indexOf("mm") > -1) {
    format = format.replace("mm", minutes.toString().replace(/^(\d)$/, '0$1'));
  }

  if (format.indexOf("ss") > -1) {
    format = format.replace("ss", seconds.toString().replace(/^(\d)$/, '0$1'));
  }

  return format;
}
/**
 * show notification
 * @param message
 * @param type
 * @param time
 * @param icon
 * @return void
 */


function showNotification(message, type, time, icon) {
  icon = icon == null ? '' : icon;
  type = type == null ? 'info' : type;
  time = time == null ? 3000 : time;
  $('.system_message').addClass('show').addClass(type);
  $('.system_message').find('.title').html(message);
  setTimeout(function () {
    $('.system_message').removeClass('show').removeClass(type);
    $('.system_message');
  }, time);
}

function sliceContent(string) {
  var length = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 46;

  if (string && string.length > length) {
    return string.slice(0, length) + '...';
  }

  return string;
}

function randomCharacter() {
  var length = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 8;
  var result = '';
  var str = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

  for ($i = 0; $i < length; $i++) {
    random_index = this.randomNumber(str.length - 1);
    result += str[random_index];
  }

  return result;
}

function randomNumber() {
  var max = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 100;
  // random tu 1->100
  return Math.floor(Math.random() * max + 1);
}
/**
 * Refactor url
 * @param string url 
 * @returns string
 */


function refactorUrl(url) {
  return url.replace(/(\/){2,}/, '/');
}
/**
 * Set URL search param
 * @param url 
 * @param value 
 */


function setURLSearchParam(key, value) {
  var url = new URL(window.location.href);
  url.searchParams.set(key, value);
  window.history.pushState({
    path: url.href
  }, '', url.href);
}
/**
 * Create error message
 * @param text 
 * @returns string
 */


function createErrorMessage(text) {
  return '<small class="text-danger">' + text + '</small>';
}
/**
 * Remove all error messages
 */


function removeAllErrorMessage() {
  $('small.text-danger').remove();
}
/**
 * 
 * @param bool status 
 */


function activeBtnStatus(status) {
  $('.btn-status').removeClass('active');
  $('.btn-status[data-status=' + status + ']').addClass('active');
}
/**
 * 
 * @param array arr 
 * @param value 
 * @returns array
 */


function removeArrayElement(arr, value) {
  var index = arr.indexOf(value);

  if (index > -1) {
    arr.splice(index, 1);
  }

  return arr;
}
/**
 * 
 * @param mix key 
 * @param array  arr
 * @returns array
 */


function keyBy(key, arr) {
  var result = [];
  arr.forEach(function (item, index) {
    if (item[key] || item[key] == 0) {
      result[item[key]] = item;
    }
  });
  return result;
}
/**
 * 
 * @param message 
 * @returns string
 */


function getResponseMessage(message) {
  if (_typeof(message) == 'object') {
    for (var i in message) {
      if (_typeof(message[i]) == 'object') {
        return getResponseMessage(message[i]);
      }

      return message[i];
    }
  }

  return message;
}

function showLoading() {
  $(".fa-spinner").css('display', 'inline-block');
}

function hideLoading() {
  $(".fa-spinner").css('display', 'none');
}



/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
(() => {
/*!****************************************!*\
  !*** ./resources/js/web/pages/cart.js ***!
  \****************************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _common_ajax_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../common/ajax.js */ "./resources/js/common/ajax.js");
/* harmony import */ var _common_helper_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../common/helper.js */ "./resources/js/common/helper.js");



function loading() {
  (0,_common_helper_js__WEBPACK_IMPORTED_MODULE_1__.showLoading)();
  $("#giohang").attr('disabled', true);
  $("#giohang").css('opacity', "0.5");
}

function stopLoading() {
  (0,_common_helper_js__WEBPACK_IMPORTED_MODULE_1__.hideLoading)();
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
    $(this).find("span.sub-price").text((0,_common_helper_js__WEBPACK_IMPORTED_MODULE_1__.formatMoney)(subPrice));
  });
}

function updateCart(productId, quantity) {
  var payload = {
    product_id: productId,
    quantity: quantity
  };

  var successCallback = function successCallback(response) {
    $('#view-header').html(response.data.total_quantity);
    stopLoading();
  };

  var errorCallback = function errorCallback(response) {
    response = response.responseJSON;
    var messages = response.message ? response.message : 'Thất bại';
    messages = (0,_common_helper_js__WEBPACK_IMPORTED_MODULE_1__.getResponseMessage)(messages);
    (0,_common_helper_js__WEBPACK_IMPORTED_MODULE_1__.showNotification)(messages, 'danger');
    stopLoading();
  };

  loading();
  (0,_common_ajax_js__WEBPACK_IMPORTED_MODULE_0__.sendRequest)('PUT', payload, apiUpdateCart, successCallback, errorCallback);
}

function calculateTotalSubPrice() {
  var totalSubPrice = 0;
  $('.update-sl').each(function () {
    totalSubPrice += $(this).data('price') * $(this).val();
  });
  $('span.price-temp').text((0,_common_helper_js__WEBPACK_IMPORTED_MODULE_1__.formatMoney)(totalSubPrice, 'đ'));
  $('span.total-cart').text((0,_common_helper_js__WEBPACK_IMPORTED_MODULE_1__.formatMoney)(totalSubPrice, 'đ'));
}

$(document).delegate('.btn-minus', 'click', function (e) {
  var quantityElm = $(this).next('input');
  var num = parseInt(quantityElm.val()) - 1;
  num = num >= 1 ? num : 1;
  quantityElm.val(num);
  var subPrice = num * quantityElm.data('price');
  $(this).closest('tr').find('span.sub-price').text((0,_common_helper_js__WEBPACK_IMPORTED_MODULE_1__.formatMoney)(subPrice, 'đ'));
  calculateTotalSubPrice();
  updateCart(quantityElm.attr('current-id'), num);
  syncDataStep(quantityElm.attr('current-id'), num, subPrice);
});
$(document).delegate('.btn-plus', 'click', function (e) {
  var quantityElm = $(this).prev('input');
  var num = parseInt(quantityElm.val()) + 1;
  num = num <= quantityElm.attr('max') ? num : quantityElm.attr('max');
  quantityElm.val(num);
  var subPrice = (0,_common_helper_js__WEBPACK_IMPORTED_MODULE_1__.formatMoney)(num * quantityElm.data('price'));
  $(this).closest('tr').find('span.sub-price').text((0,_common_helper_js__WEBPACK_IMPORTED_MODULE_1__.formatMoney)(subPrice, 'đ'));
  calculateTotalSubPrice();
  updateCart(quantityElm.attr('current-id'), num);
  syncDataStep(quantityElm.attr('current-id'), num, subPrice);
});
$(document).delegate('.update-sl', 'change', function (e) {
  var quantity = $(this).val();

  if (quantity < 1) {
    quantity = 1;
  } else if (quantity > 999) {
    quantity = 999;
  }

  $(this).val(quantity);
  var productId = $(this).attr('current-id');
  var productPrice = $(this).data('price');
  var subPrice = quantity * productPrice;
  $(this).closest('tr').find('span.sub-price').text((0,_common_helper_js__WEBPACK_IMPORTED_MODULE_1__.formatMoney)(subPrice, 'đ'));
  calculateTotalSubPrice();
  updateCart(productId, quantity);
  syncDataStep(productId, quantity, subPrice);
});
$(document).delegate('.remove-cart', 'click', function (e) {
  var productId = $(this).attr('current-id');
  var elm = $(this);
  loading();
  (0,_common_ajax_js__WEBPACK_IMPORTED_MODULE_0__.sendRequest)('DELETE', {
    product_id: productId
  }, apiRemoveCart, function (response) {
    elm.closest('tr').remove();
    calculateTotalSubPrice();
    stopLoading();
    $('tr[current-id="' + productId + '"]').remove();
  }, function (response) {
    response = response.responseJSON;
    var messages = response.message ? response.message : 'Thất bại';
    messages = (0,_common_helper_js__WEBPACK_IMPORTED_MODULE_1__.getResponseMessage)(messages);
    (0,_common_helper_js__WEBPACK_IMPORTED_MODULE_1__.showNotification)(messages, 'danger');
    stopLoading();
  });
});
$(document).delegate('.swiper-slide', 'click', function (e) {
  var step = $(this).index() + 1;
  $('a[href="#step' + step + '"]').tab('show');
});
})();

/******/ })()
;