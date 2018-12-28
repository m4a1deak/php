<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>会员列表</title>

        <link href="/shoptp/Public/Admin/css/mine.css" type="text/css" rel="stylesheet" />
        <style>

        </style>
    </head>
    <body>
        <style>
            .tr_color{background-color: #9F88FF}
        </style>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：商品管理-》商品列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="<?php echo U('admin/goods/tianjia');?>">【添加商品】</a>
                </span>
            </span>
        </div>
        <div></div>
        <div class="div_search">
            <span>
                <form action="#" method="get">
                    品牌<select name="s_product_mark" style="width: 100px;">
                        <option selected="selected" value="0">请选择</option>
                        <option value="1">苹果apple</option>
                    </select>
                    <input value="查询" type="submit" />
                </form>
            </span>
        </div>
        <div style="font-size: 13px; margin: 10px 5px;">
            <table class="table_a" border="1" width="100%">
                <tbody><tr style="font-weight: bold;">
                        <td>序号</td>
                        <td>商品名称</td>
                        <td>库存</td>
                        <td>价格</td>
                        <td>图片</td>
                        <td>缩略图</td>
                        <td>品牌</td>
                        <td>创建时间</td>
                        <td align="center">操作</td>
                    </tr>
                    <?php if(is_array($goods)): foreach($goods as $key=>$v): ?><tr id="product1">
                        <td><?php echo ($v["goods_id"]); ?></td>
                        <td><a href="#"><?php echo ($v['goods_name']); ?></a></td>
                        <td><?php echo ($v['goods_number']); ?></td>
                        <td><?php echo ($v['goods_price']); ?></td>
                        <td><img src="/shoptp<?php echo ($v['goods_big_img']); ?>" height="60" width="60"></td>
                        <td><img src="/shoptp<?php echo ($v['goods_small_img']); ?>" height="40" width="40"></td>
                        <td><?php echo ($v['goods_brand_id']); ?></td>
                        <td><?php echo (date("Y-m-d H:i:s",$v['goods_create_time'])); ?></td>
                        <td><a href="<?php echo U('admin/goods/upd',array('goods_id'=>$v['goods_id']));?>">修改</a></td>
                        <td><a href="<?php echo U('admin/goods/delete',array('goods_id'=>$v['goods_id']));?>" onclick="delete_product(1)">删除</a></td>
                    </tr><?php endforeach; endif; ?>
                    <tr>
                        <td colspan="20" style="text-align: center;" id="page">
                            <?php echo ($pagelist); ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>