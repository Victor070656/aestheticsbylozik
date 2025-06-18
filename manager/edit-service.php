<?php
include_once "../config.php";
session_start();
if (!isset($_SESSION["admin"])) {
  echo "<script>location.href='login.php'</script>";
}

if (isset($_GET["pid"])) {
  $id = $_GET["pid"];
} else {
  echo "<script>location.href='services.php'</script>";
}

$getServices = mysqli_query($conn, "SELECT s.*, c.category_name FROM `services` as s JOIN `service_categories` as c ON s.category_id = c.id WHERE s.id = '$id'");
if (mysqli_num_rows($getServices) == 0) {
  echo "<script>location.href='services.php'</script>";
}
$service = mysqli_fetch_assoc($getServices);
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from polygons.space/circl/../templates/admin/blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 May 2024 10:50:44 GMT -->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Responsive Admin Dashboard Template">
  <meta name="keywords" content="admin,dashboard">
  <meta name="author" content="stacks">
  <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <!-- Title -->
  <title>Add Service</title>

  <!-- Styles -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,800&amp;display=swap" rel="stylesheet">
  <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/plugins/font-awesome/css/all.min.css" rel="stylesheet">
  <link href="assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">


  <!-- Theme Styles -->
  <link href="assets/css/main.min.css" rel="stylesheet">
  <link href="assets/css/custom.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>
  <!-- <div class="loader">
    <div class="spinner-grow text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div> -->

  <div class="page-container">
    <?php include("components/menu.php"); ?>
    <div class="page-content">
      <div class="main-wrapper">
        <div class="row">
          <div class="col">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Edit Service</h5>
                <form method="post" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-12 mb-3">
                      <label class="form-label">Service Title</label>
                      <input type="text" name="title" class="form-control" value="<?= $service['title'] ?>"
                        placeholder="Teeth Whitening ..." required>
                    </div>
                    <div class="col-12 mb-3">
                      <label class="form-label">Category</label>
                      <select name="category" id="" class="form-control form-select" required>
                        <?php
                        $getCategory = mysqli_query($conn, "SELECT * FROM `service_categories`");
                        if (mysqli_num_rows($getCategory) > 0) {
                          while ($row = mysqli_fetch_assoc($getCategory)) {
                            ?>
                            <option value='<?= $row["id"] ?>' <?= $service['category_id'] == $row['id'] ? "selected" : "" ?>>
                              <?= $row["category_name"] ?>
                            </option>
                            <?php
                          }
                        } else {
                          echo "<option value='' disabled>No Category Found</option>";
                        }
                        ?>
                      </select>
                    </div>
                    <div class="col-12 mb-3">
                      <label class="form-label">Price (₦)</label>
                      <input type="number" name="price" value="<?= $service['price'] ?>" class="form-control"
                        placeholder="50000" required>
                    </div>

                    <div class="col-12 mb-3">
                      <input type="submit" name="add" value="Edit Service" class="btn btn-primary">
                    </div>
                  </div>
                  <!-- Add products -->
                  <?php
                  if (isset($_POST["add"])) {
                    $title = htmlspecialchars($_POST["title"]);
                    $category = htmlspecialchars($_POST["category"]);
                    $price = htmlspecialchars($_POST["price"]);

                    $addService = mysqli_query($conn, "UPDATE `services` SET `category_id` = '$category', `title` = '$title', `price` = '$price' WHERE `id` = '$id'");

                    if ($addService) {

                      echo "<script>alert('Successfully updated ✅'); location.href='services.php'</script>";
                    } else {
                      echo "<script>alert('An error occured ❌')</script>";
                    }
                  }
                  ?>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

  <!-- Javascripts -->
  <script src="assets/plugins/jquery/jquery-3.4.1.min.js"></script>
  <script src="https://unpkg.com/@popperjs/core@2"></script>
  <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/feather-icons"></script>
  <script src="assets/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
  <script src="assets/js/main.min.js"></script>
</body>

<!-- Mirrored from polygons.space/circl/templates/admin/blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 May 2024 10:50:44 GMT -->

</html>