<!-- topbar.php -->

<nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent   ">
  <div class="container-fluid">
    <div class="navbar-wrapper">
      <div class="navbar-toggle d-inline">
        <button type="button" class="navbar-toggler">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <p class="navbar-brand"><?php echo isset($_SESSION['system']['name']) ? $_SESSION['system']['name'] : '' ?></p>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-bar navbar-kebab"></span>
      <span class="navbar-toggler-bar navbar-kebab"></span>
      <span class="navbar-toggler-bar navbar-kebab"></span>
    </button>
    <div class="collapse navbar-collapse" id="navigation">
      <ul class="navbar-nav ml-auto ">
        <p style="float: right; text-align: right; width: 100%; margin-top: 6%;"><?php echo $_SESSION['login_name'] ?></p>
        <li class="dropdown nav-item">
          <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false">
            <div class="photo">
              <img src="panel/assets/img/anime3.png">
            </div> 
            <b class="caret d-none d-lg-block d-xl-block"></b>
            <p class="d-lg-none">
              Logout
            </p>
          </a>
          <ul class="dropdown-menu dropdown-navbar">
            <li class="nav-link">
              <a href="javascript:void(0)" class="nav-item dropdown-item" id="manage_my_account">Manage Account</a>
            </li>
            <div class="dropdown-divider"></div>
            <li class="nav-link">
              <a href="ajax.php?action=logout" class="nav-item dropdown-item">Logout</a>
            </li>
          </ul>
        </li>
        <li class="separator d-lg-none"></li>
      </ul>
    </div>
  </div>
</nav>

<script>
  $('#manage_my_account').click(function(){
    uni_modal("Manage Account","manage_user.php?id=<?php echo $_SESSION['login_id'] ?>&mtype=own")
  })
</script>

