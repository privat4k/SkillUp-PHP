<?php


class Student_z5 extends User_z5
{

    private $stidendiya;
    private $kurs;

    public function getStidendiya()
    {
        return $this->stidendiya;
    }

    public function setStidendiya($stidendiya)
    {
        $this->stidendiya = $stidendiya;
    }

    public function getKurs()
    {
        return $this->kurs;
    }

    public function setKurs($kurs)
    {
        $this->kurs = $kurs;
    }

}