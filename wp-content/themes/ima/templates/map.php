<!-- Load Google Maps API -->
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=<?php the_field( 'google_maps_api_key', 'option' ); ?>&callback=initMap">
</script>
<!-- End Load Google Maps API -->

<!-- Get Locations and Google Maps data from the DB and store in the JS global scope -->
<?php $locations = getLocationsArray(); ?>
<?php $styles = get_field( 'google_maps_style', 'option' ); ?>

<script type="text/javascript">
  setLocations( <?php echo ( json_encode( $locations ) ); ?> );
  setMapStyle( <?php echo ( json_encode( $styles ) ); ?>, 'locations' );
</script>

<div id="map"></div>
