<?php

$output_file    = __DIR__ . '/build/' . 'app.php';
$component_file = __DIR__ . '/components/greeting/' . 'com.php';
$template_file  = __DIR__ . '/templates/' . 'app.html';

$component = file_get_contents($component_file);
$template  = file_get_contents($template_file);
$output = $component . '?>' . "\n" . str_replace('{content}', '<?php echo $greeting; ?>', $template);

file_put_contents($output_file, $output);
