<?php
if (isset($_POST['submit'])) {
    $url = $_POST['url'];
    $value = explode("v=", $url);
    $videoId = $value[1];
}
?>