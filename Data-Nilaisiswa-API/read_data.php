<?php
require_once('connection.php');
if($_SERVER['REQUEST_METHOD']=='GET') {

	$qeuery_selectdata = "SELECT tbl_siswa.nis, tbl_siswa.nama_siswa, tbl_siswa.jurusan, tbl_datanilaiujian.mata_pelajaran, tbl_datanilaiujian.pengampu, tbl_detail_datanilai.kategori_pelajaran, tbl_detail_datanilai.nilai_ujian, tbl_detail_datanilai.ujian_test, tbl_detail_datanilai.nilai_sikap FROM tbl_siswa JOIN tbl_datanilaiujian ON tbl_datanilaiujian.kode_matapelajaran=tbl_siswa.kode_matapelajaran JOIN tbl_detail_datanilai ON tbl_detail_datanilai.kode_detailnilai=tbl_datanilaiujian.kode_detailnilai;";

  $sql = $qeuery_selectdata;
  $res = mysqli_query($koneksikan, $sql);


  if ($res) {
      $result = array();
      while($row = mysqli_fetch_array($res)){
        array_push
        (
          $result, 
          array
          (
            'nis'=>$row[0], 
            'nama_siswa'=>$row[1], 
            'jurusan'=>$row[2], 
            'mata_pelajaran'=>$row[3], 
            'pengampu'=>$row[4], 
            'kategori_pelajaran'=>$row[5], 
            'nilai_ujian'=>$row[6], 
            'ujian_test'=>$row[7], 
            'nilai_sikap'=>$row[8]
          )
        );
      }
      echo json_encode(array("value"=>1,"result"=>$result,"respon"=>"Horay!! data tersedia dalam database."));
  } else {
      echo json_encode(array("value"=>0,"result"=>$result,"respon"=>"Sorry!! data tidak bisa ditampilkan dari dalam database."));
  }

  mysqli_close($koneksikan);
}