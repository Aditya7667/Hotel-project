( function ( $ ) {

    var WidgetLAEPiechartsHandler = function ( $scope, $ ) {

        let elem = $scope.find( '.lae-piecharts' ).eq( 0 );

        var settings = elem.data( 'settings' );

        var trackColor = settings['track_color'];
        var barColor = settings['bar_color'];
        var chartSize = parseInt( settings['chart_size'] ) || 220;
        var lineWidth = parseInt( settings['line_width'] ) || 10;

        elem.find( '.lae-piechart .lae-percentage' ).each( function () {

            $( this ).easyPieChart( {
                animate: 2000,
                lineWidth: lineWidth,
                barColor: barColor,
                trackColor: trackColor,
                scaleColor: false,
                lineCap: 'square',
                size: chartSize

            } );

        } );

    };

    var WidgetLAEPiechartsHandlerOnScroll = function ( $scope, $ ) {

        $scope.livemeshWaypoint( function ( direction ) {

            WidgetLAEPiechartsHandler( $( this.element ), $ );

            this.destroy(); // Done with handle on scroll

        }, {
            offset: ( window.innerHeight || document.documentElement.clientHeight ) - 100
        } );

    };

    // Make sure you run this code under Elementor..
    $( window ).on( 'elementor/frontend/init', function () {

        if (elementorFrontend.isEditMode()) {

            elementorFrontend.hooks.addAction( 'frontend/element_ready/lae-piecharts.default', WidgetLAEPiechartsHandler );

        } else {

            elementorFrontend.hooks.addAction( 'frontend/element_ready/lae-piecharts.default', WidgetLAEPiechartsHandlerOnScroll );

        }


    } );

} )( jQuery );