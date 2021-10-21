/**
 * Toggles showing the navigation dropdown
 */
function navigationDropdown() {
    let dropdown = document.querySelector('#myDropdown');
    dropdown.classList.toggle('show')
}
document.querySelector('#hamburger-menu').addEventListener('click', function () {
    navigationDropdown();
});
