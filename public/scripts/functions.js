const textInput = document.getElementById('note');
const charCount = document.getElementById('show-remaining-characters');

textInput.addEventListener('input', () => {
    const count = textInput.value.length;
    charCount.textContent = `${count}/2500`
})

function editNote($textareaID, $clickedButtonID, $showButtonID){
    const textarea = document.getElementById($textareaID);
    const clickedButton = document.getElementById($clickedButtonID);
    const showButton = document.getElementById($showButtonID);

    textarea.removeAttribute("disabled");
    clickedButton.setAttribute("hidden", "");
    showButton.removeAttribute("hidden");
}