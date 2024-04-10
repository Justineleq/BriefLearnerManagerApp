<?php
include __DIR__ . '/includes/navbar.php';
?>

    <div class="container" style="background-color: #e3f2fd;">
    <p class="fs-1">Welcome!</p>
      <div class="mb-3 column">
        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-7">
          <input type="text" readonly class="form-control" id="staticEmail" value="">
        </div>
      </div>
    <div class="mb-3 column">
      <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-7">
        <input type="password" class="form-control" id="inputPassword">
        </div>
      </div>
        <button type="button" class="btn btn-primary">Primary</button>
    </div>
