<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="includes/adduser_include.php" method="POST" class="needs-validation" novalidate >
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="firstname">firstname</label>
      <input type="text" name="firstname" class="form-control" id="validationCustom01" placeholder="First name" required >
      <div class="valid-feedback">
        Ok!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="name">name</label>
      <input type="text" name="name" class="form-control" id="validationCustom02" placeholder="Last name" required>
      <div class="valid-feedback">
        Ok!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="Email">email</label>
      <div class="input-group">
        <input type="text" name="email" class="form-control" id="validationCustomUsername" placeholder="Email" required>
        <div class="invalid-feedback">
          Indiquez votre Email.
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-3 mb-3">
      <label for="password">password</label>
      <input type="password" name ="password" class="form-control" id="validationCustom03" placeholder="password" required>
      <div class="invalid-feedback">
        Indiquez votre mot de passe
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="adresse">adresse</label>
      <input type="text" name="adresse" class="form-control" id="validationCustom04" placeholder="adresse" required>
      <div class="invalid-feedback">
        Indiquez votre adresse.
      </div>
    </div>
  <button class="btn btn-primary" type="submit">S'inscrire</button>
</form>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

 