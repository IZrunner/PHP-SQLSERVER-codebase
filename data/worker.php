<?php
    class Worker {
        private $workerId;
        private $workerName;
        private $workerLastName;
        private $workerQualification;
        private $workerExperience;
        private $workerRetireAge;

        function __construct(int $id, string $name, string $lastName, 
        string $qualification, int $experience, int $retireAge) {
            $this->workerId = $id;
            $this->workerName = $name;
            $this->workerLastName = $lastName;
            $this->workerQualification = $qualification;
            $this->workerExperience = $experience;
            $this->workerRetireAge = $retireAge;
        }

        function getWorkerId() {
            return $this->workerId;
        }

        function getWorkerName() {
            return $this->workerName;
        }

        function getWorkerLastName() {
            return $this->workerLastName;
        }

        function getWorkerQualification() {
            return $this->workerQualification;
        }

        function getWorkerExperience() {
            return $this->workerExperience;
        }

        function getWorkerRetireAge() {
            return $this->workerRetireAge;
        }
    }
?>