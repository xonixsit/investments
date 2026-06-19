<template>
  <div class="bg-background text-on-surface min-h-screen flex flex-col" style="font-family:'Inter',sans-serif;">

    <!-- NavBar -->
    <NavBar />

    <main class="flex-grow">
      <!-- Split screen -->
      <section class="flex flex-col lg:flex-row min-h-screen">

        <!-- Left: branding panel -->
        <div class="lg:w-5/12 flex flex-col justify-center relative overflow-hidden p-8 md:p-16 py-12" style="background-color:#1a2b3c;">
          <!-- dot pattern -->
          <div class="absolute inset-0 pointer-events-none" style="background-image:radial-gradient(#C5A059 0.5px, transparent 0.5px); background-size:24px 24px; opacity:0.1;"></div>
          <!-- ghaf motif -->
          <div class="absolute bottom-[-8%] right-[-8%] opacity-10 pointer-events-none select-none" style="font-size:320px; line-height:1; font-family:'Material Symbols Outlined';">eco</div>

          <div class="relative z-10 max-w-md">
            <div class="flex items-center gap-3 mb-6" style="color:#e9c176;">
              <span class="w-8 h-px" style="background:#e9c176;"></span>
              <span class="font-label-md uppercase tracking-widest" style="font-size:12px;">Expert Guidance</span>
            </div>
            <h1 class="text-white mb-6" style="font-family:'Montserrat',sans-serif; font-size:clamp(2rem,3.5vw,3rem); font-weight:700; line-height:1.167; letter-spacing:-0.02em;">
              Speak With an <span style="color:#e9c176;">Investment Advisor</span>
            </h1>
            <p class="mb-12" style="font-size:1.125rem; line-height:1.75; color:#b7c8de; opacity:0.9;">
              Unlock exclusive opportunities in the Dubai real estate market. Our senior advisors provide data-driven insights tailored to your portfolio's growth and stability.
            </p>

            <div class="space-y-8">
              <div class="flex gap-5 items-start">
                <div class="p-3 flex-shrink-0" style="background:rgba(79,96,115,0.25); border-radius:0.5rem;">
                  <span class="material-symbols-outlined" style="color:#e9c176; font-variation-settings:'FILL' 1;">location_on</span>
                </div>
                <div>
                  <p class="font-label-md uppercase tracking-widest mb-1" style="font-size:12px; color:#e9c176;">Office Location</p>
                  <p style="font-size:0.9375rem; color:rgba(255,255,255,0.8);">Level 12, Emirates Towers,<br/>Sheikh Zayed Road, Dubai, UAE</p>
                </div>
              </div>
              <div class="flex gap-5 items-start">
                <div class="p-3 flex-shrink-0" style="background:rgba(79,96,115,0.25); border-radius:0.5rem;">
                  <span class="material-symbols-outlined" style="color:#e9c176; font-variation-settings:'FILL' 1;">mail</span>
                </div>
                <div>
                  <p class="font-label-md uppercase tracking-widest mb-1" style="font-size:12px; color:#e9c176;">Email Inquiry</p>
                  <p style="font-size:0.9375rem; color:rgba(255,255,255,0.8);">invest@etaxplanner.ae</p>
                </div>
              </div>
              <div class="flex gap-5 items-start">
                <div class="p-3 flex-shrink-0" style="background:rgba(79,96,115,0.25); border-radius:0.5rem;">
                  <span class="material-symbols-outlined" style="color:#e9c176; font-variation-settings:'FILL' 1;">verified</span>
                </div>
                <div>
                  <p class="font-label-md uppercase tracking-widest mb-1" style="font-size:12px; color:#e9c176;">Regulatory Status</p>
                  <p style="font-size:0.9375rem; color:rgba(255,255,255,0.8);">Registration: RERA #29482</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Right: form panel -->
        <div class="lg:w-7/12 bg-background flex items-start lg:items-center justify-center p-6 md:p-12 lg:p-16">
          <div class="w-full max-w-2xl bg-white p-8 md:p-12" style="border-top:4px solid #775a19; box-shadow:0px 4px 20px rgba(26,43,60,0.05);">

            <h2 class="text-primary mb-1" style="font-family:'Montserrat',sans-serif; font-size:1.5rem; font-weight:600;">Secure Consultation</h2>
            <p class="text-on-surface-variant mb-10" style="font-size:1rem;">Complete the form below to receive a bespoke investment analysis within 24 hours.</p>

            <form @submit.prevent="submitForm" class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-6">

              <!-- Full Name -->
              <div class="space-y-2">
                <label class="font-label-md text-on-surface-variant uppercase tracking-widest" style="font-size:12px;">Full Name</label>
                <input v-model="form.name" type="text" placeholder="John Doe"
                  class="w-full border-0 border-b bg-transparent py-2 px-0 text-on-surface transition-colors"
                  :style="{ borderColor: form.errors.name ? '#ba1a1a' : '' }"
                  style="outline:none; font-size:1rem; border-bottom: 1px solid #c4c6cd;"
                  @focus="e => e.target.style.borderColor='#041627'"
                  @blur="e => e.target.style.borderColor= form.errors.name ? '#ba1a1a' : ''" />
                <p v-if="form.errors.name" class="field-error">{{ form.errors.name }}</p>
              </div>

              <!-- Email -->
              <div class="space-y-2">
                <label class="font-label-md text-on-surface-variant uppercase tracking-widest" style="font-size:12px;">Email Address</label>
                <input v-model="form.email" type="email" placeholder="john@example.com"
                  class="w-full border-0 border-b bg-transparent py-2 px-0 text-on-surface transition-colors"
                  style="outline:none; font-size:1rem; border-bottom: 1px solid #c4c6cd;"
                  @focus="e => e.target.style.borderColor='#041627'"
                  @blur="e => e.target.style.borderColor= form.errors.email ? '#ba1a1a' : ''" />
                <p v-if="form.errors.email" class="field-error">{{ form.errors.email }}</p>
              </div>

              <!-- Phone -->
              <div class="space-y-2">
                <label class="font-label-md text-on-surface-variant uppercase tracking-widest" style="font-size:12px;">Phone Number</label>
                <div class="flex gap-2">
                  <select v-model="form.dial_code"
                    class="w-20 border-0 border-b border-outline-variant bg-transparent py-2 px-0 text-on-surface"
                    style="outline:none; font-size:1rem;">
                    <option>+971</option><option>+1</option><option>+44</option><option>+91</option>
                  </select>
                  <input v-model="form.phone" type="tel" placeholder="50 000 0000"
                    class="flex-grow border-0 border-b border-outline-variant bg-transparent py-2 px-0 text-on-surface"
                    style="outline:none; font-size:1rem;"
                    @focus="e => e.target.style.borderColor='#041627'"
                    @blur="e => e.target.style.borderColor=''" />
                </div>
                <p v-if="form.errors.phone" class="field-error">{{ form.errors.phone }}</p>
              </div>

              <!-- Country -->
              <div class="space-y-2">
                <label class="font-label-md text-on-surface-variant uppercase tracking-widest" style="font-size:12px;">Country of Residence</label>
                <input v-model="form.country" type="text" placeholder="United Arab Emirates"
                  class="w-full border-0 border-b border-outline-variant bg-transparent py-2 px-0 text-on-surface"
                  style="outline:none; font-size:1rem;"
                  @focus="e => e.target.style.borderColor='#041627'"
                  @blur="e => e.target.style.borderColor=''" />
              </div>

              <!-- Preferred Contact -->
              <div class="space-y-2">
                <label class="font-label-md text-on-surface-variant uppercase tracking-widest" style="font-size:12px;">Preferred Contact Method</label>
                <select v-model="form.contact_method"
                  class="w-full border-0 border-b border-outline-variant bg-transparent py-2 px-0 text-on-surface"
                  style="outline:none; font-size:1rem;">
                  <option>WhatsApp</option><option>Phone Call</option><option>Email</option>
                </select>
              </div>

              <!-- Property Interest -->
              <div class="space-y-2">
                <label class="font-label-md text-on-surface-variant uppercase tracking-widest" style="font-size:12px;">Property Interest</label>
                <select v-model="form.property_interest"
                  class="w-full border-0 border-b border-outline-variant bg-transparent py-2 px-0 text-on-surface"
                  style="outline:none; font-size:1rem;">
                  <option>Residential</option><option>Commercial</option><option>Off-Plan</option><option>Investment Portfolio</option>
                </select>
              </div>

              <!-- Budget Slider -->
              <div class="md:col-span-2 space-y-4">
                <div class="flex justify-between items-center">
                  <label class="font-label-md text-on-surface-variant uppercase tracking-widest" style="font-size:12px;">Investment Budget (AED)</label>
                  <span class="font-bold" style="color:#775a19; font-size:0.875rem;">{{ budgetLabel }}</span>
                </div>
                <input v-model="budgetVal" type="range" min="0.5" max="50" step="0.5"
                  class="w-full cursor-pointer"
                  :style="sliderStyleConsult" />
              </div>

              <!-- Message -->
              <div class="md:col-span-2 space-y-2">
                <label class="font-label-md text-on-surface-variant uppercase tracking-widest" style="font-size:12px;">Message / Notes</label>
                <textarea v-model="form.message" rows="3" placeholder="Tell us about your investment goals..."
                  class="w-full border-0 border-b border-outline-variant bg-transparent py-2 px-0 text-on-surface resize-none"
                  style="outline:none; font-size:1rem;"
                  @focus="e => e.target.style.borderColor='#041627'"
                  @blur="e => e.target.style.borderColor=''"></textarea>
              </div>

              <!-- Submit -->
              <div class="md:col-span-2 pt-4">
                <button type="submit"
                  class="w-full text-white py-4 font-label-md uppercase tracking-widest flex items-center justify-center gap-2 group transition-all active:scale-95"
                  :style="{ backgroundColor: '#041627' }"
                  :disabled="form.processing">
                  <span v-if="!form.processing">REQUEST PRIVATE ADVISORY</span>
                  <span v-else>PROCESSING...</span>
                  <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform" v-if="!form.processing">arrow_forward</span>
                </button>
              </div>

            </form>
          </div>
        </div>

      </section>
    </main>

    <!-- Footer -->
    <footer class="w-full bg-primary pt-20 pb-10 border-t border-outline">
      <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop grid grid-cols-1 md:grid-cols-4 gap-gutter text-on-primary">
        <div>
          <img :src="logoUrl" alt="ETax" class="h-10 w-auto mb-6" />
          <p class="font-body-md opacity-70 max-w-xs">Nurturing Dubai's real estate landscape with deep roots and infinite growth.</p>
        </div>
        <div>
          <h4 class="font-label-md uppercase tracking-widest mb-6 text-secondary-fixed">Quick Links</h4>
          <ul class="space-y-4">
            <li><Link href="/"            class="font-body-md text-outline-variant hover:text-secondary-fixed-dim underline transition-all">Home</Link></li>
            <li><Link href="/investments" class="font-body-md text-outline-variant hover:text-secondary-fixed-dim underline transition-all">Investment Catalog</Link></li>
            <li><Link href="/guide"       class="font-body-md text-outline-variant hover:text-secondary-fixed-dim underline transition-all">Investor Guide</Link></li>
          </ul>
        </div>
        <div>
          <h4 class="font-label-md uppercase tracking-widest mb-6 text-secondary-fixed">Contact</h4>
          <p class="font-body-md text-outline-variant">Level 12, Emirates Towers</p>
          <p class="font-body-md text-outline-variant">Sheikh Zayed Road, Dubai</p>
          <p class="font-body-md text-outline-variant mt-2">invest@etaxplanner.ae</p>
        </div>
        <div>
          <h4 class="font-label-md uppercase tracking-widest mb-6 text-secondary-fixed">Legal</h4>
          <ul class="space-y-4">
            <li><a href="#" class="font-body-md text-outline-variant hover:text-secondary-fixed-dim underline transition-all">Privacy Policy</a></li>
            <li><a href="#" class="font-body-md text-outline-variant hover:text-secondary-fixed-dim underline transition-all">Terms of Service</a></li>
            <li><p class="font-body-md text-outline-variant mt-4">RERA Registration: #29482</p></li>
          </ul>
        </div>
      </div>
      <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop mt-16 pt-8 border-t border-white/10 text-center">
        <p class="font-body-md text-outline-variant">© 2024 ETAXPLANNER PROPERTY CONNECT. All rights reserved. Registered with RERA.</p>
      </div>
    </footer>

  </div>
</template>

<script setup>
import { ref, computed, watch } from 'vue';
import { Link, useForm } from '@inertiajs/vue3';
import logoUrl from '@images/etax_investments_dubai.png';
import NavBar from '@/Components/NavBar.vue';

const form = useForm({
    name: '', email: '', dial_code: '+971', phone: '',
    country: '', contact_method: 'WhatsApp',
    property_interest: 'Residential', budget_label: '', message: '',
});

const budgetVal = ref(10);
const budgetLabel = computed(() => budgetLabelFromVal(budgetVal.value));
const sliderStyleConsult = computed(() => sliderStyle(budgetVal.value, 0.5, 50));

// keep form in sync
watch(budgetVal, (v) => { form.budget_label = budgetLabelFromVal(v); }, { immediate: true });

function updateSliderTrack(val, min, max) {
    const pct = ((val - min) / (max - min)) * 100;
    document.querySelectorAll('input[type="range"]').forEach(el => {
        el.style.setProperty('--pct', pct.toFixed(1));
    });
}

function budgetLabelFromVal(v) {
    v = parseFloat(v);
    if (v < 1)   return 'Below 1M AED';
    if (v >= 45) return '50M+ AED';
    return `${Math.floor(v)}M – ${Math.floor(v * 1.5) + 1}M AED`;
}

// init label
form.budget_label = budgetLabelFromVal(10);

function submitForm() {
    // client-side validation
    form.clearErrors();
    let valid = true;
    if (!form.name.trim())  { form.setError('name', 'Full name is required.'); valid = false; }
    if (!form.email.trim()) { form.setError('email', 'Email address is required.'); valid = false; }
    else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(form.email)) { form.setError('email', 'Enter a valid email address.'); valid = false; }
    if (!form.phone.trim()) { form.setError('phone', 'Phone number is required.'); valid = false; }
    if (!valid) return;
    form.post('/consult');
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
