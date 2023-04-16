<?php
/**
 * Program memanfaatkan Program 10.2 untuk membuat form inputan sederhana.
 **/
// include file class Form
include 'form.php';

// membuat objek dari class Form
$form = new Form('submit.php', 'Submit Form');

// menambahkan field pada form
$form->addField('nama', 'Nama');
$form->addField('alamat', 'Alamat');
$form->addField('telepon', 'Telepon');

// menampilkan form
$form->displayForm();

?>