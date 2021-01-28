const body = document.querySelector("body");

const IMG_NUMBER = 5;
/* 
function handleImageLoad(){
    console.log("finished Image");
} */

function paintImage(imgNumber){
    const image = new Image();
    //image.src = `/images/${imgNumber +1 }.jpg`;
    image.src = `images/${imgNumber}.jpg`;
    image.classList.add("bgImage");
    body.appendChild(image);
    //image.addEventListener("loadend",handleImageLoad)
}

function genRandom(){
    const number = Math.ceil(Math.random() * IMG_NUMBER);//ceil 천장 floor 바닥 (올림, 내림) 
    return number;
}

function init(){
    const randomNumber = genRandom();
    paintImage(randomNumber);
}

init();