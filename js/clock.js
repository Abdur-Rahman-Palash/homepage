function updateClock() {
    const now = new Date();
    const clock = document.getElementById('clock');
    const gregorianDate = document.getElementById('gregorian-date');
    const islamicDate = document.getElementById('islamic-date');
    
    if (clock && gregorianDate && islamicDate) {
        // Update clock
        clock.textContent = now.toLocaleTimeString();
        
        // Update Gregorian date
        const options = { 
            weekday: 'long', 
            year: 'numeric', 
            month: 'long', 
            day: 'numeric' 
        };
        gregorianDate.textContent = now.toLocaleDateString('en-US', options);
        
        // Update Islamic date
        const islamicFormatter = new Intl.DateTimeFormat('en-US-u-ca-islamic', {
            month: 'long',
            day: 'numeric',
            year: 'numeric'
        });
        islamicDate.textContent = islamicFormatter.format(now);
    }
    
    setTimeout(updateClock, 1000);
}

document.addEventListener('DOMContentLoaded', updateClock);