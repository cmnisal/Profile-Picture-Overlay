<?php

    // Code from xjamundx: https://gist.github.com/xjamundx/845345

    // requires php5
	define('UPLOAD_DIR', 'images/');
	$img = $_POST['img'];
    echo '<img src="data:image/gif;base64,' . $data . '" />';
	$img = str_replace('data:image/png;base64,', '', $img);
	$img = str_replace(' ', '+', $img);
	$data = base64_decode($img);
	$file = UPLOAD_DIR . uniqid() . '.png';
	$success = file_put_contents($file, $data);
	print $success ? $file : 'Unable to save the file.';