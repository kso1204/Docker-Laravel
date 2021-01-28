const form = document.querySelector(".js-form");
const input = form.querySelector("input");
const greeting = document.querySelector(".js-greetings");

//local storage 너의 유저 컴퓨터에 저장하는 방법? 

//쿼리셀렉터올은 찾은 모든것

const USER_LS = "currentUser";
const SHOWING_CN = "showing";

function saveName(text){
    localStorage.setItem(USER_LS, text);
}


function handleSubmit(event){
    //preventDefault event가 발생하면 root에서 일어나고 form에서 일어난다 
    //event는 거품과 같다?
    //올라가면서 모든 것들이 event에 반응한다.
    //form 을 제출하면 이벤트는 올라가서 document까지 올라가고 ~ ?
    
    event.preventDefault();
    //원래 기본폼에서 enter를 누르면 폼이 어디론가 날라가면서 새로고침 되는데,
    // 이 명령어를 작성하면 enter를 눌러도 멈춰있다. 새로고침이 X
    //이벤트가 금지 X 기본동작 막는 1단계

    const currentValue = input.value;
    
    paintGreeting(currentValue);
    saveName(currentValue);


}

function askForName(){
    form.classList.add(SHOWING_CN);
    form.addEventListener("submit",handleSubmit);
}

function paintGreeting(text){
    form.classList.remove(SHOWING_CN);
    greeting.classList.add(SHOWING_CN);
    greeting.innerText = `Hello ${text}`;
}

function loadName(){
    const currentUser = localStorage.getItem(USER_LS);
    if(currentUser === null){
        // he is not
        askForName();
    } else {
        // he is
        paintGreeting(currentUser);
    }
}

function init(){
    loadName();
}

init();