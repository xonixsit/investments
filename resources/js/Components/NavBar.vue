<template>
  <header class="w-full top-0 sticky z-50 bg-surface border-b border-outline-variant transition-all duration-300" ref="headerEl">
    <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop flex items-center justify-between h-20">

      <!-- Logo -->
      <div class="flex items-center">
        <Link href="/">
        <img src="/storage/images/etax_investments_dubai.png" alt="ETP Accounting Services" style="height:58px;width:auto;display:block;object-fit:contain;" />
      </Link>
      </div>

      <!-- Desktop nav -->
      <nav class="hidden md:flex items-center gap-8">
        <Link href="/"            :class="navClass('/')">Explore</Link>
        <Link href="/investments" :class="navClass('/investments')">Investment Catalog</Link>
        <Link href="/guide"       :class="navClass('/guide')">Guide</Link>
        <Link href="/faqs"        :class="navClass('/faqs')">FAQs</Link>
        <Link href="/contact"     :class="navClass('/contact')">Contact</Link>
      </nav>

      <!-- Desktop CTA -->
      <Link href="/consult" class="hidden md:block bg-primary text-on-primary px-6 py-3 font-label-md text-label-md uppercase tracking-widest hover:translate-y-[-2px] transition-all shadow-card active:scale-95 text-center w-full sm:w-auto block">
        Book Consultation
      </Link>


      <!-- Mobile hamburger -->
      <button @click="menuOpen = !menuOpen"
        class="md:hidden flex flex-col justify-center items-center w-10 h-10 gap-1.5"
        :aria-label="menuOpen ? 'Close menu' : 'Open menu'">
        <span class="w-6 h-0.5 bg-primary transition-all duration-300"
          :class="menuOpen ? 'rotate-45 translate-y-2' : ''"></span>
        <span class="w-6 h-0.5 bg-primary transition-all duration-300"
          :class="menuOpen ? 'opacity-0' : ''"></span>
        <span class="w-6 h-0.5 bg-primary transition-all duration-300"
          :class="menuOpen ? '-rotate-45 -translate-y-2' : ''"></span>
      </button>
    </div>

    <!-- Mobile menu drawer -->
    <div v-show="menuOpen"
      class="md:hidden bg-surface border-t border-outline-variant shadow-lg">
      <nav class="flex flex-col px-margin-mobile py-4 gap-1">
        <Link href="/"            :class="mobileNavClass('/')"          @click="menuOpen=false">Explore</Link>
        <Link href="/investments" :class="mobileNavClass('/investments')" @click="menuOpen=false">Investment Catalog</Link>
        <Link href="/guide"       :class="mobileNavClass('/guide')"       @click="menuOpen=false">Guide</Link>
        <Link href="/faqs"        :class="mobileNavClass('/faqs')"        @click="menuOpen=false">FAQs</Link>
        <Link href="/contact"     :class="mobileNavClass('/contact')"     @click="menuOpen=false">Contact</Link>
      </nav>
    </div>
  </header>
</template>

<script setup>
import { ref, onMounted, onBeforeUnmount } from 'vue';
import { Link, usePage } from '@inertiajs/vue3';
import logoUrl from '@images/etax_investments_dubai.png';

const headerEl = ref(null);
const menuOpen  = ref(false);
const page      = usePage();

function navClass(path) {
  const active = page.url === path || (path !== '/' && page.url.startsWith(path));
  return [
    'font-label-md text-label-md transition-colors duration-300',
    active ? 'text-primary font-bold border-b-2 border-secondary'
           : 'text-on-surface-variant font-medium hover:text-secondary',
  ];
}

function mobileNavClass(path) {
  const active = page.url === path || (path !== '/' && page.url.startsWith(path));
  return [
    'px-3 py-3 font-label-md rounded-sm transition-colors',
    active ? 'text-primary font-bold bg-surface-container-low border-l-2 border-secondary'
           : 'text-on-surface-variant hover:text-primary hover:bg-surface-container-low',
  ];
}

function handleScroll() {
  if (!headerEl.value) return;
  headerEl.value.classList.toggle('shadow-sm', window.scrollY > 50);
}

onMounted(() => window.addEventListener('scroll', handleScroll));
onBeforeUnmount(() => window.removeEventListener('scroll', handleScroll));
</script>
