<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- ?自己傳自己 -->
    <form action="?">
        <h2>get</h2>
        <div>
            <label for="acc">障號</label>
            <input type="text" name='acc' id='acc'>
        </div>
        <div>
            <label for="pw">密碼</label>
            <input type="password" name='pw' id='pw'>
        </div>
        <div>
            <input type="submit" value="送出">
            <input type="reset" value='重製'>
        </div>
    </form>
    <h2>post</h2>

    <form action="?" method="post">
        <div>
            <label for="acc">障號</label>
            <input type="text" name='acc' id='acc'>
        </div>
        <div>
            <label for="pw">密碼</label>
            <input type="password" name='pw' id='pw'>
        </div>
        <div>
            <input type="submit" value="送出">
            <input type="reset" value='重製'>
        </div>
    </form>
    <h2>post2</h2>

    <form action="?" method="post" enctype="multipart/form-data">
        <div>
            <label for="acc">障號</label>
            <input type="text" name='acc' id='acc'>
        </div>
        <div>
            <label for="pw">密碼</label>
            <input type="password" name='pw' id='pw'>
        </div>
        <div>
            <label for="img">img</label>
            <input type="file" name="img" id='img'>
         
        </div>
        <div>
            <input type="submit" value="送出">
            <input type="reset" value='重製'>
        </div>
    </form>













</body>

</html>