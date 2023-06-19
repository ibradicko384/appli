function logar() {
  var login = document.getElementById('login').value;
  var password = document.getElementById('password').value;
  if (login === 'admin' && password === 'admin123') {
    alert('Sucesso');
    location.href = 'home.html';
  } else {
    alert('Usuário ou senha incorretos');
  }
}
