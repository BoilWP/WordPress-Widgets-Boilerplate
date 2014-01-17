<?php
// This file will fetch each widget you have in this directory and load it.
class My_Widgets {

	public function construct() {
		add_action( 'init', array( &$this, 'register_widgets' ) );
	}

	public function register_widgets() {
		$dir = ''; // Specify the directory the widgets are based.

		$widgets = opendir( $dir ); // Open the specified directory and load the widgets.

		while ( false !== ( $filename = readdir( $widgets ) ) ) {

			if( is_dir( $filename ) && $filename != "." && $filename != ".." ) {

				if ( strpos( $filename, 'widget_' ) === 0 ) {

					if ( is_readable( $filename ) ) {

						include_once( $filename ); 

					} // end if file is readable.

				} // end if filename contains 'widget_'

			} // makes sure that only the files in the specfied directory are loaded.

	} // end for each widget class.

} // end class
?>