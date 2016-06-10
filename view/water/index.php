<div  id="FoodList">
    <h3 class="page-header-x">รายการเมนูอาหาร <span >[ ทั้งหมด <?= count($this->data) ?> เมนู ]</span> </h3>
    <?php
    $type = '';
    $i = 0;
    $foodType = array();
    $food = array();
    $x = 0;
    foreach ($this->data AS $k => $v) {

        if ($type != $v['ftid']) {
            $foodType[$i]['food_type_id'] = $v['food_type_id'];
            $foodType[$i]['food_type'] = $v['food_type'];
            $i ++;
            $type = $v['ftid'];
        }
        $food[$v['food_type_id']][$x] = $v;
        $x++;
    }
    ?>
    <div class="foodArea">
         <div id="foodType">
            <div class="foodtypeHead">ประเภทอาหาร</div>
            <ul>


                <?php
                foreach ($foodType AS $key => $values) {
                    ?>
                    <li data-id="<?= $values['food_type_id'] ?>" ><?= $values['food_type'] ?></li>

                    <?php
                }
                ?>

                <li></li>
            </ul>
        </div>
        <div id="foodfoodList">
            <div id="showall" class="tasks active"> 
                <label >                    
                    <span class="tasks-list-mark  " ></span>
                    <span>แสดงทั้งหมด! </span>
                </label>
            </div>
            <ul>
                <?php
                foreach ($food AS $key => $values) {
                    foreach ($values as $keyx => $valuex) {
                        ?>
                        <li class="FoodList T<?= $valuex['food_type_id'] ?>">
                            <div class="inner">
                                <div class="avatar"><img src="<?php echo $this->getFoodImage($valuex['food_image']); ?>" > </div>

                                <div class="info">
                                    <h3><?= $valuex['food_name'] ?>  </h3>
                                    <p class="price"><?= $valuex['food_price'] ?>฿</p>
                                </div>

                                <div class="control">
                                    <a href="<?= URL ?>water/food_form/<?= $valuex['fid'] ?>" class=" btn-xs  " title="แก้ไข"><i class="fa fa-pencil"></i></a>
                                    <a data-href="<?= URL ?>water/removeFood/<?= $valuex['fid'] ?>"  class="removeFood btn-xs" title="ลบ"><i class="fa fa-remove"></i></a>
                                </div>

                                <div class="gradient-overlay"> </div>

                            </div>

                        </li>
                        <?php
                    }
                }
                ?>
            </ul>
        </div>
    </div>
    <div class="clearfix"></div></div>

</div>
