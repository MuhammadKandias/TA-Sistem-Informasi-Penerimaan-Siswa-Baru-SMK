<?php
include('koneksi.php');
require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$query = mysqli_query($koneksi, "select * from data_siswa");
$html = '<center><h3>Daftar Siswa Pendaftar</h3></center><hr/><br/>';
$html .= '<table border="1" width="100%">
	<tr>
	<th>No</th>
	<th>ID</th>
	<th>Jenis Pendaftaran</th>
	<th>Tanggal Masuk Sekolah</th>
	<th>NIS</th>
	<th>Nomer Peserta Ujian</th>
	<th>Pernah PAUD</th>
	<th>Pernah TK</th>
	<th>SKHUN/th>
	<th>Ijazah</th>
	<th>Hobi</th>
	<th>Cita-Cita</th>
	<th>Nama</th>
	<th>Jenis Kelamin</th>
	<th>NISN</th>
	<th>NIK</th>
	<th>Tempat Lahir</th>
	<th>Tanggal Lahir</th>
	<th>Agama</th>
	<th>Berkebutuhan Khusus</th>
	<th>Alamat</th>
	<th>RT</th>
	<th>RW</th>
	<th>Dusun</th>
	<th>Desa</th>
	<th>Kecamatan</th>
	<th>Kode Pos</th>
	<th>Tempat Tinggal</th>
	<th>Transportasi</th>
	<th>HP</th>
	<th>Telp</th>
	<th>Email</th>
	<th>Penerima KPS</th>
	<th>No. KPS</th>
	<th>Kewarganegaraan</th>
	<th>Nama Negara</th>
	';
$no=1;
while ($row = mysqli_fetch_array($query)) {
	$html .= "<tr>
	<td>".$no."</td>
	<td>".$row['id_data']."</td>
	<td>".$row['jenis_pendaftaran']."</td>
	<td>".$row['tanggal_masuk_sekolah']."</td>
	<td>".$row['nis']."</td>
	<td>".$row['nomor_peserta_ujian']."</td>
	<td>".$row['pernah_paud']."</td>
	<td>".$row['pernah_tk']."</td>
	<td>".$row['skhun']."</td>
	<td>".$row['ijazah']."</td>
	<td>".$row['hobi']."</td>
	<td>".$row['citacita']."</td>
	<td>".$row['nama']."</td>
	<td>".$row['jenis_kelamin']."</td>
	<td>".$row['nisn']."</td>
	<td>".$row['nik']."</td>
	<td>".$row['temapt_lahir']."</td>
	<td>".$row['tanggal_lahir']."</td>
	<td>".$row['agama']."</td>
	<td>".$row['berkebutuhan_khusus']."</td>
	<td>".$row['alamat']."</td>
	<td>".$row['rt']."</td>
	<td>".$row['rw']."</td>
	<td>".$row['dusun']."</td>
	<td>".$row['desa']."</td>
	<td>".$row['kecamatan']."</td>
	<td>".$row['kode_pos']."</td>
	<td>".$row['tempat_tinggal']."</td>
	<td>".$row['transportasi']."</td>
	<td>".$row['hp']."</td>
	<td>".$row['email']."</td>
	<td>".$row['telp']."</td>
	<td>".$row['penerima_kps']."</td>
	<td>".$row['no_kps']."</td>
	<td>".$row['kewarganegaraan']."</td>
	<td>".$row['nama_negara']."</td>
	</tr>";
	$no++;
}
$html .= "</html>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A2', 'landscape');
// Rendering dari HTML ke PDF
$dompdf->render();
// Melakukan output file PDF
$dompdf->stream('laporan_data_siswa.pdf');
?>