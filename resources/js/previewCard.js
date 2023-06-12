const inputImage = document.querySelector('#input-file');
const previewImage = document.querySelector('#preview-image');
const title = document.querySelector('#title');
const price = document.querySelector('#price');
const titleInput = document.querySelector('input[name="title"]');
const priceInput = document.querySelector('input[name="price"]');

inputImage.addEventListener('change', function (event) {
    const [file] = inputImage.files;
    if (file) {
        previewImage.src = URL.createObjectURL(file);
    }
})

titleInput.addEventListener('keyup',function () {
    title.textContent = titleInput.value;
})
priceInput.addEventListener('keyup',function () {
    price.textContent = priceInput.value;
})
