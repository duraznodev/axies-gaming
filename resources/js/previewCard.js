const inputImage = document.querySelector('#input-file');
const previewImage = document.querySelector('#preview-image');
const title = document.querySelector('#title');
const price = document.querySelector('#price');
const pricePreview = document.querySelector('#price_preview');
const titleInput = document.querySelector('input[name="title"]');
const priceInput = document.querySelector('input[name="price"]');

inputImage.addEventListener('change', function (event) {
    const [file] = inputImage.files;
    if (file) {
        previewImage.src = URL.createObjectURL(file);
    }
})

titleInput.addEventListener('input',function () {
    title.textContent = titleInput.value;
})
priceInput.addEventListener('input',function () {
    price.textContent = priceInput.value;
    pricePreview.textContent = String((Number(priceInput.value)*25420.60))
})
