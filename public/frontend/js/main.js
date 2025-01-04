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

                } else {
                    paragraph.style.maxHeight = "0";
                    paragraph.style.opacity = "0";
                    image.style.height = "40px";
                }
            } else {
                // إغلاق العناصر الأخرى
                paragraph.style.maxHeight = "0";
                paragraph.style.opacity = "0";
                image.style.height = "40px";
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

let box = document.querySelector('.box');

// حركة الماوس لتدوير الصندوق
window.onmousemove = function (e) {
    let x = (e.clientX - window.innerWidth / 2) / 10; // تحريك بزاوية بناءً على موضع الماوس
    box.style.transform = `perspective(1000px) rotateY(${x}deg)`;
};

// تعيين زوايا دوران لكل عنصر داخل الصندوق
const spans = document.querySelectorAll('.box span');
spans.forEach((span, index) => {
    span.style.setProperty('--rotation', index); // تعيين قيمة الدوران
});





let boxColor = document.querySelector('.boxColor div');
console.log(boxColor);

boxColor.addEventListener('mouseenter', () => {
    box.style.background = 'linear-gradient(135deg, #665DCD 0%, #5FA4E6 44.76%, #D2AB67 100%)';
});

boxColor.addEventListener('mouseleave', () => {
    box.style.background = 'red';
});
