<?php $this->load->view('home/layout/head'); ?>

<ul>
    <li> <a href="<?= home_url() ?>">Home</a> </li>
    <li> <a href="<?= home_url() ?>visimisi">Visi & Misi</a> </li>
    <li> <a href="<?= home_url() ?>profil">Profil</a> </li>
    <li> <a href="<?= home_url() ?>contact">Contact</a> </li>
    <li> <a href="<?= login_url() ?>">Login</a> </li>
</ul>

<?php $this->load->view('home/layout/foot'); ?>