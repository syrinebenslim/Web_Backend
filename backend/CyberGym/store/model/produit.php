<?php
    class produit{
        private $id;
        private $name;
        private $description;
        private $price;
        private $quantity;
        private $image;

        public function __construct($name,$description,$price,$quantity,$image){
            $this->name = $name;
            $this->description = $description;
            $this->price = $price;
            $this->quantity = $quantity;
            $this->image = $image;
        }

        public function getId(){
            return $this->id;
        }

        public function getName(){
            return $this->name;
        }
        public function setName($name){
            $this->name = $name;
        }

        public function getDescription(){
            return $this->description;
        }
        public function setDescription($description){
            $this->description = $description;
        }

        public function getPrice(){
            return $this->price;
        }
        public function setPrice($price){
            $this->price = $price;
        }

        public function getQuantity(){
            return $this->quantity;
        }
        public function setQuantity($quantity){
            $this->quantity = $quantity;
        }

        public function getImage(){
            return $this->image;
        }
        public function setImage($image){
            $this->image = $image;
        }
    }
?>