function showAlert(message) {window.onload = function () {alert(message);};}

function atualizarRelogio() {
    const agora = new Date();
    const horas = String(agora.getHours()).padStart(2, '0');
    const minutos = String(agora.getMinutes()).padStart(2, '0');
    const segundos = String(agora.getSeconds()).padStart(2, '0');
    const horarioAtual = `${horas}:${minutos}:${segundos}`;
    document.getElementById('relogio').innerText = horarioAtual;
}
setInterval(atualizarRelogio, 1000);
atualizarRelogio();

  
  function toggleMenu() {
    const sidebar = document.getElementById('abrirmenu');
    
    if (sidebar.style.left === '-250px' || sidebar.style.left === '') {
      sidebar.style.left = '0'; // Abre o menu
    } else {
      sidebar.style.left = '-250px'; // Fecha o menu
    }
  }