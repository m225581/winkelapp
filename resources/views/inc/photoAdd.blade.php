

<div class="content">
    <form method="post" action="/photo" enctype="multipart/form-data">
        Url Uploaden<input type="file" name="image" id="image">
        <textarea name="text" cols="40" rows="4" placeholder="descryptie"></textarea>
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
                
                $target = "images/".basename($_FILES['image']['name']);
                
                $db = mysqli_connect("localhost", "root", "", "customer");
                
                
                
                $file = $_FILES["image"]['name'];
                $text = $_POST["text"];
                $soort = $_POST["soort"];
                
                if(empty($_POST["text"]) or empty($_FILES["image"])){
                    echo"vull alle velden in";
                    //exit;
                }
                
                $table_name = $_POST["tabel"];
                
                
                $sql = "INSERT INTO $table_name (image, text, soort)
                VALUES ('$file', '$text', '$soort')";
                
                mysqli_query($db, $sql);
                
                if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                    echo "New record created successfully";
                }
                
            }
        ?>
        
        
        
        <?php
            if(isset($_POST["submit"])){
                
                $db = mysqli_connect("localhost", "root", "", "customer");
                $sql = "SELECT * FROM truien";
                $result = mysqli_query($db, $sql);
                
                while ($row = mysqli_fetch_array($result)) {
                    echo "<div id='img_div'>";
                        echo "<img src='images/".$row['image']."' >";
                        echo "<p>".$row['text']."</p>";
                        echo "<p>".$row['soort']."</p>";
                    echo "</div>";
                }
            }
        ?>
    
</div>
