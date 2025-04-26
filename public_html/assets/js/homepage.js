function handleCheckboxClick(clickedRadio) {
    // Remove "selectedElement" from all labels
    document.querySelectorAll('.selectOptionsHowHelpUsignle').forEach(label => {
        label.classList.remove('selectedElement');
    });

    // Hide all content boxes
    document.querySelectorAll('.content-box').forEach(box => {
        box.style.display = 'none';
    });

    // Add "selectedElement" to the parent label
    const label = clickedRadio.closest('label');
    if (label) {
        label.classList.add('selectedElement');
    }

    // Show the corresponding content box
    const value = clickedRadio.value;
    document.getElementById(`${value}-content`).style.display = 'block';
}


window.addEventListener('DOMContentLoaded', () => {
    const defaultRadio = document.querySelector('input[name="pickup-option"]:checked');
    if (defaultRadio) handleCheckboxClick(defaultRadio);
});
