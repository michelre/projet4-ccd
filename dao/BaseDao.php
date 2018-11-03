<?php
/**
 * Created by IntelliJ IDEA.
 * User: remimichel
 * Date: 03/11/2018
 * Time: 12:02
 */

class BaseDao
{

    protected $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:dbname=ccdp5;host=127.0.0.1', 'root', '');
    }

}
