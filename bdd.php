<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <header>
    <div class="bande-grise">
        <h1>Bienvenue !</h1> 
    </div>
</header>

<?php
$host = 'localhost'; 
$dbname = 'php'; 
$username = 'root'; 
$password = 'test';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
    $sql = "SELECT * FROM ligue1";
    $stmt = $conn->query($sql);

    
    if ($stmt->rowCount() > 0) {
        echo "<h2> Ligue 1 :</h2>";
        echo "<table>";
        echo "<tr><th>ID</th><th>Nom</th><th>Stade</th><th>Nombre de place</th></tr>";

        
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nom'] . "</td>";
            echo "<td>" . $row['stade'] . "</td>";
            echo "<td>" . $row['nombre_de_place'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "Aucun enregistrement trouvé dans la table ligue1.";
    }
    
    
} catch (PDOException $e) {
    
}
?>
<div class="ajouter_ligue1">
<h3>Ajouter une équipe à la ligue 1 :</h3>
<form method="post">
    <label for="id">ID :</label>
    <input type="text" name="id" id="id" required><br>

    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom" required><br>

    <label for="nom">Stade :</label>
    <input type="text" name="stade" id="stade" required><br>

    <label for="nom">Nombre de place :</label>
    <input type="text" name="place" id="place" required><br>

    <input type="submit" name="submit" value="Ajouter">
</form>
</div>

<div class ="modifier_ligue1">
<h3>Modifier une équipe de ligue 1 :</h3>
<form method="post">
    <label for="id_to_modify">ID :</label>
    <input type="text" name="id_to_modify" id="id_to_modify" required><br>

    <label for="nom_to_modify">Nouveau nom :</label>
    <input type="text" name="nom_to_modify" id="nom_to_modify"><br>

    <label for="stade_to_modify">Nouveau stade :</label>
    <input type="text" name="stade_to_modify" id="stade_to_modify"><br>

    <label for="nombre_de_place_to_modify">Nouveau nombre de places :</label>
    <input type="text" name="nombre_de_place_to_modify" id="nombre_de_place_to_modify"><br>

    <input type="submit" name="submit" value="Modifier">
</form>
</div>

<div class="supprimer_ligue1">
    <h3>Supprimer une équipe de ligue 1 :</h3>
    <form method="post">
    <label for="id_to_delete">ID :</label>
    <input type="text" name="id_to_delete" id="id_to_delete" required><br>

    <input type="submit" name="submit" value="Supprimer">
</form>
</div>

<?php
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
    
        $sql = "SELECT * FROM seria_a";
        $stmt = $conn->query($sql);

        if ($stmt->rowCount() > 0) {
            echo "<h2> Série A :</h2>";
            echo "<table>";
            echo "<tr><th>ID</th><th>Nom</th><th>Stade</th><th>Nombre de place</th></tr>";

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['nom'] . "</td>";
                echo "<td>" . $row['stade'] . "</td>";
                echo "<td>" . $row['nombre_de_place'] . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "Aucun enregistrement trouvé dans la table $table.";
        }
    
} catch (PDOException $e) {
    
}
?>
<div class="ajouter_seria_a">
<h3>Ajouter une équipe à la Série A :</h3>
<form method="post">
    <label for="id">ID :</label>
    <input type="text" name="id" id="id" required><br>

    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom" required><br>

    <label for="nom">Stade :</label>
    <input type="text" name="stade" id="stade" required><br>

    <label for="nom">Nombre de place :</label>
    <input type="text" name="place" id="place" required><br>

    <input type="submit" name="submit" value="Ajouter">
</form>
</div>

<div class="modifier_seria_a">
<h3>Modifier une équipe de Série A :</h3>
<form method="post">
    <label for="id_to_modify">ID :</label>
    <input type="text" name="id_to_modify" id="id_to_modify" required><br>

    <label for="nom_to_modify">Nouveau nom :</label>
    <input type="text" name="nom_to_modify" id="nom_to_modify"><br>

    <label for="stade_to_modify">Nouveau stade :</label>
    <input type="text" name="stade_to_modify" id="stade_to_modify"><br>

    <label for="nombre_de_place_to_modify">Nouveau nombre de places :</label>
    <input type="text" name="nombre_de_place_to_modify" id="nombre_de_place_to_modify"><br>

    <input type="submit" name="submit" value="Modifier">
</form>
</div>

<div class="supprimer_seria_a">
    <h3>Supprimer une équipe de Série A :</h3>
    <form method="post">
    <label for="id_to_delete">ID :</label>
    <input type="text" name="id_to_delete" id="id_to_delete" required><br>

    <input type="submit" name="submit" value="Supprimer">
</form>
</div>



<?php
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
    $sql = "SELECT * FROM premier_league";
    $stmt = $conn->query($sql);

    
    if ($stmt->rowCount() > 0) {
        echo "<h2>Première League:</h2>";
        echo "<table>";
        echo "<tr><th>ID</th><th>Nom</th><th>Stade</th><th>Nombre de place</th></tr>";

        
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nom'] . "</td>";
            echo "<td>" . $row['stade'] . "</td>";
            echo "<td>" . $row['nombre_de_place'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "Aucun enregistrement trouvé dans la table $table.";
    }
    

} catch (PDOException $e) {
    
}
?>
<div class="ajouter_premier_league">
<h3>Ajouter une équipe à la Première league :</h3>
<form method="post">
    <label for="id">ID :</label>
    <input type="text" name="id" id="id" required><br>

    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom" required><br>

    <label for="nom">Stade :</label>
    <input type="text" name="stade" id="stade" required><br>

    <label for="nom">Nombre de place :</label>
    <input type="text" name="place" id="place" required><br>

    <input type="submit" name="submit" value="Ajouter">
</form>
</div>


<div class="modifier_premier_league">
<h3>Modifier une équipe de Première league :</h3>
<form method="post">
    <label for="id_to_modify">ID :</label>
    <input type="text" name="id_to_modify" id="id_to_modify" required><br>

    <label for="nom_to_modify">Nouveau nom :</label>
    <input type="text" name="nom_to_modify" id="nom_to_modify"><br>

    <label for="stade_to_modify">Nouveau stade :</label>
    <input type="text" name="stade_to_modify" id="stade_to_modify"><br>

    <label for="nombre_de_place_to_modify">Nouveau nombre de places :</label>
    <input type="text" name="nombre_de_place_to_modify" id="nombre_de_place_to_modify"><br>

    <input type="submit" name="submit" value="Modifier">
</form>
</div>

<div class="supprimer_premier_league">
    <h3>Supprimer une équipe de Première league :</h3>
    <form method="post">
    <label for="id_to_delete">ID :</label>
    <input type="text" name="id_to_delete" id="id_to_delete" required><br>

    <input type="submit" name="submit" value="Supprimer">
</form>
</div>





<?php
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
    if (isset($_POST['submit'])) {

        $id = $_POST['id'];
        $nom = $_POST['nom'];
        $stade = $_POST['stade'];
        $nombreDePlace = $_POST['nombre_de_place'];

        $sql = "INSERT INTO ligue1 (id, nom, stade, nombre_de_place) VALUES (:id, :nom, :stade, :nombre_de_place)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':stade', $stade);
        $stmt->bindParam(':nombre_de_place', $nombreDePlace);
        $stmt->execute();
    }
} catch (PDOException $e) {
    
}

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
    if (isset($_POST['submit'])) {
        
        $id_to_modify = $_POST['id_to_modify'];
        $nom_to_modify = $_POST['nom_to_modify'];
        $stade_to_modify = $_POST['stade_to_modify'];
        $nombre_de_place_to_modify = $_POST['nombre_de_place_to_modify'];

        
        $sql = "UPDATE ligue1 SET nom = :nom, stade = :stade, nombre_de_place = :nombre_de_place WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id_to_modify);
        $stmt->bindParam(':nom', $nom_to_modify);
        $stmt->bindParam(':stade', $stade_to_modify);
        $stmt->bindParam(':nombre_de_place', $nombre_de_place_to_modify);
        $stmt->execute();

        
        $id_to_modify = null;
        $nom_to_modify = null;
        $stade_to_modify = null;
        $nombre_de_place_to_modify = null;
    }
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
    if (isset($_POST['submit'])) {
        
        $id_to_delete = $_POST['id_to_delete'];

        
        $sql = "DELETE FROM ligue1 WHERE id = :id_to_delete";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id_to_delete', $id_to_delete);
        $stmt->execute();
    }
} catch (PDOException $e) {
   
}











try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
    if (isset($_POST['submit'])) {

        $id = $_POST['id'];
        $nom = $_POST['nom'];
        $stade = $_POST['stade'];
        $nombreDePlace = $_POST['nombre_de_place'];

        $sql = "INSERT INTO seria_a (id, nom, stade, nombre_de_place) VALUES (:id, :nom, :stade, :nombre_de_place)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':stade', $stade);
        $stmt->bindParam(':nombre_de_place', $nombreDePlace);
        $stmt->execute();
    }
} catch (PDOException $e) {
    
}

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
    if (isset($_POST['submit'])) {
        
        $id_to_modify = $_POST['id_to_modify'];
        $nom_to_modify = $_POST['nom_to_modify'];
        $stade_to_modify= $_POST['stade_to_modify'];
        $nombre_de_place_to_modify = $_POST['nombre_de_place_to_modify'];

        
        $sql = "UPDATE seria_a SET nom = :nom, stade = :stade, nombre_de_place = :nombre_de_place WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id_to_modify);
        $stmt->bindParam(':nom', $nom_to_modify);
        $stmt->bindParam(':stade', $stade_to_modify);
        $stmt->bindParam(':nombre_de_place', $nombre_de_place_to_modify);
        $stmt->execute();

        
        $id_to_modify = null;
        $nom_to_modify = null;
        $stade_to_modify = null;
        $nombre_de_place_to_modify = null;
    }
} catch (PDOException $e) {
   
}

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
    if (isset($_POST['submit'])) {
        
        $id_to_delete = $_POST['id_to_delete'];

        
        $sql = "DELETE FROM seria_a WHERE id = :id_to_delete";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id_to_delete', $id_to_delete);
        $stmt->execute();
    }
} catch (PDOException $e) {
   
}















try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
    if (isset($_POST['submit'])) {

        $id = $_POST['id'];
        $nom = $_POST['nom'];
        $stade = $_POST['stade'];
        $nombreDePlace = $_POST['nombre_de_place'];

        $sql = "INSERT INTO premier_league (id, nom, stade, nombre_de_place) VALUES (:id, :nom, :stade, :nombre_de_place)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':stade', $stade);
        $stmt->bindParam(':nombre_de_place', $nombreDePlace);
        $stmt->execute();
    }
} catch (PDOException $e) {
    
}

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
    if (isset($_POST['submit'])) {
        
        $id_to_modify = $_POST['id_to_modify'];
        $nom_to_modify = $_POST['nom_to_modify'];
        $stade_to_modify = $_POST['stade_to_modify'];
        $nombre_de_place_to_modify = $_POST['nombre_de_place_to_modify'];

        
        $sql = "UPDATE premier_league SET nom = :nom, stade = :stade, nombre_de_place = :nombre_de_place WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id_to_modify);
        $stmt->bindParam(':nom', $nom_to_modify);
        $stmt->bindParam(':stade', $stade_to_modify);
        $stmt->bindParam(':nombre_de_place', $nombre_de_place_to_modify);
        $stmt->execute();

        
        $id_to_modify = null;
        $nom_to_modify = null;
        $stade_to_modify = null;
        $nombre_de_place_to_modify = null;
    }
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
    if (isset($_POST['submit'])) {
        
        $id_to_delete = $_POST['id_to_delete'];

        
        $sql = "DELETE FROM premier_league WHERE id = :id_to_delete";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id_to_delete', $id_to_delete);
        $stmt->execute();
    }
} catch (PDOException $e) {
   
}
?>





</body>
</html>

<?php
echo'
<style>
body {
    font-family: Arial, sans-serif;
    background-color: ;
    margin: 0;
    padding: 0;

}

.bande-grise {
    background-color: black;
    height: 80px; 
    width: 100%;
    padding: 10px 40px;
}

h1 {
    text-align: center;
    color: white;
    font-size: 4em;
    margin: auto;
}

h2 {
    text-align : center;
    color: #333;
    margin-bottom: 20px;
}

.supprimer, ajouter {
    
    
}

h3 {
    
    
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

table, th, td {
    border: 1px solid #333;
}

th, td {
    padding: 10px;
    text-align: left;
}

th {
    background-color: #333;
    color: white;
}

.no-record {
    color: #FF0000;
    font-weight: bold;
}
</style>';

?>
