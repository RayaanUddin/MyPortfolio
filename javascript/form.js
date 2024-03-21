// Reset form confirmation
var resetButton = document.querySelector('input[type="reset"]') !== null;
if (resetButton) {
    document.querySelector('input[type="reset"]').addEventListener('click', function(e) {
        let confirm = window.confirm('Are you sure you want to reset the form?');
        if (confirm) {
            document.querySelector('form').reset();
            console.log('Form reset');
            document.querySelector('input[type="text"]').focus();
    
        } else {
            e.preventDefault();
        }
    });
}
