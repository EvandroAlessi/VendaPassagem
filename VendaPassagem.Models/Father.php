<?php 
     public class Father{

        trait Context;

        protected $attributes = [

        ];

        protected $excludes = [
            'id'
        ];


        public function getAttributes(){
            return $this->attributes;
        }

        public function getExcludes(){
            return $this->attributes;
        }

        public function getGetters()
        {
            $attributes = [];

            foreach($this as $key => $value){
                
                $attributes[$key] = "get" . ucwords($key);
            }
        }

        public function save(){
            $this->insert($this);
        }

       public static function all(){
           $this->getAll($this);
       }

    }
?>