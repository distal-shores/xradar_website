<?php
/*
Template Name: City
*/
?>

<?php

get_header('page'); ?>

<?php 

    // Declaring all variables used on Contact pages

    $postId = get_the_ID();

    $formId = get_post_meta($postId, "form_id", $single);
    $heroImage = get_field('city_hero_image');
    $persPhoto1 = get_field('personality_photo_1');
    $persPhoto2 = get_field('personality_photo_2');
    $address = get_field('address');
    $phoneNumber = get_field('phone_number');
    $email = get_field('email');
    $persName1 = get_field('personality_name_1');
    $persName2 = get_field('personality_name_2');
    $cityPic1 = get_field('city_picture_1');
    $cityPic2 = get_field('city_picture_2');

?>

<style type="text/css">
    .acf-map {
        width: 100%;
        height: 400px;
        border: #ccc solid 1px;
        margin: 20px 0;
    }

    /* fixes potential theme css conflict */
    .acf-map img {
       max-width: inherit !important;
    }
</style>


<div id="primary" class="content-area city">
    <div class="city-hero" style="background-image:url('<?php echo $heroImage['url']; ?>');" /></div>
    <main id="main" class="site-main" role="main">
        <div class="white-box">
            <span class="sub-heading">- Contact Us -</span>
            <h1><?php echo get_the_title(); ?></h1>
            <hr>
        </div>
        <div class="flex-wrap">
            <div class="map">
                <?php
                    $location = get_field('location', $postId);
                ?>
                <div class="acf-map">
                    <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
                </div>
            </div>
            <div class="contact-info">
                <div class="details">
                    <span class="pin"><?php echo $address ?></span>
                    <span class="phone"><?php echo $phoneNumber ?></span>
                    <span class="mail"><?php echo $email ?></span>
                </div>
                <div class="contact-photos">
                    <div class="photo">
                        <img src="<?php echo $persPhoto1['url']; ?>"/>
                        <span class="photo-caption"><?php echo $persName1 ?></span>
                    </div>
                    <?php if($persName2): ?>
                        <div class="photo">
                            <img src="<?php echo $persPhoto2['url']; ?>"/>
                            <span class="photo-caption"><?php echo $persName2 ?></span>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="contact-form">
                <div class="get-in-touch">
                    <?php ninja_forms_display_form($formId); ?>
                </div>
            </div>
            <div class="photos">
                <img src="<?php echo $cityPic1['url'] ?>" />
                <img src="<?php echo $cityPic2['url'] ?>" />
            </div>
        </div>
    </main><!-- #main -->
</div><!-- #primary -->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLS0D1XWwFO8sUT8GIeiGZWrC5wwuMUVA"></script>
<script type="text/javascript">
    (function($) {

        /*
        *  new_map
        *
        *  This function will render a Google Map onto the selected jQuery element
        *
        *  @type    function
        *  @date    8/11/2013
        *  @since   4.3.0
        *
        *  @param   $el (jQuery element)
        *  @return  n/a
        */

        function new_map( $el ) {

            // var
            var $markers = $el.find('.marker');
            
            
            // vars
            var args = {
                zoom        : 16,
                center      : new google.maps.LatLng(0, 0),
                mapTypeId   : google.maps.MapTypeId.ROADMAP
            };
            
            
            // create map               
            var map = new google.maps.Map( $el[0], args);
            
            
            // add a markers reference
            map.markers = [];
            
            
            // add markers
            $markers.each(function(){
                
                add_marker( $(this), map );
                
            });


            // center map
            center_map( map );
            
            
            // return
            return map;

        }

        /*
        *  add_marker
        *
        *  This function will add a marker to the selected Google Map
        *
        *  @type    function
        *  @date    8/11/2013
        *  @since   4.3.0
        *
        *  @param   $marker (jQuery element)
        *  @param   map (Google Map object)
        *  @return  n/a
        */

        function add_marker( $marker, map ) {

            // var
            var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

            // create marker
            var marker = new google.maps.Marker({
                position    : latlng,
                map         : map
            });

            // add to array
            map.markers.push( marker );

            // if marker contains HTML, add it to an infoWindow
            if( $marker.html() )
            {
                // create info window
                var infowindow = new google.maps.InfoWindow({
                    content     : $marker.html()
                });

                // show info window when marker is clicked
                google.maps.event.addListener(marker, 'click', function() {

                    infowindow.open( map, marker );

                });
            }

        }

        /*
        *  center_map
        *
        *  This function will center the map, showing all markers attached to this map
        *
        *  @type    function
        *  @date    8/11/2013
        *  @since   4.3.0
        *
        *  @param   map (Google Map object)
        *  @return  n/a
        */

        function center_map( map ) {

            // vars
            var bounds = new google.maps.LatLngBounds();

            // loop through all markers and create bounds
            $.each( map.markers, function( i, marker ){

                var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

                bounds.extend( latlng );

            });

            // only 1 marker?
            if( map.markers.length == 1 )
            {
                // set center of map
                map.setCenter( bounds.getCenter() );
                map.setZoom( 16 );
            }
            else
            {
                // fit to bounds
                map.fitBounds( bounds );
            }

        }

        /*
        *  document ready
        *
        *  This function will render each map when the document is ready (page has loaded)
        *
        *  @type    function
        *  @date    8/11/2013
        *  @since   5.0.0
        *
        *  @param   n/a
        *  @return  n/a
        */

        // global var
        var map = null;

        $(document).ready(function(){

            $('.acf-map').each(function(){

                // create map
                map = new_map( $(this) );

            });

        });

    })(jQuery);
</script>

<?php
get_footer();