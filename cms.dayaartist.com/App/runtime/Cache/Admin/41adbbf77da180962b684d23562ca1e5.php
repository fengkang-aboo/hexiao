<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <title>编辑更新课程价格</title>
    <script src="jquery.min.js"></script>
</head>
<body>

<center>
    <form method="post" action="<?php echo U(CourseTeacher/editCoursePrice);?>">
        <h1 style="margin-top:200px">编辑更新课程价格</h1>
        <table>
            <tr>
                <td>课程信息</td>
            </tr>
            <tr>
                <td>课程unique_id：</td>
                <td><input type="text" name="course_name" value="0"></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;课程名称：</td>
                <td><input type="text" name="discribe" value="30分钟学会弹钢琴"></td>
            </tr>
            <tr>
                <td>课程价格：</td>
                <td><input type="text" name="price[]" value="300"></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;优惠价格：</td>
                <td><input type="text" name="discount[]" value="288"></td>
            </tr>
            <tr>
                <td><input type="submit" value="下一步"></td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>