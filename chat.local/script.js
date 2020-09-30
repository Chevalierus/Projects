//Открыть контакты
var buttonOpencontact = document.querySelector('#open_contacts');
buttonOpencontact.onclick = function() {
	var contactModal = document.querySelector('#contacts-modal');
	contactModal.style.display = 'block';
}

var closeButton = document.querySelector('#contacts-modal .close');
closeButton.onclick = function() {
	var contactModal = document.querySelector('#contacts-modal');
	contactModal.style.display = 'none';
}

//Открыть окно с вводом пароля
var buttonOpenautho = document.querySelector('#open_autho');
buttonOpenautho.onclick = function() {
	var contactAuth = document.querySelector('#autho-modal');
    contactAuth.style.display ='block';
}

var closebuttonAutho = document.querySelector('#autho-modal .zakrit');
closebuttonAutho.onclick = function() {
	var contactAuth = document.querySelector('#autho-modal');
	contactAuth.style.display = 'none';
}

function addFriend(element) {
var ssylka = element.dataset.ssylka;
var ajax = new XMLHttpRequest();
ajax.open("GET", ssylka, false);
ajax.send();
var friendList = document.querySelector("#friend-list");
friendList.innerHTML = ajax.response;
}


var form = document.querySelector("#form");
form.onsubmit = function(sobitiye){
	var to = form.querySelector("input[name='to_user_id']");
	var from = form.querySelector("input[name='from_user_id']");
	var message = form.querySelector("textarea");

	var dannie = "sendmessage=1" +
					"&to_user_id=" + to.value +
					"&from_user_id=" + from.value +
					"&message=" + message.value;

var ajax = new XMLHttpRequest();
ajax.open("POST", form.action, false);
ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
ajax.send(dannie);
var messageShow = document.querySelector("#message-show");
    messageShow.innerHTML = ajax.response; 

}	
