<?php

namespace github\kayllondouglas\persistence;

use github\kayllondouglas\Venentinova;
use SQLite3;

class SqlPersistence
{

  private static $persistedData;


  public static function init()
  {
    self::$persistedData = new SQLite3(Venentinova::getCore()->getDataFolder() . "DataPersistence.db");
    self::$persistedData->exec("CREATE TABLE IF NOT EXISTS player_data(identifier VARCHAR, password VARCHAR);");
    Venentinova::getCore()->getLogger()->info("§6Loaded all persisted data.");
  }
}
