<?php
namespace App\Helpers;
use Carbon\Carbon;

class State
{

    public $now;
    public  $today     = 0;
    public  $yesterday = 0;
    public  $week      = 0;
    public  $month     = 0;
    public  $year      = 0;

    function __construct()
    {

        $this->constructToday();
       /* $this->constructYesterday();
        $this->constructMonth();
        $this->constructYear();*/
    }

    function constructToday() {
        $now = $this->now = Carbon::now('asia/dhaka');
        $this->now = date('y-m-d h:i:s a', strtotime($now));
    }

    /*function constructYesterday() {
        $yesterday = Carbon::yesterday();
        $this->yesterday = Action::whereDate( 'created_at', $yesterday->toDateString() )->count();
    }

    function constructMonth() {
        $this->month = Action::whereMonth( 'created_at', $this->now->month )->count();
    }

    function constructYear() {
        $this->year = Action::whereYear( 'created_at', $this->now->year )->count();
    }*/

}
