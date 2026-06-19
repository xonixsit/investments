<template>
  <div class="bg-background text-on-surface min-h-screen flex flex-col" style="font-family:'Inter',sans-serif;">
    <NavBar />

    <main class="flex-grow">

      <!-- Hero -->
      <section class="relative pt-20 pb-28 overflow-hidden" style="background-image:radial-gradient(circle at 2px 2px, rgba(197,160,89,0.1) 1px, transparent 0); background-size:24px 24px;">
        <div class="absolute right-[-5%] top-0 opacity-10 pointer-events-none hidden lg:block select-none material-symbols-outlined text-secondary" style="font-size:400px; line-height:1;">account_tree</div>
        <div class="max-w-container-max mx-auto px-4 md:px-margin-desktop relative z-10">
          <div class="max-w-3xl">
            <span class="inline-block py-1 px-3 bg-secondary-container text-on-secondary-container font-label-md mb-6 uppercase tracking-widest" style="font-size:12px;">Support &amp; Insights</span>
            <h1 class="text-primary mb-6" style="font-family:'Montserrat',sans-serif; font-size:clamp(2rem,5vw,3rem); font-weight:700; line-height:1.167; letter-spacing:-0.02em;">
              Frequently Asked Questions
            </h1>
            <p class="text-on-surface-variant" style="font-size:1.125rem; line-height:1.75; max-width:640px;">
              Navigating the Dubai real estate market requires clarity. We've compiled the most essential insights to help you understand the landscape of property investment.
            </p>
          </div>
        </div>
      </section>

      <!-- Accordion -->
      <section class="pb-24">
        <div class="max-w-[800px] mx-auto px-4 space-y-4">
          <div v-for="(item, i) in faqs" :key="i"
            class="bg-white border border-outline-variant/30 overflow-hidden transition-all duration-300"
            style="box-shadow:0px 4px 20px rgba(26,43,60,0.05);">
            <button
              class="w-full px-8 py-6 flex items-center justify-between text-left focus:outline-none"
              @click="toggle(i)">
              <span class="text-primary font-semibold pr-4" style="font-family:'Montserrat',sans-serif; font-size:1.125rem; line-height:1.4;">
                {{ item.q }}
              </span>
              <span class="material-symbols-outlined text-secondary flex-shrink-0 transition-transform duration-300"
                :style="{ transform: open === i ? 'rotate(180deg)' : 'rotate(0deg)' }">
                expand_more
              </span>
            </button>
            <div class="overflow-hidden transition-all duration-400"
              :style="{ maxHeight: open === i ? '500px' : '0px' }">
              <div class="px-8 pb-6 border-t border-outline-variant/20 pt-4 text-on-surface-variant" style="font-size:1rem; line-height:1.7;">
                {{ item.a }}
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- CTA Section -->
      <section class="max-w-container-max mx-auto px-4 md:px-margin-desktop mb-24">
        <div class="relative bg-primary overflow-hidden py-16 px-8 md:px-20 text-center flex flex-col items-center" style="border-radius:0.5rem;">
          <div class="absolute inset-0 opacity-10 pointer-events-none" style="background-image:radial-gradient(#c5a059 1px, transparent 1px); background-size:40px 40px;"></div>
          <span class="material-symbols-outlined mb-6 text-secondary" style="font-size:3.5rem; font-variation-settings:'FILL' 1;">support_agent</span>
          <h2 class="text-white mb-6 max-w-2xl" style="font-family:'Montserrat',sans-serif; font-size:2rem; font-weight:600; letter-spacing:-0.01em;">
            Need more specific investment advice?
          </h2>
          <p class="mb-10 max-w-xl" style="font-size:1.125rem; line-height:1.7; color:#b7c8de;">
            Our advisors provide bespoke strategies tailored to your wealth goals. Schedule a private consultation to discuss project-specific eligibility and ROI projections.
          </p>
          <div class="flex flex-col sm:flex-row gap-4">
            <Link href="/consult"
              class="bg-secondary text-on-secondary px-8 py-4 font-label-md uppercase tracking-widest hover:opacity-90 transition-all flex items-center gap-2 active:scale-95">
              Book a Private Consultation
              <span class="material-symbols-outlined" style="font-size:1.1rem;">arrow_forward</span>
            </Link>
            <Link href="/guide"
              class="border border-white/40 text-white px-8 py-4 font-label-md uppercase tracking-widest hover:bg-white/10 transition-all active:scale-95">
              Download Investor Guide
            </Link>
          </div>
        </div>
      </section>

      <!-- Property Highlight -->
      <section class="py-24 bg-surface-container-low border-t border-outline-variant/30">
        <div class="max-w-container-max mx-auto px-4 md:px-margin-desktop">
          <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-5">
              <div class="relative">
                <div class="absolute -top-4 -left-4 w-24 h-24 border-t-2 border-l-2 border-secondary/30 hidden md:block"></div>
                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuBW1jGQGxP7d3wWIH8cb1kEPaqi8VEVkKRkChGunHB5IolUjEGbDUESOP7suCjJ1QuO60SyZ2oggU4r-mk3UaAQA3fePxHMxu-jQUk8_qqCRBwHFUf_nvBkA1YLYMenlXmPKwoEjgq0s3-rIL4hqJtazHc7Gag-T3OCOi2QEbpm9g3QHOMXBNebQicUoIne_GTIIZlIl9eXs4ZnI17x_DJW1MBgn4Ww-NmMdo35s8JEq_Vag5xnDYmX7GFk5uAxsUwvFfDh3hEx9Evv"
                  alt="Dubai luxury property" class="w-full object-cover relative z-10 shadow-modal" style="aspect-ratio:4/5; border-radius:0.5rem;" />
                <div class="absolute -bottom-8 -right-4 bg-white p-6 z-20 hidden md:block shadow-modal" style="border-radius:0.5rem;">
                  <div class="flex items-center gap-3 mb-1">
                    <span class="material-symbols-outlined text-secondary" style="font-variation-settings:'FILL' 1;">verified</span>
                    <span class="font-label-md text-primary uppercase tracking-widest" style="font-size:11px;">RERA Verified</span>
                  </div>
                  <p class="text-primary font-semibold" style="font-family:'Montserrat',sans-serif; font-size:1.25rem;">High-Yield Assets</p>
                </div>
              </div>
            </div>
            <div class="lg:col-span-7 space-y-8">
              <h3 class="text-primary" style="font-family:'Montserrat',sans-serif; font-size:2rem; font-weight:600; letter-spacing:-0.01em;">
                Global Standards, Local Expertise
              </h3>
              <p class="text-on-surface-variant" style="font-size:1.125rem; line-height:1.75;">
                Our portfolio selection focuses on the most resilient growth corridors of the UAE. We leverage deep market roots to identify properties that don't just exist, but thrive in the long term.
              </p>
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div class="p-6 bg-white border border-outline-variant/50" style="border-left:4px solid #c5a059; box-shadow:0px 4px 20px rgba(26,43,60,0.05);">
                  <span class="material-symbols-outlined text-secondary mb-3 block" style="font-size:2rem;">account_balance</span>
                  <h4 class="font-semibold text-primary mb-1">Stability</h4>
                  <p class="text-on-surface-variant" style="font-size:12px; line-height:1.5;">Backed by government-regulated escrow accounts and RERA protection.</p>
                </div>
                <div class="p-6 bg-white border border-outline-variant/50" style="border-left:4px solid #c5a059; box-shadow:0px 4px 20px rgba(26,43,60,0.05);">
                  <span class="material-symbols-outlined text-secondary mb-3 block" style="font-size:2rem;">trending_up</span>
                  <h4 class="font-semibold text-primary mb-1">Growth</h4>
                  <p class="text-on-surface-variant" style="font-size:12px; line-height:1.5;">Consistent year-on-year capital appreciation in prime districts.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    </main>

    <!-- Footer -->
    <footer class="bg-primary pt-20 pb-10 border-t border-outline">
      <div class="max-w-container-max mx-auto px-4 md:px-margin-desktop grid grid-cols-1 md:grid-cols-4 gap-gutter text-on-primary">
        <div>
          <img :src="logoUrl" alt="ETax" class="h-10 w-auto mb-6" />
          <p class="font-body-md opacity-70 max-w-xs">Bespoke property investment solutions. Registered with RERA and Dubai Land Department.</p>
        </div>
        <div>
          <h4 class="font-label-md uppercase tracking-widest mb-6 text-secondary-fixed">Resources</h4>
          <ul class="space-y-3">
            <li><Link href="/investments" class="font-body-md text-outline-variant hover:text-secondary-fixed-dim underline transition-all">Investment Catalog</Link></li>
            <li><Link href="/guide" class="font-body-md text-outline-variant hover:text-secondary-fixed-dim underline transition-all">Investor Guide</Link></li>
            <li><Link href="/faqs" class="font-body-md text-secondary-fixed font-semibold">FAQs</Link></li>
          </ul>
        </div>
        <div>
          <h4 class="font-label-md uppercase tracking-widest mb-6 text-secondary-fixed">Legal</h4>
          <ul class="space-y-3">
            <li><a href="#" class="font-body-md text-outline-variant hover:text-secondary-fixed-dim underline transition-all">Privacy Policy</a></li>
            <li><a href="#" class="font-body-md text-outline-variant hover:text-secondary-fixed-dim underline transition-all">Terms of Service</a></li>
          </ul>
        </div>
        <div>
          <h4 class="font-label-md uppercase tracking-widest mb-6 text-secondary-fixed">Contact</h4>
          <p class="font-body-md text-outline-variant">Business Bay, Dubai, UAE</p>
          <p class="font-body-md text-outline-variant mt-1">invest@etaxplanner.ae</p>
          <p class="font-body-md text-outline-variant mt-1">RERA #29482</p>
        </div>
      </div>
      <div class="max-w-container-max mx-auto px-4 md:px-margin-desktop mt-16 pt-8 border-t border-white/10 text-center">
        <p class="font-body-md text-outline-variant">© 2024 ETAXPLANNER PROPERTY CONNECT. All rights reserved. Registered with RERA.</p>
      </div>
    </footer>

  </div>
</template>

<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';
import NavBar from '@/Components/NavBar.vue';
import logoUrl from '@images/etax_investments_dubai.png';

const open = ref(0); // first item open by default

function toggle(i) {
  open.value = open.value === i ? null : i;
}

const faqs = [
  {
    q: 'Is there any brokerage fee?',
    a: 'Qualified buyers may access developer-direct opportunities without buyer-side brokerage fees, subject to project terms. This transparent approach ensures you receive the maximum value from your investment without hidden administrative costs.',
  },
  {
    q: 'Can overseas investors purchase property in Dubai?',
    a: 'Yes, subject to applicable regulations and project eligibility. Dubai offers designated "Freehold" areas where foreign nationals can own property 100%. This is supported by a robust legal framework designed to protect international capital.',
  },
  {
    q: 'What is the minimum investment amount?',
    a: 'Investment requirements vary by project and developer. Entry-level luxury apartments may start from a different threshold than prime waterfront villas. Our team provides a tailored list of properties that align specifically with your fiscal strategy.',
  },
  {
    q: 'Are payment plans available?',
    a: 'Many developers offer flexible payment plans depending on the project. These often include "Post-Handover" options or "Construction Linked" plans, allowing you to manage liquidity effectively while your asset appreciates.',
  },
  {
    q: 'Can I purchase remotely?',
    a: 'Yes. Many transactions can be facilitated remotely through authorized channels and documentation. Through digital notarization and secure portal integration, we handle the logistics so you can invest from anywhere in the world.',
  },
  {
    q: 'What is RERA and how does it protect me?',
    a: 'RERA (Real Estate Regulatory Agency) is Dubai\'s property regulatory authority. It mandates escrow accounts for off-plan projects, ensuring developer funds are used solely for construction. All our listings are RERA-verified for your protection.',
  },
  {
    q: 'What documents are required to invest?',
    a: 'Typically a valid passport copy, proof of funds, and a signed reservation form are required. For off-plan projects, a 10% deposit is standard. Our advisors guide you through every document step with full transparency.',
  },
];
</script>
