<?php namespace App\Services\Html;

/**
 * Abstraction for chart builders
 */
abstract class AbstractChart
{

    /**
     * Class analysed by the chart
     * @var object
     */
    protected $scope;

    /**
     * Date used as reference
     * @var \Carbon\Carbon
     */
    protected $date;

    /**
     * Data calculated by the process method
     * @var array
     */
    protected $data = [];

    /**
     * Colors calculated by the process method
     * @var array
     */
    protected $colors = [];

    /**
     * Set scope attribute
     * @param object $scope Scope
     * @return void
     */
    protected function setScope($scope) {
        $this->scope = $scope;
    }

    /**
     * Set date attribute
     * @param \Carbon\Carbon $date Date
     * @return void
     */
    protected function setDate($date) {
        $this->date = $date;
    }

    /**
     * Class constructor, called by forge() methods
     * @param object $scope Scope
     * @param \Carbon\Carbon $date Date
     */
    protected function __construct($scope, $date) {
        $this->setScope($scope);
        $this->setDate($date);
    }

    /**
     * Get data attribute
     * @return array Data
     */
    public function getData() {
        return $this->data;
    }

    /**
     * Get color attribute
     * @return array Colors
     */
    public function getColors() {
        return $this->colors;
    }

}
