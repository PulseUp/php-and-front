function ValidMail() {
    let re = /^[\w-\.]+@[\w-]+\.[a-z]{2,4}$/i;
    let myMail = document.getElementById('email').value;
    let valid = re.test(myMail);
    if (valid) {
        alert('Спасибо за подписку!');
        document.getElementById('email').value=''
    }
    else output = 'Адрес электронной почты введен неправильно!';
    document.getElementById('message').innerHTML = output;
    return valid;
}


let frm = $('#form');
frm.submit(function (e) {
    e.preventDefault();
    $.ajax({
        type: frm.attr('method'),
        url: frm.attr('action'),
        data: frm.serialize(),
        success: function (data) {
            console.log('Отправка успешна');
            console.log(data);
        },
        error: function (data) {
            console.log('Ошибочка');
            console.log(data);
        },
    });
});