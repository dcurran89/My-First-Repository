<?php

class Model
{
    //This table property will be used to let our model know which database table we will be representing.
    protected static $table = '';

    // Array to store our key/value data
    private $attributes = [];

    // Magic setter to populate $attributes array
    public function __set($name, $value)
    {
        // Set the $name key to hold $value in $attributes
        $this->attributes[$name] = $value;
    }

    // Magic getter to retrieve values from $attributes
    public function __get($name)
    {
        // Check for existence of array key $name
        if (array_key_exists($name, $this->attributes)) {
            return $this->attributes[$name];
        }
        return null;
    }
    public static function getTableName() 
    {
        return static::$table;
    }
}
