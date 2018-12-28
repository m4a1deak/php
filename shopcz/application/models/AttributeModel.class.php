<?php
class AttributeModel extends Model{
    //获取指定类型下的所有属性   V2
    public function getPageAttrs($type_id,$offset,$pagesize){
        if($type_id==0){
            $sql="select * from cz_attribute inner join cz_goods_type on cz_attribute.type_id=cz_goods_type.type_id order by attr_id desc limit ".$offset.",".$pagesize;
        }else{
            $sql="select * from cz_attribute inner join cz_goods_type on cz_attribute.type_id=cz_goods_type.type_id where cz_attribute.type_id=".$type_id." order by attr_id desc limit ".$offset.",".$pagesize;
        }
        //echo $sql;
        return $this->db->getAll($sql);
    }
    //获取指定类型下的所有属性
    public function getAttrs($id){
        if($id==0){
            $sql="select * from cz_attribute inner join cz_goods_type on cz_attribute.type_id=cz_goods_type.type_id";
        }else{
            $sql="select * from cz_attribute inner join cz_goods_type on cz_attribute.type_id=cz_goods_type.type_id where cz_attribute.type_id=".$id;
        }
        //echo $sql;
        return $this->db->getAll($sql);
    }
    //获取指定类型下的所有属性 并生成表格
    public function getAttrsTable($type_id) {
        $sql = "select * from {$this->table} where type_id=".$type_id;
        $attrs = $this->db->getAll($sql);
        $res = "<table width='100%' id='attrTable'>";
        foreach($attrs as $v){
            $res .="<tr>";
            $res .="<td  class='label'> {$v['attr_name']} </td>";
            $res .="<td>";
            $res .="<input type='hidden' name='attr_id_list[]' value='{$v['attr_id']}'>";
            switch($v['attr_input_type']){
                case 0:$res .="<input name='attr_value_list[]' type='text' size='40' >";
                    break;
                case 1:
                    $res .="<select name='attr_value_list[]'>";
                    $res .="<option value=''>请选择...</option>";
                    $opts = explode(PHP_EOL,$v['attr_value']);
                    foreach($opts as $opt){
                        $res .="<option value='$opt'>$opt</option>";
                    }
                    $res .="</select>";
                    break;
                case 2:"<textarea name='attr_value_list[]' cols='30' rows='10' ></textarea>";
                    break;
            }
			$res .="<input type='hidden' name='attr_price_list[]' value='0'>";
            $res .="</td>";
            $res .="</tr>";
        }
        $res.="</table>";
        return $res;

    }
}


