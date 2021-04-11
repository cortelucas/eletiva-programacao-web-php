<?php


namespace EmpresaXYZ;


class ClasseDVDs
{
    private $id, $name, $dateOfAcquisition, $listOfAuthors, $type, $generalDescription;

    /**
     * ClasseDVDs constructor.
     * @param $id
     * @param $name
     * @param $dateOfAcquisition
     * @param $listOfAuthors
     * @param $type
     * @param $generalDescription
     */
    public function __construct($id, $name, $dateOfAcquisition, $listOfAuthors, $type, $generalDescription)
    {
        $this->id = $id;
        $this->name = $name;
        $this->dateOfAcquisition = $dateOfAcquisition;
        $this->listOfAuthors = $listOfAuthors;
        $this->type = $type;
        $this->generalDescription = $generalDescription;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getDateOfAcquisition()
    {
        return $this->dateOfAcquisition;
    }

    /**
     * @param mixed $dateOfAcquisition
     */
    public function setDateOfAcquisition($dateOfAcquisition): void
    {
        $this->dateOfAcquisition = $dateOfAcquisition;
    }

    /**
     * @return mixed
     */
    public function getListOfAuthors()
    {
        return $this->listOfAuthors;
    }

    /**
     * @param mixed $listOfAuthors
     */
    public function setListOfAuthors($listOfAuthors): void
    {
        $this->listOfAuthors = $listOfAuthors;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getGeneralDescription()
    {
        return $this->generalDescription;
    }

    /**
     * @param mixed $generalDescription
     */
    public function setGeneralDescription($generalDescription): void
    {
        $this->generalDescription = $generalDescription;
    }


}