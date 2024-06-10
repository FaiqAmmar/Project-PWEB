document.getElementById('dataInput').addEventListener('keydown', function(event) {
  if (event.key === 'Enter') {
      event.preventDefault();  // Prevent the default new line behavior
      let cursorPos = this.selectionStart;
      let textBeforeCursor = this.value.substring(0, cursorPos);
      let textAfterCursor = this.value.substring(cursorPos);

      // Insert the column line indicator (e.g., a tab or specific character)
      this.value = textBeforeCursor + '\n' + textAfterCursor;

      // Move the cursor to the new position after the inserted line break
      this.selectionStart = this.selectionEnd = cursorPos + 1;
  }
});