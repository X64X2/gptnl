<?php
session_start();
if($_SESSION['username'] <> "Pepe"){header('location: 404.html');} // fucking genius
?>
<html>
<title>soy Console</title>
<style>
html {
background-color:black;
color:limegreen;
}
#console {
color:limegreen;
padding:30px;
border:solid 2px limegreen;
margin:30px;
overflow-y:scroll;
height:500px;
}
</style>
<div id="console">
