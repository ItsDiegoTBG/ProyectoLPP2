document.addEventListener('DOMContentLoaded', function() {

    const moreInfoBtns = document.querySelectorAll('.more-info-btn');
    const infoPopups = document.querySelectorAll('.info-popup');
    
    moreInfoBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const targetId = this.getAttribute('data-target');
            const targetPopup = document.getElementById(targetId);
            targetPopup.style.display = 'flex'; 
        });
    });

    infoPopups.forEach(popup => {
        const closePopup = popup.querySelector('.close-popup');
        
        closePopup.addEventListener('click', function() {
            popup.style.display = 'none';
        });

        window.addEventListener('click', function(event) {
            if (event.target === popup) {
                popup.style.display = 'none'; 
            }
        });
    });
});