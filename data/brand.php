<?php 
    class Brand {
        private $brandCode;
        private $brandName;

        function __construct(int $brandCode, string $brandName) {
            $this->brandCode = $brandCode;
            $this->brandName = $brandName;
        }

        function getBrandCode() {
            return $this->brandCode;
        }

        function getBrandName() {
            return $this->brandName;
        }
    }
?>