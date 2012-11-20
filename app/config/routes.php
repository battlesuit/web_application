<?php
namespace http\application\routes {
  local('alias', '%s_presenter');
  local('load_dir', __DIR__.'/../presenters');
  
  to('application#index');
}
?>