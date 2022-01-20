<?php
    
    // connect to Database
    error_reporting(1);
    $conn = mysqli_connect('localhost', 'man', 'test1234', 'flone');

    //check connection
    if (!$conn) {
        echo "connection error : ". mysql_connect_error();
    }


    //img
    //$target_dir = "image/";
    $target_file = str_replace(" ", "", ($_FILES["fileToUpload"]["name"]));
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Image Example for Form </title>
        <h1>This is a form</h1>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
        <script>
        $( function() {
            $( "#datepicker" ).datepicker();
        } );
        </script>
        <script>
            var input = $('#manual-operations-input').pickatime({
            autoclose: true,
            'default': 'now'
            });

            // Manually toggle to the minutes view
            $('#check-minutes').click(function(e){
            e.stopPropagation();
            input.pickatime('show').pickatime('toggleView', 'minutes');
            });
        </script>
        <style>
            input[type=text], select {
              width: 150px;
              padding: 8px 20px;
              margin: 8px 0;
              display: inline-block;
              border: none;
              border-bottom: 2px solid red;
              border-radius: 4px;
              box-sizing: border-box;
            }

            input[type=email], select {
              width: 150px;
              padding: 8px 20px;
              margin: 8px 0;
              display: inline-block;
              border: none;
              border-bottom: 2px solid red;
              border-radius: 4px;
              box-sizing: border-box;
            }

            input[type=time], select {
              width: 150px;
              padding: 8px 20px;
              margin: 8px 0;
              display: inline-block;
              border: none;
              border-bottom: 2px solid red;
              border-radius: 4px;
              box-sizing: border-box;
            }
            
            input[type=submit] {
              width: 150px;
              background-color: #4CAF50;
              color: white;
              padding: 10px 20px;
              margin: 8px 0;
              border: none;
              border-radius: 4px;
              cursor: pointer;
            }

            input[type=file] {
              width: 250px;
              background-color: #4CAF50;
              color: white;
              margin: 8px 0;
              border: none;
              border-radius: 4px;
              cursor: pointer;
            }

            input[type=submit]:hover {
              background-color: #45a049;
            }

            div {
              border-radius: 5px;
              background-color: #f2f2f2;
              padding: 20px;
            }
            .form-control{
                width: 150px;
                display: inline;

            }

            img {
                width: 40%;
            }

            table {
              border-collapse: collapse;
            }
        </style>
    </head>

    <body>

        <p>Fill This Form!</p>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
            
            Enter product Name :
            <input type="text" name="product_name">
            <br><br>

            Enter Product Price :
            <input type="text" name="price">
            <br><br>

            Enter your photo :
            <input type="file" name="fileToUpload" id="fileToUpload">
            <br><br>

            <input type="submit" name="submit">

            <?php   
                
                //error_reporting(0);
            
                //SQL database code



                    echo "<br><br>";
                    $product_name = mysqli_real_escape_string($conn, $_POST["product_name"]);
                    echo $product_name;
                    echo "<br>";

                    $price = mysqli_real_escape_string($conn, $_POST["price"]);
                    echo $price;
                    echo "<br>";

                    //$fileToUpload = mysqli_real_escape_string($conn, $_POST["fileToUpload"]);
                    echo $target_file;
                    echo "<br>";                    

                    //$time = mysqli_real_escape_string($conn, $_POST["time"]);

                    //create sql

                    $sql = "INSERT INTO products(product_name, product_price, product_image) VALUES('$product_name', '$price', '$target_file')";

                    if (mysqli_query($conn, $sql)) {
                        //success   
                    } 
                    else{
                        //error
                        echo "query error : " . mysql_error($conn);
                    }

                    
            
            ?>
        </form>

        <div>
            <img src="<?php echo $target_file; ?>"/>
        </div>
    </body>
</html>