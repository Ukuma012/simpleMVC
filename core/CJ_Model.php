<?php
    
    require_once(__DIR__.'/database/CJ_Connection.php');

    class CJ_Model{
        function __construct()
        {
            $db = new CJ_Connection();
                $this->connection = $db->getConnection(); 
        }

        // function create($tableName){};

        // function read($tableName){};

        // function update($tableName){};

        // function delete($tableName){};

        // function where($tableName){};
    }

?>