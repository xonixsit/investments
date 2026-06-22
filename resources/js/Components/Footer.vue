<template>
  <footer class="w-full pt-20 pb-10 bg-primary border-t border-outline">
    <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop grid grid-cols-1 md:grid-cols-4 gap-gutter text-on-primary">
      <div class="col-span-1">
        <div class="flex items-center gap-3 mb-6">
          <img :src="logoUrl" style="height:44px;width:auto;display:block;object-fit:contain;filter:brightness(0) invert(1);" alt="ETax Investments Dubai" class="h-10 w-auto" />
        </div>
        <p class="font-body-md opacity-70 max-w-xs">Invest in Dubai Properties with Direct Developer Pricing – No Buyer Brokerage.</p>
      </div>
      <div>
        <h4 class="font-label-md uppercase tracking-widest mb-6 text-secondary-fixed">Quick Links</h4>
        <ul class="space-y-4">
          <li><Link class="font-body-md text-outline-variant hover:text-secondary-fixed-dim underline transition-all" href="/investments">Investment Catalog</Link></li>
          <li><Link class="font-body-md text-outline-variant hover:text-secondary-fixed-dim underline transition-all" href="/guide">Investor Guide</Link></li>
          <li><Link class="font-body-md text-outline-variant hover:text-secondary-fixed-dim underline transition-all" href="/faqs">FAQs</Link></li>
          <li><Link class="font-body-md text-outline-variant hover:text-secondary-fixed-dim underline transition-all" href="/disclaimer">Disclaimer</Link></li>
        </ul>
      </div>
      <div>
        <h4 class="font-label-md uppercase tracking-widest mb-6 text-secondary-fixed">Legal</h4>
        <ul class="space-y-4">
          <li><Link class="font-body-md text-outline-variant hover:text-secondary-fixed-dim underline transition-all" href="/privacy">Privacy Policy</Link></li>
          <li><Link class="font-body-md text-outline-variant hover:text-secondary-fixed-dim underline transition-all" href="/terms">Terms of Service</Link></li>
        </ul>
      </div>
      <div>
        <h4 class="font-label-md uppercase tracking-widest mb-6 text-secondary-fixed">Newsletter</h4>
        <p class="font-caption opacity-60 mb-4">Stay updated with premium Dubai property launches.</p>
        <form @submit.prevent="submit" class="flex flex-col gap-2">
          <div class="flex gap-2">
            <input 
              v-model="form.email" 
              class="bg-primary-container border-none text-white font-caption px-4 py-2 w-full placeholder:text-white/40" 
              placeholder="Email" 
              type="email" 
              required 
            />
            <button 
              type="submit" 
              class="bg-secondary text-on-secondary px-4 py-2 font-label-md transition-all active:scale-95 disabled:opacity-50"
              :disabled="form.processing"
            >
              {{ form.processing ? '...' : 'Join' }}
            </button>
          </div>
          <p v-if="successMessage" class="text-secondary-fixed text-caption transition-all">{{ successMessage }}</p>
          <p v-if="form.errors.email" class="text-red-400 text-caption">{{ form.errors.email }}</p>
        </form>
      </div>
    </div>
    <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop mt-16 pt-8 border-t border-white/10 text-center">
      <p class="font-body-md text-outline-variant">© 2024 ETAXPLANNER PROPERTY CONNECT. All rights reserved. Registered with RERA.</p>
    </div>
  </footer>
</template>

<script setup>
import { ref } from 'vue';
import { Link, useForm } from '@inertiajs/vue3';
import logoUrl from '@images/etax_investments_dubai.png';

const props = defineProps({
  source: {
    type: String,
    default: 'footer'
  }
});

const form = useForm({
  email: '',
  source: props.source
});

const successMessage = ref('');

const submit = () => {
  form.post('/newsletter', {
    preserveScroll: true,
    onSuccess: () => {
      successMessage.value = 'Thank you for subscribing!';
      form.reset();
      setTimeout(() => {
        successMessage.value = '';
      }, 5000);
    }
  });
};
</script>
