<?php
require_once "header.php";

// get directory path
if ($dir !== './abc') {
	$dir = $_GET['path'];
//	echo $dir; //test
}

// scan directory and put each entry in an array
$files = scandir($dir);
//var_dump($files); //test

// parse each entry
foreach ($files as $file) {

	$path = "$dir/$file";

	// when this entry is a directory, click the link will open it and show it's content
	if (is_dir("$dir/$file") && $file !== '.' && $file !== '..') {

		$folder = "<div class='folder'><a href=\"dir.php?path=$path\">$file</a></div>";
		echo $folder;

	} 

	// when this entry is a file, click the link will open the book.
	elseif (is_file("$dir/$file") && $file !== '.htaccess') {

		$txt = "<div class='txt'><a href=\"file.php?path=$path&p=1\">$file</a></div>";
		echo $txt;

	}

}
?>
