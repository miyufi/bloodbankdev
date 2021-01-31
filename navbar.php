<!-- navbar.php -->


<nav class="sidebar">
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li id="home">
        <a href="index.php?page=home" class="nav-item nav-home">
          <i class="tim-icons icon-bank"></i>
          <p>Home</p>
        </a>
      </li>
      <?php if($_SESSION['login_type'] == 1 || $_SESSION['login_type'] == 2): ?>
      <li id="donors">
        <a href="index.php?page=donors" class="nav-item nav-donors">
          <i class="tim-icons icon-satisfied"></i>
          <p>Donors</p>
        </a>
      </li>
      <li id="donations">
        <a href="index.php?page=donations" class="nav-item nav-donations">
          <i class="tim-icons icon-heart-2"></i>
          <p>Blood Donations</p>
        </a>
      </li>
      <li id="requests">
        <a href="index.php?page=requests" class="nav-item nav-requests">
          <i class="tim-icons icon-bell-55"></i>
          <p>Requests</p>
        </a>
      </li>
      <li id="handedovers">
        <a href="index.php?page=handedovers" class="nav-item nav-handedovers">
          <i class="tim-icons icon-single-02"></i>
          <p>Handed Over</p>
        </a>
      </li>
      <?php endif; ?>
      <?php if($_SESSION['login_type'] == 1): ?>
      <li id="users">
        <a href="index.php?page=users" class="nav-item nav-users">
          <i class="tim-icons icon-badge"></i>
          <p>Users</p>
        </a>
      </li>
      <?php endif; ?>
    </ul>
  </div>
</nav>

<script>
  $('.nav_collapse').click(function(){
    console.log($(this).attr('href'))
    $($(this).attr('href')).collapse()
  })
  $('#<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>
