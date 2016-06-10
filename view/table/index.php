<div  id="FoodList">
    <h3 class="page-header-x">จัดการระบบ</h3>

    <div class="foodArea">
        <div id="foodType">

            <ul>

                <li data-id="1" class="active" > โต๊ะอาหาร</li>



                <li></li>
            </ul>
        </div>
        <div id="foodfoodList">
            <div id="showall" class="tasks active"> 
                <label >                    
                   ฟร์อมข้อมูล
                </label>
            </div>
            <ul>
                <li class="FoodList Table T1">
                    <form action="?op=updateTable" method="post">
                        จำนวนโต๊ะ :   <input style="width: 50px" class="form-control" type="text"  name="numoftable" value="<?php echo $this->data['0']['numoftable'] ?>" />

                        <button class="btn btn-success btn-sm" style="margin-top: 5px;"><i class="fa fa-save"></i> บันทึก</button>
                    </form>

                </li>
            </ul>
        </div>
    </div>
    <div class="clearfix"></div></div>

</div>
