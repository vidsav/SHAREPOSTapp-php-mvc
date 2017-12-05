<div>
    <?php if(isset($_SESSION['is_logged_in'])) : ?>
    <br>
    <a class="btn btn-success btn-share btn-lg" href="<?php echo ROOT_PATH; ?>shares/add">Share</a>
    <?php endif; ?>
    <br>
    <?php foreach($viewmodel as $item) : ?>
    <br>
        <div class="card-header">
            <h3><?php echo $item['title']; ?></h3>
            <small><?php echo $item['create_date']; ?></small>
            <hr>
            <p><?php echo $item['body']; ?></p>
            <br>
            <a class="btn btn-info" href="<?php echo $item['link']; ?>" target="_blank">More info...</a>
        </div>
    <?php endforeach; ?>
</div>