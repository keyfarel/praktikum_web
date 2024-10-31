<?php
session_start();
?>

<!doctype html>
<html>
<body>
<?php
session_unset();
session_destroy();

echo "Session Destroyed";
?>
</body>
</html>
