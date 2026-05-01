<input type="text" id="name" placeholder="Enter name">
<button onclick="sendData()">Send</button>


<p id="result"></p>

<script>
    function sendData() {

        let name = document.getElementById("name").value;

        fetch("server.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded"
            },
            body: "name=" + name
        }).then((res) => res.text()).then((data) => {
            document.getElementById("result").innerHTML = data;
        })

    }
</script>