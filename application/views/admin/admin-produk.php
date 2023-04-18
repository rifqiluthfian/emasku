<html>
    <head>
        <title>Upload Gambar</title>
    </head>
    <form method="post" action="<?php echo base_url()?>tambahProduk" enctype="multipart/form-data">
    <table>
            <tr>
              <td>Nama Produk</td>
              <td>Harga Produk</td>
              <td>Foto Produk</td>
            </tr>
            <tr>
              <input hidden type="text" name="id" placeholder="Nama Produk" value=" ">
              <td><input type="text" name="nama_produk" placeholder="Nama Produk"></td>
              <td><input type="text" name="harga" placeholder="Harga Produk"></td>
              <td><input type="file" name="foto" placeholder="Foto Produk"></td>
            </tr>
            <tr>
            <td><input type="submit" name="kirim" id="kirim" value="simpan"></td>
</tr>
                     
    </table>
</form>

</html>