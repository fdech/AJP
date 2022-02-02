// accordion

let accFAQ = document.querySelectorAll('.main-faq--accordion')

let i

for (i = 0; i < accFAQ.length; i++) {
    accFAQ[i].addEventListener('click', function() {
        this.classList.toggle('acc--active');
        let faqPanel = this.nextElementSibling;
        if (faqPanel.style.maxHeight) {
            faqPanel.style.maxHeight = null
        } else {
            faqPanel.style.maxHeight = faqPanel.scrollHeight + 'px'
        }
    })
}

// modal

const modalLink = document.querySelectorAll(".ask-button");
const modalPopup = document.querySelector(".modal--ask");
const modalClose = modalPopup.querySelector(".modal--close");

for (i = 0; i < modalLink.length; i++) {
    modalLink[i].addEventListener("click", function (evt) {
        evt.preventDefault()
        modalPopup.classList.add("modal--show")
    });
} 

modalClose.addEventListener('click', function (evt) {
    evt.preventDefault()
    modalPopup.classList.remove('modal--show')
})

window.addEventListener("keydown", function (evt) {
    if (evt.keyCode === 27) {
      if (modalPopup.classList.contains("modal--show")) {
        evt.preventDefault();
        modalPopup.classList.remove("modal--show");
      }
    }
  });

// menu mobile

let navMain = document.querySelector('.main-nav');
let navToggle = document.querySelector('.main-nav__toggle'); 

navToggle.addEventListener('click', function() {
    if (navMain.classList.contains('main-nav--closed')) {
      navMain.classList.remove('main-nav--closed');
      navMain.classList.add('main-nav--opened');
    } else {
      navMain.classList.add('main-nav--closed');
      navMain.classList.remove('main-nav--opened');
    }
  });