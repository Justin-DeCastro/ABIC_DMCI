<div id="chat-widget-container">
    <div id="chat-widget-header">Real Estate Chat</div>
    <div id="chat-widget-messages"></div>
    <input type="text" id="chat-widget-input" placeholder="Type your message...">
    <button id="chat-widget-send">Send</button>
</div>

<style>
    #chat-widget-container {
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 300px;
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        z-index: 9999;
    }

    #chat-widget-header {
        background-color: #007bff;
        color: #fff;
        padding: 10px;
        text-align: center;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
    }

    #chat-widget-messages {
        height: 200px;
        overflow-y: auto;
        padding: 10px;
    }

    #chat-widget-input {
        width: calc(100% - 70px);
        margin: 10px;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    #chat-widget-send {
        width: 50px;
        margin: 10px;
        padding: 8px;
        border: none;
        border-radius: 5px;
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
    }

    .chat-widget-message {
        margin-bottom: 5px;
    }

    .user-message {
        text-align: right;
        color: #007bff;
    }

    .bot-message {
        text-align: left;
        color: #333;
    }
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $('#chat-widget-send').click(function () {
            sendMessage();
        });

        $('#chat-widget-input').keypress(function (event) {
            if (event.keyCode === 13) {
                sendMessage();
            }
        });

        function sendMessage() {
            var message = $('#chat-widget-input').val().trim();
            if (message !== '') {
                appendMessage(message, true);
                $('#chat-widget-input').val('');

                $.ajax({
                    url: '/chatbot',
                    method: 'POST',
                    data: { message: message },
                    success: function (response) {
                        appendMessage(response.response, false);
                    }
                });
            }
        }

        function appendMessage(message, isUser) {
            var className = isUser ? 'user-message' : 'bot-message';
            $('#chat-widget-messages').append('<div class="chat-widget-message ' + className + '">' + message + '</div>');
            $('#chat-widget-messages').scrollTop($('#chat-widget-messages')[0].scrollHeight);
        }
    });
</script>
