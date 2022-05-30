/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/common/ajax.js":
/*!*************************************!*\
  !*** ./resources/js/common/ajax.js ***!
  \*************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
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

/***/ "./resources/js/common/api.js":
/*!************************************!*\
  !*** ./resources/js/common/api.js ***!
  \************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "lazyloadImage": () => (/* binding */ lazyloadImage),
/* harmony export */   "loadScript": () => (/* binding */ loadScript)
/* harmony export */ });
var _arr_script = {};

function loadScript(scriptName, callback) {
  if (!_arr_script[scriptName]) {
    _arr_script[scriptName] = 1;
    var body = document.getElementsByTagName('body')[0];
    var script = document.createElement('script');
    script.src = scriptName;

    script.onload = function () {
      return callback(null, script);
    };

    script.onerror = function () {
      return callback(new Error("Script load error for ".concat(scriptName)));
    };

    body.appendChild(script);
  } else if (callback) {
    callback();
  }
}

;

function lazyloadImage() {
  loadScript(baseUrl + 'themes/js/appear.js', function () {
    setTimeout(function () {
      var i = $("[data-lazyload]");
      i.length > 0 && i.each(function () {
        var i = $(this),
            e = i.attr("data-lazyload");
        i.appear(function () {
          i.removeAttr("height").attr("src", e);
        }, {
          accX: 0,
          accY: 168
        }, "easeInCubic");
      });
      var e = $("[data-lazyload2]");
      e.length > 0 && e.each(function () {
        var i = $(this),
            e = i.attr("data-lazyload2");
        i.appear(function () {
          i.css("background-image", "url(" + e + ")");
        }, {
          accX: 0,
          accY: 168
        }, "easeInCubic");
      });
    }, 100);
  });
}

;


/***/ }),

/***/ "./resources/js/common/define.js":
/*!***************************************!*\
  !*** ./resources/js/common/define.js ***!
  \***************************************/
/***/ (() => {

window._LIMIT = 10;
window._SORT_KEY = 'created_at';
window._SORT_VAL = 0; //0:desc, 1: asc

window._DEFAULT_IMAGE = '/images/default-image.png';
window._SORT = {
  desc: 0,
  asc: 1
};

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
// This entry need to be wrapped in an IIFE because it need to be in strict mode.
(() => {
"use strict";
/*!*******************************************!*\
  !*** ./resources/js/web/pages/listing.js ***!
  \*******************************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _common_ajax_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../common/ajax.js */ "./resources/js/common/ajax.js");
/* harmony import */ var _common_api_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../common/api.js */ "./resources/js/common/api.js");
__webpack_require__(/*! ../../common/define.js */ "./resources/js/common/define.js");



$(document).delegate('select[name="js-sort-by"], select[name="js-limit-by"]', 'change', function (e) {
  var sort = $('select[name="js-sort-by"]').val().split("-");
  var limit = $('select[name="js-limit-by"]').val();
  var sortKey = sort[0];
  var sortValue = sort[1];
  var payload = {
    category_id: categoryId ? categoryId : null,
    sort_key: sortKey ? sortKey : _SORT_KEY,
    sort_value: _SORT[sortValue] ? _SORT[sortValue] : _SORT_VAL,
    limit: limit ? limit : _LIMIT
  };

  var successCallBack = function successCallBack(response) {
    $(dataList).html(response.data);
    (0,_common_api_js__WEBPACK_IMPORTED_MODULE_1__.lazyloadImage)();
  };

  (0,_common_ajax_js__WEBPACK_IMPORTED_MODULE_0__.sendRequest)('GET', payload, apiGetProducts, successCallBack);
});
$(document).delegate('#pagingPage li', 'click', function (e) {
  if ($(this).attr('page')) {
    var sort = $('select[name="js-sort-by"]').val().split("-");
    var limit = $('select[name="js-limit-by"]').val();
    var sortKey = sort[0];
    var sortValue = sort[1];
    var payload = {
      category_id: categoryId ? categoryId : null,
      sort_key: sortKey ? sortKey : _SORT_KEY,
      sort_value: _SORT[sortValue] ? _SORT[sortValue] : _SORT_VAL,
      limit: limit ? limit : _LIMIT,
      page: $(this).attr('page')
    };

    var successCallBack = function successCallBack(response) {
      $(dataList).html(response.data);
      (0,_common_api_js__WEBPACK_IMPORTED_MODULE_1__.lazyloadImage)();
    };

    (0,_common_ajax_js__WEBPACK_IMPORTED_MODULE_0__.sendRequest)('GET', payload, apiGetProducts, successCallBack);
  }
});
})();

/******/ })()
;