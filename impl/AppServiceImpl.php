<?php

require_once dirname(__FILE__) . '/AppService.php';


class AppServiceImpl implements AppService {

    //Attribut d'objet

    private $testingDAO;


    //Pour le singleton
    private static $instance = null ;

    //Constructeur

    public function __construct() {

        $this->testingDAO = new testingDAO();

    }

    //Singleton

    public static function getInstance() {

        if (is_null(self::$instance)) {
            self::$instance = new AppServiceImpl();
        }

        return self::$instance;

    }

    private function __clone() { }

    // méthode testingDAO ----------------------------------------

    public function createTesting($nameTesting, $nombreTesting) {

        return new testing($nameTesting, $nombreTesting);

    }

    public function deleteTesting(testing $testing) {

        return $this->testingDAO->delete($testing);

    }

    // méthode testingDAO ----------------------------------------



}