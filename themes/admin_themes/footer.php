<script>
    var hostUrl = "<?= base_url(); ?>assets/";
    var BASE_URL = baseUrl = '<?= base_url(); ?>';
</script>
<script src="<?= base_url(); ?>assets/plugins/global/plugins.bundle.js"></script>
<script src="<?= base_url(); ?>assets/js/scripts.bundle.js"></script>
<script src="<?= base_url(); ?>assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
<script src="<?= base_url(); ?>assets/plugins/custom/datatables/datatables.bundle.js"></script>
<script src="<?= base_url(); ?>assets/js/custom/widgets.js"></script>
<script src="<?= base_url(); ?>assets/js/custom/apps/chat/chat.js"></script>
<script src="<?= base_url(); ?>assets/js/custom/modals/users-search.js"></script>
<script src="<?= base_url(); ?>assets/js/page/function.js"></script>


<script src="<?= base_url('assets/js/alert/sweetalert2.all.min.js') ?>"></script>
<script src="<?= base_url('assets/js/alert/scriptalert.js') ?>"></script>

<?php

if (isset($js_add) && is_array($js_add)) {
    foreach ($js_add as $js) {
        echo $js;
    }
} else {
    echo (isset($js_add) && ($js_add != "") ? $js_add : "");
}

?>
</body>

</html>