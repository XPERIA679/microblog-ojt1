function preventButtonMashing(button, delay = 4000) {
    button.disabled = true;
    let originalContent = button.textContent;
    button.form.submit();
    button.textContent = "Loading...";

    setTimeout(() => {
        button.disabled = false;
        button.textContent = originalContent;
    }, delay);
}
