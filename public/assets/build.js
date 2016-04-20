/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};

/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {

/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;

/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			exports: {},
/******/ 			id: moduleId,
/******/ 			loaded: false
/******/ 		};

/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);

/******/ 		// Flag the module as loaded
/******/ 		module.loaded = true;

/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}


/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;

/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;

/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";

/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(0);
/******/ })
/************************************************************************/
/******/ ({

/***/ 0:
/***/ function(module, exports, __webpack_require__) {

	__webpack_require__(71);
	__webpack_require__(81);
	module.exports = __webpack_require__(84);


/***/ },

/***/ 71:
/***/ function(module, exports, __webpack_require__) {

	// style-loader: Adds some css to the DOM by adding a <style> tag

	// load the styles
	var content = __webpack_require__(72);
	if(typeof content === 'string') content = [[module.id, content, '']];
	// add the styles to the DOM
	var update = __webpack_require__(80)(content, {});
	if(content.locals) module.exports = content.locals;
	// Hot Module Replacement
	if(false) {
		// When the styles change, update the <style> tags
		if(!content.locals) {
			module.hot.accept("!!./../../css-loader/index.js!./font-awesome.css", function() {
				var newContent = require("!!./../../css-loader/index.js!./font-awesome.css");
				if(typeof newContent === 'string') newContent = [[module.id, newContent, '']];
				update(newContent);
			});
		}
		// When the module is disposed, remove the <style> tags
		module.hot.dispose(function() { update(); });
	}

/***/ },

/***/ 72:
/***/ function(module, exports, __webpack_require__) {

	exports = module.exports = __webpack_require__(73)();
	// imports


	// module
	exports.push([module.id, "/*!\n *  Font Awesome 4.6.1 by @davegandy - http://fontawesome.io - @fontawesome\n *  License - http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)\n */\n/* FONT PATH\n * -------------------------- */\n@font-face {\n  font-family: 'FontAwesome';\n  src: url(" + __webpack_require__(74) + ");\n  src: url(" + __webpack_require__(75) + "?#iefix&v=4.6.1) format('embedded-opentype'), url(" + __webpack_require__(76) + ") format('woff2'), url(" + __webpack_require__(77) + ") format('woff'), url(" + __webpack_require__(78) + ") format('truetype'), url(" + __webpack_require__(79) + "#fontawesomeregular) format('svg');\n  font-weight: normal;\n  font-style: normal;\n}\n.fa {\n  display: inline-block;\n  font: normal normal normal 14px/1 FontAwesome;\n  font-size: inherit;\n  text-rendering: auto;\n  -webkit-font-smoothing: antialiased;\n  -moz-osx-font-smoothing: grayscale;\n}\n/* makes the font 33% larger relative to the icon container */\n.fa-lg {\n  font-size: 1.33333333em;\n  line-height: 0.75em;\n  vertical-align: -15%;\n}\n.fa-2x {\n  font-size: 2em;\n}\n.fa-3x {\n  font-size: 3em;\n}\n.fa-4x {\n  font-size: 4em;\n}\n.fa-5x {\n  font-size: 5em;\n}\n.fa-fw {\n  width: 1.28571429em;\n  text-align: center;\n}\n.fa-ul {\n  padding-left: 0;\n  margin-left: 2.14285714em;\n  list-style-type: none;\n}\n.fa-ul > li {\n  position: relative;\n}\n.fa-li {\n  position: absolute;\n  left: -2.14285714em;\n  width: 2.14285714em;\n  top: 0.14285714em;\n  text-align: center;\n}\n.fa-li.fa-lg {\n  left: -1.85714286em;\n}\n.fa-border {\n  padding: .2em .25em .15em;\n  border: solid 0.08em #eeeeee;\n  border-radius: .1em;\n}\n.fa-pull-left {\n  float: left;\n}\n.fa-pull-right {\n  float: right;\n}\n.fa.fa-pull-left {\n  margin-right: .3em;\n}\n.fa.fa-pull-right {\n  margin-left: .3em;\n}\n/* Deprecated as of 4.4.0 */\n.pull-right {\n  float: right;\n}\n.pull-left {\n  float: left;\n}\n.fa.pull-left {\n  margin-right: .3em;\n}\n.fa.pull-right {\n  margin-left: .3em;\n}\n.fa-spin {\n  -webkit-animation: fa-spin 2s infinite linear;\n  animation: fa-spin 2s infinite linear;\n}\n.fa-pulse {\n  -webkit-animation: fa-spin 1s infinite steps(8);\n  animation: fa-spin 1s infinite steps(8);\n}\n@-webkit-keyframes fa-spin {\n  0% {\n    -webkit-transform: rotate(0deg);\n    transform: rotate(0deg);\n  }\n  100% {\n    -webkit-transform: rotate(359deg);\n    transform: rotate(359deg);\n  }\n}\n@keyframes fa-spin {\n  0% {\n    -webkit-transform: rotate(0deg);\n    transform: rotate(0deg);\n  }\n  100% {\n    -webkit-transform: rotate(359deg);\n    transform: rotate(359deg);\n  }\n}\n.fa-rotate-90 {\n  -ms-filter: \"progid:DXImageTransform.Microsoft.BasicImage(rotation=1)\";\n  -webkit-transform: rotate(90deg);\n  -ms-transform: rotate(90deg);\n  transform: rotate(90deg);\n}\n.fa-rotate-180 {\n  -ms-filter: \"progid:DXImageTransform.Microsoft.BasicImage(rotation=2)\";\n  -webkit-transform: rotate(180deg);\n  -ms-transform: rotate(180deg);\n  transform: rotate(180deg);\n}\n.fa-rotate-270 {\n  -ms-filter: \"progid:DXImageTransform.Microsoft.BasicImage(rotation=3)\";\n  -webkit-transform: rotate(270deg);\n  -ms-transform: rotate(270deg);\n  transform: rotate(270deg);\n}\n.fa-flip-horizontal {\n  -ms-filter: \"progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)\";\n  -webkit-transform: scale(-1, 1);\n  -ms-transform: scale(-1, 1);\n  transform: scale(-1, 1);\n}\n.fa-flip-vertical {\n  -ms-filter: \"progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)\";\n  -webkit-transform: scale(1, -1);\n  -ms-transform: scale(1, -1);\n  transform: scale(1, -1);\n}\n:root .fa-rotate-90,\n:root .fa-rotate-180,\n:root .fa-rotate-270,\n:root .fa-flip-horizontal,\n:root .fa-flip-vertical {\n  filter: none;\n}\n.fa-stack {\n  position: relative;\n  display: inline-block;\n  width: 2em;\n  height: 2em;\n  line-height: 2em;\n  vertical-align: middle;\n}\n.fa-stack-1x,\n.fa-stack-2x {\n  position: absolute;\n  left: 0;\n  width: 100%;\n  text-align: center;\n}\n.fa-stack-1x {\n  line-height: inherit;\n}\n.fa-stack-2x {\n  font-size: 2em;\n}\n.fa-inverse {\n  color: #ffffff;\n}\n/* Font Awesome uses the Unicode Private Use Area (PUA) to ensure screen\n   readers do not read off random characters that represent icons */\n.fa-glass:before {\n  content: \"\\F000\";\n}\n.fa-music:before {\n  content: \"\\F001\";\n}\n.fa-search:before {\n  content: \"\\F002\";\n}\n.fa-envelope-o:before {\n  content: \"\\F003\";\n}\n.fa-heart:before {\n  content: \"\\F004\";\n}\n.fa-star:before {\n  content: \"\\F005\";\n}\n.fa-star-o:before {\n  content: \"\\F006\";\n}\n.fa-user:before {\n  content: \"\\F007\";\n}\n.fa-film:before {\n  content: \"\\F008\";\n}\n.fa-th-large:before {\n  content: \"\\F009\";\n}\n.fa-th:before {\n  content: \"\\F00A\";\n}\n.fa-th-list:before {\n  content: \"\\F00B\";\n}\n.fa-check:before {\n  content: \"\\F00C\";\n}\n.fa-remove:before,\n.fa-close:before,\n.fa-times:before {\n  content: \"\\F00D\";\n}\n.fa-search-plus:before {\n  content: \"\\F00E\";\n}\n.fa-search-minus:before {\n  content: \"\\F010\";\n}\n.fa-power-off:before {\n  content: \"\\F011\";\n}\n.fa-signal:before {\n  content: \"\\F012\";\n}\n.fa-gear:before,\n.fa-cog:before {\n  content: \"\\F013\";\n}\n.fa-trash-o:before {\n  content: \"\\F014\";\n}\n.fa-home:before {\n  content: \"\\F015\";\n}\n.fa-file-o:before {\n  content: \"\\F016\";\n}\n.fa-clock-o:before {\n  content: \"\\F017\";\n}\n.fa-road:before {\n  content: \"\\F018\";\n}\n.fa-download:before {\n  content: \"\\F019\";\n}\n.fa-arrow-circle-o-down:before {\n  content: \"\\F01A\";\n}\n.fa-arrow-circle-o-up:before {\n  content: \"\\F01B\";\n}\n.fa-inbox:before {\n  content: \"\\F01C\";\n}\n.fa-play-circle-o:before {\n  content: \"\\F01D\";\n}\n.fa-rotate-right:before,\n.fa-repeat:before {\n  content: \"\\F01E\";\n}\n.fa-refresh:before {\n  content: \"\\F021\";\n}\n.fa-list-alt:before {\n  content: \"\\F022\";\n}\n.fa-lock:before {\n  content: \"\\F023\";\n}\n.fa-flag:before {\n  content: \"\\F024\";\n}\n.fa-headphones:before {\n  content: \"\\F025\";\n}\n.fa-volume-off:before {\n  content: \"\\F026\";\n}\n.fa-volume-down:before {\n  content: \"\\F027\";\n}\n.fa-volume-up:before {\n  content: \"\\F028\";\n}\n.fa-qrcode:before {\n  content: \"\\F029\";\n}\n.fa-barcode:before {\n  content: \"\\F02A\";\n}\n.fa-tag:before {\n  content: \"\\F02B\";\n}\n.fa-tags:before {\n  content: \"\\F02C\";\n}\n.fa-book:before {\n  content: \"\\F02D\";\n}\n.fa-bookmark:before {\n  content: \"\\F02E\";\n}\n.fa-print:before {\n  content: \"\\F02F\";\n}\n.fa-camera:before {\n  content: \"\\F030\";\n}\n.fa-font:before {\n  content: \"\\F031\";\n}\n.fa-bold:before {\n  content: \"\\F032\";\n}\n.fa-italic:before {\n  content: \"\\F033\";\n}\n.fa-text-height:before {\n  content: \"\\F034\";\n}\n.fa-text-width:before {\n  content: \"\\F035\";\n}\n.fa-align-left:before {\n  content: \"\\F036\";\n}\n.fa-align-center:before {\n  content: \"\\F037\";\n}\n.fa-align-right:before {\n  content: \"\\F038\";\n}\n.fa-align-justify:before {\n  content: \"\\F039\";\n}\n.fa-list:before {\n  content: \"\\F03A\";\n}\n.fa-dedent:before,\n.fa-outdent:before {\n  content: \"\\F03B\";\n}\n.fa-indent:before {\n  content: \"\\F03C\";\n}\n.fa-video-camera:before {\n  content: \"\\F03D\";\n}\n.fa-photo:before,\n.fa-image:before,\n.fa-picture-o:before {\n  content: \"\\F03E\";\n}\n.fa-pencil:before {\n  content: \"\\F040\";\n}\n.fa-map-marker:before {\n  content: \"\\F041\";\n}\n.fa-adjust:before {\n  content: \"\\F042\";\n}\n.fa-tint:before {\n  content: \"\\F043\";\n}\n.fa-edit:before,\n.fa-pencil-square-o:before {\n  content: \"\\F044\";\n}\n.fa-share-square-o:before {\n  content: \"\\F045\";\n}\n.fa-check-square-o:before {\n  content: \"\\F046\";\n}\n.fa-arrows:before {\n  content: \"\\F047\";\n}\n.fa-step-backward:before {\n  content: \"\\F048\";\n}\n.fa-fast-backward:before {\n  content: \"\\F049\";\n}\n.fa-backward:before {\n  content: \"\\F04A\";\n}\n.fa-play:before {\n  content: \"\\F04B\";\n}\n.fa-pause:before {\n  content: \"\\F04C\";\n}\n.fa-stop:before {\n  content: \"\\F04D\";\n}\n.fa-forward:before {\n  content: \"\\F04E\";\n}\n.fa-fast-forward:before {\n  content: \"\\F050\";\n}\n.fa-step-forward:before {\n  content: \"\\F051\";\n}\n.fa-eject:before {\n  content: \"\\F052\";\n}\n.fa-chevron-left:before {\n  content: \"\\F053\";\n}\n.fa-chevron-right:before {\n  content: \"\\F054\";\n}\n.fa-plus-circle:before {\n  content: \"\\F055\";\n}\n.fa-minus-circle:before {\n  content: \"\\F056\";\n}\n.fa-times-circle:before {\n  content: \"\\F057\";\n}\n.fa-check-circle:before {\n  content: \"\\F058\";\n}\n.fa-question-circle:before {\n  content: \"\\F059\";\n}\n.fa-info-circle:before {\n  content: \"\\F05A\";\n}\n.fa-crosshairs:before {\n  content: \"\\F05B\";\n}\n.fa-times-circle-o:before {\n  content: \"\\F05C\";\n}\n.fa-check-circle-o:before {\n  content: \"\\F05D\";\n}\n.fa-ban:before {\n  content: \"\\F05E\";\n}\n.fa-arrow-left:before {\n  content: \"\\F060\";\n}\n.fa-arrow-right:before {\n  content: \"\\F061\";\n}\n.fa-arrow-up:before {\n  content: \"\\F062\";\n}\n.fa-arrow-down:before {\n  content: \"\\F063\";\n}\n.fa-mail-forward:before,\n.fa-share:before {\n  content: \"\\F064\";\n}\n.fa-expand:before {\n  content: \"\\F065\";\n}\n.fa-compress:before {\n  content: \"\\F066\";\n}\n.fa-plus:before {\n  content: \"\\F067\";\n}\n.fa-minus:before {\n  content: \"\\F068\";\n}\n.fa-asterisk:before {\n  content: \"\\F069\";\n}\n.fa-exclamation-circle:before {\n  content: \"\\F06A\";\n}\n.fa-gift:before {\n  content: \"\\F06B\";\n}\n.fa-leaf:before {\n  content: \"\\F06C\";\n}\n.fa-fire:before {\n  content: \"\\F06D\";\n}\n.fa-eye:before {\n  content: \"\\F06E\";\n}\n.fa-eye-slash:before {\n  content: \"\\F070\";\n}\n.fa-warning:before,\n.fa-exclamation-triangle:before {\n  content: \"\\F071\";\n}\n.fa-plane:before {\n  content: \"\\F072\";\n}\n.fa-calendar:before {\n  content: \"\\F073\";\n}\n.fa-random:before {\n  content: \"\\F074\";\n}\n.fa-comment:before {\n  content: \"\\F075\";\n}\n.fa-magnet:before {\n  content: \"\\F076\";\n}\n.fa-chevron-up:before {\n  content: \"\\F077\";\n}\n.fa-chevron-down:before {\n  content: \"\\F078\";\n}\n.fa-retweet:before {\n  content: \"\\F079\";\n}\n.fa-shopping-cart:before {\n  content: \"\\F07A\";\n}\n.fa-folder:before {\n  content: \"\\F07B\";\n}\n.fa-folder-open:before {\n  content: \"\\F07C\";\n}\n.fa-arrows-v:before {\n  content: \"\\F07D\";\n}\n.fa-arrows-h:before {\n  content: \"\\F07E\";\n}\n.fa-bar-chart-o:before,\n.fa-bar-chart:before {\n  content: \"\\F080\";\n}\n.fa-twitter-square:before {\n  content: \"\\F081\";\n}\n.fa-facebook-square:before {\n  content: \"\\F082\";\n}\n.fa-camera-retro:before {\n  content: \"\\F083\";\n}\n.fa-key:before {\n  content: \"\\F084\";\n}\n.fa-gears:before,\n.fa-cogs:before {\n  content: \"\\F085\";\n}\n.fa-comments:before {\n  content: \"\\F086\";\n}\n.fa-thumbs-o-up:before {\n  content: \"\\F087\";\n}\n.fa-thumbs-o-down:before {\n  content: \"\\F088\";\n}\n.fa-star-half:before {\n  content: \"\\F089\";\n}\n.fa-heart-o:before {\n  content: \"\\F08A\";\n}\n.fa-sign-out:before {\n  content: \"\\F08B\";\n}\n.fa-linkedin-square:before {\n  content: \"\\F08C\";\n}\n.fa-thumb-tack:before {\n  content: \"\\F08D\";\n}\n.fa-external-link:before {\n  content: \"\\F08E\";\n}\n.fa-sign-in:before {\n  content: \"\\F090\";\n}\n.fa-trophy:before {\n  content: \"\\F091\";\n}\n.fa-github-square:before {\n  content: \"\\F092\";\n}\n.fa-upload:before {\n  content: \"\\F093\";\n}\n.fa-lemon-o:before {\n  content: \"\\F094\";\n}\n.fa-phone:before {\n  content: \"\\F095\";\n}\n.fa-square-o:before {\n  content: \"\\F096\";\n}\n.fa-bookmark-o:before {\n  content: \"\\F097\";\n}\n.fa-phone-square:before {\n  content: \"\\F098\";\n}\n.fa-twitter:before {\n  content: \"\\F099\";\n}\n.fa-facebook-f:before,\n.fa-facebook:before {\n  content: \"\\F09A\";\n}\n.fa-github:before {\n  content: \"\\F09B\";\n}\n.fa-unlock:before {\n  content: \"\\F09C\";\n}\n.fa-credit-card:before {\n  content: \"\\F09D\";\n}\n.fa-feed:before,\n.fa-rss:before {\n  content: \"\\F09E\";\n}\n.fa-hdd-o:before {\n  content: \"\\F0A0\";\n}\n.fa-bullhorn:before {\n  content: \"\\F0A1\";\n}\n.fa-bell:before {\n  content: \"\\F0F3\";\n}\n.fa-certificate:before {\n  content: \"\\F0A3\";\n}\n.fa-hand-o-right:before {\n  content: \"\\F0A4\";\n}\n.fa-hand-o-left:before {\n  content: \"\\F0A5\";\n}\n.fa-hand-o-up:before {\n  content: \"\\F0A6\";\n}\n.fa-hand-o-down:before {\n  content: \"\\F0A7\";\n}\n.fa-arrow-circle-left:before {\n  content: \"\\F0A8\";\n}\n.fa-arrow-circle-right:before {\n  content: \"\\F0A9\";\n}\n.fa-arrow-circle-up:before {\n  content: \"\\F0AA\";\n}\n.fa-arrow-circle-down:before {\n  content: \"\\F0AB\";\n}\n.fa-globe:before {\n  content: \"\\F0AC\";\n}\n.fa-wrench:before {\n  content: \"\\F0AD\";\n}\n.fa-tasks:before {\n  content: \"\\F0AE\";\n}\n.fa-filter:before {\n  content: \"\\F0B0\";\n}\n.fa-briefcase:before {\n  content: \"\\F0B1\";\n}\n.fa-arrows-alt:before {\n  content: \"\\F0B2\";\n}\n.fa-group:before,\n.fa-users:before {\n  content: \"\\F0C0\";\n}\n.fa-chain:before,\n.fa-link:before {\n  content: \"\\F0C1\";\n}\n.fa-cloud:before {\n  content: \"\\F0C2\";\n}\n.fa-flask:before {\n  content: \"\\F0C3\";\n}\n.fa-cut:before,\n.fa-scissors:before {\n  content: \"\\F0C4\";\n}\n.fa-copy:before,\n.fa-files-o:before {\n  content: \"\\F0C5\";\n}\n.fa-paperclip:before {\n  content: \"\\F0C6\";\n}\n.fa-save:before,\n.fa-floppy-o:before {\n  content: \"\\F0C7\";\n}\n.fa-square:before {\n  content: \"\\F0C8\";\n}\n.fa-navicon:before,\n.fa-reorder:before,\n.fa-bars:before {\n  content: \"\\F0C9\";\n}\n.fa-list-ul:before {\n  content: \"\\F0CA\";\n}\n.fa-list-ol:before {\n  content: \"\\F0CB\";\n}\n.fa-strikethrough:before {\n  content: \"\\F0CC\";\n}\n.fa-underline:before {\n  content: \"\\F0CD\";\n}\n.fa-table:before {\n  content: \"\\F0CE\";\n}\n.fa-magic:before {\n  content: \"\\F0D0\";\n}\n.fa-truck:before {\n  content: \"\\F0D1\";\n}\n.fa-pinterest:before {\n  content: \"\\F0D2\";\n}\n.fa-pinterest-square:before {\n  content: \"\\F0D3\";\n}\n.fa-google-plus-square:before {\n  content: \"\\F0D4\";\n}\n.fa-google-plus:before {\n  content: \"\\F0D5\";\n}\n.fa-money:before {\n  content: \"\\F0D6\";\n}\n.fa-caret-down:before {\n  content: \"\\F0D7\";\n}\n.fa-caret-up:before {\n  content: \"\\F0D8\";\n}\n.fa-caret-left:before {\n  content: \"\\F0D9\";\n}\n.fa-caret-right:before {\n  content: \"\\F0DA\";\n}\n.fa-columns:before {\n  content: \"\\F0DB\";\n}\n.fa-unsorted:before,\n.fa-sort:before {\n  content: \"\\F0DC\";\n}\n.fa-sort-down:before,\n.fa-sort-desc:before {\n  content: \"\\F0DD\";\n}\n.fa-sort-up:before,\n.fa-sort-asc:before {\n  content: \"\\F0DE\";\n}\n.fa-envelope:before {\n  content: \"\\F0E0\";\n}\n.fa-linkedin:before {\n  content: \"\\F0E1\";\n}\n.fa-rotate-left:before,\n.fa-undo:before {\n  content: \"\\F0E2\";\n}\n.fa-legal:before,\n.fa-gavel:before {\n  content: \"\\F0E3\";\n}\n.fa-dashboard:before,\n.fa-tachometer:before {\n  content: \"\\F0E4\";\n}\n.fa-comment-o:before {\n  content: \"\\F0E5\";\n}\n.fa-comments-o:before {\n  content: \"\\F0E6\";\n}\n.fa-flash:before,\n.fa-bolt:before {\n  content: \"\\F0E7\";\n}\n.fa-sitemap:before {\n  content: \"\\F0E8\";\n}\n.fa-umbrella:before {\n  content: \"\\F0E9\";\n}\n.fa-paste:before,\n.fa-clipboard:before {\n  content: \"\\F0EA\";\n}\n.fa-lightbulb-o:before {\n  content: \"\\F0EB\";\n}\n.fa-exchange:before {\n  content: \"\\F0EC\";\n}\n.fa-cloud-download:before {\n  content: \"\\F0ED\";\n}\n.fa-cloud-upload:before {\n  content: \"\\F0EE\";\n}\n.fa-user-md:before {\n  content: \"\\F0F0\";\n}\n.fa-stethoscope:before {\n  content: \"\\F0F1\";\n}\n.fa-suitcase:before {\n  content: \"\\F0F2\";\n}\n.fa-bell-o:before {\n  content: \"\\F0A2\";\n}\n.fa-coffee:before {\n  content: \"\\F0F4\";\n}\n.fa-cutlery:before {\n  content: \"\\F0F5\";\n}\n.fa-file-text-o:before {\n  content: \"\\F0F6\";\n}\n.fa-building-o:before {\n  content: \"\\F0F7\";\n}\n.fa-hospital-o:before {\n  content: \"\\F0F8\";\n}\n.fa-ambulance:before {\n  content: \"\\F0F9\";\n}\n.fa-medkit:before {\n  content: \"\\F0FA\";\n}\n.fa-fighter-jet:before {\n  content: \"\\F0FB\";\n}\n.fa-beer:before {\n  content: \"\\F0FC\";\n}\n.fa-h-square:before {\n  content: \"\\F0FD\";\n}\n.fa-plus-square:before {\n  content: \"\\F0FE\";\n}\n.fa-angle-double-left:before {\n  content: \"\\F100\";\n}\n.fa-angle-double-right:before {\n  content: \"\\F101\";\n}\n.fa-angle-double-up:before {\n  content: \"\\F102\";\n}\n.fa-angle-double-down:before {\n  content: \"\\F103\";\n}\n.fa-angle-left:before {\n  content: \"\\F104\";\n}\n.fa-angle-right:before {\n  content: \"\\F105\";\n}\n.fa-angle-up:before {\n  content: \"\\F106\";\n}\n.fa-angle-down:before {\n  content: \"\\F107\";\n}\n.fa-desktop:before {\n  content: \"\\F108\";\n}\n.fa-laptop:before {\n  content: \"\\F109\";\n}\n.fa-tablet:before {\n  content: \"\\F10A\";\n}\n.fa-mobile-phone:before,\n.fa-mobile:before {\n  content: \"\\F10B\";\n}\n.fa-circle-o:before {\n  content: \"\\F10C\";\n}\n.fa-quote-left:before {\n  content: \"\\F10D\";\n}\n.fa-quote-right:before {\n  content: \"\\F10E\";\n}\n.fa-spinner:before {\n  content: \"\\F110\";\n}\n.fa-circle:before {\n  content: \"\\F111\";\n}\n.fa-mail-reply:before,\n.fa-reply:before {\n  content: \"\\F112\";\n}\n.fa-github-alt:before {\n  content: \"\\F113\";\n}\n.fa-folder-o:before {\n  content: \"\\F114\";\n}\n.fa-folder-open-o:before {\n  content: \"\\F115\";\n}\n.fa-smile-o:before {\n  content: \"\\F118\";\n}\n.fa-frown-o:before {\n  content: \"\\F119\";\n}\n.fa-meh-o:before {\n  content: \"\\F11A\";\n}\n.fa-gamepad:before {\n  content: \"\\F11B\";\n}\n.fa-keyboard-o:before {\n  content: \"\\F11C\";\n}\n.fa-flag-o:before {\n  content: \"\\F11D\";\n}\n.fa-flag-checkered:before {\n  content: \"\\F11E\";\n}\n.fa-terminal:before {\n  content: \"\\F120\";\n}\n.fa-code:before {\n  content: \"\\F121\";\n}\n.fa-mail-reply-all:before,\n.fa-reply-all:before {\n  content: \"\\F122\";\n}\n.fa-star-half-empty:before,\n.fa-star-half-full:before,\n.fa-star-half-o:before {\n  content: \"\\F123\";\n}\n.fa-location-arrow:before {\n  content: \"\\F124\";\n}\n.fa-crop:before {\n  content: \"\\F125\";\n}\n.fa-code-fork:before {\n  content: \"\\F126\";\n}\n.fa-unlink:before,\n.fa-chain-broken:before {\n  content: \"\\F127\";\n}\n.fa-question:before {\n  content: \"\\F128\";\n}\n.fa-info:before {\n  content: \"\\F129\";\n}\n.fa-exclamation:before {\n  content: \"\\F12A\";\n}\n.fa-superscript:before {\n  content: \"\\F12B\";\n}\n.fa-subscript:before {\n  content: \"\\F12C\";\n}\n.fa-eraser:before {\n  content: \"\\F12D\";\n}\n.fa-puzzle-piece:before {\n  content: \"\\F12E\";\n}\n.fa-microphone:before {\n  content: \"\\F130\";\n}\n.fa-microphone-slash:before {\n  content: \"\\F131\";\n}\n.fa-shield:before {\n  content: \"\\F132\";\n}\n.fa-calendar-o:before {\n  content: \"\\F133\";\n}\n.fa-fire-extinguisher:before {\n  content: \"\\F134\";\n}\n.fa-rocket:before {\n  content: \"\\F135\";\n}\n.fa-maxcdn:before {\n  content: \"\\F136\";\n}\n.fa-chevron-circle-left:before {\n  content: \"\\F137\";\n}\n.fa-chevron-circle-right:before {\n  content: \"\\F138\";\n}\n.fa-chevron-circle-up:before {\n  content: \"\\F139\";\n}\n.fa-chevron-circle-down:before {\n  content: \"\\F13A\";\n}\n.fa-html5:before {\n  content: \"\\F13B\";\n}\n.fa-css3:before {\n  content: \"\\F13C\";\n}\n.fa-anchor:before {\n  content: \"\\F13D\";\n}\n.fa-unlock-alt:before {\n  content: \"\\F13E\";\n}\n.fa-bullseye:before {\n  content: \"\\F140\";\n}\n.fa-ellipsis-h:before {\n  content: \"\\F141\";\n}\n.fa-ellipsis-v:before {\n  content: \"\\F142\";\n}\n.fa-rss-square:before {\n  content: \"\\F143\";\n}\n.fa-play-circle:before {\n  content: \"\\F144\";\n}\n.fa-ticket:before {\n  content: \"\\F145\";\n}\n.fa-minus-square:before {\n  content: \"\\F146\";\n}\n.fa-minus-square-o:before {\n  content: \"\\F147\";\n}\n.fa-level-up:before {\n  content: \"\\F148\";\n}\n.fa-level-down:before {\n  content: \"\\F149\";\n}\n.fa-check-square:before {\n  content: \"\\F14A\";\n}\n.fa-pencil-square:before {\n  content: \"\\F14B\";\n}\n.fa-external-link-square:before {\n  content: \"\\F14C\";\n}\n.fa-share-square:before {\n  content: \"\\F14D\";\n}\n.fa-compass:before {\n  content: \"\\F14E\";\n}\n.fa-toggle-down:before,\n.fa-caret-square-o-down:before {\n  content: \"\\F150\";\n}\n.fa-toggle-up:before,\n.fa-caret-square-o-up:before {\n  content: \"\\F151\";\n}\n.fa-toggle-right:before,\n.fa-caret-square-o-right:before {\n  content: \"\\F152\";\n}\n.fa-euro:before,\n.fa-eur:before {\n  content: \"\\F153\";\n}\n.fa-gbp:before {\n  content: \"\\F154\";\n}\n.fa-dollar:before,\n.fa-usd:before {\n  content: \"\\F155\";\n}\n.fa-rupee:before,\n.fa-inr:before {\n  content: \"\\F156\";\n}\n.fa-cny:before,\n.fa-rmb:before,\n.fa-yen:before,\n.fa-jpy:before {\n  content: \"\\F157\";\n}\n.fa-ruble:before,\n.fa-rouble:before,\n.fa-rub:before {\n  content: \"\\F158\";\n}\n.fa-won:before,\n.fa-krw:before {\n  content: \"\\F159\";\n}\n.fa-bitcoin:before,\n.fa-btc:before {\n  content: \"\\F15A\";\n}\n.fa-file:before {\n  content: \"\\F15B\";\n}\n.fa-file-text:before {\n  content: \"\\F15C\";\n}\n.fa-sort-alpha-asc:before {\n  content: \"\\F15D\";\n}\n.fa-sort-alpha-desc:before {\n  content: \"\\F15E\";\n}\n.fa-sort-amount-asc:before {\n  content: \"\\F160\";\n}\n.fa-sort-amount-desc:before {\n  content: \"\\F161\";\n}\n.fa-sort-numeric-asc:before {\n  content: \"\\F162\";\n}\n.fa-sort-numeric-desc:before {\n  content: \"\\F163\";\n}\n.fa-thumbs-up:before {\n  content: \"\\F164\";\n}\n.fa-thumbs-down:before {\n  content: \"\\F165\";\n}\n.fa-youtube-square:before {\n  content: \"\\F166\";\n}\n.fa-youtube:before {\n  content: \"\\F167\";\n}\n.fa-xing:before {\n  content: \"\\F168\";\n}\n.fa-xing-square:before {\n  content: \"\\F169\";\n}\n.fa-youtube-play:before {\n  content: \"\\F16A\";\n}\n.fa-dropbox:before {\n  content: \"\\F16B\";\n}\n.fa-stack-overflow:before {\n  content: \"\\F16C\";\n}\n.fa-instagram:before {\n  content: \"\\F16D\";\n}\n.fa-flickr:before {\n  content: \"\\F16E\";\n}\n.fa-adn:before {\n  content: \"\\F170\";\n}\n.fa-bitbucket:before {\n  content: \"\\F171\";\n}\n.fa-bitbucket-square:before {\n  content: \"\\F172\";\n}\n.fa-tumblr:before {\n  content: \"\\F173\";\n}\n.fa-tumblr-square:before {\n  content: \"\\F174\";\n}\n.fa-long-arrow-down:before {\n  content: \"\\F175\";\n}\n.fa-long-arrow-up:before {\n  content: \"\\F176\";\n}\n.fa-long-arrow-left:before {\n  content: \"\\F177\";\n}\n.fa-long-arrow-right:before {\n  content: \"\\F178\";\n}\n.fa-apple:before {\n  content: \"\\F179\";\n}\n.fa-windows:before {\n  content: \"\\F17A\";\n}\n.fa-android:before {\n  content: \"\\F17B\";\n}\n.fa-linux:before {\n  content: \"\\F17C\";\n}\n.fa-dribbble:before {\n  content: \"\\F17D\";\n}\n.fa-skype:before {\n  content: \"\\F17E\";\n}\n.fa-foursquare:before {\n  content: \"\\F180\";\n}\n.fa-trello:before {\n  content: \"\\F181\";\n}\n.fa-female:before {\n  content: \"\\F182\";\n}\n.fa-male:before {\n  content: \"\\F183\";\n}\n.fa-gittip:before,\n.fa-gratipay:before {\n  content: \"\\F184\";\n}\n.fa-sun-o:before {\n  content: \"\\F185\";\n}\n.fa-moon-o:before {\n  content: \"\\F186\";\n}\n.fa-archive:before {\n  content: \"\\F187\";\n}\n.fa-bug:before {\n  content: \"\\F188\";\n}\n.fa-vk:before {\n  content: \"\\F189\";\n}\n.fa-weibo:before {\n  content: \"\\F18A\";\n}\n.fa-renren:before {\n  content: \"\\F18B\";\n}\n.fa-pagelines:before {\n  content: \"\\F18C\";\n}\n.fa-stack-exchange:before {\n  content: \"\\F18D\";\n}\n.fa-arrow-circle-o-right:before {\n  content: \"\\F18E\";\n}\n.fa-arrow-circle-o-left:before {\n  content: \"\\F190\";\n}\n.fa-toggle-left:before,\n.fa-caret-square-o-left:before {\n  content: \"\\F191\";\n}\n.fa-dot-circle-o:before {\n  content: \"\\F192\";\n}\n.fa-wheelchair:before {\n  content: \"\\F193\";\n}\n.fa-vimeo-square:before {\n  content: \"\\F194\";\n}\n.fa-turkish-lira:before,\n.fa-try:before {\n  content: \"\\F195\";\n}\n.fa-plus-square-o:before {\n  content: \"\\F196\";\n}\n.fa-space-shuttle:before {\n  content: \"\\F197\";\n}\n.fa-slack:before {\n  content: \"\\F198\";\n}\n.fa-envelope-square:before {\n  content: \"\\F199\";\n}\n.fa-wordpress:before {\n  content: \"\\F19A\";\n}\n.fa-openid:before {\n  content: \"\\F19B\";\n}\n.fa-institution:before,\n.fa-bank:before,\n.fa-university:before {\n  content: \"\\F19C\";\n}\n.fa-mortar-board:before,\n.fa-graduation-cap:before {\n  content: \"\\F19D\";\n}\n.fa-yahoo:before {\n  content: \"\\F19E\";\n}\n.fa-google:before {\n  content: \"\\F1A0\";\n}\n.fa-reddit:before {\n  content: \"\\F1A1\";\n}\n.fa-reddit-square:before {\n  content: \"\\F1A2\";\n}\n.fa-stumbleupon-circle:before {\n  content: \"\\F1A3\";\n}\n.fa-stumbleupon:before {\n  content: \"\\F1A4\";\n}\n.fa-delicious:before {\n  content: \"\\F1A5\";\n}\n.fa-digg:before {\n  content: \"\\F1A6\";\n}\n.fa-pied-piper:before {\n  content: \"\\F1A7\";\n}\n.fa-pied-piper-alt:before {\n  content: \"\\F1A8\";\n}\n.fa-drupal:before {\n  content: \"\\F1A9\";\n}\n.fa-joomla:before {\n  content: \"\\F1AA\";\n}\n.fa-language:before {\n  content: \"\\F1AB\";\n}\n.fa-fax:before {\n  content: \"\\F1AC\";\n}\n.fa-building:before {\n  content: \"\\F1AD\";\n}\n.fa-child:before {\n  content: \"\\F1AE\";\n}\n.fa-paw:before {\n  content: \"\\F1B0\";\n}\n.fa-spoon:before {\n  content: \"\\F1B1\";\n}\n.fa-cube:before {\n  content: \"\\F1B2\";\n}\n.fa-cubes:before {\n  content: \"\\F1B3\";\n}\n.fa-behance:before {\n  content: \"\\F1B4\";\n}\n.fa-behance-square:before {\n  content: \"\\F1B5\";\n}\n.fa-steam:before {\n  content: \"\\F1B6\";\n}\n.fa-steam-square:before {\n  content: \"\\F1B7\";\n}\n.fa-recycle:before {\n  content: \"\\F1B8\";\n}\n.fa-automobile:before,\n.fa-car:before {\n  content: \"\\F1B9\";\n}\n.fa-cab:before,\n.fa-taxi:before {\n  content: \"\\F1BA\";\n}\n.fa-tree:before {\n  content: \"\\F1BB\";\n}\n.fa-spotify:before {\n  content: \"\\F1BC\";\n}\n.fa-deviantart:before {\n  content: \"\\F1BD\";\n}\n.fa-soundcloud:before {\n  content: \"\\F1BE\";\n}\n.fa-database:before {\n  content: \"\\F1C0\";\n}\n.fa-file-pdf-o:before {\n  content: \"\\F1C1\";\n}\n.fa-file-word-o:before {\n  content: \"\\F1C2\";\n}\n.fa-file-excel-o:before {\n  content: \"\\F1C3\";\n}\n.fa-file-powerpoint-o:before {\n  content: \"\\F1C4\";\n}\n.fa-file-photo-o:before,\n.fa-file-picture-o:before,\n.fa-file-image-o:before {\n  content: \"\\F1C5\";\n}\n.fa-file-zip-o:before,\n.fa-file-archive-o:before {\n  content: \"\\F1C6\";\n}\n.fa-file-sound-o:before,\n.fa-file-audio-o:before {\n  content: \"\\F1C7\";\n}\n.fa-file-movie-o:before,\n.fa-file-video-o:before {\n  content: \"\\F1C8\";\n}\n.fa-file-code-o:before {\n  content: \"\\F1C9\";\n}\n.fa-vine:before {\n  content: \"\\F1CA\";\n}\n.fa-codepen:before {\n  content: \"\\F1CB\";\n}\n.fa-jsfiddle:before {\n  content: \"\\F1CC\";\n}\n.fa-life-bouy:before,\n.fa-life-buoy:before,\n.fa-life-saver:before,\n.fa-support:before,\n.fa-life-ring:before {\n  content: \"\\F1CD\";\n}\n.fa-circle-o-notch:before {\n  content: \"\\F1CE\";\n}\n.fa-ra:before,\n.fa-rebel:before {\n  content: \"\\F1D0\";\n}\n.fa-ge:before,\n.fa-empire:before {\n  content: \"\\F1D1\";\n}\n.fa-git-square:before {\n  content: \"\\F1D2\";\n}\n.fa-git:before {\n  content: \"\\F1D3\";\n}\n.fa-y-combinator-square:before,\n.fa-yc-square:before,\n.fa-hacker-news:before {\n  content: \"\\F1D4\";\n}\n.fa-tencent-weibo:before {\n  content: \"\\F1D5\";\n}\n.fa-qq:before {\n  content: \"\\F1D6\";\n}\n.fa-wechat:before,\n.fa-weixin:before {\n  content: \"\\F1D7\";\n}\n.fa-send:before,\n.fa-paper-plane:before {\n  content: \"\\F1D8\";\n}\n.fa-send-o:before,\n.fa-paper-plane-o:before {\n  content: \"\\F1D9\";\n}\n.fa-history:before {\n  content: \"\\F1DA\";\n}\n.fa-circle-thin:before {\n  content: \"\\F1DB\";\n}\n.fa-header:before {\n  content: \"\\F1DC\";\n}\n.fa-paragraph:before {\n  content: \"\\F1DD\";\n}\n.fa-sliders:before {\n  content: \"\\F1DE\";\n}\n.fa-share-alt:before {\n  content: \"\\F1E0\";\n}\n.fa-share-alt-square:before {\n  content: \"\\F1E1\";\n}\n.fa-bomb:before {\n  content: \"\\F1E2\";\n}\n.fa-soccer-ball-o:before,\n.fa-futbol-o:before {\n  content: \"\\F1E3\";\n}\n.fa-tty:before {\n  content: \"\\F1E4\";\n}\n.fa-binoculars:before {\n  content: \"\\F1E5\";\n}\n.fa-plug:before {\n  content: \"\\F1E6\";\n}\n.fa-slideshare:before {\n  content: \"\\F1E7\";\n}\n.fa-twitch:before {\n  content: \"\\F1E8\";\n}\n.fa-yelp:before {\n  content: \"\\F1E9\";\n}\n.fa-newspaper-o:before {\n  content: \"\\F1EA\";\n}\n.fa-wifi:before {\n  content: \"\\F1EB\";\n}\n.fa-calculator:before {\n  content: \"\\F1EC\";\n}\n.fa-paypal:before {\n  content: \"\\F1ED\";\n}\n.fa-google-wallet:before {\n  content: \"\\F1EE\";\n}\n.fa-cc-visa:before {\n  content: \"\\F1F0\";\n}\n.fa-cc-mastercard:before {\n  content: \"\\F1F1\";\n}\n.fa-cc-discover:before {\n  content: \"\\F1F2\";\n}\n.fa-cc-amex:before {\n  content: \"\\F1F3\";\n}\n.fa-cc-paypal:before {\n  content: \"\\F1F4\";\n}\n.fa-cc-stripe:before {\n  content: \"\\F1F5\";\n}\n.fa-bell-slash:before {\n  content: \"\\F1F6\";\n}\n.fa-bell-slash-o:before {\n  content: \"\\F1F7\";\n}\n.fa-trash:before {\n  content: \"\\F1F8\";\n}\n.fa-copyright:before {\n  content: \"\\F1F9\";\n}\n.fa-at:before {\n  content: \"\\F1FA\";\n}\n.fa-eyedropper:before {\n  content: \"\\F1FB\";\n}\n.fa-paint-brush:before {\n  content: \"\\F1FC\";\n}\n.fa-birthday-cake:before {\n  content: \"\\F1FD\";\n}\n.fa-area-chart:before {\n  content: \"\\F1FE\";\n}\n.fa-pie-chart:before {\n  content: \"\\F200\";\n}\n.fa-line-chart:before {\n  content: \"\\F201\";\n}\n.fa-lastfm:before {\n  content: \"\\F202\";\n}\n.fa-lastfm-square:before {\n  content: \"\\F203\";\n}\n.fa-toggle-off:before {\n  content: \"\\F204\";\n}\n.fa-toggle-on:before {\n  content: \"\\F205\";\n}\n.fa-bicycle:before {\n  content: \"\\F206\";\n}\n.fa-bus:before {\n  content: \"\\F207\";\n}\n.fa-ioxhost:before {\n  content: \"\\F208\";\n}\n.fa-angellist:before {\n  content: \"\\F209\";\n}\n.fa-cc:before {\n  content: \"\\F20A\";\n}\n.fa-shekel:before,\n.fa-sheqel:before,\n.fa-ils:before {\n  content: \"\\F20B\";\n}\n.fa-meanpath:before {\n  content: \"\\F20C\";\n}\n.fa-buysellads:before {\n  content: \"\\F20D\";\n}\n.fa-connectdevelop:before {\n  content: \"\\F20E\";\n}\n.fa-dashcube:before {\n  content: \"\\F210\";\n}\n.fa-forumbee:before {\n  content: \"\\F211\";\n}\n.fa-leanpub:before {\n  content: \"\\F212\";\n}\n.fa-sellsy:before {\n  content: \"\\F213\";\n}\n.fa-shirtsinbulk:before {\n  content: \"\\F214\";\n}\n.fa-simplybuilt:before {\n  content: \"\\F215\";\n}\n.fa-skyatlas:before {\n  content: \"\\F216\";\n}\n.fa-cart-plus:before {\n  content: \"\\F217\";\n}\n.fa-cart-arrow-down:before {\n  content: \"\\F218\";\n}\n.fa-diamond:before {\n  content: \"\\F219\";\n}\n.fa-ship:before {\n  content: \"\\F21A\";\n}\n.fa-user-secret:before {\n  content: \"\\F21B\";\n}\n.fa-motorcycle:before {\n  content: \"\\F21C\";\n}\n.fa-street-view:before {\n  content: \"\\F21D\";\n}\n.fa-heartbeat:before {\n  content: \"\\F21E\";\n}\n.fa-venus:before {\n  content: \"\\F221\";\n}\n.fa-mars:before {\n  content: \"\\F222\";\n}\n.fa-mercury:before {\n  content: \"\\F223\";\n}\n.fa-intersex:before,\n.fa-transgender:before {\n  content: \"\\F224\";\n}\n.fa-transgender-alt:before {\n  content: \"\\F225\";\n}\n.fa-venus-double:before {\n  content: \"\\F226\";\n}\n.fa-mars-double:before {\n  content: \"\\F227\";\n}\n.fa-venus-mars:before {\n  content: \"\\F228\";\n}\n.fa-mars-stroke:before {\n  content: \"\\F229\";\n}\n.fa-mars-stroke-v:before {\n  content: \"\\F22A\";\n}\n.fa-mars-stroke-h:before {\n  content: \"\\F22B\";\n}\n.fa-neuter:before {\n  content: \"\\F22C\";\n}\n.fa-genderless:before {\n  content: \"\\F22D\";\n}\n.fa-facebook-official:before {\n  content: \"\\F230\";\n}\n.fa-pinterest-p:before {\n  content: \"\\F231\";\n}\n.fa-whatsapp:before {\n  content: \"\\F232\";\n}\n.fa-server:before {\n  content: \"\\F233\";\n}\n.fa-user-plus:before {\n  content: \"\\F234\";\n}\n.fa-user-times:before {\n  content: \"\\F235\";\n}\n.fa-hotel:before,\n.fa-bed:before {\n  content: \"\\F236\";\n}\n.fa-viacoin:before {\n  content: \"\\F237\";\n}\n.fa-train:before {\n  content: \"\\F238\";\n}\n.fa-subway:before {\n  content: \"\\F239\";\n}\n.fa-medium:before {\n  content: \"\\F23A\";\n}\n.fa-yc:before,\n.fa-y-combinator:before {\n  content: \"\\F23B\";\n}\n.fa-optin-monster:before {\n  content: \"\\F23C\";\n}\n.fa-opencart:before {\n  content: \"\\F23D\";\n}\n.fa-expeditedssl:before {\n  content: \"\\F23E\";\n}\n.fa-battery-4:before,\n.fa-battery-full:before {\n  content: \"\\F240\";\n}\n.fa-battery-3:before,\n.fa-battery-three-quarters:before {\n  content: \"\\F241\";\n}\n.fa-battery-2:before,\n.fa-battery-half:before {\n  content: \"\\F242\";\n}\n.fa-battery-1:before,\n.fa-battery-quarter:before {\n  content: \"\\F243\";\n}\n.fa-battery-0:before,\n.fa-battery-empty:before {\n  content: \"\\F244\";\n}\n.fa-mouse-pointer:before {\n  content: \"\\F245\";\n}\n.fa-i-cursor:before {\n  content: \"\\F246\";\n}\n.fa-object-group:before {\n  content: \"\\F247\";\n}\n.fa-object-ungroup:before {\n  content: \"\\F248\";\n}\n.fa-sticky-note:before {\n  content: \"\\F249\";\n}\n.fa-sticky-note-o:before {\n  content: \"\\F24A\";\n}\n.fa-cc-jcb:before {\n  content: \"\\F24B\";\n}\n.fa-cc-diners-club:before {\n  content: \"\\F24C\";\n}\n.fa-clone:before {\n  content: \"\\F24D\";\n}\n.fa-balance-scale:before {\n  content: \"\\F24E\";\n}\n.fa-hourglass-o:before {\n  content: \"\\F250\";\n}\n.fa-hourglass-1:before,\n.fa-hourglass-start:before {\n  content: \"\\F251\";\n}\n.fa-hourglass-2:before,\n.fa-hourglass-half:before {\n  content: \"\\F252\";\n}\n.fa-hourglass-3:before,\n.fa-hourglass-end:before {\n  content: \"\\F253\";\n}\n.fa-hourglass:before {\n  content: \"\\F254\";\n}\n.fa-hand-grab-o:before,\n.fa-hand-rock-o:before {\n  content: \"\\F255\";\n}\n.fa-hand-stop-o:before,\n.fa-hand-paper-o:before {\n  content: \"\\F256\";\n}\n.fa-hand-scissors-o:before {\n  content: \"\\F257\";\n}\n.fa-hand-lizard-o:before {\n  content: \"\\F258\";\n}\n.fa-hand-spock-o:before {\n  content: \"\\F259\";\n}\n.fa-hand-pointer-o:before {\n  content: \"\\F25A\";\n}\n.fa-hand-peace-o:before {\n  content: \"\\F25B\";\n}\n.fa-trademark:before {\n  content: \"\\F25C\";\n}\n.fa-registered:before {\n  content: \"\\F25D\";\n}\n.fa-creative-commons:before {\n  content: \"\\F25E\";\n}\n.fa-gg:before {\n  content: \"\\F260\";\n}\n.fa-gg-circle:before {\n  content: \"\\F261\";\n}\n.fa-tripadvisor:before {\n  content: \"\\F262\";\n}\n.fa-odnoklassniki:before {\n  content: \"\\F263\";\n}\n.fa-odnoklassniki-square:before {\n  content: \"\\F264\";\n}\n.fa-get-pocket:before {\n  content: \"\\F265\";\n}\n.fa-wikipedia-w:before {\n  content: \"\\F266\";\n}\n.fa-safari:before {\n  content: \"\\F267\";\n}\n.fa-chrome:before {\n  content: \"\\F268\";\n}\n.fa-firefox:before {\n  content: \"\\F269\";\n}\n.fa-opera:before {\n  content: \"\\F26A\";\n}\n.fa-internet-explorer:before {\n  content: \"\\F26B\";\n}\n.fa-tv:before,\n.fa-television:before {\n  content: \"\\F26C\";\n}\n.fa-contao:before {\n  content: \"\\F26D\";\n}\n.fa-500px:before {\n  content: \"\\F26E\";\n}\n.fa-amazon:before {\n  content: \"\\F270\";\n}\n.fa-calendar-plus-o:before {\n  content: \"\\F271\";\n}\n.fa-calendar-minus-o:before {\n  content: \"\\F272\";\n}\n.fa-calendar-times-o:before {\n  content: \"\\F273\";\n}\n.fa-calendar-check-o:before {\n  content: \"\\F274\";\n}\n.fa-industry:before {\n  content: \"\\F275\";\n}\n.fa-map-pin:before {\n  content: \"\\F276\";\n}\n.fa-map-signs:before {\n  content: \"\\F277\";\n}\n.fa-map-o:before {\n  content: \"\\F278\";\n}\n.fa-map:before {\n  content: \"\\F279\";\n}\n.fa-commenting:before {\n  content: \"\\F27A\";\n}\n.fa-commenting-o:before {\n  content: \"\\F27B\";\n}\n.fa-houzz:before {\n  content: \"\\F27C\";\n}\n.fa-vimeo:before {\n  content: \"\\F27D\";\n}\n.fa-black-tie:before {\n  content: \"\\F27E\";\n}\n.fa-fonticons:before {\n  content: \"\\F280\";\n}\n.fa-reddit-alien:before {\n  content: \"\\F281\";\n}\n.fa-edge:before {\n  content: \"\\F282\";\n}\n.fa-credit-card-alt:before {\n  content: \"\\F283\";\n}\n.fa-codiepie:before {\n  content: \"\\F284\";\n}\n.fa-modx:before {\n  content: \"\\F285\";\n}\n.fa-fort-awesome:before {\n  content: \"\\F286\";\n}\n.fa-usb:before {\n  content: \"\\F287\";\n}\n.fa-product-hunt:before {\n  content: \"\\F288\";\n}\n.fa-mixcloud:before {\n  content: \"\\F289\";\n}\n.fa-scribd:before {\n  content: \"\\F28A\";\n}\n.fa-pause-circle:before {\n  content: \"\\F28B\";\n}\n.fa-pause-circle-o:before {\n  content: \"\\F28C\";\n}\n.fa-stop-circle:before {\n  content: \"\\F28D\";\n}\n.fa-stop-circle-o:before {\n  content: \"\\F28E\";\n}\n.fa-shopping-bag:before {\n  content: \"\\F290\";\n}\n.fa-shopping-basket:before {\n  content: \"\\F291\";\n}\n.fa-hashtag:before {\n  content: \"\\F292\";\n}\n.fa-bluetooth:before {\n  content: \"\\F293\";\n}\n.fa-bluetooth-b:before {\n  content: \"\\F294\";\n}\n.fa-percent:before {\n  content: \"\\F295\";\n}\n.fa-gitlab:before {\n  content: \"\\F296\";\n}\n.fa-wpbeginner:before {\n  content: \"\\F297\";\n}\n.fa-wpforms:before {\n  content: \"\\F298\";\n}\n.fa-envira:before {\n  content: \"\\F299\";\n}\n.fa-universal-access:before {\n  content: \"\\F29A\";\n}\n.fa-wheelchair-alt:before {\n  content: \"\\F29B\";\n}\n.fa-question-circle-o:before {\n  content: \"\\F29C\";\n}\n.fa-blind:before {\n  content: \"\\F29D\";\n}\n.fa-audio-description:before {\n  content: \"\\F29E\";\n}\n.fa-volume-control-phone:before {\n  content: \"\\F2A0\";\n}\n.fa-braille:before {\n  content: \"\\F2A1\";\n}\n.fa-assistive-listening-systems:before {\n  content: \"\\F2A2\";\n}\n.fa-asl-interpreting:before,\n.fa-american-sign-language-interpreting:before {\n  content: \"\\F2A3\";\n}\n.fa-deafness:before,\n.fa-hard-of-hearing:before,\n.fa-deaf:before {\n  content: \"\\F2A4\";\n}\n.fa-glide:before {\n  content: \"\\F2A5\";\n}\n.fa-glide-g:before {\n  content: \"\\F2A6\";\n}\n.fa-signing:before,\n.fa-sign-language:before {\n  content: \"\\F2A7\";\n}\n.fa-low-vision:before {\n  content: \"\\F2A8\";\n}\n.fa-viadeo:before {\n  content: \"\\F2A9\";\n}\n.fa-viadeo-square:before {\n  content: \"\\F2AA\";\n}\n.fa-snapchat:before {\n  content: \"\\F2AB\";\n}\n.fa-snapchat-ghost:before {\n  content: \"\\F2AC\";\n}\n.fa-snapchat-square:before {\n  content: \"\\F2AD\";\n}\n.sr-only {\n  position: absolute;\n  width: 1px;\n  height: 1px;\n  padding: 0;\n  margin: -1px;\n  overflow: hidden;\n  clip: rect(0, 0, 0, 0);\n  border: 0;\n}\n.sr-only-focusable:active,\n.sr-only-focusable:focus {\n  position: static;\n  width: auto;\n  height: auto;\n  margin: 0;\n  overflow: visible;\n  clip: auto;\n}\n", ""]);

	// exports


/***/ },

/***/ 73:
/***/ function(module, exports) {

	/*
		MIT License http://www.opensource.org/licenses/mit-license.php
		Author Tobias Koppers @sokra
	*/
	// css base code, injected by the css-loader
	module.exports = function() {
		var list = [];

		// return the list of modules as css string
		list.toString = function toString() {
			var result = [];
			for(var i = 0; i < this.length; i++) {
				var item = this[i];
				if(item[2]) {
					result.push("@media " + item[2] + "{" + item[1] + "}");
				} else {
					result.push(item[1]);
				}
			}
			return result.join("");
		};

		// import a list of modules into the list
		list.i = function(modules, mediaQuery) {
			if(typeof modules === "string")
				modules = [[null, modules, ""]];
			var alreadyImportedModules = {};
			for(var i = 0; i < this.length; i++) {
				var id = this[i][0];
				if(typeof id === "number")
					alreadyImportedModules[id] = true;
			}
			for(i = 0; i < modules.length; i++) {
				var item = modules[i];
				// skip already imported module
				// this implementation is not 100% perfect for weird media query combinations
				//  when a module is imported multiple times with different media queries.
				//  I hope this will never occur (Hey this way we have smaller bundles)
				if(typeof item[0] !== "number" || !alreadyImportedModules[item[0]]) {
					if(mediaQuery && !item[2]) {
						item[2] = mediaQuery;
					} else if(mediaQuery) {
						item[2] = "(" + item[2] + ") and (" + mediaQuery + ")";
					}
					list.push(item);
				}
			}
		};
		return list;
	};


/***/ },

/***/ 74:
/***/ function(module, exports, __webpack_require__) {

	module.exports = __webpack_require__.p + "fontawesome-webfont.eot";

/***/ },

/***/ 75:
/***/ function(module, exports, __webpack_require__) {

	module.exports = __webpack_require__.p + "fontawesome-webfont.eot";

/***/ },

/***/ 76:
/***/ function(module, exports) {

	module.exports = "data:application/octet-stream;base64,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"

/***/ },

/***/ 77:
/***/ function(module, exports) {

	module.exports = "data:application/font-woff;base64,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"

/***/ },

/***/ 78:
/***/ function(module, exports, __webpack_require__) {

	module.exports = __webpack_require__.p + "fontawesome-webfont.ttf";

/***/ },

/***/ 79:
/***/ function(module, exports, __webpack_require__) {

	module.exports = __webpack_require__.p + "fontawesome-webfont.svg";

/***/ },

/***/ 80:
/***/ function(module, exports, __webpack_require__) {

	/*
		MIT License http://www.opensource.org/licenses/mit-license.php
		Author Tobias Koppers @sokra
	*/
	var stylesInDom = {},
		memoize = function(fn) {
			var memo;
			return function () {
				if (typeof memo === "undefined") memo = fn.apply(this, arguments);
				return memo;
			};
		},
		isOldIE = memoize(function() {
			return /msie [6-9]\b/.test(window.navigator.userAgent.toLowerCase());
		}),
		getHeadElement = memoize(function () {
			return document.head || document.getElementsByTagName("head")[0];
		}),
		singletonElement = null,
		singletonCounter = 0,
		styleElementsInsertedAtTop = [];

	module.exports = function(list, options) {
		if(false) {
			if(typeof document !== "object") throw new Error("The style-loader cannot be used in a non-browser environment");
		}

		options = options || {};
		// Force single-tag solution on IE6-9, which has a hard limit on the # of <style>
		// tags it will allow on a page
		if (typeof options.singleton === "undefined") options.singleton = isOldIE();

		// By default, add <style> tags to the bottom of <head>.
		if (typeof options.insertAt === "undefined") options.insertAt = "bottom";

		var styles = listToStyles(list);
		addStylesToDom(styles, options);

		return function update(newList) {
			var mayRemove = [];
			for(var i = 0; i < styles.length; i++) {
				var item = styles[i];
				var domStyle = stylesInDom[item.id];
				domStyle.refs--;
				mayRemove.push(domStyle);
			}
			if(newList) {
				var newStyles = listToStyles(newList);
				addStylesToDom(newStyles, options);
			}
			for(var i = 0; i < mayRemove.length; i++) {
				var domStyle = mayRemove[i];
				if(domStyle.refs === 0) {
					for(var j = 0; j < domStyle.parts.length; j++)
						domStyle.parts[j]();
					delete stylesInDom[domStyle.id];
				}
			}
		};
	}

	function addStylesToDom(styles, options) {
		for(var i = 0; i < styles.length; i++) {
			var item = styles[i];
			var domStyle = stylesInDom[item.id];
			if(domStyle) {
				domStyle.refs++;
				for(var j = 0; j < domStyle.parts.length; j++) {
					domStyle.parts[j](item.parts[j]);
				}
				for(; j < item.parts.length; j++) {
					domStyle.parts.push(addStyle(item.parts[j], options));
				}
			} else {
				var parts = [];
				for(var j = 0; j < item.parts.length; j++) {
					parts.push(addStyle(item.parts[j], options));
				}
				stylesInDom[item.id] = {id: item.id, refs: 1, parts: parts};
			}
		}
	}

	function listToStyles(list) {
		var styles = [];
		var newStyles = {};
		for(var i = 0; i < list.length; i++) {
			var item = list[i];
			var id = item[0];
			var css = item[1];
			var media = item[2];
			var sourceMap = item[3];
			var part = {css: css, media: media, sourceMap: sourceMap};
			if(!newStyles[id])
				styles.push(newStyles[id] = {id: id, parts: [part]});
			else
				newStyles[id].parts.push(part);
		}
		return styles;
	}

	function insertStyleElement(options, styleElement) {
		var head = getHeadElement();
		var lastStyleElementInsertedAtTop = styleElementsInsertedAtTop[styleElementsInsertedAtTop.length - 1];
		if (options.insertAt === "top") {
			if(!lastStyleElementInsertedAtTop) {
				head.insertBefore(styleElement, head.firstChild);
			} else if(lastStyleElementInsertedAtTop.nextSibling) {
				head.insertBefore(styleElement, lastStyleElementInsertedAtTop.nextSibling);
			} else {
				head.appendChild(styleElement);
			}
			styleElementsInsertedAtTop.push(styleElement);
		} else if (options.insertAt === "bottom") {
			head.appendChild(styleElement);
		} else {
			throw new Error("Invalid value for parameter 'insertAt'. Must be 'top' or 'bottom'.");
		}
	}

	function removeStyleElement(styleElement) {
		styleElement.parentNode.removeChild(styleElement);
		var idx = styleElementsInsertedAtTop.indexOf(styleElement);
		if(idx >= 0) {
			styleElementsInsertedAtTop.splice(idx, 1);
		}
	}

	function createStyleElement(options) {
		var styleElement = document.createElement("style");
		styleElement.type = "text/css";
		insertStyleElement(options, styleElement);
		return styleElement;
	}

	function createLinkElement(options) {
		var linkElement = document.createElement("link");
		linkElement.rel = "stylesheet";
		insertStyleElement(options, linkElement);
		return linkElement;
	}

	function addStyle(obj, options) {
		var styleElement, update, remove;

		if (options.singleton) {
			var styleIndex = singletonCounter++;
			styleElement = singletonElement || (singletonElement = createStyleElement(options));
			update = applyToSingletonTag.bind(null, styleElement, styleIndex, false);
			remove = applyToSingletonTag.bind(null, styleElement, styleIndex, true);
		} else if(obj.sourceMap &&
			typeof URL === "function" &&
			typeof URL.createObjectURL === "function" &&
			typeof URL.revokeObjectURL === "function" &&
			typeof Blob === "function" &&
			typeof btoa === "function") {
			styleElement = createLinkElement(options);
			update = updateLink.bind(null, styleElement);
			remove = function() {
				removeStyleElement(styleElement);
				if(styleElement.href)
					URL.revokeObjectURL(styleElement.href);
			};
		} else {
			styleElement = createStyleElement(options);
			update = applyToTag.bind(null, styleElement);
			remove = function() {
				removeStyleElement(styleElement);
			};
		}

		update(obj);

		return function updateStyle(newObj) {
			if(newObj) {
				if(newObj.css === obj.css && newObj.media === obj.media && newObj.sourceMap === obj.sourceMap)
					return;
				update(obj = newObj);
			} else {
				remove();
			}
		};
	}

	var replaceText = (function () {
		var textStore = [];

		return function (index, replacement) {
			textStore[index] = replacement;
			return textStore.filter(Boolean).join('\n');
		};
	})();

	function applyToSingletonTag(styleElement, index, remove, obj) {
		var css = remove ? "" : obj.css;

		if (styleElement.styleSheet) {
			styleElement.styleSheet.cssText = replaceText(index, css);
		} else {
			var cssNode = document.createTextNode(css);
			var childNodes = styleElement.childNodes;
			if (childNodes[index]) styleElement.removeChild(childNodes[index]);
			if (childNodes.length) {
				styleElement.insertBefore(cssNode, childNodes[index]);
			} else {
				styleElement.appendChild(cssNode);
			}
		}
	}

	function applyToTag(styleElement, obj) {
		var css = obj.css;
		var media = obj.media;

		if(media) {
			styleElement.setAttribute("media", media)
		}

		if(styleElement.styleSheet) {
			styleElement.styleSheet.cssText = css;
		} else {
			while(styleElement.firstChild) {
				styleElement.removeChild(styleElement.firstChild);
			}
			styleElement.appendChild(document.createTextNode(css));
		}
	}

	function updateLink(linkElement, obj) {
		var css = obj.css;
		var sourceMap = obj.sourceMap;

		if(sourceMap) {
			// http://stackoverflow.com/a/26603875
			css += "\n/*# sourceMappingURL=data:application/json;base64," + btoa(unescape(encodeURIComponent(JSON.stringify(sourceMap)))) + " */";
		}

		var blob = new Blob([css], { type: "text/css" });

		var oldSrc = linkElement.href;

		linkElement.href = URL.createObjectURL(blob);

		if(oldSrc)
			URL.revokeObjectURL(oldSrc);
	}


/***/ },

/***/ 81:
/***/ function(module, exports, __webpack_require__) {

	/* WEBPACK VAR INJECTION */(function(Vue) {
	// Enable debugging
	Vue.config.debug = true

	/* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__(82)))

/***/ },

/***/ 82:
/***/ function(module, exports, __webpack_require__) {

	/* WEBPACK VAR INJECTION */(function(global, process, Vue) {/*!
	 * Vue.js v1.0.21
	 * (c) 2016 Evan You
	 * Released under the MIT License.
	 */
	'use strict';

	function set(obj, key, val) {
	  if (hasOwn(obj, key)) {
	    obj[key] = val;
	    return;
	  }
	  if (obj._isVue) {
	    set(obj._data, key, val);
	    return;
	  }
	  var ob = obj.__ob__;
	  if (!ob) {
	    obj[key] = val;
	    return;
	  }
	  ob.convert(key, val);
	  ob.dep.notify();
	  if (ob.vms) {
	    var i = ob.vms.length;
	    while (i--) {
	      var vm = ob.vms[i];
	      vm._proxy(key);
	      vm._digest();
	    }
	  }
	  return val;
	}

	/**
	 * Delete a property and trigger change if necessary.
	 *
	 * @param {Object} obj
	 * @param {String} key
	 */

	function del(obj, key) {
	  if (!hasOwn(obj, key)) {
	    return;
	  }
	  delete obj[key];
	  var ob = obj.__ob__;
	  if (!ob) {
	    return;
	  }
	  ob.dep.notify();
	  if (ob.vms) {
	    var i = ob.vms.length;
	    while (i--) {
	      var vm = ob.vms[i];
	      vm._unproxy(key);
	      vm._digest();
	    }
	  }
	}

	var hasOwnProperty = Object.prototype.hasOwnProperty;
	/**
	 * Check whether the object has the property.
	 *
	 * @param {Object} obj
	 * @param {String} key
	 * @return {Boolean}
	 */

	function hasOwn(obj, key) {
	  return hasOwnProperty.call(obj, key);
	}

	/**
	 * Check if an expression is a literal value.
	 *
	 * @param {String} exp
	 * @return {Boolean}
	 */

	var literalValueRE = /^\s?(true|false|-?[\d\.]+|'[^']*'|"[^"]*")\s?$/;

	function isLiteral(exp) {
	  return literalValueRE.test(exp);
	}

	/**
	 * Check if a string starts with $ or _
	 *
	 * @param {String} str
	 * @return {Boolean}
	 */

	function isReserved(str) {
	  var c = (str + '').charCodeAt(0);
	  return c === 0x24 || c === 0x5F;
	}

	/**
	 * Guard text output, make sure undefined outputs
	 * empty string
	 *
	 * @param {*} value
	 * @return {String}
	 */

	function _toString(value) {
	  return value == null ? '' : value.toString();
	}

	/**
	 * Check and convert possible numeric strings to numbers
	 * before setting back to data
	 *
	 * @param {*} value
	 * @return {*|Number}
	 */

	function toNumber(value) {
	  if (typeof value !== 'string') {
	    return value;
	  } else {
	    var parsed = Number(value);
	    return isNaN(parsed) ? value : parsed;
	  }
	}

	/**
	 * Convert string boolean literals into real booleans.
	 *
	 * @param {*} value
	 * @return {*|Boolean}
	 */

	function toBoolean(value) {
	  return value === 'true' ? true : value === 'false' ? false : value;
	}

	/**
	 * Strip quotes from a string
	 *
	 * @param {String} str
	 * @return {String | false}
	 */

	function stripQuotes(str) {
	  var a = str.charCodeAt(0);
	  var b = str.charCodeAt(str.length - 1);
	  return a === b && (a === 0x22 || a === 0x27) ? str.slice(1, -1) : str;
	}

	/**
	 * Camelize a hyphen-delmited string.
	 *
	 * @param {String} str
	 * @return {String}
	 */

	var camelizeRE = /-(\w)/g;

	function camelize(str) {
	  return str.replace(camelizeRE, toUpper);
	}

	function toUpper(_, c) {
	  return c ? c.toUpperCase() : '';
	}

	/**
	 * Hyphenate a camelCase string.
	 *
	 * @param {String} str
	 * @return {String}
	 */

	var hyphenateRE = /([a-z\d])([A-Z])/g;

	function hyphenate(str) {
	  return str.replace(hyphenateRE, '$1-$2').toLowerCase();
	}

	/**
	 * Converts hyphen/underscore/slash delimitered names into
	 * camelized classNames.
	 *
	 * e.g. my-component => MyComponent
	 *      some_else    => SomeElse
	 *      some/comp    => SomeComp
	 *
	 * @param {String} str
	 * @return {String}
	 */

	var classifyRE = /(?:^|[-_\/])(\w)/g;

	function classify(str) {
	  return str.replace(classifyRE, toUpper);
	}

	/**
	 * Simple bind, faster than native
	 *
	 * @param {Function} fn
	 * @param {Object} ctx
	 * @return {Function}
	 */

	function bind(fn, ctx) {
	  return function (a) {
	    var l = arguments.length;
	    return l ? l > 1 ? fn.apply(ctx, arguments) : fn.call(ctx, a) : fn.call(ctx);
	  };
	}

	/**
	 * Convert an Array-like object to a real Array.
	 *
	 * @param {Array-like} list
	 * @param {Number} [start] - start index
	 * @return {Array}
	 */

	function toArray(list, start) {
	  start = start || 0;
	  var i = list.length - start;
	  var ret = new Array(i);
	  while (i--) {
	    ret[i] = list[i + start];
	  }
	  return ret;
	}

	/**
	 * Mix properties into target object.
	 *
	 * @param {Object} to
	 * @param {Object} from
	 */

	function extend(to, from) {
	  var keys = Object.keys(from);
	  var i = keys.length;
	  while (i--) {
	    to[keys[i]] = from[keys[i]];
	  }
	  return to;
	}

	/**
	 * Quick object check - this is primarily used to tell
	 * Objects from primitive values when we know the value
	 * is a JSON-compliant type.
	 *
	 * @param {*} obj
	 * @return {Boolean}
	 */

	function isObject(obj) {
	  return obj !== null && typeof obj === 'object';
	}

	/**
	 * Strict object type check. Only returns true
	 * for plain JavaScript objects.
	 *
	 * @param {*} obj
	 * @return {Boolean}
	 */

	var toString = Object.prototype.toString;
	var OBJECT_STRING = '[object Object]';

	function isPlainObject(obj) {
	  return toString.call(obj) === OBJECT_STRING;
	}

	/**
	 * Array type check.
	 *
	 * @param {*} obj
	 * @return {Boolean}
	 */

	var isArray = Array.isArray;

	/**
	 * Define a property.
	 *
	 * @param {Object} obj
	 * @param {String} key
	 * @param {*} val
	 * @param {Boolean} [enumerable]
	 */

	function def(obj, key, val, enumerable) {
	  Object.defineProperty(obj, key, {
	    value: val,
	    enumerable: !!enumerable,
	    writable: true,
	    configurable: true
	  });
	}

	/**
	 * Debounce a function so it only gets called after the
	 * input stops arriving after the given wait period.
	 *
	 * @param {Function} func
	 * @param {Number} wait
	 * @return {Function} - the debounced function
	 */

	function _debounce(func, wait) {
	  var timeout, args, context, timestamp, result;
	  var later = function later() {
	    var last = Date.now() - timestamp;
	    if (last < wait && last >= 0) {
	      timeout = setTimeout(later, wait - last);
	    } else {
	      timeout = null;
	      result = func.apply(context, args);
	      if (!timeout) context = args = null;
	    }
	  };
	  return function () {
	    context = this;
	    args = arguments;
	    timestamp = Date.now();
	    if (!timeout) {
	      timeout = setTimeout(later, wait);
	    }
	    return result;
	  };
	}

	/**
	 * Manual indexOf because it's slightly faster than
	 * native.
	 *
	 * @param {Array} arr
	 * @param {*} obj
	 */

	function indexOf(arr, obj) {
	  var i = arr.length;
	  while (i--) {
	    if (arr[i] === obj) return i;
	  }
	  return -1;
	}

	/**
	 * Make a cancellable version of an async callback.
	 *
	 * @param {Function} fn
	 * @return {Function}
	 */

	function cancellable(fn) {
	  var cb = function cb() {
	    if (!cb.cancelled) {
	      return fn.apply(this, arguments);
	    }
	  };
	  cb.cancel = function () {
	    cb.cancelled = true;
	  };
	  return cb;
	}

	/**
	 * Check if two values are loosely equal - that is,
	 * if they are plain objects, do they have the same shape?
	 *
	 * @param {*} a
	 * @param {*} b
	 * @return {Boolean}
	 */

	function looseEqual(a, b) {
	  /* eslint-disable eqeqeq */
	  return a == b || (isObject(a) && isObject(b) ? JSON.stringify(a) === JSON.stringify(b) : false);
	  /* eslint-enable eqeqeq */
	}

	var hasProto = ('__proto__' in {});

	// Browser environment sniffing
	var inBrowser = typeof window !== 'undefined' && Object.prototype.toString.call(window) !== '[object Object]';

	// detect devtools
	var devtools = inBrowser && window.__VUE_DEVTOOLS_GLOBAL_HOOK__;

	// UA sniffing for working around browser-specific quirks
	var UA = inBrowser && window.navigator.userAgent.toLowerCase();
	var isIE9 = UA && UA.indexOf('msie 9.0') > 0;
	var isAndroid = UA && UA.indexOf('android') > 0;

	var transitionProp = undefined;
	var transitionEndEvent = undefined;
	var animationProp = undefined;
	var animationEndEvent = undefined;

	// Transition property/event sniffing
	if (inBrowser && !isIE9) {
	  var isWebkitTrans = window.ontransitionend === undefined && window.onwebkittransitionend !== undefined;
	  var isWebkitAnim = window.onanimationend === undefined && window.onwebkitanimationend !== undefined;
	  transitionProp = isWebkitTrans ? 'WebkitTransition' : 'transition';
	  transitionEndEvent = isWebkitTrans ? 'webkitTransitionEnd' : 'transitionend';
	  animationProp = isWebkitAnim ? 'WebkitAnimation' : 'animation';
	  animationEndEvent = isWebkitAnim ? 'webkitAnimationEnd' : 'animationend';
	}

	/**
	 * Defer a task to execute it asynchronously. Ideally this
	 * should be executed as a microtask, so we leverage
	 * MutationObserver if it's available, and fallback to
	 * setTimeout(0).
	 *
	 * @param {Function} cb
	 * @param {Object} ctx
	 */

	var nextTick = (function () {
	  var callbacks = [];
	  var pending = false;
	  var timerFunc;
	  function nextTickHandler() {
	    pending = false;
	    var copies = callbacks.slice(0);
	    callbacks = [];
	    for (var i = 0; i < copies.length; i++) {
	      copies[i]();
	    }
	  }

	  /* istanbul ignore if */
	  if (typeof MutationObserver !== 'undefined') {
	    var counter = 1;
	    var observer = new MutationObserver(nextTickHandler);
	    var textNode = document.createTextNode(counter);
	    observer.observe(textNode, {
	      characterData: true
	    });
	    timerFunc = function () {
	      counter = (counter + 1) % 2;
	      textNode.data = counter;
	    };
	  } else {
	    // webpack attempts to inject a shim for setImmediate
	    // if it is used as a global, so we have to work around that to
	    // avoid bundling unnecessary code.
	    var context = inBrowser ? window : typeof global !== 'undefined' ? global : {};
	    timerFunc = context.setImmediate || setTimeout;
	  }
	  return function (cb, ctx) {
	    var func = ctx ? function () {
	      cb.call(ctx);
	    } : cb;
	    callbacks.push(func);
	    if (pending) return;
	    pending = true;
	    timerFunc(nextTickHandler, 0);
	  };
	})();

	function Cache(limit) {
	  this.size = 0;
	  this.limit = limit;
	  this.head = this.tail = undefined;
	  this._keymap = Object.create(null);
	}

	var p = Cache.prototype;

	/**
	 * Put <value> into the cache associated with <key>.
	 * Returns the entry which was removed to make room for
	 * the new entry. Otherwise undefined is returned.
	 * (i.e. if there was enough room already).
	 *
	 * @param {String} key
	 * @param {*} value
	 * @return {Entry|undefined}
	 */

	p.put = function (key, value) {
	  var removed;
	  if (this.size === this.limit) {
	    removed = this.shift();
	  }

	  var entry = this.get(key, true);
	  if (!entry) {
	    entry = {
	      key: key
	    };
	    this._keymap[key] = entry;
	    if (this.tail) {
	      this.tail.newer = entry;
	      entry.older = this.tail;
	    } else {
	      this.head = entry;
	    }
	    this.tail = entry;
	    this.size++;
	  }
	  entry.value = value;

	  return removed;
	};

	/**
	 * Purge the least recently used (oldest) entry from the
	 * cache. Returns the removed entry or undefined if the
	 * cache was empty.
	 */

	p.shift = function () {
	  var entry = this.head;
	  if (entry) {
	    this.head = this.head.newer;
	    this.head.older = undefined;
	    entry.newer = entry.older = undefined;
	    this._keymap[entry.key] = undefined;
	    this.size--;
	  }
	  return entry;
	};

	/**
	 * Get and register recent use of <key>. Returns the value
	 * associated with <key> or undefined if not in cache.
	 *
	 * @param {String} key
	 * @param {Boolean} returnEntry
	 * @return {Entry|*}
	 */

	p.get = function (key, returnEntry) {
	  var entry = this._keymap[key];
	  if (entry === undefined) return;
	  if (entry === this.tail) {
	    return returnEntry ? entry : entry.value;
	  }
	  // HEAD--------------TAIL
	  //   <.older   .newer>
	  //  <--- add direction --
	  //   A  B  C  <D>  E
	  if (entry.newer) {
	    if (entry === this.head) {
	      this.head = entry.newer;
	    }
	    entry.newer.older = entry.older; // C <-- E.
	  }
	  if (entry.older) {
	    entry.older.newer = entry.newer; // C. --> E
	  }
	  entry.newer = undefined; // D --x
	  entry.older = this.tail; // D. --> E
	  if (this.tail) {
	    this.tail.newer = entry; // E. <-- D
	  }
	  this.tail = entry;
	  return returnEntry ? entry : entry.value;
	};

	var cache$1 = new Cache(1000);
	var filterTokenRE = /[^\s'"]+|'[^']*'|"[^"]*"/g;
	var reservedArgRE = /^in$|^-?\d+/;

	/**
	 * Parser state
	 */

	var str;
	var dir;
	var c;
	var prev;
	var i;
	var l;
	var lastFilterIndex;
	var inSingle;
	var inDouble;
	var curly;
	var square;
	var paren;
	/**
	 * Push a filter to the current directive object
	 */

	function pushFilter() {
	  var exp = str.slice(lastFilterIndex, i).trim();
	  var filter;
	  if (exp) {
	    filter = {};
	    var tokens = exp.match(filterTokenRE);
	    filter.name = tokens[0];
	    if (tokens.length > 1) {
	      filter.args = tokens.slice(1).map(processFilterArg);
	    }
	  }
	  if (filter) {
	    (dir.filters = dir.filters || []).push(filter);
	  }
	  lastFilterIndex = i + 1;
	}

	/**
	 * Check if an argument is dynamic and strip quotes.
	 *
	 * @param {String} arg
	 * @return {Object}
	 */

	function processFilterArg(arg) {
	  if (reservedArgRE.test(arg)) {
	    return {
	      value: toNumber(arg),
	      dynamic: false
	    };
	  } else {
	    var stripped = stripQuotes(arg);
	    var dynamic = stripped === arg;
	    return {
	      value: dynamic ? arg : stripped,
	      dynamic: dynamic
	    };
	  }
	}

	/**
	 * Parse a directive value and extract the expression
	 * and its filters into a descriptor.
	 *
	 * Example:
	 *
	 * "a + 1 | uppercase" will yield:
	 * {
	 *   expression: 'a + 1',
	 *   filters: [
	 *     { name: 'uppercase', args: null }
	 *   ]
	 * }
	 *
	 * @param {String} s
	 * @return {Object}
	 */

	function parseDirective(s) {
	  var hit = cache$1.get(s);
	  if (hit) {
	    return hit;
	  }

	  // reset parser state
	  str = s;
	  inSingle = inDouble = false;
	  curly = square = paren = 0;
	  lastFilterIndex = 0;
	  dir = {};

	  for (i = 0, l = str.length; i < l; i++) {
	    prev = c;
	    c = str.charCodeAt(i);
	    if (inSingle) {
	      // check single quote
	      if (c === 0x27 && prev !== 0x5C) inSingle = !inSingle;
	    } else if (inDouble) {
	      // check double quote
	      if (c === 0x22 && prev !== 0x5C) inDouble = !inDouble;
	    } else if (c === 0x7C && // pipe
	    str.charCodeAt(i + 1) !== 0x7C && str.charCodeAt(i - 1) !== 0x7C) {
	      if (dir.expression == null) {
	        // first filter, end of expression
	        lastFilterIndex = i + 1;
	        dir.expression = str.slice(0, i).trim();
	      } else {
	        // already has filter
	        pushFilter();
	      }
	    } else {
	      switch (c) {
	        case 0x22:
	          inDouble = true;break; // "
	        case 0x27:
	          inSingle = true;break; // '
	        case 0x28:
	          paren++;break; // (
	        case 0x29:
	          paren--;break; // )
	        case 0x5B:
	          square++;break; // [
	        case 0x5D:
	          square--;break; // ]
	        case 0x7B:
	          curly++;break; // {
	        case 0x7D:
	          curly--;break; // }
	      }
	    }
	  }

	  if (dir.expression == null) {
	    dir.expression = str.slice(0, i).trim();
	  } else if (lastFilterIndex !== 0) {
	    pushFilter();
	  }

	  cache$1.put(s, dir);
	  return dir;
	}

	var directive = Object.freeze({
	  parseDirective: parseDirective
	});

	var regexEscapeRE = /[-.*+?^${}()|[\]\/\\]/g;
	var cache = undefined;
	var tagRE = undefined;
	var htmlRE = undefined;
	/**
	 * Escape a string so it can be used in a RegExp
	 * constructor.
	 *
	 * @param {String} str
	 */

	function escapeRegex(str) {
	  return str.replace(regexEscapeRE, '\\$&');
	}

	function compileRegex() {
	  var open = escapeRegex(config.delimiters[0]);
	  var close = escapeRegex(config.delimiters[1]);
	  var unsafeOpen = escapeRegex(config.unsafeDelimiters[0]);
	  var unsafeClose = escapeRegex(config.unsafeDelimiters[1]);
	  tagRE = new RegExp(unsafeOpen + '((?:.|\\n)+?)' + unsafeClose + '|' + open + '((?:.|\\n)+?)' + close, 'g');
	  htmlRE = new RegExp('^' + unsafeOpen + '.*' + unsafeClose + '$');
	  // reset cache
	  cache = new Cache(1000);
	}

	/**
	 * Parse a template text string into an array of tokens.
	 *
	 * @param {String} text
	 * @return {Array<Object> | null}
	 *               - {String} type
	 *               - {String} value
	 *               - {Boolean} [html]
	 *               - {Boolean} [oneTime]
	 */

	function parseText(text) {
	  if (!cache) {
	    compileRegex();
	  }
	  var hit = cache.get(text);
	  if (hit) {
	    return hit;
	  }
	  if (!tagRE.test(text)) {
	    return null;
	  }
	  var tokens = [];
	  var lastIndex = tagRE.lastIndex = 0;
	  var match, index, html, value, first, oneTime;
	  /* eslint-disable no-cond-assign */
	  while (match = tagRE.exec(text)) {
	    /* eslint-enable no-cond-assign */
	    index = match.index;
	    // push text token
	    if (index > lastIndex) {
	      tokens.push({
	        value: text.slice(lastIndex, index)
	      });
	    }
	    // tag token
	    html = htmlRE.test(match[0]);
	    value = html ? match[1] : match[2];
	    first = value.charCodeAt(0);
	    oneTime = first === 42; // *
	    value = oneTime ? value.slice(1) : value;
	    tokens.push({
	      tag: true,
	      value: value.trim(),
	      html: html,
	      oneTime: oneTime
	    });
	    lastIndex = index + match[0].length;
	  }
	  if (lastIndex < text.length) {
	    tokens.push({
	      value: text.slice(lastIndex)
	    });
	  }
	  cache.put(text, tokens);
	  return tokens;
	}

	/**
	 * Format a list of tokens into an expression.
	 * e.g. tokens parsed from 'a {{b}} c' can be serialized
	 * into one single expression as '"a " + b + " c"'.
	 *
	 * @param {Array} tokens
	 * @param {Vue} [vm]
	 * @return {String}
	 */

	function tokensToExp(tokens, vm) {
	  if (tokens.length > 1) {
	    return tokens.map(function (token) {
	      return formatToken(token, vm);
	    }).join('+');
	  } else {
	    return formatToken(tokens[0], vm, true);
	  }
	}

	/**
	 * Format a single token.
	 *
	 * @param {Object} token
	 * @param {Vue} [vm]
	 * @param {Boolean} [single]
	 * @return {String}
	 */

	function formatToken(token, vm, single) {
	  return token.tag ? token.oneTime && vm ? '"' + vm.$eval(token.value) + '"' : inlineFilters(token.value, single) : '"' + token.value + '"';
	}

	/**
	 * For an attribute with multiple interpolation tags,
	 * e.g. attr="some-{{thing | filter}}", in order to combine
	 * the whole thing into a single watchable expression, we
	 * have to inline those filters. This function does exactly
	 * that. This is a bit hacky but it avoids heavy changes
	 * to directive parser and watcher mechanism.
	 *
	 * @param {String} exp
	 * @param {Boolean} single
	 * @return {String}
	 */

	var filterRE = /[^|]\|[^|]/;
	function inlineFilters(exp, single) {
	  if (!filterRE.test(exp)) {
	    return single ? exp : '(' + exp + ')';
	  } else {
	    var dir = parseDirective(exp);
	    if (!dir.filters) {
	      return '(' + exp + ')';
	    } else {
	      return 'this._applyFilters(' + dir.expression + // value
	      ',null,' + // oldValue (null for read)
	      JSON.stringify(dir.filters) + // filter descriptors
	      ',false)'; // write?
	    }
	  }
	}

	var text = Object.freeze({
	  compileRegex: compileRegex,
	  parseText: parseText,
	  tokensToExp: tokensToExp
	});

	var delimiters = ['{{', '}}'];
	var unsafeDelimiters = ['{{{', '}}}'];

	var config = Object.defineProperties({

	  /**
	   * Whether to print debug messages.
	   * Also enables stack trace for warnings.
	   *
	   * @type {Boolean}
	   */

	  debug: false,

	  /**
	   * Whether to suppress warnings.
	   *
	   * @type {Boolean}
	   */

	  silent: false,

	  /**
	   * Whether to use async rendering.
	   */

	  async: true,

	  /**
	   * Whether to warn against errors caught when evaluating
	   * expressions.
	   */

	  warnExpressionErrors: true,

	  /**
	   * Whether to allow devtools inspection.
	   * Disabled by default in production builds.
	   */

	  devtools: process.env.NODE_ENV !== 'production',

	  /**
	   * Internal flag to indicate the delimiters have been
	   * changed.
	   *
	   * @type {Boolean}
	   */

	  _delimitersChanged: true,

	  /**
	   * List of asset types that a component can own.
	   *
	   * @type {Array}
	   */

	  _assetTypes: ['component', 'directive', 'elementDirective', 'filter', 'transition', 'partial'],

	  /**
	   * prop binding modes
	   */

	  _propBindingModes: {
	    ONE_WAY: 0,
	    TWO_WAY: 1,
	    ONE_TIME: 2
	  },

	  /**
	   * Max circular updates allowed in a batcher flush cycle.
	   */

	  _maxUpdateCount: 100

	}, {
	  delimiters: { /**
	                 * Interpolation delimiters. Changing these would trigger
	                 * the text parser to re-compile the regular expressions.
	                 *
	                 * @type {Array<String>}
	                 */

	    get: function get() {
	      return delimiters;
	    },
	    set: function set(val) {
	      delimiters = val;
	      compileRegex();
	    },
	    configurable: true,
	    enumerable: true
	  },
	  unsafeDelimiters: {
	    get: function get() {
	      return unsafeDelimiters;
	    },
	    set: function set(val) {
	      unsafeDelimiters = val;
	      compileRegex();
	    },
	    configurable: true,
	    enumerable: true
	  }
	});

	var warn = undefined;
	var formatComponentName = undefined;

	if (process.env.NODE_ENV !== 'production') {
	  (function () {
	    var hasConsole = typeof console !== 'undefined';

	    warn = function (msg, vm) {
	      if (hasConsole && !config.silent) {
	        console.error('[Vue warn]: ' + msg + (vm ? formatComponentName(vm) : ''));
	      }
	    };

	    formatComponentName = function (vm) {
	      var name = vm._isVue ? vm.$options.name : vm.name;
	      return name ? ' (found in component: <' + hyphenate(name) + '>)' : '';
	    };
	  })();
	}

	/**
	 * Append with transition.
	 *
	 * @param {Element} el
	 * @param {Element} target
	 * @param {Vue} vm
	 * @param {Function} [cb]
	 */

	function appendWithTransition(el, target, vm, cb) {
	  applyTransition(el, 1, function () {
	    target.appendChild(el);
	  }, vm, cb);
	}

	/**
	 * InsertBefore with transition.
	 *
	 * @param {Element} el
	 * @param {Element} target
	 * @param {Vue} vm
	 * @param {Function} [cb]
	 */

	function beforeWithTransition(el, target, vm, cb) {
	  applyTransition(el, 1, function () {
	    before(el, target);
	  }, vm, cb);
	}

	/**
	 * Remove with transition.
	 *
	 * @param {Element} el
	 * @param {Vue} vm
	 * @param {Function} [cb]
	 */

	function removeWithTransition(el, vm, cb) {
	  applyTransition(el, -1, function () {
	    remove(el);
	  }, vm, cb);
	}

	/**
	 * Apply transitions with an operation callback.
	 *
	 * @param {Element} el
	 * @param {Number} direction
	 *                  1: enter
	 *                 -1: leave
	 * @param {Function} op - the actual DOM operation
	 * @param {Vue} vm
	 * @param {Function} [cb]
	 */

	function applyTransition(el, direction, op, vm, cb) {
	  var transition = el.__v_trans;
	  if (!transition ||
	  // skip if there are no js hooks and CSS transition is
	  // not supported
	  !transition.hooks && !transitionEndEvent ||
	  // skip transitions for initial compile
	  !vm._isCompiled ||
	  // if the vm is being manipulated by a parent directive
	  // during the parent's compilation phase, skip the
	  // animation.
	  vm.$parent && !vm.$parent._isCompiled) {
	    op();
	    if (cb) cb();
	    return;
	  }
	  var action = direction > 0 ? 'enter' : 'leave';
	  transition[action](op, cb);
	}

	var transition = Object.freeze({
	  appendWithTransition: appendWithTransition,
	  beforeWithTransition: beforeWithTransition,
	  removeWithTransition: removeWithTransition,
	  applyTransition: applyTransition
	});

	/**
	 * Query an element selector if it's not an element already.
	 *
	 * @param {String|Element} el
	 * @return {Element}
	 */

	function query(el) {
	  if (typeof el === 'string') {
	    var selector = el;
	    el = document.querySelector(el);
	    if (!el) {
	      process.env.NODE_ENV !== 'production' && warn('Cannot find element: ' + selector);
	    }
	  }
	  return el;
	}

	/**
	 * Check if a node is in the document.
	 * Note: document.documentElement.contains should work here
	 * but always returns false for comment nodes in phantomjs,
	 * making unit tests difficult. This is fixed by doing the
	 * contains() check on the node's parentNode instead of
	 * the node itself.
	 *
	 * @param {Node} node
	 * @return {Boolean}
	 */

	function inDoc(node) {
	  var doc = document.documentElement;
	  var parent = node && node.parentNode;
	  return doc === node || doc === parent || !!(parent && parent.nodeType === 1 && doc.contains(parent));
	}

	/**
	 * Get and remove an attribute from a node.
	 *
	 * @param {Node} node
	 * @param {String} _attr
	 */

	function getAttr(node, _attr) {
	  var val = node.getAttribute(_attr);
	  if (val !== null) {
	    node.removeAttribute(_attr);
	  }
	  return val;
	}

	/**
	 * Get an attribute with colon or v-bind: prefix.
	 *
	 * @param {Node} node
	 * @param {String} name
	 * @return {String|null}
	 */

	function getBindAttr(node, name) {
	  var val = getAttr(node, ':' + name);
	  if (val === null) {
	    val = getAttr(node, 'v-bind:' + name);
	  }
	  return val;
	}

	/**
	 * Check the presence of a bind attribute.
	 *
	 * @param {Node} node
	 * @param {String} name
	 * @return {Boolean}
	 */

	function hasBindAttr(node, name) {
	  return node.hasAttribute(name) || node.hasAttribute(':' + name) || node.hasAttribute('v-bind:' + name);
	}

	/**
	 * Insert el before target
	 *
	 * @param {Element} el
	 * @param {Element} target
	 */

	function before(el, target) {
	  target.parentNode.insertBefore(el, target);
	}

	/**
	 * Insert el after target
	 *
	 * @param {Element} el
	 * @param {Element} target
	 */

	function after(el, target) {
	  if (target.nextSibling) {
	    before(el, target.nextSibling);
	  } else {
	    target.parentNode.appendChild(el);
	  }
	}

	/**
	 * Remove el from DOM
	 *
	 * @param {Element} el
	 */

	function remove(el) {
	  el.parentNode.removeChild(el);
	}

	/**
	 * Prepend el to target
	 *
	 * @param {Element} el
	 * @param {Element} target
	 */

	function prepend(el, target) {
	  if (target.firstChild) {
	    before(el, target.firstChild);
	  } else {
	    target.appendChild(el);
	  }
	}

	/**
	 * Replace target with el
	 *
	 * @param {Element} target
	 * @param {Element} el
	 */

	function replace(target, el) {
	  var parent = target.parentNode;
	  if (parent) {
	    parent.replaceChild(el, target);
	  }
	}

	/**
	 * Add event listener shorthand.
	 *
	 * @param {Element} el
	 * @param {String} event
	 * @param {Function} cb
	 * @param {Boolean} [useCapture]
	 */

	function on(el, event, cb, useCapture) {
	  el.addEventListener(event, cb, useCapture);
	}

	/**
	 * Remove event listener shorthand.
	 *
	 * @param {Element} el
	 * @param {String} event
	 * @param {Function} cb
	 */

	function off(el, event, cb) {
	  el.removeEventListener(event, cb);
	}

	/**
	 * For IE9 compat: when both class and :class are present
	 * getAttribute('class') returns wrong value...
	 *
	 * @param {Element} el
	 * @return {String}
	 */

	function getClass(el) {
	  var classname = el.className;
	  if (typeof classname === 'object') {
	    classname = classname.baseVal || '';
	  }
	  return classname;
	}

	/**
	 * In IE9, setAttribute('class') will result in empty class
	 * if the element also has the :class attribute; However in
	 * PhantomJS, setting `className` does not work on SVG elements...
	 * So we have to do a conditional check here.
	 *
	 * @param {Element} el
	 * @param {String} cls
	 */

	function setClass(el, cls) {
	  /* istanbul ignore if */
	  if (isIE9 && !/svg$/.test(el.namespaceURI)) {
	    el.className = cls;
	  } else {
	    el.setAttribute('class', cls);
	  }
	}

	/**
	 * Add class with compatibility for IE & SVG
	 *
	 * @param {Element} el
	 * @param {String} cls
	 */

	function addClass(el, cls) {
	  if (el.classList) {
	    el.classList.add(cls);
	  } else {
	    var cur = ' ' + getClass(el) + ' ';
	    if (cur.indexOf(' ' + cls + ' ') < 0) {
	      setClass(el, (cur + cls).trim());
	    }
	  }
	}

	/**
	 * Remove class with compatibility for IE & SVG
	 *
	 * @param {Element} el
	 * @param {String} cls
	 */

	function removeClass(el, cls) {
	  if (el.classList) {
	    el.classList.remove(cls);
	  } else {
	    var cur = ' ' + getClass(el) + ' ';
	    var tar = ' ' + cls + ' ';
	    while (cur.indexOf(tar) >= 0) {
	      cur = cur.replace(tar, ' ');
	    }
	    setClass(el, cur.trim());
	  }
	  if (!el.className) {
	    el.removeAttribute('class');
	  }
	}

	/**
	 * Extract raw content inside an element into a temporary
	 * container div
	 *
	 * @param {Element} el
	 * @param {Boolean} asFragment
	 * @return {Element|DocumentFragment}
	 */

	function extractContent(el, asFragment) {
	  var child;
	  var rawContent;
	  /* istanbul ignore if */
	  if (isTemplate(el) && isFragment(el.content)) {
	    el = el.content;
	  }
	  if (el.hasChildNodes()) {
	    trimNode(el);
	    rawContent = asFragment ? document.createDocumentFragment() : document.createElement('div');
	    /* eslint-disable no-cond-assign */
	    while (child = el.firstChild) {
	      /* eslint-enable no-cond-assign */
	      rawContent.appendChild(child);
	    }
	  }
	  return rawContent;
	}

	/**
	 * Trim possible empty head/tail text and comment
	 * nodes inside a parent.
	 *
	 * @param {Node} node
	 */

	function trimNode(node) {
	  var child;
	  /* eslint-disable no-sequences */
	  while ((child = node.firstChild, isTrimmable(child))) {
	    node.removeChild(child);
	  }
	  while ((child = node.lastChild, isTrimmable(child))) {
	    node.removeChild(child);
	  }
	  /* eslint-enable no-sequences */
	}

	function isTrimmable(node) {
	  return node && (node.nodeType === 3 && !node.data.trim() || node.nodeType === 8);
	}

	/**
	 * Check if an element is a template tag.
	 * Note if the template appears inside an SVG its tagName
	 * will be in lowercase.
	 *
	 * @param {Element} el
	 */

	function isTemplate(el) {
	  return el.tagName && el.tagName.toLowerCase() === 'template';
	}

	/**
	 * Create an "anchor" for performing dom insertion/removals.
	 * This is used in a number of scenarios:
	 * - fragment instance
	 * - v-html
	 * - v-if
	 * - v-for
	 * - component
	 *
	 * @param {String} content
	 * @param {Boolean} persist - IE trashes empty textNodes on
	 *                            cloneNode(true), so in certain
	 *                            cases the anchor needs to be
	 *                            non-empty to be persisted in
	 *                            templates.
	 * @return {Comment|Text}
	 */

	function createAnchor(content, persist) {
	  var anchor = config.debug ? document.createComment(content) : document.createTextNode(persist ? ' ' : '');
	  anchor.__v_anchor = true;
	  return anchor;
	}

	/**
	 * Find a component ref attribute that starts with $.
	 *
	 * @param {Element} node
	 * @return {String|undefined}
	 */

	var refRE = /^v-ref:/;

	function findRef(node) {
	  if (node.hasAttributes()) {
	    var attrs = node.attributes;
	    for (var i = 0, l = attrs.length; i < l; i++) {
	      var name = attrs[i].name;
	      if (refRE.test(name)) {
	        return camelize(name.replace(refRE, ''));
	      }
	    }
	  }
	}

	/**
	 * Map a function to a range of nodes .
	 *
	 * @param {Node} node
	 * @param {Node} end
	 * @param {Function} op
	 */

	function mapNodeRange(node, end, op) {
	  var next;
	  while (node !== end) {
	    next = node.nextSibling;
	    op(node);
	    node = next;
	  }
	  op(end);
	}

	/**
	 * Remove a range of nodes with transition, store
	 * the nodes in a fragment with correct ordering,
	 * and call callback when done.
	 *
	 * @param {Node} start
	 * @param {Node} end
	 * @param {Vue} vm
	 * @param {DocumentFragment} frag
	 * @param {Function} cb
	 */

	function removeNodeRange(start, end, vm, frag, cb) {
	  var done = false;
	  var removed = 0;
	  var nodes = [];
	  mapNodeRange(start, end, function (node) {
	    if (node === end) done = true;
	    nodes.push(node);
	    removeWithTransition(node, vm, onRemoved);
	  });
	  function onRemoved() {
	    removed++;
	    if (done && removed >= nodes.length) {
	      for (var i = 0; i < nodes.length; i++) {
	        frag.appendChild(nodes[i]);
	      }
	      cb && cb();
	    }
	  }
	}

	/**
	 * Check if a node is a DocumentFragment.
	 *
	 * @param {Node} node
	 * @return {Boolean}
	 */

	function isFragment(node) {
	  return node && node.nodeType === 11;
	}

	/**
	 * Get outerHTML of elements, taking care
	 * of SVG elements in IE as well.
	 *
	 * @param {Element} el
	 * @return {String}
	 */

	function getOuterHTML(el) {
	  if (el.outerHTML) {
	    return el.outerHTML;
	  } else {
	    var container = document.createElement('div');
	    container.appendChild(el.cloneNode(true));
	    return container.innerHTML;
	  }
	}

	var commonTagRE = /^(div|p|span|img|a|b|i|br|ul|ol|li|h1|h2|h3|h4|h5|h6|code|pre|table|th|td|tr|form|label|input|select|option|nav|article|section|header|footer)$/i;
	var reservedTagRE = /^(slot|partial|component)$/i;

	var isUnknownElement = undefined;
	if (process.env.NODE_ENV !== 'production') {
	  isUnknownElement = function (el, tag) {
	    if (tag.indexOf('-') > -1) {
	      // http://stackoverflow.com/a/28210364/1070244
	      return el.constructor === window.HTMLUnknownElement || el.constructor === window.HTMLElement;
	    } else {
	      return (/HTMLUnknownElement/.test(el.toString()) &&
	        // Chrome returns unknown for several HTML5 elements.
	        // https://code.google.com/p/chromium/issues/detail?id=540526
	        !/^(data|time|rtc|rb)$/.test(tag)
	      );
	    }
	  };
	}

	/**
	 * Check if an element is a component, if yes return its
	 * component id.
	 *
	 * @param {Element} el
	 * @param {Object} options
	 * @return {Object|undefined}
	 */

	function checkComponentAttr(el, options) {
	  var tag = el.tagName.toLowerCase();
	  var hasAttrs = el.hasAttributes();
	  if (!commonTagRE.test(tag) && !reservedTagRE.test(tag)) {
	    if (resolveAsset(options, 'components', tag)) {
	      return { id: tag };
	    } else {
	      var is = hasAttrs && getIsBinding(el);
	      if (is) {
	        return is;
	      } else if (process.env.NODE_ENV !== 'production') {
	        var expectedTag = options._componentNameMap && options._componentNameMap[tag];
	        if (expectedTag) {
	          warn('Unknown custom element: <' + tag + '> - ' + 'did you mean <' + expectedTag + '>? ' + 'HTML is case-insensitive, remember to use kebab-case in templates.');
	        } else if (isUnknownElement(el, tag)) {
	          warn('Unknown custom element: <' + tag + '> - did you ' + 'register the component correctly? For recursive components, ' + 'make sure to provide the "name" option.');
	        }
	      }
	    }
	  } else if (hasAttrs) {
	    return getIsBinding(el);
	  }
	}

	/**
	 * Get "is" binding from an element.
	 *
	 * @param {Element} el
	 * @return {Object|undefined}
	 */

	function getIsBinding(el) {
	  // dynamic syntax
	  var exp = getAttr(el, 'is');
	  if (exp != null) {
	    return { id: exp };
	  } else {
	    exp = getBindAttr(el, 'is');
	    if (exp != null) {
	      return { id: exp, dynamic: true };
	    }
	  }
	}

	/**
	 * Option overwriting strategies are functions that handle
	 * how to merge a parent option value and a child option
	 * value into the final value.
	 *
	 * All strategy functions follow the same signature:
	 *
	 * @param {*} parentVal
	 * @param {*} childVal
	 * @param {Vue} [vm]
	 */

	var strats = config.optionMergeStrategies = Object.create(null);

	/**
	 * Helper that recursively merges two data objects together.
	 */

	function mergeData(to, from) {
	  var key, toVal, fromVal;
	  for (key in from) {
	    toVal = to[key];
	    fromVal = from[key];
	    if (!hasOwn(to, key)) {
	      set(to, key, fromVal);
	    } else if (isObject(toVal) && isObject(fromVal)) {
	      mergeData(toVal, fromVal);
	    }
	  }
	  return to;
	}

	/**
	 * Data
	 */

	strats.data = function (parentVal, childVal, vm) {
	  if (!vm) {
	    // in a Vue.extend merge, both should be functions
	    if (!childVal) {
	      return parentVal;
	    }
	    if (typeof childVal !== 'function') {
	      process.env.NODE_ENV !== 'production' && warn('The "data" option should be a function ' + 'that returns a per-instance value in component ' + 'definitions.', vm);
	      return parentVal;
	    }
	    if (!parentVal) {
	      return childVal;
	    }
	    // when parentVal & childVal are both present,
	    // we need to return a function that returns the
	    // merged result of both functions... no need to
	    // check if parentVal is a function here because
	    // it has to be a function to pass previous merges.
	    return function mergedDataFn() {
	      return mergeData(childVal.call(this), parentVal.call(this));
	    };
	  } else if (parentVal || childVal) {
	    return function mergedInstanceDataFn() {
	      // instance merge
	      var instanceData = typeof childVal === 'function' ? childVal.call(vm) : childVal;
	      var defaultData = typeof parentVal === 'function' ? parentVal.call(vm) : undefined;
	      if (instanceData) {
	        return mergeData(instanceData, defaultData);
	      } else {
	        return defaultData;
	      }
	    };
	  }
	};

	/**
	 * El
	 */

	strats.el = function (parentVal, childVal, vm) {
	  if (!vm && childVal && typeof childVal !== 'function') {
	    process.env.NODE_ENV !== 'production' && warn('The "el" option should be a function ' + 'that returns a per-instance value in component ' + 'definitions.', vm);
	    return;
	  }
	  var ret = childVal || parentVal;
	  // invoke the element factory if this is instance merge
	  return vm && typeof ret === 'function' ? ret.call(vm) : ret;
	};

	/**
	 * Hooks and param attributes are merged as arrays.
	 */

	strats.init = strats.created = strats.ready = strats.attached = strats.detached = strats.beforeCompile = strats.compiled = strats.beforeDestroy = strats.destroyed = strats.activate = function (parentVal, childVal) {
	  return childVal ? parentVal ? parentVal.concat(childVal) : isArray(childVal) ? childVal : [childVal] : parentVal;
	};

	/**
	 * Assets
	 *
	 * When a vm is present (instance creation), we need to do
	 * a three-way merge between constructor options, instance
	 * options and parent options.
	 */

	function mergeAssets(parentVal, childVal) {
	  var res = Object.create(parentVal);
	  return childVal ? extend(res, guardArrayAssets(childVal)) : res;
	}

	config._assetTypes.forEach(function (type) {
	  strats[type + 's'] = mergeAssets;
	});

	/**
	 * Events & Watchers.
	 *
	 * Events & watchers hashes should not overwrite one
	 * another, so we merge them as arrays.
	 */

	strats.watch = strats.events = function (parentVal, childVal) {
	  if (!childVal) return parentVal;
	  if (!parentVal) return childVal;
	  var ret = {};
	  extend(ret, parentVal);
	  for (var key in childVal) {
	    var parent = ret[key];
	    var child = childVal[key];
	    if (parent && !isArray(parent)) {
	      parent = [parent];
	    }
	    ret[key] = parent ? parent.concat(child) : [child];
	  }
	  return ret;
	};

	/**
	 * Other object hashes.
	 */

	strats.props = strats.methods = strats.computed = function (parentVal, childVal) {
	  if (!childVal) return parentVal;
	  if (!parentVal) return childVal;
	  var ret = Object.create(null);
	  extend(ret, parentVal);
	  extend(ret, childVal);
	  return ret;
	};

	/**
	 * Default strategy.
	 */

	var defaultStrat = function defaultStrat(parentVal, childVal) {
	  return childVal === undefined ? parentVal : childVal;
	};

	/**
	 * Make sure component options get converted to actual
	 * constructors.
	 *
	 * @param {Object} options
	 */

	function guardComponents(options) {
	  if (options.components) {
	    var components = options.components = guardArrayAssets(options.components);
	    var ids = Object.keys(components);
	    var def;
	    if (process.env.NODE_ENV !== 'production') {
	      var map = options._componentNameMap = {};
	    }
	    for (var i = 0, l = ids.length; i < l; i++) {
	      var key = ids[i];
	      if (commonTagRE.test(key) || reservedTagRE.test(key)) {
	        process.env.NODE_ENV !== 'production' && warn('Do not use built-in or reserved HTML elements as component ' + 'id: ' + key);
	        continue;
	      }
	      // record a all lowercase <-> kebab-case mapping for
	      // possible custom element case error warning
	      if (process.env.NODE_ENV !== 'production') {
	        map[key.replace(/-/g, '').toLowerCase()] = hyphenate(key);
	      }
	      def = components[key];
	      if (isPlainObject(def)) {
	        components[key] = Vue.extend(def);
	      }
	    }
	  }
	}

	/**
	 * Ensure all props option syntax are normalized into the
	 * Object-based format.
	 *
	 * @param {Object} options
	 */

	function guardProps(options) {
	  var props = options.props;
	  var i, val;
	  if (isArray(props)) {
	    options.props = {};
	    i = props.length;
	    while (i--) {
	      val = props[i];
	      if (typeof val === 'string') {
	        options.props[val] = null;
	      } else if (val.name) {
	        options.props[val.name] = val;
	      }
	    }
	  } else if (isPlainObject(props)) {
	    var keys = Object.keys(props);
	    i = keys.length;
	    while (i--) {
	      val = props[keys[i]];
	      if (typeof val === 'function') {
	        props[keys[i]] = { type: val };
	      }
	    }
	  }
	}

	/**
	 * Guard an Array-format assets option and converted it
	 * into the key-value Object format.
	 *
	 * @param {Object|Array} assets
	 * @return {Object}
	 */

	function guardArrayAssets(assets) {
	  if (isArray(assets)) {
	    var res = {};
	    var i = assets.length;
	    var asset;
	    while (i--) {
	      asset = assets[i];
	      var id = typeof asset === 'function' ? asset.options && asset.options.name || asset.id : asset.name || asset.id;
	      if (!id) {
	        process.env.NODE_ENV !== 'production' && warn('Array-syntax assets must provide a "name" or "id" field.');
	      } else {
	        res[id] = asset;
	      }
	    }
	    return res;
	  }
	  return assets;
	}

	/**
	 * Merge two option objects into a new one.
	 * Core utility used in both instantiation and inheritance.
	 *
	 * @param {Object} parent
	 * @param {Object} child
	 * @param {Vue} [vm] - if vm is present, indicates this is
	 *                     an instantiation merge.
	 */

	function mergeOptions(parent, child, vm) {
	  guardComponents(child);
	  guardProps(child);
	  var options = {};
	  var key;
	  if (child.mixins) {
	    for (var i = 0, l = child.mixins.length; i < l; i++) {
	      parent = mergeOptions(parent, child.mixins[i], vm);
	    }
	  }
	  for (key in parent) {
	    mergeField(key);
	  }
	  for (key in child) {
	    if (!hasOwn(parent, key)) {
	      mergeField(key);
	    }
	  }
	  function mergeField(key) {
	    var strat = strats[key] || defaultStrat;
	    options[key] = strat(parent[key], child[key], vm, key);
	  }
	  return options;
	}

	/**
	 * Resolve an asset.
	 * This function is used because child instances need access
	 * to assets defined in its ancestor chain.
	 *
	 * @param {Object} options
	 * @param {String} type
	 * @param {String} id
	 * @param {Boolean} warnMissing
	 * @return {Object|Function}
	 */

	function resolveAsset(options, type, id, warnMissing) {
	  /* istanbul ignore if */
	  if (typeof id !== 'string') {
	    return;
	  }
	  var assets = options[type];
	  var camelizedId;
	  var res = assets[id] ||
	  // camelCase ID
	  assets[camelizedId = camelize(id)] ||
	  // Pascal Case ID
	  assets[camelizedId.charAt(0).toUpperCase() + camelizedId.slice(1)];
	  if (process.env.NODE_ENV !== 'production' && warnMissing && !res) {
	    warn('Failed to resolve ' + type.slice(0, -1) + ': ' + id, options);
	  }
	  return res;
	}

	var uid$1 = 0;

	/**
	 * A dep is an observable that can have multiple
	 * directives subscribing to it.
	 *
	 * @constructor
	 */
	function Dep() {
	  this.id = uid$1++;
	  this.subs = [];
	}

	// the current target watcher being evaluated.
	// this is globally unique because there could be only one
	// watcher being evaluated at any time.
	Dep.target = null;

	/**
	 * Add a directive subscriber.
	 *
	 * @param {Directive} sub
	 */

	Dep.prototype.addSub = function (sub) {
	  this.subs.push(sub);
	};

	/**
	 * Remove a directive subscriber.
	 *
	 * @param {Directive} sub
	 */

	Dep.prototype.removeSub = function (sub) {
	  this.subs.$remove(sub);
	};

	/**
	 * Add self as a dependency to the target watcher.
	 */

	Dep.prototype.depend = function () {
	  Dep.target.addDep(this);
	};

	/**
	 * Notify all subscribers of a new value.
	 */

	Dep.prototype.notify = function () {
	  // stablize the subscriber list first
	  var subs = toArray(this.subs);
	  for (var i = 0, l = subs.length; i < l; i++) {
	    subs[i].update();
	  }
	};

	var arrayProto = Array.prototype;
	var arrayMethods = Object.create(arrayProto)

	/**
	 * Intercept mutating methods and emit events
	 */

	;['push', 'pop', 'shift', 'unshift', 'splice', 'sort', 'reverse'].forEach(function (method) {
	  // cache original method
	  var original = arrayProto[method];
	  def(arrayMethods, method, function mutator() {
	    // avoid leaking arguments:
	    // http://jsperf.com/closure-with-arguments
	    var i = arguments.length;
	    var args = new Array(i);
	    while (i--) {
	      args[i] = arguments[i];
	    }
	    var result = original.apply(this, args);
	    var ob = this.__ob__;
	    var inserted;
	    switch (method) {
	      case 'push':
	        inserted = args;
	        break;
	      case 'unshift':
	        inserted = args;
	        break;
	      case 'splice':
	        inserted = args.slice(2);
	        break;
	    }
	    if (inserted) ob.observeArray(inserted);
	    // notify change
	    ob.dep.notify();
	    return result;
	  });
	});

	/**
	 * Swap the element at the given index with a new value
	 * and emits corresponding event.
	 *
	 * @param {Number} index
	 * @param {*} val
	 * @return {*} - replaced element
	 */

	def(arrayProto, '$set', function $set(index, val) {
	  if (index >= this.length) {
	    this.length = Number(index) + 1;
	  }
	  return this.splice(index, 1, val)[0];
	});

	/**
	 * Convenience method to remove the element at given index or target element reference.
	 *
	 * @param {*} item
	 */

	def(arrayProto, '$remove', function $remove(item) {
	  /* istanbul ignore if */
	  if (!this.length) return;
	  var index = indexOf(this, item);
	  if (index > -1) {
	    return this.splice(index, 1);
	  }
	});

	var arrayKeys = Object.getOwnPropertyNames(arrayMethods);

	/**
	 * By default, when a reactive property is set, the new value is
	 * also converted to become reactive. However in certain cases, e.g.
	 * v-for scope alias and props, we don't want to force conversion
	 * because the value may be a nested value under a frozen data structure.
	 *
	 * So whenever we want to set a reactive property without forcing
	 * conversion on the new value, we wrap that call inside this function.
	 */

	var shouldConvert = true;

	function withoutConversion(fn) {
	  shouldConvert = false;
	  fn();
	  shouldConvert = true;
	}

	/**
	 * Observer class that are attached to each observed
	 * object. Once attached, the observer converts target
	 * object's property keys into getter/setters that
	 * collect dependencies and dispatches updates.
	 *
	 * @param {Array|Object} value
	 * @constructor
	 */

	function Observer(value) {
	  this.value = value;
	  this.dep = new Dep();
	  def(value, '__ob__', this);
	  if (isArray(value)) {
	    var augment = hasProto ? protoAugment : copyAugment;
	    augment(value, arrayMethods, arrayKeys);
	    this.observeArray(value);
	  } else {
	    this.walk(value);
	  }
	}

	// Instance methods

	/**
	 * Walk through each property and convert them into
	 * getter/setters. This method should only be called when
	 * value type is Object.
	 *
	 * @param {Object} obj
	 */

	Observer.prototype.walk = function (obj) {
	  var keys = Object.keys(obj);
	  for (var i = 0, l = keys.length; i < l; i++) {
	    this.convert(keys[i], obj[keys[i]]);
	  }
	};

	/**
	 * Observe a list of Array items.
	 *
	 * @param {Array} items
	 */

	Observer.prototype.observeArray = function (items) {
	  for (var i = 0, l = items.length; i < l; i++) {
	    observe(items[i]);
	  }
	};

	/**
	 * Convert a property into getter/setter so we can emit
	 * the events when the property is accessed/changed.
	 *
	 * @param {String} key
	 * @param {*} val
	 */

	Observer.prototype.convert = function (key, val) {
	  defineReactive(this.value, key, val);
	};

	/**
	 * Add an owner vm, so that when $set/$delete mutations
	 * happen we can notify owner vms to proxy the keys and
	 * digest the watchers. This is only called when the object
	 * is observed as an instance's root $data.
	 *
	 * @param {Vue} vm
	 */

	Observer.prototype.addVm = function (vm) {
	  (this.vms || (this.vms = [])).push(vm);
	};

	/**
	 * Remove an owner vm. This is called when the object is
	 * swapped out as an instance's $data object.
	 *
	 * @param {Vue} vm
	 */

	Observer.prototype.removeVm = function (vm) {
	  this.vms.$remove(vm);
	};

	// helpers

	/**
	 * Augment an target Object or Array by intercepting
	 * the prototype chain using __proto__
	 *
	 * @param {Object|Array} target
	 * @param {Object} src
	 */

	function protoAugment(target, src) {
	  /* eslint-disable no-proto */
	  target.__proto__ = src;
	  /* eslint-enable no-proto */
	}

	/**
	 * Augment an target Object or Array by defining
	 * hidden properties.
	 *
	 * @param {Object|Array} target
	 * @param {Object} proto
	 */

	function copyAugment(target, src, keys) {
	  for (var i = 0, l = keys.length; i < l; i++) {
	    var key = keys[i];
	    def(target, key, src[key]);
	  }
	}

	/**
	 * Attempt to create an observer instance for a value,
	 * returns the new observer if successfully observed,
	 * or the existing observer if the value already has one.
	 *
	 * @param {*} value
	 * @param {Vue} [vm]
	 * @return {Observer|undefined}
	 * @static
	 */

	function observe(value, vm) {
	  if (!value || typeof value !== 'object') {
	    return;
	  }
	  var ob;
	  if (hasOwn(value, '__ob__') && value.__ob__ instanceof Observer) {
	    ob = value.__ob__;
	  } else if (shouldConvert && (isArray(value) || isPlainObject(value)) && Object.isExtensible(value) && !value._isVue) {
	    ob = new Observer(value);
	  }
	  if (ob && vm) {
	    ob.addVm(vm);
	  }
	  return ob;
	}

	/**
	 * Define a reactive property on an Object.
	 *
	 * @param {Object} obj
	 * @param {String} key
	 * @param {*} val
	 */

	function defineReactive(obj, key, val) {
	  var dep = new Dep();

	  var property = Object.getOwnPropertyDescriptor(obj, key);
	  if (property && property.configurable === false) {
	    return;
	  }

	  // cater for pre-defined getter/setters
	  var getter = property && property.get;
	  var setter = property && property.set;

	  var childOb = observe(val);
	  Object.defineProperty(obj, key, {
	    enumerable: true,
	    configurable: true,
	    get: function reactiveGetter() {
	      var value = getter ? getter.call(obj) : val;
	      if (Dep.target) {
	        dep.depend();
	        if (childOb) {
	          childOb.dep.depend();
	        }
	        if (isArray(value)) {
	          for (var e, i = 0, l = value.length; i < l; i++) {
	            e = value[i];
	            e && e.__ob__ && e.__ob__.dep.depend();
	          }
	        }
	      }
	      return value;
	    },
	    set: function reactiveSetter(newVal) {
	      var value = getter ? getter.call(obj) : val;
	      if (newVal === value) {
	        return;
	      }
	      if (setter) {
	        setter.call(obj, newVal);
	      } else {
	        val = newVal;
	      }
	      childOb = observe(newVal);
	      dep.notify();
	    }
	  });
	}



	var util = Object.freeze({
		defineReactive: defineReactive,
		set: set,
		del: del,
		hasOwn: hasOwn,
		isLiteral: isLiteral,
		isReserved: isReserved,
		_toString: _toString,
		toNumber: toNumber,
		toBoolean: toBoolean,
		stripQuotes: stripQuotes,
		camelize: camelize,
		hyphenate: hyphenate,
		classify: classify,
		bind: bind,
		toArray: toArray,
		extend: extend,
		isObject: isObject,
		isPlainObject: isPlainObject,
		def: def,
		debounce: _debounce,
		indexOf: indexOf,
		cancellable: cancellable,
		looseEqual: looseEqual,
		isArray: isArray,
		hasProto: hasProto,
		inBrowser: inBrowser,
		devtools: devtools,
		isIE9: isIE9,
		isAndroid: isAndroid,
		get transitionProp () { return transitionProp; },
		get transitionEndEvent () { return transitionEndEvent; },
		get animationProp () { return animationProp; },
		get animationEndEvent () { return animationEndEvent; },
		nextTick: nextTick,
		query: query,
		inDoc: inDoc,
		getAttr: getAttr,
		getBindAttr: getBindAttr,
		hasBindAttr: hasBindAttr,
		before: before,
		after: after,
		remove: remove,
		prepend: prepend,
		replace: replace,
		on: on,
		off: off,
		setClass: setClass,
		addClass: addClass,
		removeClass: removeClass,
		extractContent: extractContent,
		trimNode: trimNode,
		isTemplate: isTemplate,
		createAnchor: createAnchor,
		findRef: findRef,
		mapNodeRange: mapNodeRange,
		removeNodeRange: removeNodeRange,
		isFragment: isFragment,
		getOuterHTML: getOuterHTML,
		mergeOptions: mergeOptions,
		resolveAsset: resolveAsset,
		checkComponentAttr: checkComponentAttr,
		commonTagRE: commonTagRE,
		reservedTagRE: reservedTagRE,
		get warn () { return warn; }
	});

	var uid = 0;

	function initMixin (Vue) {
	  /**
	   * The main init sequence. This is called for every
	   * instance, including ones that are created from extended
	   * constructors.
	   *
	   * @param {Object} options - this options object should be
	   *                           the result of merging class
	   *                           options and the options passed
	   *                           in to the constructor.
	   */

	  Vue.prototype._init = function (options) {
	    options = options || {};

	    this.$el = null;
	    this.$parent = options.parent;
	    this.$root = this.$parent ? this.$parent.$root : this;
	    this.$children = [];
	    this.$refs = {}; // child vm references
	    this.$els = {}; // element references
	    this._watchers = []; // all watchers as an array
	    this._directives = []; // all directives

	    // a uid
	    this._uid = uid++;

	    // a flag to avoid this being observed
	    this._isVue = true;

	    // events bookkeeping
	    this._events = {}; // registered callbacks
	    this._eventsCount = {}; // for $broadcast optimization

	    // fragment instance properties
	    this._isFragment = false;
	    this._fragment = // @type {DocumentFragment}
	    this._fragmentStart = // @type {Text|Comment}
	    this._fragmentEnd = null; // @type {Text|Comment}

	    // lifecycle state
	    this._isCompiled = this._isDestroyed = this._isReady = this._isAttached = this._isBeingDestroyed = this._vForRemoving = false;
	    this._unlinkFn = null;

	    // context:
	    // if this is a transcluded component, context
	    // will be the common parent vm of this instance
	    // and its host.
	    this._context = options._context || this.$parent;

	    // scope:
	    // if this is inside an inline v-for, the scope
	    // will be the intermediate scope created for this
	    // repeat fragment. this is used for linking props
	    // and container directives.
	    this._scope = options._scope;

	    // fragment:
	    // if this instance is compiled inside a Fragment, it
	    // needs to reigster itself as a child of that fragment
	    // for attach/detach to work properly.
	    this._frag = options._frag;
	    if (this._frag) {
	      this._frag.children.push(this);
	    }

	    // push self into parent / transclusion host
	    if (this.$parent) {
	      this.$parent.$children.push(this);
	    }

	    // merge options.
	    options = this.$options = mergeOptions(this.constructor.options, options, this);

	    // set ref
	    this._updateRef();

	    // initialize data as empty object.
	    // it will be filled up in _initScope().
	    this._data = {};

	    // save raw constructor data before merge
	    // so that we know which properties are provided at
	    // instantiation.
	    this._runtimeData = options.data;

	    // call init hook
	    this._callHook('init');

	    // initialize data observation and scope inheritance.
	    this._initState();

	    // setup event system and option events.
	    this._initEvents();

	    // call created hook
	    this._callHook('created');

	    // if `el` option is passed, start compilation.
	    if (options.el) {
	      this.$mount(options.el);
	    }
	  };
	}

	var pathCache = new Cache(1000);

	// actions
	var APPEND = 0;
	var PUSH = 1;
	var INC_SUB_PATH_DEPTH = 2;
	var PUSH_SUB_PATH = 3;

	// states
	var BEFORE_PATH = 0;
	var IN_PATH = 1;
	var BEFORE_IDENT = 2;
	var IN_IDENT = 3;
	var IN_SUB_PATH = 4;
	var IN_SINGLE_QUOTE = 5;
	var IN_DOUBLE_QUOTE = 6;
	var AFTER_PATH = 7;
	var ERROR = 8;

	var pathStateMachine = [];

	pathStateMachine[BEFORE_PATH] = {
	  'ws': [BEFORE_PATH],
	  'ident': [IN_IDENT, APPEND],
	  '[': [IN_SUB_PATH],
	  'eof': [AFTER_PATH]
	};

	pathStateMachine[IN_PATH] = {
	  'ws': [IN_PATH],
	  '.': [BEFORE_IDENT],
	  '[': [IN_SUB_PATH],
	  'eof': [AFTER_PATH]
	};

	pathStateMachine[BEFORE_IDENT] = {
	  'ws': [BEFORE_IDENT],
	  'ident': [IN_IDENT, APPEND]
	};

	pathStateMachine[IN_IDENT] = {
	  'ident': [IN_IDENT, APPEND],
	  '0': [IN_IDENT, APPEND],
	  'number': [IN_IDENT, APPEND],
	  'ws': [IN_PATH, PUSH],
	  '.': [BEFORE_IDENT, PUSH],
	  '[': [IN_SUB_PATH, PUSH],
	  'eof': [AFTER_PATH, PUSH]
	};

	pathStateMachine[IN_SUB_PATH] = {
	  "'": [IN_SINGLE_QUOTE, APPEND],
	  '"': [IN_DOUBLE_QUOTE, APPEND],
	  '[': [IN_SUB_PATH, INC_SUB_PATH_DEPTH],
	  ']': [IN_PATH, PUSH_SUB_PATH],
	  'eof': ERROR,
	  'else': [IN_SUB_PATH, APPEND]
	};

	pathStateMachine[IN_SINGLE_QUOTE] = {
	  "'": [IN_SUB_PATH, APPEND],
	  'eof': ERROR,
	  'else': [IN_SINGLE_QUOTE, APPEND]
	};

	pathStateMachine[IN_DOUBLE_QUOTE] = {
	  '"': [IN_SUB_PATH, APPEND],
	  'eof': ERROR,
	  'else': [IN_DOUBLE_QUOTE, APPEND]
	};

	/**
	 * Determine the type of a character in a keypath.
	 *
	 * @param {Char} ch
	 * @return {String} type
	 */

	function getPathCharType(ch) {
	  if (ch === undefined) {
	    return 'eof';
	  }

	  var code = ch.charCodeAt(0);

	  switch (code) {
	    case 0x5B: // [
	    case 0x5D: // ]
	    case 0x2E: // .
	    case 0x22: // "
	    case 0x27: // '
	    case 0x30:
	      // 0
	      return ch;

	    case 0x5F: // _
	    case 0x24:
	      // $
	      return 'ident';

	    case 0x20: // Space
	    case 0x09: // Tab
	    case 0x0A: // Newline
	    case 0x0D: // Return
	    case 0xA0: // No-break space
	    case 0xFEFF: // Byte Order Mark
	    case 0x2028: // Line Separator
	    case 0x2029:
	      // Paragraph Separator
	      return 'ws';
	  }

	  // a-z, A-Z
	  if (code >= 0x61 && code <= 0x7A || code >= 0x41 && code <= 0x5A) {
	    return 'ident';
	  }

	  // 1-9
	  if (code >= 0x31 && code <= 0x39) {
	    return 'number';
	  }

	  return 'else';
	}

	/**
	 * Format a subPath, return its plain form if it is
	 * a literal string or number. Otherwise prepend the
	 * dynamic indicator (*).
	 *
	 * @param {String} path
	 * @return {String}
	 */

	function formatSubPath(path) {
	  var trimmed = path.trim();
	  // invalid leading 0
	  if (path.charAt(0) === '0' && isNaN(path)) {
	    return false;
	  }
	  return isLiteral(trimmed) ? stripQuotes(trimmed) : '*' + trimmed;
	}

	/**
	 * Parse a string path into an array of segments
	 *
	 * @param {String} path
	 * @return {Array|undefined}
	 */

	function parse(path) {
	  var keys = [];
	  var index = -1;
	  var mode = BEFORE_PATH;
	  var subPathDepth = 0;
	  var c, newChar, key, type, transition, action, typeMap;

	  var actions = [];

	  actions[PUSH] = function () {
	    if (key !== undefined) {
	      keys.push(key);
	      key = undefined;
	    }
	  };

	  actions[APPEND] = function () {
	    if (key === undefined) {
	      key = newChar;
	    } else {
	      key += newChar;
	    }
	  };

	  actions[INC_SUB_PATH_DEPTH] = function () {
	    actions[APPEND]();
	    subPathDepth++;
	  };

	  actions[PUSH_SUB_PATH] = function () {
	    if (subPathDepth > 0) {
	      subPathDepth--;
	      mode = IN_SUB_PATH;
	      actions[APPEND]();
	    } else {
	      subPathDepth = 0;
	      key = formatSubPath(key);
	      if (key === false) {
	        return false;
	      } else {
	        actions[PUSH]();
	      }
	    }
	  };

	  function maybeUnescapeQuote() {
	    var nextChar = path[index + 1];
	    if (mode === IN_SINGLE_QUOTE && nextChar === "'" || mode === IN_DOUBLE_QUOTE && nextChar === '"') {
	      index++;
	      newChar = '\\' + nextChar;
	      actions[APPEND]();
	      return true;
	    }
	  }

	  while (mode != null) {
	    index++;
	    c = path[index];

	    if (c === '\\' && maybeUnescapeQuote()) {
	      continue;
	    }

	    type = getPathCharType(c);
	    typeMap = pathStateMachine[mode];
	    transition = typeMap[type] || typeMap['else'] || ERROR;

	    if (transition === ERROR) {
	      return; // parse error
	    }

	    mode = transition[0];
	    action = actions[transition[1]];
	    if (action) {
	      newChar = transition[2];
	      newChar = newChar === undefined ? c : newChar;
	      if (action() === false) {
	        return;
	      }
	    }

	    if (mode === AFTER_PATH) {
	      keys.raw = path;
	      return keys;
	    }
	  }
	}

	/**
	 * External parse that check for a cache hit first
	 *
	 * @param {String} path
	 * @return {Array|undefined}
	 */

	function parsePath(path) {
	  var hit = pathCache.get(path);
	  if (!hit) {
	    hit = parse(path);
	    if (hit) {
	      pathCache.put(path, hit);
	    }
	  }
	  return hit;
	}

	/**
	 * Get from an object from a path string
	 *
	 * @param {Object} obj
	 * @param {String} path
	 */

	function getPath(obj, path) {
	  return parseExpression(path).get(obj);
	}

	/**
	 * Warn against setting non-existent root path on a vm.
	 */

	var warnNonExistent;
	if (process.env.NODE_ENV !== 'production') {
	  warnNonExistent = function (path, vm) {
	    warn('You are setting a non-existent path "' + path.raw + '" ' + 'on a vm instance. Consider pre-initializing the property ' + 'with the "data" option for more reliable reactivity ' + 'and better performance.', vm);
	  };
	}

	/**
	 * Set on an object from a path
	 *
	 * @param {Object} obj
	 * @param {String | Array} path
	 * @param {*} val
	 */

	function setPath(obj, path, val) {
	  var original = obj;
	  if (typeof path === 'string') {
	    path = parse(path);
	  }
	  if (!path || !isObject(obj)) {
	    return false;
	  }
	  var last, key;
	  for (var i = 0, l = path.length; i < l; i++) {
	    last = obj;
	    key = path[i];
	    if (key.charAt(0) === '*') {
	      key = parseExpression(key.slice(1)).get.call(original, original);
	    }
	    if (i < l - 1) {
	      obj = obj[key];
	      if (!isObject(obj)) {
	        obj = {};
	        if (process.env.NODE_ENV !== 'production' && last._isVue) {
	          warnNonExistent(path, last);
	        }
	        set(last, key, obj);
	      }
	    } else {
	      if (isArray(obj)) {
	        obj.$set(key, val);
	      } else if (key in obj) {
	        obj[key] = val;
	      } else {
	        if (process.env.NODE_ENV !== 'production' && obj._isVue) {
	          warnNonExistent(path, obj);
	        }
	        set(obj, key, val);
	      }
	    }
	  }
	  return true;
	}

	var path = Object.freeze({
	  parsePath: parsePath,
	  getPath: getPath,
	  setPath: setPath
	});

	var expressionCache = new Cache(1000);

	var allowedKeywords = 'Math,Date,this,true,false,null,undefined,Infinity,NaN,' + 'isNaN,isFinite,decodeURI,decodeURIComponent,encodeURI,' + 'encodeURIComponent,parseInt,parseFloat';
	var allowedKeywordsRE = new RegExp('^(' + allowedKeywords.replace(/,/g, '\\b|') + '\\b)');

	// keywords that don't make sense inside expressions
	var improperKeywords = 'break,case,class,catch,const,continue,debugger,default,' + 'delete,do,else,export,extends,finally,for,function,if,' + 'import,in,instanceof,let,return,super,switch,throw,try,' + 'var,while,with,yield,enum,await,implements,package,' + 'protected,static,interface,private,public';
	var improperKeywordsRE = new RegExp('^(' + improperKeywords.replace(/,/g, '\\b|') + '\\b)');

	var wsRE = /\s/g;
	var newlineRE = /\n/g;
	var saveRE = /[\{,]\s*[\w\$_]+\s*:|('(?:[^'\\]|\\.)*'|"(?:[^"\\]|\\.)*"|`(?:[^`\\]|\\.)*\$\{|\}(?:[^`\\]|\\.)*`|`(?:[^`\\]|\\.)*`)|new |typeof |void /g;
	var restoreRE = /"(\d+)"/g;
	var pathTestRE = /^[A-Za-z_$][\w$]*(?:\.[A-Za-z_$][\w$]*|\['.*?'\]|\[".*?"\]|\[\d+\]|\[[A-Za-z_$][\w$]*\])*$/;
	var identRE = /[^\w$\.](?:[A-Za-z_$][\w$]*)/g;
	var booleanLiteralRE = /^(?:true|false)$/;

	/**
	 * Save / Rewrite / Restore
	 *
	 * When rewriting paths found in an expression, it is
	 * possible for the same letter sequences to be found in
	 * strings and Object literal property keys. Therefore we
	 * remove and store these parts in a temporary array, and
	 * restore them after the path rewrite.
	 */

	var saved = [];

	/**
	 * Save replacer
	 *
	 * The save regex can match two possible cases:
	 * 1. An opening object literal
	 * 2. A string
	 * If matched as a plain string, we need to escape its
	 * newlines, since the string needs to be preserved when
	 * generating the function body.
	 *
	 * @param {String} str
	 * @param {String} isString - str if matched as a string
	 * @return {String} - placeholder with index
	 */

	function save(str, isString) {
	  var i = saved.length;
	  saved[i] = isString ? str.replace(newlineRE, '\\n') : str;
	  return '"' + i + '"';
	}

	/**
	 * Path rewrite replacer
	 *
	 * @param {String} raw
	 * @return {String}
	 */

	function rewrite(raw) {
	  var c = raw.charAt(0);
	  var path = raw.slice(1);
	  if (allowedKeywordsRE.test(path)) {
	    return raw;
	  } else {
	    path = path.indexOf('"') > -1 ? path.replace(restoreRE, restore) : path;
	    return c + 'scope.' + path;
	  }
	}

	/**
	 * Restore replacer
	 *
	 * @param {String} str
	 * @param {String} i - matched save index
	 * @return {String}
	 */

	function restore(str, i) {
	  return saved[i];
	}

	/**
	 * Rewrite an expression, prefixing all path accessors with
	 * `scope.` and generate getter/setter functions.
	 *
	 * @param {String} exp
	 * @return {Function}
	 */

	function compileGetter(exp) {
	  if (improperKeywordsRE.test(exp)) {
	    process.env.NODE_ENV !== 'production' && warn('Avoid using reserved keywords in expression: ' + exp);
	  }
	  // reset state
	  saved.length = 0;
	  // save strings and object literal keys
	  var body = exp.replace(saveRE, save).replace(wsRE, '');
	  // rewrite all paths
	  // pad 1 space here becaue the regex matches 1 extra char
	  body = (' ' + body).replace(identRE, rewrite).replace(restoreRE, restore);
	  return makeGetterFn(body);
	}

	/**
	 * Build a getter function. Requires eval.
	 *
	 * We isolate the try/catch so it doesn't affect the
	 * optimization of the parse function when it is not called.
	 *
	 * @param {String} body
	 * @return {Function|undefined}
	 */

	function makeGetterFn(body) {
	  try {
	    /* eslint-disable no-new-func */
	    return new Function('scope', 'return ' + body + ';');
	    /* eslint-enable no-new-func */
	  } catch (e) {
	    process.env.NODE_ENV !== 'production' && warn('Invalid expression. ' + 'Generated function body: ' + body);
	  }
	}

	/**
	 * Compile a setter function for the expression.
	 *
	 * @param {String} exp
	 * @return {Function|undefined}
	 */

	function compileSetter(exp) {
	  var path = parsePath(exp);
	  if (path) {
	    return function (scope, val) {
	      setPath(scope, path, val);
	    };
	  } else {
	    process.env.NODE_ENV !== 'production' && warn('Invalid setter expression: ' + exp);
	  }
	}

	/**
	 * Parse an expression into re-written getter/setters.
	 *
	 * @param {String} exp
	 * @param {Boolean} needSet
	 * @return {Function}
	 */

	function parseExpression(exp, needSet) {
	  exp = exp.trim();
	  // try cache
	  var hit = expressionCache.get(exp);
	  if (hit) {
	    if (needSet && !hit.set) {
	      hit.set = compileSetter(hit.exp);
	    }
	    return hit;
	  }
	  var res = { exp: exp };
	  res.get = isSimplePath(exp) && exp.indexOf('[') < 0
	  // optimized super simple getter
	  ? makeGetterFn('scope.' + exp)
	  // dynamic getter
	  : compileGetter(exp);
	  if (needSet) {
	    res.set = compileSetter(exp);
	  }
	  expressionCache.put(exp, res);
	  return res;
	}

	/**
	 * Check if an expression is a simple path.
	 *
	 * @param {String} exp
	 * @return {Boolean}
	 */

	function isSimplePath(exp) {
	  return pathTestRE.test(exp) &&
	  // don't treat true/false as paths
	  !booleanLiteralRE.test(exp) &&
	  // Math constants e.g. Math.PI, Math.E etc.
	  exp.slice(0, 5) !== 'Math.';
	}

	var expression = Object.freeze({
	  parseExpression: parseExpression,
	  isSimplePath: isSimplePath
	});

	// we have two separate queues: one for directive updates
	// and one for user watcher registered via $watch().
	// we want to guarantee directive updates to be called
	// before user watchers so that when user watchers are
	// triggered, the DOM would have already been in updated
	// state.

	var queueIndex;
	var queue = [];
	var userQueue = [];
	var has = {};
	var circular = {};
	var waiting = false;
	var internalQueueDepleted = false;

	/**
	 * Reset the batcher's state.
	 */

	function resetBatcherState() {
	  queue = [];
	  userQueue = [];
	  has = {};
	  circular = {};
	  waiting = internalQueueDepleted = false;
	}

	/**
	 * Flush both queues and run the watchers.
	 */

	function flushBatcherQueue() {
	  runBatcherQueue(queue);
	  internalQueueDepleted = true;
	  runBatcherQueue(userQueue);
	  // dev tool hook
	  /* istanbul ignore if */
	  if (devtools && config.devtools) {
	    devtools.emit('flush');
	  }
	  resetBatcherState();
	}

	/**
	 * Run the watchers in a single queue.
	 *
	 * @param {Array} queue
	 */

	function runBatcherQueue(queue) {
	  // do not cache length because more watchers might be pushed
	  // as we run existing watchers
	  for (queueIndex = 0; queueIndex < queue.length; queueIndex++) {
	    var watcher = queue[queueIndex];
	    var id = watcher.id;
	    has[id] = null;
	    watcher.run();
	    // in dev build, check and stop circular updates.
	    if (process.env.NODE_ENV !== 'production' && has[id] != null) {
	      circular[id] = (circular[id] || 0) + 1;
	      if (circular[id] > config._maxUpdateCount) {
	        warn('You may have an infinite update loop for watcher ' + 'with expression "' + watcher.expression + '"', watcher.vm);
	        break;
	      }
	    }
	  }
	}

	/**
	 * Push a watcher into the watcher queue.
	 * Jobs with duplicate IDs will be skipped unless it's
	 * pushed when the queue is being flushed.
	 *
	 * @param {Watcher} watcher
	 *   properties:
	 *   - {Number} id
	 *   - {Function} run
	 */

	function pushWatcher(watcher) {
	  var id = watcher.id;
	  if (has[id] == null) {
	    if (internalQueueDepleted && !watcher.user) {
	      // an internal watcher triggered by a user watcher...
	      // let's run it immediately after current user watcher is done.
	      userQueue.splice(queueIndex + 1, 0, watcher);
	    } else {
	      // push watcher into appropriate queue
	      var q = watcher.user ? userQueue : queue;
	      has[id] = q.length;
	      q.push(watcher);
	      // queue the flush
	      if (!waiting) {
	        waiting = true;
	        nextTick(flushBatcherQueue);
	      }
	    }
	  }
	}

	var uid$2 = 0;

	/**
	 * A watcher parses an expression, collects dependencies,
	 * and fires callback when the expression value changes.
	 * This is used for both the $watch() api and directives.
	 *
	 * @param {Vue} vm
	 * @param {String|Function} expOrFn
	 * @param {Function} cb
	 * @param {Object} options
	 *                 - {Array} filters
	 *                 - {Boolean} twoWay
	 *                 - {Boolean} deep
	 *                 - {Boolean} user
	 *                 - {Boolean} sync
	 *                 - {Boolean} lazy
	 *                 - {Function} [preProcess]
	 *                 - {Function} [postProcess]
	 * @constructor
	 */
	function Watcher(vm, expOrFn, cb, options) {
	  // mix in options
	  if (options) {
	    extend(this, options);
	  }
	  var isFn = typeof expOrFn === 'function';
	  this.vm = vm;
	  vm._watchers.push(this);
	  this.expression = expOrFn;
	  this.cb = cb;
	  this.id = ++uid$2; // uid for batching
	  this.active = true;
	  this.dirty = this.lazy; // for lazy watchers
	  this.deps = [];
	  this.newDeps = [];
	  this.depIds = Object.create(null);
	  this.newDepIds = null;
	  this.prevError = null; // for async error stacks
	  // parse expression for getter/setter
	  if (isFn) {
	    this.getter = expOrFn;
	    this.setter = undefined;
	  } else {
	    var res = parseExpression(expOrFn, this.twoWay);
	    this.getter = res.get;
	    this.setter = res.set;
	  }
	  this.value = this.lazy ? undefined : this.get();
	  // state for avoiding false triggers for deep and Array
	  // watchers during vm._digest()
	  this.queued = this.shallow = false;
	}

	/**
	 * Evaluate the getter, and re-collect dependencies.
	 */

	Watcher.prototype.get = function () {
	  this.beforeGet();
	  var scope = this.scope || this.vm;
	  var value;
	  try {
	    value = this.getter.call(scope, scope);
	  } catch (e) {
	    if (process.env.NODE_ENV !== 'production' && config.warnExpressionErrors) {
	      warn('Error when evaluating expression ' + '"' + this.expression + '": ' + e.toString(), this.vm);
	    }
	  }
	  // "touch" every property so they are all tracked as
	  // dependencies for deep watching
	  if (this.deep) {
	    traverse(value);
	  }
	  if (this.preProcess) {
	    value = this.preProcess(value);
	  }
	  if (this.filters) {
	    value = scope._applyFilters(value, null, this.filters, false);
	  }
	  if (this.postProcess) {
	    value = this.postProcess(value);
	  }
	  this.afterGet();
	  return value;
	};

	/**
	 * Set the corresponding value with the setter.
	 *
	 * @param {*} value
	 */

	Watcher.prototype.set = function (value) {
	  var scope = this.scope || this.vm;
	  if (this.filters) {
	    value = scope._applyFilters(value, this.value, this.filters, true);
	  }
	  try {
	    this.setter.call(scope, scope, value);
	  } catch (e) {
	    if (process.env.NODE_ENV !== 'production' && config.warnExpressionErrors) {
	      warn('Error when evaluating setter ' + '"' + this.expression + '": ' + e.toString(), this.vm);
	    }
	  }
	  // two-way sync for v-for alias
	  var forContext = scope.$forContext;
	  if (forContext && forContext.alias === this.expression) {
	    if (forContext.filters) {
	      process.env.NODE_ENV !== 'production' && warn('It seems you are using two-way binding on ' + 'a v-for alias (' + this.expression + '), and the ' + 'v-for has filters. This will not work properly. ' + 'Either remove the filters or use an array of ' + 'objects and bind to object properties instead.', this.vm);
	      return;
	    }
	    forContext._withLock(function () {
	      if (scope.$key) {
	        // original is an object
	        forContext.rawValue[scope.$key] = value;
	      } else {
	        forContext.rawValue.$set(scope.$index, value);
	      }
	    });
	  }
	};

	/**
	 * Prepare for dependency collection.
	 */

	Watcher.prototype.beforeGet = function () {
	  Dep.target = this;
	  this.newDepIds = Object.create(null);
	  this.newDeps.length = 0;
	};

	/**
	 * Add a dependency to this directive.
	 *
	 * @param {Dep} dep
	 */

	Watcher.prototype.addDep = function (dep) {
	  var id = dep.id;
	  if (!this.newDepIds[id]) {
	    this.newDepIds[id] = true;
	    this.newDeps.push(dep);
	    if (!this.depIds[id]) {
	      dep.addSub(this);
	    }
	  }
	};

	/**
	 * Clean up for dependency collection.
	 */

	Watcher.prototype.afterGet = function () {
	  Dep.target = null;
	  var i = this.deps.length;
	  while (i--) {
	    var dep = this.deps[i];
	    if (!this.newDepIds[dep.id]) {
	      dep.removeSub(this);
	    }
	  }
	  this.depIds = this.newDepIds;
	  var tmp = this.deps;
	  this.deps = this.newDeps;
	  this.newDeps = tmp;
	};

	/**
	 * Subscriber interface.
	 * Will be called when a dependency changes.
	 *
	 * @param {Boolean} shallow
	 */

	Watcher.prototype.update = function (shallow) {
	  if (this.lazy) {
	    this.dirty = true;
	  } else if (this.sync || !config.async) {
	    this.run();
	  } else {
	    // if queued, only overwrite shallow with non-shallow,
	    // but not the other way around.
	    this.shallow = this.queued ? shallow ? this.shallow : false : !!shallow;
	    this.queued = true;
	    // record before-push error stack in debug mode
	    /* istanbul ignore if */
	    if (process.env.NODE_ENV !== 'production' && config.debug) {
	      this.prevError = new Error('[vue] async stack trace');
	    }
	    pushWatcher(this);
	  }
	};

	/**
	 * Batcher job interface.
	 * Will be called by the batcher.
	 */

	Watcher.prototype.run = function () {
	  if (this.active) {
	    var value = this.get();
	    if (value !== this.value ||
	    // Deep watchers and watchers on Object/Arrays should fire even
	    // when the value is the same, because the value may
	    // have mutated; but only do so if this is a
	    // non-shallow update (caused by a vm digest).
	    (isObject(value) || this.deep) && !this.shallow) {
	      // set new value
	      var oldValue = this.value;
	      this.value = value;
	      // in debug + async mode, when a watcher callbacks
	      // throws, we also throw the saved before-push error
	      // so the full cross-tick stack trace is available.
	      var prevError = this.prevError;
	      /* istanbul ignore if */
	      if (process.env.NODE_ENV !== 'production' && config.debug && prevError) {
	        this.prevError = null;
	        try {
	          this.cb.call(this.vm, value, oldValue);
	        } catch (e) {
	          nextTick(function () {
	            throw prevError;
	          }, 0);
	          throw e;
	        }
	      } else {
	        this.cb.call(this.vm, value, oldValue);
	      }
	    }
	    this.queued = this.shallow = false;
	  }
	};

	/**
	 * Evaluate the value of the watcher.
	 * This only gets called for lazy watchers.
	 */

	Watcher.prototype.evaluate = function () {
	  // avoid overwriting another watcher that is being
	  // collected.
	  var current = Dep.target;
	  this.value = this.get();
	  this.dirty = false;
	  Dep.target = current;
	};

	/**
	 * Depend on all deps collected by this watcher.
	 */

	Watcher.prototype.depend = function () {
	  var i = this.deps.length;
	  while (i--) {
	    this.deps[i].depend();
	  }
	};

	/**
	 * Remove self from all dependencies' subcriber list.
	 */

	Watcher.prototype.teardown = function () {
	  if (this.active) {
	    // remove self from vm's watcher list
	    // this is a somewhat expensive operation so we skip it
	    // if the vm is being destroyed or is performing a v-for
	    // re-render (the watcher list is then filtered by v-for).
	    if (!this.vm._isBeingDestroyed && !this.vm._vForRemoving) {
	      this.vm._watchers.$remove(this);
	    }
	    var i = this.deps.length;
	    while (i--) {
	      this.deps[i].removeSub(this);
	    }
	    this.active = false;
	    this.vm = this.cb = this.value = null;
	  }
	};

	/**
	 * Recrusively traverse an object to evoke all converted
	 * getters, so that every nested property inside the object
	 * is collected as a "deep" dependency.
	 *
	 * @param {*} val
	 */

	function traverse(val) {
	  var i, keys;
	  if (isArray(val)) {
	    i = val.length;
	    while (i--) traverse(val[i]);
	  } else if (isObject(val)) {
	    keys = Object.keys(val);
	    i = keys.length;
	    while (i--) traverse(val[keys[i]]);
	  }
	}

	var text$1 = {

	  bind: function bind() {
	    this.attr = this.el.nodeType === 3 ? 'data' : 'textContent';
	  },

	  update: function update(value) {
	    this.el[this.attr] = _toString(value);
	  }
	};

	var templateCache = new Cache(1000);
	var idSelectorCache = new Cache(1000);

	var map = {
	  efault: [0, '', ''],
	  legend: [1, '<fieldset>', '</fieldset>'],
	  tr: [2, '<table><tbody>', '</tbody></table>'],
	  col: [2, '<table><tbody></tbody><colgroup>', '</colgroup></table>']
	};

	map.td = map.th = [3, '<table><tbody><tr>', '</tr></tbody></table>'];

	map.option = map.optgroup = [1, '<select multiple="multiple">', '</select>'];

	map.thead = map.tbody = map.colgroup = map.caption = map.tfoot = [1, '<table>', '</table>'];

	map.g = map.defs = map.symbol = map.use = map.image = map.text = map.circle = map.ellipse = map.line = map.path = map.polygon = map.polyline = map.rect = [1, '<svg ' + 'xmlns="http://www.w3.org/2000/svg" ' + 'xmlns:xlink="http://www.w3.org/1999/xlink" ' + 'xmlns:ev="http://www.w3.org/2001/xml-events"' + 'version="1.1">', '</svg>'];

	/**
	 * Check if a node is a supported template node with a
	 * DocumentFragment content.
	 *
	 * @param {Node} node
	 * @return {Boolean}
	 */

	function isRealTemplate(node) {
	  return isTemplate(node) && isFragment(node.content);
	}

	var tagRE$1 = /<([\w:-]+)/;
	var entityRE = /&#?\w+?;/;

	/**
	 * Convert a string template to a DocumentFragment.
	 * Determines correct wrapping by tag types. Wrapping
	 * strategy found in jQuery & component/domify.
	 *
	 * @param {String} templateString
	 * @param {Boolean} raw
	 * @return {DocumentFragment}
	 */

	function stringToFragment(templateString, raw) {
	  // try a cache hit first
	  var cacheKey = raw ? templateString : templateString.trim();
	  var hit = templateCache.get(cacheKey);
	  if (hit) {
	    return hit;
	  }

	  var frag = document.createDocumentFragment();
	  var tagMatch = templateString.match(tagRE$1);
	  var entityMatch = entityRE.test(templateString);

	  if (!tagMatch && !entityMatch) {
	    // text only, return a single text node.
	    frag.appendChild(document.createTextNode(templateString));
	  } else {
	    var tag = tagMatch && tagMatch[1];
	    var wrap = map[tag] || map.efault;
	    var depth = wrap[0];
	    var prefix = wrap[1];
	    var suffix = wrap[2];
	    var node = document.createElement('div');

	    node.innerHTML = prefix + templateString + suffix;
	    while (depth--) {
	      node = node.lastChild;
	    }

	    var child;
	    /* eslint-disable no-cond-assign */
	    while (child = node.firstChild) {
	      /* eslint-enable no-cond-assign */
	      frag.appendChild(child);
	    }
	  }
	  if (!raw) {
	    trimNode(frag);
	  }
	  templateCache.put(cacheKey, frag);
	  return frag;
	}

	/**
	 * Convert a template node to a DocumentFragment.
	 *
	 * @param {Node} node
	 * @return {DocumentFragment}
	 */

	function nodeToFragment(node) {
	  // if its a template tag and the browser supports it,
	  // its content is already a document fragment.
	  if (isRealTemplate(node)) {
	    trimNode(node.content);
	    return node.content;
	  }
	  // script template
	  if (node.tagName === 'SCRIPT') {
	    return stringToFragment(node.textContent);
	  }
	  // normal node, clone it to avoid mutating the original
	  var clonedNode = cloneNode(node);
	  var frag = document.createDocumentFragment();
	  var child;
	  /* eslint-disable no-cond-assign */
	  while (child = clonedNode.firstChild) {
	    /* eslint-enable no-cond-assign */
	    frag.appendChild(child);
	  }
	  trimNode(frag);
	  return frag;
	}

	// Test for the presence of the Safari template cloning bug
	// https://bugs.webkit.org/showug.cgi?id=137755
	var hasBrokenTemplate = (function () {
	  /* istanbul ignore else */
	  if (inBrowser) {
	    var a = document.createElement('div');
	    a.innerHTML = '<template>1</template>';
	    return !a.cloneNode(true).firstChild.innerHTML;
	  } else {
	    return false;
	  }
	})();

	// Test for IE10/11 textarea placeholder clone bug
	var hasTextareaCloneBug = (function () {
	  /* istanbul ignore else */
	  if (inBrowser) {
	    var t = document.createElement('textarea');
	    t.placeholder = 't';
	    return t.cloneNode(true).value === 't';
	  } else {
	    return false;
	  }
	})();

	/**
	 * 1. Deal with Safari cloning nested <template> bug by
	 *    manually cloning all template instances.
	 * 2. Deal with IE10/11 textarea placeholder bug by setting
	 *    the correct value after cloning.
	 *
	 * @param {Element|DocumentFragment} node
	 * @return {Element|DocumentFragment}
	 */

	function cloneNode(node) {
	  /* istanbul ignore if */
	  if (!node.querySelectorAll) {
	    return node.cloneNode();
	  }
	  var res = node.cloneNode(true);
	  var i, original, cloned;
	  /* istanbul ignore if */
	  if (hasBrokenTemplate) {
	    var tempClone = res;
	    if (isRealTemplate(node)) {
	      node = node.content;
	      tempClone = res.content;
	    }
	    original = node.querySelectorAll('template');
	    if (original.length) {
	      cloned = tempClone.querySelectorAll('template');
	      i = cloned.length;
	      while (i--) {
	        cloned[i].parentNode.replaceChild(cloneNode(original[i]), cloned[i]);
	      }
	    }
	  }
	  /* istanbul ignore if */
	  if (hasTextareaCloneBug) {
	    if (node.tagName === 'TEXTAREA') {
	      res.value = node.value;
	    } else {
	      original = node.querySelectorAll('textarea');
	      if (original.length) {
	        cloned = res.querySelectorAll('textarea');
	        i = cloned.length;
	        while (i--) {
	          cloned[i].value = original[i].value;
	        }
	      }
	    }
	  }
	  return res;
	}

	/**
	 * Process the template option and normalizes it into a
	 * a DocumentFragment that can be used as a partial or a
	 * instance template.
	 *
	 * @param {*} template
	 *        Possible values include:
	 *        - DocumentFragment object
	 *        - Node object of type Template
	 *        - id selector: '#some-template-id'
	 *        - template string: '<div><span>{{msg}}</span></div>'
	 * @param {Boolean} shouldClone
	 * @param {Boolean} raw
	 *        inline HTML interpolation. Do not check for id
	 *        selector and keep whitespace in the string.
	 * @return {DocumentFragment|undefined}
	 */

	function parseTemplate(template, shouldClone, raw) {
	  var node, frag;

	  // if the template is already a document fragment,
	  // do nothing
	  if (isFragment(template)) {
	    trimNode(template);
	    return shouldClone ? cloneNode(template) : template;
	  }

	  if (typeof template === 'string') {
	    // id selector
	    if (!raw && template.charAt(0) === '#') {
	      // id selector can be cached too
	      frag = idSelectorCache.get(template);
	      if (!frag) {
	        node = document.getElementById(template.slice(1));
	        if (node) {
	          frag = nodeToFragment(node);
	          // save selector to cache
	          idSelectorCache.put(template, frag);
	        }
	      }
	    } else {
	      // normal string template
	      frag = stringToFragment(template, raw);
	    }
	  } else if (template.nodeType) {
	    // a direct node
	    frag = nodeToFragment(template);
	  }

	  return frag && shouldClone ? cloneNode(frag) : frag;
	}

	var template = Object.freeze({
	  cloneNode: cloneNode,
	  parseTemplate: parseTemplate
	});

	var html = {

	  bind: function bind() {
	    // a comment node means this is a binding for
	    // {{{ inline unescaped html }}}
	    if (this.el.nodeType === 8) {
	      // hold nodes
	      this.nodes = [];
	      // replace the placeholder with proper anchor
	      this.anchor = createAnchor('v-html');
	      replace(this.el, this.anchor);
	    }
	  },

	  update: function update(value) {
	    value = _toString(value);
	    if (this.nodes) {
	      this.swap(value);
	    } else {
	      this.el.innerHTML = value;
	    }
	  },

	  swap: function swap(value) {
	    // remove old nodes
	    var i = this.nodes.length;
	    while (i--) {
	      remove(this.nodes[i]);
	    }
	    // convert new value to a fragment
	    // do not attempt to retrieve from id selector
	    var frag = parseTemplate(value, true, true);
	    // save a reference to these nodes so we can remove later
	    this.nodes = toArray(frag.childNodes);
	    before(frag, this.anchor);
	  }
	};

	/**
	 * Abstraction for a partially-compiled fragment.
	 * Can optionally compile content with a child scope.
	 *
	 * @param {Function} linker
	 * @param {Vue} vm
	 * @param {DocumentFragment} frag
	 * @param {Vue} [host]
	 * @param {Object} [scope]
	 * @param {Fragment} [parentFrag]
	 */
	function Fragment(linker, vm, frag, host, scope, parentFrag) {
	  this.children = [];
	  this.childFrags = [];
	  this.vm = vm;
	  this.scope = scope;
	  this.inserted = false;
	  this.parentFrag = parentFrag;
	  if (parentFrag) {
	    parentFrag.childFrags.push(this);
	  }
	  this.unlink = linker(vm, frag, host, scope, this);
	  var single = this.single = frag.childNodes.length === 1 &&
	  // do not go single mode if the only node is an anchor
	  !frag.childNodes[0].__v_anchor;
	  if (single) {
	    this.node = frag.childNodes[0];
	    this.before = singleBefore;
	    this.remove = singleRemove;
	  } else {
	    this.node = createAnchor('fragment-start');
	    this.end = createAnchor('fragment-end');
	    this.frag = frag;
	    prepend(this.node, frag);
	    frag.appendChild(this.end);
	    this.before = multiBefore;
	    this.remove = multiRemove;
	  }
	  this.node.__v_frag = this;
	}

	/**
	 * Call attach/detach for all components contained within
	 * this fragment. Also do so recursively for all child
	 * fragments.
	 *
	 * @param {Function} hook
	 */

	Fragment.prototype.callHook = function (hook) {
	  var i, l;
	  for (i = 0, l = this.childFrags.length; i < l; i++) {
	    this.childFrags[i].callHook(hook);
	  }
	  for (i = 0, l = this.children.length; i < l; i++) {
	    hook(this.children[i]);
	  }
	};

	/**
	 * Insert fragment before target, single node version
	 *
	 * @param {Node} target
	 * @param {Boolean} withTransition
	 */

	function singleBefore(target, withTransition) {
	  this.inserted = true;
	  var method = withTransition !== false ? beforeWithTransition : before;
	  method(this.node, target, this.vm);
	  if (inDoc(this.node)) {
	    this.callHook(attach);
	  }
	}

	/**
	 * Remove fragment, single node version
	 */

	function singleRemove() {
	  this.inserted = false;
	  var shouldCallRemove = inDoc(this.node);
	  var self = this;
	  this.beforeRemove();
	  removeWithTransition(this.node, this.vm, function () {
	    if (shouldCallRemove) {
	      self.callHook(detach);
	    }
	    self.destroy();
	  });
	}

	/**
	 * Insert fragment before target, multi-nodes version
	 *
	 * @param {Node} target
	 * @param {Boolean} withTransition
	 */

	function multiBefore(target, withTransition) {
	  this.inserted = true;
	  var vm = this.vm;
	  var method = withTransition !== false ? beforeWithTransition : before;
	  mapNodeRange(this.node, this.end, function (node) {
	    method(node, target, vm);
	  });
	  if (inDoc(this.node)) {
	    this.callHook(attach);
	  }
	}

	/**
	 * Remove fragment, multi-nodes version
	 */

	function multiRemove() {
	  this.inserted = false;
	  var self = this;
	  var shouldCallRemove = inDoc(this.node);
	  this.beforeRemove();
	  removeNodeRange(this.node, this.end, this.vm, this.frag, function () {
	    if (shouldCallRemove) {
	      self.callHook(detach);
	    }
	    self.destroy();
	  });
	}

	/**
	 * Prepare the fragment for removal.
	 */

	Fragment.prototype.beforeRemove = function () {
	  var i, l;
	  for (i = 0, l = this.childFrags.length; i < l; i++) {
	    // call the same method recursively on child
	    // fragments, depth-first
	    this.childFrags[i].beforeRemove(false);
	  }
	  for (i = 0, l = this.children.length; i < l; i++) {
	    // Call destroy for all contained instances,
	    // with remove:false and defer:true.
	    // Defer is necessary because we need to
	    // keep the children to call detach hooks
	    // on them.
	    this.children[i].$destroy(false, true);
	  }
	  var dirs = this.unlink.dirs;
	  for (i = 0, l = dirs.length; i < l; i++) {
	    // disable the watchers on all the directives
	    // so that the rendered content stays the same
	    // during removal.
	    dirs[i]._watcher && dirs[i]._watcher.teardown();
	  }
	};

	/**
	 * Destroy the fragment.
	 */

	Fragment.prototype.destroy = function () {
	  if (this.parentFrag) {
	    this.parentFrag.childFrags.$remove(this);
	  }
	  this.node.__v_frag = null;
	  this.unlink();
	};

	/**
	 * Call attach hook for a Vue instance.
	 *
	 * @param {Vue} child
	 */

	function attach(child) {
	  if (!child._isAttached && inDoc(child.$el)) {
	    child._callHook('attached');
	  }
	}

	/**
	 * Call detach hook for a Vue instance.
	 *
	 * @param {Vue} child
	 */

	function detach(child) {
	  if (child._isAttached && !inDoc(child.$el)) {
	    child._callHook('detached');
	  }
	}

	var linkerCache = new Cache(5000);

	/**
	 * A factory that can be used to create instances of a
	 * fragment. Caches the compiled linker if possible.
	 *
	 * @param {Vue} vm
	 * @param {Element|String} el
	 */
	function FragmentFactory(vm, el) {
	  this.vm = vm;
	  var template;
	  var isString = typeof el === 'string';
	  if (isString || isTemplate(el)) {
	    template = parseTemplate(el, true);
	  } else {
	    template = document.createDocumentFragment();
	    template.appendChild(el);
	  }
	  this.template = template;
	  // linker can be cached, but only for components
	  var linker;
	  var cid = vm.constructor.cid;
	  if (cid > 0) {
	    var cacheId = cid + (isString ? el : getOuterHTML(el));
	    linker = linkerCache.get(cacheId);
	    if (!linker) {
	      linker = compile(template, vm.$options, true);
	      linkerCache.put(cacheId, linker);
	    }
	  } else {
	    linker = compile(template, vm.$options, true);
	  }
	  this.linker = linker;
	}

	/**
	 * Create a fragment instance with given host and scope.
	 *
	 * @param {Vue} host
	 * @param {Object} scope
	 * @param {Fragment} parentFrag
	 */

	FragmentFactory.prototype.create = function (host, scope, parentFrag) {
	  var frag = cloneNode(this.template);
	  return new Fragment(this.linker, this.vm, frag, host, scope, parentFrag);
	};

	var ON = 700;
	var MODEL = 800;
	var BIND = 850;
	var TRANSITION = 1100;
	var EL = 1500;
	var COMPONENT = 1500;
	var PARTIAL = 1750;
	var IF = 2100;
	var FOR = 2200;
	var SLOT = 2300;

	var uid$3 = 0;

	var vFor = {

	  priority: FOR,
	  terminal: true,

	  params: ['track-by', 'stagger', 'enter-stagger', 'leave-stagger'],

	  bind: function bind() {
	    // support "item in/of items" syntax
	    var inMatch = this.expression.match(/(.*) (?:in|of) (.*)/);
	    if (inMatch) {
	      var itMatch = inMatch[1].match(/\((.*),(.*)\)/);
	      if (itMatch) {
	        this.iterator = itMatch[1].trim();
	        this.alias = itMatch[2].trim();
	      } else {
	        this.alias = inMatch[1].trim();
	      }
	      this.expression = inMatch[2];
	    }

	    if (!this.alias) {
	      process.env.NODE_ENV !== 'production' && warn('Invalid v-for expression "' + this.descriptor.raw + '": ' + 'alias is required.', this.vm);
	      return;
	    }

	    // uid as a cache identifier
	    this.id = '__v-for__' + ++uid$3;

	    // check if this is an option list,
	    // so that we know if we need to update the <select>'s
	    // v-model when the option list has changed.
	    // because v-model has a lower priority than v-for,
	    // the v-model is not bound here yet, so we have to
	    // retrive it in the actual updateModel() function.
	    var tag = this.el.tagName;
	    this.isOption = (tag === 'OPTION' || tag === 'OPTGROUP') && this.el.parentNode.tagName === 'SELECT';

	    // setup anchor nodes
	    this.start = createAnchor('v-for-start');
	    this.end = createAnchor('v-for-end');
	    replace(this.el, this.end);
	    before(this.start, this.end);

	    // cache
	    this.cache = Object.create(null);

	    // fragment factory
	    this.factory = new FragmentFactory(this.vm, this.el);
	  },

	  update: function update(data) {
	    this.diff(data);
	    this.updateRef();
	    this.updateModel();
	  },

	  /**
	   * Diff, based on new data and old data, determine the
	   * minimum amount of DOM manipulations needed to make the
	   * DOM reflect the new data Array.
	   *
	   * The algorithm diffs the new data Array by storing a
	   * hidden reference to an owner vm instance on previously
	   * seen data. This allows us to achieve O(n) which is
	   * better than a levenshtein distance based algorithm,
	   * which is O(m * n).
	   *
	   * @param {Array} data
	   */

	  diff: function diff(data) {
	    // check if the Array was converted from an Object
	    var item = data[0];
	    var convertedFromObject = this.fromObject = isObject(item) && hasOwn(item, '$key') && hasOwn(item, '$value');

	    var trackByKey = this.params.trackBy;
	    var oldFrags = this.frags;
	    var frags = this.frags = new Array(data.length);
	    var alias = this.alias;
	    var iterator = this.iterator;
	    var start = this.start;
	    var end = this.end;
	    var inDocument = inDoc(start);
	    var init = !oldFrags;
	    var i, l, frag, key, value, primitive;

	    // First pass, go through the new Array and fill up
	    // the new frags array. If a piece of data has a cached
	    // instance for it, we reuse it. Otherwise build a new
	    // instance.
	    for (i = 0, l = data.length; i < l; i++) {
	      item = data[i];
	      key = convertedFromObject ? item.$key : null;
	      value = convertedFromObject ? item.$value : item;
	      primitive = !isObject(value);
	      frag = !init && this.getCachedFrag(value, i, key);
	      if (frag) {
	        // reusable fragment
	        frag.reused = true;
	        // update $index
	        frag.scope.$index = i;
	        // update $key
	        if (key) {
	          frag.scope.$key = key;
	        }
	        // update iterator
	        if (iterator) {
	          frag.scope[iterator] = key !== null ? key : i;
	        }
	        // update data for track-by, object repeat &
	        // primitive values.
	        if (trackByKey || convertedFromObject || primitive) {
	          withoutConversion(function () {
	            frag.scope[alias] = value;
	          });
	        }
	      } else {
	        // new isntance
	        frag = this.create(value, alias, i, key);
	        frag.fresh = !init;
	      }
	      frags[i] = frag;
	      if (init) {
	        frag.before(end);
	      }
	    }

	    // we're done for the initial render.
	    if (init) {
	      return;
	    }

	    // Second pass, go through the old fragments and
	    // destroy those who are not reused (and remove them
	    // from cache)
	    var removalIndex = 0;
	    var totalRemoved = oldFrags.length - frags.length;
	    // when removing a large number of fragments, watcher removal
	    // turns out to be a perf bottleneck, so we batch the watcher
	    // removals into a single filter call!
	    this.vm._vForRemoving = true;
	    for (i = 0, l = oldFrags.length; i < l; i++) {
	      frag = oldFrags[i];
	      if (!frag.reused) {
	        this.deleteCachedFrag(frag);
	        this.remove(frag, removalIndex++, totalRemoved, inDocument);
	      }
	    }
	    this.vm._vForRemoving = false;
	    if (removalIndex) {
	      this.vm._watchers = this.vm._watchers.filter(function (w) {
	        return w.active;
	      });
	    }

	    // Final pass, move/insert new fragments into the
	    // right place.
	    var targetPrev, prevEl, currentPrev;
	    var insertionIndex = 0;
	    for (i = 0, l = frags.length; i < l; i++) {
	      frag = frags[i];
	      // this is the frag that we should be after
	      targetPrev = frags[i - 1];
	      prevEl = targetPrev ? targetPrev.staggerCb ? targetPrev.staggerAnchor : targetPrev.end || targetPrev.node : start;
	      if (frag.reused && !frag.staggerCb) {
	        currentPrev = findPrevFrag(frag, start, this.id);
	        if (currentPrev !== targetPrev && (!currentPrev ||
	        // optimization for moving a single item.
	        // thanks to suggestions by @livoras in #1807
	        findPrevFrag(currentPrev, start, this.id) !== targetPrev)) {
	          this.move(frag, prevEl);
	        }
	      } else {
	        // new instance, or still in stagger.
	        // insert with updated stagger index.
	        this.insert(frag, insertionIndex++, prevEl, inDocument);
	      }
	      frag.reused = frag.fresh = false;
	    }
	  },

	  /**
	   * Create a new fragment instance.
	   *
	   * @param {*} value
	   * @param {String} alias
	   * @param {Number} index
	   * @param {String} [key]
	   * @return {Fragment}
	   */

	  create: function create(value, alias, index, key) {
	    var host = this._host;
	    // create iteration scope
	    var parentScope = this._scope || this.vm;
	    var scope = Object.create(parentScope);
	    // ref holder for the scope
	    scope.$refs = Object.create(parentScope.$refs);
	    scope.$els = Object.create(parentScope.$els);
	    // make sure point $parent to parent scope
	    scope.$parent = parentScope;
	    // for two-way binding on alias
	    scope.$forContext = this;
	    // define scope properties
	    // important: define the scope alias without forced conversion
	    // so that frozen data structures remain non-reactive.
	    withoutConversion(function () {
	      defineReactive(scope, alias, value);
	    });
	    defineReactive(scope, '$index', index);
	    if (key) {
	      defineReactive(scope, '$key', key);
	    } else if (scope.$key) {
	      // avoid accidental fallback
	      def(scope, '$key', null);
	    }
	    if (this.iterator) {
	      defineReactive(scope, this.iterator, key !== null ? key : index);
	    }
	    var frag = this.factory.create(host, scope, this._frag);
	    frag.forId = this.id;
	    this.cacheFrag(value, frag, index, key);
	    return frag;
	  },

	  /**
	   * Update the v-ref on owner vm.
	   */

	  updateRef: function updateRef() {
	    var ref = this.descriptor.ref;
	    if (!ref) return;
	    var hash = (this._scope || this.vm).$refs;
	    var refs;
	    if (!this.fromObject) {
	      refs = this.frags.map(findVmFromFrag);
	    } else {
	      refs = {};
	      this.frags.forEach(function (frag) {
	        refs[frag.scope.$key] = findVmFromFrag(frag);
	      });
	    }
	    hash[ref] = refs;
	  },

	  /**
	   * For option lists, update the containing v-model on
	   * parent <select>.
	   */

	  updateModel: function updateModel() {
	    if (this.isOption) {
	      var parent = this.start.parentNode;
	      var model = parent && parent.__v_model;
	      if (model) {
	        model.forceUpdate();
	      }
	    }
	  },

	  /**
	   * Insert a fragment. Handles staggering.
	   *
	   * @param {Fragment} frag
	   * @param {Number} index
	   * @param {Node} prevEl
	   * @param {Boolean} inDocument
	   */

	  insert: function insert(frag, index, prevEl, inDocument) {
	    if (frag.staggerCb) {
	      frag.staggerCb.cancel();
	      frag.staggerCb = null;
	    }
	    var staggerAmount = this.getStagger(frag, index, null, 'enter');
	    if (inDocument && staggerAmount) {
	      // create an anchor and insert it synchronously,
	      // so that we can resolve the correct order without
	      // worrying about some elements not inserted yet
	      var anchor = frag.staggerAnchor;
	      if (!anchor) {
	        anchor = frag.staggerAnchor = createAnchor('stagger-anchor');
	        anchor.__v_frag = frag;
	      }
	      after(anchor, prevEl);
	      var op = frag.staggerCb = cancellable(function () {
	        frag.staggerCb = null;
	        frag.before(anchor);
	        remove(anchor);
	      });
	      setTimeout(op, staggerAmount);
	    } else {
	      frag.before(prevEl.nextSibling);
	    }
	  },

	  /**
	   * Remove a fragment. Handles staggering.
	   *
	   * @param {Fragment} frag
	   * @param {Number} index
	   * @param {Number} total
	   * @param {Boolean} inDocument
	   */

	  remove: function remove(frag, index, total, inDocument) {
	    if (frag.staggerCb) {
	      frag.staggerCb.cancel();
	      frag.staggerCb = null;
	      // it's not possible for the same frag to be removed
	      // twice, so if we have a pending stagger callback,
	      // it means this frag is queued for enter but removed
	      // before its transition started. Since it is already
	      // destroyed, we can just leave it in detached state.
	      return;
	    }
	    var staggerAmount = this.getStagger(frag, index, total, 'leave');
	    if (inDocument && staggerAmount) {
	      var op = frag.staggerCb = cancellable(function () {
	        frag.staggerCb = null;
	        frag.remove();
	      });
	      setTimeout(op, staggerAmount);
	    } else {
	      frag.remove();
	    }
	  },

	  /**
	   * Move a fragment to a new position.
	   * Force no transition.
	   *
	   * @param {Fragment} frag
	   * @param {Node} prevEl
	   */

	  move: function move(frag, prevEl) {
	    // fix a common issue with Sortable:
	    // if prevEl doesn't have nextSibling, this means it's
	    // been dragged after the end anchor. Just re-position
	    // the end anchor to the end of the container.
	    /* istanbul ignore if */
	    if (!prevEl.nextSibling) {
	      this.end.parentNode.appendChild(this.end);
	    }
	    frag.before(prevEl.nextSibling, false);
	  },

	  /**
	   * Cache a fragment using track-by or the object key.
	   *
	   * @param {*} value
	   * @param {Fragment} frag
	   * @param {Number} index
	   * @param {String} [key]
	   */

	  cacheFrag: function cacheFrag(value, frag, index, key) {
	    var trackByKey = this.params.trackBy;
	    var cache = this.cache;
	    var primitive = !isObject(value);
	    var id;
	    if (key || trackByKey || primitive) {
	      id = trackByKey ? trackByKey === '$index' ? index : getPath(value, trackByKey) : key || value;
	      if (!cache[id]) {
	        cache[id] = frag;
	      } else if (trackByKey !== '$index') {
	        process.env.NODE_ENV !== 'production' && this.warnDuplicate(value);
	      }
	    } else {
	      id = this.id;
	      if (hasOwn(value, id)) {
	        if (value[id] === null) {
	          value[id] = frag;
	        } else {
	          process.env.NODE_ENV !== 'production' && this.warnDuplicate(value);
	        }
	      } else {
	        def(value, id, frag);
	      }
	    }
	    frag.raw = value;
	  },

	  /**
	   * Get a cached fragment from the value/index/key
	   *
	   * @param {*} value
	   * @param {Number} index
	   * @param {String} key
	   * @return {Fragment}
	   */

	  getCachedFrag: function getCachedFrag(value, index, key) {
	    var trackByKey = this.params.trackBy;
	    var primitive = !isObject(value);
	    var frag;
	    if (key || trackByKey || primitive) {
	      var id = trackByKey ? trackByKey === '$index' ? index : getPath(value, trackByKey) : key || value;
	      frag = this.cache[id];
	    } else {
	      frag = value[this.id];
	    }
	    if (frag && (frag.reused || frag.fresh)) {
	      process.env.NODE_ENV !== 'production' && this.warnDuplicate(value);
	    }
	    return frag;
	  },

	  /**
	   * Delete a fragment from cache.
	   *
	   * @param {Fragment} frag
	   */

	  deleteCachedFrag: function deleteCachedFrag(frag) {
	    var value = frag.raw;
	    var trackByKey = this.params.trackBy;
	    var scope = frag.scope;
	    var index = scope.$index;
	    // fix #948: avoid accidentally fall through to
	    // a parent repeater which happens to have $key.
	    var key = hasOwn(scope, '$key') && scope.$key;
	    var primitive = !isObject(value);
	    if (trackByKey || key || primitive) {
	      var id = trackByKey ? trackByKey === '$index' ? index : getPath(value, trackByKey) : key || value;
	      this.cache[id] = null;
	    } else {
	      value[this.id] = null;
	      frag.raw = null;
	    }
	  },

	  /**
	   * Get the stagger amount for an insertion/removal.
	   *
	   * @param {Fragment} frag
	   * @param {Number} index
	   * @param {Number} total
	   * @param {String} type
	   */

	  getStagger: function getStagger(frag, index, total, type) {
	    type = type + 'Stagger';
	    var trans = frag.node.__v_trans;
	    var hooks = trans && trans.hooks;
	    var hook = hooks && (hooks[type] || hooks.stagger);
	    return hook ? hook.call(frag, index, total) : index * parseInt(this.params[type] || this.params.stagger, 10);
	  },

	  /**
	   * Pre-process the value before piping it through the
	   * filters. This is passed to and called by the watcher.
	   */

	  _preProcess: function _preProcess(value) {
	    // regardless of type, store the un-filtered raw value.
	    this.rawValue = value;
	    return value;
	  },

	  /**
	   * Post-process the value after it has been piped through
	   * the filters. This is passed to and called by the watcher.
	   *
	   * It is necessary for this to be called during the
	   * wathcer's dependency collection phase because we want
	   * the v-for to update when the source Object is mutated.
	   */

	  _postProcess: function _postProcess(value) {
	    if (isArray(value)) {
	      return value;
	    } else if (isPlainObject(value)) {
	      // convert plain object to array.
	      var keys = Object.keys(value);
	      var i = keys.length;
	      var res = new Array(i);
	      var key;
	      while (i--) {
	        key = keys[i];
	        res[i] = {
	          $key: key,
	          $value: value[key]
	        };
	      }
	      return res;
	    } else {
	      if (typeof value === 'number' && !isNaN(value)) {
	        value = range(value);
	      }
	      return value || [];
	    }
	  },

	  unbind: function unbind() {
	    if (this.descriptor.ref) {
	      (this._scope || this.vm).$refs[this.descriptor.ref] = null;
	    }
	    if (this.frags) {
	      var i = this.frags.length;
	      var frag;
	      while (i--) {
	        frag = this.frags[i];
	        this.deleteCachedFrag(frag);
	        frag.destroy();
	      }
	    }
	  }
	};

	/**
	 * Helper to find the previous element that is a fragment
	 * anchor. This is necessary because a destroyed frag's
	 * element could still be lingering in the DOM before its
	 * leaving transition finishes, but its inserted flag
	 * should have been set to false so we can skip them.
	 *
	 * If this is a block repeat, we want to make sure we only
	 * return frag that is bound to this v-for. (see #929)
	 *
	 * @param {Fragment} frag
	 * @param {Comment|Text} anchor
	 * @param {String} id
	 * @return {Fragment}
	 */

	function findPrevFrag(frag, anchor, id) {
	  var el = frag.node.previousSibling;
	  /* istanbul ignore if */
	  if (!el) return;
	  frag = el.__v_frag;
	  while ((!frag || frag.forId !== id || !frag.inserted) && el !== anchor) {
	    el = el.previousSibling;
	    /* istanbul ignore if */
	    if (!el) return;
	    frag = el.__v_frag;
	  }
	  return frag;
	}

	/**
	 * Find a vm from a fragment.
	 *
	 * @param {Fragment} frag
	 * @return {Vue|undefined}
	 */

	function findVmFromFrag(frag) {
	  var node = frag.node;
	  // handle multi-node frag
	  if (frag.end) {
	    while (!node.__vue__ && node !== frag.end && node.nextSibling) {
	      node = node.nextSibling;
	    }
	  }
	  return node.__vue__;
	}

	/**
	 * Create a range array from given number.
	 *
	 * @param {Number} n
	 * @return {Array}
	 */

	function range(n) {
	  var i = -1;
	  var ret = new Array(Math.floor(n));
	  while (++i < n) {
	    ret[i] = i;
	  }
	  return ret;
	}

	if (process.env.NODE_ENV !== 'production') {
	  vFor.warnDuplicate = function (value) {
	    warn('Duplicate value found in v-for="' + this.descriptor.raw + '": ' + JSON.stringify(value) + '. Use track-by="$index" if ' + 'you are expecting duplicate values.', this.vm);
	  };
	}

	var vIf = {

	  priority: IF,
	  terminal: true,

	  bind: function bind() {
	    var el = this.el;
	    if (!el.__vue__) {
	      // check else block
	      var next = el.nextElementSibling;
	      if (next && getAttr(next, 'v-else') !== null) {
	        remove(next);
	        this.elseEl = next;
	      }
	      // check main block
	      this.anchor = createAnchor('v-if');
	      replace(el, this.anchor);
	    } else {
	      process.env.NODE_ENV !== 'production' && warn('v-if="' + this.expression + '" cannot be ' + 'used on an instance root element.', this.vm);
	      this.invalid = true;
	    }
	  },

	  update: function update(value) {
	    if (this.invalid) return;
	    if (value) {
	      if (!this.frag) {
	        this.insert();
	      }
	    } else {
	      this.remove();
	    }
	  },

	  insert: function insert() {
	    if (this.elseFrag) {
	      this.elseFrag.remove();
	      this.elseFrag = null;
	    }
	    // lazy init factory
	    if (!this.factory) {
	      this.factory = new FragmentFactory(this.vm, this.el);
	    }
	    this.frag = this.factory.create(this._host, this._scope, this._frag);
	    this.frag.before(this.anchor);
	  },

	  remove: function remove() {
	    if (this.frag) {
	      this.frag.remove();
	      this.frag = null;
	    }
	    if (this.elseEl && !this.elseFrag) {
	      if (!this.elseFactory) {
	        this.elseFactory = new FragmentFactory(this.elseEl._context || this.vm, this.elseEl);
	      }
	      this.elseFrag = this.elseFactory.create(this._host, this._scope, this._frag);
	      this.elseFrag.before(this.anchor);
	    }
	  },

	  unbind: function unbind() {
	    if (this.frag) {
	      this.frag.destroy();
	    }
	    if (this.elseFrag) {
	      this.elseFrag.destroy();
	    }
	  }
	};

	var show = {

	  bind: function bind() {
	    // check else block
	    var next = this.el.nextElementSibling;
	    if (next && getAttr(next, 'v-else') !== null) {
	      this.elseEl = next;
	    }
	  },

	  update: function update(value) {
	    this.apply(this.el, value);
	    if (this.elseEl) {
	      this.apply(this.elseEl, !value);
	    }
	  },

	  apply: function apply(el, value) {
	    if (inDoc(el)) {
	      applyTransition(el, value ? 1 : -1, toggle, this.vm);
	    } else {
	      toggle();
	    }
	    function toggle() {
	      el.style.display = value ? '' : 'none';
	    }
	  }
	};

	var text$2 = {

	  bind: function bind() {
	    var self = this;
	    var el = this.el;
	    var isRange = el.type === 'range';
	    var lazy = this.params.lazy;
	    var number = this.params.number;
	    var debounce = this.params.debounce;

	    // handle composition events.
	    //   http://blog.evanyou.me/2014/01/03/composition-event/
	    // skip this for Android because it handles composition
	    // events quite differently. Android doesn't trigger
	    // composition events for language input methods e.g.
	    // Chinese, but instead triggers them for spelling
	    // suggestions... (see Discussion/#162)
	    var composing = false;
	    if (!isAndroid && !isRange) {
	      this.on('compositionstart', function () {
	        composing = true;
	      });
	      this.on('compositionend', function () {
	        composing = false;
	        // in IE11 the "compositionend" event fires AFTER
	        // the "input" event, so the input handler is blocked
	        // at the end... have to call it here.
	        //
	        // #1327: in lazy mode this is unecessary.
	        if (!lazy) {
	          self.listener();
	        }
	      });
	    }

	    // prevent messing with the input when user is typing,
	    // and force update on blur.
	    this.focused = false;
	    if (!isRange && !lazy) {
	      this.on('focus', function () {
	        self.focused = true;
	      });
	      this.on('blur', function () {
	        self.focused = false;
	        // do not sync value after fragment removal (#2017)
	        if (!self._frag || self._frag.inserted) {
	          self.rawListener();
	        }
	      });
	    }

	    // Now attach the main listener
	    this.listener = this.rawListener = function () {
	      if (composing || !self._bound) {
	        return;
	      }
	      var val = number || isRange ? toNumber(el.value) : el.value;
	      self.set(val);
	      // force update on next tick to avoid lock & same value
	      // also only update when user is not typing
	      nextTick(function () {
	        if (self._bound && !self.focused) {
	          self.update(self._watcher.value);
	        }
	      });
	    };

	    // apply debounce
	    if (debounce) {
	      this.listener = _debounce(this.listener, debounce);
	    }

	    // Support jQuery events, since jQuery.trigger() doesn't
	    // trigger native events in some cases and some plugins
	    // rely on $.trigger()
	    //
	    // We want to make sure if a listener is attached using
	    // jQuery, it is also removed with jQuery, that's why
	    // we do the check for each directive instance and
	    // store that check result on itself. This also allows
	    // easier test coverage control by unsetting the global
	    // jQuery variable in tests.
	    this.hasjQuery = typeof jQuery === 'function';
	    if (this.hasjQuery) {
	      var method = jQuery.fn.on ? 'on' : 'bind';
	      jQuery(el)[method]('change', this.rawListener);
	      if (!lazy) {
	        jQuery(el)[method]('input', this.listener);
	      }
	    } else {
	      this.on('change', this.rawListener);
	      if (!lazy) {
	        this.on('input', this.listener);
	      }
	    }

	    // IE9 doesn't fire input event on backspace/del/cut
	    if (!lazy && isIE9) {
	      this.on('cut', function () {
	        nextTick(self.listener);
	      });
	      this.on('keyup', function (e) {
	        if (e.keyCode === 46 || e.keyCode === 8) {
	          self.listener();
	        }
	      });
	    }

	    // set initial value if present
	    if (el.hasAttribute('value') || el.tagName === 'TEXTAREA' && el.value.trim()) {
	      this.afterBind = this.listener;
	    }
	  },

	  update: function update(value) {
	    this.el.value = _toString(value);
	  },

	  unbind: function unbind() {
	    var el = this.el;
	    if (this.hasjQuery) {
	      var method = jQuery.fn.off ? 'off' : 'unbind';
	      jQuery(el)[method]('change', this.listener);
	      jQuery(el)[method]('input', this.listener);
	    }
	  }
	};

	var radio = {

	  bind: function bind() {
	    var self = this;
	    var el = this.el;

	    this.getValue = function () {
	      // value overwrite via v-bind:value
	      if (el.hasOwnProperty('_value')) {
	        return el._value;
	      }
	      var val = el.value;
	      if (self.params.number) {
	        val = toNumber(val);
	      }
	      return val;
	    };

	    this.listener = function () {
	      self.set(self.getValue());
	    };
	    this.on('change', this.listener);

	    if (el.hasAttribute('checked')) {
	      this.afterBind = this.listener;
	    }
	  },

	  update: function update(value) {
	    this.el.checked = looseEqual(value, this.getValue());
	  }
	};

	var select = {

	  bind: function bind() {
	    var self = this;
	    var el = this.el;

	    // method to force update DOM using latest value.
	    this.forceUpdate = function () {
	      if (self._watcher) {
	        self.update(self._watcher.get());
	      }
	    };

	    // check if this is a multiple select
	    var multiple = this.multiple = el.hasAttribute('multiple');

	    // attach listener
	    this.listener = function () {
	      var value = getValue(el, multiple);
	      value = self.params.number ? isArray(value) ? value.map(toNumber) : toNumber(value) : value;
	      self.set(value);
	    };
	    this.on('change', this.listener);

	    // if has initial value, set afterBind
	    var initValue = getValue(el, multiple, true);
	    if (multiple && initValue.length || !multiple && initValue !== null) {
	      this.afterBind = this.listener;
	    }

	    // All major browsers except Firefox resets
	    // selectedIndex with value -1 to 0 when the element
	    // is appended to a new parent, therefore we have to
	    // force a DOM update whenever that happens...
	    this.vm.$on('hook:attached', this.forceUpdate);
	  },

	  update: function update(value) {
	    var el = this.el;
	    el.selectedIndex = -1;
	    var multi = this.multiple && isArray(value);
	    var options = el.options;
	    var i = options.length;
	    var op, val;
	    while (i--) {
	      op = options[i];
	      val = op.hasOwnProperty('_value') ? op._value : op.value;
	      /* eslint-disable eqeqeq */
	      op.selected = multi ? indexOf$1(value, val) > -1 : looseEqual(value, val);
	      /* eslint-enable eqeqeq */
	    }
	  },

	  unbind: function unbind() {
	    /* istanbul ignore next */
	    this.vm.$off('hook:attached', this.forceUpdate);
	  }
	};

	/**
	 * Get select value
	 *
	 * @param {SelectElement} el
	 * @param {Boolean} multi
	 * @param {Boolean} init
	 * @return {Array|*}
	 */

	function getValue(el, multi, init) {
	  var res = multi ? [] : null;
	  var op, val, selected;
	  for (var i = 0, l = el.options.length; i < l; i++) {
	    op = el.options[i];
	    selected = init ? op.hasAttribute('selected') : op.selected;
	    if (selected) {
	      val = op.hasOwnProperty('_value') ? op._value : op.value;
	      if (multi) {
	        res.push(val);
	      } else {
	        return val;
	      }
	    }
	  }
	  return res;
	}

	/**
	 * Native Array.indexOf uses strict equal, but in this
	 * case we need to match string/numbers with custom equal.
	 *
	 * @param {Array} arr
	 * @param {*} val
	 */

	function indexOf$1(arr, val) {
	  var i = arr.length;
	  while (i--) {
	    if (looseEqual(arr[i], val)) {
	      return i;
	    }
	  }
	  return -1;
	}

	var checkbox = {

	  bind: function bind() {
	    var self = this;
	    var el = this.el;

	    this.getValue = function () {
	      return el.hasOwnProperty('_value') ? el._value : self.params.number ? toNumber(el.value) : el.value;
	    };

	    function getBooleanValue() {
	      var val = el.checked;
	      if (val && el.hasOwnProperty('_trueValue')) {
	        return el._trueValue;
	      }
	      if (!val && el.hasOwnProperty('_falseValue')) {
	        return el._falseValue;
	      }
	      return val;
	    }

	    this.listener = function () {
	      var model = self._watcher.value;
	      if (isArray(model)) {
	        var val = self.getValue();
	        if (el.checked) {
	          if (indexOf(model, val) < 0) {
	            model.push(val);
	          }
	        } else {
	          model.$remove(val);
	        }
	      } else {
	        self.set(getBooleanValue());
	      }
	    };

	    this.on('change', this.listener);
	    if (el.hasAttribute('checked')) {
	      this.afterBind = this.listener;
	    }
	  },

	  update: function update(value) {
	    var el = this.el;
	    if (isArray(value)) {
	      el.checked = indexOf(value, this.getValue()) > -1;
	    } else {
	      if (el.hasOwnProperty('_trueValue')) {
	        el.checked = looseEqual(value, el._trueValue);
	      } else {
	        el.checked = !!value;
	      }
	    }
	  }
	};

	var handlers = {
	  text: text$2,
	  radio: radio,
	  select: select,
	  checkbox: checkbox
	};

	var model = {

	  priority: MODEL,
	  twoWay: true,
	  handlers: handlers,
	  params: ['lazy', 'number', 'debounce'],

	  /**
	   * Possible elements:
	   *   <select>
	   *   <textarea>
	   *   <input type="*">
	   *     - text
	   *     - checkbox
	   *     - radio
	   *     - number
	   */

	  bind: function bind() {
	    // friendly warning...
	    this.checkFilters();
	    if (this.hasRead && !this.hasWrite) {
	      process.env.NODE_ENV !== 'production' && warn('It seems you are using a read-only filter with ' + 'v-model="' + this.descriptor.raw + '". ' + 'You might want to use a two-way filter to ensure correct behavior.', this.vm);
	    }
	    var el = this.el;
	    var tag = el.tagName;
	    var handler;
	    if (tag === 'INPUT') {
	      handler = handlers[el.type] || handlers.text;
	    } else if (tag === 'SELECT') {
	      handler = handlers.select;
	    } else if (tag === 'TEXTAREA') {
	      handler = handlers.text;
	    } else {
	      process.env.NODE_ENV !== 'production' && warn('v-model does not support element type: ' + tag, this.vm);
	      return;
	    }
	    el.__v_model = this;
	    handler.bind.call(this);
	    this.update = handler.update;
	    this._unbind = handler.unbind;
	  },

	  /**
	   * Check read/write filter stats.
	   */

	  checkFilters: function checkFilters() {
	    var filters = this.filters;
	    if (!filters) return;
	    var i = filters.length;
	    while (i--) {
	      var filter = resolveAsset(this.vm.$options, 'filters', filters[i].name);
	      if (typeof filter === 'function' || filter.read) {
	        this.hasRead = true;
	      }
	      if (filter.write) {
	        this.hasWrite = true;
	      }
	    }
	  },

	  unbind: function unbind() {
	    this.el.__v_model = null;
	    this._unbind && this._unbind();
	  }
	};

	// keyCode aliases
	var keyCodes = {
	  esc: 27,
	  tab: 9,
	  enter: 13,
	  space: 32,
	  'delete': [8, 46],
	  up: 38,
	  left: 37,
	  right: 39,
	  down: 40
	};

	function keyFilter(handler, keys) {
	  var codes = keys.map(function (key) {
	    var charCode = key.charCodeAt(0);
	    if (charCode > 47 && charCode < 58) {
	      return parseInt(key, 10);
	    }
	    if (key.length === 1) {
	      charCode = key.toUpperCase().charCodeAt(0);
	      if (charCode > 64 && charCode < 91) {
	        return charCode;
	      }
	    }
	    return keyCodes[key];
	  });
	  codes = [].concat.apply([], codes);
	  return function keyHandler(e) {
	    if (codes.indexOf(e.keyCode) > -1) {
	      return handler.call(this, e);
	    }
	  };
	}

	function stopFilter(handler) {
	  return function stopHandler(e) {
	    e.stopPropagation();
	    return handler.call(this, e);
	  };
	}

	function preventFilter(handler) {
	  return function preventHandler(e) {
	    e.preventDefault();
	    return handler.call(this, e);
	  };
	}

	function selfFilter(handler) {
	  return function selfHandler(e) {
	    if (e.target === e.currentTarget) {
	      return handler.call(this, e);
	    }
	  };
	}

	var on$1 = {

	  priority: ON,
	  acceptStatement: true,
	  keyCodes: keyCodes,

	  bind: function bind() {
	    // deal with iframes
	    if (this.el.tagName === 'IFRAME' && this.arg !== 'load') {
	      var self = this;
	      this.iframeBind = function () {
	        on(self.el.contentWindow, self.arg, self.handler, self.modifiers.capture);
	      };
	      this.on('load', this.iframeBind);
	    }
	  },

	  update: function update(handler) {
	    // stub a noop for v-on with no value,
	    // e.g. @mousedown.prevent
	    if (!this.descriptor.raw) {
	      handler = function () {};
	    }

	    if (typeof handler !== 'function') {
	      process.env.NODE_ENV !== 'production' && warn('v-on:' + this.arg + '="' + this.expression + '" expects a function value, ' + 'got ' + handler, this.vm);
	      return;
	    }

	    // apply modifiers
	    if (this.modifiers.stop) {
	      handler = stopFilter(handler);
	    }
	    if (this.modifiers.prevent) {
	      handler = preventFilter(handler);
	    }
	    if (this.modifiers.self) {
	      handler = selfFilter(handler);
	    }
	    // key filter
	    var keys = Object.keys(this.modifiers).filter(function (key) {
	      return key !== 'stop' && key !== 'prevent' && key !== 'self';
	    });
	    if (keys.length) {
	      handler = keyFilter(handler, keys);
	    }

	    this.reset();
	    this.handler = handler;

	    if (this.iframeBind) {
	      this.iframeBind();
	    } else {
	      on(this.el, this.arg, this.handler, this.modifiers.capture);
	    }
	  },

	  reset: function reset() {
	    var el = this.iframeBind ? this.el.contentWindow : this.el;
	    if (this.handler) {
	      off(el, this.arg, this.handler);
	    }
	  },

	  unbind: function unbind() {
	    this.reset();
	  }
	};

	var prefixes = ['-webkit-', '-moz-', '-ms-'];
	var camelPrefixes = ['Webkit', 'Moz', 'ms'];
	var importantRE = /!important;?$/;
	var propCache = Object.create(null);

	var testEl = null;

	var style = {

	  deep: true,

	  update: function update(value) {
	    if (typeof value === 'string') {
	      this.el.style.cssText = value;
	    } else if (isArray(value)) {
	      this.handleObject(value.reduce(extend, {}));
	    } else {
	      this.handleObject(value || {});
	    }
	  },

	  handleObject: function handleObject(value) {
	    // cache object styles so that only changed props
	    // are actually updated.
	    var cache = this.cache || (this.cache = {});
	    var name, val;
	    for (name in cache) {
	      if (!(name in value)) {
	        this.handleSingle(name, null);
	        delete cache[name];
	      }
	    }
	    for (name in value) {
	      val = value[name];
	      if (val !== cache[name]) {
	        cache[name] = val;
	        this.handleSingle(name, val);
	      }
	    }
	  },

	  handleSingle: function handleSingle(prop, value) {
	    prop = normalize(prop);
	    if (!prop) return; // unsupported prop
	    // cast possible numbers/booleans into strings
	    if (value != null) value += '';
	    if (value) {
	      var isImportant = importantRE.test(value) ? 'important' : '';
	      if (isImportant) {
	        /* istanbul ignore if */
	        if (process.env.NODE_ENV !== 'production') {
	          warn('It\'s probably a bad idea to use !important with inline rules. ' + 'This feature will be deprecated in a future version of Vue.');
	        }
	        value = value.replace(importantRE, '').trim();
	        this.el.style.setProperty(prop.kebab, value, isImportant);
	      } else {
	        this.el.style[prop.camel] = value;
	      }
	    } else {
	      this.el.style[prop.camel] = '';
	    }
	  }

	};

	/**
	 * Normalize a CSS property name.
	 * - cache result
	 * - auto prefix
	 * - camelCase -> dash-case
	 *
	 * @param {String} prop
	 * @return {String}
	 */

	function normalize(prop) {
	  if (propCache[prop]) {
	    return propCache[prop];
	  }
	  var res = prefix(prop);
	  propCache[prop] = propCache[res] = res;
	  return res;
	}

	/**
	 * Auto detect the appropriate prefix for a CSS property.
	 * https://gist.github.com/paulirish/523692
	 *
	 * @param {String} prop
	 * @return {String}
	 */

	function prefix(prop) {
	  prop = hyphenate(prop);
	  var camel = camelize(prop);
	  var upper = camel.charAt(0).toUpperCase() + camel.slice(1);
	  if (!testEl) {
	    testEl = document.createElement('div');
	  }
	  var i = prefixes.length;
	  var prefixed;
	  while (i--) {
	    prefixed = camelPrefixes[i] + upper;
	    if (prefixed in testEl.style) {
	      return {
	        kebab: prefixes[i] + prop,
	        camel: prefixed
	      };
	    }
	  }
	  if (camel in testEl.style) {
	    return {
	      kebab: prop,
	      camel: camel
	    };
	  }
	}

	// xlink
	var xlinkNS = 'http://www.w3.org/1999/xlink';
	var xlinkRE = /^xlink:/;

	// check for attributes that prohibit interpolations
	var disallowedInterpAttrRE = /^v-|^:|^@|^(?:is|transition|transition-mode|debounce|track-by|stagger|enter-stagger|leave-stagger)$/;
	// these attributes should also set their corresponding properties
	// because they only affect the initial state of the element
	var attrWithPropsRE = /^(?:value|checked|selected|muted)$/;
	// these attributes expect enumrated values of "true" or "false"
	// but are not boolean attributes
	var enumeratedAttrRE = /^(?:draggable|contenteditable|spellcheck)$/;

	// these attributes should set a hidden property for
	// binding v-model to object values
	var modelProps = {
	  value: '_value',
	  'true-value': '_trueValue',
	  'false-value': '_falseValue'
	};

	var bind$1 = {

	  priority: BIND,

	  bind: function bind() {
	    var attr = this.arg;
	    var tag = this.el.tagName;
	    // should be deep watch on object mode
	    if (!attr) {
	      this.deep = true;
	    }
	    // handle interpolation bindings
	    var descriptor = this.descriptor;
	    var tokens = descriptor.interp;
	    if (tokens) {
	      // handle interpolations with one-time tokens
	      if (descriptor.hasOneTime) {
	        this.expression = tokensToExp(tokens, this._scope || this.vm);
	      }

	      // only allow binding on native attributes
	      if (disallowedInterpAttrRE.test(attr) || attr === 'name' && (tag === 'PARTIAL' || tag === 'SLOT')) {
	        process.env.NODE_ENV !== 'production' && warn(attr + '="' + descriptor.raw + '": ' + 'attribute interpolation is not allowed in Vue.js ' + 'directives and special attributes.', this.vm);
	        this.el.removeAttribute(attr);
	        this.invalid = true;
	      }

	      /* istanbul ignore if */
	      if (process.env.NODE_ENV !== 'production') {
	        var raw = attr + '="' + descriptor.raw + '": ';
	        // warn src
	        if (attr === 'src') {
	          warn(raw + 'interpolation in "src" attribute will cause ' + 'a 404 request. Use v-bind:src instead.', this.vm);
	        }

	        // warn style
	        if (attr === 'style') {
	          warn(raw + 'interpolation in "style" attribute will cause ' + 'the attribute to be discarded in Internet Explorer. ' + 'Use v-bind:style instead.', this.vm);
	        }
	      }
	    }
	  },

	  update: function update(value) {
	    if (this.invalid) {
	      return;
	    }
	    var attr = this.arg;
	    if (this.arg) {
	      this.handleSingle(attr, value);
	    } else {
	      this.handleObject(value || {});
	    }
	  },

	  // share object handler with v-bind:class
	  handleObject: style.handleObject,

	  handleSingle: function handleSingle(attr, value) {
	    var el = this.el;
	    var interp = this.descriptor.interp;
	    if (this.modifiers.camel) {
	      attr = camelize(attr);
	    }
	    if (!interp && attrWithPropsRE.test(attr) && attr in el) {
	      el[attr] = attr === 'value' ? value == null // IE9 will set input.value to "null" for null...
	      ? '' : value : value;
	    }
	    // set model props
	    var modelProp = modelProps[attr];
	    if (!interp && modelProp) {
	      el[modelProp] = value;
	      // update v-model if present
	      var model = el.__v_model;
	      if (model) {
	        model.listener();
	      }
	    }
	    // do not set value attribute for textarea
	    if (attr === 'value' && el.tagName === 'TEXTAREA') {
	      el.removeAttribute(attr);
	      return;
	    }
	    // update attribute
	    if (enumeratedAttrRE.test(attr)) {
	      el.setAttribute(attr, value ? 'true' : 'false');
	    } else if (value != null && value !== false) {
	      if (attr === 'class') {
	        // handle edge case #1960:
	        // class interpolation should not overwrite Vue transition class
	        if (el.__v_trans) {
	          value += ' ' + el.__v_trans.id + '-transition';
	        }
	        setClass(el, value);
	      } else if (xlinkRE.test(attr)) {
	        el.setAttributeNS(xlinkNS, attr, value === true ? '' : value);
	      } else {
	        el.setAttribute(attr, value === true ? '' : value);
	      }
	    } else {
	      el.removeAttribute(attr);
	    }
	  }
	};

	var el = {

	  priority: EL,

	  bind: function bind() {
	    /* istanbul ignore if */
	    if (!this.arg) {
	      return;
	    }
	    var id = this.id = camelize(this.arg);
	    var refs = (this._scope || this.vm).$els;
	    if (hasOwn(refs, id)) {
	      refs[id] = this.el;
	    } else {
	      defineReactive(refs, id, this.el);
	    }
	  },

	  unbind: function unbind() {
	    var refs = (this._scope || this.vm).$els;
	    if (refs[this.id] === this.el) {
	      refs[this.id] = null;
	    }
	  }
	};

	var ref = {
	  bind: function bind() {
	    process.env.NODE_ENV !== 'production' && warn('v-ref:' + this.arg + ' must be used on a child ' + 'component. Found on <' + this.el.tagName.toLowerCase() + '>.', this.vm);
	  }
	};

	var cloak = {
	  bind: function bind() {
	    var el = this.el;
	    this.vm.$once('pre-hook:compiled', function () {
	      el.removeAttribute('v-cloak');
	    });
	  }
	};

	// must export plain object
	var directives = {
	  text: text$1,
	  html: html,
	  'for': vFor,
	  'if': vIf,
	  show: show,
	  model: model,
	  on: on$1,
	  bind: bind$1,
	  el: el,
	  ref: ref,
	  cloak: cloak
	};

	var vClass = {

	  deep: true,

	  update: function update(value) {
	    if (value && typeof value === 'string') {
	      this.handleObject(stringToObject(value));
	    } else if (isPlainObject(value)) {
	      this.handleObject(value);
	    } else if (isArray(value)) {
	      this.handleArray(value);
	    } else {
	      this.cleanup();
	    }
	  },

	  handleObject: function handleObject(value) {
	    this.cleanup(value);
	    this.prevKeys = Object.keys(value);
	    setObjectClasses(this.el, value);
	  },

	  handleArray: function handleArray(value) {
	    this.cleanup(value);
	    for (var i = 0, l = value.length; i < l; i++) {
	      var val = value[i];
	      if (val && isPlainObject(val)) {
	        setObjectClasses(this.el, val);
	      } else if (val && typeof val === 'string') {
	        addClass(this.el, val);
	      }
	    }
	    this.prevKeys = value.slice();
	  },

	  cleanup: function cleanup(value) {
	    if (!this.prevKeys) return;

	    var i = this.prevKeys.length;
	    while (i--) {
	      var key = this.prevKeys[i];
	      if (!key) continue;

	      var keys = isPlainObject(key) ? Object.keys(key) : [key];
	      for (var j = 0, l = keys.length; j < l; j++) {
	        toggleClasses(this.el, keys[j], removeClass);
	      }
	    }
	  }
	};

	function setObjectClasses(el, obj) {
	  var keys = Object.keys(obj);
	  for (var i = 0, l = keys.length; i < l; i++) {
	    var key = keys[i];
	    if (!obj[key]) continue;
	    toggleClasses(el, key, addClass);
	  }
	}

	function stringToObject(value) {
	  var res = {};
	  var keys = value.trim().split(/\s+/);
	  for (var i = 0, l = keys.length; i < l; i++) {
	    res[keys[i]] = true;
	  }
	  return res;
	}

	/**
	 * Add or remove a class/classes on an element
	 *
	 * @param {Element} el
	 * @param {String} key The class name. This may or may not
	 *                     contain a space character, in such a
	 *                     case we'll deal with multiple class
	 *                     names at once.
	 * @param {Function} fn
	 */

	function toggleClasses(el, key, fn) {
	  key = key.trim();

	  if (key.indexOf(' ') === -1) {
	    fn(el, key);
	    return;
	  }

	  // The key contains one or more space characters.
	  // Since a class name doesn't accept such characters, we
	  // treat it as multiple classes.
	  var keys = key.split(/\s+/);
	  for (var i = 0, l = keys.length; i < l; i++) {
	    fn(el, keys[i]);
	  }
	}

	var component = {

	  priority: COMPONENT,

	  params: ['keep-alive', 'transition-mode', 'inline-template'],

	  /**
	   * Setup. Two possible usages:
	   *
	   * - static:
	   *   <comp> or <div v-component="comp">
	   *
	   * - dynamic:
	   *   <component :is="view">
	   */

	  bind: function bind() {
	    if (!this.el.__vue__) {
	      // keep-alive cache
	      this.keepAlive = this.params.keepAlive;
	      if (this.keepAlive) {
	        this.cache = {};
	      }
	      // check inline-template
	      if (this.params.inlineTemplate) {
	        // extract inline template as a DocumentFragment
	        this.inlineTemplate = extractContent(this.el, true);
	      }
	      // component resolution related state
	      this.pendingComponentCb = this.Component = null;
	      // transition related state
	      this.pendingRemovals = 0;
	      this.pendingRemovalCb = null;
	      // create a ref anchor
	      this.anchor = createAnchor('v-component');
	      replace(this.el, this.anchor);
	      // remove is attribute.
	      // this is removed during compilation, but because compilation is
	      // cached, when the component is used elsewhere this attribute
	      // will remain at link time.
	      this.el.removeAttribute('is');
	      // remove ref, same as above
	      if (this.descriptor.ref) {
	        this.el.removeAttribute('v-ref:' + hyphenate(this.descriptor.ref));
	      }
	      // if static, build right now.
	      if (this.literal) {
	        this.setComponent(this.expression);
	      }
	    } else {
	      process.env.NODE_ENV !== 'production' && warn('cannot mount component "' + this.expression + '" ' + 'on already mounted element: ' + this.el);
	    }
	  },

	  /**
	   * Public update, called by the watcher in the dynamic
	   * literal scenario, e.g. <component :is="view">
	   */

	  update: function update(value) {
	    if (!this.literal) {
	      this.setComponent(value);
	    }
	  },

	  /**
	   * Switch dynamic components. May resolve the component
	   * asynchronously, and perform transition based on
	   * specified transition mode. Accepts a few additional
	   * arguments specifically for vue-router.
	   *
	   * The callback is called when the full transition is
	   * finished.
	   *
	   * @param {String} value
	   * @param {Function} [cb]
	   */

	  setComponent: function setComponent(value, cb) {
	    this.invalidatePending();
	    if (!value) {
	      // just remove current
	      this.unbuild(true);
	      this.remove(this.childVM, cb);
	      this.childVM = null;
	    } else {
	      var self = this;
	      this.resolveComponent(value, function () {
	        self.mountComponent(cb);
	      });
	    }
	  },

	  /**
	   * Resolve the component constructor to use when creating
	   * the child vm.
	   *
	   * @param {String|Function} value
	   * @param {Function} cb
	   */

	  resolveComponent: function resolveComponent(value, cb) {
	    var self = this;
	    this.pendingComponentCb = cancellable(function (Component) {
	      self.ComponentName = Component.options.name || (typeof value === 'string' ? value : null);
	      self.Component = Component;
	      cb();
	    });
	    this.vm._resolveComponent(value, this.pendingComponentCb);
	  },

	  /**
	   * Create a new instance using the current constructor and
	   * replace the existing instance. This method doesn't care
	   * whether the new component and the old one are actually
	   * the same.
	   *
	   * @param {Function} [cb]
	   */

	  mountComponent: function mountComponent(cb) {
	    // actual mount
	    this.unbuild(true);
	    var self = this;
	    var activateHooks = this.Component.options.activate;
	    var cached = this.getCached();
	    var newComponent = this.build();
	    if (activateHooks && !cached) {
	      this.waitingFor = newComponent;
	      callActivateHooks(activateHooks, newComponent, function () {
	        if (self.waitingFor !== newComponent) {
	          return;
	        }
	        self.waitingFor = null;
	        self.transition(newComponent, cb);
	      });
	    } else {
	      // update ref for kept-alive component
	      if (cached) {
	        newComponent._updateRef();
	      }
	      this.transition(newComponent, cb);
	    }
	  },

	  /**
	   * When the component changes or unbinds before an async
	   * constructor is resolved, we need to invalidate its
	   * pending callback.
	   */

	  invalidatePending: function invalidatePending() {
	    if (this.pendingComponentCb) {
	      this.pendingComponentCb.cancel();
	      this.pendingComponentCb = null;
	    }
	  },

	  /**
	   * Instantiate/insert a new child vm.
	   * If keep alive and has cached instance, insert that
	   * instance; otherwise build a new one and cache it.
	   *
	   * @param {Object} [extraOptions]
	   * @return {Vue} - the created instance
	   */

	  build: function build(extraOptions) {
	    var cached = this.getCached();
	    if (cached) {
	      return cached;
	    }
	    if (this.Component) {
	      // default options
	      var options = {
	        name: this.ComponentName,
	        el: cloneNode(this.el),
	        template: this.inlineTemplate,
	        // make sure to add the child with correct parent
	        // if this is a transcluded component, its parent
	        // should be the transclusion host.
	        parent: this._host || this.vm,
	        // if no inline-template, then the compiled
	        // linker can be cached for better performance.
	        _linkerCachable: !this.inlineTemplate,
	        _ref: this.descriptor.ref,
	        _asComponent: true,
	        _isRouterView: this._isRouterView,
	        // if this is a transcluded component, context
	        // will be the common parent vm of this instance
	        // and its host.
	        _context: this.vm,
	        // if this is inside an inline v-for, the scope
	        // will be the intermediate scope created for this
	        // repeat fragment. this is used for linking props
	        // and container directives.
	        _scope: this._scope,
	        // pass in the owner fragment of this component.
	        // this is necessary so that the fragment can keep
	        // track of its contained components in order to
	        // call attach/detach hooks for them.
	        _frag: this._frag
	      };
	      // extra options
	      // in 1.0.0 this is used by vue-router only
	      /* istanbul ignore if */
	      if (extraOptions) {
	        extend(options, extraOptions);
	      }
	      var child = new this.Component(options);
	      if (this.keepAlive) {
	        this.cache[this.Component.cid] = child;
	      }
	      /* istanbul ignore if */
	      if (process.env.NODE_ENV !== 'production' && this.el.hasAttribute('transition') && child._isFragment) {
	        warn('Transitions will not work on a fragment instance. ' + 'Template: ' + child.$options.template, child);
	      }
	      return child;
	    }
	  },

	  /**
	   * Try to get a cached instance of the current component.
	   *
	   * @return {Vue|undefined}
	   */

	  getCached: function getCached() {
	    return this.keepAlive && this.cache[this.Component.cid];
	  },

	  /**
	   * Teardown the current child, but defers cleanup so
	   * that we can separate the destroy and removal steps.
	   *
	   * @param {Boolean} defer
	   */

	  unbuild: function unbuild(defer) {
	    if (this.waitingFor) {
	      if (!this.keepAlive) {
	        this.waitingFor.$destroy();
	      }
	      this.waitingFor = null;
	    }
	    var child = this.childVM;
	    if (!child || this.keepAlive) {
	      if (child) {
	        // remove ref
	        child._inactive = true;
	        child._updateRef(true);
	      }
	      return;
	    }
	    // the sole purpose of `deferCleanup` is so that we can
	    // "deactivate" the vm right now and perform DOM removal
	    // later.
	    child.$destroy(false, defer);
	  },

	  /**
	   * Remove current destroyed child and manually do
	   * the cleanup after removal.
	   *
	   * @param {Function} cb
	   */

	  remove: function remove(child, cb) {
	    var keepAlive = this.keepAlive;
	    if (child) {
	      // we may have a component switch when a previous
	      // component is still being transitioned out.
	      // we want to trigger only one lastest insertion cb
	      // when the existing transition finishes. (#1119)
	      this.pendingRemovals++;
	      this.pendingRemovalCb = cb;
	      var self = this;
	      child.$remove(function () {
	        self.pendingRemovals--;
	        if (!keepAlive) child._cleanup();
	        if (!self.pendingRemovals && self.pendingRemovalCb) {
	          self.pendingRemovalCb();
	          self.pendingRemovalCb = null;
	        }
	      });
	    } else if (cb) {
	      cb();
	    }
	  },

	  /**
	   * Actually swap the components, depending on the
	   * transition mode. Defaults to simultaneous.
	   *
	   * @param {Vue} target
	   * @param {Function} [cb]
	   */

	  transition: function transition(target, cb) {
	    var self = this;
	    var current = this.childVM;
	    // for devtool inspection
	    if (current) current._inactive = true;
	    target._inactive = false;
	    this.childVM = target;
	    switch (self.params.transitionMode) {
	      case 'in-out':
	        target.$before(self.anchor, function () {
	          self.remove(current, cb);
	        });
	        break;
	      case 'out-in':
	        self.remove(current, function () {
	          target.$before(self.anchor, cb);
	        });
	        break;
	      default:
	        self.remove(current);
	        target.$before(self.anchor, cb);
	    }
	  },

	  /**
	   * Unbind.
	   */

	  unbind: function unbind() {
	    this.invalidatePending();
	    // Do not defer cleanup when unbinding
	    this.unbuild();
	    // destroy all keep-alive cached instances
	    if (this.cache) {
	      for (var key in this.cache) {
	        this.cache[key].$destroy();
	      }
	      this.cache = null;
	    }
	  }
	};

	/**
	 * Call activate hooks in order (asynchronous)
	 *
	 * @param {Array} hooks
	 * @param {Vue} vm
	 * @param {Function} cb
	 */

	function callActivateHooks(hooks, vm, cb) {
	  var total = hooks.length;
	  var called = 0;
	  hooks[0].call(vm, next);
	  function next() {
	    if (++called >= total) {
	      cb();
	    } else {
	      hooks[called].call(vm, next);
	    }
	  }
	}

	var propBindingModes = config._propBindingModes;
	var empty = {};

	// regexes
	var identRE$1 = /^[$_a-zA-Z]+[\w$]*$/;
	var settablePathRE = /^[A-Za-z_$][\w$]*(\.[A-Za-z_$][\w$]*|\[[^\[\]]+\])*$/;

	/**
	 * Compile props on a root element and return
	 * a props link function.
	 *
	 * @param {Element|DocumentFragment} el
	 * @param {Array} propOptions
	 * @param {Vue} vm
	 * @return {Function} propsLinkFn
	 */

	function compileProps(el, propOptions, vm) {
	  var props = [];
	  var names = Object.keys(propOptions);
	  var i = names.length;
	  var options, name, attr, value, path, parsed, prop;
	  while (i--) {
	    name = names[i];
	    options = propOptions[name] || empty;

	    if (process.env.NODE_ENV !== 'production' && name === '$data') {
	      warn('Do not use $data as prop.', vm);
	      continue;
	    }

	    // props could contain dashes, which will be
	    // interpreted as minus calculations by the parser
	    // so we need to camelize the path here
	    path = camelize(name);
	    if (!identRE$1.test(path)) {
	      process.env.NODE_ENV !== 'production' && warn('Invalid prop key: "' + name + '". Prop keys ' + 'must be valid identifiers.', vm);
	      continue;
	    }

	    prop = {
	      name: name,
	      path: path,
	      options: options,
	      mode: propBindingModes.ONE_WAY,
	      raw: null
	    };

	    attr = hyphenate(name);
	    // first check dynamic version
	    if ((value = getBindAttr(el, attr)) === null) {
	      if ((value = getBindAttr(el, attr + '.sync')) !== null) {
	        prop.mode = propBindingModes.TWO_WAY;
	      } else if ((value = getBindAttr(el, attr + '.once')) !== null) {
	        prop.mode = propBindingModes.ONE_TIME;
	      }
	    }
	    if (value !== null) {
	      // has dynamic binding!
	      prop.raw = value;
	      parsed = parseDirective(value);
	      value = parsed.expression;
	      prop.filters = parsed.filters;
	      // check binding type
	      if (isLiteral(value) && !parsed.filters) {
	        // for expressions containing literal numbers and
	        // booleans, there's no need to setup a prop binding,
	        // so we can optimize them as a one-time set.
	        prop.optimizedLiteral = true;
	      } else {
	        prop.dynamic = true;
	        // check non-settable path for two-way bindings
	        if (process.env.NODE_ENV !== 'production' && prop.mode === propBindingModes.TWO_WAY && !settablePathRE.test(value)) {
	          prop.mode = propBindingModes.ONE_WAY;
	          warn('Cannot bind two-way prop with non-settable ' + 'parent path: ' + value, vm);
	        }
	      }
	      prop.parentPath = value;

	      // warn required two-way
	      if (process.env.NODE_ENV !== 'production' && options.twoWay && prop.mode !== propBindingModes.TWO_WAY) {
	        warn('Prop "' + name + '" expects a two-way binding type.', vm);
	      }
	    } else if ((value = getAttr(el, attr)) !== null) {
	      // has literal binding!
	      prop.raw = value;
	    } else if (process.env.NODE_ENV !== 'production') {
	      // check possible camelCase prop usage
	      var lowerCaseName = path.toLowerCase();
	      value = /[A-Z\-]/.test(name) && (el.getAttribute(lowerCaseName) || el.getAttribute(':' + lowerCaseName) || el.getAttribute('v-bind:' + lowerCaseName) || el.getAttribute(':' + lowerCaseName + '.once') || el.getAttribute('v-bind:' + lowerCaseName + '.once') || el.getAttribute(':' + lowerCaseName + '.sync') || el.getAttribute('v-bind:' + lowerCaseName + '.sync'));
	      if (value) {
	        warn('Possible usage error for prop `' + lowerCaseName + '` - ' + 'did you mean `' + attr + '`? HTML is case-insensitive, remember to use ' + 'kebab-case for props in templates.', vm);
	      } else if (options.required) {
	        // warn missing required
	        warn('Missing required prop: ' + name, vm);
	      }
	    }
	    // push prop
	    props.push(prop);
	  }
	  return makePropsLinkFn(props);
	}

	/**
	 * Build a function that applies props to a vm.
	 *
	 * @param {Array} props
	 * @return {Function} propsLinkFn
	 */

	function makePropsLinkFn(props) {
	  return function propsLinkFn(vm, scope) {
	    // store resolved props info
	    vm._props = {};
	    var i = props.length;
	    var prop, path, options, value, raw;
	    while (i--) {
	      prop = props[i];
	      raw = prop.raw;
	      path = prop.path;
	      options = prop.options;
	      vm._props[path] = prop;
	      if (raw === null) {
	        // initialize absent prop
	        initProp(vm, prop, undefined);
	      } else if (prop.dynamic) {
	        // dynamic prop
	        if (prop.mode === propBindingModes.ONE_TIME) {
	          // one time binding
	          value = (scope || vm._context || vm).$get(prop.parentPath);
	          initProp(vm, prop, value);
	        } else {
	          if (vm._context) {
	            // dynamic binding
	            vm._bindDir({
	              name: 'prop',
	              def: propDef,
	              prop: prop
	            }, null, null, scope); // el, host, scope
	          } else {
	              // root instance
	              initProp(vm, prop, vm.$get(prop.parentPath));
	            }
	        }
	      } else if (prop.optimizedLiteral) {
	        // optimized literal, cast it and just set once
	        var stripped = stripQuotes(raw);
	        value = stripped === raw ? toBoolean(toNumber(raw)) : stripped;
	        initProp(vm, prop, value);
	      } else {
	        // string literal, but we need to cater for
	        // Boolean props with no value, or with same
	        // literal value (e.g. disabled="disabled")
	        // see https://github.com/vuejs/vue-loader/issues/182
	        value = options.type === Boolean && (raw === '' || raw === hyphenate(prop.name)) ? true : raw;
	        initProp(vm, prop, value);
	      }
	    }
	  };
	}

	/**
	 * Process a prop with a rawValue, applying necessary coersions,
	 * default values & assertions and call the given callback with
	 * processed value.
	 *
	 * @param {Vue} vm
	 * @param {Object} prop
	 * @param {*} rawValue
	 * @param {Function} fn
	 */

	function processPropValue(vm, prop, rawValue, fn) {
	  var isSimple = prop.dynamic && isSimplePath(prop.parentPath);
	  var value = rawValue;
	  if (value === undefined) {
	    value = getPropDefaultValue(vm, prop);
	  }
	  value = coerceProp(prop, value);
	  var coerced = value !== rawValue;
	  if (!assertProp(prop, value, vm)) {
	    value = undefined;
	  }
	  if (isSimple && !coerced) {
	    withoutConversion(function () {
	      fn(value);
	    });
	  } else {
	    fn(value);
	  }
	}

	/**
	 * Set a prop's initial value on a vm and its data object.
	 *
	 * @param {Vue} vm
	 * @param {Object} prop
	 * @param {*} value
	 */

	function initProp(vm, prop, value) {
	  processPropValue(vm, prop, value, function (value) {
	    defineReactive(vm, prop.path, value);
	  });
	}

	/**
	 * Update a prop's value on a vm.
	 *
	 * @param {Vue} vm
	 * @param {Object} prop
	 * @param {*} value
	 */

	function updateProp(vm, prop, value) {
	  processPropValue(vm, prop, value, function (value) {
	    vm[prop.path] = value;
	  });
	}

	/**
	 * Get the default value of a prop.
	 *
	 * @param {Vue} vm
	 * @param {Object} prop
	 * @return {*}
	 */

	function getPropDefaultValue(vm, prop) {
	  // no default, return undefined
	  var options = prop.options;
	  if (!hasOwn(options, 'default')) {
	    // absent boolean value defaults to false
	    return options.type === Boolean ? false : undefined;
	  }
	  var def = options['default'];
	  // warn against non-factory defaults for Object & Array
	  if (isObject(def)) {
	    process.env.NODE_ENV !== 'production' && warn('Invalid default value for prop "' + prop.name + '": ' + 'Props with type Object/Array must use a factory function ' + 'to return the default value.', vm);
	  }
	  // call factory function for non-Function types
	  return typeof def === 'function' && options.type !== Function ? def.call(vm) : def;
	}

	/**
	 * Assert whether a prop is valid.
	 *
	 * @param {Object} prop
	 * @param {*} value
	 * @param {Vue} vm
	 */

	function assertProp(prop, value, vm) {
	  if (!prop.options.required && ( // non-required
	  prop.raw === null || // abscent
	  value == null) // null or undefined
	  ) {
	      return true;
	    }
	  var options = prop.options;
	  var type = options.type;
	  var valid = !type;
	  var expectedTypes = [];
	  if (type) {
	    if (!isArray(type)) {
	      type = [type];
	    }
	    for (var i = 0; i < type.length && !valid; i++) {
	      var assertedType = assertType(value, type[i]);
	      expectedTypes.push(assertedType.expectedType);
	      valid = assertedType.valid;
	    }
	  }
	  if (!valid) {
	    if (process.env.NODE_ENV !== 'production') {
	      warn('Invalid prop: type check failed for prop "' + prop.name + '".' + ' Expected ' + expectedTypes.map(formatType).join(', ') + ', got ' + formatValue(value) + '.', vm);
	    }
	    return false;
	  }
	  var validator = options.validator;
	  if (validator) {
	    if (!validator(value)) {
	      process.env.NODE_ENV !== 'production' && warn('Invalid prop: custom validator check failed for prop "' + prop.name + '".', vm);
	      return false;
	    }
	  }
	  return true;
	}

	/**
	 * Force parsing value with coerce option.
	 *
	 * @param {*} value
	 * @param {Object} options
	 * @return {*}
	 */

	function coerceProp(prop, value) {
	  var coerce = prop.options.coerce;
	  if (!coerce) {
	    return value;
	  }
	  // coerce is a function
	  return coerce(value);
	}

	/**
	 * Assert the type of a value
	 *
	 * @param {*} value
	 * @param {Function} type
	 * @return {Object}
	 */

	function assertType(value, type) {
	  var valid;
	  var expectedType;
	  if (type === String) {
	    expectedType = 'string';
	    valid = typeof value === expectedType;
	  } else if (type === Number) {
	    expectedType = 'number';
	    valid = typeof value === expectedType;
	  } else if (type === Boolean) {
	    expectedType = 'boolean';
	    valid = typeof value === expectedType;
	  } else if (type === Function) {
	    expectedType = 'function';
	    valid = typeof value === expectedType;
	  } else if (type === Object) {
	    expectedType = 'object';
	    valid = isPlainObject(value);
	  } else if (type === Array) {
	    expectedType = 'array';
	    valid = isArray(value);
	  } else {
	    valid = value instanceof type;
	  }
	  return {
	    valid: valid,
	    expectedType: expectedType
	  };
	}

	/**
	 * Format type for output
	 *
	 * @param {String} type
	 * @return {String}
	 */

	function formatType(type) {
	  return type ? type.charAt(0).toUpperCase() + type.slice(1) : 'custom type';
	}

	/**
	 * Format value
	 *
	 * @param {*} value
	 * @return {String}
	 */

	function formatValue(val) {
	  return Object.prototype.toString.call(val).slice(8, -1);
	}

	var bindingModes = config._propBindingModes;

	var propDef = {

	  bind: function bind() {
	    var child = this.vm;
	    var parent = child._context;
	    // passed in from compiler directly
	    var prop = this.descriptor.prop;
	    var childKey = prop.path;
	    var parentKey = prop.parentPath;
	    var twoWay = prop.mode === bindingModes.TWO_WAY;

	    var parentWatcher = this.parentWatcher = new Watcher(parent, parentKey, function (val) {
	      updateProp(child, prop, val);
	    }, {
	      twoWay: twoWay,
	      filters: prop.filters,
	      // important: props need to be observed on the
	      // v-for scope if present
	      scope: this._scope
	    });

	    // set the child initial value.
	    initProp(child, prop, parentWatcher.value);

	    // setup two-way binding
	    if (twoWay) {
	      // important: defer the child watcher creation until
	      // the created hook (after data observation)
	      var self = this;
	      child.$once('pre-hook:created', function () {
	        self.childWatcher = new Watcher(child, childKey, function (val) {
	          parentWatcher.set(val);
	        }, {
	          // ensure sync upward before parent sync down.
	          // this is necessary in cases e.g. the child
	          // mutates a prop array, then replaces it. (#1683)
	          sync: true
	        });
	      });
	    }
	  },

	  unbind: function unbind() {
	    this.parentWatcher.teardown();
	    if (this.childWatcher) {
	      this.childWatcher.teardown();
	    }
	  }
	};

	var queue$1 = [];
	var queued = false;

	/**
	 * Push a job into the queue.
	 *
	 * @param {Function} job
	 */

	function pushJob(job) {
	  queue$1.push(job);
	  if (!queued) {
	    queued = true;
	    nextTick(flush);
	  }
	}

	/**
	 * Flush the queue, and do one forced reflow before
	 * triggering transitions.
	 */

	function flush() {
	  // Force layout
	  var f = document.documentElement.offsetHeight;
	  for (var i = 0; i < queue$1.length; i++) {
	    queue$1[i]();
	  }
	  queue$1 = [];
	  queued = false;
	  // dummy return, so js linters don't complain about
	  // unused variable f
	  return f;
	}

	var TYPE_TRANSITION = 'transition';
	var TYPE_ANIMATION = 'animation';
	var transDurationProp = transitionProp + 'Duration';
	var animDurationProp = animationProp + 'Duration';

	/**
	 * If a just-entered element is applied the
	 * leave class while its enter transition hasn't started yet,
	 * and the transitioned property has the same value for both
	 * enter/leave, then the leave transition will be skipped and
	 * the transitionend event never fires. This function ensures
	 * its callback to be called after a transition has started
	 * by waiting for double raf.
	 *
	 * It falls back to setTimeout on devices that support CSS
	 * transitions but not raf (e.g. Android 4.2 browser) - since
	 * these environments are usually slow, we are giving it a
	 * relatively large timeout.
	 */

	var raf = inBrowser && window.requestAnimationFrame;
	var waitForTransitionStart = raf
	/* istanbul ignore next */
	? function (fn) {
	  raf(function () {
	    raf(fn);
	  });
	} : function (fn) {
	  setTimeout(fn, 50);
	};

	/**
	 * A Transition object that encapsulates the state and logic
	 * of the transition.
	 *
	 * @param {Element} el
	 * @param {String} id
	 * @param {Object} hooks
	 * @param {Vue} vm
	 */
	function Transition(el, id, hooks, vm) {
	  this.id = id;
	  this.el = el;
	  this.enterClass = hooks && hooks.enterClass || id + '-enter';
	  this.leaveClass = hooks && hooks.leaveClass || id + '-leave';
	  this.hooks = hooks;
	  this.vm = vm;
	  // async state
	  this.pendingCssEvent = this.pendingCssCb = this.cancel = this.pendingJsCb = this.op = this.cb = null;
	  this.justEntered = false;
	  this.entered = this.left = false;
	  this.typeCache = {};
	  // check css transition type
	  this.type = hooks && hooks.type;
	  /* istanbul ignore if */
	  if (process.env.NODE_ENV !== 'production') {
	    if (this.type && this.type !== TYPE_TRANSITION && this.type !== TYPE_ANIMATION) {
	      warn('invalid CSS transition type for transition="' + this.id + '": ' + this.type, vm);
	    }
	  }
	  // bind
	  var self = this;['enterNextTick', 'enterDone', 'leaveNextTick', 'leaveDone'].forEach(function (m) {
	    self[m] = bind(self[m], self);
	  });
	}

	var p$1 = Transition.prototype;

	/**
	 * Start an entering transition.
	 *
	 * 1. enter transition triggered
	 * 2. call beforeEnter hook
	 * 3. add enter class
	 * 4. insert/show element
	 * 5. call enter hook (with possible explicit js callback)
	 * 6. reflow
	 * 7. based on transition type:
	 *    - transition:
	 *        remove class now, wait for transitionend,
	 *        then done if there's no explicit js callback.
	 *    - animation:
	 *        wait for animationend, remove class,
	 *        then done if there's no explicit js callback.
	 *    - no css transition:
	 *        done now if there's no explicit js callback.
	 * 8. wait for either done or js callback, then call
	 *    afterEnter hook.
	 *
	 * @param {Function} op - insert/show the element
	 * @param {Function} [cb]
	 */

	p$1.enter = function (op, cb) {
	  this.cancelPending();
	  this.callHook('beforeEnter');
	  this.cb = cb;
	  addClass(this.el, this.enterClass);
	  op();
	  this.entered = false;
	  this.callHookWithCb('enter');
	  if (this.entered) {
	    return; // user called done synchronously.
	  }
	  this.cancel = this.hooks && this.hooks.enterCancelled;
	  pushJob(this.enterNextTick);
	};

	/**
	 * The "nextTick" phase of an entering transition, which is
	 * to be pushed into a queue and executed after a reflow so
	 * that removing the class can trigger a CSS transition.
	 */

	p$1.enterNextTick = function () {
	  var _this = this;

	  // prevent transition skipping
	  this.justEntered = true;
	  waitForTransitionStart(function () {
	    _this.justEntered = false;
	  });
	  var enterDone = this.enterDone;
	  var type = this.getCssTransitionType(this.enterClass);
	  if (!this.pendingJsCb) {
	    if (type === TYPE_TRANSITION) {
	      // trigger transition by removing enter class now
	      removeClass(this.el, this.enterClass);
	      this.setupCssCb(transitionEndEvent, enterDone);
	    } else if (type === TYPE_ANIMATION) {
	      this.setupCssCb(animationEndEvent, enterDone);
	    } else {
	      enterDone();
	    }
	  } else if (type === TYPE_TRANSITION) {
	    removeClass(this.el, this.enterClass);
	  }
	};

	/**
	 * The "cleanup" phase of an entering transition.
	 */

	p$1.enterDone = function () {
	  this.entered = true;
	  this.cancel = this.pendingJsCb = null;
	  removeClass(this.el, this.enterClass);
	  this.callHook('afterEnter');
	  if (this.cb) this.cb();
	};

	/**
	 * Start a leaving transition.
	 *
	 * 1. leave transition triggered.
	 * 2. call beforeLeave hook
	 * 3. add leave class (trigger css transition)
	 * 4. call leave hook (with possible explicit js callback)
	 * 5. reflow if no explicit js callback is provided
	 * 6. based on transition type:
	 *    - transition or animation:
	 *        wait for end event, remove class, then done if
	 *        there's no explicit js callback.
	 *    - no css transition:
	 *        done if there's no explicit js callback.
	 * 7. wait for either done or js callback, then call
	 *    afterLeave hook.
	 *
	 * @param {Function} op - remove/hide the element
	 * @param {Function} [cb]
	 */

	p$1.leave = function (op, cb) {
	  this.cancelPending();
	  this.callHook('beforeLeave');
	  this.op = op;
	  this.cb = cb;
	  addClass(this.el, this.leaveClass);
	  this.left = false;
	  this.callHookWithCb('leave');
	  if (this.left) {
	    return; // user called done synchronously.
	  }
	  this.cancel = this.hooks && this.hooks.leaveCancelled;
	  // only need to handle leaveDone if
	  // 1. the transition is already done (synchronously called
	  //    by the user, which causes this.op set to null)
	  // 2. there's no explicit js callback
	  if (this.op && !this.pendingJsCb) {
	    // if a CSS transition leaves immediately after enter,
	    // the transitionend event never fires. therefore we
	    // detect such cases and end the leave immediately.
	    if (this.justEntered) {
	      this.leaveDone();
	    } else {
	      pushJob(this.leaveNextTick);
	    }
	  }
	};

	/**
	 * The "nextTick" phase of a leaving transition.
	 */

	p$1.leaveNextTick = function () {
	  var type = this.getCssTransitionType(this.leaveClass);
	  if (type) {
	    var event = type === TYPE_TRANSITION ? transitionEndEvent : animationEndEvent;
	    this.setupCssCb(event, this.leaveDone);
	  } else {
	    this.leaveDone();
	  }
	};

	/**
	 * The "cleanup" phase of a leaving transition.
	 */

	p$1.leaveDone = function () {
	  this.left = true;
	  this.cancel = this.pendingJsCb = null;
	  this.op();
	  removeClass(this.el, this.leaveClass);
	  this.callHook('afterLeave');
	  if (this.cb) this.cb();
	  this.op = null;
	};

	/**
	 * Cancel any pending callbacks from a previously running
	 * but not finished transition.
	 */

	p$1.cancelPending = function () {
	  this.op = this.cb = null;
	  var hasPending = false;
	  if (this.pendingCssCb) {
	    hasPending = true;
	    off(this.el, this.pendingCssEvent, this.pendingCssCb);
	    this.pendingCssEvent = this.pendingCssCb = null;
	  }
	  if (this.pendingJsCb) {
	    hasPending = true;
	    this.pendingJsCb.cancel();
	    this.pendingJsCb = null;
	  }
	  if (hasPending) {
	    removeClass(this.el, this.enterClass);
	    removeClass(this.el, this.leaveClass);
	  }
	  if (this.cancel) {
	    this.cancel.call(this.vm, this.el);
	    this.cancel = null;
	  }
	};

	/**
	 * Call a user-provided synchronous hook function.
	 *
	 * @param {String} type
	 */

	p$1.callHook = function (type) {
	  if (this.hooks && this.hooks[type]) {
	    this.hooks[type].call(this.vm, this.el);
	  }
	};

	/**
	 * Call a user-provided, potentially-async hook function.
	 * We check for the length of arguments to see if the hook
	 * expects a `done` callback. If true, the transition's end
	 * will be determined by when the user calls that callback;
	 * otherwise, the end is determined by the CSS transition or
	 * animation.
	 *
	 * @param {String} type
	 */

	p$1.callHookWithCb = function (type) {
	  var hook = this.hooks && this.hooks[type];
	  if (hook) {
	    if (hook.length > 1) {
	      this.pendingJsCb = cancellable(this[type + 'Done']);
	    }
	    hook.call(this.vm, this.el, this.pendingJsCb);
	  }
	};

	/**
	 * Get an element's transition type based on the
	 * calculated styles.
	 *
	 * @param {String} className
	 * @return {Number}
	 */

	p$1.getCssTransitionType = function (className) {
	  /* istanbul ignore if */
	  if (!transitionEndEvent ||
	  // skip CSS transitions if page is not visible -
	  // this solves the issue of transitionend events not
	  // firing until the page is visible again.
	  // pageVisibility API is supported in IE10+, same as
	  // CSS transitions.
	  document.hidden ||
	  // explicit js-only transition
	  this.hooks && this.hooks.css === false ||
	  // element is hidden
	  isHidden(this.el)) {
	    return;
	  }
	  var type = this.type || this.typeCache[className];
	  if (type) return type;
	  var inlineStyles = this.el.style;
	  var computedStyles = window.getComputedStyle(this.el);
	  var transDuration = inlineStyles[transDurationProp] || computedStyles[transDurationProp];
	  if (transDuration && transDuration !== '0s') {
	    type = TYPE_TRANSITION;
	  } else {
	    var animDuration = inlineStyles[animDurationProp] || computedStyles[animDurationProp];
	    if (animDuration && animDuration !== '0s') {
	      type = TYPE_ANIMATION;
	    }
	  }
	  if (type) {
	    this.typeCache[className] = type;
	  }
	  return type;
	};

	/**
	 * Setup a CSS transitionend/animationend callback.
	 *
	 * @param {String} event
	 * @param {Function} cb
	 */

	p$1.setupCssCb = function (event, cb) {
	  this.pendingCssEvent = event;
	  var self = this;
	  var el = this.el;
	  var onEnd = this.pendingCssCb = function (e) {
	    if (e.target === el) {
	      off(el, event, onEnd);
	      self.pendingCssEvent = self.pendingCssCb = null;
	      if (!self.pendingJsCb && cb) {
	        cb();
	      }
	    }
	  };
	  on(el, event, onEnd);
	};

	/**
	 * Check if an element is hidden - in that case we can just
	 * skip the transition alltogether.
	 *
	 * @param {Element} el
	 * @return {Boolean}
	 */

	function isHidden(el) {
	  if (/svg$/.test(el.namespaceURI)) {
	    // SVG elements do not have offset(Width|Height)
	    // so we need to check the client rect
	    var rect = el.getBoundingClientRect();
	    return !(rect.width || rect.height);
	  } else {
	    return !(el.offsetWidth || el.offsetHeight || el.getClientRects().length);
	  }
	}

	var transition$1 = {

	  priority: TRANSITION,

	  update: function update(id, oldId) {
	    var el = this.el;
	    // resolve on owner vm
	    var hooks = resolveAsset(this.vm.$options, 'transitions', id);
	    id = id || 'v';
	    el.__v_trans = new Transition(el, id, hooks, this.vm);
	    if (oldId) {
	      removeClass(el, oldId + '-transition');
	    }
	    addClass(el, id + '-transition');
	  }
	};

	var internalDirectives = {
	  style: style,
	  'class': vClass,
	  component: component,
	  prop: propDef,
	  transition: transition$1
	};

	// special binding prefixes
	var bindRE = /^v-bind:|^:/;
	var onRE = /^v-on:|^@/;
	var dirAttrRE = /^v-([^:]+)(?:$|:(.*)$)/;
	var modifierRE = /\.[^\.]+/g;
	var transitionRE = /^(v-bind:|:)?transition$/;

	// default directive priority
	var DEFAULT_PRIORITY = 1000;
	var DEFAULT_TERMINAL_PRIORITY = 2000;

	/**
	 * Compile a template and return a reusable composite link
	 * function, which recursively contains more link functions
	 * inside. This top level compile function would normally
	 * be called on instance root nodes, but can also be used
	 * for partial compilation if the partial argument is true.
	 *
	 * The returned composite link function, when called, will
	 * return an unlink function that tearsdown all directives
	 * created during the linking phase.
	 *
	 * @param {Element|DocumentFragment} el
	 * @param {Object} options
	 * @param {Boolean} partial
	 * @return {Function}
	 */

	function compile(el, options, partial) {
	  // link function for the node itself.
	  var nodeLinkFn = partial || !options._asComponent ? compileNode(el, options) : null;
	  // link function for the childNodes
	  var childLinkFn = !(nodeLinkFn && nodeLinkFn.terminal) && el.tagName !== 'SCRIPT' && el.hasChildNodes() ? compileNodeList(el.childNodes, options) : null;

	  /**
	   * A composite linker function to be called on a already
	   * compiled piece of DOM, which instantiates all directive
	   * instances.
	   *
	   * @param {Vue} vm
	   * @param {Element|DocumentFragment} el
	   * @param {Vue} [host] - host vm of transcluded content
	   * @param {Object} [scope] - v-for scope
	   * @param {Fragment} [frag] - link context fragment
	   * @return {Function|undefined}
	   */

	  return function compositeLinkFn(vm, el, host, scope, frag) {
	    // cache childNodes before linking parent, fix #657
	    var childNodes = toArray(el.childNodes);
	    // link
	    var dirs = linkAndCapture(function compositeLinkCapturer() {
	      if (nodeLinkFn) nodeLinkFn(vm, el, host, scope, frag);
	      if (childLinkFn) childLinkFn(vm, childNodes, host, scope, frag);
	    }, vm);
	    return makeUnlinkFn(vm, dirs);
	  };
	}

	/**
	 * Apply a linker to a vm/element pair and capture the
	 * directives created during the process.
	 *
	 * @param {Function} linker
	 * @param {Vue} vm
	 */

	function linkAndCapture(linker, vm) {
	  /* istanbul ignore if */
	  if (process.env.NODE_ENV === 'production') {
	    // reset directives before every capture in production
	    // mode, so that when unlinking we don't need to splice
	    // them out (which turns out to be a perf hit).
	    // they are kept in development mode because they are
	    // useful for Vue's own tests.
	    vm._directives = [];
	  }
	  var originalDirCount = vm._directives.length;
	  linker();
	  var dirs = vm._directives.slice(originalDirCount);
	  dirs.sort(directiveComparator);
	  for (var i = 0, l = dirs.length; i < l; i++) {
	    dirs[i]._bind();
	  }
	  return dirs;
	}

	/**
	 * Directive priority sort comparator
	 *
	 * @param {Object} a
	 * @param {Object} b
	 */

	function directiveComparator(a, b) {
	  a = a.descriptor.def.priority || DEFAULT_PRIORITY;
	  b = b.descriptor.def.priority || DEFAULT_PRIORITY;
	  return a > b ? -1 : a === b ? 0 : 1;
	}

	/**
	 * Linker functions return an unlink function that
	 * tearsdown all directives instances generated during
	 * the process.
	 *
	 * We create unlink functions with only the necessary
	 * information to avoid retaining additional closures.
	 *
	 * @param {Vue} vm
	 * @param {Array} dirs
	 * @param {Vue} [context]
	 * @param {Array} [contextDirs]
	 * @return {Function}
	 */

	function makeUnlinkFn(vm, dirs, context, contextDirs) {
	  function unlink(destroying) {
	    teardownDirs(vm, dirs, destroying);
	    if (context && contextDirs) {
	      teardownDirs(context, contextDirs);
	    }
	  }
	  // expose linked directives
	  unlink.dirs = dirs;
	  return unlink;
	}

	/**
	 * Teardown partial linked directives.
	 *
	 * @param {Vue} vm
	 * @param {Array} dirs
	 * @param {Boolean} destroying
	 */

	function teardownDirs(vm, dirs, destroying) {
	  var i = dirs.length;
	  while (i--) {
	    dirs[i]._teardown();
	    if (process.env.NODE_ENV !== 'production' && !destroying) {
	      vm._directives.$remove(dirs[i]);
	    }
	  }
	}

	/**
	 * Compile link props on an instance.
	 *
	 * @param {Vue} vm
	 * @param {Element} el
	 * @param {Object} props
	 * @param {Object} [scope]
	 * @return {Function}
	 */

	function compileAndLinkProps(vm, el, props, scope) {
	  var propsLinkFn = compileProps(el, props, vm);
	  var propDirs = linkAndCapture(function () {
	    propsLinkFn(vm, scope);
	  }, vm);
	  return makeUnlinkFn(vm, propDirs);
	}

	/**
	 * Compile the root element of an instance.
	 *
	 * 1. attrs on context container (context scope)
	 * 2. attrs on the component template root node, if
	 *    replace:true (child scope)
	 *
	 * If this is a fragment instance, we only need to compile 1.
	 *
	 * @param {Element} el
	 * @param {Object} options
	 * @param {Object} contextOptions
	 * @return {Function}
	 */

	function compileRoot(el, options, contextOptions) {
	  var containerAttrs = options._containerAttrs;
	  var replacerAttrs = options._replacerAttrs;
	  var contextLinkFn, replacerLinkFn;

	  // only need to compile other attributes for
	  // non-fragment instances
	  if (el.nodeType !== 11) {
	    // for components, container and replacer need to be
	    // compiled separately and linked in different scopes.
	    if (options._asComponent) {
	      // 2. container attributes
	      if (containerAttrs && contextOptions) {
	        contextLinkFn = compileDirectives(containerAttrs, contextOptions);
	      }
	      if (replacerAttrs) {
	        // 3. replacer attributes
	        replacerLinkFn = compileDirectives(replacerAttrs, options);
	      }
	    } else {
	      // non-component, just compile as a normal element.
	      replacerLinkFn = compileDirectives(el.attributes, options);
	    }
	  } else if (process.env.NODE_ENV !== 'production' && containerAttrs) {
	    // warn container directives for fragment instances
	    var names = containerAttrs.filter(function (attr) {
	      // allow vue-loader/vueify scoped css attributes
	      return attr.name.indexOf('_v-') < 0 &&
	      // allow event listeners
	      !onRE.test(attr.name) &&
	      // allow slots
	      attr.name !== 'slot';
	    }).map(function (attr) {
	      return '"' + attr.name + '"';
	    });
	    if (names.length) {
	      var plural = names.length > 1;
	      warn('Attribute' + (plural ? 's ' : ' ') + names.join(', ') + (plural ? ' are' : ' is') + ' ignored on component ' + '<' + options.el.tagName.toLowerCase() + '> because ' + 'the component is a fragment instance: ' + 'http://vuejs.org/guide/components.html#Fragment_Instance');
	    }
	  }

	  options._containerAttrs = options._replacerAttrs = null;
	  return function rootLinkFn(vm, el, scope) {
	    // link context scope dirs
	    var context = vm._context;
	    var contextDirs;
	    if (context && contextLinkFn) {
	      contextDirs = linkAndCapture(function () {
	        contextLinkFn(context, el, null, scope);
	      }, context);
	    }

	    // link self
	    var selfDirs = linkAndCapture(function () {
	      if (replacerLinkFn) replacerLinkFn(vm, el);
	    }, vm);

	    // return the unlink function that tearsdown context
	    // container directives.
	    return makeUnlinkFn(vm, selfDirs, context, contextDirs);
	  };
	}

	/**
	 * Compile a node and return a nodeLinkFn based on the
	 * node type.
	 *
	 * @param {Node} node
	 * @param {Object} options
	 * @return {Function|null}
	 */

	function compileNode(node, options) {
	  var type = node.nodeType;
	  if (type === 1 && node.tagName !== 'SCRIPT') {
	    return compileElement(node, options);
	  } else if (type === 3 && node.data.trim()) {
	    return compileTextNode(node, options);
	  } else {
	    return null;
	  }
	}

	/**
	 * Compile an element and return a nodeLinkFn.
	 *
	 * @param {Element} el
	 * @param {Object} options
	 * @return {Function|null}
	 */

	function compileElement(el, options) {
	  // preprocess textareas.
	  // textarea treats its text content as the initial value.
	  // just bind it as an attr directive for value.
	  if (el.tagName === 'TEXTAREA') {
	    var tokens = parseText(el.value);
	    if (tokens) {
	      el.setAttribute(':value', tokensToExp(tokens));
	      el.value = '';
	    }
	  }
	  var linkFn;
	  var hasAttrs = el.hasAttributes();
	  var attrs = hasAttrs && toArray(el.attributes);
	  // check terminal directives (for & if)
	  if (hasAttrs) {
	    linkFn = checkTerminalDirectives(el, attrs, options);
	  }
	  // check element directives
	  if (!linkFn) {
	    linkFn = checkElementDirectives(el, options);
	  }
	  // check component
	  if (!linkFn) {
	    linkFn = checkComponent(el, options);
	  }
	  // normal directives
	  if (!linkFn && hasAttrs) {
	    linkFn = compileDirectives(attrs, options);
	  }
	  return linkFn;
	}

	/**
	 * Compile a textNode and return a nodeLinkFn.
	 *
	 * @param {TextNode} node
	 * @param {Object} options
	 * @return {Function|null} textNodeLinkFn
	 */

	function compileTextNode(node, options) {
	  // skip marked text nodes
	  if (node._skip) {
	    return removeText;
	  }

	  var tokens = parseText(node.wholeText);
	  if (!tokens) {
	    return null;
	  }

	  // mark adjacent text nodes as skipped,
	  // because we are using node.wholeText to compile
	  // all adjacent text nodes together. This fixes
	  // issues in IE where sometimes it splits up a single
	  // text node into multiple ones.
	  var next = node.nextSibling;
	  while (next && next.nodeType === 3) {
	    next._skip = true;
	    next = next.nextSibling;
	  }

	  var frag = document.createDocumentFragment();
	  var el, token;
	  for (var i = 0, l = tokens.length; i < l; i++) {
	    token = tokens[i];
	    el = token.tag ? processTextToken(token, options) : document.createTextNode(token.value);
	    frag.appendChild(el);
	  }
	  return makeTextNodeLinkFn(tokens, frag, options);
	}

	/**
	 * Linker for an skipped text node.
	 *
	 * @param {Vue} vm
	 * @param {Text} node
	 */

	function removeText(vm, node) {
	  remove(node);
	}

	/**
	 * Process a single text token.
	 *
	 * @param {Object} token
	 * @param {Object} options
	 * @return {Node}
	 */

	function processTextToken(token, options) {
	  var el;
	  if (token.oneTime) {
	    el = document.createTextNode(token.value);
	  } else {
	    if (token.html) {
	      el = document.createComment('v-html');
	      setTokenType('html');
	    } else {
	      // IE will clean up empty textNodes during
	      // frag.cloneNode(true), so we have to give it
	      // something here...
	      el = document.createTextNode(' ');
	      setTokenType('text');
	    }
	  }
	  function setTokenType(type) {
	    if (token.descriptor) return;
	    var parsed = parseDirective(token.value);
	    token.descriptor = {
	      name: type,
	      def: directives[type],
	      expression: parsed.expression,
	      filters: parsed.filters
	    };
	  }
	  return el;
	}

	/**
	 * Build a function that processes a textNode.
	 *
	 * @param {Array<Object>} tokens
	 * @param {DocumentFragment} frag
	 */

	function makeTextNodeLinkFn(tokens, frag) {
	  return function textNodeLinkFn(vm, el, host, scope) {
	    var fragClone = frag.cloneNode(true);
	    var childNodes = toArray(fragClone.childNodes);
	    var token, value, node;
	    for (var i = 0, l = tokens.length; i < l; i++) {
	      token = tokens[i];
	      value = token.value;
	      if (token.tag) {
	        node = childNodes[i];
	        if (token.oneTime) {
	          value = (scope || vm).$eval(value);
	          if (token.html) {
	            replace(node, parseTemplate(value, true));
	          } else {
	            node.data = value;
	          }
	        } else {
	          vm._bindDir(token.descriptor, node, host, scope);
	        }
	      }
	    }
	    replace(el, fragClone);
	  };
	}

	/**
	 * Compile a node list and return a childLinkFn.
	 *
	 * @param {NodeList} nodeList
	 * @param {Object} options
	 * @return {Function|undefined}
	 */

	function compileNodeList(nodeList, options) {
	  var linkFns = [];
	  var nodeLinkFn, childLinkFn, node;
	  for (var i = 0, l = nodeList.length; i < l; i++) {
	    node = nodeList[i];
	    nodeLinkFn = compileNode(node, options);
	    childLinkFn = !(nodeLinkFn && nodeLinkFn.terminal) && node.tagName !== 'SCRIPT' && node.hasChildNodes() ? compileNodeList(node.childNodes, options) : null;
	    linkFns.push(nodeLinkFn, childLinkFn);
	  }
	  return linkFns.length ? makeChildLinkFn(linkFns) : null;
	}

	/**
	 * Make a child link function for a node's childNodes.
	 *
	 * @param {Array<Function>} linkFns
	 * @return {Function} childLinkFn
	 */

	function makeChildLinkFn(linkFns) {
	  return function childLinkFn(vm, nodes, host, scope, frag) {
	    var node, nodeLinkFn, childrenLinkFn;
	    for (var i = 0, n = 0, l = linkFns.length; i < l; n++) {
	      node = nodes[n];
	      nodeLinkFn = linkFns[i++];
	      childrenLinkFn = linkFns[i++];
	      // cache childNodes before linking parent, fix #657
	      var childNodes = toArray(node.childNodes);
	      if (nodeLinkFn) {
	        nodeLinkFn(vm, node, host, scope, frag);
	      }
	      if (childrenLinkFn) {
	        childrenLinkFn(vm, childNodes, host, scope, frag);
	      }
	    }
	  };
	}

	/**
	 * Check for element directives (custom elements that should
	 * be resovled as terminal directives).
	 *
	 * @param {Element} el
	 * @param {Object} options
	 */

	function checkElementDirectives(el, options) {
	  var tag = el.tagName.toLowerCase();
	  if (commonTagRE.test(tag)) {
	    return;
	  }
	  var def = resolveAsset(options, 'elementDirectives', tag);
	  if (def) {
	    return makeTerminalNodeLinkFn(el, tag, '', options, def);
	  }
	}

	/**
	 * Check if an element is a component. If yes, return
	 * a component link function.
	 *
	 * @param {Element} el
	 * @param {Object} options
	 * @return {Function|undefined}
	 */

	function checkComponent(el, options) {
	  var component = checkComponentAttr(el, options);
	  if (component) {
	    var ref = findRef(el);
	    var descriptor = {
	      name: 'component',
	      ref: ref,
	      expression: component.id,
	      def: internalDirectives.component,
	      modifiers: {
	        literal: !component.dynamic
	      }
	    };
	    var componentLinkFn = function componentLinkFn(vm, el, host, scope, frag) {
	      if (ref) {
	        defineReactive((scope || vm).$refs, ref, null);
	      }
	      vm._bindDir(descriptor, el, host, scope, frag);
	    };
	    componentLinkFn.terminal = true;
	    return componentLinkFn;
	  }
	}

	/**
	 * Check an element for terminal directives in fixed order.
	 * If it finds one, return a terminal link function.
	 *
	 * @param {Element} el
	 * @param {Array} attrs
	 * @param {Object} options
	 * @return {Function} terminalLinkFn
	 */

	function checkTerminalDirectives(el, attrs, options) {
	  // skip v-pre
	  if (getAttr(el, 'v-pre') !== null) {
	    return skip;
	  }
	  // skip v-else block, but only if following v-if
	  if (el.hasAttribute('v-else')) {
	    var prev = el.previousElementSibling;
	    if (prev && prev.hasAttribute('v-if')) {
	      return skip;
	    }
	  }

	  var attr, name, value, modifiers, matched, dirName, rawName, arg, def, termDef;
	  for (var i = 0, j = attrs.length; i < j; i++) {
	    attr = attrs[i];
	    modifiers = parseModifiers(attr.name);
	    name = attr.name.replace(modifierRE, '');
	    if (matched = name.match(dirAttrRE)) {
	      def = resolveAsset(options, 'directives', matched[1]);
	      if (def && def.terminal) {
	        if (!termDef || (def.priority || DEFAULT_TERMINAL_PRIORITY) > termDef.priority) {
	          termDef = def;
	          rawName = attr.name;
	          value = attr.value;
	          dirName = matched[1];
	          arg = matched[2];
	        }
	      }
	    }
	  }

	  if (termDef) {
	    return makeTerminalNodeLinkFn(el, dirName, value, options, termDef, rawName, arg, modifiers);
	  }
	}

	function skip() {}
	skip.terminal = true;

	/**
	 * Build a node link function for a terminal directive.
	 * A terminal link function terminates the current
	 * compilation recursion and handles compilation of the
	 * subtree in the directive.
	 *
	 * @param {Element} el
	 * @param {String} dirName
	 * @param {String} value
	 * @param {Object} options
	 * @param {Object} def
	 * @param {String} [rawName]
	 * @param {String} [arg]
	 * @param {Object} [modifiers]
	 * @return {Function} terminalLinkFn
	 */

	function makeTerminalNodeLinkFn(el, dirName, value, options, def, rawName, arg, modifiers) {
	  var parsed = parseDirective(value);
	  var descriptor = {
	    name: dirName,
	    arg: arg,
	    expression: parsed.expression,
	    filters: parsed.filters,
	    raw: value,
	    attr: rawName,
	    modifiers: modifiers,
	    def: def
	  };
	  // check ref for v-for and router-view
	  if (dirName === 'for' || dirName === 'router-view') {
	    descriptor.ref = findRef(el);
	  }
	  var fn = function terminalNodeLinkFn(vm, el, host, scope, frag) {
	    if (descriptor.ref) {
	      defineReactive((scope || vm).$refs, descriptor.ref, null);
	    }
	    vm._bindDir(descriptor, el, host, scope, frag);
	  };
	  fn.terminal = true;
	  return fn;
	}

	/**
	 * Compile the directives on an element and return a linker.
	 *
	 * @param {Array|NamedNodeMap} attrs
	 * @param {Object} options
	 * @return {Function}
	 */

	function compileDirectives(attrs, options) {
	  var i = attrs.length;
	  var dirs = [];
	  var attr, name, value, rawName, rawValue, dirName, arg, modifiers, dirDef, tokens, matched;
	  while (i--) {
	    attr = attrs[i];
	    name = rawName = attr.name;
	    value = rawValue = attr.value;
	    tokens = parseText(value);
	    // reset arg
	    arg = null;
	    // check modifiers
	    modifiers = parseModifiers(name);
	    name = name.replace(modifierRE, '');

	    // attribute interpolations
	    if (tokens) {
	      value = tokensToExp(tokens);
	      arg = name;
	      pushDir('bind', directives.bind, tokens);
	      // warn against mixing mustaches with v-bind
	      if (process.env.NODE_ENV !== 'production') {
	        if (name === 'class' && Array.prototype.some.call(attrs, function (attr) {
	          return attr.name === ':class' || attr.name === 'v-bind:class';
	        })) {
	          warn('class="' + rawValue + '": Do not mix mustache interpolation ' + 'and v-bind for "class" on the same element. Use one or the other.', options);
	        }
	      }
	    } else

	      // special attribute: transition
	      if (transitionRE.test(name)) {
	        modifiers.literal = !bindRE.test(name);
	        pushDir('transition', internalDirectives.transition);
	      } else

	        // event handlers
	        if (onRE.test(name)) {
	          arg = name.replace(onRE, '');
	          pushDir('on', directives.on);
	        } else

	          // attribute bindings
	          if (bindRE.test(name)) {
	            dirName = name.replace(bindRE, '');
	            if (dirName === 'style' || dirName === 'class') {
	              pushDir(dirName, internalDirectives[dirName]);
	            } else {
	              arg = dirName;
	              pushDir('bind', directives.bind);
	            }
	          } else

	            // normal directives
	            if (matched = name.match(dirAttrRE)) {
	              dirName = matched[1];
	              arg = matched[2];

	              // skip v-else (when used with v-show)
	              if (dirName === 'else') {
	                continue;
	              }

	              dirDef = resolveAsset(options, 'directives', dirName, true);
	              if (dirDef) {
	                pushDir(dirName, dirDef);
	              }
	            }
	  }

	  /**
	   * Push a directive.
	   *
	   * @param {String} dirName
	   * @param {Object|Function} def
	   * @param {Array} [interpTokens]
	   */

	  function pushDir(dirName, def, interpTokens) {
	    var hasOneTimeToken = interpTokens && hasOneTime(interpTokens);
	    var parsed = !hasOneTimeToken && parseDirective(value);
	    dirs.push({
	      name: dirName,
	      attr: rawName,
	      raw: rawValue,
	      def: def,
	      arg: arg,
	      modifiers: modifiers,
	      // conversion from interpolation strings with one-time token
	      // to expression is differed until directive bind time so that we
	      // have access to the actual vm context for one-time bindings.
	      expression: parsed && parsed.expression,
	      filters: parsed && parsed.filters,
	      interp: interpTokens,
	      hasOneTime: hasOneTimeToken
	    });
	  }

	  if (dirs.length) {
	    return makeNodeLinkFn(dirs);
	  }
	}

	/**
	 * Parse modifiers from directive attribute name.
	 *
	 * @param {String} name
	 * @return {Object}
	 */

	function parseModifiers(name) {
	  var res = Object.create(null);
	  var match = name.match(modifierRE);
	  if (match) {
	    var i = match.length;
	    while (i--) {
	      res[match[i].slice(1)] = true;
	    }
	  }
	  return res;
	}

	/**
	 * Build a link function for all directives on a single node.
	 *
	 * @param {Array} directives
	 * @return {Function} directivesLinkFn
	 */

	function makeNodeLinkFn(directives) {
	  return function nodeLinkFn(vm, el, host, scope, frag) {
	    // reverse apply because it's sorted low to high
	    var i = directives.length;
	    while (i--) {
	      vm._bindDir(directives[i], el, host, scope, frag);
	    }
	  };
	}

	/**
	 * Check if an interpolation string contains one-time tokens.
	 *
	 * @param {Array} tokens
	 * @return {Boolean}
	 */

	function hasOneTime(tokens) {
	  var i = tokens.length;
	  while (i--) {
	    if (tokens[i].oneTime) return true;
	  }
	}

	var specialCharRE = /[^\w\-:\.]/;

	/**
	 * Process an element or a DocumentFragment based on a
	 * instance option object. This allows us to transclude
	 * a template node/fragment before the instance is created,
	 * so the processed fragment can then be cloned and reused
	 * in v-for.
	 *
	 * @param {Element} el
	 * @param {Object} options
	 * @return {Element|DocumentFragment}
	 */

	function transclude(el, options) {
	  // extract container attributes to pass them down
	  // to compiler, because they need to be compiled in
	  // parent scope. we are mutating the options object here
	  // assuming the same object will be used for compile
	  // right after this.
	  if (options) {
	    options._containerAttrs = extractAttrs(el);
	  }
	  // for template tags, what we want is its content as
	  // a documentFragment (for fragment instances)
	  if (isTemplate(el)) {
	    el = parseTemplate(el);
	  }
	  if (options) {
	    if (options._asComponent && !options.template) {
	      options.template = '<slot></slot>';
	    }
	    if (options.template) {
	      options._content = extractContent(el);
	      el = transcludeTemplate(el, options);
	    }
	  }
	  if (isFragment(el)) {
	    // anchors for fragment instance
	    // passing in `persist: true` to avoid them being
	    // discarded by IE during template cloning
	    prepend(createAnchor('v-start', true), el);
	    el.appendChild(createAnchor('v-end', true));
	  }
	  return el;
	}

	/**
	 * Process the template option.
	 * If the replace option is true this will swap the $el.
	 *
	 * @param {Element} el
	 * @param {Object} options
	 * @return {Element|DocumentFragment}
	 */

	function transcludeTemplate(el, options) {
	  var template = options.template;
	  var frag = parseTemplate(template, true);
	  if (frag) {
	    var replacer = frag.firstChild;
	    var tag = replacer.tagName && replacer.tagName.toLowerCase();
	    if (options.replace) {
	      /* istanbul ignore if */
	      if (el === document.body) {
	        process.env.NODE_ENV !== 'production' && warn('You are mounting an instance with a template to ' + '<body>. This will replace <body> entirely. You ' + 'should probably use `replace: false` here.');
	      }
	      // there are many cases where the instance must
	      // become a fragment instance: basically anything that
	      // can create more than 1 root nodes.
	      if (
	      // multi-children template
	      frag.childNodes.length > 1 ||
	      // non-element template
	      replacer.nodeType !== 1 ||
	      // single nested component
	      tag === 'component' || resolveAsset(options, 'components', tag) || hasBindAttr(replacer, 'is') ||
	      // element directive
	      resolveAsset(options, 'elementDirectives', tag) ||
	      // for block
	      replacer.hasAttribute('v-for') ||
	      // if block
	      replacer.hasAttribute('v-if')) {
	        return frag;
	      } else {
	        options._replacerAttrs = extractAttrs(replacer);
	        mergeAttrs(el, replacer);
	        return replacer;
	      }
	    } else {
	      el.appendChild(frag);
	      return el;
	    }
	  } else {
	    process.env.NODE_ENV !== 'production' && warn('Invalid template option: ' + template);
	  }
	}

	/**
	 * Helper to extract a component container's attributes
	 * into a plain object array.
	 *
	 * @param {Element} el
	 * @return {Array}
	 */

	function extractAttrs(el) {
	  if (el.nodeType === 1 && el.hasAttributes()) {
	    return toArray(el.attributes);
	  }
	}

	/**
	 * Merge the attributes of two elements, and make sure
	 * the class names are merged properly.
	 *
	 * @param {Element} from
	 * @param {Element} to
	 */

	function mergeAttrs(from, to) {
	  var attrs = from.attributes;
	  var i = attrs.length;
	  var name, value;
	  while (i--) {
	    name = attrs[i].name;
	    value = attrs[i].value;
	    if (!to.hasAttribute(name) && !specialCharRE.test(name)) {
	      to.setAttribute(name, value);
	    } else if (name === 'class' && !parseText(value)) {
	      value.trim().split(/\s+/).forEach(function (cls) {
	        addClass(to, cls);
	      });
	    }
	  }
	}

	/**
	 * Scan and determine slot content distribution.
	 * We do this during transclusion instead at compile time so that
	 * the distribution is decoupled from the compilation order of
	 * the slots.
	 *
	 * @param {Element|DocumentFragment} template
	 * @param {Element} content
	 * @param {Vue} vm
	 */

	function resolveSlots(vm, content) {
	  if (!content) {
	    return;
	  }
	  var contents = vm._slotContents = Object.create(null);
	  var el, name;
	  for (var i = 0, l = content.children.length; i < l; i++) {
	    el = content.children[i];
	    /* eslint-disable no-cond-assign */
	    if (name = el.getAttribute('slot')) {
	      (contents[name] || (contents[name] = [])).push(el);
	    }
	    /* eslint-enable no-cond-assign */
	    if (process.env.NODE_ENV !== 'production' && getBindAttr(el, 'slot')) {
	      warn('The "slot" attribute must be static.', vm.$parent);
	    }
	  }
	  for (name in contents) {
	    contents[name] = extractFragment(contents[name], content);
	  }
	  if (content.hasChildNodes()) {
	    contents['default'] = extractFragment(content.childNodes, content);
	  }
	}

	/**
	 * Extract qualified content nodes from a node list.
	 *
	 * @param {NodeList} nodes
	 * @return {DocumentFragment}
	 */

	function extractFragment(nodes, parent) {
	  var frag = document.createDocumentFragment();
	  nodes = toArray(nodes);
	  for (var i = 0, l = nodes.length; i < l; i++) {
	    var node = nodes[i];
	    if (isTemplate(node) && !node.hasAttribute('v-if') && !node.hasAttribute('v-for')) {
	      parent.removeChild(node);
	      node = parseTemplate(node);
	    }
	    frag.appendChild(node);
	  }
	  return frag;
	}



	var compiler = Object.freeze({
		compile: compile,
		compileAndLinkProps: compileAndLinkProps,
		compileRoot: compileRoot,
		transclude: transclude,
		resolveSlots: resolveSlots
	});

	function stateMixin (Vue) {
	  /**
	   * Accessor for `$data` property, since setting $data
	   * requires observing the new object and updating
	   * proxied properties.
	   */

	  Object.defineProperty(Vue.prototype, '$data', {
	    get: function get() {
	      return this._data;
	    },
	    set: function set(newData) {
	      if (newData !== this._data) {
	        this._setData(newData);
	      }
	    }
	  });

	  /**
	   * Setup the scope of an instance, which contains:
	   * - observed data
	   * - computed properties
	   * - user methods
	   * - meta properties
	   */

	  Vue.prototype._initState = function () {
	    this._initProps();
	    this._initMeta();
	    this._initMethods();
	    this._initData();
	    this._initComputed();
	  };

	  /**
	   * Initialize props.
	   */

	  Vue.prototype._initProps = function () {
	    var options = this.$options;
	    var el = options.el;
	    var props = options.props;
	    if (props && !el) {
	      process.env.NODE_ENV !== 'production' && warn('Props will not be compiled if no `el` option is ' + 'provided at instantiation.', this);
	    }
	    // make sure to convert string selectors into element now
	    el = options.el = query(el);
	    this._propsUnlinkFn = el && el.nodeType === 1 && props
	    // props must be linked in proper scope if inside v-for
	    ? compileAndLinkProps(this, el, props, this._scope) : null;
	  };

	  /**
	   * Initialize the data.
	   */

	  Vue.prototype._initData = function () {
	    var dataFn = this.$options.data;
	    var data = this._data = dataFn ? dataFn() : {};
	    if (!isPlainObject(data)) {
	      data = {};
	      process.env.NODE_ENV !== 'production' && warn('data functions should return an object.', this);
	    }
	    var props = this._props;
	    var runtimeData = this._runtimeData ? typeof this._runtimeData === 'function' ? this._runtimeData() : this._runtimeData : null;
	    // proxy data on instance
	    var keys = Object.keys(data);
	    var i, key;
	    i = keys.length;
	    while (i--) {
	      key = keys[i];
	      // there are two scenarios where we can proxy a data key:
	      // 1. it's not already defined as a prop
	      // 2. it's provided via a instantiation option AND there are no
	      //    template prop present
	      if (!props || !hasOwn(props, key) || runtimeData && hasOwn(runtimeData, key) && props[key].raw === null) {
	        this._proxy(key);
	      } else if (process.env.NODE_ENV !== 'production') {
	        warn('Data field "' + key + '" is already defined ' + 'as a prop. Use prop default value instead.', this);
	      }
	    }
	    // observe data
	    observe(data, this);
	  };

	  /**
	   * Swap the instance's $data. Called in $data's setter.
	   *
	   * @param {Object} newData
	   */

	  Vue.prototype._setData = function (newData) {
	    newData = newData || {};
	    var oldData = this._data;
	    this._data = newData;
	    var keys, key, i;
	    // unproxy keys not present in new data
	    keys = Object.keys(oldData);
	    i = keys.length;
	    while (i--) {
	      key = keys[i];
	      if (!(key in newData)) {
	        this._unproxy(key);
	      }
	    }
	    // proxy keys not already proxied,
	    // and trigger change for changed values
	    keys = Object.keys(newData);
	    i = keys.length;
	    while (i--) {
	      key = keys[i];
	      if (!hasOwn(this, key)) {
	        // new property
	        this._proxy(key);
	      }
	    }
	    oldData.__ob__.removeVm(this);
	    observe(newData, this);
	    this._digest();
	  };

	  /**
	   * Proxy a property, so that
	   * vm.prop === vm._data.prop
	   *
	   * @param {String} key
	   */

	  Vue.prototype._proxy = function (key) {
	    if (!isReserved(key)) {
	      // need to store ref to self here
	      // because these getter/setters might
	      // be called by child scopes via
	      // prototype inheritance.
	      var self = this;
	      Object.defineProperty(self, key, {
	        configurable: true,
	        enumerable: true,
	        get: function proxyGetter() {
	          return self._data[key];
	        },
	        set: function proxySetter(val) {
	          self._data[key] = val;
	        }
	      });
	    }
	  };

	  /**
	   * Unproxy a property.
	   *
	   * @param {String} key
	   */

	  Vue.prototype._unproxy = function (key) {
	    if (!isReserved(key)) {
	      delete this[key];
	    }
	  };

	  /**
	   * Force update on every watcher in scope.
	   */

	  Vue.prototype._digest = function () {
	    for (var i = 0, l = this._watchers.length; i < l; i++) {
	      this._watchers[i].update(true); // shallow updates
	    }
	  };

	  /**
	   * Setup computed properties. They are essentially
	   * special getter/setters
	   */

	  function noop() {}
	  Vue.prototype._initComputed = function () {
	    var computed = this.$options.computed;
	    if (computed) {
	      for (var key in computed) {
	        var userDef = computed[key];
	        var def = {
	          enumerable: true,
	          configurable: true
	        };
	        if (typeof userDef === 'function') {
	          def.get = makeComputedGetter(userDef, this);
	          def.set = noop;
	        } else {
	          def.get = userDef.get ? userDef.cache !== false ? makeComputedGetter(userDef.get, this) : bind(userDef.get, this) : noop;
	          def.set = userDef.set ? bind(userDef.set, this) : noop;
	        }
	        Object.defineProperty(this, key, def);
	      }
	    }
	  };

	  function makeComputedGetter(getter, owner) {
	    var watcher = new Watcher(owner, getter, null, {
	      lazy: true
	    });
	    return function computedGetter() {
	      if (watcher.dirty) {
	        watcher.evaluate();
	      }
	      if (Dep.target) {
	        watcher.depend();
	      }
	      return watcher.value;
	    };
	  }

	  /**
	   * Setup instance methods. Methods must be bound to the
	   * instance since they might be passed down as a prop to
	   * child components.
	   */

	  Vue.prototype._initMethods = function () {
	    var methods = this.$options.methods;
	    if (methods) {
	      for (var key in methods) {
	        this[key] = bind(methods[key], this);
	      }
	    }
	  };

	  /**
	   * Initialize meta information like $index, $key & $value.
	   */

	  Vue.prototype._initMeta = function () {
	    var metas = this.$options._meta;
	    if (metas) {
	      for (var key in metas) {
	        defineReactive(this, key, metas[key]);
	      }
	    }
	  };
	}

	var eventRE = /^v-on:|^@/;

	function eventsMixin (Vue) {
	  /**
	   * Setup the instance's option events & watchers.
	   * If the value is a string, we pull it from the
	   * instance's methods by name.
	   */

	  Vue.prototype._initEvents = function () {
	    var options = this.$options;
	    if (options._asComponent) {
	      registerComponentEvents(this, options.el);
	    }
	    registerCallbacks(this, '$on', options.events);
	    registerCallbacks(this, '$watch', options.watch);
	  };

	  /**
	   * Register v-on events on a child component
	   *
	   * @param {Vue} vm
	   * @param {Element} el
	   */

	  function registerComponentEvents(vm, el) {
	    var attrs = el.attributes;
	    var name, handler;
	    for (var i = 0, l = attrs.length; i < l; i++) {
	      name = attrs[i].name;
	      if (eventRE.test(name)) {
	        name = name.replace(eventRE, '');
	        handler = (vm._scope || vm._context).$eval(attrs[i].value, true);
	        if (typeof handler === 'function') {
	          handler._fromParent = true;
	          vm.$on(name.replace(eventRE), handler);
	        } else if (process.env.NODE_ENV !== 'production') {
	          warn('v-on:' + name + '="' + attrs[i].value + '" ' + 'expects a function value, got ' + handler, vm);
	        }
	      }
	    }
	  }

	  /**
	   * Register callbacks for option events and watchers.
	   *
	   * @param {Vue} vm
	   * @param {String} action
	   * @param {Object} hash
	   */

	  function registerCallbacks(vm, action, hash) {
	    if (!hash) return;
	    var handlers, key, i, j;
	    for (key in hash) {
	      handlers = hash[key];
	      if (isArray(handlers)) {
	        for (i = 0, j = handlers.length; i < j; i++) {
	          register(vm, action, key, handlers[i]);
	        }
	      } else {
	        register(vm, action, key, handlers);
	      }
	    }
	  }

	  /**
	   * Helper to register an event/watch callback.
	   *
	   * @param {Vue} vm
	   * @param {String} action
	   * @param {String} key
	   * @param {Function|String|Object} handler
	   * @param {Object} [options]
	   */

	  function register(vm, action, key, handler, options) {
	    var type = typeof handler;
	    if (type === 'function') {
	      vm[action](key, handler, options);
	    } else if (type === 'string') {
	      var methods = vm.$options.methods;
	      var method = methods && methods[handler];
	      if (method) {
	        vm[action](key, method, options);
	      } else {
	        process.env.NODE_ENV !== 'production' && warn('Unknown method: "' + handler + '" when ' + 'registering callback for ' + action + ': "' + key + '".', vm);
	      }
	    } else if (handler && type === 'object') {
	      register(vm, action, key, handler.handler, handler);
	    }
	  }

	  /**
	   * Setup recursive attached/detached calls
	   */

	  Vue.prototype._initDOMHooks = function () {
	    this.$on('hook:attached', onAttached);
	    this.$on('hook:detached', onDetached);
	  };

	  /**
	   * Callback to recursively call attached hook on children
	   */

	  function onAttached() {
	    if (!this._isAttached) {
	      this._isAttached = true;
	      this.$children.forEach(callAttach);
	    }
	  }

	  /**
	   * Iterator to call attached hook
	   *
	   * @param {Vue} child
	   */

	  function callAttach(child) {
	    if (!child._isAttached && inDoc(child.$el)) {
	      child._callHook('attached');
	    }
	  }

	  /**
	   * Callback to recursively call detached hook on children
	   */

	  function onDetached() {
	    if (this._isAttached) {
	      this._isAttached = false;
	      this.$children.forEach(callDetach);
	    }
	  }

	  /**
	   * Iterator to call detached hook
	   *
	   * @param {Vue} child
	   */

	  function callDetach(child) {
	    if (child._isAttached && !inDoc(child.$el)) {
	      child._callHook('detached');
	    }
	  }

	  /**
	   * Trigger all handlers for a hook
	   *
	   * @param {String} hook
	   */

	  Vue.prototype._callHook = function (hook) {
	    this.$emit('pre-hook:' + hook);
	    var handlers = this.$options[hook];
	    if (handlers) {
	      for (var i = 0, j = handlers.length; i < j; i++) {
	        handlers[i].call(this);
	      }
	    }
	    this.$emit('hook:' + hook);
	  };
	}

	function noop() {}

	/**
	 * A directive links a DOM element with a piece of data,
	 * which is the result of evaluating an expression.
	 * It registers a watcher with the expression and calls
	 * the DOM update function when a change is triggered.
	 *
	 * @param {Object} descriptor
	 *                 - {String} name
	 *                 - {Object} def
	 *                 - {String} expression
	 *                 - {Array<Object>} [filters]
	 *                 - {Object} [modifiers]
	 *                 - {Boolean} literal
	 *                 - {String} attr
	 *                 - {String} arg
	 *                 - {String} raw
	 *                 - {String} [ref]
	 *                 - {Array<Object>} [interp]
	 *                 - {Boolean} [hasOneTime]
	 * @param {Vue} vm
	 * @param {Node} el
	 * @param {Vue} [host] - transclusion host component
	 * @param {Object} [scope] - v-for scope
	 * @param {Fragment} [frag] - owner fragment
	 * @constructor
	 */
	function Directive(descriptor, vm, el, host, scope, frag) {
	  this.vm = vm;
	  this.el = el;
	  // copy descriptor properties
	  this.descriptor = descriptor;
	  this.name = descriptor.name;
	  this.expression = descriptor.expression;
	  this.arg = descriptor.arg;
	  this.modifiers = descriptor.modifiers;
	  this.filters = descriptor.filters;
	  this.literal = this.modifiers && this.modifiers.literal;
	  // private
	  this._locked = false;
	  this._bound = false;
	  this._listeners = null;
	  // link context
	  this._host = host;
	  this._scope = scope;
	  this._frag = frag;
	  // store directives on node in dev mode
	  if (process.env.NODE_ENV !== 'production' && this.el) {
	    this.el._vue_directives = this.el._vue_directives || [];
	    this.el._vue_directives.push(this);
	  }
	}

	/**
	 * Initialize the directive, mixin definition properties,
	 * setup the watcher, call definition bind() and update()
	 * if present.
	 */

	Directive.prototype._bind = function () {
	  var name = this.name;
	  var descriptor = this.descriptor;

	  // remove attribute
	  if ((name !== 'cloak' || this.vm._isCompiled) && this.el && this.el.removeAttribute) {
	    var attr = descriptor.attr || 'v-' + name;
	    this.el.removeAttribute(attr);
	  }

	  // copy def properties
	  var def = descriptor.def;
	  if (typeof def === 'function') {
	    this.update = def;
	  } else {
	    extend(this, def);
	  }

	  // setup directive params
	  this._setupParams();

	  // initial bind
	  if (this.bind) {
	    this.bind();
	  }
	  this._bound = true;

	  if (this.literal) {
	    this.update && this.update(descriptor.raw);
	  } else if ((this.expression || this.modifiers) && (this.update || this.twoWay) && !this._checkStatement()) {
	    // wrapped updater for context
	    var dir = this;
	    if (this.update) {
	      this._update = function (val, oldVal) {
	        if (!dir._locked) {
	          dir.update(val, oldVal);
	        }
	      };
	    } else {
	      this._update = noop;
	    }
	    var preProcess = this._preProcess ? bind(this._preProcess, this) : null;
	    var postProcess = this._postProcess ? bind(this._postProcess, this) : null;
	    var watcher = this._watcher = new Watcher(this.vm, this.expression, this._update, // callback
	    {
	      filters: this.filters,
	      twoWay: this.twoWay,
	      deep: this.deep,
	      preProcess: preProcess,
	      postProcess: postProcess,
	      scope: this._scope
	    });
	    // v-model with inital inline value need to sync back to
	    // model instead of update to DOM on init. They would
	    // set the afterBind hook to indicate that.
	    if (this.afterBind) {
	      this.afterBind();
	    } else if (this.update) {
	      this.update(watcher.value);
	    }
	  }
	};

	/**
	 * Setup all param attributes, e.g. track-by,
	 * transition-mode, etc...
	 */

	Directive.prototype._setupParams = function () {
	  if (!this.params) {
	    return;
	  }
	  var params = this.params;
	  // swap the params array with a fresh object.
	  this.params = Object.create(null);
	  var i = params.length;
	  var key, val, mappedKey;
	  while (i--) {
	    key = hyphenate(params[i]);
	    mappedKey = camelize(key);
	    val = getBindAttr(this.el, key);
	    if (val != null) {
	      // dynamic
	      this._setupParamWatcher(mappedKey, val);
	    } else {
	      // static
	      val = getAttr(this.el, key);
	      if (val != null) {
	        this.params[mappedKey] = val === '' ? true : val;
	      }
	    }
	  }
	};

	/**
	 * Setup a watcher for a dynamic param.
	 *
	 * @param {String} key
	 * @param {String} expression
	 */

	Directive.prototype._setupParamWatcher = function (key, expression) {
	  var self = this;
	  var called = false;
	  var unwatch = (this._scope || this.vm).$watch(expression, function (val, oldVal) {
	    self.params[key] = val;
	    // since we are in immediate mode,
	    // only call the param change callbacks if this is not the first update.
	    if (called) {
	      var cb = self.paramWatchers && self.paramWatchers[key];
	      if (cb) {
	        cb.call(self, val, oldVal);
	      }
	    } else {
	      called = true;
	    }
	  }, {
	    immediate: true,
	    user: false
	  });(this._paramUnwatchFns || (this._paramUnwatchFns = [])).push(unwatch);
	};

	/**
	 * Check if the directive is a function caller
	 * and if the expression is a callable one. If both true,
	 * we wrap up the expression and use it as the event
	 * handler.
	 *
	 * e.g. on-click="a++"
	 *
	 * @return {Boolean}
	 */

	Directive.prototype._checkStatement = function () {
	  var expression = this.expression;
	  if (expression && this.acceptStatement && !isSimplePath(expression)) {
	    var fn = parseExpression(expression).get;
	    var scope = this._scope || this.vm;
	    var handler = function handler(e) {
	      scope.$event = e;
	      fn.call(scope, scope);
	      scope.$event = null;
	    };
	    if (this.filters) {
	      handler = scope._applyFilters(handler, null, this.filters);
	    }
	    this.update(handler);
	    return true;
	  }
	};

	/**
	 * Set the corresponding value with the setter.
	 * This should only be used in two-way directives
	 * e.g. v-model.
	 *
	 * @param {*} value
	 * @public
	 */

	Directive.prototype.set = function (value) {
	  /* istanbul ignore else */
	  if (this.twoWay) {
	    this._withLock(function () {
	      this._watcher.set(value);
	    });
	  } else if (process.env.NODE_ENV !== 'production') {
	    warn('Directive.set() can only be used inside twoWay' + 'directives.');
	  }
	};

	/**
	 * Execute a function while preventing that function from
	 * triggering updates on this directive instance.
	 *
	 * @param {Function} fn
	 */

	Directive.prototype._withLock = function (fn) {
	  var self = this;
	  self._locked = true;
	  fn.call(self);
	  nextTick(function () {
	    self._locked = false;
	  });
	};

	/**
	 * Convenience method that attaches a DOM event listener
	 * to the directive element and autometically tears it down
	 * during unbind.
	 *
	 * @param {String} event
	 * @param {Function} handler
	 * @param {Boolean} [useCapture]
	 */

	Directive.prototype.on = function (event, handler, useCapture) {
	  on(this.el, event, handler, useCapture);(this._listeners || (this._listeners = [])).push([event, handler]);
	};

	/**
	 * Teardown the watcher and call unbind.
	 */

	Directive.prototype._teardown = function () {
	  if (this._bound) {
	    this._bound = false;
	    if (this.unbind) {
	      this.unbind();
	    }
	    if (this._watcher) {
	      this._watcher.teardown();
	    }
	    var listeners = this._listeners;
	    var i;
	    if (listeners) {
	      i = listeners.length;
	      while (i--) {
	        off(this.el, listeners[i][0], listeners[i][1]);
	      }
	    }
	    var unwatchFns = this._paramUnwatchFns;
	    if (unwatchFns) {
	      i = unwatchFns.length;
	      while (i--) {
	        unwatchFns[i]();
	      }
	    }
	    if (process.env.NODE_ENV !== 'production' && this.el) {
	      this.el._vue_directives.$remove(this);
	    }
	    this.vm = this.el = this._watcher = this._listeners = null;
	  }
	};

	function lifecycleMixin (Vue) {
	  /**
	   * Update v-ref for component.
	   *
	   * @param {Boolean} remove
	   */

	  Vue.prototype._updateRef = function (remove) {
	    var ref = this.$options._ref;
	    if (ref) {
	      var refs = (this._scope || this._context).$refs;
	      if (remove) {
	        if (refs[ref] === this) {
	          refs[ref] = null;
	        }
	      } else {
	        refs[ref] = this;
	      }
	    }
	  };

	  /**
	   * Transclude, compile and link element.
	   *
	   * If a pre-compiled linker is available, that means the
	   * passed in element will be pre-transcluded and compiled
	   * as well - all we need to do is to call the linker.
	   *
	   * Otherwise we need to call transclude/compile/link here.
	   *
	   * @param {Element} el
	   */

	  Vue.prototype._compile = function (el) {
	    var options = this.$options;

	    // transclude and init element
	    // transclude can potentially replace original
	    // so we need to keep reference; this step also injects
	    // the template and caches the original attributes
	    // on the container node and replacer node.
	    var original = el;
	    el = transclude(el, options);
	    this._initElement(el);

	    // handle v-pre on root node (#2026)
	    if (el.nodeType === 1 && getAttr(el, 'v-pre') !== null) {
	      return;
	    }

	    // root is always compiled per-instance, because
	    // container attrs and props can be different every time.
	    var contextOptions = this._context && this._context.$options;
	    var rootLinker = compileRoot(el, options, contextOptions);

	    // resolve slot distribution
	    resolveSlots(this, options._content);

	    // compile and link the rest
	    var contentLinkFn;
	    var ctor = this.constructor;
	    // component compilation can be cached
	    // as long as it's not using inline-template
	    if (options._linkerCachable) {
	      contentLinkFn = ctor.linker;
	      if (!contentLinkFn) {
	        contentLinkFn = ctor.linker = compile(el, options);
	      }
	    }

	    // link phase
	    // make sure to link root with prop scope!
	    var rootUnlinkFn = rootLinker(this, el, this._scope);
	    var contentUnlinkFn = contentLinkFn ? contentLinkFn(this, el) : compile(el, options)(this, el);

	    // register composite unlink function
	    // to be called during instance destruction
	    this._unlinkFn = function () {
	      rootUnlinkFn();
	      // passing destroying: true to avoid searching and
	      // splicing the directives
	      contentUnlinkFn(true);
	    };

	    // finally replace original
	    if (options.replace) {
	      replace(original, el);
	    }

	    this._isCompiled = true;
	    this._callHook('compiled');
	  };

	  /**
	   * Initialize instance element. Called in the public
	   * $mount() method.
	   *
	   * @param {Element} el
	   */

	  Vue.prototype._initElement = function (el) {
	    if (isFragment(el)) {
	      this._isFragment = true;
	      this.$el = this._fragmentStart = el.firstChild;
	      this._fragmentEnd = el.lastChild;
	      // set persisted text anchors to empty
	      if (this._fragmentStart.nodeType === 3) {
	        this._fragmentStart.data = this._fragmentEnd.data = '';
	      }
	      this._fragment = el;
	    } else {
	      this.$el = el;
	    }
	    this.$el.__vue__ = this;
	    this._callHook('beforeCompile');
	  };

	  /**
	   * Create and bind a directive to an element.
	   *
	   * @param {Object} descriptor - parsed directive descriptor
	   * @param {Node} node   - target node
	   * @param {Vue} [host] - transclusion host component
	   * @param {Object} [scope] - v-for scope
	   * @param {Fragment} [frag] - owner fragment
	   */

	  Vue.prototype._bindDir = function (descriptor, node, host, scope, frag) {
	    this._directives.push(new Directive(descriptor, this, node, host, scope, frag));
	  };

	  /**
	   * Teardown an instance, unobserves the data, unbind all the
	   * directives, turn off all the event listeners, etc.
	   *
	   * @param {Boolean} remove - whether to remove the DOM node.
	   * @param {Boolean} deferCleanup - if true, defer cleanup to
	   *                                 be called later
	   */

	  Vue.prototype._destroy = function (remove, deferCleanup) {
	    if (this._isBeingDestroyed) {
	      if (!deferCleanup) {
	        this._cleanup();
	      }
	      return;
	    }

	    var destroyReady;
	    var pendingRemoval;

	    var self = this;
	    // Cleanup should be called either synchronously or asynchronoysly as
	    // callback of this.$remove(), or if remove and deferCleanup are false.
	    // In any case it should be called after all other removing, unbinding and
	    // turning of is done
	    var cleanupIfPossible = function cleanupIfPossible() {
	      if (destroyReady && !pendingRemoval && !deferCleanup) {
	        self._cleanup();
	      }
	    };

	    // remove DOM element
	    if (remove && this.$el) {
	      pendingRemoval = true;
	      this.$remove(function () {
	        pendingRemoval = false;
	        cleanupIfPossible();
	      });
	    }

	    this._callHook('beforeDestroy');
	    this._isBeingDestroyed = true;
	    var i;
	    // remove self from parent. only necessary
	    // if parent is not being destroyed as well.
	    var parent = this.$parent;
	    if (parent && !parent._isBeingDestroyed) {
	      parent.$children.$remove(this);
	      // unregister ref (remove: true)
	      this._updateRef(true);
	    }
	    // destroy all children.
	    i = this.$children.length;
	    while (i--) {
	      this.$children[i].$destroy();
	    }
	    // teardown props
	    if (this._propsUnlinkFn) {
	      this._propsUnlinkFn();
	    }
	    // teardown all directives. this also tearsdown all
	    // directive-owned watchers.
	    if (this._unlinkFn) {
	      this._unlinkFn();
	    }
	    i = this._watchers.length;
	    while (i--) {
	      this._watchers[i].teardown();
	    }
	    // remove reference to self on $el
	    if (this.$el) {
	      this.$el.__vue__ = null;
	    }

	    destroyReady = true;
	    cleanupIfPossible();
	  };

	  /**
	   * Clean up to ensure garbage collection.
	   * This is called after the leave transition if there
	   * is any.
	   */

	  Vue.prototype._cleanup = function () {
	    if (this._isDestroyed) {
	      return;
	    }
	    // remove self from owner fragment
	    // do it in cleanup so that we can call $destroy with
	    // defer right when a fragment is about to be removed.
	    if (this._frag) {
	      this._frag.children.$remove(this);
	    }
	    // remove reference from data ob
	    // frozen object may not have observer.
	    if (this._data.__ob__) {
	      this._data.__ob__.removeVm(this);
	    }
	    // Clean up references to private properties and other
	    // instances. preserve reference to _data so that proxy
	    // accessors still work. The only potential side effect
	    // here is that mutating the instance after it's destroyed
	    // may affect the state of other components that are still
	    // observing the same object, but that seems to be a
	    // reasonable responsibility for the user rather than
	    // always throwing an error on them.
	    this.$el = this.$parent = this.$root = this.$children = this._watchers = this._context = this._scope = this._directives = null;
	    // call the last hook...
	    this._isDestroyed = true;
	    this._callHook('destroyed');
	    // turn off all instance listeners.
	    this.$off();
	  };
	}

	function miscMixin (Vue) {
	  /**
	   * Apply a list of filter (descriptors) to a value.
	   * Using plain for loops here because this will be called in
	   * the getter of any watcher with filters so it is very
	   * performance sensitive.
	   *
	   * @param {*} value
	   * @param {*} [oldValue]
	   * @param {Array} filters
	   * @param {Boolean} write
	   * @return {*}
	   */

	  Vue.prototype._applyFilters = function (value, oldValue, filters, write) {
	    var filter, fn, args, arg, offset, i, l, j, k;
	    for (i = 0, l = filters.length; i < l; i++) {
	      filter = filters[write ? l - i - 1 : i];
	      fn = resolveAsset(this.$options, 'filters', filter.name, true);
	      if (!fn) continue;
	      fn = write ? fn.write : fn.read || fn;
	      if (typeof fn !== 'function') continue;
	      args = write ? [value, oldValue] : [value];
	      offset = write ? 2 : 1;
	      if (filter.args) {
	        for (j = 0, k = filter.args.length; j < k; j++) {
	          arg = filter.args[j];
	          args[j + offset] = arg.dynamic ? this.$get(arg.value) : arg.value;
	        }
	      }
	      value = fn.apply(this, args);
	    }
	    return value;
	  };

	  /**
	   * Resolve a component, depending on whether the component
	   * is defined normally or using an async factory function.
	   * Resolves synchronously if already resolved, otherwise
	   * resolves asynchronously and caches the resolved
	   * constructor on the factory.
	   *
	   * @param {String|Function} value
	   * @param {Function} cb
	   */

	  Vue.prototype._resolveComponent = function (value, cb) {
	    var factory;
	    if (typeof value === 'function') {
	      factory = value;
	    } else {
	      factory = resolveAsset(this.$options, 'components', value, true);
	    }
	    if (!factory) {
	      return;
	    }
	    // async component factory
	    if (!factory.options) {
	      if (factory.resolved) {
	        // cached
	        cb(factory.resolved);
	      } else if (factory.requested) {
	        // pool callbacks
	        factory.pendingCallbacks.push(cb);
	      } else {
	        factory.requested = true;
	        var cbs = factory.pendingCallbacks = [cb];
	        factory.call(this, function resolve(res) {
	          if (isPlainObject(res)) {
	            res = Vue.extend(res);
	          }
	          // cache resolved
	          factory.resolved = res;
	          // invoke callbacks
	          for (var i = 0, l = cbs.length; i < l; i++) {
	            cbs[i](res);
	          }
	        }, function reject(reason) {
	          process.env.NODE_ENV !== 'production' && warn('Failed to resolve async component' + (typeof value === 'string' ? ': ' + value : '') + '. ' + (reason ? '\nReason: ' + reason : ''));
	        });
	      }
	    } else {
	      // normal component
	      cb(factory);
	    }
	  };
	}

	var filterRE$1 = /[^|]\|[^|]/;

	function dataAPI (Vue) {
	  /**
	   * Get the value from an expression on this vm.
	   *
	   * @param {String} exp
	   * @param {Boolean} [asStatement]
	   * @return {*}
	   */

	  Vue.prototype.$get = function (exp, asStatement) {
	    var res = parseExpression(exp);
	    if (res) {
	      if (asStatement && !isSimplePath(exp)) {
	        var self = this;
	        return function statementHandler() {
	          self.$arguments = toArray(arguments);
	          var result = res.get.call(self, self);
	          self.$arguments = null;
	          return result;
	        };
	      } else {
	        try {
	          return res.get.call(this, this);
	        } catch (e) {}
	      }
	    }
	  };

	  /**
	   * Set the value from an expression on this vm.
	   * The expression must be a valid left-hand
	   * expression in an assignment.
	   *
	   * @param {String} exp
	   * @param {*} val
	   */

	  Vue.prototype.$set = function (exp, val) {
	    var res = parseExpression(exp, true);
	    if (res && res.set) {
	      res.set.call(this, this, val);
	    }
	  };

	  /**
	   * Delete a property on the VM
	   *
	   * @param {String} key
	   */

	  Vue.prototype.$delete = function (key) {
	    del(this._data, key);
	  };

	  /**
	   * Watch an expression, trigger callback when its
	   * value changes.
	   *
	   * @param {String|Function} expOrFn
	   * @param {Function} cb
	   * @param {Object} [options]
	   *                 - {Boolean} deep
	   *                 - {Boolean} immediate
	   * @return {Function} - unwatchFn
	   */

	  Vue.prototype.$watch = function (expOrFn, cb, options) {
	    var vm = this;
	    var parsed;
	    if (typeof expOrFn === 'string') {
	      parsed = parseDirective(expOrFn);
	      expOrFn = parsed.expression;
	    }
	    var watcher = new Watcher(vm, expOrFn, cb, {
	      deep: options && options.deep,
	      sync: options && options.sync,
	      filters: parsed && parsed.filters,
	      user: !options || options.user !== false
	    });
	    if (options && options.immediate) {
	      cb.call(vm, watcher.value);
	    }
	    return function unwatchFn() {
	      watcher.teardown();
	    };
	  };

	  /**
	   * Evaluate a text directive, including filters.
	   *
	   * @param {String} text
	   * @param {Boolean} [asStatement]
	   * @return {String}
	   */

	  Vue.prototype.$eval = function (text, asStatement) {
	    // check for filters.
	    if (filterRE$1.test(text)) {
	      var dir = parseDirective(text);
	      // the filter regex check might give false positive
	      // for pipes inside strings, so it's possible that
	      // we don't get any filters here
	      var val = this.$get(dir.expression, asStatement);
	      return dir.filters ? this._applyFilters(val, null, dir.filters) : val;
	    } else {
	      // no filter
	      return this.$get(text, asStatement);
	    }
	  };

	  /**
	   * Interpolate a piece of template text.
	   *
	   * @param {String} text
	   * @return {String}
	   */

	  Vue.prototype.$interpolate = function (text) {
	    var tokens = parseText(text);
	    var vm = this;
	    if (tokens) {
	      if (tokens.length === 1) {
	        return vm.$eval(tokens[0].value) + '';
	      } else {
	        return tokens.map(function (token) {
	          return token.tag ? vm.$eval(token.value) : token.value;
	        }).join('');
	      }
	    } else {
	      return text;
	    }
	  };

	  /**
	   * Log instance data as a plain JS object
	   * so that it is easier to inspect in console.
	   * This method assumes console is available.
	   *
	   * @param {String} [path]
	   */

	  Vue.prototype.$log = function (path) {
	    var data = path ? getPath(this._data, path) : this._data;
	    if (data) {
	      data = clean(data);
	    }
	    // include computed fields
	    if (!path) {
	      var key;
	      for (key in this.$options.computed) {
	        data[key] = clean(this[key]);
	      }
	      if (this._props) {
	        for (key in this._props) {
	          data[key] = clean(this[key]);
	        }
	      }
	    }
	    console.log(data);
	  };

	  /**
	   * "clean" a getter/setter converted object into a plain
	   * object copy.
	   *
	   * @param {Object} - obj
	   * @return {Object}
	   */

	  function clean(obj) {
	    return JSON.parse(JSON.stringify(obj));
	  }
	}

	function domAPI (Vue) {
	  /**
	   * Convenience on-instance nextTick. The callback is
	   * auto-bound to the instance, and this avoids component
	   * modules having to rely on the global Vue.
	   *
	   * @param {Function} fn
	   */

	  Vue.prototype.$nextTick = function (fn) {
	    nextTick(fn, this);
	  };

	  /**
	   * Append instance to target
	   *
	   * @param {Node} target
	   * @param {Function} [cb]
	   * @param {Boolean} [withTransition] - defaults to true
	   */

	  Vue.prototype.$appendTo = function (target, cb, withTransition) {
	    return insert(this, target, cb, withTransition, append, appendWithTransition);
	  };

	  /**
	   * Prepend instance to target
	   *
	   * @param {Node} target
	   * @param {Function} [cb]
	   * @param {Boolean} [withTransition] - defaults to true
	   */

	  Vue.prototype.$prependTo = function (target, cb, withTransition) {
	    target = query(target);
	    if (target.hasChildNodes()) {
	      this.$before(target.firstChild, cb, withTransition);
	    } else {
	      this.$appendTo(target, cb, withTransition);
	    }
	    return this;
	  };

	  /**
	   * Insert instance before target
	   *
	   * @param {Node} target
	   * @param {Function} [cb]
	   * @param {Boolean} [withTransition] - defaults to true
	   */

	  Vue.prototype.$before = function (target, cb, withTransition) {
	    return insert(this, target, cb, withTransition, beforeWithCb, beforeWithTransition);
	  };

	  /**
	   * Insert instance after target
	   *
	   * @param {Node} target
	   * @param {Function} [cb]
	   * @param {Boolean} [withTransition] - defaults to true
	   */

	  Vue.prototype.$after = function (target, cb, withTransition) {
	    target = query(target);
	    if (target.nextSibling) {
	      this.$before(target.nextSibling, cb, withTransition);
	    } else {
	      this.$appendTo(target.parentNode, cb, withTransition);
	    }
	    return this;
	  };

	  /**
	   * Remove instance from DOM
	   *
	   * @param {Function} [cb]
	   * @param {Boolean} [withTransition] - defaults to true
	   */

	  Vue.prototype.$remove = function (cb, withTransition) {
	    if (!this.$el.parentNode) {
	      return cb && cb();
	    }
	    var inDocument = this._isAttached && inDoc(this.$el);
	    // if we are not in document, no need to check
	    // for transitions
	    if (!inDocument) withTransition = false;
	    var self = this;
	    var realCb = function realCb() {
	      if (inDocument) self._callHook('detached');
	      if (cb) cb();
	    };
	    if (this._isFragment) {
	      removeNodeRange(this._fragmentStart, this._fragmentEnd, this, this._fragment, realCb);
	    } else {
	      var op = withTransition === false ? removeWithCb : removeWithTransition;
	      op(this.$el, this, realCb);
	    }
	    return this;
	  };

	  /**
	   * Shared DOM insertion function.
	   *
	   * @param {Vue} vm
	   * @param {Element} target
	   * @param {Function} [cb]
	   * @param {Boolean} [withTransition]
	   * @param {Function} op1 - op for non-transition insert
	   * @param {Function} op2 - op for transition insert
	   * @return vm
	   */

	  function insert(vm, target, cb, withTransition, op1, op2) {
	    target = query(target);
	    var targetIsDetached = !inDoc(target);
	    var op = withTransition === false || targetIsDetached ? op1 : op2;
	    var shouldCallHook = !targetIsDetached && !vm._isAttached && !inDoc(vm.$el);
	    if (vm._isFragment) {
	      mapNodeRange(vm._fragmentStart, vm._fragmentEnd, function (node) {
	        op(node, target, vm);
	      });
	      cb && cb();
	    } else {
	      op(vm.$el, target, vm, cb);
	    }
	    if (shouldCallHook) {
	      vm._callHook('attached');
	    }
	    return vm;
	  }

	  /**
	   * Check for selectors
	   *
	   * @param {String|Element} el
	   */

	  function query(el) {
	    return typeof el === 'string' ? document.querySelector(el) : el;
	  }

	  /**
	   * Append operation that takes a callback.
	   *
	   * @param {Node} el
	   * @param {Node} target
	   * @param {Vue} vm - unused
	   * @param {Function} [cb]
	   */

	  function append(el, target, vm, cb) {
	    target.appendChild(el);
	    if (cb) cb();
	  }

	  /**
	   * InsertBefore operation that takes a callback.
	   *
	   * @param {Node} el
	   * @param {Node} target
	   * @param {Vue} vm - unused
	   * @param {Function} [cb]
	   */

	  function beforeWithCb(el, target, vm, cb) {
	    before(el, target);
	    if (cb) cb();
	  }

	  /**
	   * Remove operation that takes a callback.
	   *
	   * @param {Node} el
	   * @param {Vue} vm - unused
	   * @param {Function} [cb]
	   */

	  function removeWithCb(el, vm, cb) {
	    remove(el);
	    if (cb) cb();
	  }
	}

	function eventsAPI (Vue) {
	  /**
	   * Listen on the given `event` with `fn`.
	   *
	   * @param {String} event
	   * @param {Function} fn
	   */

	  Vue.prototype.$on = function (event, fn) {
	    (this._events[event] || (this._events[event] = [])).push(fn);
	    modifyListenerCount(this, event, 1);
	    return this;
	  };

	  /**
	   * Adds an `event` listener that will be invoked a single
	   * time then automatically removed.
	   *
	   * @param {String} event
	   * @param {Function} fn
	   */

	  Vue.prototype.$once = function (event, fn) {
	    var self = this;
	    function on() {
	      self.$off(event, on);
	      fn.apply(this, arguments);
	    }
	    on.fn = fn;
	    this.$on(event, on);
	    return this;
	  };

	  /**
	   * Remove the given callback for `event` or all
	   * registered callbacks.
	   *
	   * @param {String} event
	   * @param {Function} fn
	   */

	  Vue.prototype.$off = function (event, fn) {
	    var cbs;
	    // all
	    if (!arguments.length) {
	      if (this.$parent) {
	        for (event in this._events) {
	          cbs = this._events[event];
	          if (cbs) {
	            modifyListenerCount(this, event, -cbs.length);
	          }
	        }
	      }
	      this._events = {};
	      return this;
	    }
	    // specific event
	    cbs = this._events[event];
	    if (!cbs) {
	      return this;
	    }
	    if (arguments.length === 1) {
	      modifyListenerCount(this, event, -cbs.length);
	      this._events[event] = null;
	      return this;
	    }
	    // specific handler
	    var cb;
	    var i = cbs.length;
	    while (i--) {
	      cb = cbs[i];
	      if (cb === fn || cb.fn === fn) {
	        modifyListenerCount(this, event, -1);
	        cbs.splice(i, 1);
	        break;
	      }
	    }
	    return this;
	  };

	  /**
	   * Trigger an event on self.
	   *
	   * @param {String|Object} event
	   * @return {Boolean} shouldPropagate
	   */

	  Vue.prototype.$emit = function (event) {
	    var isSource = typeof event === 'string';
	    event = isSource ? event : event.name;
	    var cbs = this._events[event];
	    var shouldPropagate = isSource || !cbs;
	    if (cbs) {
	      cbs = cbs.length > 1 ? toArray(cbs) : cbs;
	      // this is a somewhat hacky solution to the question raised
	      // in #2102: for an inline component listener like <comp @test="doThis">,
	      // the propagation handling is somewhat broken. Therefore we
	      // need to treat these inline callbacks differently.
	      var hasParentCbs = isSource && cbs.some(function (cb) {
	        return cb._fromParent;
	      });
	      if (hasParentCbs) {
	        shouldPropagate = false;
	      }
	      var args = toArray(arguments, 1);
	      for (var i = 0, l = cbs.length; i < l; i++) {
	        var cb = cbs[i];
	        var res = cb.apply(this, args);
	        if (res === true && (!hasParentCbs || cb._fromParent)) {
	          shouldPropagate = true;
	        }
	      }
	    }
	    return shouldPropagate;
	  };

	  /**
	   * Recursively broadcast an event to all children instances.
	   *
	   * @param {String|Object} event
	   * @param {...*} additional arguments
	   */

	  Vue.prototype.$broadcast = function (event) {
	    var isSource = typeof event === 'string';
	    event = isSource ? event : event.name;
	    // if no child has registered for this event,
	    // then there's no need to broadcast.
	    if (!this._eventsCount[event]) return;
	    var children = this.$children;
	    var args = toArray(arguments);
	    if (isSource) {
	      // use object event to indicate non-source emit
	      // on children
	      args[0] = { name: event, source: this };
	    }
	    for (var i = 0, l = children.length; i < l; i++) {
	      var child = children[i];
	      var shouldPropagate = child.$emit.apply(child, args);
	      if (shouldPropagate) {
	        child.$broadcast.apply(child, args);
	      }
	    }
	    return this;
	  };

	  /**
	   * Recursively propagate an event up the parent chain.
	   *
	   * @param {String} event
	   * @param {...*} additional arguments
	   */

	  Vue.prototype.$dispatch = function (event) {
	    var shouldPropagate = this.$emit.apply(this, arguments);
	    if (!shouldPropagate) return;
	    var parent = this.$parent;
	    var args = toArray(arguments);
	    // use object event to indicate non-source emit
	    // on parents
	    args[0] = { name: event, source: this };
	    while (parent) {
	      shouldPropagate = parent.$emit.apply(parent, args);
	      parent = shouldPropagate ? parent.$parent : null;
	    }
	    return this;
	  };

	  /**
	   * Modify the listener counts on all parents.
	   * This bookkeeping allows $broadcast to return early when
	   * no child has listened to a certain event.
	   *
	   * @param {Vue} vm
	   * @param {String} event
	   * @param {Number} count
	   */

	  var hookRE = /^hook:/;
	  function modifyListenerCount(vm, event, count) {
	    var parent = vm.$parent;
	    // hooks do not get broadcasted so no need
	    // to do bookkeeping for them
	    if (!parent || !count || hookRE.test(event)) return;
	    while (parent) {
	      parent._eventsCount[event] = (parent._eventsCount[event] || 0) + count;
	      parent = parent.$parent;
	    }
	  }
	}

	function lifecycleAPI (Vue) {
	  /**
	   * Set instance target element and kick off the compilation
	   * process. The passed in `el` can be a selector string, an
	   * existing Element, or a DocumentFragment (for block
	   * instances).
	   *
	   * @param {Element|DocumentFragment|string} el
	   * @public
	   */

	  Vue.prototype.$mount = function (el) {
	    if (this._isCompiled) {
	      process.env.NODE_ENV !== 'production' && warn('$mount() should be called only once.', this);
	      return;
	    }
	    el = query(el);
	    if (!el) {
	      el = document.createElement('div');
	    }
	    this._compile(el);
	    this._initDOMHooks();
	    if (inDoc(this.$el)) {
	      this._callHook('attached');
	      ready.call(this);
	    } else {
	      this.$once('hook:attached', ready);
	    }
	    return this;
	  };

	  /**
	   * Mark an instance as ready.
	   */

	  function ready() {
	    this._isAttached = true;
	    this._isReady = true;
	    this._callHook('ready');
	  }

	  /**
	   * Teardown the instance, simply delegate to the internal
	   * _destroy.
	   *
	   * @param {Boolean} remove
	   * @param {Boolean} deferCleanup
	   */

	  Vue.prototype.$destroy = function (remove, deferCleanup) {
	    this._destroy(remove, deferCleanup);
	  };

	  /**
	   * Partially compile a piece of DOM and return a
	   * decompile function.
	   *
	   * @param {Element|DocumentFragment} el
	   * @param {Vue} [host]
	   * @param {Object} [scope]
	   * @param {Fragment} [frag]
	   * @return {Function}
	   */

	  Vue.prototype.$compile = function (el, host, scope, frag) {
	    return compile(el, this.$options, true)(this, el, host, scope, frag);
	  };
	}

	/**
	 * The exposed Vue constructor.
	 *
	 * API conventions:
	 * - public API methods/properties are prefixed with `$`
	 * - internal methods/properties are prefixed with `_`
	 * - non-prefixed properties are assumed to be proxied user
	 *   data.
	 *
	 * @constructor
	 * @param {Object} [options]
	 * @public
	 */

	function Vue(options) {
	  this._init(options);
	}

	// install internals
	initMixin(Vue);
	stateMixin(Vue);
	eventsMixin(Vue);
	lifecycleMixin(Vue);
	miscMixin(Vue);

	// install instance APIs
	dataAPI(Vue);
	domAPI(Vue);
	eventsAPI(Vue);
	lifecycleAPI(Vue);

	var slot = {

	  priority: SLOT,
	  params: ['name'],

	  bind: function bind() {
	    // this was resolved during component transclusion
	    var name = this.params.name || 'default';
	    var content = this.vm._slotContents && this.vm._slotContents[name];
	    if (!content || !content.hasChildNodes()) {
	      this.fallback();
	    } else {
	      this.compile(content.cloneNode(true), this.vm._context, this.vm);
	    }
	  },

	  compile: function compile(content, context, host) {
	    if (content && context) {
	      if (this.el.hasChildNodes() && content.childNodes.length === 1 && content.childNodes[0].nodeType === 1 && content.childNodes[0].hasAttribute('v-if')) {
	        // if the inserted slot has v-if
	        // inject fallback content as the v-else
	        var elseBlock = document.createElement('template');
	        elseBlock.setAttribute('v-else', '');
	        elseBlock.innerHTML = this.el.innerHTML;
	        // the else block should be compiled in child scope
	        elseBlock._context = this.vm;
	        content.appendChild(elseBlock);
	      }
	      var scope = host ? host._scope : this._scope;
	      this.unlink = context.$compile(content, host, scope, this._frag);
	    }
	    if (content) {
	      replace(this.el, content);
	    } else {
	      remove(this.el);
	    }
	  },

	  fallback: function fallback() {
	    this.compile(extractContent(this.el, true), this.vm);
	  },

	  unbind: function unbind() {
	    if (this.unlink) {
	      this.unlink();
	    }
	  }
	};

	var partial = {

	  priority: PARTIAL,

	  params: ['name'],

	  // watch changes to name for dynamic partials
	  paramWatchers: {
	    name: function name(value) {
	      vIf.remove.call(this);
	      if (value) {
	        this.insert(value);
	      }
	    }
	  },

	  bind: function bind() {
	    this.anchor = createAnchor('v-partial');
	    replace(this.el, this.anchor);
	    this.insert(this.params.name);
	  },

	  insert: function insert(id) {
	    var partial = resolveAsset(this.vm.$options, 'partials', id, true);
	    if (partial) {
	      this.factory = new FragmentFactory(this.vm, partial);
	      vIf.insert.call(this);
	    }
	  },

	  unbind: function unbind() {
	    if (this.frag) {
	      this.frag.destroy();
	    }
	  }
	};

	var elementDirectives = {
	  slot: slot,
	  partial: partial
	};

	var convertArray = vFor._postProcess;

	/**
	 * Limit filter for arrays
	 *
	 * @param {Number} n
	 * @param {Number} offset (Decimal expected)
	 */

	function limitBy(arr, n, offset) {
	  offset = offset ? parseInt(offset, 10) : 0;
	  n = toNumber(n);
	  return typeof n === 'number' ? arr.slice(offset, offset + n) : arr;
	}

	/**
	 * Filter filter for arrays
	 *
	 * @param {String} search
	 * @param {String} [delimiter]
	 * @param {String} ...dataKeys
	 */

	function filterBy(arr, search, delimiter) {
	  arr = convertArray(arr);
	  if (search == null) {
	    return arr;
	  }
	  if (typeof search === 'function') {
	    return arr.filter(search);
	  }
	  // cast to lowercase string
	  search = ('' + search).toLowerCase();
	  // allow optional `in` delimiter
	  // because why not
	  var n = delimiter === 'in' ? 3 : 2;
	  // extract and flatten keys
	  var keys = Array.prototype.concat.apply([], toArray(arguments, n));
	  var res = [];
	  var item, key, val, j;
	  for (var i = 0, l = arr.length; i < l; i++) {
	    item = arr[i];
	    val = item && item.$value || item;
	    j = keys.length;
	    if (j) {
	      while (j--) {
	        key = keys[j];
	        if (key === '$key' && contains(item.$key, search) || contains(getPath(val, key), search)) {
	          res.push(item);
	          break;
	        }
	      }
	    } else if (contains(item, search)) {
	      res.push(item);
	    }
	  }
	  return res;
	}

	/**
	 * Filter filter for arrays
	 *
	 * @param {String|Array<String>|Function} ...sortKeys
	 * @param {Number} [order]
	 */

	function orderBy(arr) {
	  var comparator = null;
	  var sortKeys = undefined;
	  arr = convertArray(arr);

	  // determine order (last argument)
	  var args = toArray(arguments, 1);
	  var order = args[args.length - 1];
	  if (typeof order === 'number') {
	    order = order < 0 ? -1 : 1;
	    args = args.length > 1 ? args.slice(0, -1) : args;
	  } else {
	    order = 1;
	  }

	  // determine sortKeys & comparator
	  var firstArg = args[0];
	  if (!firstArg) {
	    return arr;
	  } else if (typeof firstArg === 'function') {
	    // custom comparator
	    comparator = function (a, b) {
	      return firstArg(a, b) * order;
	    };
	  } else {
	    // string keys. flatten first
	    sortKeys = Array.prototype.concat.apply([], args);
	    comparator = function (a, b, i) {
	      i = i || 0;
	      return i >= sortKeys.length - 1 ? baseCompare(a, b, i) : baseCompare(a, b, i) || comparator(a, b, i + 1);
	    };
	  }

	  function baseCompare(a, b, sortKeyIndex) {
	    var sortKey = sortKeys[sortKeyIndex];
	    if (sortKey) {
	      if (sortKey !== '$key') {
	        if (isObject(a) && '$value' in a) a = a.$value;
	        if (isObject(b) && '$value' in b) b = b.$value;
	      }
	      a = isObject(a) ? getPath(a, sortKey) : a;
	      b = isObject(b) ? getPath(b, sortKey) : b;
	    }
	    return a === b ? 0 : a > b ? order : -order;
	  }

	  // sort on a copy to avoid mutating original array
	  return arr.slice().sort(comparator);
	}

	/**
	 * String contain helper
	 *
	 * @param {*} val
	 * @param {String} search
	 */

	function contains(val, search) {
	  var i;
	  if (isPlainObject(val)) {
	    var keys = Object.keys(val);
	    i = keys.length;
	    while (i--) {
	      if (contains(val[keys[i]], search)) {
	        return true;
	      }
	    }
	  } else if (isArray(val)) {
	    i = val.length;
	    while (i--) {
	      if (contains(val[i], search)) {
	        return true;
	      }
	    }
	  } else if (val != null) {
	    return val.toString().toLowerCase().indexOf(search) > -1;
	  }
	}

	var digitsRE = /(\d{3})(?=\d)/g;

	// asset collections must be a plain object.
	var filters = {

	  orderBy: orderBy,
	  filterBy: filterBy,
	  limitBy: limitBy,

	  /**
	   * Stringify value.
	   *
	   * @param {Number} indent
	   */

	  json: {
	    read: function read(value, indent) {
	      return typeof value === 'string' ? value : JSON.stringify(value, null, Number(indent) || 2);
	    },
	    write: function write(value) {
	      try {
	        return JSON.parse(value);
	      } catch (e) {
	        return value;
	      }
	    }
	  },

	  /**
	   * 'abc' => 'Abc'
	   */

	  capitalize: function capitalize(value) {
	    if (!value && value !== 0) return '';
	    value = value.toString();
	    return value.charAt(0).toUpperCase() + value.slice(1);
	  },

	  /**
	   * 'abc' => 'ABC'
	   */

	  uppercase: function uppercase(value) {
	    return value || value === 0 ? value.toString().toUpperCase() : '';
	  },

	  /**
	   * 'AbC' => 'abc'
	   */

	  lowercase: function lowercase(value) {
	    return value || value === 0 ? value.toString().toLowerCase() : '';
	  },

	  /**
	   * 12345 => $12,345.00
	   *
	   * @param {String} sign
	   */

	  currency: function currency(value, _currency) {
	    value = parseFloat(value);
	    if (!isFinite(value) || !value && value !== 0) return '';
	    _currency = _currency != null ? _currency : '$';
	    var stringified = Math.abs(value).toFixed(2);
	    var _int = stringified.slice(0, -3);
	    var i = _int.length % 3;
	    var head = i > 0 ? _int.slice(0, i) + (_int.length > 3 ? ',' : '') : '';
	    var _float = stringified.slice(-3);
	    var sign = value < 0 ? '-' : '';
	    return sign + _currency + head + _int.slice(i).replace(digitsRE, '$1,') + _float;
	  },

	  /**
	   * 'item' => 'items'
	   *
	   * @params
	   *  an array of strings corresponding to
	   *  the single, double, triple ... forms of the word to
	   *  be pluralized. When the number to be pluralized
	   *  exceeds the length of the args, it will use the last
	   *  entry in the array.
	   *
	   *  e.g. ['single', 'double', 'triple', 'multiple']
	   */

	  pluralize: function pluralize(value) {
	    var args = toArray(arguments, 1);
	    return args.length > 1 ? args[value % 10 - 1] || args[args.length - 1] : args[0] + (value === 1 ? '' : 's');
	  },

	  /**
	   * Debounce a handler function.
	   *
	   * @param {Function} handler
	   * @param {Number} delay = 300
	   * @return {Function}
	   */

	  debounce: function debounce(handler, delay) {
	    if (!handler) return;
	    if (!delay) {
	      delay = 300;
	    }
	    return _debounce(handler, delay);
	  }
	};

	function installGlobalAPI (Vue) {
	  /**
	   * Vue and every constructor that extends Vue has an
	   * associated options object, which can be accessed during
	   * compilation steps as `this.constructor.options`.
	   *
	   * These can be seen as the default options of every
	   * Vue instance.
	   */

	  Vue.options = {
	    directives: directives,
	    elementDirectives: elementDirectives,
	    filters: filters,
	    transitions: {},
	    components: {},
	    partials: {},
	    replace: true
	  };

	  /**
	   * Expose useful internals
	   */

	  Vue.util = util;
	  Vue.config = config;
	  Vue.set = set;
	  Vue['delete'] = del;
	  Vue.nextTick = nextTick;

	  /**
	   * The following are exposed for advanced usage / plugins
	   */

	  Vue.compiler = compiler;
	  Vue.FragmentFactory = FragmentFactory;
	  Vue.internalDirectives = internalDirectives;
	  Vue.parsers = {
	    path: path,
	    text: text,
	    template: template,
	    directive: directive,
	    expression: expression
	  };

	  /**
	   * Each instance constructor, including Vue, has a unique
	   * cid. This enables us to create wrapped "child
	   * constructors" for prototypal inheritance and cache them.
	   */

	  Vue.cid = 0;
	  var cid = 1;

	  /**
	   * Class inheritance
	   *
	   * @param {Object} extendOptions
	   */

	  Vue.extend = function (extendOptions) {
	    extendOptions = extendOptions || {};
	    var Super = this;
	    var isFirstExtend = Super.cid === 0;
	    if (isFirstExtend && extendOptions._Ctor) {
	      return extendOptions._Ctor;
	    }
	    var name = extendOptions.name || Super.options.name;
	    if (process.env.NODE_ENV !== 'production') {
	      if (!/^[a-zA-Z][\w-]*$/.test(name)) {
	        warn('Invalid component name: "' + name + '". Component names ' + 'can only contain alphanumeric characaters and the hyphen.');
	        name = null;
	      }
	    }
	    var Sub = createClass(name || 'VueComponent');
	    Sub.prototype = Object.create(Super.prototype);
	    Sub.prototype.constructor = Sub;
	    Sub.cid = cid++;
	    Sub.options = mergeOptions(Super.options, extendOptions);
	    Sub['super'] = Super;
	    // allow further extension
	    Sub.extend = Super.extend;
	    // create asset registers, so extended classes
	    // can have their private assets too.
	    config._assetTypes.forEach(function (type) {
	      Sub[type] = Super[type];
	    });
	    // enable recursive self-lookup
	    if (name) {
	      Sub.options.components[name] = Sub;
	    }
	    // cache constructor
	    if (isFirstExtend) {
	      extendOptions._Ctor = Sub;
	    }
	    return Sub;
	  };

	  /**
	   * A function that returns a sub-class constructor with the
	   * given name. This gives us much nicer output when
	   * logging instances in the console.
	   *
	   * @param {String} name
	   * @return {Function}
	   */

	  function createClass(name) {
	    /* eslint-disable no-new-func */
	    return new Function('return function ' + classify(name) + ' (options) { this._init(options) }')();
	    /* eslint-enable no-new-func */
	  }

	  /**
	   * Plugin system
	   *
	   * @param {Object} plugin
	   */

	  Vue.use = function (plugin) {
	    /* istanbul ignore if */
	    if (plugin.installed) {
	      return;
	    }
	    // additional parameters
	    var args = toArray(arguments, 1);
	    args.unshift(this);
	    if (typeof plugin.install === 'function') {
	      plugin.install.apply(plugin, args);
	    } else {
	      plugin.apply(null, args);
	    }
	    plugin.installed = true;
	    return this;
	  };

	  /**
	   * Apply a global mixin by merging it into the default
	   * options.
	   */

	  Vue.mixin = function (mixin) {
	    Vue.options = mergeOptions(Vue.options, mixin);
	  };

	  /**
	   * Create asset registration methods with the following
	   * signature:
	   *
	   * @param {String} id
	   * @param {*} definition
	   */

	  config._assetTypes.forEach(function (type) {
	    Vue[type] = function (id, definition) {
	      if (!definition) {
	        return this.options[type + 's'][id];
	      } else {
	        /* istanbul ignore if */
	        if (process.env.NODE_ENV !== 'production') {
	          if (type === 'component' && (commonTagRE.test(id) || reservedTagRE.test(id))) {
	            warn('Do not use built-in or reserved HTML elements as component ' + 'id: ' + id);
	          }
	        }
	        if (type === 'component' && isPlainObject(definition)) {
	          definition.name = id;
	          definition = Vue.extend(definition);
	        }
	        this.options[type + 's'][id] = definition;
	        return definition;
	      }
	    };
	  });

	  // expose internal transition API
	  extend(Vue.transition, transition);
	}

	installGlobalAPI(Vue);

	Vue.version = '1.0.21';

	// devtools global hook
	/* istanbul ignore next */
	setTimeout(function () {
	  if (config.devtools) {
	    if (devtools) {
	      devtools.emit('init', Vue);
	    } else if (process.env.NODE_ENV !== 'production' && inBrowser && /Chrome\/\d+/.test(window.navigator.userAgent)) {
	      console.log('Download the Vue Devtools for a better development experience:\n' + 'https://github.com/vuejs/vue-devtools');
	    }
	  }
	}, 0);

	module.exports = Vue;
	/* WEBPACK VAR INJECTION */}.call(exports, (function() { return this; }()), __webpack_require__(83), __webpack_require__(82)))

/***/ },

/***/ 83:
/***/ function(module, exports) {

	// shim for using process in browser

	var process = module.exports = {};
	var queue = [];
	var draining = false;
	var currentQueue;
	var queueIndex = -1;

	function cleanUpNextTick() {
	    draining = false;
	    if (currentQueue.length) {
	        queue = currentQueue.concat(queue);
	    } else {
	        queueIndex = -1;
	    }
	    if (queue.length) {
	        drainQueue();
	    }
	}

	function drainQueue() {
	    if (draining) {
	        return;
	    }
	    var timeout = setTimeout(cleanUpNextTick);
	    draining = true;

	    var len = queue.length;
	    while(len) {
	        currentQueue = queue;
	        queue = [];
	        while (++queueIndex < len) {
	            if (currentQueue) {
	                currentQueue[queueIndex].run();
	            }
	        }
	        queueIndex = -1;
	        len = queue.length;
	    }
	    currentQueue = null;
	    draining = false;
	    clearTimeout(timeout);
	}

	process.nextTick = function (fun) {
	    var args = new Array(arguments.length - 1);
	    if (arguments.length > 1) {
	        for (var i = 1; i < arguments.length; i++) {
	            args[i - 1] = arguments[i];
	        }
	    }
	    queue.push(new Item(fun, args));
	    if (queue.length === 1 && !draining) {
	        setTimeout(drainQueue, 0);
	    }
	};

	// v8 likes predictible objects
	function Item(fun, array) {
	    this.fun = fun;
	    this.array = array;
	}
	Item.prototype.run = function () {
	    this.fun.apply(null, this.array);
	};
	process.title = 'browser';
	process.browser = true;
	process.env = {};
	process.argv = [];
	process.version = ''; // empty string to avoid regexp issues
	process.versions = {};

	function noop() {}

	process.on = noop;
	process.addListener = noop;
	process.once = noop;
	process.off = noop;
	process.removeListener = noop;
	process.removeAllListeners = noop;
	process.emit = noop;

	process.binding = function (name) {
	    throw new Error('process.binding is not supported');
	};

	process.cwd = function () { return '/' };
	process.chdir = function (dir) {
	    throw new Error('process.chdir is not supported');
	};
	process.umask = function() { return 0; };


/***/ },

/***/ 84:
/***/ function(module, exports, __webpack_require__) {

	// style-loader: Adds some css to the DOM by adding a <style> tag

	// load the styles
	var content = __webpack_require__(85);
	if(typeof content === 'string') content = [[module.id, content, '']];
	// add the styles to the DOM
	var update = __webpack_require__(80)(content, {});
	if(content.locals) module.exports = content.locals;
	// Hot Module Replacement
	if(false) {
		// When the styles change, update the <style> tags
		if(!content.locals) {
			module.hot.accept("!!./../../node_modules/css-loader/index.js!./../../node_modules/less-loader/index.js!./bootswatch.less", function() {
				var newContent = require("!!./../../node_modules/css-loader/index.js!./../../node_modules/less-loader/index.js!./bootswatch.less");
				if(typeof newContent === 'string') newContent = [[module.id, newContent, '']];
				update(newContent);
			});
		}
		// When the module is disposed, remove the <style> tags
		module.hot.dispose(function() { update(); });
	}

/***/ },

/***/ 85:
/***/ function(module, exports, __webpack_require__) {

	exports = module.exports = __webpack_require__(73)();
	// imports
	exports.push([module.id, "@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,400italic);", ""]);

	// module
	exports.push([module.id, "/*! normalize.css v3.0.3 | MIT License | github.com/necolas/normalize.css */\nhtml {\n  font-family: sans-serif;\n  -ms-text-size-adjust: 100%;\n  -webkit-text-size-adjust: 100%;\n}\nbody {\n  margin: 0;\n}\narticle,\naside,\ndetails,\nfigcaption,\nfigure,\nfooter,\nheader,\nhgroup,\nmain,\nmenu,\nnav,\nsection,\nsummary {\n  display: block;\n}\naudio,\ncanvas,\nprogress,\nvideo {\n  display: inline-block;\n  vertical-align: baseline;\n}\naudio:not([controls]) {\n  display: none;\n  height: 0;\n}\n[hidden],\ntemplate {\n  display: none;\n}\na {\n  background-color: transparent;\n}\na:active,\na:hover {\n  outline: 0;\n}\nabbr[title] {\n  border-bottom: 1px dotted;\n}\nb,\nstrong {\n  font-weight: bold;\n}\ndfn {\n  font-style: italic;\n}\nh1 {\n  font-size: 2em;\n  margin: 0.67em 0;\n}\nmark {\n  background: #ff0;\n  color: #000;\n}\nsmall {\n  font-size: 80%;\n}\nsub,\nsup {\n  font-size: 75%;\n  line-height: 0;\n  position: relative;\n  vertical-align: baseline;\n}\nsup {\n  top: -0.5em;\n}\nsub {\n  bottom: -0.25em;\n}\nimg {\n  border: 0;\n}\nsvg:not(:root) {\n  overflow: hidden;\n}\nfigure {\n  margin: 1em 40px;\n}\nhr {\n  box-sizing: content-box;\n  height: 0;\n}\npre {\n  overflow: auto;\n}\ncode,\nkbd,\npre,\nsamp {\n  font-family: monospace, monospace;\n  font-size: 1em;\n}\nbutton,\ninput,\noptgroup,\nselect,\ntextarea {\n  color: inherit;\n  font: inherit;\n  margin: 0;\n}\nbutton {\n  overflow: visible;\n}\nbutton,\nselect {\n  text-transform: none;\n}\nbutton,\nhtml input[type=\"button\"],\ninput[type=\"reset\"],\ninput[type=\"submit\"] {\n  -webkit-appearance: button;\n  cursor: pointer;\n}\nbutton[disabled],\nhtml input[disabled] {\n  cursor: default;\n}\nbutton::-moz-focus-inner,\ninput::-moz-focus-inner {\n  border: 0;\n  padding: 0;\n}\ninput {\n  line-height: normal;\n}\ninput[type=\"checkbox\"],\ninput[type=\"radio\"] {\n  box-sizing: border-box;\n  padding: 0;\n}\ninput[type=\"number\"]::-webkit-inner-spin-button,\ninput[type=\"number\"]::-webkit-outer-spin-button {\n  height: auto;\n}\ninput[type=\"search\"] {\n  -webkit-appearance: textfield;\n  box-sizing: content-box;\n}\ninput[type=\"search\"]::-webkit-search-cancel-button,\ninput[type=\"search\"]::-webkit-search-decoration {\n  -webkit-appearance: none;\n}\nfieldset {\n  border: 1px solid #c0c0c0;\n  margin: 0 2px;\n  padding: 0.35em 0.625em 0.75em;\n}\nlegend {\n  border: 0;\n  padding: 0;\n}\ntextarea {\n  overflow: auto;\n}\noptgroup {\n  font-weight: bold;\n}\ntable {\n  border-collapse: collapse;\n  border-spacing: 0;\n}\ntd,\nth {\n  padding: 0;\n}\n/*! Source: https://github.com/h5bp/html5-boilerplate/blob/master/src/css/main.css */\n@media print {\n  *,\n  *:before,\n  *:after {\n    background: transparent !important;\n    color: #000 !important;\n    box-shadow: none !important;\n    text-shadow: none !important;\n  }\n  a,\n  a:visited {\n    text-decoration: underline;\n  }\n  a[href]:after {\n    content: \" (\" attr(href) \")\";\n  }\n  abbr[title]:after {\n    content: \" (\" attr(title) \")\";\n  }\n  a[href^=\"#\"]:after,\n  a[href^=\"javascript:\"]:after {\n    content: \"\";\n  }\n  pre,\n  blockquote {\n    border: 1px solid #999;\n    page-break-inside: avoid;\n  }\n  thead {\n    display: table-header-group;\n  }\n  tr,\n  img {\n    page-break-inside: avoid;\n  }\n  img {\n    max-width: 100% !important;\n  }\n  p,\n  h2,\n  h3 {\n    orphans: 3;\n    widows: 3;\n  }\n  h2,\n  h3 {\n    page-break-after: avoid;\n  }\n  .navbar {\n    display: none;\n  }\n  .btn > .caret,\n  .dropup > .btn > .caret {\n    border-top-color: #000 !important;\n  }\n  .label {\n    border: 1px solid #000;\n  }\n  .table {\n    border-collapse: collapse !important;\n  }\n  .table td,\n  .table th {\n    background-color: #fff !important;\n  }\n  .table-bordered th,\n  .table-bordered td {\n    border: 1px solid #ddd !important;\n  }\n}\n* {\n  -webkit-box-sizing: border-box;\n  -moz-box-sizing: border-box;\n  box-sizing: border-box;\n}\n*:before,\n*:after {\n  -webkit-box-sizing: border-box;\n  -moz-box-sizing: border-box;\n  box-sizing: border-box;\n}\nhtml {\n  font-size: 10px;\n  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\n}\nbody {\n  font-family: \"Source Sans Pro\", \"Helvetica Neue\", Helvetica, Arial, sans-serif;\n  font-size: 14px;\n  line-height: 1.42857143;\n  color: #555555;\n  background-color: #fff;\n}\ninput,\nbutton,\nselect,\ntextarea {\n  font-family: inherit;\n  font-size: inherit;\n  line-height: inherit;\n}\na {\n  color: #158CBA;\n  text-decoration: none;\n}\na:hover,\na:focus {\n  color: #158CBA;\n  text-decoration: underline;\n}\na:focus {\n  outline: thin dotted;\n  outline: 5px auto -webkit-focus-ring-color;\n  outline-offset: -2px;\n}\nfigure {\n  margin: 0;\n}\nimg {\n  vertical-align: middle;\n}\n.img-responsive,\n.thumbnail > img,\n.thumbnail a > img,\n.carousel-inner > .item > img,\n.carousel-inner > .item > a > img {\n  display: block;\n  max-width: 100%;\n  height: auto;\n}\n.img-rounded {\n  border-radius: 5px;\n}\n.img-thumbnail {\n  padding: 4px;\n  line-height: 1.42857143;\n  background-color: #fff;\n  border: 1px solid #eeeeee;\n  border-radius: 4px;\n  -webkit-transition: all 0.2s ease-in-out;\n  -o-transition: all 0.2s ease-in-out;\n  transition: all 0.2s ease-in-out;\n  display: inline-block;\n  max-width: 100%;\n  height: auto;\n}\n.img-circle {\n  border-radius: 50%;\n}\nhr {\n  margin-top: 20px;\n  margin-bottom: 20px;\n  border: 0;\n  border-top: 1px solid #eeeeee;\n}\n.sr-only {\n  position: absolute;\n  width: 1px;\n  height: 1px;\n  margin: -1px;\n  padding: 0;\n  overflow: hidden;\n  clip: rect(0, 0, 0, 0);\n  border: 0;\n}\n.sr-only-focusable:active,\n.sr-only-focusable:focus {\n  position: static;\n  width: auto;\n  height: auto;\n  margin: 0;\n  overflow: visible;\n  clip: auto;\n}\n[role=\"button\"] {\n  cursor: pointer;\n}\nh1,\nh2,\nh3,\nh4,\nh5,\nh6,\n.h1,\n.h2,\n.h3,\n.h4,\n.h5,\n.h6 {\n  font-family: inherit;\n  font-weight: 400;\n  line-height: 1.1;\n  color: #333333;\n}\nh1 small,\nh2 small,\nh3 small,\nh4 small,\nh5 small,\nh6 small,\n.h1 small,\n.h2 small,\n.h3 small,\n.h4 small,\n.h5 small,\n.h6 small,\nh1 .small,\nh2 .small,\nh3 .small,\nh4 .small,\nh5 .small,\nh6 .small,\n.h1 .small,\n.h2 .small,\n.h3 .small,\n.h4 .small,\n.h5 .small,\n.h6 .small {\n  font-weight: normal;\n  line-height: 1;\n  color: #999999;\n}\nh1,\n.h1,\nh2,\n.h2,\nh3,\n.h3 {\n  margin-top: 20px;\n  margin-bottom: 10px;\n}\nh1 small,\n.h1 small,\nh2 small,\n.h2 small,\nh3 small,\n.h3 small,\nh1 .small,\n.h1 .small,\nh2 .small,\n.h2 .small,\nh3 .small,\n.h3 .small {\n  font-size: 65%;\n}\nh4,\n.h4,\nh5,\n.h5,\nh6,\n.h6 {\n  margin-top: 10px;\n  margin-bottom: 10px;\n}\nh4 small,\n.h4 small,\nh5 small,\n.h5 small,\nh6 small,\n.h6 small,\nh4 .small,\n.h4 .small,\nh5 .small,\n.h5 .small,\nh6 .small,\n.h6 .small {\n  font-size: 75%;\n}\nh1,\n.h1 {\n  font-size: 36px;\n}\nh2,\n.h2 {\n  font-size: 30px;\n}\nh3,\n.h3 {\n  font-size: 24px;\n}\nh4,\n.h4 {\n  font-size: 18px;\n}\nh5,\n.h5 {\n  font-size: 14px;\n}\nh6,\n.h6 {\n  font-size: 12px;\n}\np {\n  margin: 0 0 10px;\n}\n.lead {\n  margin-bottom: 20px;\n  font-size: 16px;\n  font-weight: 300;\n  line-height: 1.4;\n}\n@media (min-width: 768px) {\n  .lead {\n    font-size: 21px;\n  }\n}\nsmall,\n.small {\n  font-size: 85%;\n}\nmark,\n.mark {\n  background-color: #FF851B;\n  padding: .2em;\n}\n.text-left {\n  text-align: left;\n}\n.text-right {\n  text-align: right;\n}\n.text-center {\n  text-align: center;\n}\n.text-justify {\n  text-align: justify;\n}\n.text-nowrap {\n  white-space: nowrap;\n}\n.text-lowercase {\n  text-transform: lowercase;\n}\n.text-uppercase {\n  text-transform: uppercase;\n}\n.text-capitalize {\n  text-transform: capitalize;\n}\n.text-muted {\n  color: #999999;\n}\n.text-primary {\n  color: #158CBA;\n}\na.text-primary:hover,\na.text-primary:focus {\n  color: #106a8c;\n}\n.text-success {\n  color: #fff;\n}\na.text-success:hover,\na.text-success:focus {\n  color: #e6e6e6;\n}\n.text-info {\n  color: #fff;\n}\na.text-info:hover,\na.text-info:focus {\n  color: #e6e6e6;\n}\n.text-warning {\n  color: #fff;\n}\na.text-warning:hover,\na.text-warning:focus {\n  color: #e6e6e6;\n}\n.text-danger {\n  color: #fff;\n}\na.text-danger:hover,\na.text-danger:focus {\n  color: #e6e6e6;\n}\n.bg-primary {\n  color: #fff;\n  background-color: #158CBA;\n}\na.bg-primary:hover,\na.bg-primary:focus {\n  background-color: #106a8c;\n}\n.bg-success {\n  background-color: #28B62C;\n}\na.bg-success:hover,\na.bg-success:focus {\n  background-color: #1f8c22;\n}\n.bg-info {\n  background-color: #75CAEB;\n}\na.bg-info:hover,\na.bg-info:focus {\n  background-color: #48b9e5;\n}\n.bg-warning {\n  background-color: #FF851B;\n}\na.bg-warning:hover,\na.bg-warning:focus {\n  background-color: #e76b00;\n}\n.bg-danger {\n  background-color: #FF4136;\n}\na.bg-danger:hover,\na.bg-danger:focus {\n  background-color: #ff1103;\n}\n.page-header {\n  padding-bottom: 9px;\n  margin: 40px 0 20px;\n  border-bottom: 1px solid #eeeeee;\n}\nul,\nol {\n  margin-top: 0;\n  margin-bottom: 10px;\n}\nul ul,\nol ul,\nul ol,\nol ol {\n  margin-bottom: 0;\n}\n.list-unstyled {\n  padding-left: 0;\n  list-style: none;\n}\n.list-inline {\n  padding-left: 0;\n  list-style: none;\n  margin-left: -5px;\n}\n.list-inline > li {\n  display: inline-block;\n  padding-left: 5px;\n  padding-right: 5px;\n}\ndl {\n  margin-top: 0;\n  margin-bottom: 20px;\n}\ndt,\ndd {\n  line-height: 1.42857143;\n}\ndt {\n  font-weight: bold;\n}\ndd {\n  margin-left: 0;\n}\n@media (min-width: 768px) {\n  .dl-horizontal dt {\n    float: left;\n    width: 160px;\n    clear: left;\n    text-align: right;\n    overflow: hidden;\n    text-overflow: ellipsis;\n    white-space: nowrap;\n  }\n  .dl-horizontal dd {\n    margin-left: 180px;\n  }\n}\nabbr[title],\nabbr[data-original-title] {\n  cursor: help;\n  border-bottom: 1px dotted #999999;\n}\n.initialism {\n  font-size: 90%;\n  text-transform: uppercase;\n}\nblockquote {\n  padding: 10px 20px;\n  margin: 0 0 20px;\n  font-size: 17.5px;\n  border-left: 5px solid #eeeeee;\n}\nblockquote p:last-child,\nblockquote ul:last-child,\nblockquote ol:last-child {\n  margin-bottom: 0;\n}\nblockquote footer,\nblockquote small,\nblockquote .small {\n  display: block;\n  font-size: 80%;\n  line-height: 1.42857143;\n  color: #999999;\n}\nblockquote footer:before,\nblockquote small:before,\nblockquote .small:before {\n  content: '\\2014   \\A0';\n}\n.blockquote-reverse,\nblockquote.pull-right {\n  padding-right: 15px;\n  padding-left: 0;\n  border-right: 5px solid #eeeeee;\n  border-left: 0;\n  text-align: right;\n}\n.blockquote-reverse footer:before,\nblockquote.pull-right footer:before,\n.blockquote-reverse small:before,\nblockquote.pull-right small:before,\n.blockquote-reverse .small:before,\nblockquote.pull-right .small:before {\n  content: '';\n}\n.blockquote-reverse footer:after,\nblockquote.pull-right footer:after,\n.blockquote-reverse small:after,\nblockquote.pull-right small:after,\n.blockquote-reverse .small:after,\nblockquote.pull-right .small:after {\n  content: '\\A0   \\2014';\n}\naddress {\n  margin-bottom: 20px;\n  font-style: normal;\n  line-height: 1.42857143;\n}\ncode,\nkbd,\npre,\nsamp {\n  font-family: Menlo, Monaco, Consolas, \"Courier New\", monospace;\n}\ncode {\n  padding: 2px 4px;\n  font-size: 90%;\n  color: #c7254e;\n  background-color: #f9f2f4;\n  border-radius: 4px;\n}\nkbd {\n  padding: 2px 4px;\n  font-size: 90%;\n  color: #fff;\n  background-color: #333;\n  border-radius: 2px;\n  box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.25);\n}\nkbd kbd {\n  padding: 0;\n  font-size: 100%;\n  font-weight: bold;\n  box-shadow: none;\n}\npre {\n  display: block;\n  padding: 9.5px;\n  margin: 0 0 10px;\n  font-size: 13px;\n  line-height: 1.42857143;\n  word-break: break-all;\n  word-wrap: break-word;\n  color: #333333;\n  background-color: #f5f5f5;\n  border: 1px solid #ccc;\n  border-radius: 4px;\n}\npre code {\n  padding: 0;\n  font-size: inherit;\n  color: inherit;\n  white-space: pre-wrap;\n  background-color: transparent;\n  border-radius: 0;\n}\n.pre-scrollable {\n  max-height: 340px;\n  overflow-y: scroll;\n}\n.container {\n  margin-right: auto;\n  margin-left: auto;\n  padding-left: 15px;\n  padding-right: 15px;\n}\n@media (min-width: 768px) {\n  .container {\n    width: 750px;\n  }\n}\n@media (min-width: 992px) {\n  .container {\n    width: 970px;\n  }\n}\n@media (min-width: 1200px) {\n  .container {\n    width: 1170px;\n  }\n}\n.container-fluid {\n  margin-right: auto;\n  margin-left: auto;\n  padding-left: 15px;\n  padding-right: 15px;\n}\n.row {\n  margin-left: -15px;\n  margin-right: -15px;\n}\n.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {\n  position: relative;\n  min-height: 1px;\n  padding-left: 15px;\n  padding-right: 15px;\n}\n.col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12 {\n  float: left;\n}\n.col-xs-12 {\n  width: 100%;\n}\n.col-xs-11 {\n  width: 91.66666667%;\n}\n.col-xs-10 {\n  width: 83.33333333%;\n}\n.col-xs-9 {\n  width: 75%;\n}\n.col-xs-8 {\n  width: 66.66666667%;\n}\n.col-xs-7 {\n  width: 58.33333333%;\n}\n.col-xs-6 {\n  width: 50%;\n}\n.col-xs-5 {\n  width: 41.66666667%;\n}\n.col-xs-4 {\n  width: 33.33333333%;\n}\n.col-xs-3 {\n  width: 25%;\n}\n.col-xs-2 {\n  width: 16.66666667%;\n}\n.col-xs-1 {\n  width: 8.33333333%;\n}\n.col-xs-pull-12 {\n  right: 100%;\n}\n.col-xs-pull-11 {\n  right: 91.66666667%;\n}\n.col-xs-pull-10 {\n  right: 83.33333333%;\n}\n.col-xs-pull-9 {\n  right: 75%;\n}\n.col-xs-pull-8 {\n  right: 66.66666667%;\n}\n.col-xs-pull-7 {\n  right: 58.33333333%;\n}\n.col-xs-pull-6 {\n  right: 50%;\n}\n.col-xs-pull-5 {\n  right: 41.66666667%;\n}\n.col-xs-pull-4 {\n  right: 33.33333333%;\n}\n.col-xs-pull-3 {\n  right: 25%;\n}\n.col-xs-pull-2 {\n  right: 16.66666667%;\n}\n.col-xs-pull-1 {\n  right: 8.33333333%;\n}\n.col-xs-pull-0 {\n  right: auto;\n}\n.col-xs-push-12 {\n  left: 100%;\n}\n.col-xs-push-11 {\n  left: 91.66666667%;\n}\n.col-xs-push-10 {\n  left: 83.33333333%;\n}\n.col-xs-push-9 {\n  left: 75%;\n}\n.col-xs-push-8 {\n  left: 66.66666667%;\n}\n.col-xs-push-7 {\n  left: 58.33333333%;\n}\n.col-xs-push-6 {\n  left: 50%;\n}\n.col-xs-push-5 {\n  left: 41.66666667%;\n}\n.col-xs-push-4 {\n  left: 33.33333333%;\n}\n.col-xs-push-3 {\n  left: 25%;\n}\n.col-xs-push-2 {\n  left: 16.66666667%;\n}\n.col-xs-push-1 {\n  left: 8.33333333%;\n}\n.col-xs-push-0 {\n  left: auto;\n}\n.col-xs-offset-12 {\n  margin-left: 100%;\n}\n.col-xs-offset-11 {\n  margin-left: 91.66666667%;\n}\n.col-xs-offset-10 {\n  margin-left: 83.33333333%;\n}\n.col-xs-offset-9 {\n  margin-left: 75%;\n}\n.col-xs-offset-8 {\n  margin-left: 66.66666667%;\n}\n.col-xs-offset-7 {\n  margin-left: 58.33333333%;\n}\n.col-xs-offset-6 {\n  margin-left: 50%;\n}\n.col-xs-offset-5 {\n  margin-left: 41.66666667%;\n}\n.col-xs-offset-4 {\n  margin-left: 33.33333333%;\n}\n.col-xs-offset-3 {\n  margin-left: 25%;\n}\n.col-xs-offset-2 {\n  margin-left: 16.66666667%;\n}\n.col-xs-offset-1 {\n  margin-left: 8.33333333%;\n}\n.col-xs-offset-0 {\n  margin-left: 0%;\n}\n@media (min-width: 768px) {\n  .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {\n    float: left;\n  }\n  .col-sm-12 {\n    width: 100%;\n  }\n  .col-sm-11 {\n    width: 91.66666667%;\n  }\n  .col-sm-10 {\n    width: 83.33333333%;\n  }\n  .col-sm-9 {\n    width: 75%;\n  }\n  .col-sm-8 {\n    width: 66.66666667%;\n  }\n  .col-sm-7 {\n    width: 58.33333333%;\n  }\n  .col-sm-6 {\n    width: 50%;\n  }\n  .col-sm-5 {\n    width: 41.66666667%;\n  }\n  .col-sm-4 {\n    width: 33.33333333%;\n  }\n  .col-sm-3 {\n    width: 25%;\n  }\n  .col-sm-2 {\n    width: 16.66666667%;\n  }\n  .col-sm-1 {\n    width: 8.33333333%;\n  }\n  .col-sm-pull-12 {\n    right: 100%;\n  }\n  .col-sm-pull-11 {\n    right: 91.66666667%;\n  }\n  .col-sm-pull-10 {\n    right: 83.33333333%;\n  }\n  .col-sm-pull-9 {\n    right: 75%;\n  }\n  .col-sm-pull-8 {\n    right: 66.66666667%;\n  }\n  .col-sm-pull-7 {\n    right: 58.33333333%;\n  }\n  .col-sm-pull-6 {\n    right: 50%;\n  }\n  .col-sm-pull-5 {\n    right: 41.66666667%;\n  }\n  .col-sm-pull-4 {\n    right: 33.33333333%;\n  }\n  .col-sm-pull-3 {\n    right: 25%;\n  }\n  .col-sm-pull-2 {\n    right: 16.66666667%;\n  }\n  .col-sm-pull-1 {\n    right: 8.33333333%;\n  }\n  .col-sm-pull-0 {\n    right: auto;\n  }\n  .col-sm-push-12 {\n    left: 100%;\n  }\n  .col-sm-push-11 {\n    left: 91.66666667%;\n  }\n  .col-sm-push-10 {\n    left: 83.33333333%;\n  }\n  .col-sm-push-9 {\n    left: 75%;\n  }\n  .col-sm-push-8 {\n    left: 66.66666667%;\n  }\n  .col-sm-push-7 {\n    left: 58.33333333%;\n  }\n  .col-sm-push-6 {\n    left: 50%;\n  }\n  .col-sm-push-5 {\n    left: 41.66666667%;\n  }\n  .col-sm-push-4 {\n    left: 33.33333333%;\n  }\n  .col-sm-push-3 {\n    left: 25%;\n  }\n  .col-sm-push-2 {\n    left: 16.66666667%;\n  }\n  .col-sm-push-1 {\n    left: 8.33333333%;\n  }\n  .col-sm-push-0 {\n    left: auto;\n  }\n  .col-sm-offset-12 {\n    margin-left: 100%;\n  }\n  .col-sm-offset-11 {\n    margin-left: 91.66666667%;\n  }\n  .col-sm-offset-10 {\n    margin-left: 83.33333333%;\n  }\n  .col-sm-offset-9 {\n    margin-left: 75%;\n  }\n  .col-sm-offset-8 {\n    margin-left: 66.66666667%;\n  }\n  .col-sm-offset-7 {\n    margin-left: 58.33333333%;\n  }\n  .col-sm-offset-6 {\n    margin-left: 50%;\n  }\n  .col-sm-offset-5 {\n    margin-left: 41.66666667%;\n  }\n  .col-sm-offset-4 {\n    margin-left: 33.33333333%;\n  }\n  .col-sm-offset-3 {\n    margin-left: 25%;\n  }\n  .col-sm-offset-2 {\n    margin-left: 16.66666667%;\n  }\n  .col-sm-offset-1 {\n    margin-left: 8.33333333%;\n  }\n  .col-sm-offset-0 {\n    margin-left: 0%;\n  }\n}\n@media (min-width: 992px) {\n  .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12 {\n    float: left;\n  }\n  .col-md-12 {\n    width: 100%;\n  }\n  .col-md-11 {\n    width: 91.66666667%;\n  }\n  .col-md-10 {\n    width: 83.33333333%;\n  }\n  .col-md-9 {\n    width: 75%;\n  }\n  .col-md-8 {\n    width: 66.66666667%;\n  }\n  .col-md-7 {\n    width: 58.33333333%;\n  }\n  .col-md-6 {\n    width: 50%;\n  }\n  .col-md-5 {\n    width: 41.66666667%;\n  }\n  .col-md-4 {\n    width: 33.33333333%;\n  }\n  .col-md-3 {\n    width: 25%;\n  }\n  .col-md-2 {\n    width: 16.66666667%;\n  }\n  .col-md-1 {\n    width: 8.33333333%;\n  }\n  .col-md-pull-12 {\n    right: 100%;\n  }\n  .col-md-pull-11 {\n    right: 91.66666667%;\n  }\n  .col-md-pull-10 {\n    right: 83.33333333%;\n  }\n  .col-md-pull-9 {\n    right: 75%;\n  }\n  .col-md-pull-8 {\n    right: 66.66666667%;\n  }\n  .col-md-pull-7 {\n    right: 58.33333333%;\n  }\n  .col-md-pull-6 {\n    right: 50%;\n  }\n  .col-md-pull-5 {\n    right: 41.66666667%;\n  }\n  .col-md-pull-4 {\n    right: 33.33333333%;\n  }\n  .col-md-pull-3 {\n    right: 25%;\n  }\n  .col-md-pull-2 {\n    right: 16.66666667%;\n  }\n  .col-md-pull-1 {\n    right: 8.33333333%;\n  }\n  .col-md-pull-0 {\n    right: auto;\n  }\n  .col-md-push-12 {\n    left: 100%;\n  }\n  .col-md-push-11 {\n    left: 91.66666667%;\n  }\n  .col-md-push-10 {\n    left: 83.33333333%;\n  }\n  .col-md-push-9 {\n    left: 75%;\n  }\n  .col-md-push-8 {\n    left: 66.66666667%;\n  }\n  .col-md-push-7 {\n    left: 58.33333333%;\n  }\n  .col-md-push-6 {\n    left: 50%;\n  }\n  .col-md-push-5 {\n    left: 41.66666667%;\n  }\n  .col-md-push-4 {\n    left: 33.33333333%;\n  }\n  .col-md-push-3 {\n    left: 25%;\n  }\n  .col-md-push-2 {\n    left: 16.66666667%;\n  }\n  .col-md-push-1 {\n    left: 8.33333333%;\n  }\n  .col-md-push-0 {\n    left: auto;\n  }\n  .col-md-offset-12 {\n    margin-left: 100%;\n  }\n  .col-md-offset-11 {\n    margin-left: 91.66666667%;\n  }\n  .col-md-offset-10 {\n    margin-left: 83.33333333%;\n  }\n  .col-md-offset-9 {\n    margin-left: 75%;\n  }\n  .col-md-offset-8 {\n    margin-left: 66.66666667%;\n  }\n  .col-md-offset-7 {\n    margin-left: 58.33333333%;\n  }\n  .col-md-offset-6 {\n    margin-left: 50%;\n  }\n  .col-md-offset-5 {\n    margin-left: 41.66666667%;\n  }\n  .col-md-offset-4 {\n    margin-left: 33.33333333%;\n  }\n  .col-md-offset-3 {\n    margin-left: 25%;\n  }\n  .col-md-offset-2 {\n    margin-left: 16.66666667%;\n  }\n  .col-md-offset-1 {\n    margin-left: 8.33333333%;\n  }\n  .col-md-offset-0 {\n    margin-left: 0%;\n  }\n}\n@media (min-width: 1200px) {\n  .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12 {\n    float: left;\n  }\n  .col-lg-12 {\n    width: 100%;\n  }\n  .col-lg-11 {\n    width: 91.66666667%;\n  }\n  .col-lg-10 {\n    width: 83.33333333%;\n  }\n  .col-lg-9 {\n    width: 75%;\n  }\n  .col-lg-8 {\n    width: 66.66666667%;\n  }\n  .col-lg-7 {\n    width: 58.33333333%;\n  }\n  .col-lg-6 {\n    width: 50%;\n  }\n  .col-lg-5 {\n    width: 41.66666667%;\n  }\n  .col-lg-4 {\n    width: 33.33333333%;\n  }\n  .col-lg-3 {\n    width: 25%;\n  }\n  .col-lg-2 {\n    width: 16.66666667%;\n  }\n  .col-lg-1 {\n    width: 8.33333333%;\n  }\n  .col-lg-pull-12 {\n    right: 100%;\n  }\n  .col-lg-pull-11 {\n    right: 91.66666667%;\n  }\n  .col-lg-pull-10 {\n    right: 83.33333333%;\n  }\n  .col-lg-pull-9 {\n    right: 75%;\n  }\n  .col-lg-pull-8 {\n    right: 66.66666667%;\n  }\n  .col-lg-pull-7 {\n    right: 58.33333333%;\n  }\n  .col-lg-pull-6 {\n    right: 50%;\n  }\n  .col-lg-pull-5 {\n    right: 41.66666667%;\n  }\n  .col-lg-pull-4 {\n    right: 33.33333333%;\n  }\n  .col-lg-pull-3 {\n    right: 25%;\n  }\n  .col-lg-pull-2 {\n    right: 16.66666667%;\n  }\n  .col-lg-pull-1 {\n    right: 8.33333333%;\n  }\n  .col-lg-pull-0 {\n    right: auto;\n  }\n  .col-lg-push-12 {\n    left: 100%;\n  }\n  .col-lg-push-11 {\n    left: 91.66666667%;\n  }\n  .col-lg-push-10 {\n    left: 83.33333333%;\n  }\n  .col-lg-push-9 {\n    left: 75%;\n  }\n  .col-lg-push-8 {\n    left: 66.66666667%;\n  }\n  .col-lg-push-7 {\n    left: 58.33333333%;\n  }\n  .col-lg-push-6 {\n    left: 50%;\n  }\n  .col-lg-push-5 {\n    left: 41.66666667%;\n  }\n  .col-lg-push-4 {\n    left: 33.33333333%;\n  }\n  .col-lg-push-3 {\n    left: 25%;\n  }\n  .col-lg-push-2 {\n    left: 16.66666667%;\n  }\n  .col-lg-push-1 {\n    left: 8.33333333%;\n  }\n  .col-lg-push-0 {\n    left: auto;\n  }\n  .col-lg-offset-12 {\n    margin-left: 100%;\n  }\n  .col-lg-offset-11 {\n    margin-left: 91.66666667%;\n  }\n  .col-lg-offset-10 {\n    margin-left: 83.33333333%;\n  }\n  .col-lg-offset-9 {\n    margin-left: 75%;\n  }\n  .col-lg-offset-8 {\n    margin-left: 66.66666667%;\n  }\n  .col-lg-offset-7 {\n    margin-left: 58.33333333%;\n  }\n  .col-lg-offset-6 {\n    margin-left: 50%;\n  }\n  .col-lg-offset-5 {\n    margin-left: 41.66666667%;\n  }\n  .col-lg-offset-4 {\n    margin-left: 33.33333333%;\n  }\n  .col-lg-offset-3 {\n    margin-left: 25%;\n  }\n  .col-lg-offset-2 {\n    margin-left: 16.66666667%;\n  }\n  .col-lg-offset-1 {\n    margin-left: 8.33333333%;\n  }\n  .col-lg-offset-0 {\n    margin-left: 0%;\n  }\n}\ntable {\n  background-color: transparent;\n}\ncaption {\n  padding-top: 8px;\n  padding-bottom: 8px;\n  color: #999999;\n  text-align: left;\n}\nth {\n  text-align: left;\n}\n.table {\n  width: 100%;\n  max-width: 100%;\n  margin-bottom: 20px;\n}\n.table > thead > tr > th,\n.table > tbody > tr > th,\n.table > tfoot > tr > th,\n.table > thead > tr > td,\n.table > tbody > tr > td,\n.table > tfoot > tr > td {\n  padding: 8px;\n  line-height: 1.42857143;\n  vertical-align: top;\n  border-top: 1px solid #eeeeee;\n}\n.table > thead > tr > th {\n  vertical-align: bottom;\n  border-bottom: 2px solid #eeeeee;\n}\n.table > caption + thead > tr:first-child > th,\n.table > colgroup + thead > tr:first-child > th,\n.table > thead:first-child > tr:first-child > th,\n.table > caption + thead > tr:first-child > td,\n.table > colgroup + thead > tr:first-child > td,\n.table > thead:first-child > tr:first-child > td {\n  border-top: 0;\n}\n.table > tbody + tbody {\n  border-top: 2px solid #eeeeee;\n}\n.table .table {\n  background-color: #fff;\n}\n.table-condensed > thead > tr > th,\n.table-condensed > tbody > tr > th,\n.table-condensed > tfoot > tr > th,\n.table-condensed > thead > tr > td,\n.table-condensed > tbody > tr > td,\n.table-condensed > tfoot > tr > td {\n  padding: 5px;\n}\n.table-bordered {\n  border: 1px solid #eeeeee;\n}\n.table-bordered > thead > tr > th,\n.table-bordered > tbody > tr > th,\n.table-bordered > tfoot > tr > th,\n.table-bordered > thead > tr > td,\n.table-bordered > tbody > tr > td,\n.table-bordered > tfoot > tr > td {\n  border: 1px solid #eeeeee;\n}\n.table-bordered > thead > tr > th,\n.table-bordered > thead > tr > td {\n  border-bottom-width: 2px;\n}\n.table-striped > tbody > tr:nth-of-type(odd) {\n  background-color: #f9f9f9;\n}\n.table-hover > tbody > tr:hover {\n  background-color: #f5f5f5;\n}\ntable col[class*=\"col-\"] {\n  position: static;\n  float: none;\n  display: table-column;\n}\ntable td[class*=\"col-\"],\ntable th[class*=\"col-\"] {\n  position: static;\n  float: none;\n  display: table-cell;\n}\n.table > thead > tr > td.active,\n.table > tbody > tr > td.active,\n.table > tfoot > tr > td.active,\n.table > thead > tr > th.active,\n.table > tbody > tr > th.active,\n.table > tfoot > tr > th.active,\n.table > thead > tr.active > td,\n.table > tbody > tr.active > td,\n.table > tfoot > tr.active > td,\n.table > thead > tr.active > th,\n.table > tbody > tr.active > th,\n.table > tfoot > tr.active > th {\n  background-color: #f5f5f5;\n}\n.table-hover > tbody > tr > td.active:hover,\n.table-hover > tbody > tr > th.active:hover,\n.table-hover > tbody > tr.active:hover > td,\n.table-hover > tbody > tr:hover > .active,\n.table-hover > tbody > tr.active:hover > th {\n  background-color: #e8e8e8;\n}\n.table > thead > tr > td.success,\n.table > tbody > tr > td.success,\n.table > tfoot > tr > td.success,\n.table > thead > tr > th.success,\n.table > tbody > tr > th.success,\n.table > tfoot > tr > th.success,\n.table > thead > tr.success > td,\n.table > tbody > tr.success > td,\n.table > tfoot > tr.success > td,\n.table > thead > tr.success > th,\n.table > tbody > tr.success > th,\n.table > tfoot > tr.success > th {\n  background-color: #28B62C;\n}\n.table-hover > tbody > tr > td.success:hover,\n.table-hover > tbody > tr > th.success:hover,\n.table-hover > tbody > tr.success:hover > td,\n.table-hover > tbody > tr:hover > .success,\n.table-hover > tbody > tr.success:hover > th {\n  background-color: #23a127;\n}\n.table > thead > tr > td.info,\n.table > tbody > tr > td.info,\n.table > tfoot > tr > td.info,\n.table > thead > tr > th.info,\n.table > tbody > tr > th.info,\n.table > tfoot > tr > th.info,\n.table > thead > tr.info > td,\n.table > tbody > tr.info > td,\n.table > tfoot > tr.info > td,\n.table > thead > tr.info > th,\n.table > tbody > tr.info > th,\n.table > tfoot > tr.info > th {\n  background-color: #75CAEB;\n}\n.table-hover > tbody > tr > td.info:hover,\n.table-hover > tbody > tr > th.info:hover,\n.table-hover > tbody > tr.info:hover > td,\n.table-hover > tbody > tr:hover > .info,\n.table-hover > tbody > tr.info:hover > th {\n  background-color: #5fc1e8;\n}\n.table > thead > tr > td.warning,\n.table > tbody > tr > td.warning,\n.table > tfoot > tr > td.warning,\n.table > thead > tr > th.warning,\n.table > tbody > tr > th.warning,\n.table > tfoot > tr > th.warning,\n.table > thead > tr.warning > td,\n.table > tbody > tr.warning > td,\n.table > tfoot > tr.warning > td,\n.table > thead > tr.warning > th,\n.table > tbody > tr.warning > th,\n.table > tfoot > tr.warning > th {\n  background-color: #FF851B;\n}\n.table-hover > tbody > tr > td.warning:hover,\n.table-hover > tbody > tr > th.warning:hover,\n.table-hover > tbody > tr.warning:hover > td,\n.table-hover > tbody > tr:hover > .warning,\n.table-hover > tbody > tr.warning:hover > th {\n  background-color: #ff7701;\n}\n.table > thead > tr > td.danger,\n.table > tbody > tr > td.danger,\n.table > tfoot > tr > td.danger,\n.table > thead > tr > th.danger,\n.table > tbody > tr > th.danger,\n.table > tfoot > tr > th.danger,\n.table > thead > tr.danger > td,\n.table > tbody > tr.danger > td,\n.table > tfoot > tr.danger > td,\n.table > thead > tr.danger > th,\n.table > tbody > tr.danger > th,\n.table > tfoot > tr.danger > th {\n  background-color: #FF4136;\n}\n.table-hover > tbody > tr > td.danger:hover,\n.table-hover > tbody > tr > th.danger:hover,\n.table-hover > tbody > tr.danger:hover > td,\n.table-hover > tbody > tr:hover > .danger,\n.table-hover > tbody > tr.danger:hover > th {\n  background-color: #ff291c;\n}\n.table-responsive {\n  overflow-x: auto;\n  min-height: 0.01%;\n}\n@media screen and (max-width: 767px) {\n  .table-responsive {\n    width: 100%;\n    margin-bottom: 15px;\n    overflow-y: hidden;\n    -ms-overflow-style: -ms-autohiding-scrollbar;\n    border: 1px solid #eeeeee;\n  }\n  .table-responsive > .table {\n    margin-bottom: 0;\n  }\n  .table-responsive > .table > thead > tr > th,\n  .table-responsive > .table > tbody > tr > th,\n  .table-responsive > .table > tfoot > tr > th,\n  .table-responsive > .table > thead > tr > td,\n  .table-responsive > .table > tbody > tr > td,\n  .table-responsive > .table > tfoot > tr > td {\n    white-space: nowrap;\n  }\n  .table-responsive > .table-bordered {\n    border: 0;\n  }\n  .table-responsive > .table-bordered > thead > tr > th:first-child,\n  .table-responsive > .table-bordered > tbody > tr > th:first-child,\n  .table-responsive > .table-bordered > tfoot > tr > th:first-child,\n  .table-responsive > .table-bordered > thead > tr > td:first-child,\n  .table-responsive > .table-bordered > tbody > tr > td:first-child,\n  .table-responsive > .table-bordered > tfoot > tr > td:first-child {\n    border-left: 0;\n  }\n  .table-responsive > .table-bordered > thead > tr > th:last-child,\n  .table-responsive > .table-bordered > tbody > tr > th:last-child,\n  .table-responsive > .table-bordered > tfoot > tr > th:last-child,\n  .table-responsive > .table-bordered > thead > tr > td:last-child,\n  .table-responsive > .table-bordered > tbody > tr > td:last-child,\n  .table-responsive > .table-bordered > tfoot > tr > td:last-child {\n    border-right: 0;\n  }\n  .table-responsive > .table-bordered > tbody > tr:last-child > th,\n  .table-responsive > .table-bordered > tfoot > tr:last-child > th,\n  .table-responsive > .table-bordered > tbody > tr:last-child > td,\n  .table-responsive > .table-bordered > tfoot > tr:last-child > td {\n    border-bottom: 0;\n  }\n}\nfieldset {\n  padding: 0;\n  margin: 0;\n  border: 0;\n  min-width: 0;\n}\nlegend {\n  display: block;\n  width: 100%;\n  padding: 0;\n  margin-bottom: 20px;\n  font-size: 21px;\n  line-height: inherit;\n  color: #333333;\n  border: 0;\n  border-bottom: 1px solid #e5e5e5;\n}\nlabel {\n  display: inline-block;\n  max-width: 100%;\n  margin-bottom: 5px;\n  font-weight: bold;\n}\ninput[type=\"search\"] {\n  -webkit-box-sizing: border-box;\n  -moz-box-sizing: border-box;\n  box-sizing: border-box;\n}\ninput[type=\"radio\"],\ninput[type=\"checkbox\"] {\n  margin: 4px 0 0;\n  margin-top: 1px \\9;\n  line-height: normal;\n}\ninput[type=\"file\"] {\n  display: block;\n}\ninput[type=\"range\"] {\n  display: block;\n  width: 100%;\n}\nselect[multiple],\nselect[size] {\n  height: auto;\n}\ninput[type=\"file\"]:focus,\ninput[type=\"radio\"]:focus,\ninput[type=\"checkbox\"]:focus {\n  outline: thin dotted;\n  outline: 5px auto -webkit-focus-ring-color;\n  outline-offset: -2px;\n}\noutput {\n  display: block;\n  padding-top: 8px;\n  font-size: 14px;\n  line-height: 1.42857143;\n  color: #555555;\n}\n.form-control {\n  display: block;\n  width: 100%;\n  height: 38px;\n  padding: 7px 12px;\n  font-size: 14px;\n  line-height: 1.42857143;\n  color: #555555;\n  background-color: #fff;\n  background-image: none;\n  border: 1px solid #e7e7e7;\n  border-radius: 4px;\n  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);\n  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);\n  -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;\n  -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;\n  transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;\n}\n.form-control:focus {\n  border-color: #66afe9;\n  outline: 0;\n  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);\n  box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);\n}\n.form-control::-moz-placeholder {\n  color: #999999;\n  opacity: 1;\n}\n.form-control:-ms-input-placeholder {\n  color: #999999;\n}\n.form-control::-webkit-input-placeholder {\n  color: #999999;\n}\n.form-control::-ms-expand {\n  border: 0;\n  background-color: transparent;\n}\n.form-control[disabled],\n.form-control[readonly],\nfieldset[disabled] .form-control {\n  background-color: #eeeeee;\n  opacity: 1;\n}\n.form-control[disabled],\nfieldset[disabled] .form-control {\n  cursor: not-allowed;\n}\ntextarea.form-control {\n  height: auto;\n}\ninput[type=\"search\"] {\n  -webkit-appearance: none;\n}\n@media screen and (-webkit-min-device-pixel-ratio: 0) {\n  input[type=\"date\"].form-control,\n  input[type=\"time\"].form-control,\n  input[type=\"datetime-local\"].form-control,\n  input[type=\"month\"].form-control {\n    line-height: 38px;\n  }\n  input[type=\"date\"].input-sm,\n  input[type=\"time\"].input-sm,\n  input[type=\"datetime-local\"].input-sm,\n  input[type=\"month\"].input-sm,\n  .input-group-sm input[type=\"date\"],\n  .input-group-sm input[type=\"time\"],\n  .input-group-sm input[type=\"datetime-local\"],\n  .input-group-sm input[type=\"month\"] {\n    line-height: 28px;\n  }\n  input[type=\"date\"].input-lg,\n  input[type=\"time\"].input-lg,\n  input[type=\"datetime-local\"].input-lg,\n  input[type=\"month\"].input-lg,\n  .input-group-lg input[type=\"date\"],\n  .input-group-lg input[type=\"time\"],\n  .input-group-lg input[type=\"datetime-local\"],\n  .input-group-lg input[type=\"month\"] {\n    line-height: 52px;\n  }\n}\n.form-group {\n  margin-bottom: 15px;\n}\n.radio,\n.checkbox {\n  position: relative;\n  display: block;\n  margin-top: 10px;\n  margin-bottom: 10px;\n}\n.radio label,\n.checkbox label {\n  min-height: 20px;\n  padding-left: 20px;\n  margin-bottom: 0;\n  font-weight: normal;\n  cursor: pointer;\n}\n.radio input[type=\"radio\"],\n.radio-inline input[type=\"radio\"],\n.checkbox input[type=\"checkbox\"],\n.checkbox-inline input[type=\"checkbox\"] {\n  position: absolute;\n  margin-left: -20px;\n  margin-top: 4px \\9;\n}\n.radio + .radio,\n.checkbox + .checkbox {\n  margin-top: -5px;\n}\n.radio-inline,\n.checkbox-inline {\n  position: relative;\n  display: inline-block;\n  padding-left: 20px;\n  margin-bottom: 0;\n  vertical-align: middle;\n  font-weight: normal;\n  cursor: pointer;\n}\n.radio-inline + .radio-inline,\n.checkbox-inline + .checkbox-inline {\n  margin-top: 0;\n  margin-left: 10px;\n}\ninput[type=\"radio\"][disabled],\ninput[type=\"checkbox\"][disabled],\ninput[type=\"radio\"].disabled,\ninput[type=\"checkbox\"].disabled,\nfieldset[disabled] input[type=\"radio\"],\nfieldset[disabled] input[type=\"checkbox\"] {\n  cursor: not-allowed;\n}\n.radio-inline.disabled,\n.checkbox-inline.disabled,\nfieldset[disabled] .radio-inline,\nfieldset[disabled] .checkbox-inline {\n  cursor: not-allowed;\n}\n.radio.disabled label,\n.checkbox.disabled label,\nfieldset[disabled] .radio label,\nfieldset[disabled] .checkbox label {\n  cursor: not-allowed;\n}\n.form-control-static {\n  padding-top: 8px;\n  padding-bottom: 8px;\n  margin-bottom: 0;\n  min-height: 34px;\n}\n.form-control-static.input-lg,\n.form-control-static.input-sm {\n  padding-left: 0;\n  padding-right: 0;\n}\n.input-sm {\n  height: 28px;\n  padding: 4px 10px;\n  font-size: 12px;\n  line-height: 1.5;\n  border-radius: 2px;\n}\nselect.input-sm {\n  height: 28px;\n  line-height: 28px;\n}\ntextarea.input-sm,\nselect[multiple].input-sm {\n  height: auto;\n}\n.form-group-sm .form-control {\n  height: 28px;\n  padding: 4px 10px;\n  font-size: 12px;\n  line-height: 1.5;\n  border-radius: 2px;\n}\n.form-group-sm select.form-control {\n  height: 28px;\n  line-height: 28px;\n}\n.form-group-sm textarea.form-control,\n.form-group-sm select[multiple].form-control {\n  height: auto;\n}\n.form-group-sm .form-control-static {\n  height: 28px;\n  min-height: 32px;\n  padding: 5px 10px;\n  font-size: 12px;\n  line-height: 1.5;\n}\n.input-lg {\n  height: 52px;\n  padding: 13px 16px;\n  font-size: 18px;\n  line-height: 1.3333333;\n  border-radius: 5px;\n}\nselect.input-lg {\n  height: 52px;\n  line-height: 52px;\n}\ntextarea.input-lg,\nselect[multiple].input-lg {\n  height: auto;\n}\n.form-group-lg .form-control {\n  height: 52px;\n  padding: 13px 16px;\n  font-size: 18px;\n  line-height: 1.3333333;\n  border-radius: 5px;\n}\n.form-group-lg select.form-control {\n  height: 52px;\n  line-height: 52px;\n}\n.form-group-lg textarea.form-control,\n.form-group-lg select[multiple].form-control {\n  height: auto;\n}\n.form-group-lg .form-control-static {\n  height: 52px;\n  min-height: 38px;\n  padding: 14px 16px;\n  font-size: 18px;\n  line-height: 1.3333333;\n}\n.has-feedback {\n  position: relative;\n}\n.has-feedback .form-control {\n  padding-right: 47.5px;\n}\n.form-control-feedback {\n  position: absolute;\n  top: 0;\n  right: 0;\n  z-index: 2;\n  display: block;\n  width: 38px;\n  height: 38px;\n  line-height: 38px;\n  text-align: center;\n  pointer-events: none;\n}\n.input-lg + .form-control-feedback,\n.input-group-lg + .form-control-feedback,\n.form-group-lg .form-control + .form-control-feedback {\n  width: 52px;\n  height: 52px;\n  line-height: 52px;\n}\n.input-sm + .form-control-feedback,\n.input-group-sm + .form-control-feedback,\n.form-group-sm .form-control + .form-control-feedback {\n  width: 28px;\n  height: 28px;\n  line-height: 28px;\n}\n.has-success .help-block,\n.has-success .control-label,\n.has-success .radio,\n.has-success .checkbox,\n.has-success .radio-inline,\n.has-success .checkbox-inline,\n.has-success.radio label,\n.has-success.checkbox label,\n.has-success.radio-inline label,\n.has-success.checkbox-inline label {\n  color: #fff;\n}\n.has-success .form-control {\n  border-color: #fff;\n  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);\n  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);\n}\n.has-success .form-control:focus {\n  border-color: #e6e6e6;\n  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ffffff;\n  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ffffff;\n}\n.has-success .input-group-addon {\n  color: #fff;\n  border-color: #fff;\n  background-color: #28B62C;\n}\n.has-success .form-control-feedback {\n  color: #fff;\n}\n.has-warning .help-block,\n.has-warning .control-label,\n.has-warning .radio,\n.has-warning .checkbox,\n.has-warning .radio-inline,\n.has-warning .checkbox-inline,\n.has-warning.radio label,\n.has-warning.checkbox label,\n.has-warning.radio-inline label,\n.has-warning.checkbox-inline label {\n  color: #fff;\n}\n.has-warning .form-control {\n  border-color: #fff;\n  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);\n  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);\n}\n.has-warning .form-control:focus {\n  border-color: #e6e6e6;\n  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ffffff;\n  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ffffff;\n}\n.has-warning .input-group-addon {\n  color: #fff;\n  border-color: #fff;\n  background-color: #FF851B;\n}\n.has-warning .form-control-feedback {\n  color: #fff;\n}\n.has-error .help-block,\n.has-error .control-label,\n.has-error .radio,\n.has-error .checkbox,\n.has-error .radio-inline,\n.has-error .checkbox-inline,\n.has-error.radio label,\n.has-error.checkbox label,\n.has-error.radio-inline label,\n.has-error.checkbox-inline label {\n  color: #fff;\n}\n.has-error .form-control {\n  border-color: #fff;\n  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);\n  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);\n}\n.has-error .form-control:focus {\n  border-color: #e6e6e6;\n  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ffffff;\n  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ffffff;\n}\n.has-error .input-group-addon {\n  color: #fff;\n  border-color: #fff;\n  background-color: #FF4136;\n}\n.has-error .form-control-feedback {\n  color: #fff;\n}\n.has-feedback label ~ .form-control-feedback {\n  top: 25px;\n}\n.has-feedback label.sr-only ~ .form-control-feedback {\n  top: 0;\n}\n.help-block {\n  display: block;\n  margin-top: 5px;\n  margin-bottom: 10px;\n  color: #959595;\n}\n@media (min-width: 768px) {\n  .form-inline .form-group {\n    display: inline-block;\n    margin-bottom: 0;\n    vertical-align: middle;\n  }\n  .form-inline .form-control {\n    display: inline-block;\n    width: auto;\n    vertical-align: middle;\n  }\n  .form-inline .form-control-static {\n    display: inline-block;\n  }\n  .form-inline .input-group {\n    display: inline-table;\n    vertical-align: middle;\n  }\n  .form-inline .input-group .input-group-addon,\n  .form-inline .input-group .input-group-btn,\n  .form-inline .input-group .form-control {\n    width: auto;\n  }\n  .form-inline .input-group > .form-control {\n    width: 100%;\n  }\n  .form-inline .control-label {\n    margin-bottom: 0;\n    vertical-align: middle;\n  }\n  .form-inline .radio,\n  .form-inline .checkbox {\n    display: inline-block;\n    margin-top: 0;\n    margin-bottom: 0;\n    vertical-align: middle;\n  }\n  .form-inline .radio label,\n  .form-inline .checkbox label {\n    padding-left: 0;\n  }\n  .form-inline .radio input[type=\"radio\"],\n  .form-inline .checkbox input[type=\"checkbox\"] {\n    position: relative;\n    margin-left: 0;\n  }\n  .form-inline .has-feedback .form-control-feedback {\n    top: 0;\n  }\n}\n.form-horizontal .radio,\n.form-horizontal .checkbox,\n.form-horizontal .radio-inline,\n.form-horizontal .checkbox-inline {\n  margin-top: 0;\n  margin-bottom: 0;\n  padding-top: 8px;\n}\n.form-horizontal .radio,\n.form-horizontal .checkbox {\n  min-height: 28px;\n}\n.form-horizontal .form-group {\n  margin-left: -15px;\n  margin-right: -15px;\n}\n@media (min-width: 768px) {\n  .form-horizontal .control-label {\n    text-align: right;\n    margin-bottom: 0;\n    padding-top: 8px;\n  }\n}\n.form-horizontal .has-feedback .form-control-feedback {\n  right: 15px;\n}\n@media (min-width: 768px) {\n  .form-horizontal .form-group-lg .control-label {\n    padding-top: 14px;\n    font-size: 18px;\n  }\n}\n@media (min-width: 768px) {\n  .form-horizontal .form-group-sm .control-label {\n    padding-top: 5px;\n    font-size: 12px;\n  }\n}\n.btn {\n  display: inline-block;\n  margin-bottom: 0;\n  font-weight: normal;\n  text-align: center;\n  vertical-align: middle;\n  touch-action: manipulation;\n  cursor: pointer;\n  background-image: none;\n  border: 1px solid transparent;\n  white-space: nowrap;\n  padding: 7px 12px;\n  font-size: 14px;\n  line-height: 1.42857143;\n  border-radius: 4px;\n  -webkit-user-select: none;\n  -moz-user-select: none;\n  -ms-user-select: none;\n  user-select: none;\n}\n.btn:focus,\n.btn:active:focus,\n.btn.active:focus,\n.btn.focus,\n.btn:active.focus,\n.btn.active.focus {\n  outline: thin dotted;\n  outline: 5px auto -webkit-focus-ring-color;\n  outline-offset: -2px;\n}\n.btn:hover,\n.btn:focus,\n.btn.focus {\n  color: #555555;\n  text-decoration: none;\n}\n.btn:active,\n.btn.active {\n  outline: 0;\n  background-image: none;\n  -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);\n  box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);\n}\n.btn.disabled,\n.btn[disabled],\nfieldset[disabled] .btn {\n  cursor: not-allowed;\n  opacity: 0.65;\n  filter: alpha(opacity=65);\n  -webkit-box-shadow: none;\n  box-shadow: none;\n}\na.btn.disabled,\nfieldset[disabled] a.btn {\n  pointer-events: none;\n}\n.btn-default {\n  color: #555555;\n  background-color: #eeeeee;\n  border-color: #e2e2e2;\n}\n.btn-default:focus,\n.btn-default.focus {\n  color: #555555;\n  background-color: #d5d5d5;\n  border-color: #a2a2a2;\n}\n.btn-default:hover {\n  color: #555555;\n  background-color: #d5d5d5;\n  border-color: #c3c3c3;\n}\n.btn-default:active,\n.btn-default.active,\n.open > .dropdown-toggle.btn-default {\n  color: #555555;\n  background-color: #d5d5d5;\n  border-color: #c3c3c3;\n}\n.btn-default:active:hover,\n.btn-default.active:hover,\n.open > .dropdown-toggle.btn-default:hover,\n.btn-default:active:focus,\n.btn-default.active:focus,\n.open > .dropdown-toggle.btn-default:focus,\n.btn-default:active.focus,\n.btn-default.active.focus,\n.open > .dropdown-toggle.btn-default.focus {\n  color: #555555;\n  background-color: #c3c3c3;\n  border-color: #a2a2a2;\n}\n.btn-default:active,\n.btn-default.active,\n.open > .dropdown-toggle.btn-default {\n  background-image: none;\n}\n.btn-default.disabled:hover,\n.btn-default[disabled]:hover,\nfieldset[disabled] .btn-default:hover,\n.btn-default.disabled:focus,\n.btn-default[disabled]:focus,\nfieldset[disabled] .btn-default:focus,\n.btn-default.disabled.focus,\n.btn-default[disabled].focus,\nfieldset[disabled] .btn-default.focus {\n  background-color: #eeeeee;\n  border-color: #e2e2e2;\n}\n.btn-default .badge {\n  color: #eeeeee;\n  background-color: #555555;\n}\n.btn-primary {\n  color: #fff;\n  background-color: #158CBA;\n  border-color: #127ba3;\n}\n.btn-primary:focus,\n.btn-primary.focus {\n  color: #fff;\n  background-color: #106a8c;\n  border-color: #052531;\n}\n.btn-primary:hover {\n  color: #fff;\n  background-color: #106a8c;\n  border-color: #0c516c;\n}\n.btn-primary:active,\n.btn-primary.active,\n.open > .dropdown-toggle.btn-primary {\n  color: #fff;\n  background-color: #106a8c;\n  border-color: #0c516c;\n}\n.btn-primary:active:hover,\n.btn-primary.active:hover,\n.open > .dropdown-toggle.btn-primary:hover,\n.btn-primary:active:focus,\n.btn-primary.active:focus,\n.open > .dropdown-toggle.btn-primary:focus,\n.btn-primary:active.focus,\n.btn-primary.active.focus,\n.open > .dropdown-toggle.btn-primary.focus {\n  color: #fff;\n  background-color: #0c516c;\n  border-color: #052531;\n}\n.btn-primary:active,\n.btn-primary.active,\n.open > .dropdown-toggle.btn-primary {\n  background-image: none;\n}\n.btn-primary.disabled:hover,\n.btn-primary[disabled]:hover,\nfieldset[disabled] .btn-primary:hover,\n.btn-primary.disabled:focus,\n.btn-primary[disabled]:focus,\nfieldset[disabled] .btn-primary:focus,\n.btn-primary.disabled.focus,\n.btn-primary[disabled].focus,\nfieldset[disabled] .btn-primary.focus {\n  background-color: #158CBA;\n  border-color: #127ba3;\n}\n.btn-primary .badge {\n  color: #158CBA;\n  background-color: #fff;\n}\n.btn-success {\n  color: #fff;\n  background-color: #28B62C;\n  border-color: #23a127;\n}\n.btn-success:focus,\n.btn-success.focus {\n  color: #fff;\n  background-color: #1f8c22;\n  border-color: #0c390e;\n}\n.btn-success:hover {\n  color: #fff;\n  background-color: #1f8c22;\n  border-color: #186f1b;\n}\n.btn-success:active,\n.btn-success.active,\n.open > .dropdown-toggle.btn-success {\n  color: #fff;\n  background-color: #1f8c22;\n  border-color: #186f1b;\n}\n.btn-success:active:hover,\n.btn-success.active:hover,\n.open > .dropdown-toggle.btn-success:hover,\n.btn-success:active:focus,\n.btn-success.active:focus,\n.open > .dropdown-toggle.btn-success:focus,\n.btn-success:active.focus,\n.btn-success.active.focus,\n.open > .dropdown-toggle.btn-success.focus {\n  color: #fff;\n  background-color: #186f1b;\n  border-color: #0c390e;\n}\n.btn-success:active,\n.btn-success.active,\n.open > .dropdown-toggle.btn-success {\n  background-image: none;\n}\n.btn-success.disabled:hover,\n.btn-success[disabled]:hover,\nfieldset[disabled] .btn-success:hover,\n.btn-success.disabled:focus,\n.btn-success[disabled]:focus,\nfieldset[disabled] .btn-success:focus,\n.btn-success.disabled.focus,\n.btn-success[disabled].focus,\nfieldset[disabled] .btn-success.focus {\n  background-color: #28B62C;\n  border-color: #23a127;\n}\n.btn-success .badge {\n  color: #28B62C;\n  background-color: #fff;\n}\n.btn-info {\n  color: #fff;\n  background-color: #75CAEB;\n  border-color: #5fc1e8;\n}\n.btn-info:focus,\n.btn-info.focus {\n  color: #fff;\n  background-color: #48b9e5;\n  border-color: #1984ae;\n}\n.btn-info:hover {\n  color: #fff;\n  background-color: #48b9e5;\n  border-color: #29ade0;\n}\n.btn-info:active,\n.btn-info.active,\n.open > .dropdown-toggle.btn-info {\n  color: #fff;\n  background-color: #48b9e5;\n  border-color: #29ade0;\n}\n.btn-info:active:hover,\n.btn-info.active:hover,\n.open > .dropdown-toggle.btn-info:hover,\n.btn-info:active:focus,\n.btn-info.active:focus,\n.open > .dropdown-toggle.btn-info:focus,\n.btn-info:active.focus,\n.btn-info.active.focus,\n.open > .dropdown-toggle.btn-info.focus {\n  color: #fff;\n  background-color: #29ade0;\n  border-color: #1984ae;\n}\n.btn-info:active,\n.btn-info.active,\n.open > .dropdown-toggle.btn-info {\n  background-image: none;\n}\n.btn-info.disabled:hover,\n.btn-info[disabled]:hover,\nfieldset[disabled] .btn-info:hover,\n.btn-info.disabled:focus,\n.btn-info[disabled]:focus,\nfieldset[disabled] .btn-info:focus,\n.btn-info.disabled.focus,\n.btn-info[disabled].focus,\nfieldset[disabled] .btn-info.focus {\n  background-color: #75CAEB;\n  border-color: #5fc1e8;\n}\n.btn-info .badge {\n  color: #75CAEB;\n  background-color: #fff;\n}\n.btn-warning {\n  color: #fff;\n  background-color: #FF851B;\n  border-color: #ff7701;\n}\n.btn-warning:focus,\n.btn-warning.focus {\n  color: #fff;\n  background-color: #e76b00;\n  border-color: #813c00;\n}\n.btn-warning:hover {\n  color: #fff;\n  background-color: #e76b00;\n  border-color: #c35b00;\n}\n.btn-warning:active,\n.btn-warning.active,\n.open > .dropdown-toggle.btn-warning {\n  color: #fff;\n  background-color: #e76b00;\n  border-color: #c35b00;\n}\n.btn-warning:active:hover,\n.btn-warning.active:hover,\n.open > .dropdown-toggle.btn-warning:hover,\n.btn-warning:active:focus,\n.btn-warning.active:focus,\n.open > .dropdown-toggle.btn-warning:focus,\n.btn-warning:active.focus,\n.btn-warning.active.focus,\n.open > .dropdown-toggle.btn-warning.focus {\n  color: #fff;\n  background-color: #c35b00;\n  border-color: #813c00;\n}\n.btn-warning:active,\n.btn-warning.active,\n.open > .dropdown-toggle.btn-warning {\n  background-image: none;\n}\n.btn-warning.disabled:hover,\n.btn-warning[disabled]:hover,\nfieldset[disabled] .btn-warning:hover,\n.btn-warning.disabled:focus,\n.btn-warning[disabled]:focus,\nfieldset[disabled] .btn-warning:focus,\n.btn-warning.disabled.focus,\n.btn-warning[disabled].focus,\nfieldset[disabled] .btn-warning.focus {\n  background-color: #FF851B;\n  border-color: #ff7701;\n}\n.btn-warning .badge {\n  color: #FF851B;\n  background-color: #fff;\n}\n.btn-danger {\n  color: #fff;\n  background-color: #FF4136;\n  border-color: #ff291c;\n}\n.btn-danger:focus,\n.btn-danger.focus {\n  color: #fff;\n  background-color: #ff1103;\n  border-color: #9c0900;\n}\n.btn-danger:hover {\n  color: #fff;\n  background-color: #ff1103;\n  border-color: #de0c00;\n}\n.btn-danger:active,\n.btn-danger.active,\n.open > .dropdown-toggle.btn-danger {\n  color: #fff;\n  background-color: #ff1103;\n  border-color: #de0c00;\n}\n.btn-danger:active:hover,\n.btn-danger.active:hover,\n.open > .dropdown-toggle.btn-danger:hover,\n.btn-danger:active:focus,\n.btn-danger.active:focus,\n.open > .dropdown-toggle.btn-danger:focus,\n.btn-danger:active.focus,\n.btn-danger.active.focus,\n.open > .dropdown-toggle.btn-danger.focus {\n  color: #fff;\n  background-color: #de0c00;\n  border-color: #9c0900;\n}\n.btn-danger:active,\n.btn-danger.active,\n.open > .dropdown-toggle.btn-danger {\n  background-image: none;\n}\n.btn-danger.disabled:hover,\n.btn-danger[disabled]:hover,\nfieldset[disabled] .btn-danger:hover,\n.btn-danger.disabled:focus,\n.btn-danger[disabled]:focus,\nfieldset[disabled] .btn-danger:focus,\n.btn-danger.disabled.focus,\n.btn-danger[disabled].focus,\nfieldset[disabled] .btn-danger.focus {\n  background-color: #FF4136;\n  border-color: #ff291c;\n}\n.btn-danger .badge {\n  color: #FF4136;\n  background-color: #fff;\n}\n.btn-link {\n  color: #158CBA;\n  font-weight: normal;\n  border-radius: 0;\n}\n.btn-link,\n.btn-link:active,\n.btn-link.active,\n.btn-link[disabled],\nfieldset[disabled] .btn-link {\n  background-color: transparent;\n  -webkit-box-shadow: none;\n  box-shadow: none;\n}\n.btn-link,\n.btn-link:hover,\n.btn-link:focus,\n.btn-link:active {\n  border-color: transparent;\n}\n.btn-link:hover,\n.btn-link:focus {\n  color: #158CBA;\n  text-decoration: underline;\n  background-color: transparent;\n}\n.btn-link[disabled]:hover,\nfieldset[disabled] .btn-link:hover,\n.btn-link[disabled]:focus,\nfieldset[disabled] .btn-link:focus {\n  color: #999999;\n  text-decoration: none;\n}\n.btn-lg,\n.btn-group-lg > .btn {\n  padding: 13px 16px;\n  font-size: 18px;\n  line-height: 1.3333333;\n  border-radius: 5px;\n}\n.btn-sm,\n.btn-group-sm > .btn {\n  padding: 4px 10px;\n  font-size: 12px;\n  line-height: 1.5;\n  border-radius: 2px;\n}\n.btn-xs,\n.btn-group-xs > .btn {\n  padding: 1px 5px;\n  font-size: 12px;\n  line-height: 1.5;\n  border-radius: 2px;\n}\n.btn-block {\n  display: block;\n  width: 100%;\n}\n.btn-block + .btn-block {\n  margin-top: 5px;\n}\ninput[type=\"submit\"].btn-block,\ninput[type=\"reset\"].btn-block,\ninput[type=\"button\"].btn-block {\n  width: 100%;\n}\n.fade {\n  opacity: 0;\n  -webkit-transition: opacity 0.15s linear;\n  -o-transition: opacity 0.15s linear;\n  transition: opacity 0.15s linear;\n}\n.fade.in {\n  opacity: 1;\n}\n.collapse {\n  display: none;\n}\n.collapse.in {\n  display: block;\n}\ntr.collapse.in {\n  display: table-row;\n}\ntbody.collapse.in {\n  display: table-row-group;\n}\n.collapsing {\n  position: relative;\n  height: 0;\n  overflow: hidden;\n  -webkit-transition-property: height, visibility;\n  transition-property: height, visibility;\n  -webkit-transition-duration: 0.35s;\n  transition-duration: 0.35s;\n  -webkit-transition-timing-function: ease;\n  transition-timing-function: ease;\n}\n.caret {\n  display: inline-block;\n  width: 0;\n  height: 0;\n  margin-left: 2px;\n  vertical-align: middle;\n  border-top: 4px dashed;\n  border-top: 4px solid \\9;\n  border-right: 4px solid transparent;\n  border-left: 4px solid transparent;\n}\n.dropup,\n.dropdown {\n  position: relative;\n}\n.dropdown-toggle:focus {\n  outline: 0;\n}\n.dropdown-menu {\n  position: absolute;\n  top: 100%;\n  left: 0;\n  z-index: 1000;\n  display: none;\n  float: left;\n  min-width: 160px;\n  padding: 5px 0;\n  margin: 2px 0 0;\n  list-style: none;\n  font-size: 14px;\n  text-align: left;\n  background-color: #fff;\n  border: 1px solid #ccc;\n  border: 1px solid #e7e7e7;\n  border-radius: 4px;\n  -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);\n  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);\n  background-clip: padding-box;\n}\n.dropdown-menu.pull-right {\n  right: 0;\n  left: auto;\n}\n.dropdown-menu .divider {\n  height: 1px;\n  margin: 9px 0;\n  overflow: hidden;\n  background-color: #eeeeee;\n}\n.dropdown-menu > li > a {\n  display: block;\n  padding: 3px 20px;\n  clear: both;\n  font-weight: normal;\n  line-height: 1.42857143;\n  color: #999999;\n  white-space: nowrap;\n}\n.dropdown-menu > li > a:hover,\n.dropdown-menu > li > a:focus {\n  text-decoration: none;\n  color: #333333;\n  background-color: transparent;\n}\n.dropdown-menu > .active > a,\n.dropdown-menu > .active > a:hover,\n.dropdown-menu > .active > a:focus {\n  color: #fff;\n  text-decoration: none;\n  outline: 0;\n  background-color: #158CBA;\n}\n.dropdown-menu > .disabled > a,\n.dropdown-menu > .disabled > a:hover,\n.dropdown-menu > .disabled > a:focus {\n  color: #eeeeee;\n}\n.dropdown-menu > .disabled > a:hover,\n.dropdown-menu > .disabled > a:focus {\n  text-decoration: none;\n  background-color: transparent;\n  background-image: none;\n  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);\n  cursor: not-allowed;\n}\n.open > .dropdown-menu {\n  display: block;\n}\n.open > a {\n  outline: 0;\n}\n.dropdown-menu-right {\n  left: auto;\n  right: 0;\n}\n.dropdown-menu-left {\n  left: 0;\n  right: auto;\n}\n.dropdown-header {\n  display: block;\n  padding: 3px 20px;\n  font-size: 12px;\n  line-height: 1.42857143;\n  color: #999999;\n  white-space: nowrap;\n}\n.dropdown-backdrop {\n  position: fixed;\n  left: 0;\n  right: 0;\n  bottom: 0;\n  top: 0;\n  z-index: 990;\n}\n.pull-right > .dropdown-menu {\n  right: 0;\n  left: auto;\n}\n.dropup .caret,\n.navbar-fixed-bottom .dropdown .caret {\n  border-top: 0;\n  border-bottom: 4px dashed;\n  border-bottom: 4px solid \\9;\n  content: \"\";\n}\n.dropup .dropdown-menu,\n.navbar-fixed-bottom .dropdown .dropdown-menu {\n  top: auto;\n  bottom: 100%;\n  margin-bottom: 2px;\n}\n@media (min-width: 768px) {\n  .navbar-right .dropdown-menu {\n    left: auto;\n    right: 0;\n  }\n  .navbar-right .dropdown-menu-left {\n    left: 0;\n    right: auto;\n  }\n}\n.btn-group,\n.btn-group-vertical {\n  position: relative;\n  display: inline-block;\n  vertical-align: middle;\n}\n.btn-group > .btn,\n.btn-group-vertical > .btn {\n  position: relative;\n  float: left;\n}\n.btn-group > .btn:hover,\n.btn-group-vertical > .btn:hover,\n.btn-group > .btn:focus,\n.btn-group-vertical > .btn:focus,\n.btn-group > .btn:active,\n.btn-group-vertical > .btn:active,\n.btn-group > .btn.active,\n.btn-group-vertical > .btn.active {\n  z-index: 2;\n}\n.btn-group .btn + .btn,\n.btn-group .btn + .btn-group,\n.btn-group .btn-group + .btn,\n.btn-group .btn-group + .btn-group {\n  margin-left: -1px;\n}\n.btn-toolbar {\n  margin-left: -5px;\n}\n.btn-toolbar .btn,\n.btn-toolbar .btn-group,\n.btn-toolbar .input-group {\n  float: left;\n}\n.btn-toolbar > .btn,\n.btn-toolbar > .btn-group,\n.btn-toolbar > .input-group {\n  margin-left: 5px;\n}\n.btn-group > .btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {\n  border-radius: 0;\n}\n.btn-group > .btn:first-child {\n  margin-left: 0;\n}\n.btn-group > .btn:first-child:not(:last-child):not(.dropdown-toggle) {\n  border-bottom-right-radius: 0;\n  border-top-right-radius: 0;\n}\n.btn-group > .btn:last-child:not(:first-child),\n.btn-group > .dropdown-toggle:not(:first-child) {\n  border-bottom-left-radius: 0;\n  border-top-left-radius: 0;\n}\n.btn-group > .btn-group {\n  float: left;\n}\n.btn-group > .btn-group:not(:first-child):not(:last-child) > .btn {\n  border-radius: 0;\n}\n.btn-group > .btn-group:first-child:not(:last-child) > .btn:last-child,\n.btn-group > .btn-group:first-child:not(:last-child) > .dropdown-toggle {\n  border-bottom-right-radius: 0;\n  border-top-right-radius: 0;\n}\n.btn-group > .btn-group:last-child:not(:first-child) > .btn:first-child {\n  border-bottom-left-radius: 0;\n  border-top-left-radius: 0;\n}\n.btn-group .dropdown-toggle:active,\n.btn-group.open .dropdown-toggle {\n  outline: 0;\n}\n.btn-group > .btn + .dropdown-toggle {\n  padding-left: 8px;\n  padding-right: 8px;\n}\n.btn-group > .btn-lg + .dropdown-toggle {\n  padding-left: 12px;\n  padding-right: 12px;\n}\n.btn-group.open .dropdown-toggle {\n  -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);\n  box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);\n}\n.btn-group.open .dropdown-toggle.btn-link {\n  -webkit-box-shadow: none;\n  box-shadow: none;\n}\n.btn .caret {\n  margin-left: 0;\n}\n.btn-lg .caret {\n  border-width: 5px 5px 0;\n  border-bottom-width: 0;\n}\n.dropup .btn-lg .caret {\n  border-width: 0 5px 5px;\n}\n.btn-group-vertical > .btn,\n.btn-group-vertical > .btn-group,\n.btn-group-vertical > .btn-group > .btn {\n  display: block;\n  float: none;\n  width: 100%;\n  max-width: 100%;\n}\n.btn-group-vertical > .btn-group > .btn {\n  float: none;\n}\n.btn-group-vertical > .btn + .btn,\n.btn-group-vertical > .btn + .btn-group,\n.btn-group-vertical > .btn-group + .btn,\n.btn-group-vertical > .btn-group + .btn-group {\n  margin-top: -1px;\n  margin-left: 0;\n}\n.btn-group-vertical > .btn:not(:first-child):not(:last-child) {\n  border-radius: 0;\n}\n.btn-group-vertical > .btn:first-child:not(:last-child) {\n  border-top-right-radius: 4px;\n  border-top-left-radius: 4px;\n  border-bottom-right-radius: 0;\n  border-bottom-left-radius: 0;\n}\n.btn-group-vertical > .btn:last-child:not(:first-child) {\n  border-top-right-radius: 0;\n  border-top-left-radius: 0;\n  border-bottom-right-radius: 4px;\n  border-bottom-left-radius: 4px;\n}\n.btn-group-vertical > .btn-group:not(:first-child):not(:last-child) > .btn {\n  border-radius: 0;\n}\n.btn-group-vertical > .btn-group:first-child:not(:last-child) > .btn:last-child,\n.btn-group-vertical > .btn-group:first-child:not(:last-child) > .dropdown-toggle {\n  border-bottom-right-radius: 0;\n  border-bottom-left-radius: 0;\n}\n.btn-group-vertical > .btn-group:last-child:not(:first-child) > .btn:first-child {\n  border-top-right-radius: 0;\n  border-top-left-radius: 0;\n}\n.btn-group-justified {\n  display: table;\n  width: 100%;\n  table-layout: fixed;\n  border-collapse: separate;\n}\n.btn-group-justified > .btn,\n.btn-group-justified > .btn-group {\n  float: none;\n  display: table-cell;\n  width: 1%;\n}\n.btn-group-justified > .btn-group .btn {\n  width: 100%;\n}\n.btn-group-justified > .btn-group .dropdown-menu {\n  left: auto;\n}\n[data-toggle=\"buttons\"] > .btn input[type=\"radio\"],\n[data-toggle=\"buttons\"] > .btn-group > .btn input[type=\"radio\"],\n[data-toggle=\"buttons\"] > .btn input[type=\"checkbox\"],\n[data-toggle=\"buttons\"] > .btn-group > .btn input[type=\"checkbox\"] {\n  position: absolute;\n  clip: rect(0, 0, 0, 0);\n  pointer-events: none;\n}\n.input-group {\n  position: relative;\n  display: table;\n  border-collapse: separate;\n}\n.input-group[class*=\"col-\"] {\n  float: none;\n  padding-left: 0;\n  padding-right: 0;\n}\n.input-group .form-control {\n  position: relative;\n  z-index: 2;\n  float: left;\n  width: 100%;\n  margin-bottom: 0;\n}\n.input-group .form-control:focus {\n  z-index: 3;\n}\n.input-group-lg > .form-control,\n.input-group-lg > .input-group-addon,\n.input-group-lg > .input-group-btn > .btn {\n  height: 52px;\n  padding: 13px 16px;\n  font-size: 18px;\n  line-height: 1.3333333;\n  border-radius: 5px;\n}\nselect.input-group-lg > .form-control,\nselect.input-group-lg > .input-group-addon,\nselect.input-group-lg > .input-group-btn > .btn {\n  height: 52px;\n  line-height: 52px;\n}\ntextarea.input-group-lg > .form-control,\ntextarea.input-group-lg > .input-group-addon,\ntextarea.input-group-lg > .input-group-btn > .btn,\nselect[multiple].input-group-lg > .form-control,\nselect[multiple].input-group-lg > .input-group-addon,\nselect[multiple].input-group-lg > .input-group-btn > .btn {\n  height: auto;\n}\n.input-group-sm > .form-control,\n.input-group-sm > .input-group-addon,\n.input-group-sm > .input-group-btn > .btn {\n  height: 28px;\n  padding: 4px 10px;\n  font-size: 12px;\n  line-height: 1.5;\n  border-radius: 2px;\n}\nselect.input-group-sm > .form-control,\nselect.input-group-sm > .input-group-addon,\nselect.input-group-sm > .input-group-btn > .btn {\n  height: 28px;\n  line-height: 28px;\n}\ntextarea.input-group-sm > .form-control,\ntextarea.input-group-sm > .input-group-addon,\ntextarea.input-group-sm > .input-group-btn > .btn,\nselect[multiple].input-group-sm > .form-control,\nselect[multiple].input-group-sm > .input-group-addon,\nselect[multiple].input-group-sm > .input-group-btn > .btn {\n  height: auto;\n}\n.input-group-addon,\n.input-group-btn,\n.input-group .form-control {\n  display: table-cell;\n}\n.input-group-addon:not(:first-child):not(:last-child),\n.input-group-btn:not(:first-child):not(:last-child),\n.input-group .form-control:not(:first-child):not(:last-child) {\n  border-radius: 0;\n}\n.input-group-addon,\n.input-group-btn {\n  width: 1%;\n  white-space: nowrap;\n  vertical-align: middle;\n}\n.input-group-addon {\n  padding: 7px 12px;\n  font-size: 14px;\n  font-weight: normal;\n  line-height: 1;\n  color: #555555;\n  text-align: center;\n  background-color: #eeeeee;\n  border: 1px solid #e7e7e7;\n  border-radius: 4px;\n}\n.input-group-addon.input-sm {\n  padding: 4px 10px;\n  font-size: 12px;\n  border-radius: 2px;\n}\n.input-group-addon.input-lg {\n  padding: 13px 16px;\n  font-size: 18px;\n  border-radius: 5px;\n}\n.input-group-addon input[type=\"radio\"],\n.input-group-addon input[type=\"checkbox\"] {\n  margin-top: 0;\n}\n.input-group .form-control:first-child,\n.input-group-addon:first-child,\n.input-group-btn:first-child > .btn,\n.input-group-btn:first-child > .btn-group > .btn,\n.input-group-btn:first-child > .dropdown-toggle,\n.input-group-btn:last-child > .btn:not(:last-child):not(.dropdown-toggle),\n.input-group-btn:last-child > .btn-group:not(:last-child) > .btn {\n  border-bottom-right-radius: 0;\n  border-top-right-radius: 0;\n}\n.input-group-addon:first-child {\n  border-right: 0;\n}\n.input-group .form-control:last-child,\n.input-group-addon:last-child,\n.input-group-btn:last-child > .btn,\n.input-group-btn:last-child > .btn-group > .btn,\n.input-group-btn:last-child > .dropdown-toggle,\n.input-group-btn:first-child > .btn:not(:first-child),\n.input-group-btn:first-child > .btn-group:not(:first-child) > .btn {\n  border-bottom-left-radius: 0;\n  border-top-left-radius: 0;\n}\n.input-group-addon:last-child {\n  border-left: 0;\n}\n.input-group-btn {\n  position: relative;\n  font-size: 0;\n  white-space: nowrap;\n}\n.input-group-btn > .btn {\n  position: relative;\n}\n.input-group-btn > .btn + .btn {\n  margin-left: -1px;\n}\n.input-group-btn > .btn:hover,\n.input-group-btn > .btn:focus,\n.input-group-btn > .btn:active {\n  z-index: 2;\n}\n.input-group-btn:first-child > .btn,\n.input-group-btn:first-child > .btn-group {\n  margin-right: -1px;\n}\n.input-group-btn:last-child > .btn,\n.input-group-btn:last-child > .btn-group {\n  z-index: 2;\n  margin-left: -1px;\n}\n.nav {\n  margin-bottom: 0;\n  padding-left: 0;\n  list-style: none;\n}\n.nav > li {\n  position: relative;\n  display: block;\n}\n.nav > li > a {\n  position: relative;\n  display: block;\n  padding: 10px 15px;\n}\n.nav > li > a:hover,\n.nav > li > a:focus {\n  text-decoration: none;\n  background-color: #fff;\n}\n.nav > li.disabled > a {\n  color: #999999;\n}\n.nav > li.disabled > a:hover,\n.nav > li.disabled > a:focus {\n  color: #999999;\n  text-decoration: none;\n  background-color: transparent;\n  cursor: not-allowed;\n}\n.nav .open > a,\n.nav .open > a:hover,\n.nav .open > a:focus {\n  background-color: #fff;\n  border-color: #158CBA;\n}\n.nav .nav-divider {\n  height: 1px;\n  margin: 9px 0;\n  overflow: hidden;\n  background-color: #e5e5e5;\n}\n.nav > li > a > img {\n  max-width: none;\n}\n.nav-tabs {\n  border-bottom: 1px solid #e7e7e7;\n}\n.nav-tabs > li {\n  float: left;\n  margin-bottom: -1px;\n}\n.nav-tabs > li > a {\n  margin-right: 2px;\n  line-height: 1.42857143;\n  border: 1px solid transparent;\n  border-radius: 4px 4px 0 0;\n}\n.nav-tabs > li > a:hover {\n  border-color: #eeeeee #eeeeee #e7e7e7;\n}\n.nav-tabs > li.active > a,\n.nav-tabs > li.active > a:hover,\n.nav-tabs > li.active > a:focus {\n  color: #555555;\n  background-color: #fff;\n  border: 1px solid #e7e7e7;\n  border-bottom-color: transparent;\n  cursor: default;\n}\n.nav-tabs.nav-justified {\n  width: 100%;\n  border-bottom: 0;\n}\n.nav-tabs.nav-justified > li {\n  float: none;\n}\n.nav-tabs.nav-justified > li > a {\n  text-align: center;\n  margin-bottom: 5px;\n}\n.nav-tabs.nav-justified > .dropdown .dropdown-menu {\n  top: auto;\n  left: auto;\n}\n@media (min-width: 768px) {\n  .nav-tabs.nav-justified > li {\n    display: table-cell;\n    width: 1%;\n  }\n  .nav-tabs.nav-justified > li > a {\n    margin-bottom: 0;\n  }\n}\n.nav-tabs.nav-justified > li > a {\n  margin-right: 0;\n  border-radius: 4px;\n}\n.nav-tabs.nav-justified > .active > a,\n.nav-tabs.nav-justified > .active > a:hover,\n.nav-tabs.nav-justified > .active > a:focus {\n  border: 1px solid #e7e7e7;\n}\n@media (min-width: 768px) {\n  .nav-tabs.nav-justified > li > a {\n    border-bottom: 1px solid #e7e7e7;\n    border-radius: 4px 4px 0 0;\n  }\n  .nav-tabs.nav-justified > .active > a,\n  .nav-tabs.nav-justified > .active > a:hover,\n  .nav-tabs.nav-justified > .active > a:focus {\n    border-bottom-color: #fff;\n  }\n}\n.nav-pills > li {\n  float: left;\n}\n.nav-pills > li > a {\n  border-radius: 4px;\n}\n.nav-pills > li + li {\n  margin-left: 2px;\n}\n.nav-pills > li.active > a,\n.nav-pills > li.active > a:hover,\n.nav-pills > li.active > a:focus {\n  color: #fff;\n  background-color: #158CBA;\n}\n.nav-stacked > li {\n  float: none;\n}\n.nav-stacked > li + li {\n  margin-top: 2px;\n  margin-left: 0;\n}\n.nav-justified {\n  width: 100%;\n}\n.nav-justified > li {\n  float: none;\n}\n.nav-justified > li > a {\n  text-align: center;\n  margin-bottom: 5px;\n}\n.nav-justified > .dropdown .dropdown-menu {\n  top: auto;\n  left: auto;\n}\n@media (min-width: 768px) {\n  .nav-justified > li {\n    display: table-cell;\n    width: 1%;\n  }\n  .nav-justified > li > a {\n    margin-bottom: 0;\n  }\n}\n.nav-tabs-justified {\n  border-bottom: 0;\n}\n.nav-tabs-justified > li > a {\n  margin-right: 0;\n  border-radius: 4px;\n}\n.nav-tabs-justified > .active > a,\n.nav-tabs-justified > .active > a:hover,\n.nav-tabs-justified > .active > a:focus {\n  border: 1px solid #e7e7e7;\n}\n@media (min-width: 768px) {\n  .nav-tabs-justified > li > a {\n    border-bottom: 1px solid #e7e7e7;\n    border-radius: 4px 4px 0 0;\n  }\n  .nav-tabs-justified > .active > a,\n  .nav-tabs-justified > .active > a:hover,\n  .nav-tabs-justified > .active > a:focus {\n    border-bottom-color: #fff;\n  }\n}\n.tab-content > .tab-pane {\n  display: none;\n}\n.tab-content > .active {\n  display: block;\n}\n.nav-tabs .dropdown-menu {\n  margin-top: -1px;\n  border-top-right-radius: 0;\n  border-top-left-radius: 0;\n}\n.navbar {\n  position: relative;\n  min-height: 50px;\n  margin-bottom: 20px;\n  border: 1px solid transparent;\n}\n@media (min-width: 768px) {\n  .navbar {\n    border-radius: 4px;\n  }\n}\n@media (min-width: 768px) {\n  .navbar-header {\n    float: left;\n  }\n}\n.navbar-collapse {\n  overflow-x: visible;\n  padding-right: 15px;\n  padding-left: 15px;\n  border-top: 1px solid transparent;\n  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1);\n  -webkit-overflow-scrolling: touch;\n}\n.navbar-collapse.in {\n  overflow-y: auto;\n}\n@media (min-width: 768px) {\n  .navbar-collapse {\n    width: auto;\n    border-top: 0;\n    box-shadow: none;\n  }\n  .navbar-collapse.collapse {\n    display: block !important;\n    height: auto !important;\n    padding-bottom: 0;\n    overflow: visible !important;\n  }\n  .navbar-collapse.in {\n    overflow-y: visible;\n  }\n  .navbar-fixed-top .navbar-collapse,\n  .navbar-static-top .navbar-collapse,\n  .navbar-fixed-bottom .navbar-collapse {\n    padding-left: 0;\n    padding-right: 0;\n  }\n}\n.navbar-fixed-top .navbar-collapse,\n.navbar-fixed-bottom .navbar-collapse {\n  max-height: 340px;\n}\n@media (max-device-width: 480px) and (orientation: landscape) {\n  .navbar-fixed-top .navbar-collapse,\n  .navbar-fixed-bottom .navbar-collapse {\n    max-height: 200px;\n  }\n}\n.container > .navbar-header,\n.container-fluid > .navbar-header,\n.container > .navbar-collapse,\n.container-fluid > .navbar-collapse {\n  margin-right: -15px;\n  margin-left: -15px;\n}\n@media (min-width: 768px) {\n  .container > .navbar-header,\n  .container-fluid > .navbar-header,\n  .container > .navbar-collapse,\n  .container-fluid > .navbar-collapse {\n    margin-right: 0;\n    margin-left: 0;\n  }\n}\n.navbar-static-top {\n  z-index: 1000;\n  border-width: 0 0 1px;\n}\n@media (min-width: 768px) {\n  .navbar-static-top {\n    border-radius: 0;\n  }\n}\n.navbar-fixed-top,\n.navbar-fixed-bottom {\n  position: fixed;\n  right: 0;\n  left: 0;\n  z-index: 1030;\n}\n@media (min-width: 768px) {\n  .navbar-fixed-top,\n  .navbar-fixed-bottom {\n    border-radius: 0;\n  }\n}\n.navbar-fixed-top {\n  top: 0;\n  border-width: 0 0 1px;\n}\n.navbar-fixed-bottom {\n  bottom: 0;\n  margin-bottom: 0;\n  border-width: 1px 0 0;\n}\n.navbar-brand {\n  float: left;\n  padding: 15px 15px;\n  font-size: 18px;\n  line-height: 20px;\n  height: 50px;\n}\n.navbar-brand:hover,\n.navbar-brand:focus {\n  text-decoration: none;\n}\n.navbar-brand > img {\n  display: block;\n}\n@media (min-width: 768px) {\n  .navbar > .container .navbar-brand,\n  .navbar > .container-fluid .navbar-brand {\n    margin-left: -15px;\n  }\n}\n.navbar-toggle {\n  position: relative;\n  float: right;\n  margin-right: 15px;\n  padding: 9px 10px;\n  margin-top: 8px;\n  margin-bottom: 8px;\n  background-color: transparent;\n  background-image: none;\n  border: 1px solid transparent;\n  border-radius: 4px;\n}\n.navbar-toggle:focus {\n  outline: 0;\n}\n.navbar-toggle .icon-bar {\n  display: block;\n  width: 22px;\n  height: 2px;\n  border-radius: 1px;\n}\n.navbar-toggle .icon-bar + .icon-bar {\n  margin-top: 4px;\n}\n@media (min-width: 768px) {\n  .navbar-toggle {\n    display: none;\n  }\n}\n.navbar-nav {\n  margin: 7.5px -15px;\n}\n.navbar-nav > li > a {\n  padding-top: 10px;\n  padding-bottom: 10px;\n  line-height: 20px;\n}\n@media (max-width: 767px) {\n  .navbar-nav .open .dropdown-menu {\n    position: static;\n    float: none;\n    width: auto;\n    margin-top: 0;\n    background-color: transparent;\n    border: 0;\n    box-shadow: none;\n  }\n  .navbar-nav .open .dropdown-menu > li > a,\n  .navbar-nav .open .dropdown-menu .dropdown-header {\n    padding: 5px 15px 5px 25px;\n  }\n  .navbar-nav .open .dropdown-menu > li > a {\n    line-height: 20px;\n  }\n  .navbar-nav .open .dropdown-menu > li > a:hover,\n  .navbar-nav .open .dropdown-menu > li > a:focus {\n    background-image: none;\n  }\n}\n@media (min-width: 768px) {\n  .navbar-nav {\n    float: left;\n    margin: 0;\n  }\n  .navbar-nav > li {\n    float: left;\n  }\n  .navbar-nav > li > a {\n    padding-top: 15px;\n    padding-bottom: 15px;\n  }\n}\n.navbar-form {\n  margin-left: -15px;\n  margin-right: -15px;\n  padding: 10px 15px;\n  border-top: 1px solid transparent;\n  border-bottom: 1px solid transparent;\n  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(255, 255, 255, 0.1);\n  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(255, 255, 255, 0.1);\n  margin-top: 6px;\n  margin-bottom: 6px;\n}\n@media (min-width: 768px) {\n  .navbar-form .form-group {\n    display: inline-block;\n    margin-bottom: 0;\n    vertical-align: middle;\n  }\n  .navbar-form .form-control {\n    display: inline-block;\n    width: auto;\n    vertical-align: middle;\n  }\n  .navbar-form .form-control-static {\n    display: inline-block;\n  }\n  .navbar-form .input-group {\n    display: inline-table;\n    vertical-align: middle;\n  }\n  .navbar-form .input-group .input-group-addon,\n  .navbar-form .input-group .input-group-btn,\n  .navbar-form .input-group .form-control {\n    width: auto;\n  }\n  .navbar-form .input-group > .form-control {\n    width: 100%;\n  }\n  .navbar-form .control-label {\n    margin-bottom: 0;\n    vertical-align: middle;\n  }\n  .navbar-form .radio,\n  .navbar-form .checkbox {\n    display: inline-block;\n    margin-top: 0;\n    margin-bottom: 0;\n    vertical-align: middle;\n  }\n  .navbar-form .radio label,\n  .navbar-form .checkbox label {\n    padding-left: 0;\n  }\n  .navbar-form .radio input[type=\"radio\"],\n  .navbar-form .checkbox input[type=\"checkbox\"] {\n    position: relative;\n    margin-left: 0;\n  }\n  .navbar-form .has-feedback .form-control-feedback {\n    top: 0;\n  }\n}\n@media (max-width: 767px) {\n  .navbar-form .form-group {\n    margin-bottom: 5px;\n  }\n  .navbar-form .form-group:last-child {\n    margin-bottom: 0;\n  }\n}\n@media (min-width: 768px) {\n  .navbar-form {\n    width: auto;\n    border: 0;\n    margin-left: 0;\n    margin-right: 0;\n    padding-top: 0;\n    padding-bottom: 0;\n    -webkit-box-shadow: none;\n    box-shadow: none;\n  }\n}\n.navbar-nav > li > .dropdown-menu {\n  margin-top: 0;\n  border-top-right-radius: 0;\n  border-top-left-radius: 0;\n}\n.navbar-fixed-bottom .navbar-nav > li > .dropdown-menu {\n  margin-bottom: 0;\n  border-top-right-radius: 4px;\n  border-top-left-radius: 4px;\n  border-bottom-right-radius: 0;\n  border-bottom-left-radius: 0;\n}\n.navbar-btn {\n  margin-top: 6px;\n  margin-bottom: 6px;\n}\n.navbar-btn.btn-sm {\n  margin-top: 11px;\n  margin-bottom: 11px;\n}\n.navbar-btn.btn-xs {\n  margin-top: 14px;\n  margin-bottom: 14px;\n}\n.navbar-text {\n  margin-top: 15px;\n  margin-bottom: 15px;\n}\n@media (min-width: 768px) {\n  .navbar-text {\n    float: left;\n    margin-left: 15px;\n    margin-right: 15px;\n  }\n}\n@media (min-width: 768px) {\n  .navbar-left {\n    float: left !important;\n  }\n  .navbar-right {\n    float: right !important;\n    margin-right: -15px;\n  }\n  .navbar-right ~ .navbar-right {\n    margin-right: 0;\n  }\n}\n.navbar-default {\n  background-color: #f8f8f8;\n  border-color: #e7e7e7;\n}\n.navbar-default .navbar-brand {\n  color: #333333;\n}\n.navbar-default .navbar-brand:hover,\n.navbar-default .navbar-brand:focus {\n  color: #333333;\n  background-color: transparent;\n}\n.navbar-default .navbar-text {\n  color: #555555;\n}\n.navbar-default .navbar-nav > li > a {\n  color: #999999;\n}\n.navbar-default .navbar-nav > li > a:hover,\n.navbar-default .navbar-nav > li > a:focus {\n  color: #333333;\n  background-color: transparent;\n}\n.navbar-default .navbar-nav > .active > a,\n.navbar-default .navbar-nav > .active > a:hover,\n.navbar-default .navbar-nav > .active > a:focus {\n  color: #333333;\n  background-color: transparent;\n}\n.navbar-default .navbar-nav > .disabled > a,\n.navbar-default .navbar-nav > .disabled > a:hover,\n.navbar-default .navbar-nav > .disabled > a:focus {\n  color: #eeeeee;\n  background-color: transparent;\n}\n.navbar-default .navbar-toggle {\n  border-color: #eeeeee;\n}\n.navbar-default .navbar-toggle:hover,\n.navbar-default .navbar-toggle:focus {\n  background-color: #fff;\n}\n.navbar-default .navbar-toggle .icon-bar {\n  background-color: #999999;\n}\n.navbar-default .navbar-collapse,\n.navbar-default .navbar-form {\n  border-color: #e7e7e7;\n}\n.navbar-default .navbar-nav > .open > a,\n.navbar-default .navbar-nav > .open > a:hover,\n.navbar-default .navbar-nav > .open > a:focus {\n  background-color: transparent;\n  color: #333333;\n}\n@media (max-width: 767px) {\n  .navbar-default .navbar-nav .open .dropdown-menu > li > a {\n    color: #999999;\n  }\n  .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,\n  .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {\n    color: #333333;\n    background-color: transparent;\n  }\n  .navbar-default .navbar-nav .open .dropdown-menu > .active > a,\n  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,\n  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {\n    color: #333333;\n    background-color: transparent;\n  }\n  .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a,\n  .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:hover,\n  .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:focus {\n    color: #eeeeee;\n    background-color: transparent;\n  }\n}\n.navbar-default .navbar-link {\n  color: #999999;\n}\n.navbar-default .navbar-link:hover {\n  color: #333333;\n}\n.navbar-default .btn-link {\n  color: #999999;\n}\n.navbar-default .btn-link:hover,\n.navbar-default .btn-link:focus {\n  color: #333333;\n}\n.navbar-default .btn-link[disabled]:hover,\nfieldset[disabled] .navbar-default .btn-link:hover,\n.navbar-default .btn-link[disabled]:focus,\nfieldset[disabled] .navbar-default .btn-link:focus {\n  color: #eeeeee;\n}\n.navbar-inverse {\n  background-color: #fff;\n  border-color: #e6e6e6;\n}\n.navbar-inverse .navbar-brand {\n  color: #999999;\n}\n.navbar-inverse .navbar-brand:hover,\n.navbar-inverse .navbar-brand:focus {\n  color: #333333;\n  background-color: transparent;\n}\n.navbar-inverse .navbar-text {\n  color: #999999;\n}\n.navbar-inverse .navbar-nav > li > a {\n  color: #999999;\n}\n.navbar-inverse .navbar-nav > li > a:hover,\n.navbar-inverse .navbar-nav > li > a:focus {\n  color: #333333;\n  background-color: transparent;\n}\n.navbar-inverse .navbar-nav > .active > a,\n.navbar-inverse .navbar-nav > .active > a:hover,\n.navbar-inverse .navbar-nav > .active > a:focus {\n  color: #333333;\n  background-color: transparent;\n}\n.navbar-inverse .navbar-nav > .disabled > a,\n.navbar-inverse .navbar-nav > .disabled > a:hover,\n.navbar-inverse .navbar-nav > .disabled > a:focus {\n  color: #eeeeee;\n  background-color: transparent;\n}\n.navbar-inverse .navbar-toggle {\n  border-color: #eeeeee;\n}\n.navbar-inverse .navbar-toggle:hover,\n.navbar-inverse .navbar-toggle:focus {\n  background-color: #eeeeee;\n}\n.navbar-inverse .navbar-toggle .icon-bar {\n  background-color: #999999;\n}\n.navbar-inverse .navbar-collapse,\n.navbar-inverse .navbar-form {\n  border-color: #ededed;\n}\n.navbar-inverse .navbar-nav > .open > a,\n.navbar-inverse .navbar-nav > .open > a:hover,\n.navbar-inverse .navbar-nav > .open > a:focus {\n  background-color: transparent;\n  color: #333333;\n}\n@media (max-width: 767px) {\n  .navbar-inverse .navbar-nav .open .dropdown-menu > .dropdown-header {\n    border-color: #e6e6e6;\n  }\n  .navbar-inverse .navbar-nav .open .dropdown-menu .divider {\n    background-color: #e6e6e6;\n  }\n  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a {\n    color: #999999;\n  }\n  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:hover,\n  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:focus {\n    color: #333333;\n    background-color: transparent;\n  }\n  .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a,\n  .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:hover,\n  .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:focus {\n    color: #333333;\n    background-color: transparent;\n  }\n  .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a,\n  .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:hover,\n  .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:focus {\n    color: #eeeeee;\n    background-color: transparent;\n  }\n}\n.navbar-inverse .navbar-link {\n  color: #999999;\n}\n.navbar-inverse .navbar-link:hover {\n  color: #333333;\n}\n.navbar-inverse .btn-link {\n  color: #999999;\n}\n.navbar-inverse .btn-link:hover,\n.navbar-inverse .btn-link:focus {\n  color: #333333;\n}\n.navbar-inverse .btn-link[disabled]:hover,\nfieldset[disabled] .navbar-inverse .btn-link:hover,\n.navbar-inverse .btn-link[disabled]:focus,\nfieldset[disabled] .navbar-inverse .btn-link:focus {\n  color: #eeeeee;\n}\n.breadcrumb {\n  padding: 8px 15px;\n  margin-bottom: 20px;\n  list-style: none;\n  background-color: #fafafa;\n  border-radius: 4px;\n}\n.breadcrumb > li {\n  display: inline-block;\n}\n.breadcrumb > li + li:before {\n  content: \">\\A0\";\n  padding: 0 5px;\n  color: #999999;\n}\n.breadcrumb > .active {\n  color: #999999;\n}\n.pagination {\n  display: inline-block;\n  padding-left: 0;\n  margin: 20px 0;\n  border-radius: 4px;\n}\n.pagination > li {\n  display: inline;\n}\n.pagination > li > a,\n.pagination > li > span {\n  position: relative;\n  float: left;\n  padding: 7px 12px;\n  line-height: 1.42857143;\n  text-decoration: none;\n  color: #555555;\n  background-color: #eeeeee;\n  border: 1px solid #e2e2e2;\n  margin-left: -1px;\n}\n.pagination > li:first-child > a,\n.pagination > li:first-child > span {\n  margin-left: 0;\n  border-bottom-left-radius: 4px;\n  border-top-left-radius: 4px;\n}\n.pagination > li:last-child > a,\n.pagination > li:last-child > span {\n  border-bottom-right-radius: 4px;\n  border-top-right-radius: 4px;\n}\n.pagination > li > a:hover,\n.pagination > li > span:hover,\n.pagination > li > a:focus,\n.pagination > li > span:focus {\n  z-index: 2;\n  color: #555555;\n  background-color: #eeeeee;\n  border-color: #e2e2e2;\n}\n.pagination > .active > a,\n.pagination > .active > span,\n.pagination > .active > a:hover,\n.pagination > .active > span:hover,\n.pagination > .active > a:focus,\n.pagination > .active > span:focus {\n  z-index: 3;\n  color: #fff;\n  background-color: #158CBA;\n  border-color: #127ba3;\n  cursor: default;\n}\n.pagination > .disabled > span,\n.pagination > .disabled > span:hover,\n.pagination > .disabled > span:focus,\n.pagination > .disabled > a,\n.pagination > .disabled > a:hover,\n.pagination > .disabled > a:focus {\n  color: #999999;\n  background-color: #eeeeee;\n  border-color: #e2e2e2;\n  cursor: not-allowed;\n}\n.pagination-lg > li > a,\n.pagination-lg > li > span {\n  padding: 13px 16px;\n  font-size: 18px;\n  line-height: 1.3333333;\n}\n.pagination-lg > li:first-child > a,\n.pagination-lg > li:first-child > span {\n  border-bottom-left-radius: 5px;\n  border-top-left-radius: 5px;\n}\n.pagination-lg > li:last-child > a,\n.pagination-lg > li:last-child > span {\n  border-bottom-right-radius: 5px;\n  border-top-right-radius: 5px;\n}\n.pagination-sm > li > a,\n.pagination-sm > li > span {\n  padding: 4px 10px;\n  font-size: 12px;\n  line-height: 1.5;\n}\n.pagination-sm > li:first-child > a,\n.pagination-sm > li:first-child > span {\n  border-bottom-left-radius: 2px;\n  border-top-left-radius: 2px;\n}\n.pagination-sm > li:last-child > a,\n.pagination-sm > li:last-child > span {\n  border-bottom-right-radius: 2px;\n  border-top-right-radius: 2px;\n}\n.pager {\n  padding-left: 0;\n  margin: 20px 0;\n  list-style: none;\n  text-align: center;\n}\n.pager li {\n  display: inline;\n}\n.pager li > a,\n.pager li > span {\n  display: inline-block;\n  padding: 5px 14px;\n  background-color: #eeeeee;\n  border: 1px solid #e2e2e2;\n  border-radius: 15px;\n}\n.pager li > a:hover,\n.pager li > a:focus {\n  text-decoration: none;\n  background-color: #eeeeee;\n}\n.pager .next > a,\n.pager .next > span {\n  float: right;\n}\n.pager .previous > a,\n.pager .previous > span {\n  float: left;\n}\n.pager .disabled > a,\n.pager .disabled > a:hover,\n.pager .disabled > a:focus,\n.pager .disabled > span {\n  color: #999999;\n  background-color: #eeeeee;\n  cursor: not-allowed;\n}\n.label {\n  display: inline;\n  padding: .2em .6em .3em;\n  font-size: 75%;\n  font-weight: bold;\n  line-height: 1;\n  color: #fff;\n  text-align: center;\n  white-space: nowrap;\n  vertical-align: baseline;\n  border-radius: .25em;\n}\na.label:hover,\na.label:focus {\n  color: #fff;\n  text-decoration: none;\n  cursor: pointer;\n}\n.label:empty {\n  display: none;\n}\n.btn .label {\n  position: relative;\n  top: -1px;\n}\n.label-default {\n  background-color: #999999;\n}\n.label-default[href]:hover,\n.label-default[href]:focus {\n  background-color: #808080;\n}\n.label-primary {\n  background-color: #158CBA;\n}\n.label-primary[href]:hover,\n.label-primary[href]:focus {\n  background-color: #106a8c;\n}\n.label-success {\n  background-color: #28B62C;\n}\n.label-success[href]:hover,\n.label-success[href]:focus {\n  background-color: #1f8c22;\n}\n.label-info {\n  background-color: #75CAEB;\n}\n.label-info[href]:hover,\n.label-info[href]:focus {\n  background-color: #48b9e5;\n}\n.label-warning {\n  background-color: #FF851B;\n}\n.label-warning[href]:hover,\n.label-warning[href]:focus {\n  background-color: #e76b00;\n}\n.label-danger {\n  background-color: #FF4136;\n}\n.label-danger[href]:hover,\n.label-danger[href]:focus {\n  background-color: #ff1103;\n}\n.badge {\n  display: inline-block;\n  min-width: 10px;\n  padding: 3px 7px;\n  font-size: 12px;\n  font-weight: normal;\n  color: #fff;\n  line-height: 1;\n  vertical-align: middle;\n  white-space: nowrap;\n  text-align: center;\n  background-color: #158CBA;\n  border-radius: 10px;\n}\n.badge:empty {\n  display: none;\n}\n.btn .badge {\n  position: relative;\n  top: -1px;\n}\n.btn-xs .badge,\n.btn-group-xs > .btn .badge {\n  top: 0;\n  padding: 1px 5px;\n}\na.badge:hover,\na.badge:focus {\n  color: #fff;\n  text-decoration: none;\n  cursor: pointer;\n}\n.list-group-item.active > .badge,\n.nav-pills > .active > a > .badge {\n  color: #158CBA;\n  background-color: #fff;\n}\n.list-group-item > .badge {\n  float: right;\n}\n.list-group-item > .badge + .badge {\n  margin-right: 5px;\n}\n.nav-pills > li > a > .badge {\n  margin-left: 3px;\n}\n.jumbotron {\n  padding-top: 30px;\n  padding-bottom: 30px;\n  margin-bottom: 30px;\n  color: inherit;\n  background-color: #fafafa;\n}\n.jumbotron h1,\n.jumbotron .h1 {\n  color: inherit;\n}\n.jumbotron p {\n  margin-bottom: 15px;\n  font-size: 21px;\n  font-weight: 200;\n}\n.jumbotron > hr {\n  border-top-color: #e1e1e1;\n}\n.container .jumbotron,\n.container-fluid .jumbotron {\n  border-radius: 5px;\n  padding-left: 15px;\n  padding-right: 15px;\n}\n.jumbotron .container {\n  max-width: 100%;\n}\n@media screen and (min-width: 768px) {\n  .jumbotron {\n    padding-top: 48px;\n    padding-bottom: 48px;\n  }\n  .container .jumbotron,\n  .container-fluid .jumbotron {\n    padding-left: 60px;\n    padding-right: 60px;\n  }\n  .jumbotron h1,\n  .jumbotron .h1 {\n    font-size: 63px;\n  }\n}\n.thumbnail {\n  display: block;\n  padding: 4px;\n  margin-bottom: 20px;\n  line-height: 1.42857143;\n  background-color: #fff;\n  border: 1px solid #eeeeee;\n  border-radius: 4px;\n  -webkit-transition: border 0.2s ease-in-out;\n  -o-transition: border 0.2s ease-in-out;\n  transition: border 0.2s ease-in-out;\n}\n.thumbnail > img,\n.thumbnail a > img {\n  margin-left: auto;\n  margin-right: auto;\n}\na.thumbnail:hover,\na.thumbnail:focus,\na.thumbnail.active {\n  border-color: #158CBA;\n}\n.thumbnail .caption {\n  padding: 9px;\n  color: #555555;\n}\n.alert {\n  padding: 15px;\n  margin-bottom: 20px;\n  border: 1px solid transparent;\n  border-radius: 4px;\n}\n.alert h4 {\n  margin-top: 0;\n  color: inherit;\n}\n.alert .alert-link {\n  font-weight: bold;\n}\n.alert > p,\n.alert > ul {\n  margin-bottom: 0;\n}\n.alert > p + p {\n  margin-top: 5px;\n}\n.alert-dismissable,\n.alert-dismissible {\n  padding-right: 35px;\n}\n.alert-dismissable .close,\n.alert-dismissible .close {\n  position: relative;\n  top: -2px;\n  right: -21px;\n  color: inherit;\n}\n.alert-success {\n  background-color: #28B62C;\n  border-color: #24a528;\n  color: #fff;\n}\n.alert-success hr {\n  border-top-color: #209023;\n}\n.alert-success .alert-link {\n  color: #e6e6e6;\n}\n.alert-info {\n  background-color: #75CAEB;\n  border-color: #40b5e3;\n  color: #fff;\n}\n.alert-info hr {\n  border-top-color: #29ade0;\n}\n.alert-info .alert-link {\n  color: #e6e6e6;\n}\n.alert-warning {\n  background-color: #FF851B;\n  border-color: #ff7701;\n  color: #fff;\n}\n.alert-warning hr {\n  border-top-color: #e76b00;\n}\n.alert-warning .alert-link {\n  color: #e6e6e6;\n}\n.alert-danger {\n  background-color: #FF4136;\n  border-color: #ff1103;\n  color: #fff;\n}\n.alert-danger hr {\n  border-top-color: #e90d00;\n}\n.alert-danger .alert-link {\n  color: #e6e6e6;\n}\n@-webkit-keyframes progress-bar-stripes {\n  from {\n    background-position: 40px 0;\n  }\n  to {\n    background-position: 0 0;\n  }\n}\n@keyframes progress-bar-stripes {\n  from {\n    background-position: 40px 0;\n  }\n  to {\n    background-position: 0 0;\n  }\n}\n.progress {\n  overflow: hidden;\n  height: 20px;\n  margin-bottom: 20px;\n  background-color: #fafafa;\n  border-radius: 4px;\n  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);\n  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);\n}\n.progress-bar {\n  float: left;\n  width: 0%;\n  height: 100%;\n  font-size: 12px;\n  line-height: 20px;\n  color: #fff;\n  text-align: center;\n  background-color: #158CBA;\n  -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);\n  box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);\n  -webkit-transition: width 0.6s ease;\n  -o-transition: width 0.6s ease;\n  transition: width 0.6s ease;\n}\n.progress-striped .progress-bar,\n.progress-bar-striped {\n  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);\n  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);\n  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);\n  background-size: 40px 40px;\n}\n.progress.active .progress-bar,\n.progress-bar.active {\n  -webkit-animation: progress-bar-stripes 2s linear infinite;\n  -o-animation: progress-bar-stripes 2s linear infinite;\n  animation: progress-bar-stripes 2s linear infinite;\n}\n.progress-bar-success {\n  background-color: #28B62C;\n}\n.progress-striped .progress-bar-success {\n  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);\n  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);\n  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);\n}\n.progress-bar-info {\n  background-color: #75CAEB;\n}\n.progress-striped .progress-bar-info {\n  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);\n  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);\n  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);\n}\n.progress-bar-warning {\n  background-color: #FF851B;\n}\n.progress-striped .progress-bar-warning {\n  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);\n  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);\n  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);\n}\n.progress-bar-danger {\n  background-color: #FF4136;\n}\n.progress-striped .progress-bar-danger {\n  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);\n  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);\n  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);\n}\n.media {\n  margin-top: 15px;\n}\n.media:first-child {\n  margin-top: 0;\n}\n.media,\n.media-body {\n  zoom: 1;\n  overflow: hidden;\n}\n.media-body {\n  width: 10000px;\n}\n.media-object {\n  display: block;\n}\n.media-object.img-thumbnail {\n  max-width: none;\n}\n.media-right,\n.media > .pull-right {\n  padding-left: 10px;\n}\n.media-left,\n.media > .pull-left {\n  padding-right: 10px;\n}\n.media-left,\n.media-right,\n.media-body {\n  display: table-cell;\n  vertical-align: top;\n}\n.media-middle {\n  vertical-align: middle;\n}\n.media-bottom {\n  vertical-align: bottom;\n}\n.media-heading {\n  margin-top: 0;\n  margin-bottom: 5px;\n}\n.media-list {\n  padding-left: 0;\n  list-style: none;\n}\n.list-group {\n  margin-bottom: 20px;\n  padding-left: 0;\n}\n.list-group-item {\n  position: relative;\n  display: block;\n  padding: 10px 15px;\n  margin-bottom: -1px;\n  background-color: #fff;\n  border: 1px solid #eeeeee;\n}\n.list-group-item:first-child {\n  border-top-right-radius: 4px;\n  border-top-left-radius: 4px;\n}\n.list-group-item:last-child {\n  margin-bottom: 0;\n  border-bottom-right-radius: 4px;\n  border-bottom-left-radius: 4px;\n}\na.list-group-item,\nbutton.list-group-item {\n  color: #555;\n}\na.list-group-item .list-group-item-heading,\nbutton.list-group-item .list-group-item-heading {\n  color: #333;\n}\na.list-group-item:hover,\nbutton.list-group-item:hover,\na.list-group-item:focus,\nbutton.list-group-item:focus {\n  text-decoration: none;\n  color: #555;\n  background-color: #f5f5f5;\n}\nbutton.list-group-item {\n  width: 100%;\n  text-align: left;\n}\n.list-group-item.disabled,\n.list-group-item.disabled:hover,\n.list-group-item.disabled:focus {\n  background-color: #eeeeee;\n  color: #999999;\n  cursor: not-allowed;\n}\n.list-group-item.disabled .list-group-item-heading,\n.list-group-item.disabled:hover .list-group-item-heading,\n.list-group-item.disabled:focus .list-group-item-heading {\n  color: inherit;\n}\n.list-group-item.disabled .list-group-item-text,\n.list-group-item.disabled:hover .list-group-item-text,\n.list-group-item.disabled:focus .list-group-item-text {\n  color: #999999;\n}\n.list-group-item.active,\n.list-group-item.active:hover,\n.list-group-item.active:focus {\n  z-index: 2;\n  color: #fff;\n  background-color: #158CBA;\n  border-color: #158CBA;\n}\n.list-group-item.active .list-group-item-heading,\n.list-group-item.active:hover .list-group-item-heading,\n.list-group-item.active:focus .list-group-item-heading,\n.list-group-item.active .list-group-item-heading > small,\n.list-group-item.active:hover .list-group-item-heading > small,\n.list-group-item.active:focus .list-group-item-heading > small,\n.list-group-item.active .list-group-item-heading > .small,\n.list-group-item.active:hover .list-group-item-heading > .small,\n.list-group-item.active:focus .list-group-item-heading > .small {\n  color: inherit;\n}\n.list-group-item.active .list-group-item-text,\n.list-group-item.active:hover .list-group-item-text,\n.list-group-item.active:focus .list-group-item-text {\n  color: #a6dff5;\n}\n.list-group-item-success {\n  color: #fff;\n  background-color: #28B62C;\n}\na.list-group-item-success,\nbutton.list-group-item-success {\n  color: #fff;\n}\na.list-group-item-success .list-group-item-heading,\nbutton.list-group-item-success .list-group-item-heading {\n  color: inherit;\n}\na.list-group-item-success:hover,\nbutton.list-group-item-success:hover,\na.list-group-item-success:focus,\nbutton.list-group-item-success:focus {\n  color: #fff;\n  background-color: #23a127;\n}\na.list-group-item-success.active,\nbutton.list-group-item-success.active,\na.list-group-item-success.active:hover,\nbutton.list-group-item-success.active:hover,\na.list-group-item-success.active:focus,\nbutton.list-group-item-success.active:focus {\n  color: #fff;\n  background-color: #fff;\n  border-color: #fff;\n}\n.list-group-item-info {\n  color: #fff;\n  background-color: #75CAEB;\n}\na.list-group-item-info,\nbutton.list-group-item-info {\n  color: #fff;\n}\na.list-group-item-info .list-group-item-heading,\nbutton.list-group-item-info .list-group-item-heading {\n  color: inherit;\n}\na.list-group-item-info:hover,\nbutton.list-group-item-info:hover,\na.list-group-item-info:focus,\nbutton.list-group-item-info:focus {\n  color: #fff;\n  background-color: #5fc1e8;\n}\na.list-group-item-info.active,\nbutton.list-group-item-info.active,\na.list-group-item-info.active:hover,\nbutton.list-group-item-info.active:hover,\na.list-group-item-info.active:focus,\nbutton.list-group-item-info.active:focus {\n  color: #fff;\n  background-color: #fff;\n  border-color: #fff;\n}\n.list-group-item-warning {\n  color: #fff;\n  background-color: #FF851B;\n}\na.list-group-item-warning,\nbutton.list-group-item-warning {\n  color: #fff;\n}\na.list-group-item-warning .list-group-item-heading,\nbutton.list-group-item-warning .list-group-item-heading {\n  color: inherit;\n}\na.list-group-item-warning:hover,\nbutton.list-group-item-warning:hover,\na.list-group-item-warning:focus,\nbutton.list-group-item-warning:focus {\n  color: #fff;\n  background-color: #ff7701;\n}\na.list-group-item-warning.active,\nbutton.list-group-item-warning.active,\na.list-group-item-warning.active:hover,\nbutton.list-group-item-warning.active:hover,\na.list-group-item-warning.active:focus,\nbutton.list-group-item-warning.active:focus {\n  color: #fff;\n  background-color: #fff;\n  border-color: #fff;\n}\n.list-group-item-danger {\n  color: #fff;\n  background-color: #FF4136;\n}\na.list-group-item-danger,\nbutton.list-group-item-danger {\n  color: #fff;\n}\na.list-group-item-danger .list-group-item-heading,\nbutton.list-group-item-danger .list-group-item-heading {\n  color: inherit;\n}\na.list-group-item-danger:hover,\nbutton.list-group-item-danger:hover,\na.list-group-item-danger:focus,\nbutton.list-group-item-danger:focus {\n  color: #fff;\n  background-color: #ff291c;\n}\na.list-group-item-danger.active,\nbutton.list-group-item-danger.active,\na.list-group-item-danger.active:hover,\nbutton.list-group-item-danger.active:hover,\na.list-group-item-danger.active:focus,\nbutton.list-group-item-danger.active:focus {\n  color: #fff;\n  background-color: #fff;\n  border-color: #fff;\n}\n.list-group-item-heading {\n  margin-top: 0;\n  margin-bottom: 5px;\n}\n.list-group-item-text {\n  margin-bottom: 0;\n  line-height: 1.3;\n}\n.panel {\n  margin-bottom: 20px;\n  background-color: #fff;\n  border: 1px solid transparent;\n  border-radius: 4px;\n  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);\n  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);\n}\n.panel-body {\n  padding: 15px;\n}\n.panel-heading {\n  padding: 10px 15px;\n  border-bottom: 1px solid transparent;\n  border-top-right-radius: 3px;\n  border-top-left-radius: 3px;\n}\n.panel-heading > .dropdown .dropdown-toggle {\n  color: inherit;\n}\n.panel-title {\n  margin-top: 0;\n  margin-bottom: 0;\n  font-size: 16px;\n  color: inherit;\n}\n.panel-title > a,\n.panel-title > small,\n.panel-title > .small,\n.panel-title > small > a,\n.panel-title > .small > a {\n  color: inherit;\n}\n.panel-footer {\n  padding: 10px 15px;\n  background-color: #f5f5f5;\n  border-top: 1px solid transparent;\n  border-bottom-right-radius: 3px;\n  border-bottom-left-radius: 3px;\n}\n.panel > .list-group,\n.panel > .panel-collapse > .list-group {\n  margin-bottom: 0;\n}\n.panel > .list-group .list-group-item,\n.panel > .panel-collapse > .list-group .list-group-item {\n  border-width: 1px 0;\n  border-radius: 0;\n}\n.panel > .list-group:first-child .list-group-item:first-child,\n.panel > .panel-collapse > .list-group:first-child .list-group-item:first-child {\n  border-top: 0;\n  border-top-right-radius: 3px;\n  border-top-left-radius: 3px;\n}\n.panel > .list-group:last-child .list-group-item:last-child,\n.panel > .panel-collapse > .list-group:last-child .list-group-item:last-child {\n  border-bottom: 0;\n  border-bottom-right-radius: 3px;\n  border-bottom-left-radius: 3px;\n}\n.panel > .panel-heading + .panel-collapse > .list-group .list-group-item:first-child {\n  border-top-right-radius: 0;\n  border-top-left-radius: 0;\n}\n.panel-heading + .list-group .list-group-item:first-child {\n  border-top-width: 0;\n}\n.list-group + .panel-footer {\n  border-top-width: 0;\n}\n.panel > .table,\n.panel > .table-responsive > .table,\n.panel > .panel-collapse > .table {\n  margin-bottom: 0;\n}\n.panel > .table caption,\n.panel > .table-responsive > .table caption,\n.panel > .panel-collapse > .table caption {\n  padding-left: 15px;\n  padding-right: 15px;\n}\n.panel > .table:first-child,\n.panel > .table-responsive:first-child > .table:first-child {\n  border-top-right-radius: 3px;\n  border-top-left-radius: 3px;\n}\n.panel > .table:first-child > thead:first-child > tr:first-child,\n.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child,\n.panel > .table:first-child > tbody:first-child > tr:first-child,\n.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child {\n  border-top-left-radius: 3px;\n  border-top-right-radius: 3px;\n}\n.panel > .table:first-child > thead:first-child > tr:first-child td:first-child,\n.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:first-child,\n.panel > .table:first-child > tbody:first-child > tr:first-child td:first-child,\n.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:first-child,\n.panel > .table:first-child > thead:first-child > tr:first-child th:first-child,\n.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:first-child,\n.panel > .table:first-child > tbody:first-child > tr:first-child th:first-child,\n.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:first-child {\n  border-top-left-radius: 3px;\n}\n.panel > .table:first-child > thead:first-child > tr:first-child td:last-child,\n.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:last-child,\n.panel > .table:first-child > tbody:first-child > tr:first-child td:last-child,\n.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:last-child,\n.panel > .table:first-child > thead:first-child > tr:first-child th:last-child,\n.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:last-child,\n.panel > .table:first-child > tbody:first-child > tr:first-child th:last-child,\n.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:last-child {\n  border-top-right-radius: 3px;\n}\n.panel > .table:last-child,\n.panel > .table-responsive:last-child > .table:last-child {\n  border-bottom-right-radius: 3px;\n  border-bottom-left-radius: 3px;\n}\n.panel > .table:last-child > tbody:last-child > tr:last-child,\n.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child,\n.panel > .table:last-child > tfoot:last-child > tr:last-child,\n.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child {\n  border-bottom-left-radius: 3px;\n  border-bottom-right-radius: 3px;\n}\n.panel > .table:last-child > tbody:last-child > tr:last-child td:first-child,\n.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:first-child,\n.panel > .table:last-child > tfoot:last-child > tr:last-child td:first-child,\n.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:first-child,\n.panel > .table:last-child > tbody:last-child > tr:last-child th:first-child,\n.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:first-child,\n.panel > .table:last-child > tfoot:last-child > tr:last-child th:first-child,\n.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:first-child {\n  border-bottom-left-radius: 3px;\n}\n.panel > .table:last-child > tbody:last-child > tr:last-child td:last-child,\n.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:last-child,\n.panel > .table:last-child > tfoot:last-child > tr:last-child td:last-child,\n.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:last-child,\n.panel > .table:last-child > tbody:last-child > tr:last-child th:last-child,\n.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:last-child,\n.panel > .table:last-child > tfoot:last-child > tr:last-child th:last-child,\n.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:last-child {\n  border-bottom-right-radius: 3px;\n}\n.panel > .panel-body + .table,\n.panel > .panel-body + .table-responsive,\n.panel > .table + .panel-body,\n.panel > .table-responsive + .panel-body {\n  border-top: 1px solid #eeeeee;\n}\n.panel > .table > tbody:first-child > tr:first-child th,\n.panel > .table > tbody:first-child > tr:first-child td {\n  border-top: 0;\n}\n.panel > .table-bordered,\n.panel > .table-responsive > .table-bordered {\n  border: 0;\n}\n.panel > .table-bordered > thead > tr > th:first-child,\n.panel > .table-responsive > .table-bordered > thead > tr > th:first-child,\n.panel > .table-bordered > tbody > tr > th:first-child,\n.panel > .table-responsive > .table-bordered > tbody > tr > th:first-child,\n.panel > .table-bordered > tfoot > tr > th:first-child,\n.panel > .table-responsive > .table-bordered > tfoot > tr > th:first-child,\n.panel > .table-bordered > thead > tr > td:first-child,\n.panel > .table-responsive > .table-bordered > thead > tr > td:first-child,\n.panel > .table-bordered > tbody > tr > td:first-child,\n.panel > .table-responsive > .table-bordered > tbody > tr > td:first-child,\n.panel > .table-bordered > tfoot > tr > td:first-child,\n.panel > .table-responsive > .table-bordered > tfoot > tr > td:first-child {\n  border-left: 0;\n}\n.panel > .table-bordered > thead > tr > th:last-child,\n.panel > .table-responsive > .table-bordered > thead > tr > th:last-child,\n.panel > .table-bordered > tbody > tr > th:last-child,\n.panel > .table-responsive > .table-bordered > tbody > tr > th:last-child,\n.panel > .table-bordered > tfoot > tr > th:last-child,\n.panel > .table-responsive > .table-bordered > tfoot > tr > th:last-child,\n.panel > .table-bordered > thead > tr > td:last-child,\n.panel > .table-responsive > .table-bordered > thead > tr > td:last-child,\n.panel > .table-bordered > tbody > tr > td:last-child,\n.panel > .table-responsive > .table-bordered > tbody > tr > td:last-child,\n.panel > .table-bordered > tfoot > tr > td:last-child,\n.panel > .table-responsive > .table-bordered > tfoot > tr > td:last-child {\n  border-right: 0;\n}\n.panel > .table-bordered > thead > tr:first-child > td,\n.panel > .table-responsive > .table-bordered > thead > tr:first-child > td,\n.panel > .table-bordered > tbody > tr:first-child > td,\n.panel > .table-responsive > .table-bordered > tbody > tr:first-child > td,\n.panel > .table-bordered > thead > tr:first-child > th,\n.panel > .table-responsive > .table-bordered > thead > tr:first-child > th,\n.panel > .table-bordered > tbody > tr:first-child > th,\n.panel > .table-responsive > .table-bordered > tbody > tr:first-child > th {\n  border-bottom: 0;\n}\n.panel > .table-bordered > tbody > tr:last-child > td,\n.panel > .table-responsive > .table-bordered > tbody > tr:last-child > td,\n.panel > .table-bordered > tfoot > tr:last-child > td,\n.panel > .table-responsive > .table-bordered > tfoot > tr:last-child > td,\n.panel > .table-bordered > tbody > tr:last-child > th,\n.panel > .table-responsive > .table-bordered > tbody > tr:last-child > th,\n.panel > .table-bordered > tfoot > tr:last-child > th,\n.panel > .table-responsive > .table-bordered > tfoot > tr:last-child > th {\n  border-bottom: 0;\n}\n.panel > .table-responsive {\n  border: 0;\n  margin-bottom: 0;\n}\n.panel-group {\n  margin-bottom: 20px;\n}\n.panel-group .panel {\n  margin-bottom: 0;\n  border-radius: 4px;\n}\n.panel-group .panel + .panel {\n  margin-top: 5px;\n}\n.panel-group .panel-heading {\n  border-bottom: 0;\n}\n.panel-group .panel-heading + .panel-collapse > .panel-body,\n.panel-group .panel-heading + .panel-collapse > .list-group {\n  border-top: 1px solid transparent;\n}\n.panel-group .panel-footer {\n  border-top: 0;\n}\n.panel-group .panel-footer + .panel-collapse .panel-body {\n  border-bottom: 1px solid transparent;\n}\n.panel-default {\n  border-color: transparent;\n}\n.panel-default > .panel-heading {\n  color: #333333;\n  background-color: #f5f5f5;\n  border-color: transparent;\n}\n.panel-default > .panel-heading + .panel-collapse > .panel-body {\n  border-top-color: transparent;\n}\n.panel-default > .panel-heading .badge {\n  color: #f5f5f5;\n  background-color: #333333;\n}\n.panel-default > .panel-footer + .panel-collapse > .panel-body {\n  border-bottom-color: transparent;\n}\n.panel-primary {\n  border-color: transparent;\n}\n.panel-primary > .panel-heading {\n  color: #fff;\n  background-color: #158CBA;\n  border-color: transparent;\n}\n.panel-primary > .panel-heading + .panel-collapse > .panel-body {\n  border-top-color: transparent;\n}\n.panel-primary > .panel-heading .badge {\n  color: #158CBA;\n  background-color: #fff;\n}\n.panel-primary > .panel-footer + .panel-collapse > .panel-body {\n  border-bottom-color: transparent;\n}\n.panel-success {\n  border-color: transparent;\n}\n.panel-success > .panel-heading {\n  color: #fff;\n  background-color: #28B62C;\n  border-color: transparent;\n}\n.panel-success > .panel-heading + .panel-collapse > .panel-body {\n  border-top-color: transparent;\n}\n.panel-success > .panel-heading .badge {\n  color: #28B62C;\n  background-color: #fff;\n}\n.panel-success > .panel-footer + .panel-collapse > .panel-body {\n  border-bottom-color: transparent;\n}\n.panel-info {\n  border-color: transparent;\n}\n.panel-info > .panel-heading {\n  color: #fff;\n  background-color: #75CAEB;\n  border-color: transparent;\n}\n.panel-info > .panel-heading + .panel-collapse > .panel-body {\n  border-top-color: transparent;\n}\n.panel-info > .panel-heading .badge {\n  color: #75CAEB;\n  background-color: #fff;\n}\n.panel-info > .panel-footer + .panel-collapse > .panel-body {\n  border-bottom-color: transparent;\n}\n.panel-warning {\n  border-color: transparent;\n}\n.panel-warning > .panel-heading {\n  color: #fff;\n  background-color: #FF851B;\n  border-color: transparent;\n}\n.panel-warning > .panel-heading + .panel-collapse > .panel-body {\n  border-top-color: transparent;\n}\n.panel-warning > .panel-heading .badge {\n  color: #FF851B;\n  background-color: #fff;\n}\n.panel-warning > .panel-footer + .panel-collapse > .panel-body {\n  border-bottom-color: transparent;\n}\n.panel-danger {\n  border-color: transparent;\n}\n.panel-danger > .panel-heading {\n  color: #fff;\n  background-color: #FF4136;\n  border-color: transparent;\n}\n.panel-danger > .panel-heading + .panel-collapse > .panel-body {\n  border-top-color: transparent;\n}\n.panel-danger > .panel-heading .badge {\n  color: #FF4136;\n  background-color: #fff;\n}\n.panel-danger > .panel-footer + .panel-collapse > .panel-body {\n  border-bottom-color: transparent;\n}\n.embed-responsive {\n  position: relative;\n  display: block;\n  height: 0;\n  padding: 0;\n  overflow: hidden;\n}\n.embed-responsive .embed-responsive-item,\n.embed-responsive iframe,\n.embed-responsive embed,\n.embed-responsive object,\n.embed-responsive video {\n  position: absolute;\n  top: 0;\n  left: 0;\n  bottom: 0;\n  height: 100%;\n  width: 100%;\n  border: 0;\n}\n.embed-responsive-16by9 {\n  padding-bottom: 56.25%;\n}\n.embed-responsive-4by3 {\n  padding-bottom: 75%;\n}\n.well {\n  min-height: 20px;\n  padding: 19px;\n  margin-bottom: 20px;\n  background-color: #fafafa;\n  border: 1px solid #e8e8e8;\n  border-radius: 4px;\n  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);\n  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);\n}\n.well blockquote {\n  border-color: #ddd;\n  border-color: rgba(0, 0, 0, 0.15);\n}\n.well-lg {\n  padding: 24px;\n  border-radius: 5px;\n}\n.well-sm {\n  padding: 9px;\n  border-radius: 2px;\n}\n.close {\n  float: right;\n  font-size: 21px;\n  font-weight: bold;\n  line-height: 1;\n  color: #fff;\n  text-shadow: 0 1px 0 #fff;\n  opacity: 0.2;\n  filter: alpha(opacity=20);\n}\n.close:hover,\n.close:focus {\n  color: #fff;\n  text-decoration: none;\n  cursor: pointer;\n  opacity: 0.5;\n  filter: alpha(opacity=50);\n}\nbutton.close {\n  padding: 0;\n  cursor: pointer;\n  background: transparent;\n  border: 0;\n  -webkit-appearance: none;\n}\n.modal-open {\n  overflow: hidden;\n}\n.modal {\n  display: none;\n  overflow: hidden;\n  position: fixed;\n  top: 0;\n  right: 0;\n  bottom: 0;\n  left: 0;\n  z-index: 1050;\n  -webkit-overflow-scrolling: touch;\n  outline: 0;\n}\n.modal.fade .modal-dialog {\n  -webkit-transform: translate(0, -25%);\n  -ms-transform: translate(0, -25%);\n  -o-transform: translate(0, -25%);\n  transform: translate(0, -25%);\n  -webkit-transition: -webkit-transform 0.3s ease-out;\n  -moz-transition: -moz-transform 0.3s ease-out;\n  -o-transition: -o-transform 0.3s ease-out;\n  transition: transform 0.3s ease-out;\n}\n.modal.in .modal-dialog {\n  -webkit-transform: translate(0, 0);\n  -ms-transform: translate(0, 0);\n  -o-transform: translate(0, 0);\n  transform: translate(0, 0);\n}\n.modal-open .modal {\n  overflow-x: hidden;\n  overflow-y: auto;\n}\n.modal-dialog {\n  position: relative;\n  width: auto;\n  margin: 10px;\n}\n.modal-content {\n  position: relative;\n  background-color: #fff;\n  border: 1px solid #eeeeee;\n  border: 1px solid rgba(0, 0, 0, 0.05);\n  border-radius: 5px;\n  -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);\n  box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);\n  background-clip: padding-box;\n  outline: 0;\n}\n.modal-backdrop {\n  position: fixed;\n  top: 0;\n  right: 0;\n  bottom: 0;\n  left: 0;\n  z-index: 1040;\n  background-color: #000;\n}\n.modal-backdrop.fade {\n  opacity: 0;\n  filter: alpha(opacity=0);\n}\n.modal-backdrop.in {\n  opacity: 0.5;\n  filter: alpha(opacity=50);\n}\n.modal-header {\n  padding: 15px;\n  border-bottom: 1px solid #e5e5e5;\n}\n.modal-header .close {\n  margin-top: -2px;\n}\n.modal-title {\n  margin: 0;\n  line-height: 1.42857143;\n}\n.modal-body {\n  position: relative;\n  padding: 20px;\n}\n.modal-footer {\n  padding: 20px;\n  text-align: right;\n  border-top: 1px solid #e5e5e5;\n}\n.modal-footer .btn + .btn {\n  margin-left: 5px;\n  margin-bottom: 0;\n}\n.modal-footer .btn-group .btn + .btn {\n  margin-left: -1px;\n}\n.modal-footer .btn-block + .btn-block {\n  margin-left: 0;\n}\n.modal-scrollbar-measure {\n  position: absolute;\n  top: -9999px;\n  width: 50px;\n  height: 50px;\n  overflow: scroll;\n}\n@media (min-width: 768px) {\n  .modal-dialog {\n    width: 600px;\n    margin: 30px auto;\n  }\n  .modal-content {\n    -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);\n    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);\n  }\n  .modal-sm {\n    width: 300px;\n  }\n}\n@media (min-width: 992px) {\n  .modal-lg {\n    width: 900px;\n  }\n}\n.tooltip {\n  position: absolute;\n  z-index: 1070;\n  display: block;\n  font-family: \"Source Sans Pro\", \"Helvetica Neue\", Helvetica, Arial, sans-serif;\n  font-style: normal;\n  font-weight: normal;\n  letter-spacing: normal;\n  line-break: auto;\n  line-height: 1.42857143;\n  text-align: left;\n  text-align: start;\n  text-decoration: none;\n  text-shadow: none;\n  text-transform: none;\n  white-space: normal;\n  word-break: normal;\n  word-spacing: normal;\n  word-wrap: normal;\n  font-size: 12px;\n  opacity: 0;\n  filter: alpha(opacity=0);\n}\n.tooltip.in {\n  opacity: 0.9;\n  filter: alpha(opacity=90);\n}\n.tooltip.top {\n  margin-top: -3px;\n  padding: 5px 0;\n}\n.tooltip.right {\n  margin-left: 3px;\n  padding: 0 5px;\n}\n.tooltip.bottom {\n  margin-top: 3px;\n  padding: 5px 0;\n}\n.tooltip.left {\n  margin-left: -3px;\n  padding: 0 5px;\n}\n.tooltip-inner {\n  max-width: 200px;\n  padding: 3px 8px;\n  color: #fff;\n  text-align: center;\n  background-color: #000;\n  border-radius: 4px;\n}\n.tooltip-arrow {\n  position: absolute;\n  width: 0;\n  height: 0;\n  border-color: transparent;\n  border-style: solid;\n}\n.tooltip.top .tooltip-arrow {\n  bottom: 0;\n  left: 50%;\n  margin-left: -5px;\n  border-width: 5px 5px 0;\n  border-top-color: #000;\n}\n.tooltip.top-left .tooltip-arrow {\n  bottom: 0;\n  right: 5px;\n  margin-bottom: -5px;\n  border-width: 5px 5px 0;\n  border-top-color: #000;\n}\n.tooltip.top-right .tooltip-arrow {\n  bottom: 0;\n  left: 5px;\n  margin-bottom: -5px;\n  border-width: 5px 5px 0;\n  border-top-color: #000;\n}\n.tooltip.right .tooltip-arrow {\n  top: 50%;\n  left: 0;\n  margin-top: -5px;\n  border-width: 5px 5px 5px 0;\n  border-right-color: #000;\n}\n.tooltip.left .tooltip-arrow {\n  top: 50%;\n  right: 0;\n  margin-top: -5px;\n  border-width: 5px 0 5px 5px;\n  border-left-color: #000;\n}\n.tooltip.bottom .tooltip-arrow {\n  top: 0;\n  left: 50%;\n  margin-left: -5px;\n  border-width: 0 5px 5px;\n  border-bottom-color: #000;\n}\n.tooltip.bottom-left .tooltip-arrow {\n  top: 0;\n  right: 5px;\n  margin-top: -5px;\n  border-width: 0 5px 5px;\n  border-bottom-color: #000;\n}\n.tooltip.bottom-right .tooltip-arrow {\n  top: 0;\n  left: 5px;\n  margin-top: -5px;\n  border-width: 0 5px 5px;\n  border-bottom-color: #000;\n}\n.popover {\n  position: absolute;\n  top: 0;\n  left: 0;\n  z-index: 1060;\n  display: none;\n  max-width: 276px;\n  padding: 1px;\n  font-family: \"Source Sans Pro\", \"Helvetica Neue\", Helvetica, Arial, sans-serif;\n  font-style: normal;\n  font-weight: normal;\n  letter-spacing: normal;\n  line-break: auto;\n  line-height: 1.42857143;\n  text-align: left;\n  text-align: start;\n  text-decoration: none;\n  text-shadow: none;\n  text-transform: none;\n  white-space: normal;\n  word-break: normal;\n  word-spacing: normal;\n  word-wrap: normal;\n  font-size: 14px;\n  background-color: #fff;\n  background-clip: padding-box;\n  border: 1px solid #ccc;\n  border: 1px solid rgba(0, 0, 0, 0.2);\n  border-radius: 5px;\n  -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);\n  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);\n}\n.popover.top {\n  margin-top: -10px;\n}\n.popover.right {\n  margin-left: 10px;\n}\n.popover.bottom {\n  margin-top: 10px;\n}\n.popover.left {\n  margin-left: -10px;\n}\n.popover-title {\n  margin: 0;\n  padding: 8px 14px;\n  font-size: 14px;\n  background-color: #f7f7f7;\n  border-bottom: 1px solid #ebebeb;\n  border-radius: 4px 4px 0 0;\n}\n.popover-content {\n  padding: 9px 14px;\n}\n.popover > .arrow,\n.popover > .arrow:after {\n  position: absolute;\n  display: block;\n  width: 0;\n  height: 0;\n  border-color: transparent;\n  border-style: solid;\n}\n.popover > .arrow {\n  border-width: 11px;\n}\n.popover > .arrow:after {\n  border-width: 10px;\n  content: \"\";\n}\n.popover.top > .arrow {\n  left: 50%;\n  margin-left: -11px;\n  border-bottom-width: 0;\n  border-top-color: #999999;\n  border-top-color: rgba(0, 0, 0, 0.25);\n  bottom: -11px;\n}\n.popover.top > .arrow:after {\n  content: \" \";\n  bottom: 1px;\n  margin-left: -10px;\n  border-bottom-width: 0;\n  border-top-color: #fff;\n}\n.popover.right > .arrow {\n  top: 50%;\n  left: -11px;\n  margin-top: -11px;\n  border-left-width: 0;\n  border-right-color: #999999;\n  border-right-color: rgba(0, 0, 0, 0.25);\n}\n.popover.right > .arrow:after {\n  content: \" \";\n  left: 1px;\n  bottom: -10px;\n  border-left-width: 0;\n  border-right-color: #fff;\n}\n.popover.bottom > .arrow {\n  left: 50%;\n  margin-left: -11px;\n  border-top-width: 0;\n  border-bottom-color: #999999;\n  border-bottom-color: rgba(0, 0, 0, 0.25);\n  top: -11px;\n}\n.popover.bottom > .arrow:after {\n  content: \" \";\n  top: 1px;\n  margin-left: -10px;\n  border-top-width: 0;\n  border-bottom-color: #fff;\n}\n.popover.left > .arrow {\n  top: 50%;\n  right: -11px;\n  margin-top: -11px;\n  border-right-width: 0;\n  border-left-color: #999999;\n  border-left-color: rgba(0, 0, 0, 0.25);\n}\n.popover.left > .arrow:after {\n  content: \" \";\n  right: 1px;\n  border-right-width: 0;\n  border-left-color: #fff;\n  bottom: -10px;\n}\n.carousel {\n  position: relative;\n}\n.carousel-inner {\n  position: relative;\n  overflow: hidden;\n  width: 100%;\n}\n.carousel-inner > .item {\n  display: none;\n  position: relative;\n  -webkit-transition: 0.6s ease-in-out left;\n  -o-transition: 0.6s ease-in-out left;\n  transition: 0.6s ease-in-out left;\n}\n.carousel-inner > .item > img,\n.carousel-inner > .item > a > img {\n  line-height: 1;\n}\n@media all and (transform-3d), (-webkit-transform-3d) {\n  .carousel-inner > .item {\n    -webkit-transition: -webkit-transform 0.6s ease-in-out;\n    -moz-transition: -moz-transform 0.6s ease-in-out;\n    -o-transition: -o-transform 0.6s ease-in-out;\n    transition: transform 0.6s ease-in-out;\n    -webkit-backface-visibility: hidden;\n    -moz-backface-visibility: hidden;\n    backface-visibility: hidden;\n    -webkit-perspective: 1000px;\n    -moz-perspective: 1000px;\n    perspective: 1000px;\n  }\n  .carousel-inner > .item.next,\n  .carousel-inner > .item.active.right {\n    -webkit-transform: translate3d(100%, 0, 0);\n    transform: translate3d(100%, 0, 0);\n    left: 0;\n  }\n  .carousel-inner > .item.prev,\n  .carousel-inner > .item.active.left {\n    -webkit-transform: translate3d(-100%, 0, 0);\n    transform: translate3d(-100%, 0, 0);\n    left: 0;\n  }\n  .carousel-inner > .item.next.left,\n  .carousel-inner > .item.prev.right,\n  .carousel-inner > .item.active {\n    -webkit-transform: translate3d(0, 0, 0);\n    transform: translate3d(0, 0, 0);\n    left: 0;\n  }\n}\n.carousel-inner > .active,\n.carousel-inner > .next,\n.carousel-inner > .prev {\n  display: block;\n}\n.carousel-inner > .active {\n  left: 0;\n}\n.carousel-inner > .next,\n.carousel-inner > .prev {\n  position: absolute;\n  top: 0;\n  width: 100%;\n}\n.carousel-inner > .next {\n  left: 100%;\n}\n.carousel-inner > .prev {\n  left: -100%;\n}\n.carousel-inner > .next.left,\n.carousel-inner > .prev.right {\n  left: 0;\n}\n.carousel-inner > .active.left {\n  left: -100%;\n}\n.carousel-inner > .active.right {\n  left: 100%;\n}\n.carousel-control {\n  position: absolute;\n  top: 0;\n  left: 0;\n  bottom: 0;\n  width: 15%;\n  opacity: 0.5;\n  filter: alpha(opacity=50);\n  font-size: 20px;\n  color: #fff;\n  text-align: center;\n  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);\n  background-color: rgba(0, 0, 0, 0);\n}\n.carousel-control.left {\n  background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.0001) 100%);\n  background-image: -o-linear-gradient(left, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.0001) 100%);\n  background-image: linear-gradient(to right, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.0001) 100%);\n  background-repeat: repeat-x;\n  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);\n}\n.carousel-control.right {\n  left: auto;\n  right: 0;\n  background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, 0.0001) 0%, rgba(0, 0, 0, 0.5) 100%);\n  background-image: -o-linear-gradient(left, rgba(0, 0, 0, 0.0001) 0%, rgba(0, 0, 0, 0.5) 100%);\n  background-image: linear-gradient(to right, rgba(0, 0, 0, 0.0001) 0%, rgba(0, 0, 0, 0.5) 100%);\n  background-repeat: repeat-x;\n  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=1);\n}\n.carousel-control:hover,\n.carousel-control:focus {\n  outline: 0;\n  color: #fff;\n  text-decoration: none;\n  opacity: 0.9;\n  filter: alpha(opacity=90);\n}\n.carousel-control .icon-prev,\n.carousel-control .icon-next,\n.carousel-control .glyphicon-chevron-left,\n.carousel-control .glyphicon-chevron-right {\n  position: absolute;\n  top: 50%;\n  margin-top: -10px;\n  z-index: 5;\n  display: inline-block;\n}\n.carousel-control .icon-prev,\n.carousel-control .glyphicon-chevron-left {\n  left: 50%;\n  margin-left: -10px;\n}\n.carousel-control .icon-next,\n.carousel-control .glyphicon-chevron-right {\n  right: 50%;\n  margin-right: -10px;\n}\n.carousel-control .icon-prev,\n.carousel-control .icon-next {\n  width: 20px;\n  height: 20px;\n  line-height: 1;\n  font-family: serif;\n}\n.carousel-control .icon-prev:before {\n  content: '\\2039';\n}\n.carousel-control .icon-next:before {\n  content: '\\203A';\n}\n.carousel-indicators {\n  position: absolute;\n  bottom: 10px;\n  left: 50%;\n  z-index: 15;\n  width: 60%;\n  margin-left: -30%;\n  padding-left: 0;\n  list-style: none;\n  text-align: center;\n}\n.carousel-indicators li {\n  display: inline-block;\n  width: 10px;\n  height: 10px;\n  margin: 1px;\n  text-indent: -999px;\n  border: 1px solid #fff;\n  border-radius: 10px;\n  cursor: pointer;\n  background-color: #000 \\9;\n  background-color: rgba(0, 0, 0, 0);\n}\n.carousel-indicators .active {\n  margin: 0;\n  width: 12px;\n  height: 12px;\n  background-color: #fff;\n}\n.carousel-caption {\n  position: absolute;\n  left: 15%;\n  right: 15%;\n  bottom: 20px;\n  z-index: 10;\n  padding-top: 20px;\n  padding-bottom: 20px;\n  color: #fff;\n  text-align: center;\n  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);\n}\n.carousel-caption .btn {\n  text-shadow: none;\n}\n@media screen and (min-width: 768px) {\n  .carousel-control .glyphicon-chevron-left,\n  .carousel-control .glyphicon-chevron-right,\n  .carousel-control .icon-prev,\n  .carousel-control .icon-next {\n    width: 30px;\n    height: 30px;\n    margin-top: -10px;\n    font-size: 30px;\n  }\n  .carousel-control .glyphicon-chevron-left,\n  .carousel-control .icon-prev {\n    margin-left: -10px;\n  }\n  .carousel-control .glyphicon-chevron-right,\n  .carousel-control .icon-next {\n    margin-right: -10px;\n  }\n  .carousel-caption {\n    left: 20%;\n    right: 20%;\n    padding-bottom: 30px;\n  }\n  .carousel-indicators {\n    bottom: 20px;\n  }\n}\n.clearfix:before,\n.clearfix:after,\n.dl-horizontal dd:before,\n.dl-horizontal dd:after,\n.container:before,\n.container:after,\n.container-fluid:before,\n.container-fluid:after,\n.row:before,\n.row:after,\n.form-horizontal .form-group:before,\n.form-horizontal .form-group:after,\n.btn-toolbar:before,\n.btn-toolbar:after,\n.btn-group-vertical > .btn-group:before,\n.btn-group-vertical > .btn-group:after,\n.nav:before,\n.nav:after,\n.navbar:before,\n.navbar:after,\n.navbar-header:before,\n.navbar-header:after,\n.navbar-collapse:before,\n.navbar-collapse:after,\n.pager:before,\n.pager:after,\n.panel-body:before,\n.panel-body:after,\n.modal-header:before,\n.modal-header:after,\n.modal-footer:before,\n.modal-footer:after {\n  content: \" \";\n  display: table;\n}\n.clearfix:after,\n.dl-horizontal dd:after,\n.container:after,\n.container-fluid:after,\n.row:after,\n.form-horizontal .form-group:after,\n.btn-toolbar:after,\n.btn-group-vertical > .btn-group:after,\n.nav:after,\n.navbar:after,\n.navbar-header:after,\n.navbar-collapse:after,\n.pager:after,\n.panel-body:after,\n.modal-header:after,\n.modal-footer:after {\n  clear: both;\n}\n.center-block {\n  display: block;\n  margin-left: auto;\n  margin-right: auto;\n}\n.pull-right {\n  float: right !important;\n}\n.pull-left {\n  float: left !important;\n}\n.hide {\n  display: none !important;\n}\n.show {\n  display: block !important;\n}\n.invisible {\n  visibility: hidden;\n}\n.text-hide {\n  font: 0/0 a;\n  color: transparent;\n  text-shadow: none;\n  background-color: transparent;\n  border: 0;\n}\n.hidden {\n  display: none !important;\n}\n.affix {\n  position: fixed;\n}\n@-ms-viewport {\n  width: device-width;\n}\n.visible-xs,\n.visible-sm,\n.visible-md,\n.visible-lg {\n  display: none !important;\n}\n.visible-xs-block,\n.visible-xs-inline,\n.visible-xs-inline-block,\n.visible-sm-block,\n.visible-sm-inline,\n.visible-sm-inline-block,\n.visible-md-block,\n.visible-md-inline,\n.visible-md-inline-block,\n.visible-lg-block,\n.visible-lg-inline,\n.visible-lg-inline-block {\n  display: none !important;\n}\n@media (max-width: 767px) {\n  .visible-xs {\n    display: block !important;\n  }\n  table.visible-xs {\n    display: table !important;\n  }\n  tr.visible-xs {\n    display: table-row !important;\n  }\n  th.visible-xs,\n  td.visible-xs {\n    display: table-cell !important;\n  }\n}\n@media (max-width: 767px) {\n  .visible-xs-block {\n    display: block !important;\n  }\n}\n@media (max-width: 767px) {\n  .visible-xs-inline {\n    display: inline !important;\n  }\n}\n@media (max-width: 767px) {\n  .visible-xs-inline-block {\n    display: inline-block !important;\n  }\n}\n@media (min-width: 768px) and (max-width: 991px) {\n  .visible-sm {\n    display: block !important;\n  }\n  table.visible-sm {\n    display: table !important;\n  }\n  tr.visible-sm {\n    display: table-row !important;\n  }\n  th.visible-sm,\n  td.visible-sm {\n    display: table-cell !important;\n  }\n}\n@media (min-width: 768px) and (max-width: 991px) {\n  .visible-sm-block {\n    display: block !important;\n  }\n}\n@media (min-width: 768px) and (max-width: 991px) {\n  .visible-sm-inline {\n    display: inline !important;\n  }\n}\n@media (min-width: 768px) and (max-width: 991px) {\n  .visible-sm-inline-block {\n    display: inline-block !important;\n  }\n}\n@media (min-width: 992px) and (max-width: 1199px) {\n  .visible-md {\n    display: block !important;\n  }\n  table.visible-md {\n    display: table !important;\n  }\n  tr.visible-md {\n    display: table-row !important;\n  }\n  th.visible-md,\n  td.visible-md {\n    display: table-cell !important;\n  }\n}\n@media (min-width: 992px) and (max-width: 1199px) {\n  .visible-md-block {\n    display: block !important;\n  }\n}\n@media (min-width: 992px) and (max-width: 1199px) {\n  .visible-md-inline {\n    display: inline !important;\n  }\n}\n@media (min-width: 992px) and (max-width: 1199px) {\n  .visible-md-inline-block {\n    display: inline-block !important;\n  }\n}\n@media (min-width: 1200px) {\n  .visible-lg {\n    display: block !important;\n  }\n  table.visible-lg {\n    display: table !important;\n  }\n  tr.visible-lg {\n    display: table-row !important;\n  }\n  th.visible-lg,\n  td.visible-lg {\n    display: table-cell !important;\n  }\n}\n@media (min-width: 1200px) {\n  .visible-lg-block {\n    display: block !important;\n  }\n}\n@media (min-width: 1200px) {\n  .visible-lg-inline {\n    display: inline !important;\n  }\n}\n@media (min-width: 1200px) {\n  .visible-lg-inline-block {\n    display: inline-block !important;\n  }\n}\n@media (max-width: 767px) {\n  .hidden-xs {\n    display: none !important;\n  }\n}\n@media (min-width: 768px) and (max-width: 991px) {\n  .hidden-sm {\n    display: none !important;\n  }\n}\n@media (min-width: 992px) and (max-width: 1199px) {\n  .hidden-md {\n    display: none !important;\n  }\n}\n@media (min-width: 1200px) {\n  .hidden-lg {\n    display: none !important;\n  }\n}\n.visible-print {\n  display: none !important;\n}\n@media print {\n  .visible-print {\n    display: block !important;\n  }\n  table.visible-print {\n    display: table !important;\n  }\n  tr.visible-print {\n    display: table-row !important;\n  }\n  th.visible-print,\n  td.visible-print {\n    display: table-cell !important;\n  }\n}\n.visible-print-block {\n  display: none !important;\n}\n@media print {\n  .visible-print-block {\n    display: block !important;\n  }\n}\n.visible-print-inline {\n  display: none !important;\n}\n@media print {\n  .visible-print-inline {\n    display: inline !important;\n  }\n}\n.visible-print-inline-block {\n  display: none !important;\n}\n@media print {\n  .visible-print-inline-block {\n    display: inline-block !important;\n  }\n}\n@media print {\n  .hidden-print {\n    display: none !important;\n  }\n}\n.navbar {\n  border-width: 0 1px 4px 1px;\n}\n.btn {\n  padding: 9px 12px 7px;\n  border-width: 0 1px 4px 1px;\n  font-size: 12px;\n  font-weight: bold;\n  text-transform: uppercase;\n}\n.btn:hover {\n  margin-top: 1px;\n  border-bottom-width: 3px;\n}\n.btn:active {\n  margin-top: 2px;\n  border-bottom-width: 2px;\n  -webkit-box-shadow: none;\n  box-shadow: none;\n}\n.btn-lg,\n.btn-group-lg > .btn {\n  padding: 15px 16px 13px;\n  line-height: 15px;\n}\n.btn-sm,\n.btn-group-sm > .btn {\n  padding: 6px 10px 4px;\n}\n.btn-xs,\n.btn-group-xs > .btn {\n  padding: 3px 5px 1px;\n}\n.btn-default:hover,\n.btn-default:focus,\n.btn-group.open .dropdown-toggle.btn-default {\n  background-color: #eeeeee;\n  border-color: #e2e2e2;\n}\n.btn-primary:hover,\n.btn-primary:focus,\n.btn-group.open .dropdown-toggle.btn-primary {\n  background-color: #158CBA;\n  border-color: #127ba3;\n}\n.btn-success:hover,\n.btn-success:focus,\n.btn-group.open .dropdown-toggle.btn-success {\n  background-color: #28B62C;\n  border-color: #23a127;\n}\n.btn-info:hover,\n.btn-info:focus,\n.btn-group.open .dropdown-toggle.btn-info {\n  background-color: #75CAEB;\n  border-color: #5fc1e8;\n}\n.btn-warning:hover,\n.btn-warning:focus,\n.btn-group.open .dropdown-toggle.btn-warning {\n  background-color: #FF851B;\n  border-color: #ff7701;\n}\n.btn-danger:hover,\n.btn-danger:focus,\n.btn-group.open .dropdown-toggle.btn-danger {\n  background-color: #FF4136;\n  border-color: #ff291c;\n}\n.btn-group.open .dropdown-toggle {\n  -webkit-box-shadow: none;\n  box-shadow: none;\n}\n.navbar-btn:hover {\n  margin-top: 8px;\n}\n.navbar-btn:active {\n  margin-top: 9px;\n}\n.navbar-btn.btn-sm:hover {\n  margin-top: 11px;\n}\n.navbar-btn.btn-sm:active {\n  margin-top: 12px;\n}\n.navbar-btn.btn-xs:hover {\n  margin-top: 15px;\n}\n.navbar-btn.btn-xs:active {\n  margin-top: 16px;\n}\n.btn-group-vertical .btn + .btn:hover {\n  border-top-width: 1px;\n}\n.btn-group-vertical .btn + .btn:active {\n  border-top-width: 2px;\n}\n.text-primary,\n.text-primary:hover {\n  color: #158CBA;\n}\n.text-success,\n.text-success:hover {\n  color: #28B62C;\n}\n.text-danger,\n.text-danger:hover {\n  color: #FF4136;\n}\n.text-warning,\n.text-warning:hover {\n  color: #FF851B;\n}\n.text-info,\n.text-info:hover {\n  color: #75CAEB;\n}\ntable a:not(.btn),\n.table a:not(.btn) {\n  text-decoration: underline;\n}\ntable .dropdown-menu a,\n.table .dropdown-menu a {\n  text-decoration: none;\n}\ntable .success,\n.table .success,\ntable .warning,\n.table .warning,\ntable .danger,\n.table .danger,\ntable .info,\n.table .info {\n  color: #fff;\n}\ntable .success a:not(.btn),\n.table .success a:not(.btn),\ntable .warning a:not(.btn),\n.table .warning a:not(.btn),\ntable .danger a:not(.btn),\n.table .danger a:not(.btn),\ntable .info a:not(.btn),\n.table .info a:not(.btn) {\n  color: #fff;\n}\ntable:not(.table-bordered) > thead > tr > th,\n.table:not(.table-bordered) > thead > tr > th,\ntable:not(.table-bordered) > tbody > tr > th,\n.table:not(.table-bordered) > tbody > tr > th,\ntable:not(.table-bordered) > tfoot > tr > th,\n.table:not(.table-bordered) > tfoot > tr > th,\ntable:not(.table-bordered) > thead > tr > td,\n.table:not(.table-bordered) > thead > tr > td,\ntable:not(.table-bordered) > tbody > tr > td,\n.table:not(.table-bordered) > tbody > tr > td,\ntable:not(.table-bordered) > tfoot > tr > td,\n.table:not(.table-bordered) > tfoot > tr > td {\n  border-color: transparent;\n}\n.form-control {\n  -webkit-box-shadow: inset 0 2px 0 rgba(0, 0, 0, 0.075);\n  box-shadow: inset 0 2px 0 rgba(0, 0, 0, 0.075);\n}\nlabel {\n  font-weight: normal;\n}\n.has-warning .help-block,\n.has-warning .control-label,\n.has-warning .radio,\n.has-warning .checkbox,\n.has-warning .radio-inline,\n.has-warning .checkbox-inline,\n.has-warning.radio label,\n.has-warning.checkbox label,\n.has-warning.radio-inline label,\n.has-warning.checkbox-inline label,\n.has-warning .form-control-feedback {\n  color: #FF851B;\n}\n.has-warning .form-control,\n.has-warning .form-control:focus {\n  border: 1px solid #FF851B;\n  -webkit-box-shadow: inset 0 2px 0 rgba(0, 0, 0, 0.075);\n  box-shadow: inset 0 2px 0 rgba(0, 0, 0, 0.075);\n}\n.has-warning .input-group-addon {\n  border: 1px solid #FF851B;\n}\n.has-error .help-block,\n.has-error .control-label,\n.has-error .radio,\n.has-error .checkbox,\n.has-error .radio-inline,\n.has-error .checkbox-inline,\n.has-error.radio label,\n.has-error.checkbox label,\n.has-error.radio-inline label,\n.has-error.checkbox-inline label,\n.has-error .form-control-feedback {\n  color: #FF4136;\n}\n.has-error .form-control,\n.has-error .form-control:focus {\n  border: 1px solid #FF4136;\n  -webkit-box-shadow: inset 0 2px 0 rgba(0, 0, 0, 0.075);\n  box-shadow: inset 0 2px 0 rgba(0, 0, 0, 0.075);\n}\n.has-error .input-group-addon {\n  border: 1px solid #FF4136;\n}\n.has-success .help-block,\n.has-success .control-label,\n.has-success .radio,\n.has-success .checkbox,\n.has-success .radio-inline,\n.has-success .checkbox-inline,\n.has-success.radio label,\n.has-success.checkbox label,\n.has-success.radio-inline label,\n.has-success.checkbox-inline label,\n.has-success .form-control-feedback {\n  color: #28B62C;\n}\n.has-success .form-control,\n.has-success .form-control:focus {\n  border: 1px solid #28B62C;\n  -webkit-box-shadow: inset 0 2px 0 rgba(0, 0, 0, 0.075);\n  box-shadow: inset 0 2px 0 rgba(0, 0, 0, 0.075);\n}\n.has-success .input-group-addon {\n  border: 1px solid #28B62C;\n}\n.nav .open > a,\n.nav .open > a:hover,\n.nav .open > a:focus {\n  border-color: transparent;\n}\n.nav-tabs > li > a {\n  margin-top: 6px;\n  border-color: #e7e7e7;\n  color: #333333;\n  -webkit-transition: all 0.2s ease-in-out;\n  -o-transition: all 0.2s ease-in-out;\n  transition: all 0.2s ease-in-out;\n}\n.nav-tabs > li > a:hover,\n.nav-tabs > li > a:focus,\n.nav-tabs > li.active > a,\n.nav-tabs > li.active > a:hover,\n.nav-tabs > li.active > a:focus,\n.nav-tabs .open > a,\n.nav-tabs .open > a:hover,\n.nav-tabs .open > a:focus {\n  padding-bottom: 16px;\n  margin-top: 0;\n}\n.nav-tabs .open > a,\n.nav-tabs .open > a:hover,\n.nav-tabs .open > a:focus {\n  border-color: #e7e7e7;\n}\n.nav-tabs > li.disabled > a:hover,\n.nav-tabs > li.disabled > a:focus {\n  padding-top: 10px;\n  padding-bottom: 10px;\n  margin-top: 6px;\n}\n.nav-tabs.nav-justified > li {\n  vertical-align: bottom;\n}\n.dropdown-menu {\n  margin-top: 0;\n  border-width: 0 1px 4px 1px;\n  border-top-width: 1px;\n  -webkit-box-shadow: none;\n  box-shadow: none;\n}\n.breadcrumb {\n  border-color: #ededed;\n  border-style: solid;\n  border-width: 0 1px 4px 1px;\n}\n.pagination > li > a,\n.pager > li > a,\n.pagination > li > span,\n.pager > li > span {\n  position: relative;\n  top: 0;\n  border-width: 0 1px 4px 1px;\n  color: #555555;\n  font-size: 12px;\n  font-weight: bold;\n  text-transform: uppercase;\n}\n.pagination > li > a:hover,\n.pager > li > a:hover,\n.pagination > li > span:hover,\n.pager > li > span:hover {\n  top: 1px;\n  border-bottom-width: 3px;\n}\n.pagination > li > a:active,\n.pager > li > a:active,\n.pagination > li > span:active,\n.pager > li > span:active {\n  top: 2px;\n  border-bottom-width: 2px;\n}\n.pagination > .disabled > a:hover,\n.pager > .disabled > a:hover,\n.pagination > .disabled > span:hover,\n.pager > .disabled > span:hover {\n  top: 0;\n  border-width: 0 1px 4px 1px;\n}\n.pagination > .disabled > a:active,\n.pager > .disabled > a:active,\n.pagination > .disabled > span:active,\n.pager > .disabled > span:active {\n  top: 0;\n  border-width: 0 1px 4px 1px;\n}\n.pager > li > a,\n.pager > li > span,\n.pager > .disabled > a,\n.pager > .disabled > span,\n.pager > li > a:hover,\n.pager > li > span:hover,\n.pager > .disabled > a:hover,\n.pager > .disabled > span:hover,\n.pager > li > a:active,\n.pager > li > span:active,\n.pager > .disabled > a:active,\n.pager > .disabled > span:active {\n  border-left-width: 2px;\n  border-right-width: 2px;\n}\n.close {\n  color: #fff;\n  text-decoration: none;\n  opacity: 0.4;\n}\n.close:hover,\n.close:focus {\n  color: #fff;\n  opacity: 1;\n}\n.alert {\n  border-width: 0 1px 4px 1px;\n}\n.alert .alert-link {\n  font-weight: normal;\n  color: #fff;\n  text-decoration: underline;\n}\n.label {\n  font-weight: normal;\n}\n.progress {\n  border: 1px solid #e7e7e7;\n  -webkit-box-shadow: inset 0 2px 0 rgba(0, 0, 0, 0.1);\n  box-shadow: inset 0 2px 0 rgba(0, 0, 0, 0.1);\n}\n.progress-bar {\n  -webkit-box-shadow: inset 0 -4px 0 rgba(0, 0, 0, 0.15);\n  box-shadow: inset 0 -4px 0 rgba(0, 0, 0, 0.15);\n}\n.well {\n  border: 1px solid #e7e7e7;\n  -webkit-box-shadow: inset 0 2px 0 rgba(0, 0, 0, 0.05);\n  box-shadow: inset 0 2px 0 rgba(0, 0, 0, 0.05);\n}\na.list-group-item.active,\na.list-group-item.active:hover,\na.list-group-item.active:focus {\n  border-color: #eeeeee;\n}\na.list-group-item-success.active {\n  background-color: #28B62C;\n}\na.list-group-item-success.active:hover,\na.list-group-item-success.active:focus {\n  background-color: #23a127;\n}\na.list-group-item-warning.active {\n  background-color: #FF851B;\n}\na.list-group-item-warning.active:hover,\na.list-group-item-warning.active:focus {\n  background-color: #ff7701;\n}\na.list-group-item-danger.active {\n  background-color: #FF4136;\n}\na.list-group-item-danger.active:hover,\na.list-group-item-danger.active:focus {\n  background-color: #ff291c;\n}\n.jumbotron {\n  border: 1px solid #e7e7e7;\n  -webkit-box-shadow: inset 0 2px 0 rgba(0, 0, 0, 0.05);\n  box-shadow: inset 0 2px 0 rgba(0, 0, 0, 0.05);\n}\n.panel {\n  border: 1px solid #e7e7e7;\n  border-width: 0 1px 4px 1px;\n}\n.panel-default .close {\n  color: #555555;\n}\n.modal .close {\n  color: #555555;\n}\n.popover {\n  color: #555555;\n}\n", ""]);

	// exports


/***/ }

/******/ });