<div class="flex items-center bg-white flex-wrap p-8 shadow-lg">
  <div class="flex-no-grow">
    <h1 class="text-grey-darkest text-4xl" style="text-shadow: 0px 0px 4px grey">
      تجارة <span class="text-yellow-dark">ON</span> لاين
    </h1>
    <span class="block text-xs text-grey-dark">الشركة المتحدة للتجارة أون لاين</span>
  </div>
  <div class="flex-grow px-8">
    <form class="w-full">
      <div class="flex shadow">
        <div class="w-24">
          <button class="w-full block bg-yellow-dark pt-2 h-12 text-grey-lighter border-t-2 border-b-2 border-r-2 border-yellow-dark hover:bg-black hover:border-black">
            @include('client.svg.navs.searchIcon')
          </button>
        </div>
        <div class="flex-grow">
          <input type="text" class="w-full appearance-none h-12  bg-grey-lighter text-grey-darkest text-xs px-4 border-t-2 border-b-2 border-l-2 border-grey-lighter focus:bg-white focus:border-grey-light focus:text-grey-dark"
          placeholder="إبحث في الأقسام, المنتجات...">
        </div>
      </div>
    </form>
  </div>
  <div class="flex-no-grow">
    <div class="flex">
      <div class="text-sm py-1">
        <p class="text-grey">سلة التسوق</p>
        <p class="font-mono font-bold text-center text-grey-darker pt-1 pr-2">0.00&#65284;</p>
      </div>
      <div class="">
        <a href="#0" class="block">
          @include('client.svg.navs.shopIcon')
        </a>
      </div>
    </div>
  </div>
</div>