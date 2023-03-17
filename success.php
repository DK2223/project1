<?php
require_once 'classes/Session.php';
$nameClient = session_id();
if ($nameClient == Session::check('$name')) {
    echo 'success';
}
else{
    header("Location: /Index.php");
}
/* if (isset($name)) {
    return 'Success';
}
else {
    header("Location: /Index.php");
} */

