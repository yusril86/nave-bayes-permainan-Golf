<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />


	<title>Proses Data Mining</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

</head>

<body>
<table class="table table-bordered">
<caption style="font-size: 15px;"></caption>
<form action="prosesprediksi.php" method="post">
    <tr>
        <th>Cuaca</th>
        <th>Temperatur</th>
        <th>Kelembapan</th>
        <th>Angin</th>
    </tr>
    <tr>
        <td>
        <select style="width: 100px;" name="cuaca">
              <option value="cerah">Cerah</option>
              <option value="mendung">Mendung</option>
              <option value="hujan">Hujan</option>
        </select>
        </td>
        <td>
         <select style="width: 100px;" name="temperatur">
              <option value="panas">Panas</option>
              <option value="sedang">Sedang</option>
              <option value="dingin">dingin</option>
         </select>
         </td>
          <td>
         <select style="width: 100px;" name="kelembapan">
              <option value="kelembapan_tinggi">Tinggi</option>
              <option value="kelembapan_normal">Normal</option>
              <!-- <option value="kelembapan_tidak">Tidak Ada</option> -->
         </select>
         </td>
         <td>
         <select style="width: 100px;" name="angin">
              <option value="angin_besar">Besar</option>
              <option value="angin_kecil">Kecil</option>
              <!-- <option value="angin_tidak">Tidak ada</option> -->
         </select>
         </td>
    </tr>
    </tr>
        <td colspan="4">
					<input class="btn btn-primary btn-lg btn-block" type="submit" name="submit" value="Proses" />
				</td>
    </tr>
		<tr>
			<td colspan="4">
				<a class="btn btn-default btn-lg btn-block" style="float: left; font-size: 20px;" href="index.php">Reset </a>
			</td>
		</tr>
</form>
</table>

</body>
</html>
