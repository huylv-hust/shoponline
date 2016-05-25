<style>
    input[type=checkbox], input[type=radio] {
        margin: 10px 5px;
    }
</style>
<div class="panel-heading"><i class="glyphicon glyphicon-th-list"></i> Trực tiếp thể thao</div>
<div class="panel-body">
    <form id="product-form" class="form-horizontal" method="post"
          action="admin.php?controller=livesport&amp;action=edit" enctype="multipart/form-data" role="form">
        <input name="id" type="hidden" value="<?php echo $livesport ? $livesport['Id'] : '0'; ?>"/>

        <div class="form-group">
            <label for="title" class="col-sm-3 control-label">Tiêu đề</label>

            <div class="col-sm-9">
                <input name="title" type="text" value="<?php echo $livesport ? $livesport['Title'] : ''; ?>"
                       class="form-control" id="title" placeholder="Tiêu đề" required=""/>
            </div>
        </div>

        <div class="form-group">
            <label for="content" class="col-sm-3 control-label">Nội dung</label>

            <div class="col-sm-9">
                <textarea name="content"  class="form-control" id="content"/><?php echo $livesport ? $livesport['Description'] : ''; ?></textarea>
            </div>
        </div>

        <div class="form-group">
            <label for="link" class="col-sm-3 control-label">Link Youtube</label>

            <div class="col-sm-9">
                <input name="linkyoutube" type="text" value="<?php echo $livesport ? $livesport['Link'] : ''; ?>"
                       class="form-control" id="link" placeholder="Link youtube" required=""/>
            </div>
        </div>

        <div class="form-group">
            <label for="link1" class="col-sm-3 control-label">Link 1</label>

            <div class="col-sm-9">
                <input name="url1" type="text" value="<?php echo $livesport ? $livesport['Url1'] : ''; ?>"
                       class="form-control" id="link1" placeholder="Link 1" required=""/>
            </div>
        </div>

        <div class="form-group">
            <label for="link2" class="col-sm-3 control-label">Link 2</label>

            <div class="col-sm-9">
                <input name="url2" type="text" value="<?php echo $livesport ? $livesport['Url2'] : ''; ?>"
                       class="form-control" id="link2" placeholder="Link 2" required=""/>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
                <button type="submit"
                        class="btn btn-primary"><?php echo $livesport ? 'Cập nhật' : 'Thêm mới'; ?></button>
                <a class="btn btn-warning" href="admin.php?controller=livesport">Trở về</a>
            </div>
        </div>
    </form>
</div>

<script src="admin/themes/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="admin/themes/ckfinder/ckfinder.js"></script>
<script type="text/javascript">CKEDITOR.replace('content',{height: '300px'});</script>

