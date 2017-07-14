<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>申请发票 - 亚媒社</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />

	<?php include("cssjs.php"); ?>
	
	<style>
.item_f{ font-size:16px;}
	</style>
</head>
<body class="fold">			<!--	class="fold" 左导航收缩	-->

<?php include("head.php"); ?>
<?php include("side_l_user.php"); ?>			<!--	左弹菜单 普通会员首页	-->


<div class="content"><div class="Invoice">

	<div class="place">
		<div class="place_ant"><a href="putong_index.php">首页</a> <a href="car_list.php" class="cur">申请发票</a></div>
	</div>
	
	<div class="main_o">
		
		<h3 class="title5 clearfix"><strong>申请发票</strong></h3>
		
		<div class="clearfix wrap_f" style="padding-bottom:50px; ">
	
			<div class="IF2">
				
				<form id="form_fp" action="" method="post">
					<div class="item_f"><p>票据类型号：</p>
							<label><input type="radio" name="radio2" id="radio1" value="radio1" checked />&nbsp;&nbsp;收据&nbsp;&nbsp;&nbsp;&nbsp;</label>
							<label><input type="radio" name="radio2" id="radio2" value="radio2" />&nbsp;&nbsp;普通发票（含税）&nbsp;&nbsp;&nbsp;&nbsp;</label>
							<label><input type="radio" name="radio2" id="radio3" value="radio3" />&nbsp;&nbsp;专用发票（含</label>
					</div>
					<div class="item_f"><p>发票明细：</p>
						  <select name="select" id="select" class="sel_f1">
							<option value="">网络服务费</option>
							<option value="">其他</option>
						  </select>
					</div>
					<div class="item_f"><p>金额类型：</p>
						<label><input type="radio" name="radio" id="radio1" value="radio1" checked/> &nbsp;充值金额&nbsp;&nbsp;&nbsp;&nbsp;</label>
						<label><input type="radio" name="radio" id="radio2" value="radio2" /> &nbsp;消费金额</label>
					</div>
					<div class="item_f"><p>发票金额：</p>
						  <input type="text" name="textfield" id="textfield"  class="txt_f1" style="width:15%;"/>
						  <span style="color:#ff0000; font-size:20px; margin-left:10px;">元</span>
					</div>
					<div class="item_f"><p>发送方式：</p>
						<label><input type="radio" name="radio1" id="radio" value="radio" onclick="Email.style.display='';dizhi.style.display='none';" checked/> &nbsp;电子档 &nbsp;&nbsp;&nbsp;&nbsp;</label>
						<label><input type="radio" name="radio1" id="radio2" value="radio2" onclick="dizhi.style.display='';Email.style.display='none';"/> &nbsp;纸质快递1000起</label>
					</div>
					<div class="item_f"><p>发票抬头：</p>
						<input type="text" name="textfield2" id="textfield2"  class="txt_f1" style="width:40%;"/>
					</div>
					<div class="item_f" id="Email"><p>邮箱地址：</p>
						<input type="text" name="textfield2" id="textfield2"  class="txt_f1" style="width:40%;"/>
					</div>
					<div class="item_f" id="dizhi" style="display: none;"><p>联系地址：</p>
						<input type="text" name="textfield2" id="textfield2"  class="txt_f1"  style="width:40%;" />
					</div>
					<div class="item_f"><p>备注：</p>
						 <textarea class="txt_ft1" style="height:120px;width: 78%;"></textarea>
					</div>
					
					<div class="item_f">
						<p>&nbsp;</p>
						<input type="submit" name="button" id="button" value="提 交" class="sub5" style="margin-left:0;margin-top:50px;" />
					</div>
					
				</form>
					
			</div>
			
		</div>

	</div>	

</div></div>

<?php include("foot.php"); ?>

<script type="text/javascript">
	
$(function(){
	$("ul.IFN5 li").click(function(){
		var piao_typeid = $(this).attr("data");
		$(this).addClass("cur").siblings("li").removeClass("cur");
		$("#piao_typeid").val( piao_typeid );
	});
});


</script>

</body>
</html>
