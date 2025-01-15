function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.classList.add('hidden');
        modal.classList.remove('block');
    }
}

document.addEventListener('DOMContentLoaded', function() {
    const decimalInputs = document.querySelectorAll('.decimal_number');

    decimalInputs.forEach(input => {
        input.addEventListener('input', function(event) {
            let value = this.value;

            // السماح فقط بالأرقام والعلامة العشرية
            value = value.replace(/[^0-9.]/g, '');

            // السماح بعلامة عشرية واحدة فقط
            const decimalCount = (value.match(/\./g) || []).length;
            if (decimalCount > 1) {
                value = value.substring(0, value.lastIndexOf('.'));
            }

            // السماح برقمين فقط بعد العلامة العشرية
            if (value.includes('.')) {
                const parts = value.split('.');
                if (parts[1].length > 2) {
                    value = parts[0] + '.' + parts[1].substring(0, 2);
                }
            }

            this.value = value;
        });
    });
});
document.addEventListener('DOMContentLoaded', function() {
    const numbersInputs = document.querySelectorAll('.numbers_only');

    numbersInputs.forEach(input => {
        input.addEventListener('input', function(event) {
            let value = this.value;

            // السماح فقط بالأرقام 
            value = value.replace(/[^0-9]/g, '');

            this.value = value;
        });
    });
});

document.querySelectorAll('.disableBtn').forEach(button => {
    button.addEventListener('click', () => {
        button.classList.add('opacity-50', 'pointer-events-none');
        setTimeout(() => {
            button.classList.remove('opacity-50', 'pointer-events-none');
        }, 3000);
    });
});


function previewPhotos(event) {
    const previewContainer = document.getElementById('photosPreview');
    previewContainer.innerHTML = ''; // Clear existing previews

    const files = event.target.files;
    for (let i = 0; i < files.length; i++) {
        const file = files[i];
        const reader = new FileReader();

        reader.onload = function(e) {
            const img = document.createElement('img');
            img.src = e.target.result;
            img.classList.add('w-[200px]', 'h-[200px]', 'object-cover', 'rounded', 'mb-2');
            previewContainer.appendChild(img);
        }

        reader.readAsDataURL(file);
    }
}

function previewImage(event, previewDivId = 'imgPreview') {
    const previewDiv = document.getElementById(previewDivId);
    const file = event.target.files[0];

    // Check if a file was selected
    const reader = new FileReader();

    // Set up the FileReader event
    reader.onload = function(e) {
        // Create an image element
        const img = document.createElement('img');
        img.src = e.target.result;
        img.alt = 'Selected Image';
        img.className = 'w-[200px] h-[200px] object-cover rounded mx-auto';

        // Clear the current preview and add the new image
        previewDiv.innerHTML = '';
        previewDiv.appendChild(img);
    };

    // Read the file as a data URL
    reader.readAsDataURL(file);
}


function confirmDelete(form_id, lang) {
    Swal.fire({
        title: lang == 'ar' ? 'هل أنت متأكد؟' : 'Are you sure?',
        text: lang == 'ar' ? "لن تتمكن من استعادة هذا العنصر!" : "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: lang == 'ar' ? 'نعم، احذف!' : 'Yes, delete it!',
        cancelButtonText: lang == 'ar' ? 'إلغاء' : 'Cancel'
    }).then((result) => {
        console.log(form_id);
        console.log(document.getElementById(form_id));
        
        console.log(result);
        if (result.isConfirmed) {
            // إرسال الطلب
            document.getElementById(form_id).submit();
        }
    });
}

    

function openNav(navId) {
    const mewnus = document.querySelectorAll('.itsSideMenu');
    mewnus.forEach(mewnu => {
        closeNav(mewnu.id);
    });
    document.getElementById(navId).style.width = "90%";
    document.getElementById(navId).classList.add('px-3');
}

function closeNav(navId) {
    document.getElementById(navId).style.width = "0";
    document.getElementById(navId).classList.remove('px-3');
}




