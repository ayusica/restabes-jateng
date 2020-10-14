<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="<?= filter_var(base_url(), FILTER_DEFAULT) ?>assets/js/jquery-3.4.1.min.js"></script>
<script src="<?= filter_var(base_url(), FILTER_DEFAULT) ?>assets/js/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
<!-- start copy right -->
<!-- Footer -->
<footer class="sticky-footer mt-3">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Sumda-Polrestabes Semarang &copy; <?= filter_var(date("Y"), FILTER_DEFAULT); ?> Dev.Informatics-UndipTech</span>
    </div>
  </div>
</footer>

<script type="text/javascript">
  function lihat() {
    var password = document.getElementById("password"),
      button = document.getElementsByTagName("button")[0];

    if (button.textContent === "Lihat Password") {
      password.setAttribute("type", "text");
      button.textContent = "Sembunyikan";
    } else {
      password.setAttribute("type", "password");
      button.textContent = "Lihat Password";
    }
    return false;
  }
</script>
<!-- <a href="<?= base_url(); ?>" id="back-to-top" title="Back to top" style="">↑</a> -->
<!-- End of Footer -->

<!-- end copy right -->

</body>

</html>