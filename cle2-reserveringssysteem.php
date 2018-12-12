//<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "programmeren2";

$db = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);


if (mysqli_connect_error()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$reserveringssysteem = "SELECT * FROM reserveringssysteem ";

$results = mysqli_query($db,$reserveringssysteem);

$reservering = [];

while($row = mysqli_fetch_array($results)){
    $reservering[] = $row;
}

foreach($reservering as $reserv) {

    echo $reserv['tijd'];
}


?>


<!doctype html>
<html lang="en" class="html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="calendar.css" type="text/css">

</head>


<body class="body" style="background-color: white; margin: 0;">


<div class="header__image">
    <img src="seoulsista_background1.jpg" class="image" alt="Foto seoulsista"/>

</div>


<div class="Opmerkingen_block">
    <div class="Opmerking_ofzo">
        <input type="text" class="input__block" value=" Eventuele opmerkingen" style="border-style: solid"
    </div>
</div>


<div class="calendar__block" >
    <div class="calender__title">
        <h1>Reserveren Seoul Sista</h1>
    </div>
    <div class="calendar">
        <div class="calendar__inner">
            <div class="selected__content__block">
                <?php
                //hier de code die ervoor moet zorgen dat de reservering van de klant wordt verzonden naar database en ook opgeslagen.

                ?>

                <form action="formdata.php" onsubmit="">
                    <ul>
                        <li class="content__element">
                            <input type="date" class="input__block" value="2018-01-01"></input>
                        </li>
                        <li class="content__element">
                            <input type="number" class="input__block" placeholder="personen"></input>
                        </li>
                        <li class="content__element">
                            <select type="time" class="input__block" placeholder="tijd" value="17:00" >
                                <option>
                                    17:00
                                </option>
                                <option>
                                    17:15
                                </option>
                                <option>
                                    17:30
                                </option>

                            </select>
                        </li>
                        <li class="content__element">
                            <input type="text" class="input__block" placeholder="Uw naam"></input>
                        </li>
                    </ul>
                    <button class="button" >Reserveer</button>
                </form>
            </div>
        </div>
        <div class="calendar__calendar">
<!--            calendar__calendar-->

        </div>
    </div>
</div>



<br><br>




</body>
</html>
