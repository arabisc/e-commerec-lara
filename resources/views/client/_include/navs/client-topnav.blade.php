<nav class="flex items-center justify-between flex-wrap bg-grey-darkest px-6">
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
</nav>
{{-- Top Navbar --}}