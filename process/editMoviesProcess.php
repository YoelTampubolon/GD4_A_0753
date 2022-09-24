<?php
    if(isset($_POST['editMovie'])){

        include('../db.php');

        $id = $_POST['id'];
        $genre = $_POST['genre'];
        $name = $_POST['name'];
        $realease = $_POST['realease'];
        $seasons = $_POST['seasons'];
        
        $sql = "UPDATE movies SET genre='$genre', name='$name', realease='$realease', seasons='$seasons'  WHERE id=$id";

        if ($con->query($sql) === TRUE) {
          echo
                '<script>
                alert("Edit Movies Success"); window.location = "../page/listMoviesPage.php"
                </script>';
        } else {
          echo
                  '<script>
                  alert("Edit Movies Failed");
                  </script>';
        }
    }else{
        echo
            '<script>
            window.history.back()
            </script>';
    }
?>