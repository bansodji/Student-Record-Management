<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <!--CSS-->
  <link rel="stylesheet" href="css/style.css">

  <title>Hello, world!</title>
</head>

<body>
  <div class="pt-5 pb-4 bg-warning">
    <div class="container">
      <h1 class="text-center fw-bold pb-5">Students Record</h1>

      <!--New Record form start-->
      <form id="add-form">
        <div class="row">

          <div class="col-lg-4 col-md-4 col-sm-4">
            <input type="text" width="100%" id="fullname" class="form-control m-2" placeholder="Full Name">
          </div>

          <div class="col-lg-3 col-md-3 col-sm-3">
            <input type="text" width="100%" id="age" class="form-control m-2" placeholder="age">
          </div>

          <div class="col-lg-4 col-md-4 col-sm-4">
            <input type="text" width="100%" id="department" class="form-control m-2" placeholder="department">
          </div>

          <div class="col-lg-1 col-md-1 col-sm-1">
            <div class="d-flex justify-content-center">
              <input type="submit" width="100%" id="save-btn" value="Save" class="btn btn-primary m-2">
            </div>
          </div>

        </div>
      </form>
      <!--New Record form end-->

    </div>
  </div>

  <!--Success & Error Message Section start-->
  <div class="container">
    <div id="error-msg" class="alert alert-danger" role="alert">
      A simple danger alert—check it out!
    </div>
    <div id="success-msg" class="alert alert-success" role="alert">
      A simple success alert—check it out!
    </div>
  </div>
  <!--Success & Error Message Section end-->

  <br><br>

  <!--Search box start-->
  <div class="container mb-4" width="100%">
    <div class="d-flex justify-content-end">
      <div class="search-box rounded">
        <input id="search" type="text" placeholder="Search...">
        <i class="bi bi-search"></i>
      </div>
    </div>
  </div>
  <!--Search box end-->

  <!--Student Record Table-->
  <div id="table-data" class="container"></div>

  <!--Update Modal start-->
  <div class="container">
    <div class="modal overflow-hidden" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div id="modal-body" class="modal-body">

          </div>
          <div class="modal-footer d-flex justify-content-center">
            <button id="modal-save-btn" type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Update Modal end-->


  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>