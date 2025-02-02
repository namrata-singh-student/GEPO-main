<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GEPO - Global Engagement & Partnerships Office</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="index.css">
</head>

<body class="font-sans bg-gray-100">
<!-- Header -->
  <header class='flex shadow-[0px_0px_16px_rgba(17,_17,_26,_0.1)] py-4 px-4 sm:px-6 bg-blue-900 font-sans min-h-[70px] tracking-wide relative z-50'>
    <div class='flex flex-wrap items-center justify-between gap-4 w-full max-w-screen-xl mx-auto'>
      <a href="javascript:void(0)" class="max-sm:hidden">
        <img src="images/jis-logo.png" alt="JIS Logo" class='h-12' />
      </a>
      <a href="javascript:void(0)" class="hidden max-sm:block">
        <img src="images/jis-logo.png" alt="JIS Logo" class='h-9' />
      </a>

      <div id="collapseMenu"
      class='max-lg:hidden lg:!block max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-50 max-lg:before:inset-0 max-lg:before:z-50'>
      <button id="toggleClose" class='lg:hidden fixed top-2 right-4 z-[100] rounded-full bg-white w-9 h-9 flex items-center justify-center border'>
        &#10006;
      </button>

        <ul
          class='lg:flex gap-x-5 max-lg:space-y-3 max-lg:fixed max-lg:bg-white max-lg:w-1/2 max-lg:min-w-[300px] max-lg:top-0 max-lg:left-0 max-lg:p-6 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50'>
          <li class='mb-6 hidden max-lg:block'>
            <a href="javascript:void(0)" class="max-sm:hidden">
              <img src="jis-logo.png" alt="JIS Logo" class='h-12' />
            </a>
          </li>
          <li class='max-lg:border-b max-lg:py-3 px-3'><a href="global.html"
            class='hover:underline hover:text-yellow-700 text-gray-200 font-bold block text-xl'>Global Partnerships</a>
          </li>
          <li class='max-lg:border-b max-lg:py-3 px-3'><a href="pi.php"
            class='hover:underline hover:text-yellow-700 text-gray-200 font-bold block text-lg'>Programs</a>
          </li>
          <li class='max-lg:border-b max-lg:py-3 px-3'><a href="resources/resources.php"
            class='hover:underline hover:text-yellow-700 text-gray-200 font-bold block text-lg'>Resources</a>
          </li>
          <li class='max-lg:border-b max-lg:py-3 px-3'><a href="event.php"
            class='hover:underline hover:text-yellow-700 text-gray-200 font-bold block text-lg'>News & Events</a>
          </li>
          <li class='max-lg:border-b max-lg:py-3 px-3'><a href="aboutus/about.php"
            class='hover:underline hover:text-yellow-700 text-gray-200 font-bold block text-lg'>About Us</a>
          </li>
          <li class='max-lg:border-b max-lg:py-3 px-3'><a href="contact.php"
            class='hover:underline hover:text-yellow-700 text-gray-200 font-bold block text-lg'>Contact</a>
          </li>
        </ul>
      </div>

      <div class='flex items-center max-lg:ml-auto space-x-4'>
        <li class="relative">
          <button class="profile-button bg-gradient-to-r from-purple-500 to-pink-500 text-white hover:from-purple-600 hover:to-pink-600 focus:outline-none py-3 px-8 rounded-md text-xl font-semibold shadow-lg transition-all duration-300">My Profile</button>

          <ul class="absolute hidden profile-dropdown bg-gradient-to-r from-blue-500 to-purple-600 text-white shadow-lg rounded-lg mt-2 min-w-max left-0 md:right-0 transition-all duration-300 ease-in-out">
            <li>
              <a href="admin.html" class="block px-6 py-3 hover:bg-blue-700 rounded-t-md transition-all duration-200 ease-in-out">Control Panel</a>
            </li>
            <li>
              <button id="admin-register-toggle" class="block w-full text-left px-6 py-3 hover:bg-purple-500 rounded-b-md transition-all duration-200 ease-in-out">
                Admin Login
              </button>
            </li>
          </ul>
          
        </li>

        <button id="toggleOpen" class='lg:hidden'>
          <svg class="w-7 h-7" fill="#000" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
              clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
    </div>
  </header>



  <!-- Hero Section -->
  <section class="relative bg-cover bg-center h-screen" style="background-image: url('bg-img2.png');">
    <div class="absolute inset-0 bg-blue-900 bg-opacity-50 flex items-center justify-center">
      <div class="text-center text-white px-6">
        <!-- Embedding autoType.html using iframe -->

        <iframe src="autoType.html" width="100%" height="300" class="border-0"></iframe>

        <div class="space-x-4">
        <a href="global.html" class="bg-yellow-400 text-blue-900 px-6 py-3 rounded-md hover:bg-yellow-300 transition">
         Partner with Us
        </a>
        <a href="pi.php" class="bg-white text-blue-900 px-6 py-3 rounded-md hover:bg-gray-200 transition">
         Join a Program
        </a>
        <a href="contact.php" class="bg-transparent border border-yellow-400 text-yellow-400 px-6 py-3 rounded-md hover:bg-yellow-400 hover:text-blue-900 transition">
         Contact Us
        </a>

        </div>
      </div>
    </div>
  </section>


  <!-- Quick Links -->
  <section id="quick-links" class="py-12 bg-blue-100">
    <div class="container mx-auto px-6">
      <h2 class="text-2xl font-bold text-center mb-6">Quick Links</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
        <div class="p-6 bg-gray-100 rounded-lg shadow-md hover:shadow-lg">
          <h3 class="text-xl font-semibold mb-2">Study Abroad Programs</h3>
          <p class="text-gray-600">Explore opportunities to study in prestigious institutions worldwide.</p>
          <a href="pi.php" class="text-blue-600 hover:underline mt-4 block">Learn More</a>
        </div>
        <div class="p-6 bg-gray-100 rounded-lg shadow-md hover:shadow-lg">
          <h3 class="text-xl font-semibold mb-2">International Admissions</h3>
          <p class="text-gray-600">Find out how to join our institution as an international student.</p>
          <a href="#admissions" class="text-blue-600 hover:underline mt-4 block">Learn More</a>
        </div>
        <div class="p-6 bg-gray-100 rounded-lg shadow-md hover:shadow-lg">
          <h3 class="text-xl font-semibold mb-2">Research Collaborations</h3>
          <p class="text-gray-600">Join hands with global institutions for groundbreaking research.</p>
          <a href="#research" class="text-blue-600 hover:underline mt-4 block">Learn More</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-blue-900 text-white py-6">
    <div class="container mx-auto px-6 text-center">
      <p>&copy; 2025 GEPO. All Rights Reserved.</p>
    </div>
  </footer>

  <!-- Chatbot -->
  <div class="chat-bubble" id="chat-bubble">💬</div>
  <div class="chatbox" id="chatbox">
    <div class="chatbox-header">
      <span>ChatGPT Assistant</span>
      <button id="close-chatbox">&times;</button>
    </div>
    <div class="chatbox-body" id="chatbox-body"></div>
    <div class="chatbox-footer">
      <input type="text" id="chat-input" placeholder="Type your message here...">
      <button id="send-button">Send</button>
    </div>
  </div>
  <script type="module" src="index.js"></script>
</body>

</html>