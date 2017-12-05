<div class="container">
<div class="row">
    <div class="col-md-12">
        <h2>Login</h2>
        <hr class="my-4">
    </div>
    <div class="col-md-12">
        <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
          <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control">
          </div>
          <button type="submit" name="submit" class="btn btn-success" value="submit">Login</button>
          <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>shares">Cancel</a>
        </form>
    </div>
</div>
</div>