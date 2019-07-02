const heeftSubmenu = document.querySelectorAll('.menu-item-has-children');


for(let i=0; i<heeftSubmenu.length; i++) {
  const submenu = heeftSubmenu[i].querySelector('.sub-menu');
  console.log(submenu);
  const linkSubMenu = heeftSubmenu[i].querySelector('a');
  submenu.classList.toggle('menu-verbergen');

  // als er op een linkje wordt geklikt dan moet de class worden toegevoegd of verwijderd
  linkSubMenu.addEventListener('click', (e) => {
    e.preventDefault();
    console.log(' er wordt nu geklikt op mij');
    submenu.classList.toggle('menu-verbergen');
    linkSubMenu.classList.toggle('menu-is-open');
  })
}


// placeholder text and type
// stop de input search in een var
let zoekVenster = document.getElementById('s');
zoekVenster.setAttribute('placeholder', 'Zoeken...');
zoekVenster.setAttribute('type', 'search');
