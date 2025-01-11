// accordion
let accordions = document.querySelectorAll(".accordon .accor");
let images = document.querySelectorAll(".accordon .accor .min .image img");
let icons = document.querySelectorAll(".accordon .accor .icon i");
let paragraphs = document.querySelectorAll(".accordon p");
let titles = document.querySelectorAll(".accordon .tit");
let ancors = document.querySelectorAll(".accordon a");

document.addEventListener("click", function (e) {
    let targetTitle = e.target.closest(".tit");

    if (targetTitle) {
        accordions.forEach((accordion, index) => {
            let paragraph = paragraphs[index];
            let icon = icons[index];
            let image = images[index];
            let ancor = ancors[index];

            if (titles[index] === targetTitle) {
                const ParagraphMaxHeight = window.getComputedStyle(paragraph).maxHeight;
                // تغيير حالة الفقرة والأنكور
                if (ParagraphMaxHeight === "0px" || ParagraphMaxHeight === "none") {
                    // فتح الفقرة والأنكور
                    paragraph.style.maxHeight = paragraph.scrollHeight + "px";
                    paragraph.style.opacity = "1";
                    ancor.style.maxHeight = ancor.scrollHeight + "px";
                    ancor.style.opacity = "1";
                    image.style.height = "140px";
                    icon.style.transform = "rotate(315deg)";
                } else {
                    paragraph.style.maxHeight = "0";
                    paragraph.style.opacity = "0";
                    ancor.style.maxHeight = "0";
                    ancor.style.opacity = "0";
                    image.style.height = "40px";
                    icon.style.transform = "rotate(540deg)";
                }
            } else {
                paragraph.style.maxHeight = "0";
                paragraph.style.opacity = "0";
                ancor.style.maxHeight = "0";
                ancor.style.opacity = "0";
                image.style.height = "40px";
                icon.style.transform = "rotate(540deg)";
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


/* inimation 2*/
document.addEventListener("DOMContentLoaded", () => {
    const container = document.querySelector(".Opinions .all");
    const scrollSpeed = 2; // السرعة (بيكسل لكل إطار)

    // استنساخ المحتوى لملء العرض للحركة المستمرة
    const clone = container.innerHTML;
    container.innerHTML += clone;

    let scrollPosition = 0;

    function scrollContent() {
      scrollPosition += scrollSpeed; // التحرك بالعكس
      container.style.transform = `translateX(${scrollPosition}px)`;

      // إعادة ضبط الحركة عند النهاية
      if (scrollPosition >= container.scrollWidth / 2) {
        scrollPosition = 0;
      }

      requestAnimationFrame(scrollContent);
    }

    scrollContent();
  });
/* inimation 2*/
