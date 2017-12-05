<div class="container">
<div class="row">
    <div class="col-md-12">
        <h2>Share something</h2>
        <hr class="my-4">
    </div>
    <div class="col-md-12">
        <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
          <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control">
          </div>
          <div class="form-group">
            <label>Body</label>
            <textarea name="body" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <label>Link</label>
            <input type="text" name="link" class="form-control">
          </div>
          <button type="submit" name="submit" class="btn btn-success" value="submit">Submit</button>
          <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>shares">Cancel</a>
        </form>
    </div>
</div>
</div>


