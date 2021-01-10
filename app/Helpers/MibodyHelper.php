<?php
namespace App\Helpers;
//use App\CustomClass\Enums\Menu as Menu;

class MibodyHelper{
  public static function menu($menu){
    if (defined("App\CustomClass\Enums\Menu::".$menu)) {
      $idx=constant("App\CustomClass\Enums\Menu::".$menu);
    }
    return $idx??"";
    //Si fuera metodo usaría Menu::{$menu}(); y cargaría el use App\...
  }
}
