// menu

// الحصول على العنصر
let menuButton = document.querySelector('.main div #menu');
console.log(menuButton);

// إضافة حدث التمرير
window.onscroll = function() {
  // التحقق من موضع التمرير
  if (window.scrollY >= 100) {  // إذا كان التمرير أكثر من 100px
    menuButton.classList.add('custom-btn');  // إضافة class عند التمرير
  } else {
    menuButton.classList.remove('custom-btn');  // إزالة class عند الرجوع للأعلى
  }
};



// accordion
let accordions = document.querySelectorAll(".accordon .accor");
let images = document.querySelectorAll(".accordon .accor .min .image img");
let icons = document.querySelectorAll(".accordon .accor .icon i");
let paragraphs = document.querySelectorAll(".accordon p");
let titles = document.querySelectorAll(".accordon .tit");

document.addEventListener("click", function (e) {
    let targetTitle = e.target.closest(".tit");

    if (targetTitle) {
        accordions.forEach((accordion, index) => {
            let paragraph = paragraphs[index];
            let icon = icons[index];
            let image = images[index];

            if (titles[index] === targetTitle) {
                const currentMaxHeight = window.getComputedStyle(paragraph).maxHeight;

                // تغيير حالة الفقرة
                if (currentMaxHeight === "0px" || !currentMaxHeight) {
                    paragraph.style.maxHeight = paragraph.scrollHeight + "px";
                    paragraph.style.opacity = "1";
                    image.style.height = "140px";
                    icon.style.transform = "rotate(315deg)"

                } else {
                    paragraph.style.maxHeight = "0";
                    paragraph.style.opacity = "0";
                    image.style.height = "40px";
                    icon.style.transform = "rotate(540deg)"

                }
            } else {
                // إغلاق العناصر الأخرى
                paragraph.style.maxHeight = "0";
                paragraph.style.opacity = "0";
                image.style.height = "40px";
                icon.style.transform = "rotate(540deg)"

            }
        });
    }
});

// here//

let mains = document.querySelectorAll(".Here-is-how .here .min");
let titless = document.querySelectorAll(".Here-is-how .here .tit");

titless.forEach((title, index) => {
  title.addEventListener("click", function () {
    mains.forEach((main, i) => {
      let paragraph = main.querySelector("p");

      if (i === index) {
        // إذا كان العنصر الحالي
        if (!main.classList.contains("activeTwo")) {
          // إظهار العنصر الحالي
          main.classList.add("activeTwo");
          paragraph.style.opacity = "1";
          paragraph.style.height = "100px";
        } else {
          // إخفاء العنصر إذا تم النقر عليه مجددًا
          paragraph.style.opacity = "0";
          paragraph.style.height = "0";

          setTimeout(() => {
            main.classList.remove("activeTwo");
          }, 500); // إزالة الفئة بعد انتهاء الانتقال
        }
      } else {
        // إخفاء العناصر الأخرى
        if (main.classList.contains("activeTwo")) {
          paragraph.style.opacity = "0";
          paragraph.style.height = "0";

          setTimeout(() => {
            main.classList.remove("activeTwo");
          }, 500); // إزالة الفئة بعد انتهاء الانتقال
        }
      }
    });
  });
});


// bbbbbbbbooooooooox// xxxxxxxxxx

// let box = document.querySelector('.box');

// // حركة الماوس لتدوير الصندوق
// window.onmousemove = function (e) {
//     let x = (e.clientX - window.innerWidth / 2) / 10; // تحريك بزاوية بناءً على موضع الماوس
//     box.style.transform = `perspective(1000px) rotateY(${x}deg)`;
// };

// // تعيين زوايا دوران لكل عنصر داخل الصندوق
// const spans = document.querySelectorAll('.box span');
// spans.forEach((span, index) => {
//     span.style.setProperty('--rotation', index); // تعيين قيمة الدوران
// });





// Services
let icon = document.querySelectorAll(".clients .angle i");
let boxOpinions = document.querySelectorAll(".clients .Opinions .all .boxOpinions");
let opinionsWrapper = document.querySelector(".clients .Opinions .all");

let currentIndex = 0;
let totalCards = boxOpinions.length;
console.log(totalCards);


document.addEventListener("click", function (el) {
    icon.forEach((ico) => {
    if (el.target === ico) {
      if (ico.classList.contains("left")) {

        if (currentIndex > 0) {
            currentIndex--;
            opinionsWrapper.style.transform = `translateX(${currentIndex * 524}px)`;
        }
    } else if (ico.classList.contains("right")) {
        if (currentIndex < totalCards - 5) { // Assuming 3 cards are visible
          currentIndex++;
          opinionsWrapper.style.transform = `translateX(${currentIndex * 524}px)`;
        }
      }
    }
  });
});


