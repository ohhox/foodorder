<?php
if ($this->ActiveManu == 'food' && $this->ActiveManuCat == 'index') {
    ?>
    <ul class="mannCat">
        <li class="linkx"> <a href="<?= URL ?>food/foodType" > ประเภทอาหาร </a> </li>
        <li class="linkx"> <a href="<?= URL ?>food/kitchen"> ครัว </a> </li>
        <li class="right"> <a href="<?= URL ?>food/food_form" class="btn btn-primary"> <i class="fa fa-plus"></i> เพิมเมนู</a> </li> 

        <div class="clearfix"></div>
    </ul>
<?php } ?>
<?php
if ($this->ActiveManu == 'food' && $this->ActiveManuCat == 'foodType') {
    ?>
    <ul class="mannCat">
        <li class="linkx"> <a href="<?= URL ?>food/" class="btn btn-default"> <i class="fa fa-angle-left "></i>  กลับ </a> </li>        
        <div class="clearfix"></div>
    </ul>
<?php } ?>

<?php
if ($this->ActiveManu == 'water' && $this->ActiveManuCat == 'index') {
    ?>
    <ul class="mannCat">
        <li class="linkx"> <a href="<?= URL ?>water/foodType" > ประเภทอาหาร </a> </li>
        <li class="linkx"> <a href="<?= URL ?>water/kitchen"> ครัว </a> </li>
        <li class="right"> <a href="<?= URL ?>water/food_form" class="btn btn-primary"> <i class="fa fa-plus"></i> เพิมเมนู</a> </li> 
        <div class="clearfix"></div>
    </ul>
<?php } ?>

<?php
if ($this->ActiveManu == 'water' && $this->ActiveManuCat == 'waterType') {
    ?>
    <ul class="mannCat">
        <li class="linkx"> <a href="<?= URL ?>water/" class="btn btn-default"> <i class="fa fa-angle-left "></i>  กลับ </a> </li>        
        <div class="clearfix"></div>
    </ul>
<?php } ?>

<?php
if ($this->ActiveManu == 'user' && $this->ActiveManuCat == 'index') {
    ?>
   <ul class="mannCat">       
       <li>จัดการผู้ใช้งานระบบ</li>
        <li class="right"> <a href="<?= URL ?>user/user_form" class="btn btn-primary"> <i class="fa fa-plus"></i> เพิมเมนู</a> </li> 

        <div class="clearfix"></div>
    </ul>
<?php } ?>