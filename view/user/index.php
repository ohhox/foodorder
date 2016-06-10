<div  id="FoodList">
    <h3 class="page-header-x">ผู้ใช้งานทั้งหมด <span >[ ทั้งหมด <?= count($this->data) ?> คน ]</span> </h3>
    <?php
    $type = '';
    $i = 0;
    $foodType = array();
    $food = array();
    $x = 0;
    foreach ($this->data AS $k => $v) {

        if ($type != $v['user_level']) {
            $foodType[$i]['user_level'] = $v['user_level'];
            $i ++;
            $type = $v['user_level'];
        }
        $food[$v['user_level']][$x] = $v;
        $x++;
    }
    ?>
    <div class="foodArea">
        <div id="foodType">
            <div class="foodtypeHead">ประเภทผู้ใช้งาน</div>
            <ul>


                <?php
                foreach ($foodType AS $key => $values) {
                    ?>
                    <li data-id="<?= $values['user_level'] ?>" ><?= $this->UserType[$values['user_level']] ?></li>

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
                        <li class="FoodList T<?= $valuex['user_level'] ?>">
                            <div class="inner">
                                <div class="avatar"><img src="<?php echo $this->getUserImage($valuex['user_image']); ?>" > </div>
                                <div class="info">
                                    <h3><?= $valuex['user_name_lastname'] ?>  </h3>                                  
                                </div>
                                <div class="control">
                                    <a href="<?= URL ?>user/user_form/<?= $valuex['user_id'] ?>" class=" btn-xs  " title="แก้ไข"><i class="fa fa-pencil"></i></a>
                                    <a data-href="<?= URL ?>user/removeUser/<?= $valuex['user_id'] ?>"  class="removeFood btn-xs" title="ลบ"><i class="fa fa-remove"></i></a>
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
