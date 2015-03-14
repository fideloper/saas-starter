<?php  namespace App\Logger; 

interface Loggable {

    /**
     * @return \App\User
     */
    public function getUser();

    /**
     * @return string
     */
    public function getLabel();

    /**
     * @return array
     */
    public function getData();
}