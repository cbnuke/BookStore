<!-- Page header -->
<div class="page-header">
    <h3>เพิ่มข้อมูลหมวดใหม่ <small>ส่วนหลักการจัดการหนังสือ</small></h3>
</div>

<!-- Define row of columns -->
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-info">
            <div class="panel-heading clearfix">
                <h3 class="panel-title pull-left" style="padding-top: 7px;">
                    ฟอร์มข้อมูล
                </h3>
            </div>
            <div class="panel-body">
                <?= form_open('books/add_type') ?>
                <div class="form-group">
                    <label>ชื่อ</label>
                    <input type="text" class="form-control" name="type_name" placeholder="ชื่อหมวด">
                </div>
                <button type="submit" class="btn btn-primary">ตกลง</button>
                <a class="btn btn-default" href="<?= base_url('books') ?>">ยกเลิก</a>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</div>