<html>
<?php

set_error_handler(function(){
  throw new Exception("Fout");
});
  try {
  echo 11231231 / 0;
}catch (Exception $e) {
  echo 'Error: ', $e->getMessage();
}
error_log($e, 3, "error.log");
restore_error_handler();
?>
<html>