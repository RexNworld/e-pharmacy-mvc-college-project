</div>
<footer class="bg-white sticky-footer">
    <div class="container my-auto">
        <div class="text-center my-auto copyright"><span>Copyright © <?= SITENAME?> 2022</span></div>
    </div>
</footer>
<div>
    <a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i>
    </a>
</div>
<div id="snackbar"></div>
</body>
<!-- <script src="<?= URLROOT?>/public/assets/bootstrap/js/bootstrap.min.js"></script> -->
<script src="<?= URLROOT?>/public/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- <script src="/public/assets/js/Chart.bundle.min.js"></script> -->
<!-- <script src="/public/assets/js/bs-init.js"></script> -->
<script src="<?= URLROOT?>/public/assets/js/theme.js"></script>
<script type="text/javascript" charset="utf8" src="<?= URLROOT?>/public/assets/dataTables/js/jquery.dataTables.js">
</script>
<script>
function showSnackbar(sms) {

    var x = document.getElementById("snackbar");
    x.textContent = sms
    x.className = "show"

    setTimeout(function() {
        x.className = x.className.replace("show", "");
    }, 4000);
}
</script>
<script>
// if (window.history.replaceState) {
//     window.history.replaceState(null, null, window.location.href);
// }
</script>
</html>