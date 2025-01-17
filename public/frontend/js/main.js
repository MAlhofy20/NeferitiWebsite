let smallIcon = document.querySelector(".icon-small i");
let ul = document.querySelector(".icon-small .dis ul");

// متغير لتتبع حالة القائمة
let isMenuOpen = false;

document.addEventListener("click", function (e) {
    if (e.target === smallIcon) {
        isMenuOpen = !isMenuOpen; // عكس الحالة الحالية
        if (isMenuOpen) {
            ul.style.opacity = "1";
            ul.style.visibility = "visible";
        } else {
            ul.style.opacity = "0";
            ul.style.visibility = "hidden";
        }
    } else {
        isMenuOpen = false;
        ul.style.opacity = "0";
        ul.style.visibility = "hidden";
    }
});

// الحصول على جميع الأكوردينات والعناصر المرتبطة بها
const accordions = document.querySelectorAll(".accordon .accor");
const paragraphs = document.querySelectorAll(".accordon p");
const icons = document.querySelectorAll(".accordon .icon i");
const images = document.querySelectorAll(".accordon .min .image img");
const anchors = document.querySelectorAll(".accordon .all");
const titles = document.querySelectorAll(".accordon .min");

// استماع للنقرات على المستند
document.addEventListener("click", (e) => {
    const targetTitle = e.target.closest(".min"); // تحديد ما إذا كان العنصر الذي تم النقر عليه هو عنوان أكوردين

    if (targetTitle) {
        accordions.forEach((accordion, index) => {
            const paragraph = paragraphs[index];
            const anchor = anchors[index];
            const icon = icons[index];
            const image = images[index];
            const isTargetAccordion = titles[index] === targetTitle;

            if (isTargetAccordion) {
                const isCollapsed =
                    paragraph.style.maxHeight === "0px" ||
                    !paragraph.style.maxHeight;

                if (isCollapsed) {
                    paragraph.style.maxHeight = `${paragraph.scrollHeight}px`;
                    paragraph.style.opacity = "1";
                    image.style.height = "140px";
                    icon.style.transform = "rotate(315deg)";
                    anchor.style.maxHeight = `${anchor.scrollHeight}px`;
                    anchor.style.opacity = "1";
                } else {
                    paragraph.style.maxHeight = "0";
                    paragraph.style.opacity = "0";
                    image.style.height = "40px";
                    icon.style.transform = "rotate(540deg)";
                    anchor.style.maxHeight = "0";
                    anchor.style.opacity = "0";
                }
            } else {
                paragraph.style.maxHeight = "0";
                paragraph.style.opacity = "0";
                image.style.height = "40px";
                icon.style.transform = "rotate(540deg)";
                anchor.style.maxHeight = "0";
                anchor.style.opacity = "0";
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
    if (!container) {
        return
    }
    const scrollSpeed = 2;

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




