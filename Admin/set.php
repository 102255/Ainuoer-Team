<?php
$mod = 'admin';
include('../Common/Core_brain.php');
if($adminData['adminRank']== 2) {
  echo "您的账号没有权限使用此功能";
  exit;
}
?>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?php echo conf('Name');?> - 后台管理中心</title>
  <meta content="<?php echo conf('Descriptison');?>" name="descriptison">
  <meta content="<?php echo conf('Keywords');?>" name="keywords">
  <link rel="shortcut icon" href="../assets/img/favicon.png">
  <link rel="apple-touch-icon" sizes="180x180" href="../assets/media/favicons/apple-touch-icon-180x180.png">
  <link rel="stylesheet" id="css-main" href="../assets/admin/css/codebase.min-5.5.css">
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-9HQDQJJYW7"></script><script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'G-9HQDQJJYW7');</script>
</head>
<body>
<div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-modern main-content-boxed">
<?php require_once 'head.php'; ?>
<main id="main-container">
<div class="content">
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title"><b>网站信息设置</b></h3>
    </div>
    <div class="block-content">
      <form onsubmit="return saveSetting(this)" method="post" name="edit-form">
        <div class="row">
          <div class="col-md-7">
            <div class="row mb-4">
              <div class="col-6">
                <label class="form-label" for="Name"><b>网站名称</b></label>
                <input type="text" class="form-control form-control-lg" name="Name" value="<?php echo conf('Name');?>" placeholder="请输入网站名称">
              </div>
              <div class="col-6">
                <label class="form-label" for="SiteName"><b>网站标题</b></label>
                <input type="text" class="form-control form-control-lg" name="SiteName" value="<?php echo conf('SiteName');?>" placeholder="请输入网站简称">
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="mb-4">
              <label class="form-label" for="Url"><b>网站域名</b></label>
              <input type="text" class="form-control form-control-lg" id="Url" name="Url" value="<?php echo conf('Url');?>" placeholder="请输入网站域名">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-mb-5">
            <div class="mb-4">
              <label class="form-label" for="Iindex_Image"><b>首页背景图</b></label>
              <input type="text" class="form-control form-control-lg" id="index_image" name="index_image" value="<?php echo conf('Index_Image');?>" placeholder="请输入首页背景图Url">
            </div>
          </div>
          <div class="col-md-7">
            <div class="mb-4">
              <label class="form-label" for="Descriptison"><b>网站描述</b></label>
              <textarea class="form-control form-control-lg" rows="4" name="Descriptison" placeholder="请输入站点描述"><?php echo conf('Descriptison');?></textarea>
            </div>
            <div class="mb-4">
              <label class="form-label" for="Vaptcha_Open"><b>系统人机验证开关</b></label>
              <div class="space-x-2">
                <div class="form-check form-check-inline">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="Vaptcha_Open" value="0" <?=conf('Vaptcha_Open')==0?"checked":""?>>禁用
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="Vaptcha_Open" value="1" <?=conf('Vaptcha_Open')==1?"checked":""?>>启用
                  </label>
                </div>
              </div>
            </div>
            <div class="mb-4">
              <label class="form-label" for="Index_Fang"><b>防止xxs扒站JS开关</b></label>
              <div class="space-x-2">
                <div class="form-check form-check-inline">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="index_fang" value="0" <?=conf('Index_Fang')==0?"checked":""?>>禁用
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="index_fang" value="1" <?=conf('Index_Fang')==1?"checked":""?>>启用
                  </label>
                </div>
              </div>
            </div>
            <div class="mb-4">
              <label class="form-label" for="Jump"><b>QQVX访问跳出提示页</b></label>
              <div class="space-x-2">
                <div class="form-check form-check-inline">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="Jump" value="0" <?=conf('Jump')==0?"checked":""?>>禁用
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="Jump" value="1" <?=conf('Jump')==1?"checked":""?>>启用
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="mb-4">
              <label class="form-label" for="Keywords"><b>网站关键词</b></label>
              <input type="text" class="form-control form-control-lg" name="Keywords" value="<?php echo conf('Keywords');?>" placeholder="请输入站点关键词">
            </div>
            <div class="col-mb-5">
              <div class="mb-4">
                <label class="form-label" for="ICP"><b>ICP备案号</b></label>
                <input type="text" class="form-control form-control-lg" id="ICP" name="ICP" value="<?php echo conf('ICP');?>" placeholder="请输入ICP备案号">
              </div>
            </div>
            <div class="col-mb-5">
              <div class="mb-4">
                <label class="form-label" for="Vaptcha_Vid"><b>人机验证单元Vid &nbsp;&nbsp; <small>前往<a href="https://www.vaptcha.com/" target="_blank"> Vaptcha </a>免费注册开通</small></b></label>
                <input type="text" class="form-control form-control-lg" id="Vaptcha_Vid" name="Vaptcha_Vid" value="<?php echo conf('Vaptcha_Vid');?>" placeholder="请输入人机验证单元Vid">
              </div>
            </div>
          </div>
          <div class="mb-4">
            <button type="submit" class="btn btn-primary">
              <i class="fa fa-check opacity-50 me-1"></i> <b>保存设置</b>
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</main>
<?php require_once 'foot.php'; ?>
</div>
<script src="../assets/admin/js/codebase.app.min-5.5.js"></script>
<script type="text/javascript" src="../assets/admin/js/jquery.min.js"></script>
<script src="../assets/admin/js/time.js"></script>
<script src="../assets/layer/layer.js"></script>
<script>
function checkURL(obj)
{
  var url = $(obj).val();

  if (url.indexOf(" ")>=0){
    url = url.replace(/ /g,"");
  }
  if (url.toLowerCase().indexOf("http://")<0 && url.toLowerCase().indexOf("https://")<0){
    url = "http://"+url;
  }
  if (url.slice(url.length-1)!="/"){
    url = url+"/";
  }
  $(obj).val(url);
}
function saveSetting(obj){
  var ii = layer.load(2, {shade:[0.1,'#fff']});
  $.ajax({
    type : 'POST',
    url : 'ajax.php?act=set',
    data : $(obj).serialize(),
    dataType : 'json',
    success : function(data) {
      layer.close(ii);
      if(data.code == 0){
        layer.alert(data.msg, {
          icon: 1,
          closeBtn: false
        }, function(){
          window.location.reload()
        });
      }else{
        layer.alert(data.msg, {icon: 2})
      }
    },
    error:function(data){
      layer.msg('服务器错误');
      return false;
    }
  });
  return false;
}
function saveSettings(obj){
  var ii = layer.load(2, {shade:[0.1,'#fff']});
  $.ajax({
    type : 'POST',
    url : 'ajax.php?act=sets',
    data : $(obj).serialize(),
    dataType : 'json',
    success : function(data) {
      layer.close(ii);
      if(data.code == 0){
        layer.alert(data.msg, {
          icon: 1,
          closeBtn: false
        }, function(){
          window.location.reload()
        });
      }else{
        layer.alert(data.msg, {icon: 2})
      }
    },
    error:function(data){
      layer.msg('服务器错误');
      return false;
    }
  });
  return false;
}
</script>
</body>
</html>