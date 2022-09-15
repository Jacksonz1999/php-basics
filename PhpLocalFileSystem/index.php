<?php

function mydir($dirname){
    if (is_dir($dirname)){
        $dir = opendir($dirname);
        echo "<ul>";
        while(($filename = readdir($dir) )!== false) {
            $dir_complet = $dirname."/".$filename;
            if($filename != '.' && $filename !='..'){
                if(is_dir($dir_complet)){
                    echo"<li>".'<a href=./modules/mostrar.php?path='.$filename.'>'.$filename."</a> --- <a href='./modules/delateFile.php?path=".$filename."'>Delete</a>
                    ---<a href='./modules/filesInfo.php?path=".$filename."'>Info</a></li>"
                    ;
                    mydir($dir_complet);
                }
            }
        }
        
        // Cierra el gestor de directorios
        closedir($dir);
        echo "</ul>";
    } else {
        echo "No es una ruta de directorio valida<br/>";
    }
}
mydir('./root');

$dir_path ="./root";
$options ="";
if(is_dir($dir_path))
{
    $files = opendir($dir_path);
    {
    if($files){
        while(($file_name =readdir($files)) !==FALSE){
            if ($file_name != '.' && $file_name != '..'){
                $options = $options."<option>$file_name</option>";
                //echo $file_name."<br>";
            } 
            }
        }
        
    }
  }
  //CREAR CARPETA
  $msg = null;
  if (isset($_POST["directorio"]))
  {
      $carpeta = htmlspecialchars($_POST["carpeta"]);
      $ruta = htmlspecialchars($_POST["ruta"]);
   
      $directorio = $ruta.$carpeta;
  
      if (!is_dir($directorio))
      {
          $crear= mkdir ($directorio, 0777, true);
  
          if($crear)
          {
              $msg ="Directorio $directorio creado correctamente";
          }
          else
          {
              $msg = "Error";
          }
      }
      else
      {
          $msg = "El directorio ya existe";
      }
  }
  //ELIMINAR CARPETA
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" 
    crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <!-- Crear una carpeta -->
    <h3>Crear directorios </h3>
    <strong> <?php echo $msg ?> </strong>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>">
    <table>
        <tr>
            <td>Carpeta:</td>
            <td><input type="text" name="carpeta"</td>
        </tr>
        <tr>
            <td>Ruta(ruta/):</td>
            <td><input type="text" name="ruta"</td>
        </tr>
    </table>
    <input type= "hidden" name ="directorio">
    <input type ="submit" value="crear">
    </table>
   <!-- Eliminar una carpeta -->
    <h3>Eliminar directorios </h3>
    <strong> <?php echo $msg ?> </strong>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>">
    <label>Ruta del directorio:</label>
    <input type="text" name="ruta">
    <input type= "hidden" name ="eliminar_directorio">
    <input type ="submit" value="eliminar">
    </form>
    </table>

    <br>
<form action="searchInfo.php" method="POST">
    <input type="search" name="search" placeholder="Search your document" style="width: 600px;">
    <select><?php echo $options ?></select>
    <button type="submit" name ='submit'>Click</button>
   
</form>

</form>
<form action="createFile.php" method="POST">
    <input type="text" name="filename" placeholder="Escribe el nombre que quieras crear" style="width: 300px;">
    <input type="text" name="filename" placeholder="Escribe el tipo" style="width: 150px;">
    <button type="submit" name ='submit'>Create file</button>
    </form>
    <form action="./modules/makedir.php" method="POST">
    <button type="submit" name ='submit'>Create Directory</button>
</form>
<form action="./modules/upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="submit" name ='submit'>Upload</button>
    <form method="post"></form>

</form>
<div id="fileListContainer"><?php require_once "./modules/listFiles.php" ?></div>
<div id =infoContainer class="custom-box"></div>
  <p id="fileSize"></p>
  <p id="fileCreationDate"></p>
  <p id="fileContent"></p>

</div>
<script src="assets/js/script.js"></script>
</body>
</html>


