document.addEventListener('DOMContentLoaded', function() {
    const canvas = new fabric.Canvas('image-canvas');
    const imageInput = document.getElementById('image');
    const saveButton = document.getElementById('save-button');

    // Load the image into the canvas
    imageInput.addEventListener('change', function(event) {
        const imageFile = event.target.files[0];
        const reader = new FileReader();

        reader.onload = function(event) {
            const image = new Image();
            image.onload = function() {
                const imageObject = new fabric.Image(image);
                canvas.setBackgroundImage(imageObject, canvas.renderAll.bind(canvas), {
                    scaleX: canvas.width / image.width,
                    scaleY: canvas.height / image.height,
                });
            };
            image.src = event.target.result;
        };

        reader.readAsDataURL(imageFile);
    });

    // Add event listeners for image editing tools
    canvas.on('object:scaling', function(options) {
        saveButton.disabled = false;
    });
    canvas.on('object:rotating', function(options) {
        saveButton.disabled = false;
    });
    canvas.on('object:modified', function(options) {
        saveButton.disabled = false;
    });

    // Save the edited image
    saveButton.addEventListener('click', function() {
        const imageData = canvas.toDataURL('image/png');
        const imageInput = document.getElementById('edited-image');
        imageInput.value = imageData;

        const form = document.getElementById('image-form');
        form.submit();
    });
});
