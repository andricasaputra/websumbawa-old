<?php  

require_once('templates/head.php');


?>
<style type="text/css">
	ol li{
		padding-bottom: 10px
	}

	.atas{
		margin-top: 50px;
	}

	#about a{
		width:30%;
		font-size: 12pt;
	}
</style>

<?php  

	if (@$_GET['info'] == 'berkala') {
		
		include_once('views/ppid/berkala.php');

	}elseif (@$_GET['info'] == 'serta_merta') {
		
		include_once('views/ppid/serta_merta.php');

	}elseif (@$_GET['info'] == 'setiap_saat') {
		
		include_once('views/ppid/setiap_saat.php');

	}elseif (isset($_GET['prosedur'])){ ?>


	<section id="about" class="light-bg atas" style="margin-top: 80px; margin-bottom: -150px">
		<div class="container">
			<div class="row">
				<div class="mz-module text-center">
					<div class="mz-module-about text-center">
						<div class="section-title">
							<h2 class="judul" style="font-size: 22pt">Prosedur Permohonan & Tata Cara Pengajuan Keberatan <br> Informasi Dan Dokumentasi</h2>
						</div>							
						<a href="#tatacara" class="button-cta btn-berita">Tata Cara permohonan</a>
						<a href="#keberatan" class="button-cta btn-berita">Tata Cara Pengajuan Keberatan</a>
						<a href="spp" class="button-cta btn-berita">Standar Pelayanan Publik</a>
					</div>
				</div>
				<!-- end about module -->
			</div>
		</div>
		<!-- /.container -->
	</section>


	<section id="tatacara" class="light-bg" style="margin-bottom: -150px">
		<div class="container">
			<div class="row">
				<div class="mz-module text-center">
					<div class="mz-module-about text-center">
						<div class="section-title">
							<h2 class="judul" style="font-size: 28pt; color: #000">Hak Atas Informasi Publik</h2>
						</div>							
						<img src="assets/img/org/hakatasinformasi.png" width="600">
					</div>
				</div>
				<!-- end about module -->
			</div>
		</div>
		<!-- /.container -->
	</section>

	<section id="tatacara" class="light-bg" style="margin-bottom: -150px">
		<div class="container">
			<div class="row">
				<div class="mz-module text-center">
					<div class="mz-module-about text-center">
						<div class="section-title">
							<h2 class="judul" style="font-size: 28pt; color: #000">Tata Cara Permohonan</h2>
						</div>							
						<img src="assets/img/org/tatacara-permohonan-informasi.jpg">
						<p style="margin-top: 30px; font-weight: bold; color: #000">Langkah-langkah Pengajuan Permohonan</p>
							<ol style="text-align: left !important;">
							<li>Pemohon Informasi Publik mengajukan permintaan informasi kepada Pejabat Pengelola Informasi dan Dokumentasi (PPID), baik langsung secara lisan, melalui surat atau surat elektronik (email), dan juga permintaan dapat dilakukan melalui telepon.</li>
							<li>Pemohon informasi harus menuliskan jenis informasi yang diinginkan pada form yang tersedia yaitu Form 1A untuk perorangan atau Form 1B untuk badan hukum/badan publik/kelompok.</li>
							<li>Pengelola PPID mencatat semua informasi yang di sebutkan oleh pemohon.</li>
							<li>Pemohon informasi harus meminta tanda bukti kepada PPID bahwa telah melakukan permintaan informasi, serta nomor pendaftaran.</li>
							<li>Dalam waktu 10 (sepuluh) hari kerja Pejabat PPID harus memberikan jawaban tertulis atas permintaan informasi yang di butuhkan. PPID dapat meminta perpanjangan wakjtu 7 (tujuh) hari kerja untuk memenuhi permintaan informasi disertai alasan perpanjangan.</li>
							<li>Setelah waktu yang ditentukan pemohon menerima informasi.</li>
							<li>Jika pemohon merasa tidak puas dengan informasi yang diberikan maka dapat mengajukan keberatan informasi.</li>
						</ol>
						  <button type="submit" onclick="window.open('assets/docs/form1a.pdf')" class="button-cta btn-berita" style="padding: 10px 10px; font-size: 8pt;  margin-top: 40px;">Download Form 1A</button>
						  <button type="submit" onclick="window.open('assets/docs/form1b.pdf')" class="button-cta btn-berita" style="padding: 10px 10px; font-size: 8pt;  margin-top: 40px;">Download Form 1B</button>

					</div>
				</div>
				<!-- end about module -->
			</div>
		</div>
		<!-- /.container -->
	</section>



	<section id="keberatan" class="light-bg">
		<div class="container">
			<div class="row">
				<div class="mz-module text-center">
					<div class="mz-module-about text-center">
						<div class="section-title">
							<h2 class="judul" style="font-size: 28pt; color: #000">Tata Cara Pengajuan Keberatan</h2>
						</div>							
						<img src="assets/img/org/tatacara-pengajuan-keberatan.jpg">
						<p style="margin-top: 30px; font-weight: bold; color: #000">Langkah-langkah Pengajuan Keberatan</p>
							<ol style="text-align: left !important;">
							<li>
							Keberatan Informasi diajukan kepada atasan Pejabat Pengelola Informasi dan Dokumentasi (PPID).</li>
							<li>Atasan PPID harus memberikan tanggapan atas pengajuan keberatan paling lambat 30 hari kerja setelah diterimanya keberatan secara tertulis</li>
							<li>PSetelah 30 hari kerja Pengaju keberatan menerima kembali putusan dari PPID.
								<br>
							Jika pengaju keberatan puas atas putusan atasan PPID maka sengketa selesai.</li>
							<li>Jika pengaju keberatan merasa tidak puas atas putusan atasan PPID, sengketa dapat diajukan melalui Komisi Informasi. Pengajuan sengketa ke Komisi Informasi selambat-lambatnya 14 hari kerja sejak diterimanya keputusan/tanggapan tertulis dari atasan PPID.</li>
							<li>14 hari kerja sejak diterimanya permohonan penyelesaian sengketa, Komisi Informasi harus melakukan proses penyelesaian sengketa melalaui mediasi dan/atau adjudikasi dan diselesaikan paling lambat 100 hari kerja.</li>
							<li>Jika pada tahap mediasi dihasilkan kesepakatan maka hasil kesepakatan tersebut ditetapkan oleh Putusan Komisi Informasi & bersifat final dan mengikat, Jika tidak dihasilkan juga kesepakatan atau penarikan diri dari salah satu pihak, maka Komisi Informasi melanjutkan sengketa melalui Adjudikasi dan Jika pemohon informasi puas atas keputusan adjudikasi Komisi Informasi sengketa selesai.</li>
						</ol>
						<button type="submit" onclick="window.open('assets/docs/form6.pdf')" class="button-cta btn-berita" style="padding: 10px 10px; font-size: 8pt;  margin-top: 40px;">Download Form Pengaduan</button>
					</div>
				</div>
				<!-- end about module -->
			</div>
		</div>
		<!-- /.container -->
	</section>



<?php } elseif (isset($_GET['regulasi'])){ 


		include_once('views/ppid/regulasi.php');


 } elseif (isset($_GET['tim_ppid'])){ 


		include_once('views/ppid/tim_ppid.php');


 }elseif (isset($_GET['hak_informasi'])){ 


		include_once('views/ppid/hak_atas_informasi.php');


 }elseif (isset($_GET['formulir'])){ 


		include_once('views/ppid/form.php');


 } ?>





<?php 

require_once('templates/footer_web.php');

?>