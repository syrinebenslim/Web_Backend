<?php
    class category{
        private $id;
        private $idProd;
        private $categoryProd;
        private $descCategory;
        
        public function __construct($idProd,$categoryProd,$descCategory){
            $this->idProd = $idProd;
            $this->categoryProd = $categoryProd;
            $this->descCategory = $descCategory;
        }

        public function getId(){
            return $this->id;
        }

        public function getIdProd(){
            return $this->idProd;
        }
        public function setIdProd($idProd){
            $this->idProd = $idProd;
        }

        public function getCategory(){
            return $this->categoryProd;
        }
        public function setCategory($categoryProd){
            $this->categoryProd = $categoryProd;
        }

        public function getDescription(){
            return $this->descCategory;
        }
        public function setDescription($descCategory){
            $this->descCategory = $descCategory;
        }
    }
?>