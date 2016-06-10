<h3 class="page-header-x">ฟอร์มเพิ่ม - แก้ไข เมนูอาหาร</h3>
<form class="form-horizontal" autocomplete="off" method="post"  enctype="multipart/form-data"> 
    <div class="form-group">
        <label for="foodImage" class="col-sm-2 control-label">รูปภาพอาหาร</label>
        <div class="col-sm-5">
            <input type="file"  id="foodImage" name="foodImage" placeholder="ชื่อเมูอาหาร">
            
            <?php
            if ($this->model->variables['food_image'] != '') {
                ?>
            <p ><br/>เลือกรูปภาพใหม่เพื่อเปลี่ยนรุปภาพ</p>
            <img src="<?php echo $this->getFoodImage($this->model->variables['food_image']); ?>" width="200" />
                <?php
            }
            ?>
        </div>
    </div>
    <div class="form-group">
        <label for="food_name" class="col-sm-2 control-label">ชื่อเมูอาหาร</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="food_name" name="food_name" placeholder="ชื่อเมูอาหาร" value="<?= $this->model->variables['food_name'] ?>">
        </div>
    </div>
    <div class="form-group">
        <label for="food_price" class="col-sm-2 control-label">ประเภทอาหาร</label>
        <div class="col-sm-3">
            <select class="form-control" name="food_type_id">
               
                <?php
                foreach ($this->ListFoodTypeWater() AS $key => $values) {
                    $select = '';
                    if ($this->model->variables['food_type_id'] == $values['food_type_id']) {
                        $select = 'selected';
                    }
                    ?> 
                    <option value="<?= $values['food_type_id'] ?>" <?= $select ?> ><?= $values['food_type'] ?></option>
                    <?php
                }
                ?>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label for="food_price" class="col-sm-2 control-label">ห้องครัว</label>
        <div class="col-sm-3">

            <select class="form-control" name="kitchen_id">
                
                <?php
                foreach ($this->ListkitchenWater() AS $keyx => $valuesx) {
                    $select = '';
                    if ($this->model->variables['kitchen_id'] == $valuesx['kitchen_id']) {
                        $select = 'selected';
                    }
                    ?> 
                    <option value="<?= $valuesx['kitchen_id'] ?>" <?= $select ?> ><?= $valuesx['kitchen_name'] ?></option>
                    <?php
                }
                ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="food_price_mini" class="col-sm-2 control-label">ราคา</label>
        <div class="col-sm-2">
            <input type="number" class="form-control" id="food_price_mini" name="food_price" placeholder="ราคา" value="<?= $this->model->variables['food_price_mini'] ?>">
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-success"> บันทึก </button>
        </div>
    </div>
</form>

