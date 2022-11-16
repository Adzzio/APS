<?php

namespace App;

class CalcCtrl {

    private $x;

    private $y;

    private $z;

    private $result;

    public function __construct()
    {
    }

    public function getParams()
    {
        $this->x = $_REQUEST ['x'] ?? ' ';
        $this->y = $_REQUEST ['y'] ?? ' ';
        $this->z = $_REQUEST ['z'] ?? ' ';

        return [$this->x, $this->y, $this->z];
    }

    public function validate()
    {
        if (empty($this->x) && empty($this->y) && empty($this->z)) {
            $messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
        }
        if ( $this->x == "") {
            $messages [] = 'Nie podano liczby 1';
        }
        if ( $this->y == "") {
            $messages [] = 'Nie podano liczby 2';
        }
        if ( $this->z == "") {
            $messages [] = 'Nie podano liczby 3';
        }

        return $messages ?? null;
    }

    public function showResult() {
        return $this->result;
    }

    public function execute()
    {
        $x = intval($this->x);
        $y = intval($this->y);
        $z = intval($this->z);

        //wykonanie operacji
        if ($z <= 0) {
            $result = $x / ($y * 12);
        } else {
            $result = ($x * (($z / 100) / 12) * ((1 + (($z / 100) / 12)) ** ($y * 12))) / (((( 1 + ($z / 12 / 100)) ** ($y * 12))) - 1);
        }

        $this->result = round($result, 2);
    }
}