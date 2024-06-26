// GET ELEMENT
const btnOpenSidebar = document.getElementById("btn-open-sidebar");
const btnCloseSidebar = document.getElementById("btn-close-sidebar");
const sidebar = document.getElementById("sidebar");

// EVENT LISTENER
btnOpenSidebar.addEventListener("click", () => {
    sidebar.classList.remove("-right-full");
    sidebar.classList.add("right-0");
});

btnCloseSidebar.addEventListener("click", () => {
    sidebar.classList.remove("right-0");
    sidebar.classList.add("-right-full");
});
