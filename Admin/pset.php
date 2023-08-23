<?php
$mod = 'admin';
include('../Common/Core_brain.php');
?>
<!DOCTYPE html>
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
  <script type="text/javascript" src="../assets/admin/js/jquery.min.js"></script>
  <script src="../assets/layer/layer.js"></script>
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-9HQDQJJYW7"></script><script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'G-9HQDQJJYW7');</script>
</head>
<body>
<div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-modern main-content-boxed">
<?php require_once 'head.php'; ?>
<?php
$my=isset($_GET['my'])?$_GET['my']:null;
if($my=='add'){
?>
<main id="main-container">
<div class="content">
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title"><b>添加项目</b></h3>
    </div>
    <div class="block-content">
      <form onsubmit="return addProject(this)" method="POST">
        <div class="row">
          <div class="col-md-12">
            <div class="row mb-4">
              <div class="col-6">
                <label class="form-label" for="title"><b>项目名称</b></label>
                <input type="text" class="form-control form-control-lg" name="name" value="" placeholder="请输入项目名称">
              </div>
              <div class="col-6">
                <label class="form-label" for="url"><b>项目网址</b></label>
                <input type="text" class="form-control form-control-lg" name="url" value="" placeholder="请输入项目网址，不加http://和/">
              </div>
              </div>
              <div class="row mb-4">
              <div class="col-6">
                <label class="form-label" for="img"><b>项目图片</b></label>
                <input type="text" class="form-control form-control-lg" name="img" value="" placeholder="请输入项目的图片Url">
              </div>
              <div class="col-6">
                <label class="form-label" for="img2"><b>项目图片2</b></label>
                <input type="text" class="form-control form-control-lg" name="img2" value="" placeholder="请输入项目的图片Url">
              </div>
              </div>
              <div class="row mb-4">
              <div class="col-6">
                <label class="form-label" for="img3"><b>项目图片3</b></label>
                <input type="text" class="form-control form-control-lg" name="img3" value="" placeholder="请输入项目的图片Url">
              </div>
              <div class="col-6">
                <label class="form-label" for="sketch"><b>项目简述</b></label>
                <input type="text" class="form-control form-control-lg" name="sketch" value="" placeholder="请输入项目的简单介绍（用于首页显示）">
              </div>
              </div>
              <div class="row mb-4">
                <div class="col-6">
                <label class="form-label" for="money"><b>项目售价</b></label>
                <input type="text" class="form-control form-control-lg" name="money" value="" placeholder="请输入项目的售价">
              </div>
              <div class="col-6">
                <label class="form-label" for="version"><b>项目版本号</b></label>
                <input type="text" class="form-control form-control-lg" name="version" value="" placeholder="请输入项目的当前版本号">
              </div>
              </div>
              <div class="mb-4">
              <label class="form-label" for="descriptison"><b>项目描述</b></label>
              <textarea class="form-control" name="descriptison" rows="5" value="" placeholder="请输入项目的具体描述（用于项目页）"></textarea>
              </div>
            </div>
            <div class="mb-4">
              <label class="form-label" for="paycontact"><b>购买联系方式</b></label>
              <input type="text" class="form-control form-control-lg" name="paycontact" value="" placeholder="请输入购买联系方式">
            </div>
           <div class="mb-4">
              <label class="form-label" for="type"><b>项目类型</b></label>
              <select class="form-select" name="type" size="1">
                <option value="web">单页</option>
                <option value="app">程序</option>
              </select>
            </div>
            <div class="mb-4">
              <label class="form-label" for="status"><b>显示首页</b></label>
              <select class="form-select" name="is_show" size="1">
                <option value="1">正常</option>
                <option value="0">暂停</option>
              </select>
            </div>
            <?php if($adminData['adminRank'] == 1) {?>
            <div class="mb-4">
              <label class="form-label" for="status"><b>审核状态</b></label>
              <select class="form-select" name="Audit_status" size="1">
                <option value="1">通过</option>
                <option value="0">未通过</option>
              </select>
            </div>
            <?php }?>
            <div class="mb-4">
              <label class="form-label" for="status"><b>项目状态</b></label>
              <select class="form-select" name="status" size="1">
                <option value="1">正常运营</option>
                <option value="0">暂停运营</option>
              </select>
            </div>
          </div>
          <div class="mb-4">
            <button type="submit" class="btn btn-primary">
              <i class="fa fa-check opacity-50 me-1"></i> <b>保存设置</b>
            </button>
            <button type="submit" class="btn btn-primary" onclick="javascript:history.back(-1);return false;">
              <i class="fa fa-arrow-right-arrow-left opacity-50 me-1"></i> <b>返回列表</b>
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</main>
<?php
}elseif($my=='edit'){
$id=intval($_GET['id']);
$row=$DB->getRow("select * from nteam_project_list where id='$id' limit 1");
if(!$row){echo "<script>layer.ready(function(){layer.msg('该项目不存在', {icon: 2, time: 1500}, function(){window.location.href='javascript:history.go(-1)'});});</script>";exit();}
?>
<main id="main-container">
<div class="content">
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title"><b>修改 <?php echo $row['name'];?> 项目信息</b></h3>
    </div>
    <div class="block-content">
      <?php echo '<form onsubmit="return editProject(this,'.$id.')" method="POST" class="row">';?>
        <div class="row">
          <div class="col-md-12">
            <div class="row mb-4">
              <div class="col-6">
                <label class="form-label" for="title"><b>项目名称</b></label>
                <input type="text" class="form-control form-control-lg" name="name" value="<?php echo $row['name'];?>" placeholder="请输入项目名称">
              </div>
              <div class="col-6">
                <label class="form-label" for="url"><b>项目网址</b></label>
                <input type="text" class="form-control form-control-lg" name="url" value="<?php echo $row['url'];?>" placeholder="请输入项目网址，不加http://和/">
              </div>
              </div>
              <div class="row mb-4">
              <div class="col-6">
                <label class="form-label" for="img"><b>项目图片</b></label>
                <input type="text" class="form-control form-control-lg" name="img" value="<?php echo $row['img'];?>" placeholder="请输入项目的图片Url">
              </div>
              <div class="col-6">
                <label class="form-label" for="img2"><b>项目图片2</b></label>
                <input type="text" class="form-control form-control-lg" name="img2" value="<?php echo $row['img2'];?>" placeholder="请输入项目的图片Url">
              </div>
              </div>
              <div class="row mb-4">
              <div class="col-6">
                <label class="form-label" for="img3"><b>项目图片3</b></label>
                <input type="text" class="form-control form-control-lg" name="img3" value="<?php echo $row['img3'];?>" placeholder="请输入项目的图片Url">
              </div>
              <div class="col-6">
                <label class="form-label" for="sketch"><b>项目简述</b></label>
                <input type="text" class="form-control form-control-lg" name="sketch" value="<?php echo $row['sketch'];?>" placeholder="请输入项目的简单介绍（用于首页显示）">
              </div>
              </div>
              <div class="row mb-4">
              <div class="col-6">
                <label class="form-label" for="money"><b>项目售价</b></label>
                <input type="text" class="form-control form-control-lg" name="money" value="<?php echo $row['money'];?>" placeholder="请输入项目的售价">
              </div>
              <div class="col-6">
                <label class="form-label" for="version"><b>项目版本号</b></label>
                <input type="text" class="form-control form-control-lg" name="version" value="<?php echo $row['version'];?>" placeholder="请输入项目的当前版本号">
              </div>
              </div>
              <div class="mb-4">
              <label class="form-label" for="descriptison"><b>项目描述</b></label>
              <textarea class="form-control" name="descriptison" rows="5" placeholder="请输入项目的具体描述（用于项目页）"><?php echo $row['descriptison'];?></textarea>
              </div>
            </div>
            <div class="mb-4">
              <label class="form-label" for="paycontact"><b>购买联系方式</b></label>
              <input type="text" class="form-control form-control-lg" name="paycontact" value="<?php echo $row['paycontact'];?>" placeholder="请输入购买联系方式">
            </div>
           <div class="mb-4">
              <label class="form-label" for="type"><b>项目类型</b></label>
              <select class="form-select" name="type" size="1">
                <?php if($row['type'] == 'web'){echo '<option value="web" selected>单页</option><option value="app">程序</option>'; }else{ echo '<option value="web">单页</option><option value="app" selected>程序</option>';}?>
              </select>
            </div>
            <div class="mb-4">
              <label class="form-label" for="status"><b>显示首页</b></label>
              <select class="form-select" name="is_show" size="1">
                <?php if($row['is_show'] == 1){echo '<option value="1" selected>正常</option><option value="0">暂停</option>'; }else{ echo '<option value="1">正常</option><option value="0" selected>暂停</option>';}?>
              </select>
            </div>
            <?php if($adminData['adminRank'] == 1) {?>
            <div class="mb-4">
              <label class="form-label" for="status"><b>审核状态</b></label>
              <select class="form-select" name="Audit_status" size="1">
                <?php if($row['Audit_status'] == 1){echo '<option value="1" selected>通过</option><option value="0">未通过</option>'; }else{ echo '<option value="1">通过</option><option value="0" selected>未通过</option>';}?>
              </select>
            </div>
            <?php }?>
            <div class="mb-4">
              <label class="form-label" for="status"><b>项目状态</b></label>
              <select class="form-select" name="status" size="1">
                <?php if($row['status'] == 1){echo '<option value="1" selected>正常运营</option><option value="0">暂停运营</option>'; }else{ echo '<option value="1">正常运营</option><option value="0" selected>暂停运营</option>';}?>
              </select>
            </div>
          </div>
          <div class="mb-4">
            <button type="submit" class="btn btn-primary">
              <i class="fa fa-check opacity-50 me-1"></i> <b>保存设置</b>
            </button>
            <button type="submit" class="btn btn-primary" onclick="javascript:history.back(-1);return false;">
              <i class="fa fa-arrow-right-arrow-left opacity-50 me-1"></i> <b>返回列表</b>
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</main>
<?php
  }
  ?>
<?php require_once 'foot.php'; ?>
</div>
<script src="../assets/admin/js/codebase.app.min-5.5.js"></script>
<script src="../assets/admin/js/time.js"></script>
<script>
	function addProject(obj){
	  var ii = layer.load(2, {shade:[0.1,'#fff']});
	  $.ajax({
	    type : 'POST',
	    url : 'ajax.php?act=setProject&type=Add',
	    data : $(obj).serialize(),
	    dataType : 'json',
	    success : function(data) {
	      layer.close(ii);
	      if(data.code == 0){
	        layer.alert(data.msg, {icon: 1,closeBtn: false}, function(){window.location.reload()});
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
	function editProject(obj,id){
	  var ii = layer.load(2, {shade:[0.1,'#fff']});

	  $.ajax({
	    type : 'POST',
	    url : 'ajax.php?act=setProject&type=Edit&id='+id,
	    data : $(obj).serialize(),
	    dataType : 'json',
	    success : function(data) {
	      layer.close(ii);
	      if(data.code == 0){
	        layer.alert(data.msg, {icon: 1,closeBtn: false}, function(){window.location.reload()});
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