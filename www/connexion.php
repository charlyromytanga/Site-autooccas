<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
   
    $password = $_POST['password'];
 
    $csvUrl = 'https://drive.google.com/file/d/1XlR7F-yoUlgNcJi__7TDsjFZSN2d92qt/view?usp=sharing';
 
    function readCsvFromUrl($url) {
        $csvData = [];
        if (($handle = fopen($url, "r")) !== false) {
            while (($data = fgetcsv($handle, 1000, ",")) !== false) {
                $csvData[] = $data;
            }
            fclose($handle);
        } else {
            die('Erreur lors de l\'ouverture du fichier CSV.');
        }
        return $csvData;
    }
 
    $csvData = readCsvFromUrl($csvUrl);
 
    $found = false;
 
    // Parcours des lignes du fichier CSV
    foreach ($csvData as $row) {
        // Supposons que la première colonne est l'email et la deuxième colonne est le mot de passe
        if ($row[0] == $email && $row[1] == $password) {
            $found = true;
            break;
        }
    }
 
    if ($found) {
        // Connexion réussie
        $_SESSION['email'] = $email;
        header('Location: acheter.php');
        exit();
    } else {
        echo 'Email ou mot de passe incorrect.';
        echo '<script>alert("E-mail ou mot de passe incorrect. Veuillez réessayer.");</script>';
    }
}
?>
