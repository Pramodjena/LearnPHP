<input type="text" id="name" placeholder="Enter name">
<button onclick="sendData()">Submit</button>

<p id="response"></p>

<script>
    function sendData() {
        let name = document.getElementById("name").value;

        fetch("server.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded"
                },
                body: "name=" + name
            })
            .then(response => response.text())
            .then(data => {
                document.getElementById("response").innerHTML = data;
            });
    }
</script>

<!-- 
Browser (JS/AJAX)
        ↓
   HTTP Request
        ↓
     PHP Server
        ↓
   HTTP Response
        ↓
Browser updates page (without reload) -->