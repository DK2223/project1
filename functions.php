<?php

function printr($name, bool $die = false) {

    echo '<pre>',print_r($name, true),'</pre>';
    if ($die) die();
}