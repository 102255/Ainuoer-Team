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
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-9HQDQJJYW7"></script><script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'G-9HQDQJJYW7');</script>
</head>
<body>
<div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-modern main-content-boxed">
<?php require_once 'head.php'; ?>
<main id="main-container">
<div class="content">
  <h2 class="content-heading"> <a href="index.php"> 后台首页 </a> &nbsp; <i class="fa fa-angle-right"></i> &nbsp; 项目管理列表 </h2>
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">
        <b>项目列表</b>
      </h3>
      <div class="col-sm-6 col-xl-2">
          <a class="btn btn-alt-success" href="./pset.php?my=add"><b><i class="fa fa-plus"></i> 新增</b></a>
      </div>
    </div>
    <div id="listTable" class="block-content block-content-full">
    </div>
  </div>
</div>
</main>
<?php require_once 'foot.php'; ?>
</div>
<script type="text/javascript" src="../assets/admin/js/jquery.min.js"></script>
<script src="../assets/admin/js/codebase.app.min-5.5.js"></script>
<script src="../assets/admin/js/time.js"></script>
<script src="../assets/layer/layer.js"></script>
<script>
function listTable(query){
  var url = window.document.location.href.toString();
  var queryString = url.split("?")[1];
  query = query || queryString;
  if(query == 'start' || query == undefined){
    query = '';
    history.replaceState({}, null, './plist.php');
  }else if(query != undefined){
    history.replaceState({}, null, './plist.php?'+query);
  }
  layer.closeAll();
  var ii = layer.load(2, {shade:[0.1,'#fff']});
  $.ajax({
    type : 'GET',
    url : 'plist-table.php?'+query,
    dataType : 'html',
    cache : false,
    success : function(data) {
      layer.close(ii);
      $("#listTable").html(data)
    },
    error:function(data){
      layer.msg('服务器错误');
      return false;
    }
  });
}
function searchProject(){
  var column=$("select[name='column']").val();
  var value=$("input[name='value']").val();
  if(value==''){
    listTable();
  }else{
    listTable('column='+column+'&value='+value);
  }
  return false;
}
function setShow(id,num) {
  $.ajax({
    type : 'GET',
    url : 'ajax.php?act=setProject&type=Show&id='+id+'&num='+num,
    dataType : 'json',
    success : function(data) {
      if(data.code == 0){
        listTable();
        layer.msg(data.msg, {icon:1, time:1500});
      }else{
        layer.msg(data.msg, {icon:2, time:1500});
      }
    },
    error:function(data){
      layer.msg('服务器错误');
      return false;
    }
  });
  return false;
}
function setAudit_status(id,status) {
  $.ajax({
    type : 'GET',
    url : 'ajax.php?act=setProject&type=Audit_status&id='+id+'&status='+status,
    dataType : 'json',
    success : function(data) {
      if(data.code == 0){
        listTable();
        layer.msg(data.msg, {icon:1, time:1500});
      }else{
        layer.msg(data.msg, {icon:2, time:1500});
      }
    },
    error:function(data){
      layer.msg('服务器错误');
      return false;
    }
  });
  return false;
}
function setStatus(id,status) {
  $.ajax({
    type : 'GET',
    url : 'ajax.php?act=setProject&type=Status&id='+id+'&status='+status,
    dataType : 'json',
    success : function(data) {
      if(data.code == 0){
        listTable();
        layer.msg(data.msg, {icon:1, time:1500});
      }else{
        layer.msg(data.msg, {icon:2, time:1500});
      }
    },
    error:function(data){
      layer.msg('服务器错误');
      return false;
    }
  });
  return false;
}
function delProject(id){
  layer.confirm('您确定要删除吗？', {
    btn: ['确定','取消'] //按钮
  }, function(){
    var ii = layer.load(2, {shade:[0.1,'#fff']});
    $.ajax({
      type : 'POST',
      url : 'ajax.php?act=setProject&type=Del',
      data: {id:id},
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
  }, function() {});
  return false;
}
$(document).ready(function(){
  listTable();
})
</script>
</body>
</html>