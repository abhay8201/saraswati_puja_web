function changeContent(page) {
  const contentDiv = document.getElementById("content");

  // Map each page to a corresponding HTML file
  const pageFiles = {
    initiative: "initiative.php",
    info: "info.php",
    blog: "blog.php",
    contact: "contact.php",
  };

  // Check if the page exists in the mapping
  if (pageFiles[page]) {
    // Fetch the content from the corresponding HTML file
    fetch(pageFiles[page])
      .then((response) => {
        if (!response.ok) {
          throw new Error(`Page not found: ${page}`);
        }
        return response.text();
      })
      .then((html) => {
        contentDiv.innerHTML = html; // Load the HTML content into the div
      })
      .catch((error) => {
        contentDiv.innerHTML = `<h2>Error loading page: ${error.message}</h2>`;
      });
  } else {
    // Default content for unknown pages
    contentDiv.innerHTML = "<h2>Page not found!</h2>";
  }
}

// document.getElementById("playButton").addEventListener("click", function () {
//   document.getElementById("audioElement").play();
// });

// document.getElementById("pauseButton").addEventListener("click", function () {
//   document.getElementById("audioElement").pause();
// });

const audio = document.getElementById("audioElement");
const notice = document.getElementById("autoplayNotice");

function playAudio() {
  audio.play().catch(() => {
    notice.style.display = "block";
  });
}

window.addEventListener("load", playAudio);
document.addEventListener("click", () => {
  notice.style.display = "none";
  audio.play();
});
