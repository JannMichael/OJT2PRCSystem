<?php
	require 'fragments/db.php';

	$query = 'SELECT orNumber,IDNumber,lastName,firstName,middleName, address,contactNumber, birthday, age, gender, status, validDate, expiryDate, remarks WHERE memType="Classic" FROM maablist ORDER BY validDate ';
    $results = mysqli_query($db, $query);

    $members = [];

    while ($row = mysqli_fetch_assoc($results)) {
        $orNum = $row['orNumber'];
        $idNumber = $row['IDNumber'];
        $lastName = $row['lastName'];
        $firstName = $row['firstName'];
        $middleName = $row['middleName'];
        $address = $row['address'];
        $contactNumber = $row['contactNumber'];
        $birthday = $row['birthday'];
        $age = $row['age'];
        $gender = $row['gender'];
        $status = $row['status'];
        $validDate = $row['validDate'];
        $expiryDate = $row['expiryDate'];
        $remarks = $row['remarks'];

        $member = new Member($orNumber, $IDNumber, $lastName, $firstName, $middleName, $address, $contactNumber, $birthday, $age, $gender, $status, $validDate, $expiryDate, $remarks);
        $members[] = $member;
    }

    mysqli_free_result($result);