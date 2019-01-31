<?php

/**
 * Add 'ContentDisposition' in CloudFront so, the files can be downloaded
 * with 'download' attribute in HTML5 but it is only added when the
 * file is uploading from the specific page.
 *
 * @param array $args
 * @param int $post_id
 * @param int $image_size
 * @param boolean $bool
 *
 * @return array $args
 */
function add_content_disposition( $args, $post_id, $image_size, $bool ) {
    if ( isset( $args ) && ! isset( $args['ContentDisposition'] ) ) {
        if ( isset( $_GET ) && isset( $_GET['page'] ) && isset( $_GET['tab'] )
          && 'yasglobal-shipped' === $_GET['page'] ) {
            $args['ContentDisposition'] = 'attachment';
        }
    }

    return $args;
}
add_filter( 'as3cf_object_meta', 'add_content_disposition', 10, 4 );
