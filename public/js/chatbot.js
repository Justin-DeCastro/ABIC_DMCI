// public/js/chatbot.js

// Define responses for different user inputs
const responses = {
    "hello": "Hi there! How can I help you today?",
    "buying a house": "Great! Are you looking for something specific, like a certain location or number of bedrooms?",
    "listing details": "Sure! Please provide the address or MLS number of the property you're interested in.",
    // Add more responses as needed
};

// Function to process user input and generate a response
function processInput(input) {
    input = input.toLowerCase().trim(); // Convert input to lowercase and remove leading/trailing spaces
    let response = "I'm sorry, I didn't understand that. Can you please try again?"; // Default response

    // Check if the input matches any predefined response
    for (const keyword in responses) {
        if (input.includes(keyword)) {
            response = responses[keyword];
            break;
        }
    }

    return response;
}

// Function to send user message and receive response
function sendMessage() {
    const userInput = document.getElementById('user-input').value;
    const chatbotMessages = document.getElementById('chatbot-messages');

    // Display user message
    chatbotMessages.innerHTML += `<div class="user-message">${userInput}</div>`;

    // Process user input and generate response
    const botResponse = processInput(userInput);

    // Display chatbot response
    chatbotMessages.innerHTML += `<div class="bot-message">${botResponse}</div>`;

    // Clear input field
    document.getElementById('user-input').value = '';
}
