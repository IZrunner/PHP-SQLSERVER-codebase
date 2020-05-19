<?php
    class Clisents {
        private $clientId;
        private $clientName;
        private $clientLastName;
        private $clientContactPhoneNumber;
        private $clientContactMail;

        function __construct(int $id, string $name, string $lastName, 
                        string $contactPhoneNum, string $contactMail) {
            $this->clientId = $id;
            $this->clientName = $name;
            $this->clientLastName = $lastName;
            $this->clientContactPhoneNumber = $contactPhoneNum;
            $this->clientContactMail = $contactMail;
        }

        function getCientId() {
            return $this->clientId;
        }
        
        function getCientName() {
            return $this->clientName;
        }

        
        function getCientLastName() {
            return $this->clientLastName;
        }

        function getCientContactPhoneNumber() {
            return $this->clientContactPhoneNumber;
        }
  
        function getCientContactMail() {
            return $this->clientContactMail;
        }
    }
?>