<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>实时分钟和秒</title>
</head>
<body>
    <h1>现在的时间：</h1>
    <div id="time"></div>
    <script>
        function updateTime() {
            const timeElement = document.getElementById('time');
            const now = new Date();
            const hours = now.getHours().toString().padStart(2, '0');
            const minutes = now.getMinutes().toString().padStart(2, '0');
            const seconds = now.getSeconds().toString().padStart(2, '0');
            const currentTime = `${hours}:${minutes}:${seconds}`;
            timeElement.textContent = currentTime;
        }

        // 初始调用 updateTime 函数
        updateTime();

        // 每秒更新一次时间
        setInterval(updateTime, 1000);
    </script>
</body>
</html>