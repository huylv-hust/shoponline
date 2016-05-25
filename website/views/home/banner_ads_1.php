<?php $banner_ads = get_a_record('advertise',3);?>
<div class="shoping" style="padding:0px">
<div class="container">
    <a href="home">
        <figure >
            <?php echo '<image class="img-responsive" src="'.PATH_URL_IMG.$banner_ads['Image'] . '?time=' . time() . '" alt="'.$banner_ads['Image'].'"/ >'; ?>
        </figure>
    </a>
</div>
</div>


