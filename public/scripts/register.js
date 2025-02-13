// GET RANDOM IMAGE
let image = document.getElementById("side-image");
let num = Math.floor(Math.random() * 3 + 1);
image.setAttribute("src", `../../assets/images/write${num}.jpg`);

// CONTROL EYE SVG AND PASSWORD VISIBILITY
let closeEye = document.getElementById("close-eye");
let openEye = document.getElementById("open-eye");
let passwordField = document.getElementById("password");
let show = false;
closeEye.addEventListener("click", () => {
    closeEye.setAttribute("class", "hidden");
    openEye.setAttribute("class", "block cursor-pointer");
    passwordField.setAttribute("type", "text");
    openEye.addEventListener("click", () => {
        openEye.setAttribute("class", "hidden");
        closeEye.setAttribute("class", "block cursor-pointer");
        passwordField.setAttribute("type", "password");
    })
})