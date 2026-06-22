<template>
  <div class="bg-background text-on-surface min-h-screen flex flex-col" style="font-family:'Inter',sans-serif;">
    <NavBar />

    <main class="flex-grow ghaf-dot-bg">

      <!-- Hero Trust Section -->
      <section class="w-full bg-white border-b border-outline-variant overflow-hidden">
        <div class="max-w-container-max mx-auto grid grid-cols-1 md:grid-cols-2">
          <div class="p-10 md:p-16 flex flex-col justify-center">
            <div class="w-12 h-1 mb-6" style="background:#775a19;"></div>
            <h1 class="text-primary mb-4" style="font-family:'Montserrat',sans-serif; font-size:clamp(1.75rem,4vw,3rem); font-weight:700; line-height:1.167; letter-spacing:-0.02em;">
              Speak With an Investment Advisor
            </h1>
            <p class="text-on-surface-variant" style="font-size:1.125rem; line-height:1.75; max-width:480px;">
              Our experts guide HNWIs through Dubai's complex real estate landscape with precision, transparency, and deep-rooted market intelligence.
            </p>
          </div>
          <div class="relative h-64 md:h-auto overflow-hidden min-h-[280px]">
            <img :src="teamImage" alt="Investment Advisors" class="absolute inset-0 w-full h-full object-cover" />
          </div>
        </div>
      </section>

      <!-- Form + Sidebar -->
      <section class="max-w-container-max mx-auto px-4 md:px-margin-desktop py-10 md:py-24">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter items-start">

          <!-- Form -->
          <div class="lg:col-span-8 bg-white p-6 md:p-12 border border-outline-variant" style="box-shadow:0px 4px 20px rgba(26,43,60,0.05);">
            <form @submit.prevent="submitForm" class="space-y-8">

              <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-2">
                  <label class="font-label-md text-primary uppercase tracking-widest" style="font-size:12px;">Full Name</label>
                  <input v-model="form.name" type="text" placeholder="e.g. Alexander Thorne"
                    class="w-full border-0 border-b py-3 bg-transparent text-on-surface transition-colors"
                    style="outline:none; font-size:1rem; border-bottom:1px solid #c4c6cd;"
                    @focus="e=>e.target.style.borderColor='#041627'"
                    @blur="e=>e.target.style.borderColor= form.errors.name ? '#ba1a1a' : ''" />
                  <p v-if="form.errors.name" class="field-error">{{ form.errors.name }}</p>
                </div>
                <div class="space-y-2">
                  <label class="font-label-md text-primary uppercase tracking-widest" style="font-size:12px;">Email Address</label>
                  <input v-model="form.email" type="email" placeholder="alex@investment.com"
                    class="w-full border-0 border-b py-3 bg-transparent text-on-surface transition-colors"
                    style="outline:none; font-size:1rem; border-bottom:1px solid #c4c6cd;"
                    @focus="e=>e.target.style.borderColor='#041627'"
                    @blur="e=>e.target.style.borderColor= form.errors.email ? '#ba1a1a' : ''" />
                  <p v-if="form.errors.email" class="field-error">{{ form.errors.email }}</p>
                </div>
                <div class="space-y-2">
                  <label class="font-label-md text-primary uppercase tracking-widest" style="font-size:12px;">Phone Number</label>
                  <input v-model="form.phone" type="tel" placeholder="+971 50 000 0000"
                    class="w-full border-0 border-b border-outline-variant py-3 bg-transparent text-on-surface"
                    style="outline:none; font-size:1rem;"
                    @focus="e=>e.target.style.borderColor='#041627'"
                    @blur="e=>e.target.style.borderColor=''" />
                </div>
                <div class="space-y-2">
                  <label class="font-label-md text-primary uppercase tracking-widest" style="font-size:12px;">Country of Residence</label>
                  <input v-model="form.country" type="text" placeholder="United Arab Emirates"
                    class="w-full border-0 border-b border-outline-variant py-3 bg-transparent text-on-surface"
                    style="outline:none; font-size:1rem;"
                    @focus="e=>e.target.style.borderColor='#041627'"
                    @blur="e=>e.target.style.borderColor=''" />
                </div>
              </div>

              <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-2">
                  <label class="font-label-md text-primary uppercase tracking-widest" style="font-size:12px;">Preferred Contact Method</label>
                  <select v-model="form.contact_method"
                    class="w-full border-0 border-b border-outline-variant py-3 bg-transparent text-on-surface cursor-pointer"
                    style="outline:none; font-size:1rem;">
                    <option>Email</option>
                    <option>Phone Call</option>
                    <option>WhatsApp</option>
                    <option>Video Consultation</option>
                  </select>
                </div>
                <div class="space-y-2">
                  <label class="font-label-md text-primary uppercase tracking-widest" style="font-size:12px;">Property Interest</label>
                  <div class="flex flex-wrap gap-5 pt-3">
                    <label v-for="t in propertyTypes" :key="t" class="flex items-center gap-2 cursor-pointer group">
                      <input type="radio" :value="t" v-model="form.property_type"
                        class="w-4 h-4 border-outline cursor-pointer" style="accent-color:#041627;" />
                      <span class="text-on-surface-variant group-hover:text-primary transition-colors" style="font-size:1rem;">{{ t }}</span>
                    </label>
                  </div>
                </div>
              </div>

              <!-- Budget Slider -->
              <div class="space-y-4 pt-2">
                <div class="flex justify-between items-center">
                  <label class="font-label-md text-primary uppercase tracking-widest" style="font-size:12px;">Investment Budget (AED)</label>
                  <span class="font-bold" style="color:#775a19; font-size:1.25rem; font-family:'Montserrat',sans-serif;">{{ budgetDisplay }}</span>
                </div>
                <input v-model="budgetRaw" type="range" min="1000000" max="50000000" step="500000"
                  class="w-full cursor-pointer"
                  :style="sliderStyle(budgetRaw, 1000000, 50000000)" />
                <div class="flex justify-between text-outline" style="font-size:12px;">
                  <span>1M AED</span><span>50M+ AED</span>
                </div>
              </div>

              <!-- Message -->
              <div class="space-y-2">
                <label class="font-label-md text-primary uppercase tracking-widest" style="font-size:12px;">Your Message</label>
                <textarea v-model="form.message" rows="4" placeholder="Briefly describe your investment objectives..."
                  class="w-full border-0 border-b border-outline-variant py-3 bg-transparent text-on-surface resize-none"
                  style="outline:none; font-size:1rem;"
                  @focus="e=>e.target.style.borderColor='#041627'"
                  @blur="e=>e.target.style.borderColor=''"></textarea>
              </div>

              <div class="pt-4">
                <button type="submit"
                  class="px-12 py-4 text-on-primary font-label-md uppercase tracking-widest hover:bg-secondary transition-all shadow-sm active:scale-95 flex items-center gap-3 disabled:opacity-60"
                  :style="{ backgroundColor: '#041627' }"
                  :disabled="form.processing">
                  <span>{{ form.processing ? 'Sending...' : 'Submit Inquiry' }}</span>
                  <span class="material-symbols-outlined">{{ form.processing ? 'autorenew' : 'send' }}</span>
                </button>
              </div>

            </form>
          </div>

          <!-- Sidebar -->
          <aside class="lg:col-span-4 space-y-6">

            <!-- Office card -->
            <div class="relative overflow-hidden p-8 md:p-10" style="background:#041627;">
              <div class="absolute -right-8 -bottom-8 opacity-10 pointer-events-none select-none material-symbols-outlined" style="font-size:160px;">account_tree</div>
              <h3 class="text-white mb-8" style="font-family:'Montserrat',sans-serif; font-size:1.5rem; font-weight:600;">Dubai HQ</h3>
              <div class="space-y-6">
                <div class="flex gap-4">
                  <span class="material-symbols-outlined flex-shrink-0" style="color:#e9c176;">location_on</span>
                  <div>
                      <p class="font-label-md uppercase tracking-widest mb-1" style="font-size:11px; color:#e9c176;">Address</p>
                      <p style="font-size:0.9375rem; color:rgba(255,255,255,0.8);">6418 N Maplewood Ave<br/>Chicago, IL 60645, USA</p>
                  </div>
                </div>
                <div class="flex gap-4">
                  <span class="material-symbols-outlined flex-shrink-0" style="color:#e9c176;">call</span>
                  <div>
                      <p class="font-label-md uppercase tracking-widest mb-1" style="font-size:11px; color:#e9c176;">Phone</p>
                      <p style="font-size:0.9375rem; color:rgba(255,255,255,0.8);">+1 703-829-4357</p>
                  </div>
                </div>
                <div class="flex gap-4">
                  <span class="material-symbols-outlined flex-shrink-0" style="color:#e9c176;">mail</span>
                  <div>
                      <p class="font-label-md uppercase tracking-widest mb-1" style="font-size:11px; color:#e9c176;">Email</p>
                      <p style="font-size:0.9375rem; color:rgba(255,255,255,0.8);">Support@etaxplanner.com</p>
                  </div>
                </div>
              </div>
              <div class="mt-10 pt-8 border-t" style="border-color:rgba(56,72,90,0.6);">
                <p class="mb-3" style="font-size:12px; color:#8192a7;">Operating Hours</p>
                <div class="flex justify-between" style="font-size:0.9375rem; color:rgba(255,255,255,0.8);">
                  <span>Mon – Sat</span><span>8:00 AM – 8:00 PM (EST)</span>
                </div>
              </div>
            </div>

            <!-- Map teaser -->
            <div class="h-56 border border-outline-variant overflow-hidden relative group cursor-pointer"
              style="filter:grayscale(1) brightness(0.9); transition:filter 0.6s;"
              @mouseenter="e=>e.currentTarget.style.filter='none'"
              @mouseleave="e=>e.currentTarget.style.filter='grayscale(1) brightness(0.9)'">
              <div class="w-full h-full bg-cover bg-center"
                style="background-image:url('https://lh3.googleusercontent.com/aida-public/AB6AXuD2NiRhuqI6jELDM2g2zxNRD79ayYng54yFFnDTvK9gNIlXIRqpRw0g27wH37gkwvVuB2eq3sGkCcD1rkyDedVC4USllg_AYdD3PciMKF8IKz1UGKB_FBkzqIQy8QisimLA38aw9cS_9hM0ULsDQDXpM5ZvVoP7vASTV3p7pc_nlN8c5tFq-64_pfjBLbR3QeFNbjaze2QQrvGPCNAsCHWZ9xEYuHl7sIQKtLfMD4VPOTGBaJTEygCfNWHFtUElTzX4w1pkD3NAQfEd');">
              </div>
              <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity" style="background:rgba(4,22,39,0.2);">
                <span class="bg-white text-primary px-4 py-2 font-label-md" style="font-size:12px; box-shadow:0 4px 20px rgba(0,0,0,0.15);">Open in Maps</span>
              </div>
            </div>

          </aside>
        </div>
      </section>

      <!-- Investment Tree Closer -->
      <!-- <section class="py-24 text-center overflow-hidden">
        <div class="max-w-3xl mx-auto px-margin-mobile">
          <span class="material-symbols-outlined mb-6 block" style="color:#775a19; font-size:3rem; font-variation-settings:'FILL' 1;">account_tree</span>
          <h3 class="text-primary mb-4" style="font-family:'Montserrat',sans-serif; font-size:2rem; font-weight:600; letter-spacing:-0.01em;">The Investment Tree</h3>
          <p class="text-on-surface-variant italic" style="font-size:1rem;">Deep Roots in Dubai, Infinite Growth for Your Portfolio.</p>
          <div class="flex justify-center mt-10">
            <div class="w-px h-24" style="background:linear-gradient(to bottom, #775a19, transparent);"></div>
          </div>
        </div>
      </section> -->

    </main>

    <!-- Footer -->
    <Footer source="contact" />

    <!-- Mobile bottom nav -->
    <nav class="fixed bottom-0 left-0 w-full z-50 flex justify-around items-center h-16 bg-surface border-t border-outline-variant shadow-md md:hidden">
      <Link href="/"            class="flex flex-col items-center text-outline"><span class="material-symbols-outlined">home</span><span style="font-size:10px;">Home</span></Link>
      <Link href="/investments" class="flex flex-col items-center text-outline"><span class="material-symbols-outlined">search_insights</span><span style="font-size:10px;">Explore</span></Link>
      <Link href="/guide"       class="flex flex-col items-center text-outline"><span class="material-symbols-outlined">menu_book</span><span style="font-size:10px;">Guide</span></Link>
      <Link href="/contact"     class="flex flex-col items-center text-secondary"><span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1;">calendar_month</span><span style="font-size:10px;">Contact</span></Link>
    </nav>

  </div>
</template>

<script setup>
import { ref, computed, watch } from 'vue';
import { Link, useForm } from '@inertiajs/vue3';
import NavBar from '@/Components/NavBar.vue';
import teamImage from '@images/screen_contact.png';
import Footer from '@/Components/Footer.vue';

const propertyTypes = ['Residential', 'Commercial', 'Off-Plan'];

const form = useForm({
  name: '', email: '', phone: '', country: '',
  contact_method: 'Email', property_type: 'Residential',
  budget: '', message: '',
});

const budgetRaw = ref(2000000);
const budgetDisplay = computed(() =>
    budgetRaw.value >= 50000000 ? '50,000,000+ AED' : budgetRaw.value.toLocaleString() + ' AED'
);
const sliderStyleContact = computed(() => sliderStyle(budgetRaw.value, 1000000, 50000000));

watch(budgetRaw, (v) => {
    form.budget = v >= 50000000 ? '50,000,000+ AED' : v.toLocaleString() + ' AED';
}, { immediate: true });

function submitForm() {
    // client-side validation
    form.clearErrors();
    let valid = true;
    if (!form.name.trim())  { form.setError('name', 'Full name is required.'); valid = false; }
    if (!form.email.trim()) { form.setError('email', 'Email address is required.'); valid = false; }
    else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(form.email)) { form.setError('email', 'Enter a valid email address.'); valid = false; }
    if (!valid) return;
    form.post('/contact');
}

function sliderStyle(val, min, max) {
    const pct = ((val - min) / (max - min)) * 100;
    return {
        height: '4px',
        outline: 'none',
        background: `linear-gradient(to right, #775a19 ${pct}%, #c4c6cd ${pct}%)`,
    };
}
</script>

<style scoped>
input[type="range"] {
  appearance: none; -webkit-appearance: none;
  height: 4px; border-radius: 2px;
  background: linear-gradient(to right, #775a19 calc(var(--pct, 50%) * 1%), #c4c6cd calc(var(--pct, 50%) * 1%));
  outline: none;
}
input[type="range"]::-webkit-slider-thumb {
  -webkit-appearance: none; width:18px; height:18px;
  border-radius:50%; background:#775a19; cursor:pointer; border:2px solid #fff;
  box-shadow: 0 1px 4px rgba(0,0,0,0.2);
}
input[type="range"]::-moz-range-thumb {
  width:18px; height:18px; border-radius:50%;
  background:#775a19; cursor:pointer; border:2px solid #fff;
}
.field-error { color: #ba1a1a; font-size: 12px; margin-top: 4px; }
</style>
