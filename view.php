<?php
include 'db_connec.php';

if ($_GET['view']) {
  $viewId        = $_GET['view'];
  $select_data   = "SELECT * FROM marksheet WHERE id = $viewId";
  $sql           = mysqli_query($connec, $select_data);
  $arry_data     = mysqli_fetch_assoc($sql);

  $userName = $arry_data['name'];
  $roll     = $arry_data['roll'];
  $bangla   = $arry_data['bangla'];
  $math     = $arry_data['math'];
  $english  = $arry_data['english'];
  $islam    = $arry_data['islam'];

  $bnMark   = '';
  $mathMark = '';
  $enMark   = '';
  $isMark   = '';

  $bnGrade    = '';
  $mathGrade  = '';
  $enGrade    = '';
  $isGrade    = '';

  $bnPoint    = '';
  $mathPoint  = '';
  $enPoint    = '';
  $isPoint    = '';


  if ($bangla > 100 && $bangla < 0) {
    echo "Invalid";
  } else if (($bangla >= 80)) {
    $bnMark  = $bangla;
    $bnGrade = "A+";
    $bnPoint = "5.00";
  } else if ($bangla >= 70) {
    $bnMark  = $bangla;
    $bnGrade = "A";
    $bnPoint = "4.00";
  } else if ($bangla >= 60) {
    $bnMark  = $bangla;
    $bnGrade = "A-";
    $bnPoint = '3.50';
  } else if ($bangla >= 50) {
    $bnMark  = $bangla;
    $bnGrade = "B";
    $bnPoint = "3.00";
  } else if ($bangla >= 40) {
    $bnMark  = $bangla;
    $bnGrade = "C";
    $bnPoint = "2.00";
  } else if ($bangla >= 33) {
    $bnMark  = $bangla;
    $bnGrade = "D";
    $bnPoint = '1.00';
  } else {
    $bnMark  = $bangla;
    $bnGrade = "Fail";
    $bnPoint = "0.00";
  };

  // math mark calculation
  if ($math > 100 && $math < 0) {
    echo "Invalid";
  } else if ($math >= 80) {
    $mathMark  = $math;
    $mathGrade = "A+";
    $mathPoint = "5.00";
  } else if ($math >= 70) {
    $mathMark  = $math;
    $mathGrade = "A";
    $mathPoint = "4.00";
  } else if ($math >= 60) {
    $mathMark  = $math;
    $mathGrade = "A-";
    $mathPoint = "3.50";
  } else if ($math >= 50) {
    $mathMark  = $math;
    $mathGrade = "B";
    $mathPoint = "3.00";
  } else if ($math >= 40) {
    $mathMark  = $math;
    $mathGrade = "C";
    $mathPoint = "2.00";
  } else if ($math >= 33) {
    $mathMark  = $math;
    $mathGrade = "D";
    $mathPoint = "1.00";
  } else {
    $mathMark  = $math;
    $mathGrade = "Fail";
    $mathPoint = "0.00";
  }

  //English Mark Calculation

  if ($english > 100 && $english < 0) {
    echo "Invalid";
  } else if ($english >= 80) {
    $enMark    = $english;
    $enGrade   = "A+";
    $enPoint   = "5.00";
  } else if ($english >= 70) {
    $enMark    = $english;
    $enGrade   = "A";
    $enPoint   = "4.00";
  } else if ($english >= 60) {
    $enMark    = $english;
    $enGrade   = "A-";
    $enPoint   = "3.50";
  } else if ($english >= 50) {
    $enMark    = $english;
    $enGrade   = "B";
    $enPoint   = "3.00";
  } else if ($english >= 40) {
    $enMark    = $english;
    $enGrade   = "C";
    $enPoint   = "2.00";
  } else if ($english >= 33) {
    $enMark    = $english;
    $enGrade   = "D";
    $enPoint   = "1.00";
  } else {
    $enMark    = $english;
    $enGrade   = "Fail";
    $enPoint   = "0.00";
  }

  // Islam Mark Calculation 

  if ($islam > 100 && $islam < 100) {
    echo "Invalid";
  } else if ($islam >= 80) {
    $isMark = $islam;
    $isGrade = "A+";
    $isPoint = "5.00";
  } else if ($islam >= 70) {
    $isMark = $islam;
    $isGrade = "A";
    $isPoint = "4.00";
  } else if ($islam >= 60) {
    $isMark = $islam;
    $isGrade = "A-";
    $isPoint = "3.50";
  } else if ($islam >= 50) {
    $isMark = $islam;
    $isGrade = "B";
    $isPoint = "3.00";
  } else if ($islam >= 40) {
    $isMark = $islam;
    $isGrade = "C";
    $isPoint = "2.00";
  } else if ($islam >= 33) {
    $isMark = $islam;
    $isGrade = "D";
    $isPoint = "1.00";
  } else {
    $isMark = $islam;
    $isGrade = "Fail";
    $isPoint = "0.00";
  };

  $sumMark = $bnPoint + $mathPoint + $enPoint + $isPoint;
  $avarageMark = $sumMark / 4;
  $avaGrade = '';
  if ($avarageMark >= 5.00) {
    $avaGrade = "A+";
  } else if ($avarageMark >= 4.00) {
    $avaGrade = "A";
  } else if ($avarageMark >= 3.50) {
    $avaGrade = "A-";
  } else if ($avarageMark >= 3.00) {
    $avaGrade = "B";
  } else if ($avarageMark >= 2.00) {
    $avaGrade = "C";
  } else if ($avarageMark >= 1.00) {
    $avaGrade = "D";
  } else {
    $avaGrade = "Fail";
  }
  $totalMark = $bangla + $math + $english + $islam;
}

?>

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

</head>

<body style="text-align: center;">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 mx-auto pt-4 mt-4">
        <h2 class="text-center p-2 m-0 bg-primary text-white">Student Marksheet
          <a href="display.php" class='btn btn-danger float-end' id="add_btn"><i class="bi bi-arrow-left-square"></i></a>
        </h2>
        <div class="data-info">

          <table class='table table-primary table-striped table-hover table table-bordered border-primary mb-0'>
            <tr>
              <th colspan="4">
                <center>
                  <h5>Student Name : <?= $userName ?> </h5>
                  <h5>Student Roll : <?= $roll ?> </h5>
                </center>
              </th>
            </tr>
            <tr>
              <th>Subject</th>
              <th>Mark</th>
              <th>Grate</th>
              <th>Point</th>
            </tr>
            <tr>
              <td>Bangla</td>
              <td><?= $bnMark ?></td>
              <td><?= $bnGrade ?></td>
              <td><?= $bnPoint ?></td>
            </tr>
            <tr>
              <td>English</td>
              <td><?= $enMark ?></td>
              <td><?= $enGrade ?></td>
              <td><?= $enPoint ?></td>
            </tr>
            <tr>
              <td>Math</td>
              <td><?= $mathMark ?></td>
              <td><?= $mathGrade ?></td>
              <td><?= $mathPoint ?></td>
            </tr>
            <tr>
              <td>Islam</td>
              <td><?= $isMark ?></td>
              <td><?= $isGrade ?></td>
              <td><?= $isPoint ?></td>
            </tr>
            <tr>
              <td colspan="1"></td>
              <td>Marks : <?= $totalMark ?></td>
              <td>Grade : <?= $avaGrade ?> </td>
              <td>
                GPA : <?= $avarageMark ?>
              </td>
            </tr>
          </table>
        </div>
        <h2 id="btn" class="text-center p-2 m-0 bg-primary text-white" style="cursor: pointer;" onclick="window.print()">Print Marksheet
          <i class="bi bi-printer"></i>
        </h2>
      </div>
    </div>

    <!--- js ---->
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>