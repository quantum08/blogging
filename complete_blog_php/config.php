<?php
   
   session_start();

   //connet to database
   $conn = mysqli_connect("localhost","root","","complete_blog_php");
   if(!$conn){
   	die("Error connecting to database:" .mysqli_connect_error());
   }

   define('ROOT_PATH' ,realpath(dirname(__FILE__)));
   define('BASE_URL','http://localhost/complete_blog_php/');

?>