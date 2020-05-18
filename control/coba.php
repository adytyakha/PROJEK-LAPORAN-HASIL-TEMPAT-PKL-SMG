<?php 
		
echo '<li>Tanggal: ' . $_POST['reservationdate1'] . ' nnn</li>';
echo '<li>Tanggal: ' . $_POST['data2'] . '</li>';
	
		?>

<?php echo '<li>Tanggal: ' . $_POST['data2'] . '</li>';?>

		<!-- kode kurang tepat (salah)
SELECT `id_pelaporan`, `id_jenis_pelayanan`, `nomer_register`, `nik_pelopor`, `id_pelaporan_a`, `status_text`, `is_locked`, `is_closed`, `user_entri`, `tgl_entri`, `user_update`, `tgl_update` FROM `pelaporan` WHERE id_pelaporan and  (tgl_entri BETWEEN '2020-05-17' and '2020-05-19') ORDER by tgl_entri DESC


kode berhasil 
SELECT DISTINCT `tgl_entri` FROM `pelaporan` WHERE id_pelaporan and (tgl_entri BETWEEN '2020-05-17' and '2020-05-19') ORDER by tgl_entri DESC
 -->


<!-- kode berhasil sukses
  <?php 
                    require '../control/database.php';
                 $dari = $_POST['dari'];
                 $sampai = $_POST['sampai'];
       $sql = $koneksi->query("SELECT DISTINCT date_format(tgl_entri, '%Y-%m-%d') AS `tgl_entri`  FROM `pelaporan` WHERE id_pelaporan and (tgl_entri BETWEEN '$dari' and '$sampai') ORDER by  tgl_entri ");
        while($data= $sql->fetch_assoc()){

          
  

          ?> -->

<!-- kode sukses
          SELECT DISTINCT date_format(tgl_entri, '%Y-%m-%d') AS `tgl_entri`  FROM `himpunan` WHERE no and (tgl_entri BETWEEN '2020-05-12 00:00:00' and '2020-05-16 23:59:59') ORDER by tgl_entri DESC -->


<!--           SELECT DISTINCT  `tgl_entri` , COUNT(tgl_entri)as prosentase FROM `pelaporan` WHERE id_pelaporan and (tgl_entri BETWEEN '2020-05-17' and '2020-05-18')  GROUP by date_format(tgl_entri, '%Y-%m-%d') -->