"use strict";

window.addEventListener("load", function (event) {
  var allServiceCards = document.querySelectorAll('.service-card');
  allServiceCards.forEach(function (card) {
    card.addEventListener('click', function () {
      card.classList.toggle('service-card--active');
    });
  });
  var callButton = document.querySelector('.call-button');
  var modalWindow = document.querySelector('.modal-callback');
  callButton.addEventListener('click', function () {
    modalWindow.classList.remove('js-hide');
    document.querySelector('body').classList.add('modal-opened');
  });
  modalWindow.addEventListener('click', function (event) {
    if (event.target === modalWindow) {
      modalWindow.classList.add('js-hide');
      document.querySelector('body').classList.remove('modal-opened');
    }
  });
});