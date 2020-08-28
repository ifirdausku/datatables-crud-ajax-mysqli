<?php
include('Employee.php');
$emp = new Employee();
if(!empty($_POST['action']) && $_POST['action'] == 'listEmployee') {
	$emp->employeeList();
}
if(!empty($_POST['action']) && $_POST['action'] == 'addEmployee') {
	$emp->addEmployee();
}
if(!empty($_POST['action']) && $_POST['action'] == 'getEmployee') {
	$emp->getEmployee();
}
if(!empty($_POST['action']) && $_POST['action'] == 'updateEmployee') {
	$emp->updateEmployee();
}
if(!empty($_POST['action']) && $_POST['action'] == 'empDelete') {
	$emp->deleteEmployee();
}
?>