<?php
require dirname(__FILE__).'/class/class_css_minifier.php';

//CSS Minifier setting
$options = array(
    'remove_comment' => true,
    'css_dir' => 'css/',
    'minified_dir' => 'minified/',
    'minified_name' => 'style.min.css'
);

$minifier = Minifier::getInstance();
$minifier->setOptions($options);

//Specify your css-files and their order here
$minifier->minifyCSS('common.css', 'model.css');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0 ,maximum-scale=1.0, initial-scale=1" user-scalable="no">
    <title>CSS Minifier</title>
    <link rel="stylesheet" type="text/css" href="minified/style.min.css">
    <link href="favicon.ico" rel="shortcut icon">
</head>

<body>
    <div id="mainwrapper">
        <div class="h1">
            <h1>CSS Minifier</h1>
        </div>
        <footer>
            <div id="footer">
                <p>Made By <a class="developer" href="https://github.com/carry0987/" target="_blank" rel="noopener noreferrer">carry0987</a></p>
            </div>
        </footer>
    </div>
</body>

</html>
