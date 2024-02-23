<?php
  function FormContactUS() {
    return "
      <div class='form-group'>
        <label for='email'>Email</label>
        <input type='text' class='form-control' name='email' aria-describedby='email' placeholder='Masukan Email'>
      </div>

      <div class='form-group'>
        <label for='nama'>Nama</label>
        <input type='text' class='form-control' name='nama' placeholder='Masukan Nama'>
        <small id='emailHelp' class='form-text text-muted'>*Menggunakan Nama Lengkap</small>
      </div>

      <div class='form-group'>
        <label for='chat'>Pesan</label>
        <input type='text' class='form-control' name='chat' placeholder='Isi Disini'>
        <small id='emailHelp' class='form-text text-muted'>*Isi Pesan yang ingin disampaikan</small>
      </div>

      <div class='form-check'>
        <input type='checkbox' class='form-check-input' id='exampleCheck1'>
        <label class='form-check-label' for='exampleCheck1'>Check me out</label>
      </div>
  
      <button type='submit' name='save' value='Save'  class='btn btn-primary'>Submit</button>
    ";
  };
?>