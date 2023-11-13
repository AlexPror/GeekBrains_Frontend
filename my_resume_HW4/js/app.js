get();
setInterval(get, 2000);

function send() {
  const message = document.getElementById("message").value;
  const name = document.getElementById("name").value;
  (async () => {
    const response = await fetch("chat.php?message=" + message);
    const answer = await response.text();
    document.getElementById("message").value = "";
    const response_name = await fetch("chat.php?name=" + name);
    const answer_name = await response.text();
  })();
}
function get() {
  (async () => {
    const response = await fetch("chat.php");
    const answer = await response.text();
    document.getElementById("messages").innerText = answer;
    const response_name = await fetch("chat.php");
    const answer_name = await response.text();
    document.getElementById("name").innerText = answer_name;
  })();
}
