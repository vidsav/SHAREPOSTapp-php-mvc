<div>
    <br>
    <a class="btn btn-success btn-share" href="<?php echo ROOT_PATH; ?>shares/add">Share</a>
    <br>
    <?php foreach($viewmodel as $item) : ?>
    <br>
        <div class="card-header">
            <h3><?php echo $item['title']; ?></h3>
            <small><?php echo $item['create_date']; ?></small>
            <hr>
            <p><?php echo $item['body']; ?></p>
            <br>
            <a class="btn btn-info" href="<?php echo $item['link']; ?>" target="_blank">Go to Website</a>
        </div>
    <?php endforeach; ?>
</div>