( function( $ ) {
	'use strict';

	// Global
	var $win = $( window ),
		$doc = $( document ),
        $body = $( 'body' );

    // owlCarousel
	function modeOwlCarousel() {
        if ( $.fn.owlCarousel ) {
            
            // Article Carousel/Slider
            $( '.js-mo-article-slider' ).each( function() {
				$( this ).owlCarousel({
                    loop: true,
                    margin: 10,
                    nav: false,
                    dots: false,
                    autoplay: true,
                    autoplayHoverPause: true,
                    responsiveClass: true,
                    responsive:{
                        0:{
                            items: 2,
                            margin: 5
                        },
                        768:{
                            items: 3,
                            margin: 10
                        },
                        1200:{
                            items: 4
                        }
                    }
                });
            } );
            
            // need to add a class to the carousel item so it will be fetched by the carousel script
            // Owl's nestedItemSelector parameter only accepts Class name, in our case it's - 'mo-instagram-feed_el'
            $('.mo-instagram-feed .instagram-pics li').addClass('mo-instagram-feed_el');
            
            $( '.js-mo-widget-instagram-feed' ).each( function() {
				$( this ).owlCarousel({
                    nestedItemSelector: 'mo-instagram-feed_el',
                    loop: true,
                    margin: 10,
                    nav: false,
                    dots: false,
                    autoplay: true,
                    autoplayHoverPause: true,
                    responsive:{
                        0:{
                            items: 3,
                            margin: 0
                        },
                        768:{
                            items: 4,
                            margin: 0
                        },
                        1200:{
                            items: 6,
                            margin: 0
                        }
                    }
                });
            } );
            
            // Append optional widget link to owl carousel item
            if ( $('.mo-instagram-feed .instagram-pics + p').length ) {
                $( '.mo-instagram-feed .instagram-pics + p' ).clone().appendTo( ".js-mo-widget-instagram-feed .mo-instagram-feed_el" );
            }
        }
    }
    
    // Mobile Menu
	function mobileMenu() {
        // Mobile menu navigation toggle
        // Add .mobile-menu-active class to body when mobile menu is toggled
        // With that class hide/show mobile menu overlay
		$( '.site-header' ).on( 'click', '.mobile-menu-toggle', function( e ) {
			e.preventDefault();
			$body.toggleClass( 'mobile-menu-active' );
		} );

        // Add dropdown arrow to <li> elements that contain sub-menus
		var hasChildMenu = $( '.main-navigation' ).find('li:has(ul)');
		hasChildMenu.children('a').after('<span class="subnav-toggle"></span>');

		// Mobile sub-menus toggle action
		$( '.main-navigation' ).on( 'click', '.subnav-toggle', function( e ) {
			e.preventDefault();
			$( this ).toggleClass( 'open' ).next( '.sub-menu, .children' ).slideToggle();
		} );
    }

    // Add all CSS styles relative to the '.header-top' height
    function headerHeightTweaks() {
        if ( $('.header-top').length ) {
            var headerHeight = $( '.header-top' ).outerHeight();
            
            // If the header is sticky add top padding on main header to compensate
            // If it's not or the user resized screen to a smaller width where the header is static -> remove top padding
            if ( $('.header-is-sticky').length ) {
                $('.header-is-sticky .site-header').css( 'padding-top', headerHeight );
            } else {
                $('.site-header').css( 'padding-top', 0 );
            }

            // Push mobile menu bellow .header-top
            if ( matchMedia( '(max-width: 1199px)' ).matches ) {
                $( '.main-navigation_wrap' ).css( 'top', headerHeight );
			} else {
                $( '.main-navigation_wrap' ).css( 'top', 'auto' );
            }
        }
    }

    /* Function init */
	$doc.ready( function() {
        modeOwlCarousel();
        mobileMenu();
        headerHeightTweaks();
	} );

	$win.load( function() {
        // on window load
	} );

	$win.scroll( function( e ) {
		// on page scroll
	} );

	$win.resize(function( e ) {
        headerHeightTweaks();
	} );

} )( jQuery );