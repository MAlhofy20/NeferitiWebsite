// set intarval
// النص الكامل
const text = `من خلال نظرة تجمع بين خبرة المبرمجين ودقة المصممين وبُعد نظر خبراء التسويق، نصنع لك نافذة تنقل أعمالك إلى بُعد آخر`;
const words = text.split(" "); // تقسيم النص إلى كلمات
const wordsPerBatch = 4; // عدد الكلمات في كل عرض
const textElement = document.querySelector(".title12");
let currentIndex = 0;

function updateText() {
    // إخفاء النص (opacity = 0)
    textElement.style.opacity = 0;

    // الانتظار حتى ينتهي تأثير الإخفاء ثم تحديث النص
    setTimeout(() => {
        // استخراج الكلمات الحالية
        const currentWords = words.slice(currentIndex, currentIndex + wordsPerBatch);
        textElement.innerHTML = currentWords.join(" ");

        // تحديث الفهرس
        currentIndex += wordsPerBatch;
        if (currentIndex >= words.length) {
            currentIndex = 0; // إعادة البداية إذا انتهى النص
        }

        // إظهار النص (opacity = 1)
        textElement.style.opacity = 1;
    }, 1000); // 500 مللي ثانية لانتظار تأثير الإخفاء
}

// تحديث النص كل 2.5 ثانية
setInterval(updateText, 2500);

// عرض النص الأول عند بدء الصفحة
updateText();

// set intarval


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
