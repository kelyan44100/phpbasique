<?php

require_once dirname(__FILE__) . '/../Entity/testing.php';
require_once dirname(__FILE__) . '/../DAO/testingDAO.php';

require_once dirname(__FILE__) . '/../Entity/utilisateur.php';

interface AppService {

    //Testing -------------------------------------------------------------------

    public function createTesting($nameTesting, $nombreTesting);

    public function deleteTesting(testing $testing);

    //Testing -------------------------------------------------------------------


}