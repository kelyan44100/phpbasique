<?php


class testing
{

    //Attributs

    private $idTesting;

    private $nameTesting;

    private $nombreTesting;

    //Constructeur

    /**
     * testing constructor.
     * @param $idTesting
     * @param $nameTesting
     * @param $nombreTesting
     */
    public function __construct($nameTesting, $nombreTesting, $idTesting = -1)
    {
        $this->idTesting = $idTesting;
        $this->nameTesting = $nameTesting;
        $this->nombreTesting = $nombreTesting;
    }

    //getters et setters

    /**
     * @return mixed
     */
    public function getIdTesting()
    {
        return $this->idTesting;
    }

    /**
     * @param mixed $idTesting
     */
    public function setIdTesting($idTesting)
    {
        $this->idTesting = $idTesting;
    }

    /**
     * @return mixed
     */
    public function getNameTesting()
    {
        return $this->nameTesting;
    }

    /**
     * @param mixed $nameTesting
     */
    public function setNameTesting($nameTesting)
    {
        $this->nameTesting = $nameTesting;
    }

    /**
     * @return mixed
     */
    public function getNombreTesting()
    {
        return $this->nombreTesting;
    }

    /**
     * @param mixed $nombreTesting
     */
    public function setNombreTesting($nombreTesting)
    {
        $this->nombreTesting = $nombreTesting;
    }


}