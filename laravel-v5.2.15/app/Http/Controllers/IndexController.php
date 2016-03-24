<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;

class IndexController extends Controller
{
    public function index(){
        $arr = DB::table('liuyan')->get();
        //$arr = DB::table('liuyan')->paginate(3);
        //print_r($arr);die;
        return view('index/index',['arr'=>$arr]);
    }
    public function add(){
        return view('index/add');
    }
    public function doadd(){
        //print_r($_POST);die;
        $name = $_POST['uname'];
        $content = $_POST['content'];
        $time=date('Y-m-d H:i:s',time());
        $arr = DB::table('liuyan')->insert(['lname' => $name, 'content' => $content,'ltime'=>$time]);
        if($arr){
            echo "<script>alert('添加成功');location='./index'</script>";
        }else{
            echo "<script>alert('添加失败');location='./doadd'</script>";
        }
    }
    public function delete(){
        $id = $_GET['id'];
        $arr = DB::table('liuyan')->where('id', '=', $id)->delete();
        if($arr){
            echo "<script>alert('删除成功');location='./index'</script>";
        }else{
            echo "<script>alert('删除失败');location='./index'</script>";
        }
    }
    public function update(){
        $id = $_GET['id'];
        $arr = DB::table('liuyan')->where('id', '=', $id)->get();
        return view('index/update',['arr'=>$arr]);
    }
    public function nupdate(){
        //print_r($_POST);die;
        $id = $_POST['id'];
        $name = $_POST['uname'];
        $content = $_POST['content'];
        $time=date('Y-m-d H:i:s',time());
        $arr = DB::table('liuyan')->where('id',$id)->update(['lname' => $name, 'content' => $content,'ltime'=>$time]);
        if($arr){
            echo "<script>alert('修改成功');location='./index'</script>";
        }else{
            echo "<script>alert('修改失败');location='./doadd'</script>";
        }
    }
}