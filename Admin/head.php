  <nav id="sidebar">
  <div class="sidebar-content">
    <div class="content-header justify-content-lg-center">
      <div>
        <span class="smini-visible fw-bold tracking-wide fs-lg">
          M<span class="text-primary">Y</span>
        </span>
        <a class="link-fx fw-bold tracking-wide mx-auto" href="javascript:void(0)">
          <span class="smini-hidden">
            <i class="fa fa-fire text-primary"></i>
            <span class="fs-4 text-dual"><?php echo conf('Name');?></span>
          </span>
        </a>
      </div>
      <div>
        <button type="button" class="btn btn-sm btn-alt-danger d-lg-none" data-toggle="layout" data-action="sidebar_close">
          <i class="fa fa-fw fa-times"></i>
        </button>
      </div>
    </div>
    <div class="js-sidebar-scroll">
      <div class="content-side content-side-user px-0 py-0">
        <div class="smini-visible-block animated fadeIn px-3">
          <img class="img-avatar img-avatar32" src="https://q1.qlogo.cn/g?b=qq&nk=<?=$_SESSION['adminQq']?>&s=100" alt="MoYi-Team">
        </div>
        <div class="smini-hidden text-center mx-auto">
          <a class="img-link" href="javascript:void(0)">
            <img class="img-avatar" src="https://q1.qlogo.cn/g?b=qq&nk=<?=$_SESSION['adminQq']?>&s=100" alt="MoYi=Team">
          </a>
          <ul class="list-inline mt-3 mb-0">
            <li class="list-inline-item">
              <a class="link-fx text-dual fs-sm fw-semibold text-uppercase" href="javascript:void(0)"><?=$_SESSION['adminUser']?></a>
            </li>
            <li class="list-inline-item">
              <a class="link-fx text-dual" data-toggle="layout" data-action="dark_mode_toggle" href="javascript:void(0)">
                <i class="fa fa-burn"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="link-fx text-dual" href="./login.php?logout">
                <i class="fa fa-sign-out-alt"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="content-side content-side-full">
        <ul class="nav-main">
          <li class="nav-main-item">
            <a class="nav-main-link" href="index.php">
              <i class="nav-main-link-icon fa fa-house-user"></i>
              <span class="nav-main-link-name"><b>后台首页</b></span>
            </a>
          </li>
          <?php if($adminData['adminRank']==1){?>
          <li class="nav-main-heading">Function</li>
          <li class="nav-main-item">
            <a class="nav-main-link" href="alist.php">
              <i class="nav-main-link-icon fa fa-align-left"></i>
              <span class="nav-main-link-name"><b>管理员管理</b></span>
            </a>
          </li>
          <li class="nav-main-item">
            <a class="nav-main-link" href="tlist.php">
              <i class="nav-main-link-icon fa fa-pencil-ruler"></i>
              <span class="nav-main-link-name"><b>成员管理</b></span>
            </a>
          </li>
          <?php } if($adminData['adminRank']==1 || $adminData['adminRank']==2 ){ ?>
          <li class="nav-main-item">
            <a class="nav-main-link" href="plist.php">
              <i class="nav-main-link-icon fa fa-layer-group"></i>
              <span class="nav-main-link-name"><b>项目管理</b></span>
            </a>
          </li>
          <li class="nav-main-heading">Build</li>
          <?php } if($adminData['adminRank']==1){ ?>
            <li class="nav-main-item">
            <a class="nav-main-link" href="set.php">
              <i class="nav-main-link-icon fa fa-cogs"></i>
              <span class="nav-main-link-name"><b>网站配置</b></span>
            </a>
            </li>
            <li class="nav-main-item">
            <a class="nav-main-link" href="module.php">
              <i class="nav-main-link-icon fa fa-box"></i>
              <span class="nav-main-link-name"><b>模块配置</b></span>
            </a>
            </li>
            <li class="nav-main-item">
            <a class="nav-main-link" href="smtp.php">
              <i class="nav-main-link-icon fa fa-envelope-open"></i>
              <span class="nav-main-link-name"><b>邮箱配置</b></span>
            </a>
            </li>
            <li class="nav-main-item">
            <a class="nav-main-link" href="expand.php">
              <i class="nav-main-link-icon fa fa-bomb"></i>
              <span class="nav-main-link-name"><b>拓展配置</b></span>
            </a>
            </li>
            <li class="nav-main-heading">Expand</li>
            <li class="nav-main-item">
              <a class="nav-main-link" href="team_approval.php">
                <i class="nav-main-link-icon fa fa-user-plus"></i>
                <span class="nav-main-link-name"><b>成员审批</b></span>
              </a>
            </li>
            <li class="nav-main-item">
              <a class="nav-main-link" href="system_log.php">
                <i class="nav-main-link-icon fa fa-bar-chart"></i>
                <span class="nav-main-link-name"><b>系统日志</b></span>
              </a>
            </li>
            <?php } if($adminData['adminRank']==1){ ?>
            <li class="nav-main-item">
              <a class="nav-main-link" href="update.php">
                <i class="nav-main-link-icon fa fa-globe-americas"></i>
                <span class="nav-main-link-name"><b>系统更新</b></span>
              </a>
            </li>
            <?php } ?>
            <li class="nav-main-item">
              <a class="nav-main-link" href="http://www.xiaomaw.cn">
                <i class="nav-main-link-icon fa fa-user-lock"></i>
                <span class="nav-main-link-name"><b>更多下载</b></span>
              </a>
            </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
  <header id="page-header">
  <div class="content-header">
    <div class="space-x-1">
      <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout" data-action="sidebar_toggle">
        <i class="fa fa-fw fa-bars"></i>
      </button>
      <div class="dropdown d-inline-block">
        <button type="button" class="btn btn-sm btn-alt-secondary" id="page-header-themes-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-fw fa-wrench"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-lg p-0" aria-labelledby="page-header-themes-dropdown">
          <div class="p-3 bg-body-light rounded-top">
            <h5 class="h6 text-center mb-0">
              界面颜色
            </h5>
          </div>
          <div class="p-3">
            <div class="row g-0 text-center">
              <div class="col-2">
                <a class="text-default" data-toggle="theme" data-theme="default" href="javascript:void(0)">
                  <i class="fa fa-2x fa-circle"></i>
                </a>
              </div>
              <div class="col-2">
                <a class="text-elegance" data-toggle="theme" data-theme="../assets/admin/css/themes/elegance.min-5.5.css" href="javascript:void(0)">
                  <i class="fa fa-2x fa-circle"></i>
                </a>
              </div>
              <div class="col-2">
                <a class="text-pulse" data-toggle="theme" data-theme="../assets/admin/css/themes/pulse.min-5.5.css" href="javascript:void(0)">
                  <i class="fa fa-2x fa-circle"></i>
                </a>
              </div>
              <div class="col-2">
                <a class="text-flat" data-toggle="theme" data-theme="../assets/admin/css/themes/flat.min-5.5.css" href="javascript:void(0)">
                  <i class="fa fa-2x fa-circle"></i>
                </a>
              </div>
              <div class="col-2">
                <a class="text-corporate" data-toggle="theme" data-theme="../assets/admin/css/themes/corporate.min-5.5.css" href="javascript:void(0)">
                  <i class="fa fa-2x fa-circle"></i>
                </a>
              </div>
              <div class="col-2">
                <a class="text-earth" data-toggle="theme" data-theme="../assets/admin/css/themes/earth.min-5.5.css" href="javascript:void(0)">
                  <i class="fa fa-2x fa-circle"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="space-x-1">
      <div class="dropdown d-inline-block">
        <button type="button" class="btn btn-sm btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-user d-sm-none"></i>
          <span class="d-none d-sm-inline-block fw-semibold"><?=$_SESSION['adminUser']?></span>
          <i class="fa fa-angle-down opacity-50 ms-1"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end p-0" aria-labelledby="page-header-user-dropdown">
          <div class="px-2 py-3 bg-body-light rounded-top">
            <h5 class="h6 text-center mb-0">
              <?=$_SESSION['adminUser']?>
            </h5>
          </div>
          <div class="p-2">
            <a class="dropdown-item d-flex align-items-center justify-content-between space-x-1" href="edit_pwd.php">
              <span>修改密码</span>
              <i class="fa fa-fw fa-user opacity-25"></i>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item d-flex align-items-center justify-content-between space-x-1" href="set.php" data-toggle="layout" data-action="side_overlay_toggle">
              <span>网站配置</span>
              <i class="fa fa-fw fa-wrench opacity-25"></i>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item d-flex align-items-center justify-content-between space-x-1" href="./login.php?logout">
              <span>退出登入</span>
              <i class="fa fa-fw fa-sign-out-alt opacity-25"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="page-header-loader" class="overlay-header bg-primary">
    <div class="content-header">
      <div class="w-100 text-center">
        <i class="far fa-sun fa-spin text-white"></i>
      </div>
    </div>
  </div>
</header>