<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>任—订单管理 - 亚媒社</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />

	<?php include("cssjs.php"); ?>
	
	<style>

	</style>
</head>
<body class="fold">			<!--	class="fold" 左导航收缩	-->

<?php include("admin_head.php"); ?>
<?php include("side_l_admin.php"); ?>			<!--	左弹菜单 普通会员首页	-->


<div class="content"><div class="Invoice">

	<div class="place">
		<div class="place_ant"><a href="index.php">首页</a><a href="admin_order_list.php" class="cur">订单管理 </a></div>
	</div>
	
	<div class="main_o" style="padding-bottom:0;">
		
		<h3 class="title4"><strong><a href="#">网络媒体</a></strong>
			<div class="search_1">
<!--
				<form action="" method="" name="">
-->
				<div style="float:right;">
					<div class="l">
						<span>起始时间</span>
					</div>
					<div class="l">
						<input type="text" class="txt2" id="datepicker1" />-<input type="text" class="txt2" id="datepicker2" />
					</div>
					<div class="l">
						<select name="" class="sel1" id="mediatype">
							<option value="新闻约稿">新闻约稿</option>
							<option value="2">2</option>
							<option value="1">1</option>
						</select>
					</div>
					<div class="l">
						<input type="text" name="keyword" id="keyword" class="txt5" placeholder="订单号" />
						<input type="submit" name="submit" class="sub4_3" id="searchnews" value="查询" />
					</div>
				</div>
<!--
				</form>
-->
			</div>
			<div class="clr"></div>
		</h3>
		<div class="dhorder_m">
			<div class="tab1">
				<ul>
					<li class="cur"><a href="">全部订单</a></li>
					<li><a href="">预约状态</a></li>
					<li><a href="">已完成</a></li>
					<li><a href="">正执行</a></li>
					<li><a href="">已流单</a></li>
					<li><a href="">已拒单</a></li>
					<li><a href="">申诉订单</a></li>
					<li><a href="">退还</a></li>
				</ul>
				<a class="btn2_o" href="#">导出订单明细</a>
			</div>
			<div class="tab1_body">
<table class="table_in1 cur" id="datatable1">
	<thead>
		<tr>
			<th>订单号</th>
			<th>活动名称</th>
			<th>订单类型</th>
			<th>开始时间</th>
			<th>结束时间</th>
			<th>价格</th>
			<th>订单状态</th>
			<th>所属用户</th>
			<th>媒体商</th>
			<th>完成链接/截图</th>
			<th>质量状态</th>
			<th>质检扣款</th>
			<th class="nosort">操作</th>
		</tr>
	</thead>
	<tbody id="listcontent">
		<tr>
			<td>248d4965666</td>
			<td>互联网大数据新闻编写</td>
			<td>文案策划</td>
			<td>2016-9-12</td>
			<td>2016-9-12</td>
			<td class="color1">￥228.00</td>
			<td>未完成</td>
			<td>13711174990</td>
			<td>百度</td>
			<td>http://www.laba.tw</td>
			<td></td>
			<td class="color1">￥0</td>
			<td><a class="color2" href="admin_order_view.php">查看</a></td>
		</tr>
		<tr>
			<td>248d4965666</td>
			<td>互联网大数据新闻编写</td>
			<td>文案策划</td>
			<td>2016-9-12</td>
			<td>2016-9-12</td>
			<td class="color1">￥228.00</td>
			<td>完成</td>
			<td>13711174990</td>
			<td>百度</td>
			<td></td>
			<td>合格</td>
			<td class="color1">￥0</td>
			<td><a class="color2" href="admin_order_view.php">查看</a></td>
		</tr>
		<tr>
			<td>248d4965666</td>
			<td>互联网大数据新闻编写</td>
			<td>文案策划</td>
			<td>2016-9-12</td>
			<td>2016-9-12</td>
			<td class="color1">￥228.00</td>
			<td>未完成</td>
			<td>13711174990</td>
			<td>百度</td>
			<td></td>
			<td></td>
			<td class="color1">￥0</td>
			<td><a class="color2" href="admin_order_view.php">查看</a></td>
		</tr>
		<tr>
			<td>248d4965666</td>
			<td>互联网大数据新闻编写</td>
			<td>文案策划</td>
			<td>2016-9-12</td>
			<td>2016-9-12</td>
			<td class="color1">￥228.00</td>
			<td>未完成</td>
			<td>13711174990</td>
			<td>百度</td>
			<td>http://www.laba.tw</td>
			<td>合格</td>
			<td class="color1">￥0</td>
			<td><a class="color2" href="admin_order_view.php">查看</a></td>
		</tr>
		<tr>
			<td>248d4965666</td>
			<td>互联网大数据新闻编写</td>
			<td>文案策划</td>
			<td>2016-9-12</td>
			<td>2016-9-12</td>
			<td class="color1">￥228.00</td>
			<td>未完成</td>
			<td>13711174990</td>
			<td>百度</td>
			<td></td>
			<td></td>
			<td class="color1">￥0</td>
			<td><a class="color2" href="admin_order_view.php">查看</a></td>
		</tr>
		<tr>
			<td>248d4965666</td>
			<td>互联网大数据新闻编写</td>
			<td>文案策划</td>
			<td>2016-9-12</td>
			<td>2016-9-12</td>
			<td class="color1">￥228.00</td>
			<td>未完成</td>
			<td>13711174990</td>
			<td>百度</td>
			<td></td>
			<td>合格</td>
			<td class="color1">￥0</td>
			<td><a class="color2" href="admin_order_view.php">查看</a></td>
		</tr>
		<tr>
			<td>248d4965666</td>
			<td>互联网大数据新闻编写</td>
			<td>文案策划</td>
			<td>2016-9-12</td>
			<td>2016-9-12</td>
			<td class="color1">￥228.00</td>
			<td>未完成</td>
			<td>13711174990</td>
			<td>百度</td>
			<td>http://www.laba.tw</td>
			<td></td>
			<td class="color1">￥0</td>
			<td><a class="color2" href="admin_order_view.php">查看</a></td>
		</tr>
		<tr>
			<td>248d4965666</td>
			<td>互联网大数据新闻编写</td>
			<td>文案策划</td>
			<td>2016-9-12</td>
			<td>2016-9-12</td>
			<td class="color1">￥228.00</td>
			<td>未完成</td>
			<td>13711174990</td>
			<td>百度</td>
			<td></td>
			<td></td>
			<td class="color1">￥0</td>
			<td><a class="color2" href="admin_order_view.php">查看</a></td>
		</tr>
		<tr>
			<td>248d4965666</td>
			<td>互联网大数据新闻编写</td>
			<td>文案策划</td>
			<td>2016-9-12</td>
			<td>2016-9-12</td>
			<td class="color1">￥228.00</td>
			<td>未完成</td>
			<td>13711174990</td>
			<td>百度</td>
			<td></td>
			<td></td>
			<td class="color1">￥0</td>
			<td><a class="color2" href="admin_order_view.php">查看</a></td>
		</tr>
	</tbody>
</table>
			</div>

		</div>
		
	</div>
	

</div></div>

<?php include("foot.php"); ?>

<script type="text/javascript">
/*	日历	*/
	if( $('#datepicker1').length>0 && typeof(picker1)!="object" ){
		var picker1 = new Pikaday({
			field: document.getElementById('datepicker1'),
			firstDay: 1,
			format: "YYYY-MM-DD",
			minDate: new Date('2000-01-01'),
			maxDate: new Date('2020-12-31'),
			yearRange: [2000,2020]
		});
	}
	if( $('#datepicker2').length>0 && typeof(picker2)!="object" ){
		var picker2 = new Pikaday({
			field: document.getElementById('datepicker2'),
			firstDay: 1,
			format: "YYYY-MM-DD",
			minDate: new Date('2000-01-01'),
			maxDate: new Date('2020-12-31'),
			yearRange: [2000,2020]
		});
	}

	
$(function(){
	$(".tab1>ul>li>a").unbind("click");
});

//<div id="datatable1_filter" class="dataTables_filter"><label>搜索<input type="search" class="" placeholder="过滤..." aria-controls="datatable1"></label></div>
	var datatable;
	$(function () {
			var dt_option = {
				"searching" : false,		//是否允许Datatables开启本地搜索
				"paging" : true,			//是否开启本地分页
				"pageLength" : 8,			//每页显示记录数
				"lengthChange" : false,		//是否允许用户改变表格每页显示的记录数 
				"lengthMenu": [ 5, 10, 100 ],		//用户可选择的 每页显示记录数
				"info" : true,
				"columnDefs" : [{
		        	"targets": 'nosort',
					"orderable": false
				}],
				"pagingType": "simple_numbers",
				"language": {
					"search": "搜索",
					sZeroRecords : "没有查询到数据",
					"info": "显示第 _PAGE_/_PAGES_ 页，共_TOTAL_条",
					"infoFiltered": "(筛选自_MAX_条数据)",
					"infoEmpty": "没有符合条件的数据",
					oPaginate: {    
						"sFirst" : "首页",
						"sPrevious" : "上一页",
						"sNext" : "下一页",
						"sLast" : "尾页"    
					},
					searchPlaceholder: "过滤..."
				},
				"order" : [[3,"desc"]]
			};
			datatable =  $('#datatable1').DataTable(dt_option);
			
//			var _token = $('input[name="_token"]').val();
            $("#searchnews").click(function () {
                $.ajax({
                    type:"post",
//					url:"/Admin/searchnewspage",
					url:"data_admin_order_list.php",
					dataType: 'html',
                    data:{
                        'start':$("#datepicker1").val(),
                        'end':$("#datepicker2").val(),
                        'mediatype':$("#mediatype").val(),
                        'orderid':$("#keyword").val()
                    },
                    success:function (msg) {
						console.log("msg:" + msg);
                        if (msg) {
							if( $.fn.dataTable.isDataTable(" #datatable1 ") ){
								datatable.destroy();
							}
							$('#listcontent').html(msg);
							datatable =  $('#datatable1').DataTable(dt_option);
                        } else {
							if( $.fn.dataTable.isDataTable(" #datatable1 ") ){
								datatable.destroy();
							}
                            $('#listcontent').html("<tr><td colspan='8'>没有查询到数据！</td></tr>");			//7 表格列数
//                        window.location.reload();
                        }
                    }
                })
            })
			
	})


</script>

</body>
</html>
