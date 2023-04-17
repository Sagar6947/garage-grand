<script src="<?= base_url() ?>assets/admin/vendors/jquery/jquery-3.3.1.min.js"></script>
<script src="<?= base_url() ?>assets/admin/vendors/jquery-ui/jquery-ui.min.js"></script>
<script src="<?= base_url() ?>assets/admin/vendors/moment/moment.js"></script>
<script src="<?= base_url() ?>assets/admin/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>assets/admin/vendors/slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?= base_url() ?>assets/admin/js/app.js"></script>

<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(200, 0).slideUp(200, function() {
            $(this).remove();
        });
    }, 4000);
</script>