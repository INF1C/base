<?php
if (isset($_POST['avatar-image']) && $_POST['avatar-image'] == '') {
  echo "Delete file";
} elseif ($_FILES['avatar-image']['error'] == 0)  {
  echo "Save uploaded file";
}