<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Liuyan;
use yii\data\Pagination;

class IndexController extends Controller
{

    public function actionIndex(){
        $data=Liuyan::find();
        $pages=new Pagination(['totalCount'=>$data->count(),'pagesize'=>'5']);
        $models=$data->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('index', [
            'models' => $models,
            'pages' => $pages,
        ]);
    }
    public function actionDelete(){
        $id = $_GET['id'];
        //echo $id;die;
        $customer = Liuyan::findOne($id);
        $arr = $customer->delete();
        $data=Liuyan::find();
        $pages=new Pagination(['totalCount'=>$data->count(),'pagesize'=>'5']);
        $models=$data->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('delete', [
            'models' => $models,
            'pages' => $pages,
        ]);
    }
    public function actionAdd(){
        //echo 1;die;
        return $this->render('add');
    }
    public function actionDoadd(){
        //print_r($_POST);die;
        $name = $_POST['uname'];
        $content = $_POST['content'];
        $time=date('Y-m-d H:i:s',time());
        $customer = new Liuyan();
        $customer->lname = $name;
        $customer->content = $content;
        $customer->ltime = $time;
        $customer->save();
        if($customer->save()){
            echo "<script>alert('添加成功');location='index.php?r=index/index'</script>";
        }else{
            echo "<script>alert('添加失败');location='index.php?r=index/add'</script>";
        }
    }
    public function actionUpdate(){
        $id = $_GET['id'];
        //echo $id;die;
        $data=Liuyan::find()->asArray()->where(['id'=>$id])->all();
        //print_r($data);die;
        return $this->render('update',['arr'=>$data]);

    }

    public function actionNupdate(){
        $id = $_POST['id'];
        $name = $_POST['uname'];
        $content = $_POST['content'];
        //print_r($_POST);die;
        $time=date('Y-m-d H:i:s',time());
        $arr=Liuyan::findOne($id);
        $arr->content=$content;
        $arr->lname=$name;
        $arr->ltime=$time;
        $arr->save();
        if($arr->save()){
            echo "<script>alert('修改成功');location='./index.php?r=index/index'</script>";
        }else{
            echo "<script>alert('修改失败');location='./index.php?r=index/update'</script>";
        }
    }
}
