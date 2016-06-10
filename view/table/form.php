<div >
    <h3 class="page-header-x">ฟอร์มเพิ่ม - แก้ไข เมนูอาหาร</h3>
    <form class="form-horizontal" autocomplete="off" method="post"  enctype="multipart/form-data"> 
        <div class="form-group">
            <label for="user_image" class="col-sm-2 control-label">รูปภาพ</label>
            <div class="col-sm-3">
                <input type="file" id="user_image" name="user_image">  
                <?php
                if ($this->model->__get('user_image') != '') {
                    ?>
                    <p ><br/>เลือกรูปภาพใหม่เพื่อเปลี่ยนรุปภาพ</p>
                    <img src="<?php echo $this->getUserImage($this->model->__get('user_image')); ?>" width="200" />
                    <?php
                }
                ?>
            </div>
        </div>
        <div class="form-group">
            <label for="user_level" class="col-sm-2 control-label">ประเภทผู้ใช้งาน</label>
            <div class="col-sm-3">
                <select class="form-control" name="user_level" id="user_level">
                    <?php
                    foreach ($this->UserType as $key => $value) {
                        $select = '';
                        if($this->model->__get('user_level') == $key) $select = 'selected';
                        ?>
                        <option value="<?= $key ?>" <?=$select?>><?= $value ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
        </div> 
        <div class="form-group">
            <label for="user_name_lastname" class="col-sm-2 control-label">ชื่อ - นามสกุล</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="user_name_lastname" name="user_name_lastname" placeholder="ชื่อ - นามสกุล" value="<?= $this->model->__get('user_name_lastname'); ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="user_username" class="col-sm-2 control-label">username</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="user_username" name="user_username" placeholder="Username" value="<?= $this->model->__get('user_username'); ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="user_password" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-3">
                <input type="password" class="form-control" id="user_password" name="user_password" placeholder="Password" value="<?= $this->model->__get('user_password'); ?>">
            </div>
        </div>


        <button type="submit" class="btn btn-success">บันทึก</button>
    </form>
</div>