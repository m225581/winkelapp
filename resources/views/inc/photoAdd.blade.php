

<div class="content">
    <form method="post" action="/photo" enctype="multipart/form-data" style="border:1px solid black; width:300px; margin:auto; padding:10px;">
        Url Uploaden<br><input type="text" name="image" id="image"><br><br>
        <textarea name="text" cols="40" rows="4" placeholder="descryptie"></textarea><br><br>
        <ul>
            <input type="radio" name="soort" value="M" checked>Man
            <input type="radio" name="soort" value="V">Vrouw
            <input type="radio" name="soort" value="K">Kind
            <input type="radio" name="soort" value="S">Sport
        </ul>
        <ul>
            <input type="radio" name="tabel" value="truien" checked>Truien
            <input type="radio" name="tabel" value="truien">ex_broek
            <input type="radio" name="tabel" value="truien">ex_jas
        </ul>
        <input type="submit" value="Upload" name="submit">
        <input type="hidden" value="{{ csrf_token() }}" name="_token">
    </form>
            
            <?php
                $msg = "";
            if(isset($_POST["submit"])){
                
                
                $db = mysqli_connect("localhost", "root", "", "customer");
                
                
                $file = $_POST["image"];
                $text = $_POST["text"];
                $soort = $_POST["soort"];
                
                if(empty($_POST["text"]) or empty($_POST["image"])){
                    echo"vull alle velden in";
                    exit;
                }
                
                $table_name = $_POST["tabel"];
                
                
                $sql = "INSERT INTO $table_name (image, text, soort)
                VALUES ('$file', '$text', '$soort')";
                
                mysqli_query($db, $sql);
                
            }
        ?>
        
        
        <div style='border:1px solid black; margin-top:10px;'>
            <?php
            
                $db = mysqli_connect("localhost", "root", "", "customer");
                $sql = "SELECT * FROM truien";
                $result = mysqli_query($db, $sql);
            
                while ($row = mysqli_fetch_array($result)) {
                    echo "<div id='img_div' style='border:1px solid black;  margin-left:5px; margin-right:5px; padding:10px; margin-top:10px;'>";
                        echo "<img src=".$row['image'].">";
                        echo "<p>".$row['text']."</p>";
                        echo "<p>".$row['soort']."</p>";
                    echo "</div>";
                }
            
            ?>
        </div>
    
</div>
