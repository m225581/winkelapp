<head>
    <title>Image Upload</title>
    <style type="text/css">
        #content{
            width: 50%;
            margin: 20px auto;
            border: 1px solid #cbcbcb;
        }
        form{
            width: 26%;
            margin: 20px auto;
            border:1px solid black;
            margin:auto;
            padding:10px;
        }
        form div{
            margin-top: 5px;
        }
        #img_div{
            float: left;
            width:49%;
            padding: 5px;
            margin: 10px 7px;
            border: 1px solid #cbcbcb;
        }
        #img_div:after{
            content: "";
            display: block;
            clear: both;
        }
        img{
            float: left;
            margin: 5px;
            width: 50%;
        }
    </style>
</head>

<div class="content">
    <form method="post" action="/photo" enctype="multipart/form-data" style="">
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
     
     
    <div>
        <?php
             
            $db = mysqli_connect("localhost", "root", "", "customer");
            $sql = "SELECT * FROM truien";
            $result = mysqli_query($db, $sql);
             
            while ($row = mysqli_fetch_array($result)) {
                echo "<div id='img_div' style='margin-left:5px; padding:10px; margin-top:10px;'>";
                    echo "<img src=".$row['image'].">";
                    echo "<p>".$row['text']."</p>";
                    echo "<p>".$row['soort']."</p>";
                echo "</div>";
            }
             
        ?>
    </div>
</div>
<div style="width:0%">
    &nbsp;
</div>