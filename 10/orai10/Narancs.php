<?php

class Narancs
{
    private float $sargasag;
    private float $savanyusag;

    /**
     * @param float $sargasag
     * @param float $savanyusag
     */
    public function __construct(float $sargasag, float $savanyusag)
    {
        $this->sargasag = max(0, min(1, $sargasag));
        $this->savanyusag = max(0, min(1, $savanyusag));;
    }

    public function getSargasag(): float
    {
        return $this->sargasag;
    }

    public function getSavanyusag(): float
    {
        return $this->savanyusag;
    }
}