<?php
    class Devices {
        private $deviceCode;
        private $deviceSerialNumber;
        private $deviceModelCode;
        private $deviceAvailableOnMarket;
        private $deviceModificationStatus;

        function __construct(int $code, string $serialNumber,
            int $modelCode, bool $available, string $status) {
            $this->deviceCode = $code;
            $this->deviceSerialNumber = $serialNumber;
            $this->deviceModelCode = $modelCode;
            $this->deviceAvailableOnMarket = $available;
            $this->deviceModificationStatus = $status;
        }

        function getDeviceCode() {
            return $this->deviceCode;
        }

        function getDeviceSerialNumber() {
            return $this->deviceSerialNumber;
        }

        function getDeviceModelCode() {
            return $this->deviceModelCode;
        }
        
        function getDeviceAvailableOnMarket() {
            return $this->deviceAvailableOnMarket;
        }

        function getDeviceModificationStatus() {
            return $this->deviceModificationStatus;
        }
    }
?>