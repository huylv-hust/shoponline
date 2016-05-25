<?php require('website/views/shared/header.php'); ?>
<style>
.modal-title h2{
    color: #000;
    margin-bottom: 1em;
}
</style>
    <div class="product-model">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="home"><b>TRANG CHỦ</b></a></li>
            <li class="active">Thể thao trực tiếp</li>
        </ol>

        <div class="col-md-9 product-model-sec">
            <div class="feature-grids" style="background-color:#ffffff">
                <div class="section" id="intro">
                 <?php if (empty($livesports)) : ?>
                        <h3 class="col-sm-12">Không có sản phẩm nào trong danh mục này.</h3>
                    <?php endif; ?>
                    <?php foreach ($livesports as $livesport): ?>
                    <div class="arrivals" style="border-bottom: 1px solid silver !important;">
                        <div class="modal-title" >
                                <h2><?php echo $livesport['Title'] ?></h2>
                        </div>
                          <div class="arrival-info" style="margin-bottom: 1em">
                          <iframe width="560" height="315"  src="<?php echo $livesport['Link'] ?>" frameborder="0" allowfullscreen></iframe>
                        </div>
                          <div class="modal-title" style="color: #000;margin-bottom: 2em">
                                <h4><?php echo $livesport['Description'] ?></h4>
                        </div>
                          <div class="modal-title" style="color: #000;margin-bottom: 1em">
                                  <h6>Link 1: <a href="<?php echo $livesport['Url1']?>"><?php echo $livesport['Url1']?></a></h6>
                        </div>
                          <div class="modal-title" style="color: #000;margin-bottom: 1em">
                                  <h6>Link 2: <a href="<?php echo $livesport['Url2']?>"><?php echo $livesport['Url2']?></a></h6>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    <?php require('website/views/shared/navbar.php'); ?>
    </div>
</div>
</div>

<?php require('website/views/shared/footer.php'); ?>