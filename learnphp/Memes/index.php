<!DOCTYPE html>
<html>

<head>
    <title>Random Meme Generator</title>
    <style>
        body {
            text-align: center;
            font-family: Arial;
        }

        img {
            max-width: 400px;
            margin-top: 20px;
            border-radius: 10px;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
        }
    </style>
</head>

<body>

    <h1>😂 Random Meme Generator</h1>

    <button onclick="getMeme()">Get Meme</button>

    <div id="memeContainer">
        <h3 id="title"></h3>
        <img id="memeImg" src="">
    </div>

    <script>
        function getMeme() {
            fetch("getMeme.php")
                .then(res => res.json())
                .then(data => {
                    document.getElementById("title").innerText = data.title;
                    document.getElementById("memeImg").src = data.url;
                })
                .catch(err => console.log(err));
        }
    </script>

</body>

</html>