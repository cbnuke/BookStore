<!-- Page header -->
<div class="page-header">
    <h3>เพิ่มข้อมูลหนังสือใหม่ <small>ส่วนหลักการจัดการหนังสือ</small></h3>
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
                <?= form_open('books/add') ?>
                <div class="form-group">
                    <label>ชื่อ</label>
                    <input type="text" class="form-control" name="books_name" placeholder="หนังสือ">
                </div>
                <div class="form-group">
                    <label>หมวด</label>
                    <?= form_dropdown('id_type', $bookstype_dropdown, NULL, array('class' => 'form-control')) ?>
                </div>
                <div class="form-group">
                    <label>รายละเอียด</label>
                    <textarea class="form-control" name="books_des" placeholder="รายละเอียด"></textarea>
                </div>
                <div class="form-group">
                    <label>ราคารับ</label>
                    <input type="number" class="form-control" name="books_import_price" placeholder="ตัวเลข">
                </div>
                <div class="form-group">
                    <label>ราคาขาย</label>
                    <input type="number" class="form-control" name="books_sell_price" placeholder="ตัวเลข">
                </div>
                <div class="form-group">
                    <label>คะแนนจากการซื้อ</label>
                    <input type="number" class="form-control" name="books_point" placeholder="ตัวเลข">
                </div>
                <div class="form-group">
                    <label>ลิงค์รูปภาพจากเว็บ</label>
                    <input type="text" class="form-control" name="books_img" placeholder="ลิงค์">
                </div>
                <button type="submit" class="btn btn-primary">ตกลง</button>
                <a class="btn btn-default" href="<?= base_url('books') ?>">ยกเลิก</a>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</div>