<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>普通会员首页 - 亚媒社</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />

	<?php include("cssjs.php"); ?>
	
</head>
<body>

<?php include("head.php"); ?>
<?php include("side_l_user.php"); ?>			<!--	左弹菜单 普通会员首页	-->

<div class="content"><div class="Invoice"><div class="INa1dd">
<div class="main">

	<div class="banner">
    	<!--	幻灯片	-->
        <div class="left_banner">
            <div id="slideBox" class="slideBox">
                <div class="bd">
                    <ul>
                        <li><a href="#" target="_blank"><img src="/img/1.jpg" /></a></li>
                        <li><a href="#" target="_blank"><img src="/img/1.jpg" /></a></li>
                        <li><a href="#" target="_blank"><img src="/img/1.jpg" /></a></li>
                    </ul>
                </div>
                <div class="hd">
                    <ul><li>1</li><li>2</li><li>3</li></ul>
                </div>
    
                <!-- 下面是前/后按钮代码，如果不需要删除即可 -->
                <a class="prev" href="javascript:void(0)"></a>
                <a class="next" href="javascript:void(0)"></a>
            </div>
        </div>
        <!--	帐户余额	-->
        <div class="right_balance">
        	<h2>帐户余额</h2>
            <h1 id="yu_e" data="555.21">555.21 <span>元</span></h1>
            <a href="" class="topup">充 值</a>
            <a href="" class="withdrawal">提 现</a>
            <a href="" class="mingxi">查看收支明细 ></a>
        </div>
	</div>


	<!--	可用余额等信息	-->
	<div class="info_am clearfix margin_top_40">
		
		<div class="info_am_r">
			<ul class="clearfix">
				<li class="colcnt" style="background:#56a5ef; margin-right:2%;">
                	<span><a href="order_list.php">我的订单<p>21234</p></a></span>
                    <div class="colcntimg"><img src="/images/GL14.png" /></div>
                </li>
				<li class="colcnt" style="background:#fad44f;">
                	<span><a href="order_list.php">我的购物车<p>21234</p></a></span>
                    <div class="colcntimg"><img src="/images/GL15.png" width="120%"/></div>
                </li>
				<li class="colcnt" style="background:#4fd0b0; margin-left:2%;">
                    <span><a href="order_list.php">浏览足迹<p>21234</p></a></span>
                    <div class="colcntimg"><img src="/images/GL16.png" /></div>
				</li>
			</ul>
		</div>
	</div>

	<!--	图表	-->
	<div class="info_am clearfix margin_top_40">
    	<div class="left_tongji">
            <h3 class="title1"><strong><a >投放分布</a></strong></h3>
            <div class="tffb_m axis tb_box1" id="pti_1"></div>
        </div>
        <div class="right_tongji">
        	
            <div class="tab2">
            	<h4 style="line-height: 76px;color: #505050; float:left;text-decoration: none;font-size: 24px;padding-left: 23px;">订单统计</h4>
				<ul class="clearfix" style="float:left;">
					<li class="cur"><a href="javascript:void(0)">本月</a></li>
					<li><a href="javascript:void(0)">上月</a></li>
                    <li><a href="javascript:void(0)">全年</a></li>
				</ul>
			</div>
			<div class="tab2_body">
				<ul class="clearfix" style="display:block;">
					<div id="pti_2" class="tb_box2"></div>
				</ul>
				<ul class="clearfix" style="display:none;">
					<div id="pti_3" class="tb_box2"></div>
				</ul>
                <ul class="clearfix" style="display:none;">
					<div id="pti_4" class="tb_box2"></div>
				</ul>
			</div>
            
            <a href="" class="mingxi">查看收支明细 ></a>
		 </div>
	</div>
	
	<!--	任务管理	-->
	<div class="rwgl radius1 margin_top_40 clearfix" style="width:100%;float:none;">
			<h3 class="title1"><strong><a >任务管理</a></strong><a href="order_list.php" class="more">更多&gt;&gt;</a></h3>
			<div class="rwgl_m">

				<div class="tab1_body">
				
	<table class="table_in1 cur" id="datatable1">
		<thead>
			<tr>
				<th>订单号</th>
				<th>订单类型</th>
				<th>活动名称</th>
				<th>订单状态</th>		<!--	（受理，未受理）	-->
				<th>生成时间</th>
				<th>金额</th>
				<th class="nosort">操作</th>			<!--	（查看）	-->
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>sdf100000815</td>
				<td>文案策划</td>
				<td>互联网大数据新闻编写</td>
				<td>受理</td>
				<td>2016-9-12 15:12:00</td>
				<td class="color1">￥228.00</td>
				<td><a href="order_view.php" class="color2">查看</a></td>
			</tr>
			<tr>
				<td>sdf100000815</td>
				<td>文案策划</td>
				<td>互联网大数据新闻编写</td>
				<td>未受理</td>
				<td>2016-9-12 15:12:00</td>
				<td class="color1">￥228.00</td>
				<td><a href="order_view.php" class="color2">查看</a></td>
			</tr>
			<tr>
				<td>sdf100000815</td>
				<td>文案策划</td>
				<td>互联网大数据新闻编写</td>
				<td>受理</td>
				<td>2016-9-12 15:12:00</td>
				<td class="color1">￥228.00</td>
				<td><a href="order_view.php" class="color2">查看</a></td>
			</tr>
			<tr>
				<td>sdf100000815</td>
				<td>文案策划</td>
				<td>互联网大数据新闻编写</td>
				<td>未受理</td>
				<td>2016-9-12 15:12:00</td>
				<td class="color1">￥228.00</td>
				<td><a href="order_view.php" class="color2">查看</a></td>
			</tr>
			<tr>
				<td>sdf100000815</td>
				<td>文案策划</td>
				<td>互联网大数据新闻编写</td>
				<td>受理</td>
				<td>2016-9-12 15:12:00</td>
				<td class="color1">￥228.00</td>
				<td><a href="order_view.php" class="color2">查看</a></td>
			</tr>
			<tr>
				<td>sdf100000815</td>
				<td>文案策划</td>
				<td>互联网大数据新闻编写</td>
				<td>受理</td>
				<td>2016-9-12 15:12:00</td>
				<td class="color1">￥228.00</td>
				<td><a href="order_view.php" class="color2">查看</a></td>
			</tr>
			<tr>
				<td>sdf100000815</td>
				<td>文案策划</td>
				<td>互联网大数据新闻编写</td>
				<td>受理</td>
				<td>2016-9-12 15:12:00</td>
				<td class="color1">￥228.00</td>
				<td><a href="order_view.php" class="color2">查看</a></td>
			</tr>
		</tbody>
	</table>

				</div>
			</div>
	</div>

	<!--	新闻中心、盈利状况、联系我们	-->
	<div class="box_1 clearfix margin_top_40">
		<div class="row3 row3_1 radius1">
			<h3 class="title2"><strong><a>新闻中心</a></strong></h3>
			<ul>
				<li class="clearfix"><a href="news_view.php" title="你的任务已经被某某媒体商确认电视的任务已经被某某媒体商确认电视的任务已经被某某媒体商确认电视的任务已经被某某媒体商确认电视的任务已经被某某媒体商确认电视广告精准投放已经实现">你的任务已经被某某媒体商确认电视的任务已经被某某媒体商确认电视的任务已经被某某媒体商确认电视的任务已经被某某媒体商确认电视的任务已经被某某媒体商确认电视广告精准投放已经实现</a><span>2016-9-16</span></li>
				<li class="clearfix"><a href="news_view.php" title="你的任务已经被某某媒体商确认电视广告精准投放已经实现">你的任务已经被某某媒体商确认电视广告精准投放已经实现</a><span>2016-9-16</span></li>
				<li class="clearfix"><a href="news_view.php" title="你的任务已经被某某媒体商确认电视广告精准投放已经实现">你的任务已经被某某媒体商确认电视广告精准投放已经实现</a><span>2016-9-16</span></li>
				<li class="clearfix"><a href="news_view.php" title="你的任务已经被某某媒体商确认电视广告精准投放已经实现">你的任务已经被某某媒体商确认电视广告精准投放已经实现</a><span>2016-9-16</span></li>
			</ul>
            <div class="mingxi"><a href="news_lsit.php" >更多 ></a></div>
			<div class="clr"></div>
		</div>
		<div class="row3 row3_2 radius1">
			<h3 class="title2"><strong><a >会员升级</a></strong></h3>
			<div class="m_row3_2">
				<img src="images/huiyuan_update.png" />
				<p>会员升级，拥有独立账户管理分销业务，自由选择添加管理分销账户，灵活设置账户信息等等。</p>
			</div>
            <div class="update_user mingxi">点击升级 ></div>
		</div>
		<div class="row3 row3_3 radius1">
			<h3 class="title2"><strong><a >联系我们</a></strong></h3>
			<div class="row3_3_m">
				<p>请输入你的电话号码<br/>
					稍后即可接到我们的来电。</p>
				<div class="callback">
					<form>
						
						<div class="w_txt4">
							<input type="text" name="" value="" placeholder="请输入手机号码" class="txt4" />
						</div>
                        <input type="submit" name="submit" value="免费回电" class="sub3" />
					</form>
				</div>
				<p style="color:#FF8400;">该通话对您免费，请放心接听。</p>
				<p>手机请直接输入<br/>座机前请加区号</p>
			</div>
		</div>
	</div>


	<div class="clr"></div>
</div>
</div></div></div>

<?php include("foot.php"); ?>

<!--	该弹窗用于当普能会员页有提示升级模块时，弹窗显示（首页。账户查询页）	-->
<!--	点击判断如用户账户不足10W则跳转充值界面，否则显示申请等待升级审核	-->
<div class="update_huser">
	<div class="update_huser_info">
		<h3>会员只需充值满<span class="">10万元</span>即可成为平台的高级会员，<br/>
			拥有分销权限，添加分销会员，<span class="">赚拥金、</span>助推广！</h3>
		<a href="chongzhi.php" class="btn_uh">升级高级会员</a>
	</div>
</div>


<script type="text/javascript">
$(function(){
	
	/*	任务管理 分页	*/
	var datatable;
	var dt_option = {
		"searching" : false,		//是否允许Datatables开启本地搜索
		"paging" : true,			//是否开启本地分页
		"pageLength" : 5,			//每页显示记录数
		"lengthChange" : false,		//是否允许用户改变表格每页显示的记录数 
		"lengthMenu": [ 5, 10, 100 ],		//用户可选择的 每页显示记录数
		"info" : true,
		"columnDefs" : {
	       	"targets": 'nosort',
			"orderable": false
		},
		"pagingType": "simple_numbers",
		"language": {
			"search": "搜索",
			"sZeroRecords" : "没有查询到数据",
			"info": "显示第 _PAGE_/_PAGES_ 页，共_TOTAL_条派单订单",
			"infoFiltered": "(筛选自_MAX_条数据)",
			"infoEmpty": "没有符合条件的数据",
			"oPaginate": {    
				"sFirst" : "首页",
				"sPrevious" : "上一页",
				"sNext" : "下一页",
				"sLast" : "尾页"    
			},
			"searchPlaceholder": "过滤..."
		},
		"order" : [[3,"desc"]]
	};
	datatable =  $('#datatable1').DataTable(dt_option);
});



$(".update_user").click(function(){
		layer.open({
			type: 1,
			title: false,
			shadeClose: true, //开启遮罩关闭
			skin: 'update_huser_w', //加上class设置样式
			area: ["1039px","80%"], //宽高
			content: $(".update_huser"),
			success: function(layero){
			}
		});
		return false;
	});
	$(".btn_uh").click(function(){
		var yu_e = $("#yu_e").attr("data");
//		console.log(yu_e);
		if( yu_e >= 100000 ){
			$(this).html("申请等待升级审核").css("background","#999");
			return false;
		}
	});
//	$(".update_user").click();
	
</script>
<script type="text/javascript">
$(function(){
	
	$(".tab2 li a").click(function(){
		var index = $(this).parent().index();
		var in2 = index + 2;
		$(this).parent().addClass("cur").siblings().removeClass("cur");
		$(this).closest(".tab2").next(".tab2_body").find("ul").eq(index).css("display","block").siblings("ul").css("display","none");
		eval( "myChart" + in2 + ".resize()" );
		return false;
	});
	
});
</script>
</body>
</html>
