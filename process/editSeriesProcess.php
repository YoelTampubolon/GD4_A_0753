<?php
    if(isset($_POST['editSeries'])){


        include('../db.php');

        $id = $_POST['id'];
        $genre = $_POST['genre'];
        $name = $_POST['name'];
        $realease = $_POST['realease'];
        $seasons = $_POST['seasons'];
        $episode = $_POST['episode'];
        $synopsis = $_POST['synopsis'];
        
        $sql = "UPDATE series SET genre='$genre', name='$name', realease='$realease', season='$seasons', episode='$episode', synopsis='$synopsis' WHERE id=$id";

        if ($con->query($sql) === TRUE) {
          echo
                '<script>
                alert("Update Series Success"); window.location = "../page/listSeriesPage.php"
                </script>';
        } else {
          echo
                  '<script>
                  alert("Update Series Failed");
                  </script>';
        }
    }else{
        echo
            '<script>
            window.history.back()
            </script>';
    }
?>