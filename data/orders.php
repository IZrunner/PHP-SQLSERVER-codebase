<?php
    class Orders {
        private $orderCode;
        private $orderCustomerId;
        private $orderWorkerId;
        private $orderServiceCode;
        private $orderDeviceCode;
        private $contractConclusionDae;
        private $orderDeadline;
        private $orderExecuted;

        function __construct(int $code, int $customerId, int $workerId,
            int $orderServiceCode, int $orderDeviceCode, string $conclusionDate, string $deadline,
            bool $executed) {
            $this->orderCode = $code;
            $this->orderCustomerId = $customerId;
            $this->orderWorkerId = $workerId;
            $this->orderServiceCode = $orderServiceCode;
            $this->orderDeviceCode = $orderDeviceCode;
            $this->contractConclusionDae = $conclusionDate;
            $this->orderDeadline = $deadline;
            $this->orderExecuted = $executed;
        }

        function getOrderCode() {
            return $this->orderCode;
        }

        function getOrderCustomerId() {
            return $this->orderCustomerId;
        }

        function getOrderWorkerId() {
            return $this->orderWorkerId;
        }

        function getOrderServiceCode() {
            return $this->orderServiceCode;
        }

        function getOrderDeviceCode() {
            return $this->orderDeviceCode;
        }

        function getContractConclusionDae() {
            return $this->contractConclusionDae;
        }

        function getOrderDeadline() {
            return $this->orderDeadline;
        }

        function getOrderExecuted() {
            return $this->orderExecuted;
        }
    }
?>