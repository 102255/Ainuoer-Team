<?php
include("./Common/Core_brain.php");
?>
<?php if (conf('Jump') == 1) {?>
<?php
$conf['qqjump']=1;
if(strpos($_SERVER['HTTP_USER_AGENT'], 'QQ/')||strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger')!==false && $conf['qqjump']==1){
echo '<!DOCTYPE html>
<html><head>
<meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0, user-scalable=no">
<title>Hello World</title>
<frameset><frame name="main" src="//cdn.oss.uaovo.com/jump/index.php" scrolling="auto" noresize></frameset></head>';
exit; }
?>
<?php }?>
<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, viewport-fit=cover, user-scalable=no minimal-ui">
    <title><?php echo conf('Name');?> - <?php echo conf('SiteName');?></title>
    <meta name="keywords" content="<?php echo conf('Keywords');?>">
    <meta name="description" content="<?php echo conf('Descriptison');?>">
    <link rel="shortcut icon" href="../assets/media/various/favicon.png">
    <link rel="stylesheet" id="css-main" href="../assets/css/oneui.min-5.6.css">
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-9HQDQJJYW7"></script>
    <script charset="UTF-8" id="LA_COLLECT" src="//sdk.51.la/js-sdk-pro.min.js"></script>
    <script>LA.init({id:"<?php echo conf_index('Statistics_Id');?>",ck:"<?php echo conf_index('Statistics_Id');?>"})</script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-9HQDQJJYW7');
    </script>
</head>
<body>
    <div id="page-container" class="page-header-fixed main-content-boxed">
        <header id="page-header">
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <a class="fw-bold fs-lg tracking-wider text-dual me-2">
                        <?php echo conf('Name');?><span class="fw-semibold"><?php echo conf('SiteName');?></span>
                    </a>
                </div>
                <div class="d-flex align-items-center">
                    <ul class="nav-main nav-main-horizontal nav-main-hover d-none d-lg-block me-2">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="javascript:void(0)">
                                <i class="nav-main-link-icon fa fa-home"></i>
                                <span class="nav-main-link-name"><strong>首页</strong></span>
                            </a>
                        </li>
                    </ul>
                    <button type="button" class="btn btn-alt-secondary me-1" data-toggle="layout" data-action="dark_mode_toggle">
                        <i class="far fa-moon"></i>
                    </button>
                    <div class="dropdown">
                        <button type="button" class="btn btn-alt-secondary me-2" id="sidebar-themes-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-brush"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end fs-sm smini-hide border-0" aria-labelledby="sidebar-themes-dropdown">
                            <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="default" href="#">
                                <span>Default</span>
                                <i class="fa fa-circle text-default"></i>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="assets/css/themes/amethyst.min-5.6.css" href="#">
                                <span>Amethyst</span>
                                <i class="fa fa-circle text-amethyst"></i>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="assets/css/themes/city.min-5.6.css" href="#">
                                <span>City</span>
                                <i class="fa fa-circle text-city"></i>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="assets/css/themes/flat.min-5.6.css" href="#">
                                <span>Flat</span>
                                <i class="fa fa-circle text-flat"></i>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="assets/css/themes/modern.min-5.6.css" href="#">
                                <span>Modern</span>
                                <i class="fa fa-circle text-modern"></i>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="assets/css/themes/smooth.min-5.6.css" href="#">
                                <span>Smooth</span>
                                <i class="fa fa-circle text-smooth"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="page-header-loader" class="overlay-header bg-primary-lighter">
                <div class="content-header">
                    <div class="w-100 text-center">
                        <i class="fa fa-fw fa-circle-notch fa-spin text-primary"></i>
                    </div>
                </div>
            </div>
        </header>
        <main id="main-container">
            <div id="one-hero" class="bg-body-extra-light bg-image" style="background-image: url('<?php echo conf('Index_Image');?>');">
                <div class="content content-full">
                    <div class="row g-0 justify-content-center text-center">
                        <div class="col-md-10 pt-7 pb-5">
                            <div class="d-inline-flex align-items-center space-x-1 fs-sm badge bg-success-light text-success mb-2 p-2">
                                <span>「 <span id="jinrishici-sentence"></span>」</span>
                            </div>
                            <h1 class="fs-2 fw-bold mb-3">
                                <?php echo conf('Name');?> - <?php echo conf('SiteName');?>
                            </h1>
                            <p class="fs-5 fw-medium text-muted mb-4 mx-xl-8">
                                <span class="text-body-color fw-semibold"><?php echo conf_index('Index_About') ?></span>
                            </p>
                            <a class="btn btn-alt-primary py-2 px-3 m-1" data-toggle="click-ripple" data-pjax href="javascript:;" onclick="moyi();">
                                <i class="fa fa-fw fa-arrow-down opacity-50 me-1"></i> Get Started
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="one-hero-after" class="bg-body-light">
                <div class="content">
                    <div class="row py-4 text-center" >
                        
                        <div class="col-6 col-md-4 col-xl-3 ">
                            <div class="item item-rounded my-3 item-1x mx-auto text-amethyst bg-amethyst-lighter push">
                                <i class="fa fa-fw fa-2x fa-boxes"></i>
                            </div>
                            <h4 class="mb-2"><?php echo conf_index('Index_Services_t1') ?></h4>
                            <p class="text-muted">
                                <?php echo conf_index('Index_Services_d1') ?>
                            </p>
                        </div>
                        
                                               <div class="col-6 col-md-4 col-xl-3 ">
                            <div class="item item-rounded my-3 item-1x mx-auto text-flat bg-flat-lighter push">
                             <i class="fa fa-fw fa-2x fa-laptop-code"></i>
                            </div>
                            <h4 class="mb-2"><?php echo conf_index('Index_Services_t2') ?></h4>
                            <p class="text-muted">
                                <?php echo conf_index('Index_Services_d2') ?>
                            </p>
                        </div>
                                               <div class="col-6 col-md-4 col-xl-3 ">
                            <div class="item item-rounded my-3 item-1x mx-auto text-smooth bg-smooth-lighter push">
                                <i class="fa fa-fw fa-2x fa-cloud"></i>
                            </div>
                            <h4 class="mb-2"><?php echo conf_index('Index_Services_t3') ?></h4>
                            <p class="text-muted">
                                <?php echo conf_index('Index_Services_d3') ?>
                            </p>
                        </div>
                                               <div class="col-6 col-md-4 col-xl-3 ">
                            <div class="item item-rounded my-3 item-1x mx-auto text-city bg-city-lighter push">
                                <i class="fa fa-fw fa-2x fa-user-lock"></i>
                            </div>
                            <h4 class="mb-2"><?php echo conf_index('Index_Services_t4') ?></h4>
                            <p class="text-muted">
                                <?php echo conf_index('Index_Services_d4') ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="moyi" class="bg-body-extra-light">
                <div class="content content-full">
                    <div class="row py-5">
                        <div class="order-md-0 col-md-0 text-center  align-items-center">
                            <div>
                                <h2 class="h1 fw-bold mb-2">
                                    Hitokoto
                                </h2>
                                <p class="fs-lg fw-medium text-muted mb-4" id="hitokoto_text">
                                    :D 获取中...
                                </p>
                                <h3 class="h4 fw-bold mb-2" id="hitokoto_from">
                                    :D 获取中...
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="one-versions" class="bg-body-light">
                <div class="content content-full">
                    <div class="py-5">
                        <div class="row mb-5">
                            <div class="col-md-0 text-center">
                                <h2 class="h1 fw-bold mb-2">
                                    作 <span class="fw-normal">品</span>
                                </h2>
                                <p class="fs-lg fw-medium text-muted mb-0">
                                    保持心脏震动 有人与你共鸣
                                </p>
                            </div>
                        </div>
                        <div class="content content-boxed text-center">
                            <div class="row">
                                <?php
                                $projects=$DB->query("SELECT * FROM nteam_project_list WHERE status=1 and is_show=1 and Audit_status=1 ORDER BY id");
                                while($project = $projects->fetch()){
                                ?>
                                <div class="col-lg-4">
                                    <a class="block block-rounded block-link-pop overflow-hidden" href="works.php?id=<?php echo $project['id'];?>">
                                        <img class="img-fluid" src="<?php echo $project['img'];?>" alt="<?php echo $project['name'];?>">
                                        <div class="block-content">
                                            <h4 class="mb-1">
                                                <?php echo $project['name'];?>
                                            </h4>
                                            <p class="fs-sm fw-medium mb-2">
                                                &bull; <strong><?php echo $project['intime'];?></strong> &bull;
                                            </p>
                                            <p class="fs-sm text-muted">
                                                <?php echo $project['sketch'];?>
                                            </p>
                                        </div>
                                    </a>
                                </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="one-features" class="bg-body-extra-light">
                    <div class="content content-full">
                        <div class="py-5">
                            <div class="row mb-5 text-center">
                                <div class="col-md-0">
                                    <h2 class="h1 fw-bold mb-2">
                                        成 <span class="fw-normal">员</span>
                                    </h2>
                                    <p class="fs-lg fw-medium text-muted mb-0">
                                        一群充满活力的の创作者.
                                    </p>
                                </div>
                            </div>
                            <div class="row items-push">
                                <?php
                                $teams=$DB->query("SELECT * FROM nteam_team_member WHERE Audit_status=1 and is_show=1 ORDER BY id");
                                while($team = $teams->fetch()){
                                $loca = 'http://wpa.qq.com/msgrd?v=3&uin=' . $team['qq'] . '&site=qq&menu=yes';
                                $http_agent = strtolower($_SERVER['HTTP_USER_AGENT']);
                                if(strpos($http_agent,'windows nt')){
                                $loca = 'tencent://ContactInfo/?subcmd=ViewInfo&puin=0&uin=' . $team['qq'];
                                }elseif(strpos($http_agent,'iphone')){
                                $loca = 'mqq://im/chat?chat_type=wpa&uin=' . $team['qq'] . '&version=1&src_type=web';
                                } elseif(strpos($http_agent,'android')){
                                $loca = 'mqq://card/show_pslcard?src_type=internal&version=1&uin=' . $team['qq'] . '&card_type=person&source=sharecard';
                                }
                                ?>
                                <div class="col-md-6 col-xl-3" style="margin-top: 20px;">
                                    <div class="block block-rounded text-center bg-image" style="background-image: url('<?php echo $team['teamimg'];?>');" href="javascript:void(0)">
                                        <div class="block-content block-content-full">
                                            <img class="img-avatar img-avatar-thumb" src="https://q1.qlogo.cn/g?b=qq&nk=<?php echo $team['qq'];?>&s=100" alt="<?php echo $team['name'];?>">
                                        </div>
                                        <div class="block-content block-content-full bg-primary-dark-op">
                                            <p class="fw-semibold text-white mb-0"><?php echo $team['name'];?></p>
                                            <p class="fs-sm text-white-75 mb-2">
                                                <?php echo $team['describe'];?>
                                            </p>
                                            <!--<br>-->
                                            <a class="btn btn-sm btn-alt-primary me-1 js-bs-tooltip-enabled" href="<?php echo $loca; ?>">
                                                <i class="fa fa-fw fa-user-plus"></i>
                                            </a>
                                            <a class="btn btn-sm btn-alt-primary me-1 js-bs-tooltip-enabled" href="mailto:<?php echo $team['qq'];?>@qq.com">
                                                <i class="fa fa-fw fa-comments"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div id="one-call-to-action" class="bg-body-light">
                        <div class="content content-full">
                            <div class="py-5 py-md-4 text-center">
                                <h2 class="fw-bold mb-2">
                                    成员查询 <i class="fa fa-fw fa-heart text-city"></i> 加入我们
                                </h2>
                                <p class="fs-lg fw-medium text-muted mb-4">
                                    谨防假冒成员，点击下方按钮即可查询，同时我们也期待您的加入！
                                </p>
                                <a class="btn btn-success py-2 px-3 m-1" data-toggle="click-ripple" href="javascript:;" id="Query">
                                    <i class="nav-main-link-icon fa fa-box"></i> 成员查询
                                </a>
                                <a class="btn btn-primary py-2 px-3 m-1" data-toggle="click-ripple" href="javascript:;" id="Join">
                                    <i class="nav-main-link-icon fa fa-rocket"></i> 加入我们
                                </a>
                            </div>
                        </div>
                    </div>
                    <footer class="bg-body-extra-light block-rounded" id="page-footer">
                        <div class="content content-full">
                            <div class="text-center">
                                <script id="LA-DATA-WIDGET" crossorigin="anonymous" charset="UTF-8" src="<?php echo conf_index('Statistics_Dm');?>"></script>
                            </div>
                            <div class="row g-0 fs-sm border-top pt-3">
                                <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-end">
                                    © 2023 - <span data-toggle="year-copy"></span><a class="fw-semibold text" href="//<?php echo conf('Url') ?>"> <?php echo conf('Name') ?> </a>
                                </div>
                                <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
                                    <a href="//beian.miit.gov.cn/" target="_blank" class="text fw-semibold"><span class="badge bg-success"><i class="fa fa-location-arrow me-1"></i><?php echo conf('ICP') ?></span></a>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </main>
    </div>
    <script src="../assets/js/oneui.app.min-5.6.js"></script>
    <script src="../assets/js/jump.js"></script>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/layer/layer.js"></script>
    <script src="https://sdk.jinrishici.com/v2/browser/jinrishici.js" charset="utf-8"></script>
    <script src="https://cdn.bootcss.com/sweetalert/2.1.0/sweetalert.min.js" ;=""></script>
    <?php if (conf('Index_Fang') == 1) {?>
    <script src="../assets/js/fang.js"></script>
    <?php }?>
    <script>
        swal('通知','<?php echo conf_index('Index_Tc');?>','success');
    </script>
    <script>
        fetch('https://v1.hitokoto.cn')
            .then(response => response.json())
            .then(data => {
                const text = document.getElementById('hitokoto_text')
                text.innerText = data.hitokoto
                const from = document.getElementById('hitokoto_from')
                var author = !!data.from ? data.from : "无名氏";
                from.innerText = "—— " + (data.from_who || '') + "「" + author + "」"
            })
            .catch(console.error)
    </script>
    <script>
        $(document).ready(function() {
            $("#Query").click(function() {
                layer.open({
                    type: 2,
                    title: '成员查询',
                    shadeClose: true,
                    scrollbar: false,
                    shade: false,
                    area: ['315px', '358px'],
                    content: '/indexs.php?my=Query'
                });
            });
            $("#Join").click(function() {
                layer.open({
                    type: 2,
                    title: '申请加入',
                    shadeClose: true,
                    scrollbar: false,
                    shade: false,
                    maxmin: true,
                    area: ['315px', '538px'],
                    content: '/indexs.php?my=Join'
                });
            })
        });
    </script>
    <script src="https://myhkw.cn/api/player/<?php echo conf_index('Index_Music') ?>" id="myhk" key="<?php echo conf_index('Index_Music') ?>" m="1"></script>
</body>
</html>