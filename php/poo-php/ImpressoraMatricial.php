<?php


namespace Projeto;


class ImpressoraMatricial
{
    private $marca, $modelo, $numAgulhas, $colorida, $imprimeVias, $peso;

    /**
     * ImpressoraMatricial constructor.
     * @param $marca
     * @param $modelo
     * @param $numAgulhas
     * @param $colorida
     * @param $imprimeVias
     * @param $peso
     */
    public function __construct($marca, $modelo, $numAgulhas, $colorida, $imprimeVias, $peso)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->numAgulhas = $numAgulhas;
        $this->colorida = $colorida;
        $this->imprimeVias = $imprimeVias;
        $this->peso = $peso;
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
    public function getNumAgulhas()
    {
        return $this->numAgulhas;
    }

    /**
     * @param mixed $numAgulhas
     */
    public function setNumAgulhas($numAgulhas): void
    {
        $this->numAgulhas = $numAgulhas;
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
    public function getImprimeVias()
    {
        return $this->imprimeVias;
    }

    /**
     * @param mixed $imprimeVias
     */
    public function setImprimeVias($imprimeVias): void
    {
        $this->imprimeVias = $imprimeVias;
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
}