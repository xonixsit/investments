<template>
  <div class="bg-surface font-body-md text-on-surface selection:bg-secondary-container selection:text-on-secondary-container">
    <NavBar />
    <main class="pt-32 pb-24 max-w-4xl mx-auto px-margin-mobile md:px-margin-desktop">
      <!-- Hero Header -->
      <div class="mb-12">
        <div class="inline-flex items-center gap-2 px-3 py-1 bg-secondary-container text-on-secondary-container rounded-full mb-6">
          <span class="material-symbols-outlined text-[18px]">verified_user</span>
          <span class="font-label-md text-label-md uppercase tracking-wider">Privacy &amp; Legal</span>
        </div>
        <h2 class="font-headline-xl text-primary mb-4 leading-tight">Privacy Policy</h2>
        <p class="font-body-lg text-on-surface-variant max-w-2xl">
          Protecting your personal data is a core pillar of ETAXPLANNER PROPERTY CONNECT. Below you will find how we collect, use, store, and secure your information.
        </p>
      </div>
      <!-- Main Content Card -->
      <div class="glass-card rounded-xl p-8 shadow-sm relative overflow-hidden border-l-4 border-secondary">
        <div class="absolute top-0 right-0 p-8 opacity-5">
          <span class="material-symbols-outlined text-[120px]">gavel</span>
        </div>
        <div class="prose prose-slate max-w-none space-y-8 relative z-10">
          <!-- Introduction -->
          <section class="relative" id="introduction">
            <h3 class="font-headline-lg text-primary mb-6 flex items-center gap-4">
              <span class="md:hidden text-secondary">01.</span> Introduction
            </h3>
            <p class="font-body-lg text-on-surface-variant leading-relaxed">
              This Privacy Policy explains how Ghaf Real Estate Investment (operating as ETAXPLANNER PROPERTY CONNECT) collects, uses, and shares your personal information when you interact with our platform.
            </p>
          </section>
          <!-- Data Collection -->
          <section class="relative" id="data-collection">
            <h3 class="font-headline-lg text-primary mb-6 flex items-center gap-4">
              <span class="md:hidden text-secondary">02.</span> Data Collection
            </h3>
            <p class="font-body-lg text-on-surface-variant">
              We gather both personal and usage data, including but not limited to:
            </p>
            <ul class="list-disc pl-8 space-y-2 marker:text-secondary">
              <li><strong>Personal Information:</strong> Name, Emirates ID, passport, contact details, and financial data necessary for investment transactions.</li>
              <li><strong>Usage Data:</strong> IP address, device type, browsing behaviour, and interaction logs collected automatically.</li>
            </ul>
          </section>
          <!-- How We Use Your Data -->
          <section class="relative" id="data-usage">
            <h3 class="font-headline-lg text-primary mb-6 flex items-center gap-4">
              <span class="md:hidden text-secondary">03.</span> How We Use Your Data
            </h3>
            <p class="font-body-lg text-on-surface-variant">
              Your data powers core platform functions:
            </p>
            <ul class="list-disc pl-8 space-y-2 marker:text-secondary">
              <li>Facilitating property transactions and investment calculations.</li>
              <li>Ensuring compliance with RERA, AML, and other regulatory requirements.</li>
              <li>Providing personalized property recommendations and market insights.</li>
              <li>Communicating essential updates, statements, and legal notices.</li>
            </ul>
          </section>
          <!-- Security -->
          <section class="relative" id="security">
            <h3 class="font-headline-lg text-primary mb-6 flex items-center gap-4">
              <span class="md:hidden text-secondary">04.</span> Data Security
            </h3>
            <p class="font-body-lg text-on-surface-variant">
              We employ industry‑standard safeguards, including 256‑bit SSL encryption, multi‑factor authentication, and isolated vaults for sensitive financial records. While no system is infallible, we continually audit and improve our security posture.
            </p>
          </section>
          <!-- Your Rights -->
          <section class="relative" id="rights">
            <h3 class="font-headline-lg text-primary mb-6 flex items-center gap-4">
              <span class="md:hidden text-secondary">05.</span> Your Rights
            </h3>
            <p class="font-body-lg text-on-surface-variant">
              As a premium member, you have the following rights regarding your personal data:
            </p>
            <ul class="list-disc pl-8 space-y-2 marker:text-secondary">
              <li><strong>Access:</strong> Request a full copy of the data we hold about you.</li>
              <li><strong>Rectification:</strong> Correct any inaccurate or incomplete information.</li>
              <li><strong>Deletion:</strong> Ask for removal of your data when it is no longer necessary for legal or service purposes.</li>
              <li><strong>Portability:</strong> Receive your data in a commonly used electronic format.</li>
            </ul>
            <p class="font-body-lg text-on-surface-variant mt-4">
              To exercise any of these rights, please contact our Compliance Officer at:
            </p>
            <div class="mt-4 p-6 bg-secondary-container/10 border-l-4 border-secondary rounded-lg">
              <p class="font-label-md uppercase tracking-widest text-secondary text-xs mb-2">Compliance Officer</p>
              <a href="mailto:pro.investment@etaxplanner.com" class="text-primary font-semibold text-lg hover:text-secondary transition-colors flex items-center gap-2">
                <span class="material-symbols-outlined">mail</span>
                pro.investment@etaxplanner.com
              </a>
            </div>
          </section>
        </div>
      </div>
    </main>
    <Footer source="privacy" />
  </div>
</template>

<script setup>
import NavBar from '@/Components/NavBar.vue';
import Footer from '@/Components/Footer.vue';
</script>

<style scoped>
/* No additional custom styles – layout follows Tailwind configuration */
</style>
