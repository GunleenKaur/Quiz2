<?php
// THIS IS AN INDIVIDUAL TEST
// ZERO MARK FOR PLAGIARISM AND CHEATING
// STUDENT IN VIOLATION OF ACADEMIC INTEGRITY POLICIES WILL FACE  
// DISCIPLINARY ACTION BY THE COLLEGE ADMINISTRATION

// COMPLETE YOUR DETAIL HERE
/*
    File:   Quiz 2 CSIS 3280 001 
    Version: A
    Name:   Gunleen Kaur
    ID  :  300373306

*/

// WRITE YOUR CODE BELOW
// MAKE SURE TO MAKE A BACKUP COPY OF THIS FILE BEFORE WORKING ON THE AUTHENTICATION REQUIREMENT

require_once('inc/config.inc.php');
require_once('inc/Entity/Car.class.php');
require_once('inc/Entity/Page.class.php');
require_once('inc/Entity/User.class.php');

require_once('inc/Utility/CarDAO.class.php');
require_once('inc/Utility/LoginManager.php');
require_once('inc/Utility/PDOService.class.php');
require_once('inc/Utility/UserDAO.class.php');

CarDAO::init('Car');
UserDAO::init();

$carClass=CarDAO::getCars();

if(empty($_GET))
{
Page::displayHeader();
Page::displayTable($carClass);
//Page::displayCarDetail($carClass);
//Page::displayLoginForm();
Page::displayFooter();
}
/*
if(LoginManager::verifyLogin())
{
    Page::displayLoginForm();
}
*/
?>