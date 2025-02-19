
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
    const mobileMenu = document.getElementById("mobile-menu")

    hamburger.addEventListener("click", () => {
        mobileMenu.classList.toggle("h-[0px]")
        mobileMenu.classList.toggle("overflow-hidden")
    })

}