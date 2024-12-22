window.addEventListener("scroll", () => {
    let menu = document.getElementById("menu");
    let scrollY = window.scrollY; // قيمة التمرير
    let documentHeight = document.documentElement.scrollHeight; // ارتفاع المستند الكامل
    let windowHeight = window.innerHeight; // ارتفاع نافذة العرض

    console.log("scrollY:", scrollY, "documentHeight:", documentHeight, "windowHeight:", windowHeight);

    // إضافة الفئة "active" عند التمرير لأسفل الصفحة
    if (scrollY >= 100 && scrollY + windowHeight < documentHeight) {
        menu.classList.add("active");
        menu.style.top = ""; // إزالة التحديد السابق إذا كان موجوداً
    } else {
        menu.classList.remove("active");
        menu.style.top = ""; // إزالة التحديد إذا كان موجوداً
    }

    // التحقق إذا وصلنا إلى أسفل الصفحة
    if (scrollY + windowHeight >= documentHeight) {
        menu.classList.remove("active"); // إزالة الفئة active عند الوصول إلى أسفل الصفحة
        menu.style.position = "absolute"; // تأكد من أن العنصر لديه position ثابت
        menu.style.top = "calc(100% - 46px)"; // تعيين top عند الوصول إلى أسفل الصفحة
    }
});
