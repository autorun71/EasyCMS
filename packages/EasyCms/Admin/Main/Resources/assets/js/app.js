// import './bootstrap';

document.addEventListener('DOMContentLoaded', function () {
    const hideChildLeftSidebarClose = document.querySelector('.close-menu')

    hideChildLeftSidebarClose.addEventListener('click', function (e) {
        console.log(e.currentTarget.closest('.left-menu-children'))
        const hideChildLeftSidebar = e.currentTarget.closest('.left-menu-children')
        const tabsUl = document.querySelector('.tabs ul');
        let hideChildLeftSidebarVisibility = hideChildLeftSidebar.style.width;

        if (hideChildLeftSidebarVisibility === '10px') {
            hideChildLeftSidebar.style.width = ''
            hideChildLeftSidebarClose.querySelector('span').innerHTML = '<<'
            if (tabsUl) {
                tabsUl.style.width = '';
            }

        } else {
            hideChildLeftSidebar.style.width = '10px'
            hideChildLeftSidebarClose.querySelector('span').innerHTML = '>>'
            if (tabsUl) {
                tabsUl.style.width = 'calc(100vw - 142px)';
            }

        }

    })
})
