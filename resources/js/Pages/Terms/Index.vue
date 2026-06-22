<template>
  <div class="bg-surface font-body-md text-on-surface selection:bg-secondary-container selection:text-on-secondary-container">
    <NavBar />
    <main class="pt-24 pb-32 px-margin-mobile md:px-margin-desktop max-w-4xl mx-auto">
      <!-- Hero Header -->
      <div class="mb-12">
        <div class="inline-flex items-center gap-2 px-3 py-1 bg-secondary-container text-on-secondary-container rounded-full mb-6">
          <span class="material-symbols-outlined text-[18px]">verified_user</span>
          <span class="font-label-md text-label-md uppercase tracking-wider">Terms &amp; Service</span>
        </div>
        <h2 class="font-headline-xl text-primary mb-4 leading-tight">Terms of Service</h2>
        <p class="font-body-lg text-on-surface-variant max-w-2xl">
          Governance and operational guidelines for ETAXPLANNER PROPERTY CONNECT, Dubai's premier institutional real estate investment gateway.
        </p>
      </div>
      <!-- Main Content Card -->
      <div class="glass-card rounded-xl p-8 shadow-sm relative overflow-hidden border-l-4 border-secondary">
        <div class="absolute top-0 right-0 p-8 opacity-5">
          <span class="material-symbols-outlined text-[120px]">gavel</span>
        </div>
        <div class="prose prose-slate max-w-none space-y-8 relative z-10">
          <!-- Quick Jump Sidebar is included in the original HTML; retained via CSS for in-page navigation -->
          <section class="relative" id="acceptance">
            <h3 class="font-headline-lg text-primary mb-6 flex items-center gap-4">
              <span class="md:hidden text-secondary">01.</span> Acceptance of Terms
            </h3>
            <p class="font-body-lg text-on-surface-variant space-y-6 leading-relaxed">
              By accessing or using the ETAXPLANNER PROPERTY CONNECT platform (the "Platform"), you acknowledge that you have read, understood, and agree to be bound by these Terms of Service. These terms constitute a legally binding agreement between you and Ghaf Real Estate Investment LLC.
            </p>
            <p class="font-body-lg text-on-surface-variant">
              We reserve the right to modify these terms at any time. Continued use of the platform after such changes constitutes acceptance of the updated terms. We recommend reviewing this document periodically to ensure compliance with our institutional standards.
            </p>
          </section>
          <section class="relative" id="eligibility">
            <h3 class="font-headline-lg text-primary mb-6 flex items-center gap-4">
              <span class="md:hidden text-secondary">02.</span> User Eligibility
            </h3>
            <p class="font-body-lg text-on-surface-variant">
              This Platform is exclusively designed for <strong>High-Net-Worth Individuals (HNWI)</strong>, institutional investors, and sophisticated market participants as defined by the UAE Securities and Commodities Authority (SCA) and Dubai Financial Services Authority (DFSA).
            </p>
            <div class="grid md:grid-cols-2 gap-6 mt-8">
              <div class="bg-white p-8 rounded-xl shadow-sm border border-outline-variant/30">
                <span class="material-symbols-outlined text-secondary mb-4" style="font-size: 32px;">verified_user</span>
                <h4 class="font-headline-md text-primary mb-2">Individual HNW</h4>
                <p class="font-body-md">Users must demonstrate personal net assets exceeding AED 5 million, excluding their primary residence.</p>
              </div>
              <div class="bg-white p-8 rounded-xl shadow-sm border border-outline-variant/30">
                <span class="material-symbols-outlined text-secondary mb-4" style="font-size: 32px;">corporate_fare</span>
                <h4 class="font-headline-md text-primary mb-2">Institutional</h4>
                <p class="font-body-md">Includes licensed financial institutions, government entities, and family offices with professional investment experience.</p>
              </div>
            </div>
          </section>
          <section class="relative" id="rera">
            <h3 class="font-headline-lg text-primary mb-6 flex items-center gap-4">
              <span class="md:hidden text-secondary">03.</span> RERA Disclaimers &amp; Compliance
            </h3>
            <div class="bg-primary-container text-on-primary-container p-8 rounded-2xl mb-8">
              <div class="flex gap-4 items-start">
                <span class="material-symbols-outlined text-secondary mt-1">gavel</span>
                <p class="font-body-md italic leading-relaxed">
                  "All property listings and investment structures provided on this platform are in strict compliance with the Dubai Real Estate Regulatory Agency (RERA) guidelines. Past performance is not indicative of future results."
                </p>
              </div>
            </div>
            <p class="font-body-lg text-on-surface-variant">
              ETAXPLANNER serves as an information aggregator and technological facilitator. We do not provide financial, tax, or legal advice. All ROI projections provided via the "Investment Tree" visualization are strictly mathematical estimates based on historical RERA data and do not constitute a guarantee of income.
            </p>
            <ul class="list-disc pl-8 space-y-4 marker:text-secondary">
              <li>All transactions must be processed through official RERA‑regulated escrow accounts.</li>
              <li>Users are responsible for their own due diligence regarding Dubai Land Department (DLD) fees and regulations.</li>
              <li>Market volatility in the UAE property sector may affect the underlying value of assets.</li>
            </ul>
          </section>
          <section class="relative" id="liability">
            <h3 class="font-headline-lg text-primary mb-6 flex items-center gap-4">
              <span class="md:hidden text-secondary">04.</span> Limitation of Liability
            </h3>
            <p class="font-body-lg text-on-surface-variant">
              To the maximum extent permitted by UAE law, Ghaf Real Estate Investment LLC, its subsidiaries, and its officers shall not be liable for any direct, indirect, incidental, or consequential damages resulting from:
            </p>
            <div class="grid gap-4">
              <div class="flex items-center gap-4 p-4 border border-outline-variant/50 rounded-lg">
                <span class="material-symbols-outlined text-error">cloud_off</span>
                <p class="font-body-md">Temporary platform downtime or technical maintenance.</p>
              </div>
              <div class="flex items-center gap-4 p-4 border border-outline-variant/50 rounded-lg">
                <span class="material-symbols-outlined text-error">error</span>
                <p class="font-body-md">Inaccuracies in third‑party data provided by developers or agencies.</p>
              </div>
              <div class="flex items-center gap-4 p-4 border border-outline-variant/50 rounded-lg">
                <span class="material-symbols-outlined text-error">trending_down</span>
                <p class="font-body-md">Fluctuations in the Dubai property market or currency exchange rates.</p>
              </div>
            </div>
          </section>
          <section class="relative" id="governing">
            <h3 class="font-headline-lg text-primary mb-6 flex items-center gap-4">
              <span class="md:hidden text-secondary">05.</span> Governing Law &amp; Jurisdiction
            </h3>
            <p class="font-body-lg text-on-surface-variant">
              These Terms shall be governed by and construed in accordance with the laws of the <strong>United Arab Emirates</strong> as applied in the <strong>Emirate of Dubai</strong>.
            </p>
            <p class="font-body-lg text-on-surface-variant">
              Any disputes arising from these terms or the use of the platform shall be subject to the exclusive jurisdiction of the <strong>DIFC Courts</strong> (Dubai International Financial Centre) or the Dubai Courts, at the sole discretion of Ghaf Real Estate Investment LLC.
            </p>
          </section>
          <!-- <div class="mt-12 p-6 bg-primary-container rounded-xl">
            <h5 class="text-on-primary font-headline-md mb-4">Need Legal Clarification?</h5>
            <p class="text-on-primary-container font-body-md mb-6">Our compliance team is available for HNW and institutional inquiries.</p>
            <button class="w-full bg-secondary text-white font-label-md py-4 rounded-lg hover:brightness-110 transition-all">Contact Counsel</button>
          </div> -->
        </div>
      </div>
      <!-- <div class="mt-12 p-8 border-t border-outline-variant flex flex-wrap gap-4">
        <h4 class="font-headline-md text-primary mb-2">Acknowledge Terms</h4>
        <p class="font-body-md text-on-surface-variant mb-4">By clicking below, you confirm your institutional status and agreement to the above legal framework.</p>
        <button class="px-8 py-4 bg-primary text-white font-label-md rounded-lg active:scale-95 transition-transform">I Accept the Terms</button>
        <button class="px-8 py-4 border border-primary text-primary font-label-md rounded-lg active:scale-95 transition-transform">Download as PDF</button>
      </div> -->
    </main>
    <Footer source="terms" />
  </div>
</template>

<script setup>
import NavBar from '@/Components/NavBar.vue';
import Footer from '@/Components/Footer.vue';
</script>

<style scoped>
/* No custom styles – layout follows Tailwind config */
</style>
