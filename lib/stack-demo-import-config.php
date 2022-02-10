<?php


function stack_import_files() {
	return array(
		array(
			'import_file_name'             => 'stack demo import',
		
			'local_import_file'            => trailingslashit( get_template_directory() ).'/demo-content/stack.WordPress.xml',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ).'/demo-content/stack-widget.wie',
           
		
		),
	);
}
add_filter( 'ocdi/import_files', 'stack_import_files' );