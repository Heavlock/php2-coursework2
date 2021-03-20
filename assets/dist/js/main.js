// document.addEventListener('DOMContentLoaded', () => {
const tabLinks = document.querySelector('.nav.nav-tabs'),
    tabsAll = document.getElementsByClassName('tab-pane'),
    tabLi = tabLinks.getElementsByTagName('li');
tabLinks.addEventListener('click', (event) => {
    event.preventDefault();
    if (event.target.getAttribute('href')) {
        for (let activeLink of tabLi){
            if (activeLink === event.target.closest('li')){
                if (!activeLink.className.includes('active')){
                 activeLink.classList.add('active')
                }
            }
            else {
                activeLink.classList.remove('active');
            }
        }
        for (let tab of tabsAll) {
            if (tab.id === event.target.getAttribute('href').replace('#', '')) {
                if (!tab.className.includes('active')) {
                    tab.classList.add('in');
                    tab.classList.add('active');
                }
            } else {
                tab.classList.remove('in');
                tab.classList.remove('active');
            }
        }
    }
});
