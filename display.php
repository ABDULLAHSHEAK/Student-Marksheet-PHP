<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Including Bootstrap Icons in HTML</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  <!-- Bootstrap Font Icon CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <style>
    <?php include "db_connec.php" ?>
  </style>
</head>

<body style="text-align: center;">

  <div class="container">
    <div class="row">
      <div class="col-sm-8 mx-auto pt-4 mt-4">
        <h2 class="text-center p-2 m-0 bg-primary text-white">Student Information
          <a href="index.php" class='btn btn-warning float-end' id="add_btn"><i class="bi bi-person-plus-fill"></i></a>
        </h2>
        <!-- // php code start -->
        <?php
        $selectData = "SELECT * FROM marksheet";
        $query = mysqli_query($connec, $selectData);

        echo "<div class='table-responsive'><table class ='table table-primary table-striped table-hover table-border'> 
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Roll</th>
            <th>Action</th>
        </tr>
        ";
        while ($dataArray = mysqli_fetch_assoc($query)) {

          $id = $dataArray["id"];
          $user_name = $dataArray["name"];
          $roll = $dataArray["roll"];
          
          echo "<tr>
                    <td>$id</td>
                    <td>$user_name</td>
                    <td>$roll</td>
                    <td>
                    <a href ='edit.php?editid=$id' class ='text-white text-decoration-none btn btn-warning'> <i class='bi bi-pencil-square'></i> </a>

                    <a href='view.php?view=$id' class='text-white text-decoration-none btn btn-danger'>
                     <i class='bi bi-eye'></i> </a>

                    <a href='display.php?deleteid=$id' class='text-white text-decoration-none btn btn-danger'><i class='bi bi-x-lg'></i></a> 


                    </td>
              </tr>";
        };

        if (isset($_GET["deleteid"])) {
          $deleteid = $_GET["deleteid"];

          $delete = "DELETE FROM marksheet WHERE id = $deleteid";
          if (mysqli_query($connec, $delete) == true) {
            echo "<script>window.location.href='http://localhost/my_marksheet/display.php'</script>";
          }
        }


        ?>
        <!-- //php end -->
      </div>
    </div>
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>