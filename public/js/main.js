document.addEventListener('DOMContentLoaded', () => {
  const video = document.getElementById('myVideo');
  const muteButton = document.getElementById('muteButton');

  muteButton.addEventListener('click', () => {
    video.muted = !video.muted;
    muteButton.textContent = video.muted ? 'Unmute' : 'Mute';
  });
});

document.addEventListener('DOMContentLoaded', () => {
  const moreLink = document.querySelector('.more-link');
  const subMenu = document.querySelector('.sub-menu');

  moreLink.addEventListener('click', () => {
    subMenu.classList.toggle('hidden');
  });
});