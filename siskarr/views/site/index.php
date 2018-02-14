<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Marzard Studio</h1>

        <p><a class="btn btn-lg btn-success" href="index.php?r=rekap">Data Karyawan</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Karyawan</h2>
                 <p>Karyawan dari Marzard Studio berasal dari berbagai latar belakang, dan juga terdapat beberapa bagian jabatan informasinya cek dibawa</p>
                  <p><a class="btn btn-default" href="index.php?r=siskarr">CRUD Karyawan &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Gaji</h2>

                <p>Gaji yang diperoleh dapat dilihat berdasarkan golongan dari setiap karyawan. Disamping gaji pokok karyawan juga diberikan gaji tunjangan</p>

                <p><a class="btn btn-default" href="index.php?r=gaji">CRUD Gaji &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Bagian</h2>

                <p>Karyawan yang terdapat di Marz Studio mempunyai beragam jabatan.</p>

                <p><a class="btn btn-default" href="index.php?r=bagian">CRUD Jabatan Karyawan &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
