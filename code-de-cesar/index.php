<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Code César</title>
</head>
<body>
    <header>
        <img src="logo-cesar.png" alt="Code de César logo">
        <h1>de César</h1>
    </header>

    <table width="10%" border="0" cellspacing="0" cellpadding="0" bgcolor="EEEEEE">
    <form method="GET" action="">
        <tr>
            <td>
                <textarea name="chaine" cols="30" rows="10" placeholder="Tapez votre chaine ici"></textarea>
            </td>
            <td>
                <input type="submit" value="Crypter/Décrypter">
            </td>
            <td>
                <?php
                    require "function_Cesar.php";

                    if(isset($_GET["chaine"]) && isset($_GET["choix"]) && isset($_GET["mode"])){ 
                        $chaine = $_GET["chaine"];
                        $choix  = intval($_GET["choix" ]);
                        $mode   = intval($_GET["mode"  ]);

                        $resultat = Cesar($chaine, $choix, $mode);
                        echo $resultat;
                    }else{
                        echo 'Vos paramètres ne sont pas valide';
                    }
                ?>
            </td>
        </tr>
    </table>

    <table width="572" border="0" cellspacing="0" cellpadding="0" bgcolor="EEEEEE">
        <tr>
            <td>Nombre(s) lettre(s) à décaler : <input type="text" name="choix" value="0"></td>
        </tr>
        <tr>
            <td>
                Mode : 
                <select name="mode" size="1">
                    <option value="1">Cryptage</option>
                    <option value="0">Décryptage</option>
                </select>
            </td>
        </tr>
    </form>
    </table>
</body>
</html>