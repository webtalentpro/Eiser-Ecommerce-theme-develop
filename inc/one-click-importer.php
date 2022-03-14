<?php
function eiser_import_files()
{
    return [
    [
      'import_file_name'           => 'Demo Import',
    
      'import_file_url'            => trailingslashit(get_template_directory()) . '/Demo-data/eiser-demo-content.xml',
      'import_widget_file_url'     => trailingslashit(get_template_directory()) . '/Demo-data/eiser-widget.wie',
    ],
];
}
add_filter('ocdi/import_files', 'eiser_import_files');
