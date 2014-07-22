<?php
/**
 * Description of IConnectInfo interface
 * @author Marcin
 */

interface IConnectInfo {
  /**
   * @return IConnectInfo
   * @return DB connection data
   */  
  
const HOST = "localhost";
const UNAME = "root";
const PW = "";
const DBNAME = "cdcol";
/**
 * @throws Exception
 */

public static function doConnect();
/**
 * @args: void
 */
}
