<?php

// Convert the exported CSV from Access to JSON file

$output = 'data/list.js';
$lists = '';
if (isset($argv[1])) {
    foreach ($argv as $key => $arg) {
        if ($key === 0) {
            continue;
        }
        
        $files[$key] = array(
            'name' => $arg,
            'input' => 'data/'.$arg.'.csv',
        );
    }
} else {
    $files[] = array(
        'input' => 'data/list.csv',
        'name' => 'list',
    );
}

foreach ($files as $key => $file) {
    $f = fopen($file['input'], 'r');
    $list = array();
    
    while ($line = fgetcsv($f, 0, ';', '"')) {
        $list[] = $line;
    }
    
    $lists .= 'list_'.$file['name'].'='.json_encode($list).';';
    
    fclose($f);
}

file_put_contents($output, $lists);

echo '>> Done'."\n";