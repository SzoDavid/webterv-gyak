<?php

class Pap
{
    private int $turelem;
    private bool $el;

    public function __construct(int $turelem)
    {
        $this->turelem = max(0, $turelem);
        $this->el = true;
    }

    public function narancsotAd() : ?Narancs
    {
        if (!$this->el || $this->turelem < 1) return null;

        $this->turelem--;
        return new Narancs(rand() / getrandmax(), rand() / getrandmax());
    }

    /**
     * @throws Exception
     */
    public function meghal() {
        if (!$this->el) throw new Exception();
        $this->el = false;
    }

    public function getTurelem(): int
    {
        return $this->turelem;
    }

    public function isEl(): bool
    {
        return $this->el;
    }


}