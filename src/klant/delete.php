    <?php
    // auteur: Biorn Molendijk
    
    
    require '../../vendor/autoload.php';
    use Bas\classes\Klant;
    
    if(isset($_POST["verwijderen"])){

        
    
        $klantId = $_GET['klantId'];
        echo "Klant ID to delete: " . $klantId . "<br>";
    
        $klant = new Klant();
    
        $success = $klant->deleteKlant($klantId);
        if ($success) {
            echo '<script>alert("Klant verwijderd")</script>';
        } else {
            echo '<script>alert("Klant verwijderen mislukt")</script>';
        }
    
        echo "<script> location.replace('read.php'); </script>";
    }
    ?>