<?php
	class MemberDetails{
        private $birthday, $age, $gender, $status, $remarks;

        public function __construct($birthday, $age, $gender, $status, $remarks)
        {
            $this->birthday = $birthday;
            $this->age = $age;
            $this->gender = $gender;
            $this->status = $status;
            $this->remarks = $remarks;
        }

        public function getBday()
        {
            return $this->birthday;
        }

        public function getAge()
        {
            return $this->age;
        }

        public function getGender()
        {
            return $this->gender;
        }

        public function getStatus()
        {
            return $this->status;
        }

        public function getRemarks()
        {
            return $this->remarks;
        }

    }


