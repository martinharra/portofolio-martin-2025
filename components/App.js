// User Profile Component
function UserProfile({ username, setUsername }) {
  const handleUsernameChange = (e) => {
    setUsername(e.target.value);
  };

  return (
    <div className="bg-white p-6 rounded-lg shadow-md mb-6">
      <h2 className="text-xl font-semibold mb-4">Your Profile</h2>
      <div className="flex items-center space-x-4">
        <div className="w-16 h-16 bg-purple-500 rounded-full flex items-center justify-center text-white text-2xl font-bold">
          {username.charAt(0).toUpperCase()}
        </div>
        <div className="flex-1">
          <label className="block text-gray-700 mb-2">Your Username:</label>
          <input
            type="text"
            value={username}
            onChange={handleUsernameChange}
            className="border border-gray-300 rounded px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-purple-500"
          />
        </div>
      </div>
      <div className="mt-4">
        <p className="text-gray-600">Share your link: https://ngl.link/{username}</p>
      </div>
    </div>
  );
}

// Message Form Component
function MessageForm({ addMessage }) {
  const [message, setMessage] = React.useState('');
  
  const handleSubmit = (e) => {
    e.preventDefault();
    if (message.trim()) {
      addMessage(message);
      setMessage('');
    }
  };

  return (
    <div className="bg-white p-6 rounded-lg shadow-md mb-6">
      <h2 className="text-xl font-semibold mb-4">Send Anonymous Message</h2>
      <form onSubmit={handleSubmit}>
        <textarea
          value={message}
          onChange={(e) => setMessage(e.target.value)}
          className="w-full h-32 p-3 border border-gray-300 rounded mb-4 focus:outline-none focus:ring-2 focus:ring-purple-500"
          placeholder="Type your anonymous message here..."
        ></textarea>
        <button
          type="submit"
          className="bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700 transition-colors"
        >
          Send Message
        </button>
      </form>
    </div>
  );
}

// Message List Component
function MessageList({ messages }) {
  if (messages.length === 0) {
    return (
      <div className="bg-white p-6 rounded-lg shadow-md">
        <h2 className="text-xl font-semibold mb-4">Your Messages</h2>
        <p className="text-gray-500">No messages yet. Share your link to get some!</p>
      </div>
    );
  }

  return (
    <div className="bg-white p-6 rounded-lg shadow-md">
      <h2 className="text-xl font-semibold mb-4">Your Messages</h2>
      <div className="space-y-4">
        {messages.map((msg) => (
          <div key={msg.id} className="p-4 bg-gray-50 rounded border border-gray-200">
            <p className="mb-2">{msg.text}</p>
            <p className="text-sm text-gray-500">
              {new Date(msg.timestamp).toLocaleString()}
            </p>
          </div>
        ))}
      </div>
    </div>
  );
}

// Main App Component
function App() {
  const [messages, setMessages] = React.useState([]);
  const [username, setUsername] = React.useState('anonymous_user');

  // Function to add a new message
  const addMessage = (newMessage) => {
    setMessages([...messages, { 
      id: Date.now(), 
      text: newMessage, 
      timestamp: new Date() 
    }]);
  };

  return (
    <div className="container mx-auto p-4 py-8">
      <header className="text-center mb-8">
        <h1 className="text-4xl font-bold text-purple-600 mb-2">NGL</h1>
        <p className="text-xl text-gray-600">Send Anonymous Messages to {username}</p>
      </header>
      
      <UserProfile username={username} setUsername={setUsername} />
      <MessageForm addMessage={addMessage} />
      <MessageList messages={messages} />
    </div>
  );
}
