<?php
// TODO: change 'Widget_Name' to the name of your plugin
class Widget_Name extends WP_Widget {

	/*--------------------------------------------------*/
	/* Constructor
	/*--------------------------------------------------*/

	/**
	 * Specifies the classname and description, instantiates the widget,
	 * loads localization files, and includes necessary stylesheets and JavaScript.
	 */
	public function __construct() {
		// TODO:	update classname and description
		// TODO:	replace 'local-name' to be named more plugin specific. Other instances exist throughout the code, too.
		parent::__construct(
			'widget-name-id',
			__( 'Widget Name', 'local-name' ),
			array(
				'classname'		=>	'widget-name-class',
				'description'	=>	__( 'Short description of the widget goes here.', 'local-name' )
			)
		);

	} // end constructor

	/*--------------------------------------------------*/
	/* Widget API Functions
	/*--------------------------------------------------*/

	/**
	 * Outputs the content of the widget.
	 *
	 * @param	array	args		The array of form elements
	 * @param	array	instance	The current instance of the widget
	 */
	public function widget( $args, $instance ) {

		extract( $args, EXTR_SKIP );

		echo $before_widget;

		// TODO:	Here is where you manipulate your widget's values based on their input fields
		// TODO: Remember to change 'front-widget-name.php' to match the 'Widget Name'.
		include( 'front/front-widget-name.php' );

		echo $after_widget;

	} // end widget

	/**
	 * Processes the widget's options to be saved.
	 *
	 * @param	array	new_instance	The new instance of values to be generated via the update.
	 * @param	array	old_instance	The previous instance of values before the update.
	 */
	public function update( $new_instance, $old_instance ) {

		$instance = $old_instance;

		// TODO:	Here is where you update your widget's old values with the new, incoming values

		return $instance;

	} // end widget

	/**
	 * Generates the administration form for the widget.
	 *
	 * @param	array	instance	The array of keys and values for the widget.
	 */
	public function form( $instance ) {

		// TODO:	Define default values for your variables
		$instance = wp_parse_args(
			(array) $instance
		);

		// TODO:	Store the values of the widget in their own variable

		// Display the admin form
		// TODO: Remember to change 'admin-widget-name.php' to match the 'Widget Name'.
		include( 'admin/admin-widget-name.php' );

	} // end form

} // end class

// TODO:	Remember to change 'Widget_Name' to match the class name definition

function register_my_widgets() {
	register_widget( 'Widget_Name' );
}

add_action( 'widgets_init', 'register_my_widgets' );

?>