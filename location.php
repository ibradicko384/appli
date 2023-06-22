

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style\bootstrap\css\bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <title>Connexion</title>
</head>
<body>


<?php
/**
 * Module: geo-location
 *
 * @package automattic/jetpack
 */

/**
 * Adds support for geo-location features.
 */



/**
 * Geo-location shortcode callback for display of location data associated with a post.
 *
 * Usage with current global $post:
 * [geo-location]
 *
 * Usage with specific post ID:
 * [geo-location post=5]
 *
 * @param array $attributes Shortcode attributes.
 */
function jetpack_geo_shortcode( $attributes ) {
	$attributes = shortcode_atts(
		array(
			'post' => null,
			'id'   => null,
		),
		$attributes
	);
	return jetpack_geo_get_location( $attributes['post'] ? $attributes['post'] : $attributes['id'] );
}


/**
 * Get the geo-location data associated with the supplied post ID, if it's available
 * and marked as being available for public display.  The returned array will contain
 * "latitude", "longitude" and "label" keys.
 *
 * If you do not supply a value for $post_id, the global $post will be used, if
 * available.
 *
 * @param integer|null $post_id Post ID.
 *
 * @return array|null
 */
function jetpack_geo_get_data( $post_id = null ) {
	$geo = Jetpack_Geo_Location::init();

	if ( ! $post_id ) {
		$post_id = $geo->get_post_id();
	}

	$meta_values = $geo->get_meta_values( $post_id );

	if ( ! $meta_values['is_public'] || ! $meta_values['is_populated'] ) {
		return null;
	}

	return array(
		'latitude'  => $meta_values['latitude'],
		'longitude' => $meta_values['longitude'],
		'label'     => $meta_values['label'],
	);
}

/**
 * Display the label HTML for the geo-location information associated with the supplied
 * post ID.
 *
 * If you do not supply a value for $post_id, the global $post will be used, if
 * available.
 *
 * @param integer|null $post_id Post ID.
 *
 * @return void
 */
function jetpack_geo_display_location( $post_id = null ) {
	echo jetpack_geo_get_location( $post_id ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped in `Jetpack_Geo_Location::get_location_label`.
}

/**
 * Return the label HTML for the geo-location information associated with the supplied
 * post ID.
 *
 * If you do not supply a value for $post_id, the global $post will be used, if
 * available.
 *
 * @param integer|null $post_id Post ID.
 *
 * @return string
 */
function jetpack_geo_get_location( $post_id = null ) {
	return Jetpack_Geo_Location::init()->get_location_label( $post_id );
}
?>



<script src="style/bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
<script src="style/bootstrap-5.2.3-dist/js/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="javascript/javascript.js"></script>
<script src="script/geo.js"></script>
</body>
</html>