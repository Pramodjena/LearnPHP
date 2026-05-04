function getMeme() {
  fetch("getMeme.php")
    .then((res) => res.json())
    .then((data) => {
      document.getElementById("title").innerHTML = data.title;
      document.getElementById("memeImg").src = data.url;
    }).catch((error) => console.log(error));
}
 