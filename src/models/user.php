<?php

class User {
   private $name;
   private $surname;
   private $email;
   private $password;
   private $verify;

   

   /**
    * Get the value of name
    */
   public function getName()
   {
      return $this->name;
   }

   /**
    * Set the value of name
    */
   public function setName($name): self
   {
      $this->name = $name;

      return $this;
   }

   /**
    * Get the value of surname
    */
   public function getSurname()
   {
      return $this->surname;
   }

   /**
    * Set the value of surname
    */
   public function setSurname($surname): self
   {
      $this->surname = $surname;

      return $this;
   }

   /**
    * Get the value of email
    */
   public function getEmail()
   {
      return $this->email;
   }

   /**
    * Set the value of email
    */
   public function setEmail($email): self
   {
      $this->email = $email;

      return $this;
   }

   /**
    * Get the value of password
    */
   public function getPassword()
   {
      return $this->password;
   }

   /**
    * Set the value of password
    */
   public function setPassword($password): self
   {
      $this->password = $password;

      return $this;
   }

   /**
    * Get the value of verify
    */
   public function getVerify()
   {
      return $this->verify;
   }

   /**
    * Set the value of verify
    */
   public function setVerify($verify): self
   {
      $this->verify = $verify;

      return $this;
   }
}