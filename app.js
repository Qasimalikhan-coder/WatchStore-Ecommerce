// Live Chat Toggle & Real-time Mock Messaging Integration
document.addEventListener('DOMContentLoaded', () => {
    const chatBubble = document.getElementById('live-chat-bubble');
    const chatPanel = document.getElementById('live-chat-panel');
    const closeChatBtn = document.getElementById('close-chat-btn');
    const chatForm = document.getElementById('chat-form');
    const chatInput = document.getElementById('chat-input-text');
    const chatMessagesContainer = document.getElementById('chat-messages-container');

    if (chatBubble && chatPanel) {
        chatBubble.addEventListener('click', () => {
            chatPanel.classList.toggle('d-none');
            chatPanel.classList.add('animate__animated', 'animate__fadeInUp');
        });
    }

    if (closeChatBtn && chatPanel) {
        closeChatBtn.addEventListener('click', () => {
            chatPanel.classList.add('d-none');
        });
    }

    if (chatForm) {
        chatForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const messageText = chatInput.value.trim();
            if (!messageText) return;

            const safeMessage = escapeHtml(messageText);
            chatInput.value = '';

            appendMessage(safeMessage, 'sent');
            chatMessagesContainer.scrollTop = chatMessagesContainer.scrollHeight;

            setTimeout(() => {
                const autoResponses = [
                    "Thank you for contacting Horology Boutique. We've securely routed your inquiry. Our master watchmaker is examining the specifications.",
                    "The tourbillon caliber we use is verified by COSC. Would you like a personalized bezel engraving for your order?",
                    "Your message has been safely logged in the Admin Portal! You can inspect this dynamic message stream inside the Admin Console dashboard directly."
                ];
                const randomReply = autoResponses[Math.floor(Math.random() * autoResponses.length)];
                appendMessage(randomReply, 'received');
                chatMessagesContainer.scrollTop = chatMessagesContainer.scrollHeight;
            }, 1500);
        });
    }

    function appendMessage(text, type) {
        const msgDiv = document.createElement('div');
        msgDiv.className = `message ${type} mb-3 d-flex flex-column ${type === 'sent' ? 'align-items-end' : 'align-items-start'}`;
        
        const contentDiv = document.createElement('div');
        contentDiv.className = `msg-content p-2.5 rounded-3 fs-7 ${type === 'sent' ? 'bg-warning text-dark fw-semibold' : 'bg-dark-950 text-light'}`;
        contentDiv.innerHTML = text;

        const timeSpan = document.createElement('span');
        timeSpan.className = 'msg-time fs-9 text-muted d-block mt-1';
        timeSpan.innerText = 'Just now';

        msgDiv.appendChild(contentDiv);
        msgDiv.appendChild(timeSpan);
        chatMessagesContainer.appendChild(msgDiv);
    }

    function escapeHtml(text) {
        return text
            .replace(/&/g, "&amp;")
            .replace(/</g, "&lt;")
            .replace(/>/g, "&gt;")
            .replace(/"/g, "&quot;")
            .replace(/'/g, "&#039;");
    }
});

// Shopping Cart Functions
function addToCart(productId, name, price) {
    let cart = JSON.parse(localStorage.getItem('horology_cart')) || [];
    const existing = cart.find(item => item.id === productId);
    if (existing) {
        existing.quantity += 1;
    } else {
        cart.push({ id: productId, name: name, price: price, quantity: 1 });
    }
    localStorage.setItem('horology_cart', JSON.stringify(cart));
    alert(`${name} has been added to your shopping bag!`);
    window.location.reload();
}