<input type="text" name="name" id="name" placeholder="Enter name">
<button onclick="sendData()">Send</button>

<p id="res"></p>


<script>
    function sendData() {

        let name = document.getElementById("name").value;

        fetch("server.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded"
            },
            body: "name=" + name
        }).then((response) => response.text()).then((data) => {
            document.getElementById("res").innerHTML = data;
        })

    }
</script>