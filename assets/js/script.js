
document.addEventListener("DOMContentLoaded", () => {
  const burger = document.getElementById('nav-burger')
  const nav = document.getElementById('navigation-mobile')


  const toggleMobileMenu = () => {

    if (burger.classList.contains('burger-expand')) {
      burger.classList.remove('burger-expand')
      nav.classList.add('collapsed')
    } else {
      burger.classList.add('burger-expand')
      nav.classList.remove('collapsed')
    }
  }
  console.log('LOADIT')
  burger.addEventListener('touchstart', () => {
    console.log('hellloo')
    toggleMobileMenu()
  })
})