<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>账户提现 - 亚媒社</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />

	<?php include("cssjs.php"); ?>
	
	<style>

	</style>
</head>
<body class="fold">			<!--	class="fold" 左导航收缩	-->

<?php include("head.php"); ?>
<?php include("side_l_user.php"); ?>			<!--	左弹菜单 普通会员首页	-->


<div class="content"><div class="Invoice">

	<div class="s1_tab">
		<ul class="clearfix">
			<li><a href="order_list.php">订单管理</a></li>
			<li class="cur"><a href="account_query.php">账户查询</a></li>
			<li><a href="chongzhi.php">账户充值</a></li>
			<li><a href="person_edit.php">用户信息</a></li>
		</ul>
	</div>

	<div class="place">
		<div class="place_ant"><a href="putong_index.php">首页</a> <a href="account_query.php" class="cur">账户查询</a></div>
	</div>
	
	<div class="main_s">
		<h3 class="title3"><strong>账户提现</strong>
			
		</h3>
		
		<div class="clearfix wrap_f" style="padding-top:80px; width:94%;">
		
			<div class="tixian_left">	
				<h3 class="wrap_h3">可提现金额</h3>
				<h4 class="wrap_h4">￥<span id="sum1">1225.12</span></h4>
            </div>    
			<div class="tixian_ant">
				<div class="item_f"><p><i class="LGntas"></i>提现金额：</p>
					<div class="r"><input type="text" name="tixian" id="tixian" class="txt_f1" style="width:80%;"></div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i>提现方式：</p>
					<div class="r">
						<select class="sel_f1" style="width:83%; padding:0 2%">
							<option value="1">支付宝</option>
							<!-- <option>微信</option>
							<option>银联</option>-->
						</select>
					</div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i>提现账户：</p>
					<div class="r"><input type="text" name="tx_name" id="tx_name" class="txt_f1" style="width:80%;"></div>
				</div>
				<div class="item_f item_f_2" style="margin-top:100px;">
					<div class=""><input type="submit" value="提 交" id="tixian_at" class="sub5" style="margin:0 auto;display:block;" /></div>
				</div>
				<div class="clr"></div>
			</div>
            <div class="tixian_right"><img src="images/tixian_right.png"</div>
		</div>
	</div>
	

</div></div>

<?php include("foot.php"); ?>

<!--    支付弹窗    -->
<div class="pay_info">
    <h3>提现金额</h3>
    <h4 class="sum" id="sum2">￥<b>0.00</b></h4>  
     <p>尊敬的用户，您的提现金额将会在24小时后到账。</p>  
    <form action="" method="post" id="form1">
        <div class="item">
            <input type="password" name="pass" placeholder="请输入您的支付宝密码" class="pass" />
        </div>
        <div class="item">
            <button type="submit" class="sub">确 定</button>
        </div>
    </form>
</div>

<script type="text/javascript">
/*  点击结算弹出支付    */
$("#tixian_at").click(function(){
    event.preventDefault();
	var tixian = $("#tixian").val();
	var sum1 = $("#sum1").html();
	var tx_name = $("#tx_name").val();
	if( tixian == "" ){			layer.msg("请输入提现金额");	return;		}
	if( tixian - sum1 > 0 ){	layer.msg("提现金额不能超过可提现金额");	return;		}
	if( tx_name == "" ){		layer.msg("请输入提现帐户");	return;		}
	$("#sum2 b").html(tixian);
    layer.open({
        type: 1,
        title: " ",
        shadeClose: true, //开启遮罩关闭
        skin: 'pay_info_w', //加上class设置样式
        area: ['430px'], //宽高
        content: $(".pay_info")
    });
});
reset_total();
</script>

</body>
</html>
