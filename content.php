<?php

if (strcmp($type,'campaign') == 0) {
  include 'content/campaign.php';
} else if (strcmp($type,'user') == 0) {
  include 'content/user.php';
} else if (strcmp($type,'character') == 0) {
  include 'content/character.php';
} else {
  echo 'Error: content type unknown';
}
/*  TODO handle other types */

?>
