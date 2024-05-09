<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <!-- Head content -->
</head>
<body>
    <!-- Other content -->

    <!-- Chatbot container -->
    <div id="chatbot-container">
        <div id="chatbot-messages"></div>
        <input type="text" id="user-input" placeholder="Type your message here...">
        <button onclick="sendMessage()">Send</button>
    </div>

    <!-- Include chatbot JavaScript -->
    <script src="{{ asset('js/chatbot.js') }}"></script>
</body>
</html>
