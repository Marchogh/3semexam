const navToggle = document.querySelector('.menu-button')
const nav = document.querySelector('nav')

navToggle.addEventListener('click', _ => {
 document.body.classList.toggle('nav-is-open')
})

nav.addEventListener('click', _ => {
    document.body.classList.remove('nav-is-open')
})



