<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="/themes/backend/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="/themes/backend/plugins/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
<script src="/themes/backend/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="/themes/backend/plugins/js-cookie/js.cookie.js"></script>
<script src="/themes/backend/js/theme/default.min.js"></script>
<script src="/themes/backend/js/apps.min.js"></script>
<script src="/themes/backend/plugins/sparkline/jquery.sparkline.js"></script>
<script src="/themes/backend/plugins/jquery-knob/js/jquery.knob.js"></script>
<script src="/themes/backend/js/demo/page-with-two-sidebar.demo.min.js"></script>
@stack('js')
<script>
$(document).ready(function() {
  App.init();
  @stack('init')
});
</script>
