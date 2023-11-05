<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>实时分钟和秒</title>
    <script>
        function updateMinutesAndSeconds() {
            const now = new Date(); // 获取当前时间
            const timeElement = document.getElementById('time');
            
            // 获取分钟和秒
            const minutes = now.getMinutes().toString().padStart(2, '0');
            const seconds = now.getSeconds().toString().padStart(2, '0');
            
            const formattedTime = `${minutes}:${seconds}`;
            timeElement.textContent = formattedTime; // 更新显示的时间
        }

        // 初始调用 updateMinutesAndSeconds 函数
        updateMinutesAndSeconds();

        // 每秒更新一次分钟和秒
        setInterval(updateMinutesAndSeconds, 1000);
    </script>
    <style>
        /* 可以添加样式来调整时间的显示 */
    </style>
</head>
<body>
    <h1>实时分钟和秒：</h1>
    <div id="time"></div>
</body>
</html>