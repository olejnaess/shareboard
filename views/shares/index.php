<div>

    <a href="<?php echo ROOT_PATH ?>shares/add" class="btn btn-success btn-share">Share something</a>
    <?php foreach($viewmodel as $item) : ?>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-block">
                    <h3><?php echo $item['title'];  ?></h3>
                        <small><?php echo $item['create_date']; ?></small>
                        <hr>
                        <p><?php echo $item['body']; ?></p>
                        <br>
                        <a href="<?php echo $item['link'];  ?>" target="_blank" class="btn btn-default"> Go to Website</a>

                    <?php endforeach; ?>
                    </div>
                </div>

            </div>

        </div>

</div>