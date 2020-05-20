<?php
    class Order {
        private $orderCode;
        private $orderCustomerId;
        private $orderWorkerId;
        private $orderServiceCode;
        private $orderDeviceCode;
        private $contractConclusionDate;
        private $orderDeadline;
        private $orderExecuted;

        function __construct(int $code, Client $customerId, Worker $workerId,
            int $orderServiceCode, int $orderDeviceCode, datetime $conclusionDate, 
            datetime $deadline, bool $executed) {
            $this->orderCode = $code;
            $this->orderCustomerId = $customerId;
            $this->orderWorkerId = $workerId;
            $this->orderServiceCode = $orderServiceCode;
            $this->orderDeviceCode = $orderDeviceCode;
            $this->contractConclusionDate = $conclusionDate;
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
            return $this->contractConclusionDate->format("Y.m.d");
        }

        function getOrderDeadline() {
            return $this->orderDeadline->format("Y.m.d");
        }

        function getOrderExecuted() {
            return $this->orderExecuted;
        }
    }
?>