// Copyright Show/Hide
let inputOne = document.getElementById('inputOne');
let inputTwo = document.getElementById('inputTwo');
let copyright = document.getElementById('copy');

if (window.innerWidth <= 768) {
    inputOne.addEventListener('click', function () {
        copyright.style.display = 'none';
    })
    inputTwo.addEventListener('click', function () {
        copyright.style.display = 'none';
    })
}