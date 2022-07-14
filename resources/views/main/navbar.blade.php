
<nav class="bg-blue-500 border-gray-200 px-3 sm:px-4 py-2.5">
    <div class=" flex flex-wrap justify-center md:justify-between">
      <a href="#" class="flex items-center">
          <span class="self-center tracking-wide text-2xl font-inter font-semibold whitespace-nowrap text-white md:ml-4 ml-3">Guidekrw.</span>
      </a>
      <div class="flex flex-grow text-white justify-end gap-4 font-inter md:mr-6">

        <a href="#" class="transition duration-[400ms] ease-in-out hover:text-slate-200 hover:ring-[2px] hover:ring-white p-1 rounded-lg hidden md:block">Food&Beverage</a>
        <a href="#" class="transition duration-[400ms] ease-in-out hover:text-slate-200 hover:ring-[2px] hover:ring-white p-1 rounded-lg hidden md:block">History&Government</a>
        <a href="#" class="transition duration-[400ms] ease-in-out hover:text-slate-200 hover:ring-[2px] hover:ring-white p-1 rounded-lg hidden md:block">Street</a>
        <a href="#" class="transition duration-[400ms] ease-in-out hover:text-slate-200 hover:ring-[2px] hover:ring-white p-1 rounded-lg hidden md:block">Other</a>
        <a href="#" class="transition duration-[400ms] ease-in-out hover:text-slate-200 hover:ring-[2px] hover:ring-white p-1 rounded-lg hidden md:block">About</a>

        
            <button href="#" class="focus:ring-2 focus:ring-white transition duratio-[300ms] rounded-lg hover:bg-blue-600 focus:bg-blue-700 md:hidden flex mobile-menu-button">
                <i class="material-icons p-2 text-center text-4xl">menu</i>
            </button>
      </div>
    </div>
  </nav>
  <div class="hidden relative mobile-menu bg-blue-800 mx-4 rounded-lg " id="mobile-menu">
    <ul class="my-4 rounded-md">
        <li class="active">
            <a href="#" class="block text-sm px-2 py-4 text-white hover:bg-blue-600 transition rounded-lg">Food & Beverage</a>
        </li>
        <li>
            <a href="#" class="block text-sm px-2 py-4 text-white hover:bg-blue-600 transition duration-300">History & Government</a>
        </li>
        <li>
            <a href="#" class="block text-sm px-2 py-4 text-white hover:bg-blue-600 transition duration-300">Street</a>
        </li>
        <li>
            <a href="#" class="block text-sm px-2 py-4 text-white hover:bg-blue-600 transition duration-300">Other</a>
        </li>
        <li>
            <a href="#" class="block text-sm px-2 py-4 text-white hover:bg-blue-600 transition duration-300 rounded-lg">About</a>
        </li>
    </ul>
</div>
  
<script>
	// Grab HTML Elements
	const btn = document.querySelector("button.mobile-menu-button");
	const menu = document.querySelector(".mobile-menu");

	// Add Event Listeners
	btn.addEventListener("click", () => {
	menu.classList.toggle("hidden");
	});
</script>
