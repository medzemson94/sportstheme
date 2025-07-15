function cmSportyCopyCode(code, button) {
    if (navigator.clipboard) {
        navigator.clipboard.writeText(code).then(() => {
            button.textContent = '✓';
            button.style.background = '#4caf50';
            setTimeout(() => {
                button.textContent = '📋';
                button.style.background = '#1a237e';
            }, 2000);
        }).catch(err => {
            console.error('Erreur lors de la copie: ', err);
            cmSportyFallbackCopy(code, button);
        });
    } else {
        cmSportyFallbackCopy(code, button);
    }
}

function cmSportyFallbackCopy(code, button) {
    const textArea = document.createElement('textarea');
    textArea.value = code;
    textArea.style.position = 'fixed';
    textArea.style.left = '-999999px';
    textArea.style.top = '-999999px';
    document.body.appendChild(textArea);
    textArea.focus();
    textArea.select();
    
    try {
        document.execCommand('copy');
        button.textContent = '✓';
        button.style.background = '#4caf50';
        setTimeout(() => {
            button.textContent = '📋';
            button.style.background = '#1a237e';
        }, 2000);
    } catch (err) {
        console.error('Fallback copy failed: ', err);
        alert('Code copié: ' + code);
    }
    
    document.body.removeChild(textArea);
}

// Initialize when DOM is ready
document.addEventListener('DOMContentLoaded', function() {
    // Add any initialization code here if needed
    console.log('CM Sporty Bookmakers block loaded');
});