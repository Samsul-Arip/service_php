<?php
require_once('koneksi.php');
if($_SERVER['REQUEST_METHOD']=='POST') {

  $search = $_POST['nama'];
  $sql = "SELECT * FROM tb_karyawan where nama LIKE '%$search%' ORDER BY nama ASC";
  $res = mysqli_query($con,$sql);
  $result = array();
  while($row = mysqli_fetch_array($res)){
    array_push($result, array('npm'=>$row[0], 'nama'=>$row[1], 'alamat'=>$row[2], 'jenis_kelamin'=>$row[3]));
  }
  echo json_encode(array("value"=>1,"result"=>$result));
  mysqli_close($con);
}