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
                  <p style="font-size:0.9375rem; color:rgba(255,255,255,0.8);">pro.investment@etaxplanner.com</p>
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
                <label class="font-label-md text-on-surface-variant uppercase tracking-widest" style="font-size:12px;">
                  Full Name <span class="text-red-600">*</span>
                </label>
                <div class="relative">
                  <input v-model="form.name" type="text" placeholder="John Doe"
                    class="w-full border-0 border-b bg-transparent py-2 px-0 text-on-surface transition-colors pr-8"
                    :class="{ 'border-red-600': form.errors.name, 'border-green-600': form.name && !form.errors.name && touched.name }"
                    style="outline:none; font-size:1rem; border-bottom: 1px solid #c4c6cd;"
                    @focus="handleFocus('name')"
                    @blur="handleBlur('name')"
                    @input="validateField('name')" />
                  <span v-if="form.name && !form.errors.name && touched.name" class="absolute right-0 bottom-2 material-symbols-outlined text-green-600" style="font-size:20px;">check_circle</span>
                  <span v-if="form.errors.name" class="absolute right-0 bottom-2 material-symbols-outlined text-red-600" style="font-size:20px;">error</span>
                </div>
                <p v-if="form.errors.name" class="field-error">{{ form.errors.name }}</p>
              </div>

              <!-- Email -->
              <div class="space-y-2">
                <label class="font-label-md text-on-surface-variant uppercase tracking-widest" style="font-size:12px;">
                  Email Address <span class="text-red-600">*</span>
                </label>
                <div class="relative">
                  <input v-model="form.email" type="email" placeholder="john@example.com"
                    class="w-full border-0 border-b bg-transparent py-2 px-0 text-on-surface transition-colors pr-8"
                    :class="{ 'border-red-600': form.errors.email, 'border-green-600': form.email && !form.errors.email && touched.email }"
                    style="outline:none; font-size:1rem; border-bottom: 1px solid #c4c6cd;"
                    @focus="handleFocus('email')"
                    @blur="handleBlur('email')"
                    @input="validateField('email')" />
                  <span v-if="form.email && !form.errors.email && touched.email" class="absolute right-0 bottom-2 material-symbols-outlined text-green-600" style="font-size:20px;">check_circle</span>
                  <span v-if="form.errors.email" class="absolute right-0 bottom-2 material-symbols-outlined text-red-600" style="font-size:20px;">error</span>
                </div>
                <p v-if="form.errors.email" class="field-error">{{ form.errors.email }}</p>
              </div>

              <!-- Phone -->
              <div class="space-y-2">
                <label class="font-label-md text-on-surface-variant uppercase tracking-widest" style="font-size:12px;">
                  Phone Number <span class="text-red-600">*</span>
                </label>
                <div class="flex gap-2 items-end relative">
                  <select v-model="form.dial_code"
                    class="w-20 border-0 border-b border-outline-variant bg-transparent py-2 px-0 text-on-surface"
                    style="outline:none; font-size:1rem;">
                    <option>+971</option><option>+1</option><option>+44</option><option>+91</option><option>+966</option><option>+974</option><option>+965</option>
                  </select>
                  <div class="flex-grow relative">
                    <input v-model="form.phone" type="tel" placeholder="50 000 0000"
                      class="w-full border-0 border-b border-outline-variant bg-transparent py-2 px-0 pr-8 text-on-surface transition-colors"
                      :class="{ 'border-red-600': form.errors.phone, 'border-green-600': form.phone && !form.errors.phone && touched.phone }"
                      style="outline:none; font-size:1rem;"
                      @focus="handleFocus('phone')"
                      @blur="handleBlur('phone')"
                      @input="validateField('phone')" />
                    <span v-if="form.phone && !form.errors.phone && touched.phone" class="absolute right-0 bottom-2 material-symbols-outlined text-green-600" style="font-size:20px;">check_circle</span>
                    <span v-if="form.errors.phone" class="absolute right-0 bottom-2 material-symbols-outlined text-red-600" style="font-size:20px;">error</span>
                  </div>
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
                <label class="font-label-md text-on-surface-variant uppercase tracking-widest" style="font-size:12px;">
                  Preferred Contact Method <span class="text-red-600">*</span>
                </label>
                <select v-model="form.contact_method"
                  class="w-full border-0 border-b border-outline-variant bg-transparent py-2 px-0 text-on-surface"
                  style="outline:none; font-size:1rem;">
                  <option>WhatsApp</option><option>Phone Call</option><option>Email</option>
                </select>
              </div>

              <!-- Property Interest -->
              <div class="space-y-2">
                <label class="font-label-md text-on-surface-variant uppercase tracking-widest" style="font-size:12px;">
                  Property Interest <span class="text-red-600">*</span>
                </label>
                <select v-model="form.property_interest"
                  class="w-full border-0 border-b border-outline-variant bg-transparent py-2 px-0 text-on-surface"
                  style="outline:none; font-size:1rem;">
                  <option>Residential</option><option>Commercial</option><option>Off-Plan</option><option>Investment Portfolio</option>
                </select>
              </div>

                <!-- Investment Objective -->
                <div class="space-y-2">
                  <label class="font-label-md text-on-surface-variant uppercase tracking-widest" style="font-size:12px;">
                    Investment Objective <span class="text-red-600">*</span>
                  </label>
                  <select v-model="form.investment_objective"
                    class="w-full border-0 border-b border-outline-variant bg-transparent py-2 px-0 text-on-surface"
                    :class="{ 'border-red-600': form.errors.investment_objective }"
                    style="outline:none; font-size:1rem;"
                    @blur="validateField('investment_objective')">
                    <option value="">Select an objective</option>
                    <option>Rental Income</option>
                    <option>Capital Appreciation</option>
                    <option>Diversification</option>
                    <option>Holiday Home</option>
                    <option>Commercial Investment</option>
                  </select>
                  <p v-if="form.errors.investment_objective" class="field-error">{{ form.errors.investment_objective }}</p>
                </div>
                <div class="space-y-2">
                  <label class="font-label-md text-on-surface-variant uppercase tracking-widest" style="font-size:12px;">
                    Timeline to Invest <span class="text-red-600">*</span>
                  </label>
                  <div class="relative">
                    <input v-model="form.timeline_to_invest" type="text" placeholder="e.g., Within 3 months"
                      class="w-full border-0 border-b bg-transparent py-2 px-0 pr-8 text-on-surface transition-colors"
                      :class="{ 'border-red-600': form.errors.timeline_to_invest, 'border-green-600': form.timeline_to_invest && !form.errors.timeline_to_invest && touched.timeline_to_invest }"
                      style="outline:none; font-size:1rem; border-bottom: 1px solid #c4c6cd;"
                      @focus="handleFocus('timeline_to_invest')"
                      @blur="handleBlur('timeline_to_invest')"
                      @input="validateField('timeline_to_invest')" />
                    <span v-if="form.timeline_to_invest && !form.errors.timeline_to_invest && touched.timeline_to_invest" class="absolute right-0 bottom-2 material-symbols-outlined text-green-600" style="font-size:20px;">check_circle</span>
                    <span v-if="form.errors.timeline_to_invest" class="absolute right-0 bottom-2 material-symbols-outlined text-red-600" style="font-size:20px;">error</span>
                  </div>
                  <p v-if="form.errors.timeline_to_invest" class="field-error">{{ form.errors.timeline_to_invest }}</p>
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
                <div v-if="submitError" class="mb-4 p-4 bg-red-50 border border-red-200 text-red-800 rounded flex items-start gap-2">
                  <span class="material-symbols-outlined text-red-600">error</span>
                  <span>{{ submitError }}</span>
                </div>
                <button type="submit"
                  class="w-full text-white py-4 font-label-md uppercase tracking-widest flex items-center justify-center gap-2 group transition-all active:scale-95 disabled:opacity-50 disabled:cursor-not-allowed"
                  :style="{ backgroundColor: '#041627' }"
                  :disabled="form.processing">
                  <span v-if="!form.processing">REQUEST PRIVATE ADVISORY</span>
                  <span v-else class="flex items-center gap-2">
                    <svg class="animate-spin h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                      <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                      <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    SUBMITTING...
                  </span>
                  <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform" v-if="!form.processing">arrow_forward</span>
                </button>
                <p class="text-center text-sm text-gray-500 mt-3">
                  <span class="text-red-600">*</span> Required fields
                </p>
              </div>

            </form>
          </div>
        </div>

      </section>
    </main>

    <!-- Footer -->
    <Footer source="consult" />

  </div>
</template>

<script setup>
import { ref, computed, watch } from 'vue';
import { Link, useForm } from '@inertiajs/vue3';
import NavBar from '@/Components/NavBar.vue';
import Footer from '@/Components/Footer.vue';

const form = useForm({
    name: '', email: '', dial_code: '+971', phone: '',
    country: '', contact_method: 'WhatsApp',
    property_interest: 'Residential', budget_label: '', message: '',
    investment_objective: '',
    timeline_to_invest: '',
});

const touched = ref({
    name: false,
    email: false,
    phone: false,
    investment_objective: false,
    timeline_to_invest: false,
});

const submitError = ref('');

const budgetVal = ref(10);
const budgetLabel = computed(() => budgetLabelFromVal(budgetVal.value));
const sliderStyleConsult = computed(() => sliderStyle(budgetVal.value, 0.5, 50));

// keep form in sync
watch(budgetVal, (v) => { form.budget_label = budgetLabelFromVal(v); }, { immediate: true });

function handleFocus(field) {
    if (form.errors[field]) {
        form.clearErrors(field);
    }
}

function handleBlur(field) {
    touched.value[field] = true;
    validateField(field);
}

function validateField(field) {
    form.clearErrors(field);
    
    switch(field) {
        case 'name':
            if (!form.name.trim()) {
                form.setError('name', 'Full name is required.');
            } else if (form.name.trim().length < 2) {
                form.setError('name', 'Name must be at least 2 characters.');
            } else if (!/^[a-zA-Z\s'-]+$/.test(form.name)) {
                form.setError('name', 'Name can only contain letters, spaces, hyphens, and apostrophes.');
            }
            break;
        
        case 'email':
            if (!form.email.trim()) {
                form.setError('email', 'Email address is required.');
            } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(form.email)) {
                form.setError('email', 'Please enter a valid email address.');
            }
            break;
        
        case 'phone':
            if (!form.phone.trim()) {
                form.setError('phone', 'Phone number is required.');
            } else if (!/^[\d\s\-\+\(\)]+$/.test(form.phone)) {
                form.setError('phone', 'Please enter a valid phone number.');
            } else if (form.phone.replace(/[\s\-\+\(\)]/g, '').length < 7) {
                form.setError('phone', 'Phone number must be at least 7 digits.');
            }
            break;
        
        case 'investment_objective':
            if (!form.investment_objective || form.investment_objective.trim() === '') {
                form.setError('investment_objective', 'Please select an investment objective.');
            }
            break;
        
        case 'timeline_to_invest':
            if (!form.timeline_to_invest.trim()) {
                form.setError('timeline_to_invest', 'Timeline to invest is required.');
            } else if (form.timeline_to_invest.trim().length < 3) {
                form.setError('timeline_to_invest', 'Please provide a meaningful timeline.');
            }
            break;
    }
}

function validateAllFields() {
    let valid = true;
    
    // Mark all required fields as touched
    Object.keys(touched.value).forEach(key => {
        touched.value[key] = true;
    });
    
    // Validate all required fields
    ['name', 'email', 'phone', 'investment_objective', 'timeline_to_invest'].forEach(field => {
        validateField(field);
        if (form.errors[field]) {
            valid = false;
        }
    });
    
    return valid;
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
    // Clear previous submit error
    submitError.value = '';
    
    // Validate all fields
    if (!validateAllFields()) {
        submitError.value = 'Please correct the errors above before submitting.';
        // Scroll to first error
        setTimeout(() => {
            const firstError = document.querySelector('.field-error');
            if (firstError) {
                firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        }, 100);
        return;
    }
    
    form.post('/consult', {
        onError: () => {
            submitError.value = 'There was an error submitting your request. Please try again.';
        }
    });
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
.field-error { 
  color: #ba1a1a; 
  font-size: 12px; 
  margin-top: 4px;
  display: flex;
  align-items: center;
  gap: 4px;
  animation: slideDown 0.3s ease-out;
}
@keyframes slideDown {
  from {
    opacity: 0;
    transform: translateY(-8px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
input:focus, select:focus, textarea:focus {
  border-color: #041627 !important;
  transition: border-color 0.2s ease;
}
.border-red-600 {
  border-color: #dc2626 !important;
}
.border-green-600 {
  border-color: #16a34a !important;
}
@keyframes spin {
  from { transform: rotate(0deg); }
  to { transform: rotate(360deg); }
}
</style>
