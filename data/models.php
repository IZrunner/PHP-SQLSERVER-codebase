<?php
    class Models {
        private $modelCode;
        private $modelName;
        private $modelBrandCode;
        private $screenSize;
        

        function __construct(int $code, string $name,
            int $modelBrandCode, int $screenSize) {
            $this->modelCode = $code;
            $this->modelName = $name;
            $this->modelBrandCode = $modelBrandCode;
            $this->screenSize = $screenSize;
            
        }

        function getModelCode() {
            return $this->modelCode;
        }

        function getModelName() {
            return $this->modelName;
        }

        function getModelBrandCode() {
            return $this->modelBrandCode;
        }
        
        function getScreenSize() {
            return $this->screenSize;
        }
    }
?>