<?php
include 'config.php';
session_start();

$errors = array(); 
$fname = '';
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $mybrgyname = mysqli_real_escape_string($conn,$_POST['brgy_name']);
    $myhouse_no = mysqli_real_escape_string($conn,$_POST['house_no']);
    $myhousehold_no = mysqli_real_escape_string($conn,$_POST['household_no']);
    $myfname = mysqli_real_escape_string($conn,$_POST['fname']);
    $mylname = mysqli_real_escape_string($conn,$_POST['lname']); 
    $mymname = mysqli_real_escape_string($conn,$_POST['mname']);
    $mybday = mysqli_real_escape_string($conn,$_POST['bday']); 
    $myage = mysqli_real_escape_string($conn,$_POST['age']);
    $myaddress = mysqli_real_escape_string($conn,$_POST['address']);
    $mycontact_no = mysqli_real_escape_string($conn,$_POST['contact_no']);
    $myprogram_name = mysqli_real_escape_string($conn,$_POST['program_name']);


    $query1 = "SELECT BarangayID FROM barangays
              WHERE brgyName = '$mybrgyname'";
    $res1 = mysqli_query($conn,$query1);
    $result1 = mysqli_fetch_array($res1);
    $brgyID = $result1['BarangayID'];

    $query2 = "SELECT ProgramID FROM programs
              WHERE programName = '$myprogram_name'";
    $res2 = mysqli_query($conn,$query2);
    $result2 = mysqli_fetch_array($res2);
    $prgmID = $result2['ProgramID'];
   
   
    $user_check_query = "SELECT Firstname, Lastname, MiddleName
                         FROM residents WHERE Firstname='$myfname' AND Lastname='$mylname' AND MiddleName='$mymname'";
    $results = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_array($results);
   
    if($user > 0){
      if($user['Firstname'] === $myfname) {
         if($user['Lastname'] === $mylname) {
           if($user['MiddleName'] === $mymname) {
              echo "Resident already exist!";
           }
         }
      }
    }

    elseif($user !== 0){
         $sql = "INSERT INTO residents(BarangayID, HouseNumber, HouseholdNumber, FirstName, LastName, MiddleName, BirthDate, Age, Address, ContactNumber, ProgramID) 
         VALUES('$brgyID', '$myhouse_no', '$myhousehold_no', '$myfname', '$mylname', '$mymname', '$mybday', '$myage', '$myaddress', '$mycontact_no', '$prgmID'); ";
         $result = mysqli_query($conn,$sql);
         echo "Resident added!";
    }
       
   }

   
?>
