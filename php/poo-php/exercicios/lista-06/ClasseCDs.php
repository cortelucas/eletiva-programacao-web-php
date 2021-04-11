<?php


namespace EmpresaXYZ;


class ClasseCDs
{
    private $id, $name, $dateOfAcquisition, $listOfAuthors, $musicalGenre, $idAudioTracks;

    /**
     * ClasseCDs constructor.
     * @param $id
     * @param $name
     * @param $dateOfAcquisition
     * @param $listOfAuthors
     * @param $musicalGenre
     * @param $idAudioTracks
     */
    public function __construct($id, $name, $dateOfAcquisition, $listOfAuthors, $musicalGenre, $idAudioTracks)
    {
        $this->id = $id;
        $this->name = $name;
        $this->dateOfAcquisition = $dateOfAcquisition;
        $this->listOfAuthors = $listOfAuthors;
        $this->musicalGenre = $musicalGenre;
        $this->idAudioTracks = $idAudioTracks;
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
    public function getMusicalGenre()
    {
        return $this->musicalGenre;
    }

    /**
     * @param mixed $musicalGenre
     */
    public function setMusicalGenre($musicalGenre): void
    {
        $this->musicalGenre = $musicalGenre;
    }

    /**
     * @return mixed
     */
    public function getIdAudioTracks()
    {
        return $this->idAudioTracks;
    }

    /**
     * @param mixed $idAudioTracks
     */
    public function setIdAudioTracks($idAudioTracks): void
    {
        $this->idAudioTracks = $idAudioTracks;
    }


}