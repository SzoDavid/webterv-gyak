<?php

class Citrica
{
    private bool $bolyhos;
    private Narancs $sajatNarancs;

    /**
     * @param bool $bolyhos
     * @param Narancs $narancs
     */
    public function __construct(bool $bolyhos, Narancs $narancs)
    {
        $this->bolyhos = $bolyhos;
        $this->sajatNarancs = $narancs;
    }

    public function isBolyhos(): bool
    {
        return $this->bolyhos;
    }

    public function getSajatNarancs(): Narancs
    {
        return $this->sajatNarancs;
    }

    /**
     * @throws CitricaException
     */
    public function osztodik(Narancs $narancs): Citrica
    {
        if (!$this->bolyhos && ($narancs->getSavanyusag() <= $this->sajatNarancs->getSavanyusag()
            || $narancs->getSargasag() <= $this->sajatNarancs->getSargasag())) throw new CitricaException();

        return new Citrica($this->bolyhos, clone $this->sajatNarancs);
    }
}