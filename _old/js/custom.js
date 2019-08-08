/**
Core script to handle the entire theme and core functions
**/
var Construct = function(){
	
	var homeSearch = function() {
		'use strict';
		/* top search in header on click function */
		var quikSearch = jQuery("#quik-search-btn");
		var quikSearchRemove = jQuery("#quik-search-remove");
		
		quikSearch.on('click',function() {
			jQuery('.dez-quik-search').animate({'width': '100%' });
			jQuery('.dez-quik-search').delay(500).css({'left': '0'  });
		});
		
		quikSearchRemove.on('click',function() {
			jQuery('.dez-quik-search').animate({'width': '0%' ,  'right': '0'  });
			jQuery('.dez-quik-search').css({'left': 'auto'  });
		});	
		/* top search in header on click function End*/
	}
	
	var MagnificPopup = function(){
		'use strict';	
		/* magnificPopup function */
		jQuery('.mfp-gallery').magnificPopup({
			delegate: '.mfp-link',
			type: 'image',
			tLoading: 'Loading image #%curr%...',
			mainClass: 'mfp-img-mobile',
			gallery: {
				enabled: true,
				navigateByImgClick: true,
				preload: [0,1] // Will preload 0 - before current, and 1 after the current image
			},
			image: {
				tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
				titleSrc: function(item) {
					return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
				}
			}
		});
		/* magnificPopup function end */
		
		/* magnificPopup for paly video function */		
		jQuery('.video').magnificPopup({
			type: 'iframe',
			iframe: {
				markup: '<div class="mfp-iframe-scaler">'+
						 '<div class="mfp-close"></div>'+
						 '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
						 '<div class="mfp-title">Some caption</div>'+
						 '</div>'
			},
			callbacks: {
				markupParse: function(template, values, item) {
					values.title = item.el.attr('title');
				}
			}
		});
		/* magnificPopup for paly video function end*/
		
	}
	
	var scrollTop = function (){
		'use strict';
		var scrollTop = jQuery("button.scroltop");
		/* page scroll top on click function */	
		scrollTop.on('click',function() {
			jQuery("html, body").animate({
				scrollTop: 0
			}, 1000);
			return false;
		})

		jQuery(window).bind("scroll", function() {
			var scroll = jQuery(window).scrollTop();
			if (scroll > 900) {
				jQuery("button.scroltop").fadeIn(1000);
			} else {
				jQuery("button.scroltop").fadeOut(1000);
			}
		});
		/* page scroll top on click function end*/
	}
	
	var handelAccordian = function(){
		/* accodin open close icon change */	 	
		jQuery('#accordion').on('hidden.bs.collapse', function(e){
			jQuery(e.target)
				.prev('.panel-heading')
				.find("i.indicator")
				.toggleClass('glyphicon-minus glyphicon-plus');
		});
		jQuery('#accordion').on('shown.bs.collapse', function(e){
			jQuery(e.target)
				.prev('.panel-heading')
				.find("i.indicator")
				.toggleClass('glyphicon-minus glyphicon-plus');
		});
		/* accodin open close icon change end */
	}	 	
	
	var handelPlaceholder = function(){
		/* input placeholder for ie9 & ie8 & ie7 */
		jQuery.support.placeholder = ('placeholder' in document.createElement('input'));
		/* input placeholder for ie9 & ie8 & ie7 end*/
		
		/*fix for IE7 and IE8  */
		if (!jQuery.support.placeholder) {
			jQuery("[placeholder]").focus(function () {
				if (jQuery(this).val() == jQuery(this).attr("placeholder")) jQuery(this).val("");
			}).blur(function () {
				if (jQuery(this).val() == "") jQuery(this).val(jQuery(this).attr("placeholder"));
			}).blur();

			jQuery("[placeholder]").parents("form").submit(function () {
				jQuery(this).find('[placeholder]').each(function() {
					if (jQuery(this).val() == jQuery(this).attr("placeholder")) {
						 jQuery(this).val("");
					}
				});
			});
		}
		/*fix for IE7 and IE8 end */
	}
	
	var equalHeight = function(container) {
	
		var currentTallest = 0, 
			currentRowStart = 0, 
			rowDivs = new Array(), 
			$el, topPosition = 0;
			
		$(container).each(function() {
			$el = $(this);
			$($el).height('auto')
			topPostion = $el.position().top;

			if (currentRowStart != topPostion) {
				for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
					rowDivs[currentDiv].height(currentTallest);
				}
				rowDivs.length = 0; // empty the array
				currentRowStart = topPostion;
				currentTallest = $el.height();
				rowDivs.push($el);
			} else {
				rowDivs.push($el);
				currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
			}
			for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
				rowDivs[currentDiv].height(currentTallest);
			}
		});
	}
	
	var footerAlign = function() {
		'use strict';
		jQuery('.site-footer').css('display', 'block');
		jQuery('.site-footer').css('height', 'auto');
		var footerHeight = jQuery('.site-footer').outerHeight();
		jQuery('.footer-fixed > .page-wraper').css('padding-bottom', footerHeight);
		jQuery('.site-footer').css('height', footerHeight);
	}
	
	
	/* Vertically center Bootstrap 3 modals so they aren't always stuck at the top function custom */
	function reposition() {
		'use strict';
		var modal = jQuery(this),
		dialog = modal.find('.modal-dialog');
		modal.css('display', 'block');
		
		/* Dividing by two centers the modal exactly, but dividing by three 
		 or four works better for larger screens.  */
		dialog.css("margin-top", Math.max(0, (jQuery(window).height() - dialog.height()) / 2));
	}
	/* Vertically center Bootstrap 3 modals so they aren't always stuck at the top function custom end*/
	
	var fileInput = function(){
		'use strict';
		/* Input type file jQuery */	 	 
		jQuery(document).on('change', '.btn-file :file', function() {
			var input = jQuery(this);
			var	numFiles = input.get(0).files ? input.get(0).files.length : 1;
			var	label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
			input.trigger('fileselect', [numFiles, label]);
		});
		
		jQuery('.btn-file :file').on('fileselect', function(event, numFiles, label) {
			input = jQuery(this).parents('.input-group').find(':text');
			var log = numFiles > 10 ? numFiles + ' files selected' : label;
		
			if (input.length) {
				input.val(log);
			} else {
				if (log) alert(log);
			}
		});
		/* Input type file jQuery end*/
	}
	
	var headerFix = function(){
		'use strict';
		/* Main navigation fixed on top  when scroll down function custom */		
		jQuery(window).bind('scroll', function () {
			var menu = jQuery('.sticky-header');
			if ($(window).scrollTop() > menu.offset().top) {
				menu.addClass('is-fixed');
			} else {
				menu.removeClass('is-fixed');
			}
		});
		/* Main navigation fixed on top  when scroll down function custom end*/
	}
	
	var masonryBox = function(){
		'use strict';
		/* masonry by  = bootstrap-select.min.js */ 
		var self = $("#masonry");
		self.imagesLoaded(function () {
			self.masonry({
				gutterWidth: 15,
				isAnimated: true,
				itemSelector: ".card-container"
			});
		});

		jQuery(".filters").on('click','li',function(e) {
			e.preventDefault();
			var filter = $(this).attr("data-filter");
			self.masonryFilter({
				filter: function () {
					if (!filter) return true;
					return $(this).attr("data-filter") == filter;
				}
			});
		});
		/* masonry by  = bootstrap-select.min.js end */
	}
	
	var setDivHeight = function(){	
		'use strict';
		var allHeights = [];
		jQuery('.dzseth > div, .dzseth .img-cover').each(function(e){
			allHeights.push(jQuery(this).height());
		})

		jQuery('.dzseth > div, .dzseth .img-cover').each(function(e){
			var maxHeight = Math.max.apply(Math,allHeights);
			jQuery(this).css('height',maxHeight);
		})
		
		allHeights = [];
		/* Removice */
		var screenWidth = $( window ).width();
		if(screenWidth < 991)
		{
			jQuery('.dzseth > div, .dzseth .img-cover').each(function(e){
				jQuery(this).css('height','');
			})
		}	
	}
		
	var counter = function(){
		if(jQuery('.counter').length)
		{
			jQuery('.counter').counterUp({
				delay: 10,
				time: 3000
			});
		}
	}
	
	var handelVideo = function(){
		/* Video responsive function */	
		jQuery('iframe[src*="youtube.com"]').wrap('<div class="embed-responsive embed-responsive-16by9"></div>');
		jQuery('iframe[src*="vimeo.com"]').wrap('<div class="embed-responsive embed-responsive-16by9"></div>');	
		/* Video responsive function end */
	}
	
	var handelFilterMasonary = function(){
		/* gallery filter activation = jquery.mixitup.min.js */ 
		if (jQuery('#image-gallery-mix').length) {
			jQuery('.gallery-filter').find('li').each(function () {
				$(this).addClass('filter');
			});
			jQuery('#image-gallery-mix').mixItUp();
		};
		if(jQuery('.gallery-filter.masonary').length){
			jQuery('.gallery-filter.masonary').on('click','span', function(){
				var selector = $(this).parent().attr('data-filter');
				jQuery('.gallery-filter.masonary span').parent().removeClass('active');
				jQuery(this).parent().addClass('active');
				jQuery('#image-gallery-isotope').isotope({ filter: selector });
				return false;
			});
		}
		/* gallery filter activation = jquery.mixitup.min.js */
	}
	
	var handelBootstrapSelect = function(){
		/* Bootstrap Select box function by  = bootstrap-select.min.js */ 
		jQuery('select').selectpicker();
		/* Bootstrap Select box function by  = bootstrap-select.min.js end*/
	}
	
	var handelBootstrapTouchSpin = function(){
		jQuery("input[name='demo_vertical2']").TouchSpin({
		  verticalbuttons: true,
		  verticalupclass: 'glyphicon glyphicon-plus',
		  verticaldownclass: 'glyphicon glyphicon-minus'
		});
		
	}
	
	var handelCountDown = function(){
		/* Time Countr Down Js */
		if($(".countdown").length)
		{
			$('.countdown').countdown({date: '30 march 2018 23:5'}, function() {
				$('.countdown').text('we are live');
			});
		}
		/* Time Countr Down Js End */
	}
	
	var handelCustomScroll = function(){
		/* all available option parameters with their default values */
		if($(".content").length)
		{
			$(".content").mCustomScrollbar({
				setWidth:false,
				setHeight:false,
				axis:"y"
			});	
		}
	}
	
	var handelSideBarMenu = function(){
		$('.openbtn').on('click',function(e){
			e.preventDefault();
			if($('#mySidenav').length > 0)
			{
				document.getElementById("mySidenav").style.left = "0";
			}

			if($('#mySidenav1').length > 0)
			{
				document.getElementById("mySidenav1").style.right = "0";
			}
			
		})
		
		$('.closebtn').on('click',function(e){
			e.preventDefault();
			if($('#mySidenav').length > 0)
			{
				document.getElementById("mySidenav").style.left = "-300px";
			}
			
			if($('#mySidenav1').length > 0)
			{
				document.getElementById("mySidenav1").style.right = "-820px";
			}
		})
	}
	
	/*var addSwitcher = function(){
		
		var dzSwitcher = '<div id="dzSwitcher" class="styleswitcher"><div class="switcher-btn-bx"> <a class="switch-btn"> <span class="fa fa-cogs fa-lg"></span> </a> </div><div class="styleswitcher-inner"><h6 class="switcher-title">Layout</h6><ul class="layout-view"><li class="wide-layout active">Wide</li><li class="boxed">Boxed</li></ul><h6 class="switcher-title">Nav</h6><ul class="nav-view"><li class="nav-light active">Light</li><li class="nav-dark">Dark</li></ul><h6 class="switcher-title">Header</h6><ul class="header-view"><li class="header-fixed active">Fixed</li><li class="header-static">Static</li></ul><h6 class="switcher-title">Color Skin</h6><ul class="color-skins"><li><a class="theme-skin skin-1" href="?theme=css/skin/skin-1" title="default Theme"></a></li><li><a class="theme-skin skin-2" href="?theme=css/skin/skin-2" title="pink Theme"></a></li><li><a class="theme-skin skin-3" href="?theme=css/skin/skin-3" title="sky Theme"></a></li><li><a class="theme-skin skin-4" href="?theme=css/skin/skin-4" title="green Theme"></a></li><li><a class="theme-skin skin-5" href="?theme=css/skin/skin-5" title="red Theme"></a></li><li><a class="theme-skin skin-6" href="?theme=css/skin/skin-6" title="orange Theme"></a></li><li><a class="theme-skin skin-7" href="?theme=css/skin/skin-7" title="purple Theme"></a></li><li><a class="theme-skin skin-8" href="?theme=css/skin/skin-8" title="blue Theme"></a></li></ul><h6 class="switcher-title">Background Image</h6><ul class="background-switcher"><li><img src="images/switcher/switcher-bg/bg1.jpg" dir="images/background/bg1.jpg" alt=""></li><li><img src="images/switcher/switcher-bg/bg2.jpg" dir="images/background/bg2.jpg"  alt=""></li><li><img src="images/switcher/switcher-bg/bg3.jpg" dir="images/background/bg3.jpg"  alt=""></li><li><img src="images/switcher/switcher-bg/bg4.jpg" dir="images/background/bg4.jpg"  alt=""></li></ul><h6 class="switcher-title">Background Pattern</h6><ul class="pattern-switcher"><li><img src="images/switcher/switcher-patterns/bg1.jpg"  dir="images/pattern/pt1.jpg" alt=""></li><li><img src="images/switcher/switcher-patterns/bg2.jpg"  dir="images/pattern/pt2.jpg" alt=""></li><li><img src="images/switcher/switcher-patterns/bg3.jpg"  dir="images/pattern/pt3.jpg" alt=""></li><li><img src="images/switcher/switcher-patterns/bg4.jpg"  dir="images/pattern/pt4.jpg" alt=""></li><li><img src="images/switcher/switcher-patterns/bg5.jpg"  dir="images/pattern/pt5.jpg" alt=""></li><li><img src="images/switcher/switcher-patterns/bg6.jpg"  dir="images/pattern/pt6.jpg" alt=""></li><li><img src="images/switcher/switcher-patterns/bg7.jpg"  dir="images/pattern/pt7.jpg" alt=""></li><li><img src="images/switcher/switcher-patterns/bg8.jpg"  dir="images/pattern/pt8.jpg" alt=""></li><li><img src="images/switcher/switcher-patterns/bg9.jpg"  dir="images/pattern/pt9.jpg" alt=""></li><li><img src="images/switcher/switcher-patterns/bg10.jpg"  dir="images/pattern/pt10.jpg" alt=""></li><li><img src="images/switcher/switcher-patterns/bg11.jpg"  dir="images/pattern/pt11.jpg" alt=""></li><li><img src="images/switcher/switcher-patterns/bg12.jpg"  dir="images/pattern/pt12.jpg" alt=""></li></ul></div></div>';
		
		if($("#dzSwitcher").length == 0) {
			jQuery('body').append(dzSwitcher);
		}
	}*/
	
	// box height match window height according function custom=================================== //	
	var setHeight = function() {
		windowHeight = jQuery(window).innerHeight();
		jQuery('.content-admin-wraper , .aon-custo-map-iner , .full-screen-content').css('min-height', windowHeight);
	}
	
	var dezText = function(words, id) {
		'use strict';
		if($('#'+id).length > 0)
		{
			var visible = true;
			var letterCount = 1;
			var x = 1;
			var waiting = false;
			var target = document.getElementById(id);
			window.setInterval(function() {
	
				if (letterCount === 0 && waiting === false) {
					waiting = true;
					target.innerHTML = words[0].substring(0, letterCount);
					window.setTimeout(function() {
						var usedWord = words.shift();
						words.push(usedWord);
						x = 1;
						letterCount += x;
						waiting = false;
					}, 500)
				} else if (letterCount === words[0].length + 1 && waiting === false) {
					waiting = true;
					window.setTimeout(function() {
						x = -1;
						letterCount += x;
						waiting = false;
					}, 1000)
				} else if (waiting === false) {
					target.innerHTML = words[0].substring(0, letterCount);
					letterCount += x;
				}
			}, 70)
		}	
	}
	
	
	return {
		init:function(){
			homeSearch();
			MagnificPopup();
			handelAccordian();
			scrollTop();
			handelPlaceholder();
			footerAlign();
			fileInput();
			headerFix();
			setDivHeight();
			counter();
			handelVideo();
			handelFilterMasonary();
			handelCountDown();
			handelCustomScroll();
			handelSideBarMenu();
			
			addSwitcher();
			setHeight();
			dezText();
			
		},
		
		load:function(){
			masonryBox();
			handelBootstrapSelect();
			handelBootstrapTouchSpin();
		}
	}
	
}();


/*################	End OF Function List ###################################*/
	
/* Document.ready Start */	

jQuery(document).ready(function() {
    'use strict';
	Construct.init();
});
/* Document.ready END */



/* Window Load START */
jQuery(window).load(function () {
	'use strict'; 
	
	Construct.load();
	
	setTimeout(function(){
		jQuery('#loading-area').remove();
	}, 0);
	
	//equalheight('.equal-wraper .equal-col');
	
});
/*  Window Load END */
