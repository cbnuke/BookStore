<!-- Jumbotron -->
<div class="jumbotron">
    <h1>ระบบร้านขายหนังสือ!</h1>
    <p class="lead">ใช้ในการขายหนังสือและสรุปยอดการขาย โดยสามารถจัดการข้อมูลหนังสือและสมาชิกได้ด้วย</p>
    <p><a class="btn btn-sm btn-success" href="<?= base_url('buy') ?>"><span class="glyphicon glyphicon-shopping-cart"></span> ซื้อขาย</a></p>
</div>

<!-- Define row of columns -->
<div class="row">
    <div class="col-md-3">
        <h2>1.สมาชิก</h2>
        <p>ใช้ในการจัดการข้อมูลสมาชิก (เพิ่ม,แก้ไข,ลบ) เพื่อนำข้อมูลสมาชิกใช้ในการซื้อขาย</p>
        <p><a class="btn btn-primary" href="<?= base_url('members') ?>" role="button">ไปที่นี้ &raquo;</a></p>
    </div>
    <div class="col-md-3">
        <h2>2.ข้อมูลหนังสือ</h2>
        <p>ใช้ในการจัดการข้อมูลหนังสือ และประเภทของหนังสือ (เพิ่ม,แก้ไข,ลบ) เพื่อนำข้อมูลหนังสือใช้ในการซื้อขาย</p>
        <p><a class="btn btn-primary" href="<?= base_url('books') ?>" role="button">ไปที่นี้ &raquo;</a></p>
    </div>
    <div class="col-md-3">
        <h2>3.ซื้อขาย</h2>
        <p>ใช้ในการซื้อขายหนังสือ โดยจะใช้ข้อมูลสมาชิกและข้อมูลหนังสือ ในการซื้อขาย</p>
        <p><a class="btn btn-primary" href="<?= base_url('buy') ?>" role="button">ไปที่นี้ &raquo;</a></p>
    </div>
    <div class="col-md-3">
        <h2>4.สถิติ</h2>
        <p>ใช้ในการสรุปสถิติต่างๆ ของระบบ เช่น สถิติการขาย, สถิติการนำเข้าหนังสือ ฯลฯ</p>
        <p><a class="btn btn-primary" href="<?= base_url('stat') ?>" role="button">ไปที่นี้ &raquo;</a></p>
    </div>
</div>