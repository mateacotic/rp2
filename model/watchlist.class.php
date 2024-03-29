<?php
    class Watchlist{
        protected $id, $id_user, $id_movie, $watched;

        public function __construct( $id, $id_user, $id_movie, $watched ){
            $this->id = $id;
            $this->id_user = $id_user;
            $this->id_movie = $id_movie;
            $this->watched = $watched;
        }

        public function __get( $property ){
            if( property_exists( $this, $property ) )
                return $this->$property; 
        }

        public function __set( $property, $value ){
            if( property_exists( $this, $property ) )
                $this->$property = $value;
            
                return $this;
        }

        
    }

?>