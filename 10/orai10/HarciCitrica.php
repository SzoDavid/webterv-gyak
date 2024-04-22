<?php

class HarciCitrica extends Citrica
{
    private int $ero;

    public function __construct(bool $bolyhos, Narancs $narancs, int $ero)
    {
        parent::__construct($bolyhos, $narancs);
        $this->ero = max($ero, 0);
    }

    /**
     * @throws CitricaException
     */
    public function tamad(Pap $pap)
    {
        if ($this->ero < 10) {
            if ($this->isBolyhos()) return;
            throw new CitricaException();
        }

        $this->ero -= 5;
        try {
            $pap->meghal();
        } catch (Exception $exception) {
            $this->ero += 10;
        }
    }

    public function getEro(): int
    {
        return $this->ero;
    }
}