<nav  @click.away="isMobileOpen=false" x-data="{isMobileOpen: false, showButton: true}" class="flex flex-col md:flex-row items-center justify-between flex-wrap bg-teal-500 p-6">
    <div class="flex items-center flex-shrink-0 text-white">

      <a class="font-semibold text-xl tracking-tight"href="/">Mnemo</a>
    </div>
    <div x-show="showButton"class="block lg:hidden">
      <button @click="{ isMobileOpen = !isMobileOpen}" class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
      </button>
    </div>
   <!-- Mobile nav -->
    <div x-show="isMobileOpen" class="w-full block flex-grow lg:flex lg:items-center md:ml-2 lg:w-auto">
      <div class="text-sm lg:flex-grow">
          @if(Auth::check())
          <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white">
            Logout
          </a>
          @else

          <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
            Examples
          </a>
          <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white">
            Blog
          </a>
          @endif


      </div>
      <div>
        <a href="#" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">Download</a>
      </div>
    </div>
     <!-- Mobile nav end -->

      <!-- Desktop nav -->
    <div class="hidden w-full md:block flex-grow lg:flex lg:items-center md:ml-2 lg:w-auto">
        <div class="text-sm lg:flex-grow">
            @if(Auth::check())
            <a href="{{route('logout')}}" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white">
              Logout
            </a>
            @else
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
              Examples
            </a>
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white">
              Blog
            </a>
            @endif
        </div>
        @if(Auth::check())
        @if(Auth::user()->name == 'admin')
        @if(Request::path() != 'admin-panel')
        <div>
            <a href="{{route('admin-panel')}}" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">Admin panel</a>
        </div>
        @endif
        @endif
        @endif
      </div>
  </nav>
