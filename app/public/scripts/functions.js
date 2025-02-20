
function loadOnNotesPage() {

    const textInput = document.getElementById('note');
    const charCount = document.getElementById('show-remaining-characters');

    textInput.addEventListener('input', () => {
        const count = textInput.value.length;
        charCount.textContent = `${count}/2500`
    })

}

function editNote($textareaID, $clickedButtonID, $showButtonID) {

    const textarea = document.getElementById($textareaID);
    const clickedButton = document.getElementById($clickedButtonID);
    const showButton = document.getElementById($showButtonID);

    textarea.removeAttribute("disabled");
    clickedButton.setAttribute("hidden", "");
    showButton.removeAttribute("hidden");
    
}

function navMenu(){

    const hamburger = document.getElementById("hamburger")
    const cross = document.getElementById("cross")
    const mobileMenu = document.getElementById("mobile-menu")

    hamburger.addEventListener("click", () => {
        cross.classList.toggle("hidden")
        hamburger.classList.toggle("hidden")
        mobileMenu.classList.remove("h-[0px]")
        mobileMenu.classList.add("h-[200px]")
        mobileMenu.classList.add("pb-3")
    })
    
    cross.addEventListener("click", () => {
        cross.classList.toggle("hidden")
        hamburger.classList.toggle("hidden")
        mobileMenu.classList.remove("h-[200px]")
        mobileMenu.classList.add("h-[0px]")
        mobileMenu.classList.remove("pb-3")
    })

}