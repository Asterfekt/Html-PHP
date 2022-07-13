<!DOCTYPE HTML>
<html lang="pl">
<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Kalkulator</title>

    <meta name="description" content="Serwis o starych grach pochodzących z Nintendo Entertainment System" />
    <meta name="keywords" content="gry, komputerowe, retro, nes, konsole, retrogranie, stare gry" />

    <link href="style.css" rel="stylesheet" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="icon" href="img/knowledge.png" type="image/x-icon">
    <link href="css/fontello.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <div class="wrapper">
        <div class="header">

            <div class="logo">
                <img src="img/Elektronika.png" style="float: left;" width="5%" />
                <b style="color: darkslategrey"><span style="color: indianred">Electronic</span>Katalog
                    <div style="clear:both;"></div>
                </b>
            </div>
        </div>
       <center> <div class="nav">
            <ol>
                    <li><a href="index.html">Strona główna</a></li>
                    <li><a href="wzory.html">Wzory</a>

                    </li>
                    <li><a>Autor</a>
                        <ul>
                            <li><a href="Polityka.html">Polityka</a></li>
                            <li><a href="O%20mnie.html">O mnie</a></li>
                            <li><a href="zrodla.html">Źródła</a></li>
                        </ul>
                    </li>

                </ol>

        </div></center>

        <div class="content" style="color: black">

            <div class="strona1">

                <h2>
                    <center>KALKULATOR REZYSTANCJI </center>
                </h2>

            </div>

            <p>

            </p>
        </div>
        <div class="content" style="color: black">

            <div class="strona2">

                <h2>
                    <center>Kalkulator RezystancjI</center>
					  <center>R=U/I[Ω]</center>
                </h2>
				
				
				<h2></h2><center>
				 <center></center>
				<form method="POST" action="Kalkulator.php">
    <input type="text" name="liczba1" size="10">
    <select name="znak">
    
        <option>/</option>
    </select>
    <input type="text" name="liczba2" size="10">
    <input type="submit" value="Oblicz">
</form>
<?php
$liczba1 = $_POST['liczba1'];
$liczba2 = $_POST['liczba2'];
$znak = $_POST['znak'];
$wynik = "";
switch ($znak)
{
    case "+":
        $wynik = $liczba1+$liczba2;
        break;
    case "-":
        $wynik = $liczba1-$liczba2;
        break;
    case "*":
        $wynik = $liczba1*$liczba2;
        break;
    case "/":
        $wynik = $liczba1/$liczba2;
        break;
	   
 

      

}
echo "Rezystancja:".$wynik;echo"Ω"
?>
</center>
              
     <center><button>  <a href="Rezystory.php"> Lista rezystorów  </a></button></center>
            

            </div>
        </div>

       

<div class="content" style="color: black">
        </div>



        
    </div>





</body></html>