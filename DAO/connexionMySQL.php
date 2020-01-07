<?php


class connexionMySQL
{

    private static $instance;

    private $type = "mysql";

    private $host = "localhost";

    private $dbname = "phpbase";

    private $username = "root";

    private $password = "";

    private $dbh;

    private function __construct() {

        try{

            $this->dbh = new PDO(

                $this->type . ':host=' . $this->host . '; dbname=' . $this->dbname,

                $this->username,

                $this->password,

                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)

            );

            $req = "SET NAMES UTF8";

            $result = $this->dbh->prepare($req);

            $result->execute();

        } catch (PDOException $e) {

            echo "<div class=\"error\">Erreur ! " . $e->getMessage() . "</div>";

            die();

        }

    }


    private function __clone() { }


    public static function getInstance() {

        if (!self::$instance instanceof self){

            self::$instance = new self;

        }

        return self::$instance;

    }


    public function getDbh() {

        return $this->dbh;

    }


    public function close() {

        $this->dbh = null;

    }


}

?>