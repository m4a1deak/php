<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function test1()
    {
        //return 'test1';
        //查询
        //$res = DB::select('select * from student');

        //增加
        //$res = DB::insert('insert into student(name,age) values(?,?)',['lisi',19]);

        //修改
        $res = DB::update('update student set name=?,age=? where id=?',['wangwu',20,10]);

        //删除
        //$res = DB::delete('delete from student where name=?',['wangwu']);
        //var_dump($res)
        dd($res);
    }
    //查询构造器新增数据
    public function query1(){
        //1条
       // $res = DB::table('student')->insert(['name'=>'lisi']);

        //获取所增的主键值
        //$res = DB::table('student')->insertGetId(['name'=>'lisi','age'=>18]);

        //插入多条数据
        $res = DB::table('student')->insert(
            [
                ['name'=>'name11','age'=>21],
                ['name'=>'name22','age'=>22],
                ['name'=>'name33','age'=>23]
            ]
        );
        dd($res);
    }
    //查询构造器更新数据
    public function query2(){
        //更改指定内容
        //$res = DB::table('student')->where('id',20)->update(['age'=>30]);

        //自增 默认增加1
        //$res = DB::table('student')->increment('age');
        //  $res = DB::table('student')->increment('age',3);

        //自减
        $res = DB::table('student')->decrement('age');

        dd($res);
    }

}