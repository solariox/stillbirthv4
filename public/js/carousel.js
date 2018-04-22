$(function() {
    var showcase = $("#showcase")

    showcase.Cloud9Carousel( {
      yPos: 42,
      yRadius: 48,
      mirrorOptions: {
        gap: 12,
        height: 0.2
      },
      buttonLeft: $(".nav > .left"),
      buttonRight: $(".nav > .right"),
      autoPlay: true,
      bringToFront: true,
      onRendered: showcaseUpdated,
      onLoaded: function() {
        showcase.css( 'visibility', 'visible' )
        showcase.css( 'display', 'none' )
        showcase.fadeIn( 1500 )
      }
    } )

    function showcaseUpdated( showcase ) {
      var title = $('#item-title');
      console.log(showcase.nearestItem())
      title.html(
        $(showcase.nearestItem()).attr( 'alt' )
      )

      var c = Math.cos((showcase.floatIndex() % 1) * 2 * Math.PI)
      title.css('opacity', 0.5 + (0.5 * c))
    }

    // Simulate physical button click effect
    $('.nav > button').click( function( e ) {
      var b = $(e.target).addClass( 'down' )
      setTimeout( function() { b.removeClass( 'down' ) }, 80 )
    } )

    $(document).keydown( function( e ) {
      //
      // More codes: http://www.javascripter.net/faq/keycodes.htm
      //
      switch( e.keyCode ) {
        /* left arrow */
        case 37:
        $('.nav > .left').click()
        break

        /* right arrow */
        case 39:
        $('.nav > .right').click()
      }
    } )
  })


  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();


