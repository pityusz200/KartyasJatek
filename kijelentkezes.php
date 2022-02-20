<?php
function kijelentkezes(){
    session_destroy();
    header("Refresh:0");
}
?>