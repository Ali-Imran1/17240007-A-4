<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">

<title>Movies</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="text-center">List of Movies</h2>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <?php require_once "database/queries.php";
                $rows = select("SELECT * FROM movies");
                foreach($rows as $row){?>
                    <div class="col-sm-4 mt-4">
                        <div class="card">
                                <img src="<?php echo $row[4];?>" alt="<?php echo $row[1];?>" class="card-img-top img-fluid" style="height:50vh;">
                                <div class="card-body">
                                    <h2><?php echo $row['1'];?></h2>
                                    <p><strong>Rating:</strong> <?php echo $row[2];?></p>
                                    <p><strong>Release date:</strong> <?php echo $row[3];?></p>
                                </div>
                        </div>
                    </div>
                <?php } ?>

        </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>