<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="Bookstore System for Database Training">
        <meta name="author" content="CBNUKE">

        <title>Bookstore System</title>

        <!-- Bootstrap core CSS -->
        <?= css('bootstrap.min.css') ?>

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <?= css('ie10-viewport-bug-workaround.css') ?>

        <!-- Custom styles for this template -->
        <?= css('justified-nav.css') ?>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <div class="container">

            <!-- The justified navigation menu is meant for single line per list item.
                 Multiple lines will require custom code not provided by Bootstrap. -->
            <div class="masthead">
                <h3 class="text-muted">Bookstore System</h3>
                <nav>
                    <ul class="nav nav-justified">
                        <li <?= ($this->uri->segment(1) == 'home' || is_null($this->uri->segment(1))) ? 'class="active"' : '' ?>>
                            <a href="<?= base_url('home') ?>"><span class="glyphicon glyphicon-home"></span> หน้าหลัก</a>
                        </li>
                        <li <?= ($this->uri->segment(1) == 'members') ? 'class="active"' : '' ?>>
                            <a href="<?= base_url('members') ?>"><span class="glyphicon glyphicon-user"></span> สมาชิก</a>
                        </li>
                        <li <?= ($this->uri->segment(1) == 'books') ? 'class="active"' : '' ?>>
                            <a href="<?= base_url('books') ?>"><span class="glyphicon glyphicon-book"></span> หนังสือ</a>
                        </li>
                        <li <?= ($this->uri->segment(1) == 'buy') ? 'class="active"' : '' ?>>
                            <a href="<?= base_url('buy') ?>"><span class="glyphicon glyphicon-shopping-cart"></span> ซื้อขาย</a>
                        </li>
                        <li <?= ($this->uri->segment(1) == 'stat') ? 'class="active"' : '' ?>>
                            <a href="<?= base_url('stat') ?>"><span class="glyphicon glyphicon-equalizer"></span> สถิติ</a>
                        </li>
                    </ul>
                </nav>
            </div>