  <?php
    require_once("../../config.php");
    require_once("lib.php");
    require_once("locallib.php");
  ?>
    <form name="formmessages" method="POST" action="noti_handle.php">
      <input type="radio" name="notify" value="true" />Notify me new course mail by email
      <input type="radio" name="notify" value="false" />Dont't notify me new course mail by email
      <inptu type="sbumit" value="Submit" />
    </form>
