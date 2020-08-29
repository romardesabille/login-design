<?php
class DB{
    //Todo
    protected $_db;
    private $_count;

    public function __construct()
    {
        global $database;
        $this->_db = new PDO(
            'mysql:host='.$database['host'].';dbname='.$database['name'].';charset='.$database['charset'],
            $database['username'],$database['password']
        );
        $this->_db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        $this->_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function query($query, $params = array()){
        $statement = $this->_db->prepare($query);
        $statement->execute($params);

        if(explode(' ', $query)[0] == 'SELECT'){
            $data = $statement->fetchAll();
            $this->_count = count($data);
            return $data;
        }
    }

    public function count(){
        return $this->_count;
    }





}
?>