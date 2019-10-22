<?php
    public class Context{
        public static $instance;
    
        private function __construct() {
            getConnection()
        }
    
        public static function getConnection() {
            if (!isset(self::$instance)) {
                self::$instance = new PDO('mysql:host=localhost; dbname=basedetestes', 
                    'root', '123456', 
                    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
                );
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, 
                    PDO::ERRMODE_EXCEPTION);
                self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, 
                    PDO::NULL_EMPTY_STRING);
            }
    
            return self::$instance;
        }

        public static function execute($sql){
            $p_sql = self::getConnection()->prepare($sql);

            return $p_sql->execute();
        }

        public function insert($class) {            
            $keys = [];
            $values = [];

            foreach($class as $key=>$value)
            {
                if(in_array($value, $class->excludes))
                    continue;

                $keys[] = $key;
                $value[] = "'" . $value . "'";
            }

            $sql = "INSERT INTO (" . implode(",", $keys) .") VALUES (" . implode(",", $values) . ");";

            return self::execute($sql);
        }

        public function update($class) {            
            $keys = [];
            $values = [];

            foreach($class->getAll() as $value)
            {
                $class->$value();

                if(in_array($value, $class->excludes))
                    continue;

                $keys[] = $key;
                $value[] = "'" . $value . "'";
            }

            $sql = "UPDATE ". ucwords(get_class($class)) ." (" . implode(",", $keys) .") VALUES (" . implode(",", $values) . ");";

            return self::execute($sql);
        }

        public function delete($class) { 
            $sql = "DELETE FROM ". ucwords(get_class($class)) ." WHERE id=". $class->id .";";

            return self::execute($sql);
        }

        public function select($class) {            
            $keys = [];
            $values = [];

            foreach($class as $key=>$value)
            {
                if(in_array($value, $class->excludes))
                    continue;

                $keys[] = $key;
                $value[] = "'" . $value . "'";
            }

            $sql = "INSERT INTO (" . implode(",", $keys) .") VALUES (" . implode(",", $values) . ");";

            return self::execute($sql);
        }
    }
?>