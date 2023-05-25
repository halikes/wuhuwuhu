window.addEventListener('DOMContentLoaded', (event) => {
    const sendButton = document.getElementById("send-button");
    const userInput = document.getElementById("user-input");
    sendButton.addEventListener("click", () => {
        sendMessage(userInput.value);
        userInput.value = "";
    });
});

async function sendMessage(message) {
    const API_KEY = ""; // 替换为您的API密钥
    const apiUrl = "https://api.openai.com/v1/engines/curie:ft-create-by-shi-yuhang-2023-05-11-23-24-20/completions";


    const prompt = `You: ${message}\nChatGPT: `;

    const requestOptions = {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "Authorization": `Bearer ${API_KEY}`,
        },
        body: JSON.stringify({
            prompt: prompt,
            stop: "|",
            max_tokens: 300,
            n: 1,
            temperature: 0.5,
        }),
    };

    try {
        const response = await fetch(apiUrl, requestOptions);
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        const data = await response.json();
        displayMessage("You", message);
        displayMessage("ChatGPT", data.choices[0].text.trim());
    } catch (error) {
        console.error("Error fetching data:", error);
    }
}

function displayMessage(sender, message) {
    const chatContainer = document.getElementById("chat-container");
    const messageDiv = document.createElement("div");
    messageDiv.innerHTML = `<strong>${sender}:</strong> ${message}`;
    chatContainer.appendChild(messageDiv);
    chatContainer.scrollTop = chatContainer.scrollHeight;
}
