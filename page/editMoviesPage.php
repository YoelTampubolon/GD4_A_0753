<?php
include '../component/sidebar.php';
$id = $_GET["id"];
$sql = mysqli_query($con,"SELECT * FROM movies WHERE id = $id");
$data = mysqli_fetch_array($sql);

?>

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px
    solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0,0.19);" >
        <h4 >EDIT DATA MOVIE</h4>
        <hr>
        <form action="../process/editMoviesProcess.php" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="genre" class="form-label">Genre</label>
                <select class = "form-select" aria-label="Default select example" name="genre" id="genre">
                    <option value="Horor">Horor</option>
                     <option value="Action">Action</option>
                     <option value="Romance">Romance</option>
                    </select>
            </div>
            <div class="mb-3">
                <label for="realese" class="form-label">Your Release</label>
                <input class="form-control" id="realease" name="release">
            </div>
            <div class="mb-3">
                <label for="season" class="form-label">Seasons</label>
                <input class="form-control" id="seasons" name="seasons">
            </div>
            <div class="mb-3">
                <label for="synopsis" class="form-label">Synopsis</label>
                <input class="form-control" id="synopsis" name="synopsis">
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="editMovie">Save</button>
            </div>
            <input type="hidden" name="id" value="<?= $data['id'];?>">

        </form>
    </div>
    </aside>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
