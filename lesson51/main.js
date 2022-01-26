function sendForm(subject, message, email, elResult, requestURL) {
  const elMessage = encodeURIComponent(message.value);
  const elEmail = encodeURIComponent(email.value);
  const formData = 'message=' + elMessage + '&email=' + elEmail + '&subject=' + subject;
  const xhr = new XMLHttpRequest();
  xhr.open('POST', requestURL);
  xhr.responseType = 'json';
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhr.send(formData);

  xhr.onload = () => {
    console.log(xhr.status);
    if (xhr.status !== 200) {
      console.log(`Ошибка ${xhr.status}: ${xhr.statusText}`);
      return;
    }
    const response = xhr.response;
    // console.log(response);
    console.log(response);
    console.log(xhr.onprogress, 'onprogress');
    // elResult.innerHTML = <ul><li>Имя: <b>${response.elMessage}</b></li><li>Фамилия: <b>${response.elEmail}</b></li></ul>;
    xhr.onerror = function() {
      console.log("Запрос не удался");
    };
  }


  elResult.textContent = '...';
  console.log(xhr, 'status');
  console.log(formData);
}

const elForm = document.querySelector('form');

elForm.addEventListener('submit', (e) => {
  e.preventDefault();
  const subject = document.querySelector('[name="subject"]').value;
  const elMessage = elForm.querySelector('[name="message"]');
  const elEmail = elForm.querySelector('[name="email"]');
  const elResult = document.querySelector('#result');
  const requestURL = elForm.action;
  sendForm(subject, elMessage, elEmail, elResult, requestURL);
});





  // при отправке формы

