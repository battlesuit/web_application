<?php
namespace loader {
  require __DIR__."/../../vendor/bs/loader.php";
  
  # loading bundles
  load('http-application');
  
  # autoload presenters scope
  scope('\\', __DIR__."/../presenters");
}
?>