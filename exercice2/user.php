<?php session_start();?>
<p><?= 'Prenom : '.($_SESSION['firstname']); ?></p>
<p><?= 'Nom : '.($_SESSION['name']); ?></p>
<p><?= 'Age : '.($_SESSION['age']); ?></p>
