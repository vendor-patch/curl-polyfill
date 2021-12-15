<?php

if (!extension_loaded('curl')) {
  require __DIR__. \DIRECTORY_SEPARATOR . 'curl-polyfill.php';
}
