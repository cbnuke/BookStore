<!-- Page header -->
<div class="page-header">
    <h3>แก้ไขข้อมูลหนังสือ <small>ส่วนหลักการจัดการหนังสือ</small></h3>
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
                <?= form_open('books/edit/' . $books_info['id_books']) ?>
                <div class="form-group">
                    <label>ชื่อ</label>
                    <input type="text" class="form-control" name="books_name" placeholder="หนังสือ" value="<?= $books_info['books_name'] ?>">
                </div>
                <div class="form-group">
                    <label>หมวด</label>
                    <?= form_dropdown('id_type', $bookstype_dropdown, $books_info['id_type'], array('class' => 'form-control')) ?>
                </div>
                <div class="form-group">
                    <label>รายละเอียด</label>
                    <textarea class="form-control" name="books_des" placeholder="รายละเอียด"><?= $books_info['books_des'] ?></textarea>
                </div>
                <div class="form-group">
                    <label>ราคารับ</label>
                    <input type="number" class="form-control" name="books_import_price" placeholder="ตัวเลข" value="<?= $books_info['books_import_price'] ?>">
                </div>
                <div class="form-group">
                    <label>ราคาขาย</label>
                    <input type="number" class="form-control" name="books_sell_price" placeholder="ตัวเลข" value="<?= $books_info['books_sell_price'] ?>">
                </div>
                <div class="form-group">
                    <label>คะแนนจากการซื้อ</label>
                    <input type="number" class="form-control" name="books_point" placeholder="ตัวเลข" value="<?= $books_info['books_point'] ?>">
                </div>
                <div class="form-group">
                    <label>ลิงค์รูปภาพจากเว็บ</label>
                    <input type="text" class="form-control" name="books_img" placeholder="ลิงค์" value="<?= $books_info['books_img'] ?>">
                </div>
                <input type="hidden" name="id_books" value="<?= $books_info['id_books'] ?>">
                <input type="hidden" name="create_date" value="<?= $books_info['create_date'] ?>">
                <button type="submit" class="btn btn-primary">ตกลง</button>
                <a class="btn btn-default" href="<?= base_url('books') ?>">ยกเลิก</a>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</div>