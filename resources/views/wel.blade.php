<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css">
<script>
    var botmanWidget = {
    aboutText: 'Start the conversation with Hi',
    introMessage: 'Hi im Justin How may i help you?'
};
function handleIntroMessage() {
    var introMessageElement = document.querySelector('.botman-about-text');
    if (introMessageElement) {
        introMessageElement.innerHTML = botmanWidget.aboutText;
    }
}

// Call the function when the page loads
window.addEventListener('load', handleIntroMessage);

</script>
<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js' ></script>
</html>
