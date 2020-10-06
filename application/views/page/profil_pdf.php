<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Profil Personel</title>

    <style type="text/css">
        table td {
            font-size: small;
        }

        table,
        th,
        td {
            border: 2px solid black;
            border-collapse: collapse;
            padding: 5px

        }

        th {
            color: white;
        }

        /* img{
            padding-left: 1.8em;
            width: 100px;
            
        } */
        p.indent{ padding-left: 1.8em }
       
    </style>
</head><body>
<!-- <p style="text-align: left"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;STAF SUMBER DAYA MANUSIA POLRI<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BIRO PEMBINAAN KARIER</b></p>
<hr width="50%" align ="left">
<br>
<br>
<?php foreach ($personel as $personel) : ?>
    <img width="120px" src="assets/img/profil/<?= $personel['gambar']?>" alt="foto">
<?php endforeach; ?>
<br>
<br>

<p class="indent"><b>NAMA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b>&nbsp;&nbsp;<?= $personel['nama']?></p>
<p class="indent"><b>NRP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b>&nbsp;&nbsp;<?= $personel['nrp']?></p>
<p class="indent"><b>PKT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b>&nbsp;&nbsp;<?= $personel['pkt']?></p>
<p class="indent"><b>JABATAN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b>&nbsp;&nbsp;<?= $personel['jabatan']?></p>
<p class="indent"><b>TEMPAT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b>&nbsp;&nbsp;<?= $personel['tempat'];?></p> 
<p class="indent"><b>TGL.LAHIR&nbsp;&nbsp;: </b>&nbsp;&nbsp;<?=date("d-m-Y", strtotime($personel['tgl_lahir']));?></p> 
<p class="indent"><b>AGAMA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b>&nbsp;&nbsp;<?= $personel['agama']?></p> 
<p class="indent"><b>SUKU&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b>&nbsp;&nbsp;<?= $personel['suku']?></p> 
<p class="indent"><b>TMT.JAB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b>&nbsp;&nbsp;<?=date("d-m-Y", strtotime($personel['tmt_jab']));?></p> 
<p class="indent"style="text-transform:uppercase"><b>INSTANSI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b>&nbsp;&nbsp;<?= $personel['nama_instansi']?></p>  -->


<!-- COBA TABEL BARU BISMILLAH -->
<table style="text-transform:uppercase; margin-left:auto;margin-right:auto;" width="80%">
   <tr>
      <td  style="background-color: #C0C0C0; text-align:center;"><img width="50px" src="assets/img/poldaa.png"><br><b>STAF SUMBER DAYA MANUSIA POLRI<br>BIRO PEMBINAAN KARIER</b></td>
    <th>
    <img width="100px" class="foto m-auto" style="border: 3px solid #DCDCDC;" src="assets/img/profil/<?= $personel['gambar']?>" alt="foto"></th>
  </tr>
   <tr>
   
    <td colspan="2" style="background-color:#C0C0C0;"><b>NAMA</b></td>
  
  </tr>
  <tr>
   
    <td colspan="2" style="text-transform:normal;">&nbsp;&nbsp;<?= $personel['nama']?></td>
  
  </tr>
  <tr>
   
    <td colspan="2" style="background-color:#C0C0C0;"><b>NRP</b></td>
  
  </tr>
   <tr>
   
    <td colspan="2">&nbsp;&nbsp;<?= $personel['nrp']?></td>
  
  </tr>
   <tr>
   
    <td colspan="2" style="background-color: #C0C0C0;"><b>PKT</b></td>
  
  </tr>
   <tr>
   
    <td colspan="2">&nbsp;&nbsp;<?= $personel['pkt']?></td>
  
  </tr>
   <tr>
   
    <td colspan="2" style="background-color: #C0C0C0;"><b>JABATAN</b></td>
  
  </tr>
   <tr>
   
    <td colspan="2">&nbsp;&nbsp;<?= $personel['jabatan']?></td>
    </tr>
     <tr>
   
    <td colspan="2" style="background-color: #C0C0C0;"><b>TEMPAT</b></td>
  
  </tr>
   <tr>
   
    <td colspan="2">&nbsp;&nbsp;<?= $personel['tempat']?></td>
  
  </tr>
   <tr>
   
    <td colspan="2" style="background-color:#C0C0C0;"><b>TGL.LAHIR</b></td>
  
  </tr>
   <tr>
   
    <td colspan="2">&nbsp;&nbsp;<?=date("d-m-Y", strtotime($personel['tgl_lahir']));?></td>
  
  </tr> 
  <tr>
   
    <td colspan="2" style="background-color: #C0C0C0;"><b>AGAMA</b></td>
  
  </tr>
   <tr>
   
    <td colspan="2">&nbsp;&nbsp;<?= $personel['agama']?></td>
  
  </tr>
   <tr>
   
    <td colspan="2" style="background-color: #C0C0C0;"><b>SUKU</b></td>
  
  </tr>
   <tr>
   
    <td colspan="2">&nbsp;&nbsp;<?= $personel['suku']?></td>
  
  </tr>
   <tr>
   
    <td colspan="2" style="background-color: #C0C0C0;"><b>TMT.JAB</b></td>
  
  </tr>
   <tr>
   
    <td colspan="2">&nbsp;&nbsp;<?=date("d-m-Y", strtotime($personel['tmt_jab']));?></td>
  
  </tr>
   <tr>
   
    <td colspan="2" style="background-color: #C0C0C0;"><b>INSTANSI</b></td>
  
  </tr>
   <tr>
   
    <td colspan="2">&nbsp;&nbsp;<?= $personel['nama_instansi']?></td>
  
  </tr>
</table>
</body></html>
