<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="js/jquery1-8-0.js"></script>
</head>
<body>
<div align="center">
    <h1 style="color: red">留言内容</h1>
    <form method="post" action="./add">
        <table border="1">
            <tr>
                <th>留言内容</th>
                <th>留言人</th>
                <th>留言时间</th>
                <th>操作</th>
            </tr>
            <?php foreach($arr as $k=>$v){
            ?>

            <tr>
                <td><?php echo $v['content']; ?></td>
                <td><?php echo $v['lname'];?></td>
                <td><?php echo $v['ltime'];?></td>
                <td><a href="./delete?id=<?php echo $v['id'];?>">删除</a><a href="./update?id=<?php echo $v['id'];?>">修改</a></td>
            </tr>
            <?php  }?>
        </table>
        <input type="submit" value="我要留言" style="margin-top: 50px">
    </form>
</div>
</body>

</html>
