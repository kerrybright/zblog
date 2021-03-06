<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta name="format-detection" content="telephone=no">
    <meta name="robots" content="none">
    <meta http-equiv="Cache-Control" content="no-siteapp" />

    
    <!--
<script src="/Public/js/jquery.min.js?v=1.9.1"></script>
-->
<script src="/Public/plugins/dist/js/lib/jquery-1.10.2.min.js"></script>
<script src="/Public/js/index_admin.js?v=1.0"></script>
<script src="/Public/js/tool.js?v=1.0"></script>
<script src="/Public/plugins/bootstrap/js/bootstrap.min.js?v=3.3.5"></script>
<script src="/Public/plugins/layui-v1.0.9/layui.js?v=3.3.5"></script>
<script src="/Public/plugins/layer/layer.js"></script>
    <script type="text/javascript">

       layui.use('layer', function(){
           var layer = layui.layer;
       });
    </script>

    
        <link href="/Public/plugins/bootstrap/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
<link href="/Public/plugins/layui-v1.0.9/css/layui.css?v=1.0.9" rel="stylesheet">
<link href="/Public/css/index_admin.css?v=1.0" rel="stylesheet">
<link href="/Public/admin/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    

    <!--[if IE 6]>
    <script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <title><?php echo (C("SITE_NAME")); ?></title>
    <meta name="keywords" content="<?php echo (C("KEYWORDS")); ?>" />
    <meta name="description" content="<?php echo (C("DESCRIPTION")); ?>" />
    <!--百度编辑器-->
</head>
<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:auto">


    <div style="padding: 10px;">
        <button class="layui-btn" onclick="layer.open({type: 2, area: ['500px', '400px'], fix: false, maxmin: true,content: 'add'});">添加<i class="layui-icon">&#xe608;</i></button>
        <table class="layui-table">
            <colgroup>
                <col width="150">
                <col width="200">
                <col>
            </colgroup>
            <thead>
            <tr>
                <th>类别编号</th>
                <th>类别名称</th>
                <th>描述</th>
                <th>禁用</th>
                <th>显示顺序</th>
                <th>创建时间</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <?php if(is_array($articleList)): foreach($articleList as $key=>$list): ?><tr>
                    <td><?php echo ($list['category_id']); ?></td>
                    <td><?php echo ($list['category_name']); ?></td>
                    <td><?php echo ($list['desc']); ?></td>
                    <td><?php echo ($list['disabled']); ?></td>
                    <td><?php echo ($list['display_order']); ?></td>
                    <td><?php echo ($list['created_time']); ?></td>
                    <td class="text-center">
                        <a title="删除" href="javascript:;" onclick="user_del(this, 'id', '<?php echo ($list["category_id"]); ?>')" class="ml-5" style="text-decoration:none">
                            <i class="layui-icon">&#xe640;</i>
                        </a>
                    </td>
                </tr><?php endforeach; endif; ?>

            </tbody>
        </table>
    </div>


<script type="text/javascript">
    var _CONTROLLER_ = '/index.php/ArticleCategory';
    var _ACTION_ = '/index.php/ArticleCategory/lists';
    var _ROOT_ = '';
</script>

</body>
</html>