<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Felhasználók listája</title>
    <link rel="stylesheet" href="/advertisment/public/css/advertisment.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>

    </script>
</head>
<body>
    <div class="content">

        <?php
            // Navigáció
            require_once("./app/views/src/navigation.php");
        ?>

        <h1>Felhasználók kezelése</h1>
        <p>A következő listában azokat a felhasználókat látja, akik hirdetéseket adhatnak fel.</p>
        <h2>Felhasználók adatai:</h2>
        
        <?php 

            echo '<form id="form-update" class="form-boxing" action="#">';
                echo '<p>Azon.</p>';
                echo '<p>1</p>';
                echo '<label class="form-label" for="name">Felhasználó név:</label>';
                echo '<input class="form-text" id="name" type="text"  name="" value="">';
                echo '<div class="submit-wrapper">';
                    echo '<button type="submit"><img class="icon-button" src="/advertisment/public/img/trash.png"></img>Mentés</button>';
                echo '</div>'; //submitwrapper
            echo '</form>';
        ?>
        <p>Felhasználók listája:</p>
        <?php 
        // új gomb        
        $actionUrl=APPURL."user/add";
        echo '<form class="form" action='.$actionUrl.'>';
        echo '<input type="hidden" id="control-new" name="control" value="new-item">';
        echo '<button type="submit"><img class="icon-button" src="/advertisment/public/img/add.png"></img>Új felhasználó</button>';
        echo '</form>';
        ?>

        <?php       
            if (!isset($users) ||  $users==null) {
                    echo "<p>Nincs felhasználó az adatbázisban!</p>";
            }    
            else { 
                echo '<div class="table">';
                echo '<div class="row-head">';
                echo '<div class="cell-id">Azon.</div>';
                echo '<div class="cell-name">Felhasználó név</div>';
                echo '<div class="cell-id">Műveletek</div>';
                echo '</div>'; //row
                $i=0;
                foreach($users as $user) {   
                    if ($i%2==0)
                        echo '<div class="row-dark">';
                    else
                        echo '<div class="row-light">';
                    echo '<div class="cell-id">'.$user->getUserId().'</div>';
                    echo '<div class="cell-name">'.$user->getUserName().'</div>';
                    echo '<div class="cell-id">';
                        echo '<a href="#"><img class="icon" src="/advertisment/public/img/pencil.png"></img></a>';
                        echo '<a href="#"><img class="icon" src="/advertisment/public/img/trash.png"></img></a>';
                    echo '</div>'; // műveletek
                    echo '</div>'; // row
                    $i=$i+1;
                }    
                echo '</div>'; // table
            }
        ?>
        <p>
    </div>
</body>
</html>