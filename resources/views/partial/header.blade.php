<header class=" relative shadow-lg px-3 py-2">
    <nav class="flex justify-between" style="height: 80px">
      <div class="w-[130px] md:w-[200px] flex items-center">
        <a href="{{route('home')}}">
        <img src="{{asset('uploads/logo/atik.png')}}" alt="LOGO" srcset="">
        </a>
      </div>
      <div class="flex items-center gap-3" >
        <div class="navLinks duration-500 absolute md:static md:w-auto w-full md:h-auto h-[85vh] bg-white flex md:items-center gap-[1.5vw] top-[100%] left-[-100%] px-5 md:py-0 py-5 "style="height: 80px">
          <ul class="flex md:flex-row flex-col md:items-center md:gap-[2vw] gap-8">
            <li class="relative max-w-fit pr-3 md:pr-0 py-1 after:bg-gradient-to-r from-[#2b68e0] to-[#e710ea]  after:absolute after:h-1 after:w-0 after:bottom-0 after:left-0 hover:after:w-full after:transition-all after:duration-300"><a href="#">Home</a></li>
            <li class="relative max-w-fit pr-3 md:pr-0 py-1 after:bg-gradient-to-r from-[#2b68e0] to-[#e710ea]  after:absolute after:h-1 after:w-0 after:bottom-0 after:left-0 hover:after:w-full after:transition-all after:duration-300"><a href="{{ route('add.todo') }}">Add Todo</a></li>
            <li class="relative max-w-fit pr-3 md:pr-0 py-1 after:bg-gradient-to-r from-[#2b68e0] to-[#e710ea]  after:absolute after:h-1 after:w-0 after:bottom-0 after:left-0 hover:after:w-full after:transition-all after:duration-300"><a href="{{ route('list.todo') }}">List Todo</a></li>
            <li class="relative max-w-fit pr-3 md:pr-0 py-1 after:bg-gradient-to-r from-[#2b68e0] to-[#e710ea]  after:absolute after:h-1 after:w-0 after:bottom-0 after:left-0 hover:after:w-full after:transition-all after:duration-300"><a href="{{ route('contact') }}">Contact us</a></li>
          </ul>
        </div>
        <div class="flex items-center gap-2">
          <button type="button" class="hover:bg-clip-text hover:text-transparent bg-gradient-to-br from-[#2b68e0] to-[#e710ea] border-solid border-2 border-[#5356e3]  font-bold text-white px-5 py-2 rounded-full ">Login</button>
          <ion-icon name="menu" onclick="onMenuToggle(this)" class="text-[30px] cursor-pointer md:hidden"></ion-icon>
        </div>
      </div>
    </nav>
  </header>