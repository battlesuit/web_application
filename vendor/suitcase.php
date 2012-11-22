<?php
namespace suitcase {
  class Base {
    public static $import_dir = __DIR__;
    private static $imported_packages = array();
    
    static function import() {
      foreach(func_get_args() as $name) {
        if(isset(self::$imported_packages[$name])) continue;
        
        $suitcase_file = static::$import_dir."/$name/Suitcase.php";
        if(file_exists($suitcase_file)) require $suitcase_file;
        else {
          set_include_path(get_include_path() . PATH_SEPARATOR . static::$import_dir . "/$name/lib");
          require str_replace('-', '/', $name).".php";
        }
        
        self::$imported_packages[$name] = true;
      }
    }
  }
  
  function import() {
    call_user_func_array('suitcase\Base::import', func_get_args());
  }
  
  import('loader');
}
?>