/**
 * @version    $Id$
 * @package    SUN Framework
 * @subpackage Layout Builder
 * @author     JoomlaShine Team <support@joomlashine.com>
 * @copyright  Copyright (C) 2012 JoomlaShine.com. All Rights Reserved.
 * @license    GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Websites: http://www.joomlashine.com
 * Technical Support:  Feedback - http://www.joomlashine.com/contact-us/get-support.html
 */
var SunBlank = {

	_templateParams:		{},

	initOnDomReady: function()
	{
		// Setup event to update submenu position
		(function($) {

			var RtlMenu = false;
			if($("body").hasClass("sunfw-direction-rtl"))
	        RtlMenu = true;
	    else {
	        RtlMenu = false;
	    }

			SunFwUtils.setSubmenuPosition(RtlMenu,$);

		})(jQuery);

		// Check megamenu is caret

		(function($) {
			
			if($('.sunfw-megamenu-sub-menu ul.nav li.parent, ul.menu.menu-side li.parent').length) {

				$('.sunfw-megamenu-sub-menu ul.nav:not(.sub-menu) li.parent > a, .sunfw-megamenu-sub-menu ul.nav:not(.sub-menu) li.parent > span.nav-header, ul.menu.menu-side li.parent > a, ul.menu.menu-side li.parent > span.nav-header').append('<span class="caret"></span>');
			}

		})(jQuery);

		// Fixed Menu Open Bootstraps
		(function($) {

			$('.sunfw-menu .caret').on("click", function(e){

				$(this).toggleClass('open');
				$(this).parent().next('ul').toggleClass('menuShow');
				e.stopPropagation();
				e.preventDefault();

			});

		})(jQuery);
/* 		(function($) {

			if($('.sunfw-megamenu-sub-menu ul.nav li.parent').length) {

				$('.sunfw-megamenu-sub-menu ul.nav li.parent > a, .sunfw-megamenu-sub-menu ul.nav li.parent > span.nav-header').append('<span class="caret"></span>');

				$('.sunfw-megamenu-sub-menu ul.nav li.parent .caret').click(function (e) {
					$(this).toggleClass('open');
					console.log($(this).parent);
					$(this).parent().next('ul').toggleClass('menuShow');
					e.stopPropagation();
					e.preventDefault();
				});
			}

		})(jQuery) */
		
		
		//Check menu side is caret
		(function($) {
			if($('ul.menu-sidemenu li.parent').length) {
				$('ul.menu-sidemenu li.parent > a,ul.menu-sidemenu li.parent > span.nav-header').append('<span class="caret"></span>');
				$('ul.menu-sidemenu li.parent .caret').click(function (e) {
					$(this).toggleClass('open');
					console.log($(this).parent);
					$(this).parent().next('ul').toggleClass('show-sidemenu');
					e.stopPropagation();
					e.preventDefault();
				});
			}
		})(jQuery);

		// Fixed Menu Open Bootstrap
/* 		(function($) {

			if($('.sunfw-megamenu-sub-menu .modulecontainer ul li.parent a').length > 0 ) {

				$('.sunfw-megamenu-sub-menu .modulecontainer ul li.parent > a').append('<span class="caret"></span>');

				$('.sunfw-megamenu-sub-menu .modulecontainer ul li.parent a span').on("click", function(e){
					$(this).parent().next('ul').toggleClass('menuShow');
					e.stopPropagation();
					e.preventDefault();
				});
			}

			$('.sunfw-menu li.dropdown-submenu a.dropdown-toggle .caret, .sunfw-menu li.megamenu a.dropdown-toggle .caret, ul.sunfw-tpl-menu > li.megamenu ul.sunfw-megamenu-sub-menu .caret').on("click", function(e){
				$(this).toggleClass('open');
				$(this).parent().next('ul').toggleClass('menuShow');
				e.stopPropagation();
				e.preventDefault();

			});

		})(jQuery); */

		// Animation Menu when hover
		(function($) {
			var timer_out;
			timer_out = setTimeout(function() {
                $('.sunfwMenuSlide .dropdown-submenu, .sunfwMenuSlide .megamenu').hover(
			        function() {
			            $('.sunfw-megamenu-sub-menu, .dropdown-menu', this).stop( true, true ).slideDown('fast');
			        },
			        function() {
			            $('.sunfw-megamenu-sub-menu, .dropdown-menu', this).stop( true, true ).slideUp('fast');
			        }
			    );

			    $('.sunfwMenuFading .dropdown-submenu, .sunfwMenuFading .megamenu').hover(
			        function() {
			            $('.sunfw-megamenu-sub-menu, .dropdown-menu', this).stop( true, true ).fadeIn('fast');
			        },
			        function() {
			            $('.sunfw-megamenu-sub-menu, .dropdown-menu', this).stop( true, true ).fadeOut('fast');
			        }
			    );
            }, 100);

		})(jQuery);

		//Scroll Top
		(function($) {
			if($('.sunfw-scrollup').length) {
			    $(window).scroll(function() {
			        if ($(this).scrollTop() > 500) {
			            $('.sunfw-scrollup').fadeIn();
			        } else {
			            $('.sunfw-scrollup').fadeOut();
			        }
			    });

			    $('.sunfw-scrollup').click(function(e) {
			    	e.preventDefault();
			        $("html, body").animate({
			            scrollTop: 0
			        }, 600);
			        return false;
			    });
			}
		})(jQuery);

		//Search box when click search button
		(function($) {
			if($('.module-style.search-menu').length) {
				$('.module-style.search-menu .box-title').click(function () {
					$(this).parents('.search-menu').toggleClass('search-menu-active');
				});
			}
		})(jQuery);

	},

	initOnLoad: function()
	{
		//console.log('initOnLoad');
	},

	stickyMenu: function (element) {
		var header       = '.sunfw-sticky';
		var stickyNavTop = jQuery(header).offset().top;

		var stickyNav = function () {

			var scrollTop    = jQuery(document).scrollTop();

			if (scrollTop > stickyNavTop) {

				jQuery(header).addClass('sunfw-sticky-open');

			} else {

				jQuery(header).removeClass('sunfw-sticky-open');

			}
		};

		stickyNav();

		jQuery(window).scroll(function() {
			stickyNav();
		});
	},



	initTemplate: function(templateParams)
	{
		// Store template parameters
		_templateParams = templateParams;

		jQuery(document).ready(function ()
		{
			SunBlank.initOnDomReady();
		});

		jQuery(window).load(function ()
		{
			SunBlank.initOnLoad();

			// Check sticky
			if( jQuery('.sunfw-section').hasClass('sunfw-sticky')) {
				SunBlank.stickyMenu();
			}

		});
	}
}