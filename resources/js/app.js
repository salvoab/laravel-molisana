require('./bootstrap');

//Rimuovo la classe active dal link precedentemente attivo
document.querySelector('a.active').classList.remove('active');

const pathname = window.location.pathname;

if( pathname == '/'){
    document.querySelector('a[href="/"]').classList.add('active');
} else if (pathname == '/prodotti') {
    document.querySelector('a[href="prodotti"]').classList.add('active');
} else {
    document.querySelector('a[href="contatti"]').classList.add('active');
}