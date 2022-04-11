<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Faculties</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>







<body class="loading">
    </head>

    <body>

        <div class="text-center mt-3 ">
            <h3 class="display-8"><u>Faculty Data</u></h3>
        </div>

        <div class="container">


            <div class="card-columns">


                <?php






                $mysqli = new mysqli('localhost', 'root', '', 'test') or die(mysqli_error($mysqli));
                $result = $mysqli->query("SELECT firstName,lastName,email FROM faculty") or die($mysqli->error);
                if ($result) {
                    if (mysqli_num_rows($result) > 0) {
                        //               
                        while ($row = mysqli_fetch_array($result)) {
                           

                            echo "
                     

                            <div class='card bg-info'>
            <div class='card-body text-center'>
              <h3 class='card-text'>" . $row['firstName'] . "</h3>
              <h3 class='card-text'>" . $row['lastName'] . "</h3>
              
              <p class='card-text'>Email : " . $row['email'] . "</p>
            
            </div>
          </div>
                            
                    
                    
                         ";
                        }
                    } else {
                        echo "NO Data Exist";
                    }
                } else {
                    echo "Cannot connect to server" . $result;
                }





                ?>












            </div>
        </div>

    </body>

</html>