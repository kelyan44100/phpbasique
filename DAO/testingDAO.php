<?php

require_once dirname(__FILE__) . '/AbstractDAO.php';

require_once dirname(__FILE__) . '/connexionMySQL.php';


class testingDAO extends AbstractDAO {


    function __construct() {

        $this->pdo = connexionMySQL::getInstance()->getDbh();

    }


    public function delete($testing) {

        $query = "DELETE FROM testing WHERE id_testing = ?";

        try{

            $this->pdo->beginTransaction();

            $qresult = $this->pdo->prepare($query);

            $qresult->execute(array($testing->getIdTesting()));

            $this->pdo->commit();


            return $qresult->rowCount();

        } catch (Exception $e) {

            $this->pdo->rollBack();


            print 'Tout ne s\'est pas bien passé, voir les erreurs ci-dessous<br/>';

            print 'Erreur : ' . $e->getMessage() . '<br/>';

            print 'N° : ' . $e->getCode();


            die();

        }

    }

    public function findAll()
    {
        // TODO: Implement findAll() method.
    }

    public function findById($searchedId)
    {
        // TODO: Implement findById() method.
    }

    public function insert($testing)
    {

        $query = "INSERT INTO testing (name_testing, nombre_testing) VALUES (?,?)";

        try {

            $this->pdo->beginTransaction();

            $qresult = $this->pdo->prepare($query);

            $qresult->execute(array($testing->getNameTesting(), $testing->getNombreTesting()));

            $lastInsertId = $this->pdo->lastInsertId();

            $this->pdo->commit();

            return ($qresult->rowCount()) ? $lastInsertId : 0;

        } catch (Exception $e) {

            $this->pdo->rollBack();


            print 'Tout ne s\'est pas bien passé, voir les erreurs ci-dessous <br/>';

            print 'Erreur : ' . $e->getMessage() . '<br/>';

            print 'N° : ' . $e->getCode();


            die();

        }

    }

    public function save($testing) {

        if ($testing->getIdTesting() == - 1){
            return $this->insert($testing);
        } else {
            return $this->update($testing);
        }

    }

    public function update($object)
    {
        // TODO: Implement update() method.
    }
}