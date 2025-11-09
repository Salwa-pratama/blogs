const nav = document.querySelector(".nav-container");
const hamburger = document.querySelector(".hamburger-menu");

hamburger.addEventListener("click", () => {
  nav.classList.toggle("nav-active");
  console.log("hamburger di klik");
});
