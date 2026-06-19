<template>
  <div class="bg-background text-on-surface min-h-screen flex flex-col" style="font-family:'Inter',sans-serif;">
    <NavBar />

    <main class="flex-grow flex items-center justify-center py-16 px-4" style="background-color:#fbf9f4;">
      <!-- Ghaf dot bg -->
      <div class="fixed inset-0 pointer-events-none" style="background-image:radial-gradient(#c4c6cd 0.5px,transparent 0.5px);background-size:24px 24px;opacity:0.4;z-index:0;"></div>

      <div class="relative z-10 w-full max-w-2xl bg-white py-14 px-10 md:px-16" style="border-left:4px solid #775a19; box-shadow:0px 4px 40px rgba(26,43,60,0.08);">

        <!-- Check icon -->
        <div class="w-14 h-14 flex items-center justify-center mb-8 mx-auto" style="background:#f0eee9; border-radius:0.5rem;">
          <span class="material-symbols-outlined" style="color:#775a19; font-size:28px; font-variation-settings:'FILL' 0,'wght' 300;">check_circle</span>
        </div>

        <h1 class="text-center text-primary mb-4" style="font-family:'Montserrat',sans-serif; font-size:2rem; font-weight:700; letter-spacing:-0.02em;">
          Request Received
        </h1>
        <p class="text-center text-on-surface-variant mb-10" style="font-size:1rem; line-height:1.7; max-width:480px; margin-inline:auto;">
          Thank you for choosing <strong>ETAXPLANNER PROPERTY CONNECT</strong>. Our team of senior investment advisors is reviewing your profile to ensure we provide the most relevant market insights.
        </p>

        <!-- 3-step process -->
        <div class="grid grid-cols-3 gap-6 mb-10">
          <div v-for="step in steps" :key="step.num" class="border-t-2 pt-4" style="border-color:#e4e2dd;">
            <p class="mb-2 flex items-center gap-2" style="font-size:12px; color:#c4c6cd; font-weight:600;">
              <span>{{ step.num }}</span>
              <span class="flex-1 h-px" style="background:#e4e2dd;"></span>
            </p>
            <p class="uppercase tracking-widest mb-2" style="font-size:11px; font-weight:600; color:#041627;">{{ step.title }}</p>
            <p class="text-on-surface-variant" style="font-size:13px; line-height:1.5;">{{ step.desc }}</p>
          </div>
        </div>

        <!-- Email notice -->
        <div class="flex items-start gap-4 p-5 mb-10" style="background:#f5f3ee;">
          <span class="material-symbols-outlined flex-shrink-0" style="color:#775a19;">mail</span>
          <div>
            <p class="font-semibold text-primary mb-1" style="font-size:1rem;">Check Your Inbox</p>
            <p class="text-on-surface-variant" style="font-size:0.9375rem; line-height:1.5;">
              A confirmation email has been sent to <strong>{{ email }}</strong>. Please check your spam folder if you don't see it within 5 minutes.
            </p>
          </div>
        </div>

        <!-- CTA buttons -->
        <div class="flex flex-col sm:flex-row gap-4">
          <Link href="/guide"
            class="flex-1 text-center bg-primary text-on-primary py-4 font-label-md uppercase tracking-widest hover:bg-secondary transition-all active:scale-95">
            Explore Market Insights
          </Link>
          <Link href="/investments"
            class="flex-1 text-center border border-primary text-primary py-4 font-label-md uppercase tracking-widest hover:bg-primary hover:text-on-primary transition-all active:scale-95">
            Return to Opportunities
          </Link>
        </div>

      </div>
    </main>

    <!-- Minimal footer -->
    <!-- Footer -->
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
            <li><a class="font-body-md text-outline-variant hover:text-secondary-fixed-dim underline transition-all" href="/investments">Investment Catalog</a></li>
            <li><a class="font-body-md text-outline-variant hover:text-secondary-fixed-dim underline transition-all" href="/guide">Investor Guide</a></li>
            <li><a class="font-body-md text-outline-variant hover:text-secondary-fixed-dim underline transition-all" href="/faqs">FAQs</a></li>
          </ul>
        </div>
        <div>
          <h4 class="font-label-md uppercase tracking-widest mb-6 text-secondary-fixed">Legal</h4>
          <ul class="space-y-4">
            <li><a class="font-body-md text-outline-variant hover:text-secondary-fixed-dim underline transition-all" href="#">Privacy Policy</a></li>
            <li><a class="font-body-md text-outline-variant hover:text-secondary-fixed-dim underline transition-all" href="#">Terms of Service</a></li>
          </ul>
        </div>
        <div>
          <h4 class="font-label-md uppercase tracking-widest mb-6 text-secondary-fixed">Newsletter</h4>
          <p class="font-caption opacity-60 mb-4">Stay updated with premium Dubai property launches.</p>
          <div class="flex gap-2">
            <input class="bg-primary-container border-none text-white font-caption px-4 py-2 w-full" placeholder="Email" type="email" />
            <button class="bg-secondary text-on-secondary px-4 py-2 font-label-md">Join</button>
          </div>
        </div>
      </div>
      <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop mt-16 pt-8 border-t border-white/10 text-center">
        <p class="font-body-md text-outline-variant">© 2024 ETAXPLANNER PROPERTY CONNECT. All rights reserved. Registered with RERA.</p>
      </div>
    </footer>

  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
import NavBar from '@/Components/NavBar.vue';
import logoUrl from '@images/etax_investments_dubai.png';

defineProps({ name: String, email: String });

const steps = [
  {
    num: '01',
    title: 'Profile Review',
    desc: 'We analyze your investment goals and budget to align with the current market landscape.',
  },
  {
    num: '02',
    title: 'Matching',
    desc: 'We curate a bespoke shortlist of developer-direct opportunities exclusive to our network.',
  },
  {
    num: '03',
    title: 'Contact',
    desc: 'An advisor will call or email you within 24 hours to schedule your virtual presentation.',
  },
];
</script>
