console.log('image-uploader.js подключен');
import axios from "axios";
document.addEventListener("DOMContentLoaded", (event) => {
    initImageUploader();
});

function initImageUploader() {
    document.getElementById('imageInput').addEventListener('change', function (event) {
        console.log('Изображение выбрано');
        const file = event.target.files[0];
        const previewImage = document.getElementById('previewImage');
        const previewContainer = document.getElementById('previewContainer');
        const imageField = document.querySelector('.js-image-field');

        if (file) {
            var formData = new FormData();
            formData.append("file", file);
            formData.append("upload_file", true);

            axios.post('https://lar.local.gd/admin/image/upload-image',
                formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                }
            ).then(function (response) {
                        console.log('SUCCESS!!', response.data);

                        // Установка ID изображения
                        imageField.value = response.data.imageId;

                        // Установка превью (если решите вернуть URL в контроллере)
                        const fileUrl = response.data.fileUrl || `/storage/uploads/${file.name}`;
                        previewImage.src = fileUrl;
                        previewImage.style.display = 'block';
            })
                .catch(function () {
                    console.log('FAILURE!!');
                });
        } else {
            previewImage.src = '';
            previewImage.style.display = 'none';
            imageField.value = '';
        }
    });
}
