const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");
const sign_in_btn2 = document.querySelector("#sign-in-btn2");
const sign_up_btn2 = document.querySelector("#sign-up-btn2");

// Estrutura de dados simulada para armazenar usuários registrados
let registeredUsers = JSON.parse(localStorage.getItem('registeredUsers')) || [];

sign_up_btn.addEventListener("click", () => {
    container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
    container.classList.remove("sign-up-mode");
});

sign_up_btn2.addEventListener("click", () => {
    container.classList.add("sign-up-mode2");
});

sign_in_btn2.addEventListener("click", () => {
    container.classList.remove("sign-up-mode2");
});

// Função para registro de usuário
function signUp(username, email, password) {
  registeredUsers.push({ username, email, password });
  localStorage.setItem('registeredUsers', JSON.stringify(registeredUsers));
  alert('Registro bem-sucedido! Você já pode fazer login.');
  container.classList.remove("sign-up-mode");
}

// Função para login de usuário
function signIn(email, password) {
  const user = registeredUsers.find(u => u.email === email && u.password === password);
  return user;
}

// Lidar com o envio do formulário de registro
document.querySelector('.sign-up-form').addEventListener('submit', function(event) {
  event.preventDefault();
  const username = this.querySelector('input[name="username"]').value;
  const email = this.querySelector('input[name="email"]').value;
  const password = this.querySelector('input[name="password"]').value;

  if (!username || !email || !password) {
    alert('Por favor, preencha todos os campos corretamente.');
    return;
  }

  signUp(username, email, password);
});

// Lidar com o envio do formulário de login
document.querySelector('.sign-in-form').addEventListener('submit', function(event) {
  event.preventDefault();
  const signInEmail = this.querySelector('input[name="email"]').value;
  const signInPassword = this.querySelector('input[name="password"]').value;

  if (!signInEmail || !signInPassword) {
    alert('Por favor, preencha todos os campos corretamente.');
    return;
  }

  const user = signIn(signInEmail, signInPassword);

  if (user) {
    alert(`Bem-vindo, ${user.username}!`);
    // Redirecionar para a página principal
    window.location.href = "index.html";
  } else {
    alert('Credenciais inválidas. Por favor, tente novamente.');
  }
});
