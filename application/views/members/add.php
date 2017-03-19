<!-- Page header -->
<div class="page-header">
    <h3>เพิ่มข้อมูลสมาชิกใหม่ <small>ส่วนหลักการจัดการสมาชิก</small></h3>
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
                <?= form_open('members/add') ?>
                <div class="form-group">
                    <label>ชื่อ</label>
                    <input type="text" class="form-control" name="members_name" placeholder="ชื่อ - นามสกุล">
                </div>
                <div class="form-group">
                    <label>เบอร์โทรศัพท์</label>
                    <input type="tel" class="form-control" name="members_phone" placeholder="มือถือหรือบ้าน">
                </div>
                <div class="form-group">
                    <label>คะแนนสะสม</label>
                    <input type="number" class="form-control" name="members_point" placeholder="ตัวเลข">
                </div>
                <button type="submit" class="btn btn-primary">ตกลง</button>
                <a class="btn btn-default" href="<?= base_url('members') ?>">ยกเลิก</a>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</div>