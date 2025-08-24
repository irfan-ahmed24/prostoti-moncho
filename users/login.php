
  
  <div class="bg-white rounded-xl shadow-lg p-8 w-full transition-all duration-300 ease-in-out hover:shadow-2xl hover:-translate-y-1 transform">
    <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Log In</h2>
    <form action="./back-end/users/login.php">
      <div class="mb-4">
        <label for="username" class="block text-gray-700 text-sm font-semibold mb-2">Username or Email</label>
        <input 
          type="text" 
          id="username" 
          class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors duration-200"
          placeholder="Enter username or email"
        >
      </div>
      <div class="mb-6">
        <label for="password" class="block text-gray-700 text-sm font-semibold mb-2">Password</label>
        <input 
          type="password" 
          id="password" 
          class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors duration-200"
          placeholder="Enter your password"
        >
      </div>
      <button 
        type="submit" 
        class="w-full bg-blue-500 text-white font-bold py-2 rounded-md hover:bg-blue-600 transition-all duration-300 ease-in-out transform hover:scale-105 active:scale-100"
      >
        Login
      </button>
    </form>
  </div>