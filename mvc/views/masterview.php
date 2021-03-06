<?php
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Lession2</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.css" integrity="sha512-EaaldggZt4DPKMYBa143vxXQqLq5LE29DG/0OoVenoyxDrAScYrcYcHIuxYO9YNTIQMgD8c8gIUU8FQw7WpXSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body>
        <div class="container">
            <div>
                <nav class="navbar navbar-expand-lg">
                    <div class="collapse navbar-collapse" >
                        <ul class="navbar-nav mr-auto ">
                            <li class="nav-item active">
                                <a href="<?php echo BASE_URL;?>/Product">
                                    <button type="button"  class="btn btn-primary">Products</button>
                                </a>
                             </li>
                             <li class="nav-item ml-2">
                                <a href="<?php echo BASE_URL;?>/Category">
                                <button type="button" class="btn btn-outline-secondary">Categories</button>
                                </a>
                            </li>
                            </ul>   
                         <ul class="navbar-nav ml-auto">   
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo BASE_URL;?>">
                                <img src="<?php echo BASE_URL;?>/public/image/logo.jpg" style="width:100px">
                                </a>
                            </li>
                        </ul>
      
                </nav>
            </div>
            <div>
                <?php require_once("./mvc/views/".$data['view'].".php");?>
            </div>
        </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

    <script src="./public/js/main.js"></script>
    </body>   
</html>


