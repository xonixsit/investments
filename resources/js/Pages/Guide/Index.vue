<template>
  <div class="bg-background text-on-surface min-h-screen" style="font-family:'Inter',sans-serif;">

    <!-- NavBar -->
    <NavBar />

    <main>
      <!-- Hero -->
      <section class="relative py-20 overflow-hidden" style="min-height:380px;">
        <div class="absolute inset-0 z-0">
          <img :src="guideHero" alt="" class="w-full h-full object-cover object-center" />
          <div class="absolute inset-0" style="background:rgba(4,22,39,0.75);"></div>
          <!-- dot overlay -->
          <div class="absolute inset-0 opacity-40" style="background-image:radial-gradient(circle at 2px 2px,#E5E1D8 1px,transparent 0);background-size:24px 24px;"></div>
        </div>
        <div class="relative z-10 max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
          <div class="max-w-3xl">
            <span class="font-label-md uppercase tracking-widest mb-4 block" style="color:#e9c176;">Our Methodology</span>
            <h1 class="mb-6 text-white" style="font-family:'Montserrat',sans-serif; font-size:clamp(1.75rem,4vw,3rem); font-weight:700; line-height:1.167; letter-spacing:-0.02em;">
              Your Journey to <span style="color:#e9c176;">Generational Wealth</span>
            </h1>
            <p class="text-white/90" style="font-size:1.125rem; line-height:1.75; max-width:680px;">
              Navigating the Dubai property market requires a blend of local expertise and financial precision. Our 6-step investor process is designed to provide transparency, security, and exponential growth.
            </p>
          </div>
        </div>
      </section>

      <!-- Process Timeline -->
      <section class="py-16 md:py-24 bg-surface">
        <div class="max-w-container-max mx-auto px-4 md:px-margin-desktop">
          <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter">

            <!-- Left sticky image -->
            <div class="lg:col-span-4 hidden lg:block">
              <div class="sticky top-32">
                <div class="relative overflow-hidden shadow-modal" style="border-radius:0.5rem; aspect-ratio:3/4;">
                  <img :src="guideImg" alt="Dubai skyline" class="w-full h-full object-cover" />
                  <div class="absolute inset-0" style="background:linear-gradient(to top, rgba(4,22,39,0.8) 0%, transparent 50%);"></div>
                  <div class="absolute bottom-8 left-8 right-8 text-white">
                    <h3 class="mb-2" style="font-family:'Montserrat',sans-serif; font-size:1.5rem; font-weight:600;">Deep Roots</h3>
                    <p style="font-size:1rem; opacity:0.9;">Every investment is anchored in rigorous market analysis and historical data stability.</p>
                  </div>
                </div>
              </div>
            </div>

            <!-- Right: Timeline steps -->
            <div class="lg:col-span-8">
              <div class="space-y-0">

                <!-- Step 1 -->
                <div class="relative flex gap-8 group pb-12" :class="{'step-active': activeStep === 1}">
                  <div class="flex flex-col items-center flex-shrink-0">
                    <div class="w-10 h-10 rounded-full bg-primary-container flex items-center justify-center text-secondary-fixed font-bold z-10 ring-4 ring-surface" style="font-family:'Montserrat',sans-serif;">1</div>
                    <div class="w-px flex-1 mt-2" style="background:rgba(197,160,89,0.3);"></div>
                  </div>
                  <div class="pb-2">
                    <h4 class="text-primary mb-3" style="font-family:'Montserrat',sans-serif; font-size:1.5rem; font-weight:600;">Submit Interest</h4>
                    <p class="text-on-surface-variant" style="font-size:1rem; line-height:1.6;">Your journey begins by sharing your investment criteria. Our advisors analyze your profile against the current Dubai market landscape to identify high-yield opportunities.</p>
                    <div class="mt-4 flex flex-wrap gap-4">
                      <span class="flex items-center gap-2 text-secondary font-semibold" style="font-size:0.75rem;">
                        <span class="material-symbols-outlined" style="font-size:14px;">check_circle</span> 1-on-1 Discovery Call
                      </span>
                      <span class="flex items-center gap-2 text-secondary font-semibold" style="font-size:0.75rem;">
                        <span class="material-symbols-outlined" style="font-size:14px;">check_circle</span> Portfolio Assessment
                      </span>
                    </div>
                  </div>
                </div>

                <!-- Step 2 -->
                <div class="relative flex gap-8 group pb-12">
                  <div class="flex flex-col items-center flex-shrink-0">
                    <div class="w-10 h-10 rounded-full bg-white border-2 border-outline-variant flex items-center justify-center text-primary font-bold z-10 group-hover:border-secondary transition-colors" style="font-family:'Montserrat',sans-serif;">2</div>
                    <div class="w-px flex-1 mt-2" style="background:rgba(197,160,89,0.3);"></div>
                  </div>
                  <div class="pb-2">
                    <h4 class="text-primary mb-3" style="font-family:'Montserrat',sans-serif; font-size:1.5rem; font-weight:600;">Strategic Selection</h4>
                    <p class="text-on-surface-variant" style="font-size:1rem; line-height:1.6;">We present a curated shortlist of properties featuring the 'Investment Tree' ROI projections. Each selection is vetted for developer credibility and location growth potential.</p>
                  </div>
                </div>

                <!-- Step 3 -->
                <div class="relative flex gap-8 group pb-12">
                  <div class="flex flex-col items-center flex-shrink-0">
                    <div class="w-10 h-10 rounded-full bg-white border-2 border-outline-variant flex items-center justify-center text-primary font-bold z-10 group-hover:border-secondary transition-colors" style="font-family:'Montserrat',sans-serif;">3</div>
                    <div class="w-px flex-1 mt-2" style="background:rgba(197,160,89,0.3);"></div>
                  </div>
                  <div class="pb-2">
                    <h4 class="text-primary mb-3" style="font-family:'Montserrat',sans-serif; font-size:1.5rem; font-weight:600;">Compliance &amp; Verification</h4>
                    <p class="text-on-surface-variant" style="font-size:1rem; line-height:1.6;">Full transparency via RERA registration checks and legal documentation. We ensure all regulatory requirements are met for both local and overseas investors.</p>
                  </div>
                </div>

                <!-- Step 4 -->
                <div class="relative flex gap-8 group pb-12">
                  <div class="flex flex-col items-center flex-shrink-0">
                    <div class="w-10 h-10 rounded-full bg-white border-2 border-outline-variant flex items-center justify-center text-primary font-bold z-10 group-hover:border-secondary transition-colors" style="font-family:'Montserrat',sans-serif;">4</div>
                    <div class="w-px flex-1 mt-2" style="background:rgba(197,160,89,0.3);"></div>
                  </div>
                  <div class="pb-2">
                    <h4 class="text-primary mb-3" style="font-family:'Montserrat',sans-serif; font-size:1.5rem; font-weight:600;">Financial Structuring</h4>
                    <p class="text-on-surface-variant" style="font-size:1rem; line-height:1.6;">Our tax planners optimize your investment structure. Whether it's through mortgage facilitation or tax-efficient holding strategies, we maximize your net gains.</p>
                  </div>
                </div>

                <!-- Step 5 -->
                <div class="relative flex gap-8 group pb-12">
                  <div class="flex flex-col items-center flex-shrink-0">
                    <div class="w-10 h-10 rounded-full bg-white border-2 border-outline-variant flex items-center justify-center text-primary font-bold z-10 group-hover:border-secondary transition-colors" style="font-family:'Montserrat',sans-serif;">5</div>
                    <div class="w-px flex-1 mt-2" style="background:rgba(197,160,89,0.3);"></div>
                  </div>
                  <div class="pb-2">
                    <h4 class="text-primary mb-3" style="font-family:'Montserrat',sans-serif; font-size:1.5rem; font-weight:600;">Transaction Execution</h4>
                    <p class="text-on-surface-variant" style="font-size:1rem; line-height:1.6;">Seamless handling of the Sales and Purchase Agreement (SPA). We manage the entire administrative trail, ensuring a stress-free transition from lead to owner.</p>
                  </div>
                </div>

                <!-- Step 6 -->
                <div class="relative flex gap-8 group pb-4">
                  <div class="flex flex-col items-center flex-shrink-0">
                    <div class="w-10 h-10 rounded-full bg-secondary flex items-center justify-center text-white font-bold z-10 shadow-card" style="font-family:'Montserrat',sans-serif;">6</div>
                  </div>
                  <div>
                    <h4 class="text-primary mb-3" style="font-family:'Montserrat',sans-serif; font-size:1.5rem; font-weight:600;">Property Reservation</h4>
                    <p class="text-on-surface-variant" style="font-size:1rem; line-height:1.6;">The final seal. Your investment is secured with the developer. You receive your title deed or Oqood, marking the beginning of your portfolio growth journey.</p>
                    <Link href="/consult" class="mt-6 bg-primary text-on-primary px-8 py-3 font-label-md uppercase tracking-widest flex items-center gap-2 hover:bg-secondary transition-all active:scale-95 w-fit">
                      Begin Step 1 <span class="material-symbols-outlined">arrow_forward</span>
                    </Link>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- FAQ Section -->
      <section id="faq" class="py-24 bg-surface-container-low">
        <div class="max-w-3xl mx-auto px-margin-mobile md:px-margin-desktop">
          <div class="text-center mb-16">
            <h2 class="text-primary mb-4" style="font-family:'Montserrat',sans-serif; font-size:2rem; font-weight:600; letter-spacing:-0.01em;">Common Inquiries</h2>
            <p class="text-on-surface-variant" style="font-size:1rem;">Clear answers for sophisticated investors looking to expand their Dubai footprint.</p>
          </div>

          <div class="space-y-4">
            <div v-for="(faq, i) in faqs" :key="i"
              class="bg-white border border-outline-variant/30 overflow-hidden transition-all"
              style="border-radius:0.25rem; box-shadow:0 1px 3px rgba(26,43,60,0.04);">
              <button class="w-full px-6 py-5 flex items-center justify-between text-left cursor-pointer"
                @click="toggleFaq(i)">
                <h5 class="text-primary font-semibold pr-4" style="font-size:1rem;">{{ faq.q }}</h5>
                <span class="material-symbols-outlined text-secondary flex-shrink-0 transition-transform duration-300"
                  :style="{ transform: openFaq === i ? 'rotate(180deg)' : 'rotate(0deg)' }">expand_more</span>
              </button>
              <div class="overflow-hidden transition-all duration-300"
                :style="{ maxHeight: openFaq === i ? '400px' : '0px' }">
                <div class="px-6 pb-6 text-on-surface-variant border-t border-outline-variant/10 pt-4" style="font-size:1rem; line-height:1.6;">
                  {{ faq.a }}
                </div>
              </div>
            </div>
          </div>

          <!-- CTA box -->
          <div class="mt-12 p-8 text-center" style="background-color:#1a2b3c; border-radius:0.75rem;">
            <h4 class="text-white mb-3" style="font-family:'Montserrat',sans-serif; font-size:1.5rem; font-weight:600;">Still have questions?</h4>
            <p class="mb-6" style="color:#8192a7; font-size:1rem;">Our senior advisors are available for a detailed walkthrough of the legal and financial frameworks.</p>
            <button class="bg-secondary text-on-secondary px-10 py-3 font-label-md uppercase tracking-widest hover:opacity-90 transition-all active:scale-95">
              Talk to an Expert
            </button>
          </div>
        </div>
      </section>

    </main>

    <!-- Footer -->
    <footer class="w-full pt-20 pb-10 bg-primary border-t border-outline">
      <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop grid grid-cols-1 md:grid-cols-4 gap-gutter text-on-primary">
        <div class="col-span-1">
          <img :src="logoUrl" alt="ETax" class="h-10 w-auto mb-6" />
          <p class="font-body-md opacity-70 max-w-xs">Pioneering wealth stability in Dubai's real estate ecosystem through financial intelligence and local roots.</p>
        </div>
        <div>
          <h4 class="font-label-md uppercase tracking-widest mb-6 text-secondary-fixed">Explore</h4>
          <ul class="space-y-4">
            <li><Link href="/investments" class="font-body-md text-outline-variant hover:text-secondary-fixed-dim underline transition-all">Investment Catalog</Link></li>
            <li><Link href="/guide" class="font-body-md text-secondary-fixed font-semibold">Investor Guide</Link></li>
            <li><a href="#faq" class="font-body-md text-outline-variant hover:text-secondary-fixed-dim underline transition-all">FAQs</a></li>
          </ul>
        </div>
        <div>
          <h4 class="font-label-md uppercase tracking-widest mb-6 text-secondary-fixed">Legal</h4>
          <ul class="space-y-4">
            <li><a href="#" class="font-body-md text-outline-variant hover:text-secondary-fixed-dim underline transition-all">Privacy Policy</a></li>
            <li><a href="#" class="font-body-md text-outline-variant hover:text-secondary-fixed-dim underline transition-all">Terms of Service</a></li>
          </ul>
        </div>
        <div>
          <h4 class="font-label-md uppercase tracking-widest mb-6 text-secondary-fixed">Contact</h4>
          <p class="font-body-md text-outline-variant">Business Bay, Dubai, UAE</p>
          <p class="font-body-md text-outline-variant mt-2">invest@etaxplanner.ae</p>
        </div>
      </div>
      <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop mt-16 pt-8 border-t border-white/10 text-center">
        <p class="font-body-md text-outline-variant">© 2024 ETAXPLANNER PROPERTY CONNECT. All rights reserved. Registered with RERA.</p>
      </div>
    </footer>

    <!-- Mobile bottom nav -->
    <nav class="fixed bottom-0 left-0 w-full z-50 flex justify-around items-center h-16 bg-surface border-t border-outline-variant shadow-md md:hidden">
      <Link href="/"           class="flex flex-col items-center text-outline"><span class="material-symbols-outlined">home</span><span class="font-label-md" style="font-size:10px;">Home</span></Link>
      <Link href="/investments" class="flex flex-col items-center text-outline"><span class="material-symbols-outlined">search_insights</span><span class="font-label-md" style="font-size:10px;">Explore</span></Link>
      <Link href="/guide"      class="flex flex-col items-center text-secondary"><span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1;">menu_book</span><span class="font-label-md" style="font-size:10px;">Guide</span></Link>
      <a href="#"              class="flex flex-col items-center text-outline"><span class="material-symbols-outlined">calendar_month</span><span class="font-label-md" style="font-size:10px;">Consult</span></a>
    </nav>

    <!-- FAB -->
    <button class="fixed bottom-24 right-6 md:bottom-12 md:right-12 bg-secondary text-on-secondary w-16 h-16 rounded-full flex items-center justify-center shadow-modal hover:scale-110 active:scale-95 transition-all z-40 group">
      <span class="material-symbols-outlined" style="font-size:1.75rem;">chat</span>
      <span class="absolute right-full mr-4 bg-primary text-on-primary px-4 py-2 text-sm whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity hidden md:block">Speak to an Advisor</span>
    </button>

  </div>
</template>

<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';
import logoUrl from '@images/etax_investments_dubai.png';
import guideHero from '@images/guide_hero.png';
import guideImg from '@images/guide_img.png';
import NavBar from '@/Components/NavBar.vue';

const openFaq = ref(null);
const activeStep = ref(1);

function toggleFaq(i) {
  openFaq.value = openFaq.value === i ? null : i;
}

const faqs = [
  {
    q: 'Is there any brokerage fee?',
    a: 'For primary market (off-plan) properties directly from developers, our consultation and transaction management services are provided at zero brokerage cost to the investor. We are compensated by the development partners, ensuring you receive expert advice without overhead.'
  },
  {
    q: 'Can overseas investors purchase?',
    a: 'Absolutely. Dubai is one of the most accessible markets for international capital. You can complete the entire reservation and transaction process remotely. We utilize digital signing and secure payment gateways to facilitate cross-border investments seamlessly.'
  },
  {
    q: 'What are the typical ROI expectations?',
    a: 'Dubai consistently offers some of the world\'s highest rental yields, typically ranging from 6% to 9% net. Additionally, prime areas have seen capital appreciation of 15-20% annually in high-demand cycles. Our Investment Tree reports provide specific projections for every listing.'
  },
  {
    q: 'Is my investment protected by law?',
    a: 'Yes. All off-plan investments are protected by Escrow laws mandated by the Dubai Land Department (DLD). Payments are made into project-specific escrow accounts and released only as construction milestones are verified by RERA-approved auditors.'
  },
];
</script>

<style scoped>
section { transition: all 0.7s ease-out; }
</style>
