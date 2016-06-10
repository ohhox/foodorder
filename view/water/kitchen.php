<h3>รายการประเภทอาหาร</h3>

<form class="form-inline" method="POST">
    <div class="form-group">
        <label for="kitchen_name"> เพิ่มประเภท </label>
        <input type="text" class="form-control" name="kitchen_name" id="kitchen_name" placeholder="ชื่อประเภทอาหาร">
    </div> 
    <button type="submit" class="btn btn-default">เพิ่ม</button>
</form>
<br/><br/>
<div class="row">
    <div class="col-lg-5">
        <table class="table">
            <tr>
                <th>ลำดับ</th>
                <th>ประเภท</th>
                <th>
                    <i class="fa fa-cog  fa-2x"></i>
                </th>
            </tr>
            <?php
            $i = 0;
            foreach ($this->data AS $key => $values) {
                ?>
                <tr>
                    <td><?= ++$i; ?></td>
                    <td><?= $values['kitchen_name']; ?></td>
                    <td>
                        <a class="btn btn-success btn-round btn-xs foodTypeEdit" data-herf="<?= URL ?>food/kitchenEdit/<?= $values['kitchen_id']; ?>"  data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil "></i></a>
                        <a class="btn btn-danger btn-round btn-xs removeFoodType" data-herf="<?= URL ?>food/kitchenRemove/<?= $values['kitchen_id']; ?>"><i class="fa fa-remove "></i></a>
                    </td>
                </tr>

            <?php } ?>
        </table>
    </div>





</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">แก้ไขข้อมูลประเภทอาหาร</h4>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" id="CloseModal" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary " id="SaveEdit">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(function () {
        $('.foodTypeEdit').on('click', function () {
            var url = $(this).attr('data-herf');
            $('.modal-body').load(url);
        });
        $('.removeFoodType').on('click', function () {
            var bog = $(this);
            var url = $(this).attr('data-herf'); 
            if (confirm('ยืนยันการลบ')) {
                $.ajax({
                    url: url
                }).done(function (data) {
                    if (data == 'OK') {
                        $(bog).parent().parent().addClass('animated zoomOutDown');
                        noti('แจ้งเตือน','ลบรายการครัวเรียบร้อย')
                        setTimeout(function () {
                            $(bog).parent().parent().remove();
                        }, 900);
                    }
                });
            }
            event.preventDefault();
        });

    });
</script>
