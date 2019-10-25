<?php
    namespace VendaPassagem\DAO;
    
    use PDO;

    class Context {
        public static $instance;
    
        public function __construct() {
            //getConnection()
        }
    
        public static function getConnection() {
            if (!isset(self::$instance)) {
                self::$instance = new PDO('mysql:host=localhost; dbname=VendaPassagem', 
                    'root', 'root', 
                    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
                );
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, 
                    PDO::ERRMODE_EXCEPTION);
                self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, 
                    PDO::NULL_EMPTY_STRING);
            }
    
            return self::$instance;
        }

        public static function execute($sql, $data){
            $p_sql = self::getConnection()->prepare($sql);

            if (!empty($data)) 
                foreach ($data as $key => $value)
                    $p_sql->bindValue(":" . $key, $value);
                
            
   
            return $p_sql->execute();
        }

        public static function query($sql){
            return self::getConnection()->query($sql);
        }



        // public function insert($class) {            
        //     $keys = [];
        //     $values = [];

        //     foreach($class as $key=>$value)
        //     {
        //         if(in_array($value, $class->excludes))
        //             continue;

        //         $keys[] = $key;
        //         $value[] = "'" . $value . "'";
        //     }

        //     $sql = "INSERT INTO (" . implode(",", $keys) .") VALUES (" . implode(",", $values) . ");";

        //     return self::execute($sql);
        // }

        // public function update($class) {            
        //     $keys = [];
        //     $values = [];

        //     foreach($class->getAll() as $value)
        //     {
        //         $class->$value();

        //         if(in_array($value, $class->excludes))
        //             continue;

        //         $keys[] = $key;
        //         $value[] = "'" . $value . "'";
        //     }

        //     $sql = "UPDATE ". ucwords(get_class($class)) ." (" . implode(",", $keys) .") VALUES (" . implode(",", $values) . ");";

        //     return self::execute($sql);
        // }

        // public function delete($class) { 
        //     $sql = "DELETE FROM ". ucwords(get_class($class)) ." WHERE id=". $class->id .";";

        //     return self::execute($sql);
        // }

        // public function selectAll($class) {   
        //     $sql = "SELECT * FROM  INTO ". ucwords(get_class($class)) .";";

        //     return self::execute($sql);
        // }
    }
?>