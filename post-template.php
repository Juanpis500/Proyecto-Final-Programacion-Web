if ( is_array( $pages ) ) {
  if ( $page > count( $pages ) ) // if the requested page doesn't exist
    $page = count( $pages ); // give them the highest numbered page that DOES exist
} else {   
  $page = 0;
}