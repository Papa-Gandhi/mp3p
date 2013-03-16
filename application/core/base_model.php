<?php
/**
 * fundation for the application model
 * @author Albu Nicoleta
 */
abstract class Base_Model extends CI_Model{
    /**
     * will insert/update instance to database
     */
    public abstract function save();
    
    /**
     * will delete instance from database
     */
    public abstract function delete();
    
    /**
     * will load row from database by id
     * @param int $id
     */
    public abstract function load(int $id);
    
    /**
     * will load row from database by property
     * @param string $name property name
     * @param mixed $value property value
     */
    public abstract function loadByProperty($name, $value);  
    
}
