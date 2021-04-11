<?php


namespace EmpresaXYZ;


class ClasseLivros
{
    private $id, $name, $dateOfAcquisition, $listOfAuthors, $publisherName, $yearOfPubication;

    /**
     * ClasseLivros constructor.
     * @param $id
     * @param $name
     * @param $dateOfAcquisition
     * @param $listOfAuthors
     * @param $publisherName
     * @param $yearOfPubication
     */
    public function __construct($id, $name, $dateOfAcquisition, $listOfAuthors, $publisherName, $yearOfPubication)
    {
        $this->id = $id;
        $this->name = $name;
        $this->dateOfAcquisition = $dateOfAcquisition;
        $this->listOfAuthors = $listOfAuthors;
        $this->publisherName = $publisherName;
        $this->yearOfPubication = $yearOfPubication;
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
    public function getPublisherName()
    {
        return $this->publisherName;
    }

    /**
     * @param mixed $publisherName
     */
    public function setPublisherName($publisherName): void
    {
        $this->publisherName = $publisherName;
    }

    /**
     * @return mixed
     */
    public function getYearOfPubication()
    {
        return $this->yearOfPubication;
    }

    /**
     * @param mixed $yearOfPubication
     */
    public function setYearOfPubication($yearOfPubication): void
    {
        $this->yearOfPubication = $yearOfPubication;
    }


}