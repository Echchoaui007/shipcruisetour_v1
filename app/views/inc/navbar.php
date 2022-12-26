<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
  <a class="navbar-brand" href="<?php echo URLROOT; ?>"><?php echo SITENAME; ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo URLROOT; ?>">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo URLROOT; ?>/pages/gallery">Gallery</a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <?php if (isset($_SESSION['user_id'])) : ?>
        <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    User
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    
    <a class="dropdown-item" href="#">dashboard</a>
    <a class="dropdown-item" href="#">logout</a>
    <?php else : ?>
    <a class="dropdown-item" href="<?php echo URLROOT; ?>/users/register">Register</a>
    <a class="dropdown-item" href="<?php echo URLROOT; ?>/users/login">Login</a>
    <?php endif; ?>
  </div>
</div>
      
        
    </ul>
  </div>
</nav>