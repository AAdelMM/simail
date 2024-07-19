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

//menu


document.addEventListener('DOMContentLoaded', function () {
  const burgerButton = document.getElementById('burger-button');
  const mobileMenu = document.querySelector('.mobile-menu');
  const body = document.body;

  // Toggle the mobile menu
  burgerButton.addEventListener('click', function () {
      mobileMenu.classList.toggle('active');
  });

  // Close the mobile menu when clicking outside
  document.addEventListener('click', function (event) {
      // Check if the click was outside the mobile menu and the burger button
      if (!mobileMenu.contains(event.target) && !burgerButton.contains(event.target)) {
          mobileMenu.classList.remove('active');
      }
  });
});

