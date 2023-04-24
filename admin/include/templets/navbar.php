<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="#"><?php echo lang('HOME_ADMIN') ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#app-nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="app-nav">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><?php echo lang('catagories') ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><?php echo lang('ITEM') ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><?php echo lang('MEMBER') ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><?php echo lang('STATISTICS') ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><?php echo lang('LOGS') ?></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Marwan
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Edit Profile</a></li>
            <li><a class="dropdown-item" href="#">settings</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">logout</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>