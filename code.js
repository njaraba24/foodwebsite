const corousel = document.querySelector('.companies');
const images = companies.children;

for (let i = 0; i < images.length; i++){
    const clone  = images[i].cloneNode(true);
    corousel.appendChild(clone);

}