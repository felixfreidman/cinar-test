window.addEventListener("load", (event) => {
    const allServiceCards = document.querySelectorAll('.service-card');
    allServiceCards.forEach(card => {
        card.addEventListener('click', () => {
            card.classList.toggle('service-card--active')
        })
    })

    const callButton = document.querySelector('.call-button');
    const modalWindow = document.querySelector('.modal-callback')
    callButton.addEventListener('click', () => {
        modalWindow.classList.remove('js-hide')
        document.querySelector('body').classList.add('modal-opened')
    })
    modalWindow.addEventListener('click', (event) => {
        if (event.target === modalWindow) {
            modalWindow.classList.add('js-hide')
            document.querySelector('body').classList.remove('modal-opened')
        }
    })
});

