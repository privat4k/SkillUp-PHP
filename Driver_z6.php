<?php


class Driver_z6 extends Worker_z5
{

    private $vodStaj;
    private $kategoriya;

    public function getVodStaj()
    {
        return $this->vodStaj;
    }

    public function setVodStaj($vodStaj)
    {
        $this->vodStaj = $vodStaj;
    }

    public function getKategoriya()
    {
        return $this->kategoriya;
    }

    public function setKategoriya($kategoriya)
    {
        $this->kategoriya = $kategoriya;
    }

}