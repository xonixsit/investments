<template>
  <div class="bg-background text-on-surface min-h-screen flex flex-col" style="font-family:'Inter',sans-serif;">
    <NavBar />

    <main class="flex-grow flex items-center justify-center py-16 px-4">
      <div class="fixed inset-0 pointer-events-none" style="background-image:radial-gradient(#c4c6cd 0.5px,transparent 0.5px);background-size:24px 24px;opacity:0.4;z-index:0;"></div>

      <div class="relative z-10 w-full max-w-2xl bg-white py-14 px-10 md:px-16" style="border-left:4px solid #775a19; box-shadow:0px 4px 40px rgba(26,43,60,0.08);">

        <div class="w-14 h-14 flex items-center justify-center mb-8 mx-auto" style="background:#f0eee9; border-radius:0.5rem;">
          <span class="material-symbols-outlined" style="color:#775a19; font-size:28px;">check_circle</span>
        </div>

        <h1 class="text-center text-primary mb-4" style="font-family:'Montserrat',sans-serif; font-size:2rem; font-weight:700; letter-spacing:-0.02em;">
          Inquiry Sent
        </h1>
        <p class="text-center text-on-surface-variant mb-10" style="font-size:1rem; line-height:1.7; max-width:440px; margin-inline:auto;">
          Thank you, <strong>{{ name }}</strong>. A senior advisor will contact you within 24 hours via your preferred method.
        </p>

        <!-- 3 steps -->
        <div class="grid grid-cols-3 gap-6 mb-10">
          <div v-for="step in steps" :key="step.num" class="border-t-2 pt-4" style="border-color:#e4e2dd;">
            <p class="flex items-center gap-2 mb-2" style="font-size:12px; color:#c4c6cd; font-weight:600;">
              {{ step.num }}<span class="flex-1 h-px" style="background:#e4e2dd;"></span>
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
              A confirmation has been sent to <strong>{{ email }}</strong>. Check your spam folder if you don't see it within 5 minutes.
            </p>
          </div>
        </div>

        <div class="flex flex-col sm:flex-row gap-4">
          <Link href="/guide"
            class="flex-1 text-center text-on-primary py-4 font-label-md uppercase tracking-widest hover:bg-secondary transition-all active:scale-95"
            style="background:#041627;">
            Explore Investor Guide
          </Link>
          <Link href="/investments"
            class="flex-1 text-center text-primary py-4 font-label-md uppercase tracking-widest hover:bg-primary hover:text-on-primary transition-all active:scale-95"
            style="border:1px solid #041627;">
            Return to Opportunities
          </Link>
        </div>

      </div>
    </main>

    <footer class="bg-primary py-8">
      <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop flex flex-col md:flex-row items-center justify-between gap-4">
        <img :src="logoUrl" alt="ETax" class="h-8 w-auto" />
        <p class="font-body-md text-outline-variant" style="font-size:12px;">© 2024 ETAXPLANNER PROPERTY CONNECT. Regulated by RERA.</p>
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
  { num:'01', title:'Profile Review',   desc:'We analyze your goals and align with current market opportunities.' },
  { num:'02', title:'Matching',         desc:'A bespoke shortlist of developer-direct properties is prepared.' },
  { num:'03', title:'Advisor Contact',  desc:'A senior advisor reaches out within 24 hours to discuss next steps.' },
];
</script>
