<?php
/**
 * Description of UniversalConnect
 * @author Marcin
 */
include_once './IConnectInfo.php';
     /**
     *class <B>UniversalConnect implements IConnectInfo
     *@Access: Got access to const in interface IConnectInfo 
     *@return: Db hookup or error
     */
class UniversalConnect implements IConnectInfo{
   
    private static $server = IConnectInfo::HOST;
    private static $currentDB = IConnectInfo::DBNAME;
    private static $user = IConnectInfo::UNAME;
    private static $pass = IConnectInfo::PW;
    private static $hookup;
         /**
          * public static function doConnect()
          * @return void Return Hookup or BD error
          */
    public static function doConnect() {
        
        self::$hookup = mysqli_connect(self::$server, self::$user, self::$pass, self::$currentDB); 
    
  if(self::$hookup){
      echo 'Successful connection to the database. ';
  }
elseif(mysqli_connect_error (self::$hookup)){
   echo 'And here\'s why do not want to connect: '. mysqli_connect_error(); 
}
return self::$hookup;
}
}
