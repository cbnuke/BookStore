<!-- Page header -->
<div class="page-header">
    <h3>แก้ไขข้อมูลสมาชิก <small>ส่วนหลักการจัดการสมาชิก</small></h3>
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
                <?= form_open('members/edit/' . $members_info['id_members']) ?>
                <div class="form-group">
                    <label>ชื่อ</label>
                    <input type="text" class="form-control" name="members_name" placeholder="ชื่อ - นามสกุล" value="<?= $members_info['members_name'] ?>">
                </div>
                <div class="form-group">
                    <label>เบอร์โทรศัพท์</label>
                    <input type="tel" class="form-control" name="members_phone" placeholder="มือถือหรือบ้าน" value="<?= $members_info['members_phone'] ?>">
                </div>
                <div class="form-group">
                    <label>คะแนนสะสม</label>
                    <input type="number" class="form-control" name="members_point" placeholder="ตัวเลข" value="<?= $members_info['members_point'] ?>">
                </div>
                <input type="hidden" name="id_members" value="<?= $members_info['id_members'] ?>">
                <input type="hidden" name="create_date" value="<?= $members_info['create_date'] ?>">
                <button type="submit" class="btn btn-primary">ตกลง</button>
                <a class="btn btn-default" href="<?= base_url('members') ?>">ยกเลิก</a>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</div>