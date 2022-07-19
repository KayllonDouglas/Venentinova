<?php

namespace github\kayllondouglas;

use github\kayllondouglas\persistence\SqlPersistence;
use pocketmine\plugin\PluginBase;

class Venentinova extends PluginBase
{

  private static $core;

  public function onEnable()
  {
    self::$core = $this;
    SqlPersistence::init();
    $this->getLogger()->info("§aVenentinova is now enabled.");
  }

  public function onDisable()
  {
    $this->getLogger()->info("§cVenentinova is now disabled.");
  }

  public static function getCore(): Venentinova
  {
    return self::$core;
  }
}
