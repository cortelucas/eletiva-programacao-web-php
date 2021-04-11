<?php


namespace EmpresaXYZ;


class ClasseRevistas
{
    private $id, $name, $dateOfAcquisition, $listOfAuthors, $yearOfPubication, $volume, $publisher, $mainSubjects;

    /**
     * ClasseRevistas constructor.
     * @param $id
     * @param $name
     * @param $dateOfAcquisition
     * @param $listOfAuthors
     * @param $yearOfPubication
     * @param $volume
     * @param $publisher
     * @param $mainSubjects
     */
    public function __construct($id, $name, $dateOfAcquisition, $listOfAuthors, $yearOfPubication, $volume, $publisher, $mainSubjects)
    {
        $this->id = $id;
        $this->name = $name;
        $this->dateOfAcquisition = $dateOfAcquisition;
        $this->listOfAuthors = $listOfAuthors;
        $this->yearOfPubication = $yearOfPubication;
        $this->volume = $volume;
        $this->publisher = $publisher;
        $this->mainSubjects = $mainSubjects;
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


}