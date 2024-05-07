<?php
session_start();
if (session_destroy()) {
    header("Location: <?php echo Utils\BASE_URL ?>/User/sign_in");
}
