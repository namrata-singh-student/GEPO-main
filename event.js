const items = document.querySelectorAll("#timeline li");
const container = document.querySelector(".calender"); // Reference to your scrollable container

const isInViewport = (el) => {
  const rect = el.getBoundingClientRect();
  const containerRect = container.getBoundingClientRect(); // Get dimensions of the scrollable container

  return (
    rect.top >= containerRect.top &&
    rect.left >= containerRect.left &&
    rect.bottom <= containerRect.bottom &&
    rect.right <= containerRect.right
  );
};

const run = () =>
  items.forEach((item) => {
    if (isInViewport(item)) {
      item.classList.add("show");
    } /*else {
      item.classList.remove("show"); // Optional: Remove "show" class if not in view
    }*/
  });

// Events
window.addEventListener("load", run);
container.addEventListener("scroll", run); // Listen for scroll events on the container
