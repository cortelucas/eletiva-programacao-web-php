<?php


namespace Projeto;


class ImpressoraLaser
{
    private $modelo, $capacidadeToner, $colorida, $marca, $peso, $frenteVerso;

    /**
     * ImpressoraLaser constructor.
     * @param $modelo
     * @param $capacidadeToner
     * @param $colorida
     * @param $marca
     * @param $peso
     * @param $frenteVerso
     */
    public function __construct($modelo, $capacidadeToner, $colorida, $marca, $peso, $frenteVerso)
    {
        $this->modelo = $modelo;
        $this->capacidadeToner = $capacidadeToner;
        $this->colorida = $colorida;
        $this->marca = $marca;
        $this->peso = $peso;
        $this->frenteVerso = $frenteVerso;
    }

    /**
     * @return mixed
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * @param mixed $modelo
     */
    public function setModelo($modelo): void
    {
        $this->modelo = $modelo;
    }

    /**
     * @return mixed
     */
    public function getCapacidadeToner()
    {
        return $this->capacidadeToner;
    }

    /**
     * @param mixed $capacidadeToner
     */
    public function setCapacidadeToner($capacidadeToner): void
    {
        $this->capacidadeToner = $capacidadeToner;
    }

    /**
     * @return mixed
     */
    public function getColorida()
    {
        return $this->colorida;
    }

    /**
     * @param mixed $colorida
     */
    public function setColorida($colorida): void
    {
        $this->colorida = $colorida;
    }

    /**
     * @return mixed
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * @param mixed $marca
     */
    public function setMarca($marca): void
    {
        $this->marca = $marca;
    }

    /**
     * @return mixed
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * @param mixed $peso
     */
    public function setPeso($peso): void
    {
        $this->peso = $peso;
    }

    /**
     * @return mixed
     */
    public function getFrenteVerso()
    {
        return $this->frenteVerso;
    }

    /**
     * @param mixed $frenteVerso
     */
    public function setFrenteVerso($frenteVerso): void
    {
        $this->frenteVerso = $frenteVerso;
    }


}