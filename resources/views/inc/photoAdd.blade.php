<div class="content">
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="image" id="image">
        <input type="text" name="text" id="text" rows="4" cols="60" style="width:300px; height:60px;">
        <ul>
            <input type="radio" name="soort" value="M">Man
            <input type="radio" name="soort" value="V">Vrouw
            <input type="radio" name="soort" value="K">Kind
            <input type="radio" name="soort" value="S">Sport
        </ul>
        <ul>
            <input type="radio" name="tabel" value="truien">Truien
            <input type="radio" name="tabel" value="truien">ex_broek
            <input type="radio" name="tabel" value="truien">ex_jas
        </ul>
        <input type="submit" value="Upload" name="submit">
        <input type="hidden" value="{{ csrf_token() }}" name="_token">
    </form>
</div>
<?php
    if(isset($_POST["submit"])){
        echo"hi";
        $file = isset($_POST["image"]);
        echo"how";
        $text = isset($_POST["text"]);
        echo"are";
        $soort = isset($_POST["soort"]);
        echo"you";
        
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "customer";
        
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        
        
        $table_name = isset($_POST["tabel"]);
        
        $sql = "INSERT INTO $table_name (image, text, soort)
        VALUES ($file, $text, $soort)";
        
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
?>