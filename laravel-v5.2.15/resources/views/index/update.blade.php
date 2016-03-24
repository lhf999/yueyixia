<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form method="post" action="./nupdate">
    <div align="center">
        <h1 style="color: red">请修改</h1>
        <input type="hidden" value="<?php echo $arr['0']['id']?>" name="id">
        <table border="1">
        <tr>
            <td>留言人:</td>
            <td><input type="text" name="uname" value="<?php echo $arr['0']['lname']?>"></td>
        </tr>
        <tr>
            <td>留言内容:</td>
            <td><textarea name="content" rows="5" cols="30"><?php echo $arr['0']['content']?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="提交"></td>
        </tr>
    </table>
    </div>
</form>
</body>

</html>
