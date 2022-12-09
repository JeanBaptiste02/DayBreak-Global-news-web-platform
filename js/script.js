let navbar = document.querySelector('.navigbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
}  

let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
    navbar.classList.remove('active');
    cartItem.classList.remove('active');
}

let mapOptions = {
    center:[49.04295, 2.08466],
    zoom:10
}

let map = new L.map('map', mapOptions);

let layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
map.addLayer(layer);

let marker = new L.Marker([49.04295, 2.08466]);
marker.addTo(map);

