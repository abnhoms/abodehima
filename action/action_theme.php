<?php
require('../config_session.php');

if(!isset($_POST['token']) || $_POST['token'] != $_SESSION[BOOM_PREFIX . 'token']) {
    die();
}

// طلب الحصول على الثيم الحالي
if(isset($_POST['get_theme'])) {
    $theme = getAutoTheme();
    echo $theme;
    die();
}

// طلب حفظ الثيم المختار
if(isset($_POST['theme'])) {
    $theme = $_POST['theme'];
    if($theme == 'dark' || $theme == 'light') {
        setUserTheme($theme);
        echo 1;
    } else {
        echo 0;
    }
    die();
}

echo 0;
die();
?>