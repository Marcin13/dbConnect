<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
      <?php
      include_once './UniversalConnect.php';
      /**
       * Short description of the class ConnectClient
       * 
       * @author Marcin
       * Class ConnectClient -> is any class that requires a connection.
       */
      class ConnectClient{
          /**
           *
           * @var $hookup hook to db
           */
          private $hookup;
          public function __construct() {
              $this->hookup = UniversalConnect::doConnect();
          }
      }
    $work = new ConnectClient();
      ?>
    </body>
</html>
