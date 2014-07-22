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
       * Description of ConnectClient
       * @author Marcin
       * Class ConnectClient -> is any class that requires a connection.
       */
      class ConnectClient{
          private $hookup;
          public function __construct() {
              $this->hookup = UniversalConnect::doConnect();
          }
      }
    $work = new ConnectClient();
      ?>
    </body>
</html>
