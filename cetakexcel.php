<?php
include('koneksi.php');
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet=new Spreadsheet();
$sheet=$spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'No');
$sheet->setCellValue('B1', 'No.Peserta Ujian Nasional');
$sheet->setCellValue('C1', 'Tahun Kelulusan');
$sheet->setCellValue('D1', 'Nama Lengkap');
$sheet->setCellValue('E1', 'Usia');
$sheet->setCellValue('F1', 'Tempat Lahir');
$sheet->setCellValue('G1', 'Tanggal Lahir');
$sheet->setCellValue('H1', 'Jenis Kelamin');
$sheet->setCellValue('I1', 'Alamat');
$sheet->setCellValue('J1', 'Asal Sekolah');
$sheet->setCellValue('K1', 'Nomor HP');
$sheet->setCellValue('L1', 'Nama Orang Tua/Wali');
$sheet->setCellValue('M1', 'Pekerjaan');
$sheet->setCellValue('N1', 'Alamat Orang Tua');
$sheet->setCellValue('O1', 'Nomor HP Orang Tua');
$sheet->setCellValue('P1', 'Jurusan Yang Dipilih');

$query=mysqli_query($koneksi, "select * from formulir");
$i=2;
$no=1;
while ($row=mysqli_fetch_array($query)) {
	$sheet->setCellValue('A'.$i, $no++);
	$sheet->setCellValue('B'.$i, $row['no_peserta_ujian_nasional']);
	$sheet->setCellValue('C'.$i, $row['tahun_kelulusan']);
	$sheet->setCellValue('D'.$i, $row['nama_lengkap']);
	$sheet->setCellValue('E'.$i, $row['usia']);
	$sheet->setCellValue('F'.$i, $row['tempat_lahir']);
	$sheet->setCellValue('G'.$i, $row['tanggal_lahir']);
	$sheet->setCellValue('H'.$i, $row['jenis_kelamin']);
	$sheet->setCellValue('I'.$i, $row['alamat_rumah']);
	$sheet->setCellValue('J'.$i, $row['asal_sekolah']);
	$sheet->setCellValue('K'.$i, $row['no_hp']);
	$sheet->setCellValue('L'.$i, $row['nama_orang_tua_wali']);
	$sheet->setCellValue('M'.$i, $row['pekerjaan']);
	$sheet->setCellValue('N'.$i, $row['alamat_rumah_ortu']);
	$sheet->setCellValue('O'.$i, $row['no_hp_ortu']);
	$sheet->setCellValue('P'.$i, $row['jurusan']);
	
	$i++;
}

$styleArray = [
			'borders' => [
				'allBorders' => [
					'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
				],
			],
		];
$i=$i-1;
$sheet->getStyle('A1:AJ'.$i)->applyFromArray($styleArray);

$writer = new Xlsx($spreadsheet);
$writer->save('Report Data Pendaftar.xlsx');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<br><br><br><center><h1>Berhasil Simpan Data</h1></center>
</body>
</html>