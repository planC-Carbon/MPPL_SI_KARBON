<!-- File products_view.php -->
<html>
  <head>
    <title>CRUD dengan CodeIgniter</title>
  </head>
  <body>
      <!-- Kalau ada datanya, maka kita akan tampilkan dalam table -->
      <h1>List Anggota</h1>
      <table border="1">
        <thead>
          <tr>
            <th>No. </th>
            <th>Nomor Induk Anggota</th>
            <th>Nama</th>
            <th>Email</th>
          </tr>
        </thead>
        <tbody>
          <?php
            //Kita akan melakukan looping sesuai dengan data yang dimiliki
            $i = 0; //nantinya akan digunakan untuk pengisian Nomor
            foreach ($listUser->result() as $row) {
          ?>
          <tr>
            <td><?= $i ?></td>
            <td><?= $row->nia ?></td> <!-- karena berbentuk objek, maka kita menggunakan panah (->) untuk menunjuk field yang ada di database -->
            <td><?= $row->nama ?></td>
            <td><?= $row->email ?></td>
            
          </tr>
          <?php
            }
          ?>
        </tbody>
      </table>
    <?php
      }
    ?>
  </body>
</html>