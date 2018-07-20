<!DOCTYPE html>
<html>
<head>
    <?php if (isset($_SESSION['user_id'])): ?>
        <meta http-equiv="Refresh" content="900;url='<?php echo SITEURL. '/users/logout/'.$_SESSION['user_id'] ?>'" />
    <?php endif; ?>
