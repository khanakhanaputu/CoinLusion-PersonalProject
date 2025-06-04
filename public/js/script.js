function toggleMenu() {
    const menu = document.getElementById('nav-menu');
    const openIcon = document.getElementById('icon-open');
    const closeIcon = document.getElementById('icon-close');
    menu.classList.toggle('hidden');
    openIcon.classList.toggle('hidden');
    closeIcon.classList.toggle('hidden');
  }