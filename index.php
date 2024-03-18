<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NÉda Írisz</title>
</head>
<body>
    <?php

        # 1. FELADAT
        // Hozz létre egy 5 elemű tömböt véletlen számokkal (20 és 30 közötti zárt intervallumban) majd Írasd ki az összegüket
        $tomb = array();
        for ($i = 0; $i < 5; $i++) {
            $tomb[] = rand(20, 30);
        }

        echo "A tömb elemei: ";
        echo implode(", ", $tomb); // implode függvénnyel összefűzzük a tömb elemeit vesszővel elválasztva
        echo "<br>";

        $osszeg = array_sum($tomb);
        echo "A tömb elemeinek összege: $osszeg";
        echo "<br>";
        echo "<br>";


        # 2. FELADAT
        // Adott egy 3 elemű tömb véletlen érdemjegyekkel korábban feltöltve, 
        //majd írasd ki az érdemjegyekhez tartozó szöveges értelmezést (pl. 3: közepes)
        function ertelmezErtemjegy($erdemjegy) {
            switch ($erdemjegy) {
                case 1:
                    return "elégtelen";
                case 2:
                    return "elégséges";
                case 3:
                    return "közepes";
                case 4:
                    return "jó";
                case 5:
                    return "jeles";
                default:
                    return "ismeretlen érdemjegy";
            }
        }
        
        $erdemjegyek = [];
        for ($i = 0; $i < 3; $i++) {
            $erdemjegyek[] = rand(1, 5);
        }
        
        echo "Az érdemjegyek tömbje: ";
        echo implode(", ", $erdemjegyek); 
        echo "<br>";

        foreach ($erdemjegyek as $erdemjegy) {
            echo "$erdemjegy: " . ertelmezErtemjegy($erdemjegy) . "<br>";
        }
        echo "<br>";


        # 3. FELADAT
        //Hozz létre fejIras nevű logikai tömböt ($darabSzam darabszámú) véletlen értékekkel!
        //Számold meg a fejek számát, és írasd ki az eredményt!
        $darabSzam = 10; 
        $fejIras = array(); 

        for ($i = 0; $i < $darabSzam; $i++) {
            $fejIras[] = (bool)rand(0, 1);
        }

        echo "Dobások: ";
        echo implode(", ", $fejIras); 
        echo "<br>";

        $fejekSzama = array_sum($fejIras);
        echo "A fejek száma: $fejekSzama";
        echo "<br>";
        echo "<br>";



        # 4. FELADAT
        //Készítsd el egy sakktábla képét figurák nélkül (segítség: a kis “a” betűre így hivatkozhatsz: chr(97))!       

        $sorok = 8;
        $oszlopok = 8;
        
        // Sakktábla kirajzolása
        echo "<table style='border-collapse: collapse;'>";
        
        // első sorban betűk
        echo "<tr>"; // első sor kezdése
        echo "<td style='width: 50px; height: 50px;'></td>"; // Az első cella üres
        for ($j = 0; $j < $oszlopok; $j++) { // oszlopok
            $betu_jeloles = chr(97 + $j); // Oszlopok jelölése betűkkel
            echo "<td style='width: 50px; height: 50px; text-align: center; border: none;'>$betu_jeloles</td>"; // Betűs jelölés
        }
        echo "</tr>";
        
        // további sorokban megjelenítjük a számokat és a sakktáblát
        for ($i = 0; $i < $sorok; $i++) { // sorok
            echo "<tr>"; // sor kezdése
            // Először az aktuális sor jelölését írjuk ki (számozás)
            $szamozas = $sorok - $i;
            echo "<td style='width: 50px; height: 50px; text-align: center; border: none;'>$szamozas</td>"; // Számozás
            // Ezután az aktuális sor sakktábláját rajzoljuk ki
            for ($j = 0; $j < $oszlopok; $j++) { // oszlopok
                // Színváltás a sakktábla mintájának megfelelően
                $bg_color = ($i + $j) % 2 == 0 ? "white" : "black";
                // Sakktábla cella kirajzolása
                echo "<td style='width: 50px; height: 50px; background-color: $bg_color; border: 1px solid black;'></td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>