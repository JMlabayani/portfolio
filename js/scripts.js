( function() {

	var app = {
		
		initSlideshow: function() {
		},

        initSlideshowDesc: function() {
        },
        initjumptoSection: function() {
            jQuery('.menu-jump a').on('click', function(e) {
                    e.preventDefault();
                    var target = jQuery(this).attr('href'); // get id of the target section
                    var headerHeight = jQuery('header').outerHeight();
                    jQuery('html, body').animate(
                        {
                            scrollTop: jQuery(target).offset().top - headerHeight
  
                        },
                        1000
                    );
            });
        },
        initDetectScroll: function() {
            if( jQuery(window).width() > 991 && jQuery(window).scrollTop()  > 100 ) {
              jQuery('header').addClass('fixed');
              } else {
                  jQuery('header').removeClass('fixed');
              }
        },

        siteOffcanvas: function() {
            var _this = this,
                $offcanvas = jQuery('.site-offcanvas');
            
            this.slide = function () {
                jQuery('[data-offcanvas-slide]').on('click', function () {
                    var $this = jQuery(this),
                        slideType = $this.data('offcanvas-slide');

                    
                    if (slideType == 'out') {
                        $offcanvas.find('.offcanvas-backdrop').show();
                        $offcanvas.find('.burger-nav').addClass('active');
                        jQuery('#nav2 li, .fix-nav-title, .fix-logo').addClass('animated fadeInLeft');
                        jQuery('.fix-address').addClass('animated fadeInUp');
                        jQuery('body').css('overflow-y', 'hidden');
                        
                    }
                    
                    if (slideType == 'in') {
                        $offcanvas.find('.burger-nav').removeClass('active');
                        $offcanvas.find('.offcanvas-backdrop').hide();
                        jQuery('#nav2 li, .fix-nav-title, .fix-logo').removeClass('animated fadeInLeft');
                        jQuery('.fix-address').removeClass('animated fadeInUp');
                        jQuery('body').css('overflow-y', 'scroll');
                    }

                    
                });
            }
            
            this.outsideClick = function () {
               jQuery('.offcanvas-backdrop').on('click', function () {
                    $offcanvas.find('.burger-nav').removeClass('active');
                    $offcanvas.find('.offcanvas-backdrop').hide();
                    jQuery('body').css('overflow-y', 'scroll');


                    jQuery('#nav2 > li, .fix-nav-title, .fix-logo').removeClass('animated');
                    jQuery('.fix-contact-inner').removeClass('animated');
                });
            }
            
            this.subMenu = function () {
                var $target = jQuery('.mobile nav.b-nav ul#nav > li > a');
                
                $target.on('click', function (e) {
                    e.preventDefault(); 

                    var $this = jQuery(e.currentTarget),
                        href = $this.attr('href'),
                        targetType = typeof $target.attr("target") == 'undefined' ? '_self' : $target.attr("target");
                    
                    if ($this.parent().find('.sub-menu').length == 0 || $this.parent().hasClass('active')) {
                        window.open(href, targetType);
                    }
                    else {
                        $target.parent().removeClass('active');
                        $this.parent().addClass('active');
                    }
                });
            }
            
            this.init = function () {
                _this.slide();
                _this.outsideClick();
                _this.subMenu();
            }
            this.init();
        },

        initTestimonials: function() {
            jQuery('.testi-list').slick({
                autoplay: true,
                infinite: true,
                autoplaySpeed: 3000,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                fade: true,
                prevArrow: jQuery('.testi-prev'),
                nextArrow: jQuery('.testi-next'),
                dots: false,
                pauseOnHover: false,
                speed: 800,
                responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                ]
            });
        },

        initCertificates: function() {
            jQuery('.cert-slick-slider').slick({
                autoplay: true,
                infinite: true,
                autoplaySpeed: 3000,
                slidesToShow: 3,
                slidesToScroll: 1,
                arrows: false,
                fade: false,
                dots: false,
                pauseOnHover: false,
                speed: 800,
                responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                ]
            });
        },
        initIPBanner: function() {
            jQuery('.ip-banner-slider').slick({
                autoplay: true,
                infinite: true,
                autoplaySpeed: 3000,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                dots: false,
                pauseOnHover: false,
                speed: 800
            });
        },
        aiosFramePopUp: function(){
            jQuery('.aios-frame-popup, .aios-video-popup').aiosPopup({
              disableOn: 700,
              type: 'iframe',
              mainClass: 'aiosp-fade',
              removalDelay: 160,
              preloader: false,
              fixedBgPos: true,
              fixedContentPos: true
            }); 
        },
        aiosImagePopUp: function(){
            jQuery('.aios-image-popup').aiosPopup({
                type: 'image',
                closeOnContentClick: true,
                mainClass: 'aiosp-img-mobile',
                image: {
                verticalFit: true
                }
            });
        },
        initCursor: function() {
            var cursor = document.querySelector(".cursor");
            var cursor2 = document.querySelector(".cursor2");

            document.addEventListener("mousemove", function(e) {
                cursor.style.cssText = cursor2.style.cssText = "left: " + e.clientX + "px; top: " + e.clientY + "px;";
            });
        },
        
        aiosContentPopup: function(){
            jQuery('.aios-content-popup').aiosPopup({
                type: 'inline',
                preloader: false,
                focus: '#username',
                modal: true,
                callbacks : {
                    open : function(){
                        var aiosContent=  jQuery('.aiosp-content');
                        aiosContent.addClass('aios-popup-body')
                        jQuery('.aios-popup-body').append('<button title="Close" type="button" class="aiosp-close">&#215;</button>')
                        aiosContent.parent().append('<div class="outside-content"></div>');
                        jQuery('.outside-content').on('click', function(){
                            jQuery(this).aiosPopup('close');
                        })
                    }
                }
            });
        }
		
	}

	
	jQuery(document).ready( function() {
		
		app.initSlideshow();

        app.initCursor();

        app.initSlideshowDesc();

        app.siteOffcanvas();
		
        app.initTestimonials();

        app.initCertificates();

        app.initIPBanner();

        app.aiosContentPopup();

        app.aiosImagePopUp();

        app.initjumptoSection();

        

        jQuery('.contact-popup-trigger a').on('click', function () {
            jQuery('.contactPopupTrigger').trigger('click');
            jQuery('.aios-popup-body').addClass('contact-popup-body');
        });

        jQuery('.about-popup-trigger a').on('click', function () {
            jQuery('.aboutPopupTrigger').trigger('click');
            jQuery('.aios-popup-body').addClass('about-popup-body');
        });

        jQuery('.work-popup-trigger a').on('click', function () {
            jQuery('.workPopupTrigger').trigger('click');
            jQuery('.aios-popup-body').addClass('work-popup-body');
        });

        jQuery('.do-popup-trigger a').on('click', function () {
            jQuery('.doPopupTrigger').trigger('click');
            jQuery('.aios-popup-body').addClass('do-popup-body');
        });
	});

    jQuery(window).on('scroll', function(){
        app.initDetectScroll();
    });


})();