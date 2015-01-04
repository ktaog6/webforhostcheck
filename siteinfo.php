<?php
//程序功能：空间说明页面－php生成静态
//程序作者：翅儿学飞
//创建时间：2014-01-05
//程序备注：无

date_default_timezone_set('UTC');
ob_start();
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="siteinfo" />
    <meta name="description" content="siteinfo" />
    <title>Site Info Page</title>

    <!--  CSS Define  --> 
    <style type="text/css">

    	#main{
    		text-align: center;
    	}
    	#head{
    		width: 600px;
    		padding: 10px 0 20px 0;
    		margin: 0 auto;
    		border-bottom: solid 1px;
    	}
    	#content{
    		padding: 10px 0 20px 0;
    		margin: 0 auto;
    		width: 600px;
    	}
    	#content ul{
    		text-align: left;
    	}
    	#content li{
    		font-size: 21px;
            padding:3px;
    	}
    	#foot{
    		border-top: solid 1px;
    		padding-top: 30px;
    		margin: 0 auto;
    		width: 600px;
    	}

    </style>

</head>
<body>

    <div id="main">
    	<div id="head">
    		<h1>Site Info Page</h1>
    	</div>
    	<div id="content">
	        <ul>
	            <li>Server ID:01-000webhost-net|nal-free|pay.host|vps|server</li>
	            <li>Server Name:xx.xx.com</li>
	            <li>Server Use:standby|backup|hotback</li>
	            <li>Server limit:xxGB|xxGb</li>
	            <li>Reg Date:yyyy/mm/dd</li>
	            <li>Expire Date:yyyy/mm/dd|-</li>
	        </ul>
    	</div>
    	<div id="foot">
            Copyright 2014-<?php echo date("Y")?> ® SiteInfo Inc. All Rights Reserved.
    	</div>
	</div>

</body>
</html>
<?php
$filename="siteinfo.htm";//定义文件名称                                                                     
$content = ob_get_contents();//取得php页面输出的全部内容                                                 
if(file_exists($filename)){//如果文件存在先删除                                                          
    unlink($filename);                                                                                   
}                                                                                                        
$fp = fopen($filename, "w");//写文件
fwrite($fp, $content);
fclose($fp);
?>
