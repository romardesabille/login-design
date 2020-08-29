<?php
class Model{

    protected $security;

    public function __construct()
    {
        $this->security = new Security();
        $this->db = new DB();
    }
}
?>