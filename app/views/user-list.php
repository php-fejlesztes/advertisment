<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Felhasználók listája</title>
    <link rel="stylesheet" href="/advertisment/public/css/advertisment.css">
</head>
<body>
    <div class="content">
        <div class="topnav">
            <a href="/advertisment/">Home</a>
            <a href="/advertisment/user/index">Felhasználók</a>
            <a href="/advertisment/advertisment/index">Hirdetések</a>
        </div>     
        <h1>Felhasználók kezelése</h1>
        <p>A következő listában azokat a felhasználókat látja, akik hirdetéseket adhatnak fel.</p>
        <h2>Felhasználók listája:</h2>
        <?php       
            if (!isset($users) ||  $users==null) {
                    echo "<p>Nincs felhasználó az adatbázisban!</p>";
            }    
            else { 
                echo '<div class="table">';
                echo '<div class="row-head">';
                echo '<div class="cell-id">Azon.</div>';
                echo '<div class="cell-name">Felhasználó név</div>';
                echo '</div>';
                $i=0;
                foreach($users as $user) {   
                    if ($i%2==0)
                        echo '<div class="row-dark">';
                    else
                        echo '<div class="row-light">';
                    echo '<div class="cell-id">'.$user->getUserId().'</div>';
                    echo '<div class="cell-name">'.$user->getUserName().'</div>';
                    echo '</div>';
                    $i=$i+1;
                }    
                echo '</div>';
            }
        ?>
    </div>
</body>
</html>