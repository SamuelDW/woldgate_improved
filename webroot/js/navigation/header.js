const menuItems = document.querySelectorAll('[role="menubar"')
const hamburger = document.querySelector('.hamburger')
const navigationMenu = document.querySelector('nav')

hamburger.addEventListener('click', () => {
    const isVisible = navigationMenu.getAttribute('aria-hidden') != 'false'
    const isExpanded = navigationMenu.getAttribute('aria-expanded') == 'false'
    navigationMenu.setAttribute('aria-hidden', isVisible ? 'false' : 'true')
    navigationMenu.setAttribute('aria-expanded', isExpanded ? 'true' : 'false')
})

hamburger.addEventListener('keydown', (e) => {
    if (e.key !== 'Enter') return
    
    const isVisible = navigationMenu.getAttribute('aria-hidden') != 'false'
    const isExpanded = navigationMenu.getAttribute('aria-expanded') == 'false'
    navigationMenu.setAttribute('aria-hidden', isVisible ? 'false' : 'true')
    navigationMenu.setAttribute('aria-expanded', isExpanded ? 'true' : 'false')
})

menuItems.forEach(menuItem => {
    menuItem.addEventListener('click', () => {
        const dropdown = menuItem.querySelector('ul')
        if (!dropdown) return 
        const isExpanded = dropdown.getAttribute('aria-expanded') != 'false'
        dropdown.setAttribute('aria-expanded', isExpanded ? 'false' : 'true')
    })

    menuItem.addEventListener('keydown', (e) => {
        if (e.key !== 'Enter') return
        const dropdown = menuItem.querySelector('ul')

        if (!dropdown) return 

        const isExpanded = dropdown.getAttribute('aria-expanded') != 'false'
        dropdown.setAttribute('aria-expanded', isExpanded ? 'false' : 'true')
    })
})