<?php
	require 'fragments/db.php';

	$query = 'SELECT orNumber,IDNumber,lastName,firstName,middleName,address,contactNumber,validDate, expiryDate FROM maablist ORDER BY validDate LIMIT 10';
    $result = mysqli_query($db, $query);

    $members = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $orNum = $row['orNumber'];
        $idNumber = $row['IDNumber'];
        $lastName = $row['lastName'];
        $firstName = $row['firstName'];
        $middleName = $row['middleName'];
        $address = $row['address'];
        $contactNumber = $row['contactNumber'];
        $validDate = $row['validDate'];
        $expiryDate = $row['expiryDate'];

        $member = new Member($orNum, $idNumber, $lastName, $firstName, $middleName, $address, $contactNumber, $validDate, $expiryDate);
        $members[] = $member;
    }

    mysqli_free_result($result);
