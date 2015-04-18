<html>
<head>
<link rel="stylesheet" type="text/css" href="../../styles.css">
<link rel="stylesheet" href="../../bootstrap.min.css">
<title>Update Pohon</title>
<link rel="icon" type="image/jpg" href="../../images/siklus.jpg">
</head>
<body background="../../images/siteBackground.jpg">

<div class="row" style="padding-top:50px;">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="well" align="center"\>
   <h1>Update Pohon</h1>
   <br/>
   <?php echo validation_errors(); ?>
   <?php echo form_open('verifypohon/index'); ?>
   <label for="nama_pohon">Nama Pohon &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label>
    <select name="nama_pohon">
        <?php echo "<td>". $id_pohon        ."</td><td>".' : '. form_dropdown('id_pohon',$isiID,set_value('id_pohon',$id_anggota)).br()."</td>"; ?></tr>
      </select>
      <?php echo "<td></td><td>". form_submit('mysubmit','Cari!'). "</td>";  ?>
     <label for="nama_pohon">Nama Pohon&nbsp&nbsp&nbsp&nbsp:</label>
     <input type="text" size="20" id="nama_pohon" name="nama_pohon"/>
     <br/>
     <br/>
     <label for="letak_pohon">Letak Pohon&nbsp&nbsp&nbsp&nbsp&nbsp:</label>
     <input type="text" size="20" id="letak_pohon" name="letak_pohon"/>
     <br/>
     <br/>
     <label for="berat_jenis">Berat Jenis&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp :</label>
     <input type="text" size="20" id="berat_jenis" name="berat_jenis"/>
     <br/>
     <br/>
      <label for="deskripsi">Deskripsi &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label>
     <input type="text" size="20" id="deskripsi" name="deskripsi"/>
     <br/>
     <br/>
     <label for="foto_pohon">Foto Pohon &nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
     <input type="file" id="foto_pohon" name="foto_pohon"/>
     <br/>
     <?php echo "<td></td><td>". form_submit('mysubmit','Submit!'). "</td>";  ?></tr></table>
   </form>
   </div>
   </div>
   </div>
   </div>
 </div>
 </body>
</html>
