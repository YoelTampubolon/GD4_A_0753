<?php

    if(isset($_POST['tambahSeries'])){

        include('../db.php');

        $genre = $_POST['genre'];
        $name = $_POST['name'];
        $realease = $_POST['realease'];
        $episode = $_POST['episode'];
        $seasons = $_POST['seasons'];
        $synopsis = $_POST['synopsis'];

        $query = mysqli_query($con,
                "INSERT INTO series(genre, name, realease,  episode, seasons, synopsis)
                    VALUES
            ('$genre', '$name', '$realease', '$episode', '$seasons', '$synopsis')")
                or die(mysqli_error($con)); 

            if($query){
                echo
                    '<script>
                    alert("Create Series Success");
                    window.location = "../page/listSeriesPage.php"
                    </script>';
            }else{
                echo
                    '<script>
                    alert("Create Series Failed");
                    </script>';
            }
    }else{
      echo
       '<script>
        window.history.back()
        </script>';
     }
?>