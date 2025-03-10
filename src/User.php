<?php

/**
 * User
 * 
 * A user of the system
 */
class User
{

    /**
     * First name
     * @var string
     */
    public $first_name;

    /**
     * 
     * Last name
     * @var string
     */
    public $surname;

    /**
     * Get the user's full name from thair first name and surname
     * 
     * @return string the user's full name
     *
     */
    public function getFullName()
    {
        return trim("$this->first_name $this->surname");
    }
}
