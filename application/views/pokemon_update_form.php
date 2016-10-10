<?php
/* Buat form untuk update dengan metode post, yang akan dikirim ke pokemon/update_action.
 * Isi setiap input dengan data lama, sehingga user hanya perlu mengubah data yang perlu diubah saja
 */
?>
<form name="frm_update_pokemon" method='POST' action="<?=site_url('pokemon/update_action')?>">
 <input type="text" name="nama" value="<?php echo $result['nama']; ?>"><br>
  <input type="text" name="tipe" value ="<?php echo $result['tipe']; ?>"><br>
  <button name="edit"> Update Pokemon </button>
</form>
