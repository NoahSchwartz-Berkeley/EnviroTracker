
{% load static %}





<!DOCTYPE html>

<html>
<head>
    <link rel="icon" type="image/png" href="http://example.com/myicon.png">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Homescreen</title>

    <link rel="stylesheet" type="text/css" href="{% static 'draw/vendor/bootstrap/css/bootstrap.min.css' %}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@1,700&display=swap" rel="stylesheet">

    <script type="text/javascript" src="{% static 'draw/vendor/jquery/jquery-3.3.1.min.js' %}"></script>

    <style type="text/css">
    </style>

</head>



<style type="text/css">

.companies {
    display:none;
}

</style>

<body>
<h1>Hello, World!</h1>

<?php

echo "Hi!!";

$user = 'Cheat Meal';
$password = 'EnviroTracker';

$database = 'companies';

$servername = 'localhost:8000';

$mysqli = new mysqli($servername, $user, $password, $database);

if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') ' .
    $mysqlui->connect_error);
}

$sql = "SELECT * FROM `amazon`";
$result = $mysqli->query($sql);
$mysqli->close();

?>

<input id="search" onkeyup="search_companies()" type="text" name="search" placeholder="Search for Companies">
<ol id='list'>
    <li class="companies">Amazon</li>
    <li class="companies">Target</li>
    <li class="companies">Astrid</li>
    <li class="companies">AmazingCompany</li>
    <li class="companies">Walmart</li>
    <li class="companies">Walgreens</li>
</ol>
</body>

<script>
    function search_companies() {
        let input = document.getElementById('search').value;
        input = input.toLowerCase();
        let companies = document.getElementsByClassName('companies');
        for (i = 0; i < companies.length; i += 1) {
            if (input.length == 0) {
                companies[i].style.display="none";
            } else {
                if (companies[i].innerHTML.toLowerCase().substring(0, input.length) === input) {
                    companies[i].style.display="list-item";
                } else {
                    companies[i].style.display="none";
                }
            }
        }
    }
</script>

</html>
