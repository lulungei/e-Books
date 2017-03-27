<header>
<div class="dropdown">
  <button class="dropbtn">Account</button>
  <div class="dropdown-content">
    <a href="logout.php">Logout</a>
  </div>
</div>
<div class="dropdown">
  <button class="dropbtn">Cart</button>
  <div class="dropdown-content">
    <a href="#">Show contents</a>
  </div>
</div>
</header>
<?php if (isset($_GET['msg'])) {?>
<script>
    alert("<?= htmlentities($_GET[msg]) ?>");
</script>

<?php } ?>