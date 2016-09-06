webpackJsonp([0],[
/* 0 */
/***/ function(module, exports, __webpack_require__) {

	module.exports = __webpack_require__(1);


/***/ },
/* 1 */
/***/ function(module, exports, __webpack_require__) {

	'use strict';

	var styles = __webpack_require__(2);

	var WHO = 'JS';
	var greeter = function greeter(who) {
	  return 'Hello from ' + who + '!';
	};

	document.onreadystatechange = function () {
	  if (document.readyState === 'complete') {
	    document.getElementById('app').appendChild(document.createTextNode(greeter(WHO)));
	  }
	};

/***/ },
/* 2 */
/***/ function(module, exports) {

	// removed by extract-text-webpack-plugin

/***/ }
]);