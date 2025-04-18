const toggleBtn = document.getElementById('toggleBtn');
const sidebar = document.getElementById('sidebar');
const container = document.querySelector('.container');
const navItems = document.querySelectorAll('.nav-item');

toggleBtn.addEventListener('click', () => {
  sidebar.classList.toggle('hidden');
  container.classList.toggle('sidebar-hidden');
});

// Menu aktif berganti + indikator muncul
navItems.forEach(item => {
  item.addEventListener('click', () => {
    navItems.forEach(i => i.classList.remove('active'));
    item.classList.add('active');
  });
});
