const toggleSidebar = (stat) => {
    let sideBar = document.querySelector('#sidebar');
    let overlay = document.querySelector('#overlay');

    if (stat) {
        sideBar.style.left = '0';
        overlay.style.visibility = 'visible';
        overlay.style.opacity = '1';
    } else {
        sideBar.style.left = '-100%';
        overlay.style.visibility = 'hidden';
        overlay.style.opacity = '0';
    }
}