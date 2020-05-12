<?php ?>
<!-- <script>location.href='login.php'</script> -->
<?php
session_abort();
session_destroy();
$url = 'login.php';
header('Location: '.$url);
?> 