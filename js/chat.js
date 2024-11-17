const chatBox = document.getElementById("chatBox");
const messageInput = document.getElementById("messageInput");
const usernameInput = document.getElementById("username");

// Fungsi untuk mengirim pesan
function sendMessage() {
  const username = usernameInput.value.trim();
  const message = messageInput.value.trim();

  if (username === "") {
    alert("Please enter your name!");
    return;
  }

  if (message === "") {
    alert("Please enter a message!");
    return;
  }

  // Buat elemen pesan baru
  const messageElement = document.createElement("div");
  messageElement.classList.add("message");

  const timestamp = new Date().toLocaleTimeString();
  messageElement.innerHTML = `<strong>${username}</strong> <span>(${timestamp}):</span> ${message}`;

  // Tambahkan pesan ke chat box
  chatBox.appendChild(messageElement);

  // Scroll ke pesan terakhir
  chatBox.scrollTop = chatBox.scrollHeight;

  // Kosongkan input pesan
  messageInput.value = "";
}

// Tambahkan event listener untuk tombol Enter pada input pesan
messageInput.addEventListener("keypress", function (e) {
  if (e.key === "Enter") {
    sendMessage();
  }
});