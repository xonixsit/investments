<template>
  <div class="bg-surface font-body-md text-on-surface selection:bg-secondary-container selection:text-on-secondary-container">
    <NavBar />
    <main class="pt-24 pb-32 px-margin-mobile md:px-margin-desktop max-w-4xl mx-auto">
      <!-- Hero Section -->
      <div class="mb-12">
        <div class="inline-flex items-center gap-2 px-3 py-1 bg-secondary-container text-on-secondary-container rounded-full mb-6">
          <span class="material-symbols-outlined text-[18px]">verified_user</span>
          <span class="font-label-md text-label-md uppercase tracking-wider">Compliance &amp; Legal</span>
        </div>
        <h2 class="font-headline-xl text-primary mb-4 leading-tight">Investment Disclaimer</h2>
        <p class="font-body-lg text-on-surface-variant max-w-2xl">
          Ensuring transparency and clarity for all our investors. Please read the following disclosures regarding our real estate referral and information services.
        </p>
      </div>
      <!-- Main Content Card -->
      <div class="glass-card rounded-xl p-8 shadow-sm relative overflow-hidden border-l-4 border-secondary">
        <div class="absolute top-0 right-0 p-8 opacity-5">
          <span class="material-symbols-outlined text-[120px]">gavel</span>
        </div>
        <div class="prose prose-slate max-w-none space-y-8 relative z-10">
          <p class="font-body-lg text-primary font-semibold italic">"ETaxPlanner Investments provides information and referral services related to real estate opportunities. Property investments involve risks, and past performance does not guarantee future results."</p>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-8 pt-6">
            <!-- Section 1: Risk Warning -->
            <div class="space-y-3">
              <div class="flex items-center gap-3 text-secondary">
                <span class="material-symbols-outlined text-[32px]">warning</span>
                <h3 class="font-headline-md">Risk Warning</h3>
              </div>
              <p class="font-body-md text-on-surface-variant">
                Real estate markets are subject to fluctuations. Property values and potential income can go down as well as up. Investors may not get back the full amount invested.
              </p>
            </div>
            <!-- Section 2: Due Diligence -->
            <div class="space-y-3">
              <div class="flex items-center gap-3 text-secondary">
                <span class="material-symbols-outlined text-[32px]">search_check</span>
                <h3 class="font-headline-md">Due Diligence</h3>
              </div>
              <p class="font-body-md text-on-surface-variant">
                Investors should conduct independent due diligence and seek professional legal, financial, and tax advice before making investment decisions.
              </p>
            </div>
            <!-- Section 3: No Guarantees -->
            <div class="space-y-3">
              <div class="flex items-center gap-3 text-secondary">
                <span class="material-symbols-outlined text-[32px]">cancel_schedule_send</span>
                <h3 class="font-headline-md">No Guarantees</h3>
              </div>
              <p class="font-body-md text-on-surface-variant">
                Investment returns, appreciation, rental yields, and market performance are not guaranteed and are subject to varying economic conditions.
              </p>
            </div>
            <!-- Section 4: Professional Advice -->
            <div class="space-y-3">
              <div class="flex items-center gap-3 text-secondary">
                <span class="material-symbols-outlined text-[32px]">account_balance</span>
                <h3 class="font-headline-md">Regulatory Scope</h3>
              </div>
              <p class="font-body-md text-on-surface-variant">
                ETaxPlanner operates as an information portal and referral partner. We do not provide direct financial brokerage services unless explicitly stated under RERA licensed activities.
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- Visual Closure: Investment Tree -->
      <!-- <div class="mt-24 flex flex-col items-center justify-center text-center">
        <div class="w-48 h-48 mb-8 relative">
          <svg class="w-full h-full text-secondary opacity-20 absolute inset-0" viewBox="0 0 200 200">
            <path class="investment-tree-path" d="M100,180 L100,120 M100,120 C100,120 70,100 60,70 M100,120 C100,120 130,100 140,70 M100,110 L80,90 M100,100 L120,80" fill="none" stroke="currentColor" stroke-width="2"/>
          </svg>
          <div class="relative z-10 flex items-center justify-center h-full">
            <span class="material-symbols-outlined text-primary text-[64px]" style="font-variation-settings: 'FILL' 1;">account_tree</span>
          </div>
        </div>
        <h4 class="font-headline-md text-primary mb-2">Deep Roots, Infinite Growth</h4>
        <p class="font-caption uppercase tracking-[0.2em] text-on-surface-variant">The ETaxPlanner Standard</p>
      </div> -->
    </main>
    <Footer source="disclaimer" />
  </div>
</template>

<script setup>
import NavBar from '@/Components/NavBar.vue';
import Footer from '@/Components/Footer.vue';
</script>

<style scoped>
/* No custom styles – layout follows Tailwind config */
</style>
