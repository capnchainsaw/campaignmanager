<?php

/* Pull variables to determine what is being viewed: campaign, user, character, session, message, ... */

$id = isset($_GET['id']) ? $_GET['id'] : '0';
$type = isset($_GET['type']) ? $_GET['type'] : 'error';

?>
