<?php namespace App\Services\Html;

abstract class AbstractChart
{
    protected $scope;
    protected $date;

    protected $data = [];
    protected $colors = [];

    protected function setScope($scope) {
        $this->scope = $scope;
    }

    protected function setDate($date) {
        $this->date = $date;
    }

    protected function __construct($scope, $date) {
        $this->setScope($scope);
        $this->setDate($date);
    }

    public function getData() {
        return $this->data;
    }

    public function getColors() {
        return $this->colors;
    }

}
