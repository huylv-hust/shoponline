<div class="banner">
    <div class="col-sm-3 banner-mat">
        <?php echo '<image class="img-responsive" src="'.PATH_URL_IMG.$banner_left['Image'] . '?time=' . time() . '" alt="'.$banner_left['Image'].'"/ >'; ?>
    </div>
    <div class="col-sm-6 matter-banner">
        <div class="slider">
            <div class="callbacks_container">
                <ul class="rslides" id="slider">
                    <?php for($i=1;$i<5;$i++):?>
                        <li>
                            <?php echo '<image src="'.PATH_URL_IMG . $slideshow['img'.$i] . '?time=' . time() . '" alt="'.$slideshow['img'.$i].'"/ >'; ?>

                        </li>
                    <?php endfor;?>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-sm-3 banner-mat">
        <?php echo '<image class="img-responsive" src="'.PATH_URL_IMG. $banner_right['Image'] . '?time=' . time() . '" alt="'.$banner_right['Image'].'"/ >'; ?>
    </div>
    <div class="clearfix"></div>
</div>