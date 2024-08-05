document.addEventListener('DOMContentLoaded', () => {
    const video = document.getElementById('myVideo');
    const muteButton = document.getElementById('muteButton');
  
    muteButton.addEventListener('click', () => {
      video.muted = !video.muted;
      muteButton.textContent = video.muted ? 'صوت' : 'كتم الصوت';
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
  
  
  // Function to check if the element is in the viewport
  function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }
  
  // Function to handle animation by adding/removing classes
  function handleScroll() {
    const elements = document.querySelectorAll('.fade-in');
    elements.forEach(element => {
        if (isInViewport(element)) {
            element.classList.remove('hidden');
            element.classList.add('animate');
        } else {
            element.classList.add('hidden');
            element.classList.remove('animate');
        }
    });
  }
  
  // Debounce function to limit the rate of scroll event handling
  function debounce(func, wait) {
    let timeout;
    return function(...args) {
        clearTimeout(timeout);
        timeout = setTimeout(() => func.apply(this, args), wait);
    };
  }
  
  // Attach the scroll event listener
  window.addEventListener('scroll', debounce(handleScroll, 100));
  
  // Initial check in case the section is already in view
  handleScroll();
  
  //carousel
  
  document.addEventListener('DOMContentLoaded', () => {
    const carouselItems = document.querySelectorAll('.carousel-item');
    let currentIndex = 0;
    const intervalTime = 20000; // Change the item every 10 seconds
  
    // Ensure the first item is visible
    carouselItems[currentIndex].classList.remove('hidden');
  
    function showItem(index) {
        carouselItems[currentIndex].classList.add('hidden');
        currentIndex = index;
        carouselItems[currentIndex].classList.remove('hidden');
    }
  
    function showNextItem() {
        showItem((currentIndex + 1) % carouselItems.length);
    }
  
    function showPrevItem() {
        showItem((currentIndex - 1 + carouselItems.length) % carouselItems.length);
    }
  
    document.getElementById('next').addEventListener('click', showNextItem);
    document.getElementById('prev').addEventListener('click', showPrevItem);
  
    setInterval(showNextItem, intervalTime); // Automatically change the item every intervalTime milliseconds
  });
  
  
  