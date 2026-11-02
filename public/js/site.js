document.addEventListener("DOMContentLoaded", function () {
    const messageField = document.getElementById("message");
    const messageCounter = document.getElementById("message-counter");

    // Stop if this page does not contain the message field.
    if (!messageField || !messageCounter) {
        return;
    }

    // Read the character limit from the textarea.
    const maxLength = Number(messageField.maxLength);

    // Update the character count.
    function updateMessageCounter() {
        const currentLength = messageField.value.length;

        messageCounter.textContent =
            `${currentLength} / ${maxLength} characters`;
    }

    // Update whenever the customer types or deletes text.
    messageField.addEventListener("input", updateMessageCounter);

    // Show the correct count when the page first loads.
    updateMessageCounter();
});