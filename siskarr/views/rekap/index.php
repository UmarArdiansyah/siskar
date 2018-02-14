<?php
$this->title = 'Rekap Wilayah';
$this->params['breadcrumbs'][] = $this->title;
?>
 <div class="box">
   <div class="box-body ">
     <p><a class="btn btn-lg btn-danger" href="index.php">Kembali</a></p>
                 <table id="example1" class="table table-bordered table-striped">
                   <thead>
                     <tr>
                       <th>No.</th>
                       <th>Nama</th>
                       <th>Jabatan</th>
                       <th>Golongan</th>
                       <th>Gaji Pokok</th>
                       <th>Gaji Tunjangan</th>
                       
                     </tr>
                 </thead>
                 <?php
                  $i=1;
                 foreach($query as $row) { ?>
                   <tbody>
               <tr>
                 <td><?php echo $i++; ?></td>
                 
                 <td><?php echo $row['nama']; ?></td>
                 <td><?php echo $row['jabatan']; ?></td>
                 <td><?php echo $row['golongan']; ?></td>
                 <td><?php echo $row['gaji_pokok']; ?></td>
                 <td><?php echo $row['tunjangan_gaji']; ?></td>

               </tr>
                 <?php } ?>
                   </tbody>
                 </table>
               </div>
  </div>