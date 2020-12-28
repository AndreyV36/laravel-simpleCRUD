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
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/bootstrap-carousel.js":
/*!********************************************!*\
  !*** ./resources/js/bootstrap-carousel.js ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

!function ($) {
  "use strict"; // jshint ;_;

  /* CAROUSEL CLASS DEFINITION
   * ========================= */

  var Carousel = function Carousel(element, options) {
    this.$element = $(element);
    this.options = options;
    this.options.slide && this.slide(this.options.slide);
    this.options.pause == 'hover' && this.$element.on('mouseenter', $.proxy(this.pause, this)).on('mouseleave', $.proxy(this.cycle, this));
  };

  Carousel.prototype = {
    cycle: function cycle(e) {
      if (!e) this.paused = false;
      this.options.interval && !this.paused && (this.interval = setInterval($.proxy(this.next, this), this.options.interval));
      return this;
    },
    to: function to(pos) {
      var $active = this.$element.find('.active'),
          children = $active.parent().children(),
          activePos = children.index($active),
          that = this;
      if (pos > children.length - 1 || pos < 0) return;

      if (this.sliding) {
        return this.$element.one('slid', function () {
          that.to(pos);
        });
      }

      if (activePos == pos) {
        return this.pause().cycle();
      }

      return this.slide(pos > activePos ? 'next' : 'prev', $(children[pos]));
    },
    pause: function pause(e) {
      if (!e) this.paused = true;
      clearInterval(this.interval);
      this.interval = null;
      return this;
    },
    next: function next() {
      if (this.sliding) return;
      return this.slide('next');
    },
    prev: function prev() {
      if (this.sliding) return;
      return this.slide('prev');
    },
    slide: function slide(type, next) {
      var $active = this.$element.find('.active'),
          $next = next || $active[type](),
          isCycling = this.interval,
          direction = type == 'next' ? 'left' : 'right',
          fallback = type == 'next' ? 'first' : 'last',
          that = this,
          e = $.Event('slide');
      this.sliding = true;
      isCycling && this.pause();
      $next = $next.length ? $next : this.$element.find('.item')[fallback]();
      if ($next.hasClass('active')) return;

      if ($.support.transition && this.$element.hasClass('slide')) {
        this.$element.trigger(e);
        if (e.isDefaultPrevented()) return;
        $next.addClass(type);
        $next[0].offsetWidth; // force reflow

        $active.addClass(direction);
        $next.addClass(direction);
        this.$element.one($.support.transition.end, function () {
          $next.removeClass([type, direction].join(' ')).addClass('active');
          $active.removeClass(['active', direction].join(' '));
          that.sliding = false;
          setTimeout(function () {
            that.$element.trigger('slid');
          }, 0);
        });
      } else {
        this.$element.trigger(e);
        if (e.isDefaultPrevented()) return;
        $active.removeClass('active');
        $next.addClass('active');
        this.sliding = false;
        this.$element.trigger('slid');
      }

      isCycling && this.cycle();
      return this;
    }
  };
  /* CAROUSEL PLUGIN DEFINITION
   * ========================== */

  $.fn.carousel = function (option) {
    return this.each(function () {
      var $this = $(this),
          data = $this.data('carousel'),
          options = $.extend({}, $.fn.carousel.defaults, _typeof(option) == 'object' && option);
      if (!data) $this.data('carousel', data = new Carousel(this, options));
      if (typeof option == 'number') data.to(option);else if (typeof option == 'string' || (option = options.slide)) data[option]();else if (options.interval) data.cycle();
    });
  };

  $.fn.carousel.defaults = {
    interval: 3000,
    pause: 'hover'
  };
  $.fn.carousel.Constructor = Carousel;
  /* CAROUSEL DATA-API
   * ================= */

  $(function () {
    $('body').on('click.carousel.data-api', '[data-slide]', function (e) {
      var $this = $(this),
          href,
          $target = $($this.attr('data-target') || (href = $this.attr('href')) && href.replace(/.*(?=#[^\s]+$)/, '')) //strip for ie7
      ,
          options = !$target.data('modal') && $.extend({}, $target.data(), $this.data());
      $target.carousel(options);
      e.preventDefault();
    });
  });
}(window.jQuery);

/***/ }),

/***/ 1:
/*!**************************************************!*\
  !*** multi ./resources/js/bootstrap-carousel.js ***!
  \**************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /var/www/laravel/resources/js/bootstrap-carousel.js */"./resources/js/bootstrap-carousel.js");


/***/ })

/******/ });