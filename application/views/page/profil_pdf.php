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
    <img width="120px" src="assets/img/profil/<?= filter_var($personel['gambar'], FILTER_DEFAULT)?>" alt="foto">
<?php endforeach; ?>
<br>
<br>

<p class="indent"><b>NAMA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b>&nbsp;&nbsp;<?= filter_var($personel['nama'], FILTER_DEFAULT)?></p>
<p class="indent"><b>NRP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b>&nbsp;&nbsp;<?= filter_var($personel['nrp'], FILTER_DEFAULT)?></p>
<p class="indent"><b>PKT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b>&nbsp;&nbsp;<?= filter_var($personel['pkt'], FILTER_DEFAULT)?></p>
<p class="indent"><b>JABATAN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b>&nbsp;&nbsp;<?= filter_var($personel['jabatan'], FILTER_DEFAULT)?></p>
<p class="indent"><b>TEMPAT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b>&nbsp;&nbsp;<?= filter_var($personel['tempat'], FILTER_DEFAULT);?></p> 
<p class="indent"><b>TGL.LAHIR&nbsp;&nbsp;: </b>&nbsp;&nbsp;<?= filter_var(date("d-m-Y", strtotime($personel['tgl_lahir'])), FILTER_DEFAULT);?></p> 
<p class="indent"><b>AGAMA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b>&nbsp;&nbsp;<?= filter_var($personel['agama'], FILTER_DEFAULT)?></p> 
<p class="indent"><b>SUKU&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b>&nbsp;&nbsp;<?= filter_var($personel['suku'], FILTER_DEFAULT)?></p> 
<p class="indent"><b>TMT.JAB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b>&nbsp;&nbsp;<?= filter_var(date("d-m-Y", strtotime($personel['tmt_jab'])), FILTER_DEFAULT);?></p> 
<p class="indent"style="text-transform:uppercase"><b>INSTANSI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b>&nbsp;&nbsp;<?= filter_var($personel['nama_instansi'], FILTER_DEFAULT)?></p>  -->


<!-- COBA TABEL BARU BISMILLAH -->
<table style="text-transform:uppercase; margin-left:auto;margin-right:auto;" width="80%">
   <tr>
      <td  style="background-color: #C0C0C0; text-align:center;"><img width="50px" src="assets/img/poldaa.png"><br><b>STAF SUMBER DAYA MANUSIA POLRI<br>BIRO PEMBINAAN KARIER</b></td>
    <th>
    <img width="100px" class="foto m-auto" style="border: 3px solid #DCDCDC;" src="assets/img/profil/<?= filter_var($personel['gambar'], FILTER_DEFAULT)?>" alt="foto"></th>
  </tr>
   <tr>
   
    <td colspan="2" style="background-color:#C0C0C0;"><b>NAMA</b></td>
  
  </tr>
  <tr>
   
    <td colspan="2" style="text-transform:normal;">&nbsp;&nbsp;<?= filter_var($personel['nama'], FILTER_DEFAULT)?></td>
  
  </tr>
  <tr>
   
    <td colspan="2" style="background-color:#C0C0C0;"><b>NRP</b></td>
  
  </tr>
   <tr>
   
    <td colspan="2">&nbsp;&nbsp;<?= filter_var($personel['nrp'], FILTER_DEFAULT)?></td>
  
  </tr>
   <tr>
   
    <td colspan="2" style="background-color: #C0C0C0;"><b>PKT</b></td>
  
  </tr>
   <tr>
   
    <td colspan="2">&nbsp;&nbsp;<?= filter_var($personel['pkt'], FILTER_DEFAULT)?></td>
  
  </tr>
   <tr>
   
    <td colspan="2" style="background-color: #C0C0C0;"><b>JABATAN</b></td>
  
  </tr>
   <tr>
   
    <td colspan="2">&nbsp;&nbsp;<?= filter_var($personel['jabatan'], FILTER_DEFAULT)?></td>
    </tr>
     <tr>
   
    <td colspan="2" style="background-color: #C0C0C0;"><b>TEMPAT</b></td>
  
  </tr>
   <tr>
   
    <td colspan="2">&nbsp;&nbsp;<?= filter_var($personel['tempat'], FILTER_DEFAULT)?></td>
  
  </tr>
   <tr>
   
    <td colspan="2" style="background-color:#C0C0C0;"><b>TGL.LAHIR</b></td>
  
  </tr>
   <tr>
   
    <td colspan="2">&nbsp;&nbsp;<?= filter_var(date("d-m-Y", strtotime($personel['tgl_lahir'])), FILTER_DEFAULT);?></td>
  
  </tr> 
  <tr>
   
    <td colspan="2" style="background-color: #C0C0C0;"><b>AGAMA</b></td>
  
  </tr>
   <tr>
   
    <td colspan="2">&nbsp;&nbsp;<?= filter_var($personel['agama'], FILTER_DEFAULT)?></td>
  
  </tr>
   <tr>
   
    <td colspan="2" style="background-color: #C0C0C0;"><b>SUKU</b></td>
  
  </tr>
   <tr>
   
    <td colspan="2">&nbsp;&nbsp;<?= filter_var($personel['suku'], FILTER_DEFAULT)?></td>
  
  </tr>
   <tr>
   
    <td colspan="2" style="background-color: #C0C0C0;"><b>TMT.JAB</b></td>
  
  </tr>
   <tr>
   
    <td colspan="2">&nbsp;&nbsp;<?= filter_var(date("d-m-Y", strtotime($personel['tmt_jab'])), FILTER_DEFAULT);?></td>
  
  </tr>
   <tr>
   
    <td colspan="2" style="background-color: #C0C0C0;"><b>INSTANSI</b></td>
  
  </tr>
   <tr>
   
    <td colspan="2">&nbsp;&nbsp;<?= filter_var($personel['nama_instansi'], FILTER_DEFAULT)?></td>
  
  </tr>
</table>
</body></html>
