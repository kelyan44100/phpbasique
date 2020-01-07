<?php


abstract class AbstractDAO {

    protected $pdo;



    abstract public function delete($object);

    abstract public function findAll();

    abstract public function findById($searchedId);

    abstract public function insert($object);

    abstract public function save($object);

    abstract public function update($object);

}