const chatBubble = document.getElementById("chat-bubble");
const chatbox = document.getElementById("chatbox");
const closeChatbox = document.getElementById("close-chatbox");
const chatInput = document.getElementById("chat-input");
const sendButton = document.getElementById("send-button");
const chatboxBody = document.getElementById("chatbox-body");

var toggleOpen = document.getElementById("toggleOpen");
var toggleClose = document.getElementById("toggleClose");
var collapseMenu = document.getElementById("collapseMenu");

function handleClick() {
  if (collapseMenu.style.display === "block") {
    collapseMenu.style.display = "none";
  } else {
    collapseMenu.style.display = "block";
  }
}

toggleOpen.addEventListener("click", handleClick);
toggleClose.addEventListener("click", handleClick);

document.addEventListener("DOMContentLoaded", () => {
  // Elements for profile dropdown toggle
  const profileButton = document.querySelector(".profile-button");
  const profileDropdown = document.querySelector(".profile-dropdown");

  // Toggle profile dropdown (Click-based for better mobile usability)
  if (profileButton && profileDropdown) {
    profileButton.addEventListener("click", (event) => {
      event.stopPropagation(); // Prevent clicking outside from closing immediately
      profileDropdown.classList.toggle("hidden");
    });

    // Close dropdown when clicking outside
    document.addEventListener("click", (event) => {
      if (
        !profileButton.contains(event.target) &&
        !profileDropdown.contains(event.target)
      ) {
        profileDropdown.classList.add("hidden");
      }
    });
  }
});
// adminForm.addEventListener("submit", async (e) => {
//   e.preventDefault();
//   const formData = new FormData(adminForm);

//   const response = await fetch("register_admin.php", {
//     method: "POST",
//     body: formData,
//   });

//   const result = await response.text();
//   alert(result);
//   adminRegistration.classList.add("hidden");
// });

// Admin Login Form
const adminRegisterToggle = document.getElementById("admin-register-toggle");
// Add a click event listener to the button
adminRegisterToggle.addEventListener("click", function () {
  // Redirect to the admin_login.html page when the button is clicked
  window.location.href = "admin_login.html"; // Use your relative path here if needed
});

// Toggle chatbox visibility
chatBubble.addEventListener("click", () => {
  chatbox.style.display = "flex";
  chatBubble.style.display = "none";
});

closeChatbox.addEventListener("click", () => {
  chatbox.style.display = "none";
  chatBubble.style.display = "flex";
});

// Simulate chatbot response
sendButton.addEventListener("click", () => {
  const userMessage = chatInput.value.trim();
  if (userMessage) {
    const userMsgElement = `<div class="chat-message user">${userMessage}</div>`;
    chatboxBody.innerHTML += userMsgElement;

    setTimeout(() => {
      const botMessage = `<div class="chat-message bot">I’m here to help! What can I assist you with?</div>`;
      chatboxBody.innerHTML += botMessage;
      chatboxBody.scrollTop = chatboxBody.scrollHeight;
    }, 1000);

    chatInput.value = "";
  }
});
