<?php
// APPSETTINGS
define('DEBUGMODE',true);

class AppDebug {

    public function showInfo($message) {

        echo '<div class="debug-box">';
        echo '<p>'.$message.'</p>';
        echo '</div>';
    }

    public function showArray($array) {
        echo '<div class="debug-box">';
        foreach ($array as $data) {
            echo '<p>'.$data.'</p>';
        }
        echo '</div>';
    }
}
?>