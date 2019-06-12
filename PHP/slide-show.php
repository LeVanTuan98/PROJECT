<div class="common-slideshow">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php
            $sqlSelect = "SELECT * FROM slide_show";
            $images = $database->RunQuery($sqlSelect);
            $count = $database->NumRow($sqlSelect);
            ?>
            <?php for ($i = 0; $i < $count ;$i++): ?>
                <?php if ($i == 0): ?>
                    <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i;?>" class="active" style="background-color: #d0d0d0;border-radius: 50%;height:10px;width:10px;"></li>
                <?php else: ?>
                    <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i;?>" style="background-color: #d0d0d0;border-radius: 50%;height:10px;width:10px;"></li>
                <?php endif; ?>
            <?php endfor;?>
        </ol>
        <div class="carousel-inner">
            <?php foreach ($images as $image) :?>
                <?php if ($image['id'] == 1) :?>
                    <div class="carousel-item active" data-interval="1000">
                        <a href="#"><img src="<?php echo $image['src']?>" class="d-block w-100" alt="<?php echo $image['alt']?>"></a>
                    </div>
                <?php else :?>
                    <div class="carousel-item" data-interval="1000">
                        <a href="#"><img src="<?php echo $image['src']?>" class="d-block w-100" alt="<?php echo $image['alt']?>"></a>
                    </div>
                <?php endif;?>
            <?php endforeach;?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

