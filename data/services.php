<?php
    class Services {
        private $serviceCode;
        private $serviceName;
        private $servicePrice;
        private $serviceType;

        function __construct(int $code, string $name, int $price, 
            string $type) {
            $this->serviceCode = $code;
            $this->serviceName = $name;
            $this->servicePrice = $price;
            $this->serviceType = $type;
        }

        function getServiceCode() {
            return $this->serviceCode;
        }

        function getServiceName() {
            return $this->serviceName;
        }

        function getServicePrice() {
            return $this->servicePrice;
        }

        function getServiceType() {
            return $this->serviceType;
        }
    }
?>