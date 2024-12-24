// // Get the menu element
// const menu = document.getElementById('menu');
// let lastScrollY = window.scrollY;
// let ticking = false;

// // Constants
// const SCROLL_THRESHOLD = 100;
// const MENU_HEIGHT = 66;
// const BOTTOM_THRESHOLD = 10;

// function updateMenuPosition() {
//   const scrollY = window.scrollY;
//   const documentHeight = document.documentElement.scrollHeight;
//   const windowHeight = window.innerHeight;
//   const isAtBottom = scrollY + windowHeight >= documentHeight - BOTTOM_THRESHOLD;

//   // Reset at top
//   if (scrollY < SCROLL_THRESHOLD) {
//     menu.classList.remove('active');
//     menu.style.position = '';
//     menu.style.top = '';
//     return;
//   }

//   // Handle bottom of page
//   if (isAtBottom) {
//     menu.classList.remove('active');
//     menu.style.position = 'absolute';
//     menu.style.top = `${documentHeight - MENU_HEIGHT}px`;
//     return;
//   }

//   // Normal scrolling behavior
//   menu.classList.add('active');
//   menu.style.position = 'fixed';
//   menu.style.top = '0';
// }

// // Optimized scroll handler
// window.addEventListener('scroll', () => {
//   lastScrollY = window.scrollY;
//   if (!ticking) {
//     window.requestAnimationFrame(() => {
//       updateMenuPosition();
//       ticking = false;
//     });
//     ticking = true;
//   }
// }, { passive: true });

// // Initial position check
// updateMenuPosition();


















// let icons = document.querySelector('.main .icons');
// let left = document.querySelector('.main .icon .main-icon.left');
// let right = document.querySelector('.main .icon .main-icon .right');




// document.addEventListener("DOMContentLoaded", function () {
//     let mainIcons = document.querySelectorAll('.main .icons .main-icon .iconimg');

//     mainIcons.forEach((icon) => {
//       if (icon.classList.contains("left")) {
//         icon.querySelectorAll('.image').forEach((img) => {
//           img.classList.add("animate-scrollLeft");
//         });
//       } else if (icon.classList.contains("right")) {
//         icon.querySelectorAll('.image').forEach((img) => {
//           img.classList.add("animate-scrollRight");
//         });
//       }
//     });
//   });

// document.addEventListener("DOMContentLoaded", function () {
//     const track = document.querySelector(".logos-track");
//     const logos = track.innerHTML; // احفظ المحتوى الحالي
//     track.innerHTML += logos; // أضف نسخة إضافية
//   });




