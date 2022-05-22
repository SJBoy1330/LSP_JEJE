
<?php include 'header.php'; ?>
<?php include 'sidemenu.php'; ?>
<?php

echo alert_show($this->session->flashdata('judul'), $this->session->flashdata('message'), $this->session->flashdata('icon'), $this->session->flashdata('image'));

?>

<?php echo $content; ?>
<?php include 'footer.php'; ?>
