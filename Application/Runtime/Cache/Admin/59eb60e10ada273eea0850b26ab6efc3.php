<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/Public/Admin/Css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Admin/Css/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Admin/Css/style.css" />
    <script type="text/javascript" src="/Public/Admin/js/jquery2.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/jquery2.sorted.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/bootstrap.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/ckform.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/common.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/jquerypicture.js"></script>
    
    <style type="text/css">
        body {font-size: 20px;
            padding-bottom: 40px;
            background-color:#e9e7ef;
        }
        .sidebar-nav {
            padding: 9px 0;
        }

        @media (max-width: 980px) {
            /* Enable use of floated navbar text */
            .navbar-text.pull-right {
                float: none;
                padding-left: 5px;
                padding-right: 5px;
            }
        }
        select{
            height:30px;
        }
        input[type="text"]{
            height:30px;
        }
    </style>
</head>
<body><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<font color="#777777"><strong>添加品牌：</strong></font> 
<form action="" method="post" class="definewidth m20" enctype="multipart/form-data">
<table style="margin-left:10px;margin-top:3px;">
    <tr>
         <td>父类别：</td>
         <td>
             <select name='cate_pid'>               
                <?php if(is_array($cateList)): foreach($cateList as $key=>$v): ?><option value="<?php echo ($v["cate_id"]); ?>}"><?php echo ($v["cate_name"]); ?></option><?php endforeach; endif; ?>
             </select>
         </td>
    </tr>
    <tr>
         <td>品牌名称：</td>
		 <td><input type="text" name="cate_name" placeholder='请输入小类名称'/></td>
    </tr>
	<tr>
         <td>介绍：</td>
		 <td><textarea name='cate_introduce' style="width: 250px;height: 100px"></textarea></td>
    </tr>
	
    <tr>
        <td></td>
       <td>
            <button style="margin-left:5px;"type="submit" class="btn btn-primary" type="button"  >保&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp存</button> &nbsp;&nbsp;<button type="button" class="btn btn-success" name="backid" id="backid"><a href="classQuery.html"> 返回列表</a></button>
        </td>
    </tr>
</table>
</form>

</body>
</html>