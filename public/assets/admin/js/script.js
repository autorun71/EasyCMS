/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./Resources/assets/js/app.js":
/*!************************************!*\
  !*** ./Resources/assets/js/app.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("// import './bootstrap';\ndocument.addEventListener('DOMContentLoaded', function () {\n  var hideChildLeftSidebarClose = document.querySelector('.close-menu');\n  hideChildLeftSidebarClose.addEventListener('click', function (e) {\n    console.log(e.currentTarget.closest('.left-menu-children'));\n    var hideChildLeftSidebar = e.currentTarget.closest('.left-menu-children');\n    var tabsUl = document.querySelector('.tabs ul');\n    var hideChildLeftSidebarVisibility = hideChildLeftSidebar.style.width;\n\n    if (hideChildLeftSidebarVisibility === '10px') {\n      hideChildLeftSidebar.style.width = '';\n      hideChildLeftSidebarClose.querySelector('span').innerHTML = '<<';\n\n      if (tabsUl) {\n        tabsUl.style.width = '';\n      }\n    } else {\n      hideChildLeftSidebar.style.width = '10px';\n      hideChildLeftSidebarClose.querySelector('span').innerHTML = '>>';\n\n      if (tabsUl) {\n        tabsUl.style.width = 'calc(100vw - 142px)';\n      }\n    }\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9SZXNvdXJjZXMvYXNzZXRzL2pzL2FwcC5qcz82ZmY1Il0sIm5hbWVzIjpbImRvY3VtZW50IiwiYWRkRXZlbnRMaXN0ZW5lciIsImhpZGVDaGlsZExlZnRTaWRlYmFyQ2xvc2UiLCJxdWVyeVNlbGVjdG9yIiwiZSIsImNvbnNvbGUiLCJsb2ciLCJjdXJyZW50VGFyZ2V0IiwiY2xvc2VzdCIsImhpZGVDaGlsZExlZnRTaWRlYmFyIiwidGFic1VsIiwiaGlkZUNoaWxkTGVmdFNpZGViYXJWaXNpYmlsaXR5Iiwic3R5bGUiLCJ3aWR0aCIsImlubmVySFRNTCJdLCJtYXBwaW5ncyI6IkFBQUE7QUFFQUEsUUFBUSxDQUFDQyxnQkFBVCxDQUEwQixrQkFBMUIsRUFBOEMsWUFBWTtBQUN0RCxNQUFNQyx5QkFBeUIsR0FBR0YsUUFBUSxDQUFDRyxhQUFULENBQXVCLGFBQXZCLENBQWxDO0FBRUFELDJCQUF5QixDQUFDRCxnQkFBMUIsQ0FBMkMsT0FBM0MsRUFBb0QsVUFBVUcsQ0FBVixFQUFhO0FBQzdEQyxXQUFPLENBQUNDLEdBQVIsQ0FBWUYsQ0FBQyxDQUFDRyxhQUFGLENBQWdCQyxPQUFoQixDQUF3QixxQkFBeEIsQ0FBWjtBQUNBLFFBQU1DLG9CQUFvQixHQUFHTCxDQUFDLENBQUNHLGFBQUYsQ0FBZ0JDLE9BQWhCLENBQXdCLHFCQUF4QixDQUE3QjtBQUNBLFFBQU1FLE1BQU0sR0FBR1YsUUFBUSxDQUFDRyxhQUFULENBQXVCLFVBQXZCLENBQWY7QUFDQSxRQUFJUSw4QkFBOEIsR0FBR0Ysb0JBQW9CLENBQUNHLEtBQXJCLENBQTJCQyxLQUFoRTs7QUFFQSxRQUFJRiw4QkFBOEIsS0FBSyxNQUF2QyxFQUErQztBQUMzQ0YsMEJBQW9CLENBQUNHLEtBQXJCLENBQTJCQyxLQUEzQixHQUFtQyxFQUFuQztBQUNBWCwrQkFBeUIsQ0FBQ0MsYUFBMUIsQ0FBd0MsTUFBeEMsRUFBZ0RXLFNBQWhELEdBQTRELElBQTVEOztBQUNBLFVBQUlKLE1BQUosRUFBWTtBQUNSQSxjQUFNLENBQUNFLEtBQVAsQ0FBYUMsS0FBYixHQUFxQixFQUFyQjtBQUNIO0FBRUosS0FQRCxNQU9PO0FBQ0hKLDBCQUFvQixDQUFDRyxLQUFyQixDQUEyQkMsS0FBM0IsR0FBbUMsTUFBbkM7QUFDQVgsK0JBQXlCLENBQUNDLGFBQTFCLENBQXdDLE1BQXhDLEVBQWdEVyxTQUFoRCxHQUE0RCxJQUE1RDs7QUFDQSxVQUFJSixNQUFKLEVBQVk7QUFDUkEsY0FBTSxDQUFDRSxLQUFQLENBQWFDLEtBQWIsR0FBcUIscUJBQXJCO0FBQ0g7QUFFSjtBQUVKLEdBdEJEO0FBdUJILENBMUJEIiwiZmlsZSI6Ii4vUmVzb3VyY2VzL2Fzc2V0cy9qcy9hcHAuanMuanMiLCJzb3VyY2VzQ29udGVudCI6WyIvLyBpbXBvcnQgJy4vYm9vdHN0cmFwJztcblxuZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lcignRE9NQ29udGVudExvYWRlZCcsIGZ1bmN0aW9uICgpIHtcbiAgICBjb25zdCBoaWRlQ2hpbGRMZWZ0U2lkZWJhckNsb3NlID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignLmNsb3NlLW1lbnUnKVxuXG4gICAgaGlkZUNoaWxkTGVmdFNpZGViYXJDbG9zZS5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGZ1bmN0aW9uIChlKSB7XG4gICAgICAgIGNvbnNvbGUubG9nKGUuY3VycmVudFRhcmdldC5jbG9zZXN0KCcubGVmdC1tZW51LWNoaWxkcmVuJykpXG4gICAgICAgIGNvbnN0IGhpZGVDaGlsZExlZnRTaWRlYmFyID0gZS5jdXJyZW50VGFyZ2V0LmNsb3Nlc3QoJy5sZWZ0LW1lbnUtY2hpbGRyZW4nKVxuICAgICAgICBjb25zdCB0YWJzVWwgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcudGFicyB1bCcpO1xuICAgICAgICBsZXQgaGlkZUNoaWxkTGVmdFNpZGViYXJWaXNpYmlsaXR5ID0gaGlkZUNoaWxkTGVmdFNpZGViYXIuc3R5bGUud2lkdGg7XG5cbiAgICAgICAgaWYgKGhpZGVDaGlsZExlZnRTaWRlYmFyVmlzaWJpbGl0eSA9PT0gJzEwcHgnKSB7XG4gICAgICAgICAgICBoaWRlQ2hpbGRMZWZ0U2lkZWJhci5zdHlsZS53aWR0aCA9ICcnXG4gICAgICAgICAgICBoaWRlQ2hpbGRMZWZ0U2lkZWJhckNsb3NlLnF1ZXJ5U2VsZWN0b3IoJ3NwYW4nKS5pbm5lckhUTUwgPSAnPDwnXG4gICAgICAgICAgICBpZiAodGFic1VsKSB7XG4gICAgICAgICAgICAgICAgdGFic1VsLnN0eWxlLndpZHRoID0gJyc7XG4gICAgICAgICAgICB9XG5cbiAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgIGhpZGVDaGlsZExlZnRTaWRlYmFyLnN0eWxlLndpZHRoID0gJzEwcHgnXG4gICAgICAgICAgICBoaWRlQ2hpbGRMZWZ0U2lkZWJhckNsb3NlLnF1ZXJ5U2VsZWN0b3IoJ3NwYW4nKS5pbm5lckhUTUwgPSAnPj4nXG4gICAgICAgICAgICBpZiAodGFic1VsKSB7XG4gICAgICAgICAgICAgICAgdGFic1VsLnN0eWxlLndpZHRoID0gJ2NhbGMoMTAwdncgLSAxNDJweCknO1xuICAgICAgICAgICAgfVxuXG4gICAgICAgIH1cblxuICAgIH0pXG59KVxuIl0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./Resources/assets/js/app.js\n");

/***/ }),

/***/ "./Resources/assets/sass/app.scss":
/*!****************************************!*\
  !*** ./Resources/assets/sass/app.scss ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("// removed by extract-text-webpack-plugin//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9SZXNvdXJjZXMvYXNzZXRzL3Nhc3MvYXBwLnNjc3M/ZDUyOCJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQSIsImZpbGUiOiIuL1Jlc291cmNlcy9hc3NldHMvc2Fzcy9hcHAuc2Nzcy5qcyIsInNvdXJjZXNDb250ZW50IjpbIi8vIHJlbW92ZWQgYnkgZXh0cmFjdC10ZXh0LXdlYnBhY2stcGx1Z2luIl0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./Resources/assets/sass/app.scss\n");

/***/ }),

/***/ 0:
/*!***************************************************************************!*\
  !*** multi ./Resources/assets/js/app.js ./Resources/assets/sass/app.scss ***!
  \***************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /var/www/localcopy.ru/easycms-dev0/html/EasyCMS/packages/EasyCms/Admin/Main/Resources/assets/js/app.js */"./Resources/assets/js/app.js");
module.exports = __webpack_require__(/*! /var/www/localcopy.ru/easycms-dev0/html/EasyCMS/packages/EasyCms/Admin/Main/Resources/assets/sass/app.scss */"./Resources/assets/sass/app.scss");


/***/ })

/******/ });