let accordions = document.querySelectorAll(".accordon .accor");
let images = document.querySelectorAll(".accordon .accor .min .image");
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
                    image.style.maxWidth = "300px"; // تغيير حجم الصورة
                } else {
                    paragraph.style.maxHeight = "0";
                    paragraph.style.opacity = "0";
                    image.style.maxWidth = "100px"; // إعادة الحجم الأصلي للصورة
                }
            } else {
                // إغلاق العناصر الأخرى
                paragraph.style.maxHeight = "0";
                paragraph.style.opacity = "0";
                image.style.maxWidth = "100px"; // إعادة الحجم الأصلي للصورة
            }
        });
    }
});
