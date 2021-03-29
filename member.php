<?php require_once "templates/header.php"; ?>
<?php
  if(isset($_GET["action"])) {
    $action = $_GET["action"];
  } else {
    header("location: index.php");
    exit;
  }
?>
<script>
  console.log('<?php echo $action; ?>')
  const element = document.getElementById('<?php echo $action; ?>')
  const focusModal = new bootstrap.Modal(element, {})
  document.onradystatechange = function () {
    focusModal.show();
  }
</script>
<!-- Form Login -->
<div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-show="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="#" method="post">
        <div class="modal-body">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control" id="username" placeholder="Insert username">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Insert password">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Login</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Form Register -->
<div class="modal fade" id="register" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="#" method="post">
        <div class="modal-body">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control" id="username" placeholder="Insert username">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Insert password">
          </div>
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Insert name">
          </div>
          <div class="form-group">
            <label for="lastName">Lastname</label>
            <input type="text" name="lastName" class="form-control" id="lastName" placeholder="Insert lastname">
          </div>
          <div class="form-group">
            <label for="email">email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Insert email">
          </div>
          <div class="form-group">
            <div class="custom-control custom-radio">
              <input type="radio" id="customRadio1" name="gender" value="m" class="custom-control-input">
              <label class="custom-control-label" for="customRadio1">Male</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="customRadio2" name="gender" value="f" class="custom-control-input">
              <label class="custom-control-label" for="customRadio2">Female</label>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Register</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require_once "templates/footer.php"; ?>
