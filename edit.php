<?php
include "db_connec.php";
if ($_GET['editid']) {
  $editId   = $_GET['editid'];

  $selectData = "SELECT * FROM marksheet WHERE id = $editId";
  $start    = mysqli_query($connec, $selectData);

  $data     = mysqli_fetch_assoc($start);
  $id       = $data['id'];
  $userName = $data['name'];
  $roll     = $data['roll'];
  $bangla   = $data['bangla'];
  $math     = $data['math'];
  $english  = $data['english'];
  $islam    = $data['islam'];
}

if (isset($_POST['edit'])) {
  $id       = $_POST['id'];
  $username = $_POST['name'];
  $roll     = $_POST['roll'];
  $bangla   = $_POST['bangla'];
  $math     = $_POST['math'];
  $english  = $_POST['english'];
  $islam    = $_POST['islam'];

  $updateData = "UPDATE marksheet SET name = '$username', roll = '$roll', bangla = '$bangla' , english = '$english', islam = '$islam'  WHERE id = '$id' ";

  $my    = mysqli_query($connec, $updateData);
  if ($my == true) {
    header('location:display.php');
    echo "Data updated";
  } else {
    echo $updateData . "Data not updated";
  }
}

?>

<!DOCTYPE html>
<html>

<head>
  <title>Edit Page</title>
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>

<body>
  <section class="vh-100 bg-image">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-5">Edit Data</h2>

                <form action=" <?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

                  <div class="form-outline mb-4">
                    <input type="text" class="form-control form-control-lg" placeholder="Enter Username" name="name" value="<?php echo $userName ?>" required />
                  </div>

                  <div class="form-outline mb-4">
                    <input type="number" class="form-control form-control-lg mb-2" placeholder="Edit Roll" name="roll" value="<?php echo $roll ?>" required />
                  </div>

                  <div class="form-outline mb -4">
                    <input type="number" class="form-control form-control-lg mb-2" placeholder="Edit Bangla Mark" name="bangla" value="<?php echo $bangla ?>" required />
                  </div>

                  <div class="form-outline mb -4">
                    <input type="number" class="form-control form-control-lg mb-2" placeholder="Edit Math Mark" name="math" value="<?php echo $math ?>" required />
                  </div>

                  <div class="form-outline mb -4">
                    <input type="number" class="form-control form-control-lg mb-2" placeholder="Edit English Mark" name="english" value="<?php echo $english ?>" required />
                  </div>

                  <div class="form-outline mb -4">
                    <input type="number" class="form-control form-control-lg" placeholder="Edit Islam Mark" name="islam" value="<?php echo $islam ?>" required />
                  </div>

                  <div class="form-outline mb-4">
                    <input type="text" class="form-control form-control-lg" placeholder="Enter Password" name="id" value="<?php echo $id ?>" required hidden />
                  </div>
                  <div class="d-flex justify-content-center">
                    <button type="submit" name="edit" value="Submit" class="btn btn-warning btn-block btn-lg gradient-custom-4 text-body">Save</button>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>