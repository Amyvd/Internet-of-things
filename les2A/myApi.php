<?php
        
        
        // Report all errors
        // Dit is nu handig bij het testen
        // In een productie omgeving doe je dit niet of anders
        error_reporting(E_ALL);


        
        // my API reageert op GET en POST requests
        print "<h3>hello from myAPI !!</h3>"; // say hello to client
     
        
        $myTime = time(); // get the server time
        $image = "https://www.thesun.co.uk/wp-content/uploads/2020/08/NINTCHDBPICT000600110174.jpg";
        $image2 = "https://c625951.ssl.cf3.rackcdn.com/products/10/25/230/300x200/millies-kaasknabbels.jpg";

		if (!empty($_GET['data'])){  
            $dataFromGet= $_GET['data'];
            print "<h4>GET request ontvangen</h4>";
            print "de data uit het GET request is: " . $dataFromGet;
            switch($dataFromGet){
                case "server":
                        print "<pre>my server variables are:  " ;
                        print_r($_SERVER);  // show server data
                        print "</pre>"; 
                    break;
                case "tijd":
                        print "<br>server tijd: " . date("h:i:s",$myTime);
                    break;

                 // hier moet jij zelf code schrijven
                    
                case "easter egg":
                    print " <br> Welkom!! ";
                    print " <br> Nu heb je op het tekst balkje de code Easter egg ingetypt. ";
                    print " <br> .............. ";
                    print " <br> Mijn naam is Amy van duin. ";
                    print " <br> Ik ben 17 jaar oud en zit op het Mediacollege Amsterdam. ";
                    echo "<img src='{$image}'>";
                    break;
                case "kaasknabbel":
                    print " <br> Ik hou van kaasknabbels ";
                    echo " <img src='{$image2}'>";
                    break;
                  // einde eigen code  
                default:
                    print "<h3>please read the manual for valid requests &#128540;</h3>";
                    
            }
        }     
?>

