const textInput = document.getElementById('note');
const charCount = document.getElementById('show-remaining-characters');

textInput.addEventListener('input', () => {
    const count = textInput.value.length;
    charCount.textContent = `${count}/2500`
})