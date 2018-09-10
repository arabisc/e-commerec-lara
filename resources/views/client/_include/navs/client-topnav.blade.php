{{-- <nav class="flex items-center justify-between flex-wrap bg-grey-darkest px-6">
  <div class="w-full block flex-grow flex items-center w-auto text-xs">
    <div class="flex-grow">
      @guest
      <a href="#responsive-header" class="inline-block text-grey-light py-3 ml-3 hover:text-yellow-dark">
        تسجيل دخول
      </a>
      <a href="#responsive-header" class="inline-block text-grey-light ml-6 py-3 hover:text-yellow-dark">
        تسجيل حساب
      </a>
      <a href="#responsive-header" class="inline-block text-grey-light py-3 hover:text-yellow-dark">
        اختر العملة
      </a>
      @else
      <h3>TODO</h3>
      @endguest
    </div>
    <div>
      <a href="#responsive-header" class="inline-block text-grey-light py-3 ml-3 hover:text-yellow-dark">
        المفضلة
      </a>
      <a href="#responsive-header" class="inline-block text-grey-light ml-3 py-3 hover:text-yellow-dark">
        مقارنة الأسعار
      </a>
      <a href="#responsive-header" class="inline-block text-grey-light py-3 hover:text-yellow-dark">
        الملف الشخصي
      </a>
    </div>
  </div>
</nav> --}}
{{-- Top Navbar --}}
<div class="flex bg-white items-center justify-between h-8 px-10">
  <div class="flex-auto flex-initial w-auto">
    <ul class="list-reset flex">
      <li>
        <a href="#" class="text-grey h-8 flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram h-4 w-4 stroke-current inline-block">
            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
            <line x1="17.5" y1="6.5" x2="17.5" y2="6.5"></line>
          </svg>
        </a>
      </li>
      <li class="mr-4">
        <a href="#" class="text-grey h-8 flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-youtube  h-4 w-4 stroke-current inline-block">
            <path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"></path>
            <polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon>
          </svg>
        </a>
      </li>
      <li class="mr-4">
        <a href="#" class="text-grey h-8 flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter h-4 w-4 stroke-current inline-block">
            <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
          </svg>
        </a>
      </li>
      <li class="mr-4">
        <a href="#" class="text-grey h-8 flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook h-4 w-4 stroke-current inline-block">
            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
          </svg>
        </a>
      </li>
    </ul>
  </div>
  <div class="flex-auto flex-initial w-auto">
    <ul class="list-reset flex">
      <li>
        <a href="#" class="text-grey-dark h-8 flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin h-5 w-5 stroke-current inline-block">
            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
            <circle cx="12" cy="10" r="3"></circle>
          </svg>
          <span class="text-xxs mr-1 mt-1">طرابس الشام-لبنان</span>
        </a>
      </li>
      <li class="mr-3">
        <a href="#" class="text-grey-dark h-8 flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail h-5 w-5 stroke-current inline-block">
            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline>
          </svg>
          <span class="text-xs mr-1 mt-1 font-sans font-bold">example@gmail.com</span>
        </a>
      </li>
    </ul>
  </div>
</div>