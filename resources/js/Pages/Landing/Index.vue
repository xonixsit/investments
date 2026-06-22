<template>
  <div>
    <!-- NavBar -->
    <NavBar />

    <main>
      <!-- Hero Section -->
      <section class="relative flex items-center overflow-hidden" style="height: 92vh; max-height: 800px;">
        <div class="absolute inset-0 z-0">
          <img :src="heroBg" alt="" class="w-full h-full object-cover" style="object-position: center 30%;" />
          <div class="absolute inset-0" style="background: linear-gradient(to right, rgba(240,230,210,0.72) 0%, rgba(240,230,210,0.35) 30%, rgba(240,230,210,0.05) 55%, transparent 75%);"></div>
        </div>
        <div class="relative z-10 max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop w-full">
          <div class="max-w-2xl">
            <span class="inline-block py-1 px-3 bg-secondary-container text-on-secondary-container font-label-md text-caption mb-6 rounded-sm uppercase tracking-widest">Premium Investment Access</span>
            <h2 class="font-headline-xl text-primary mb-6" style="font-family:'Montserrat',sans-serif; font-size:clamp(2rem,3.5vw,3rem); font-weight:700; line-height:1.167; letter-spacing:-0.02em;">
              Invest in Dubai's Growing Real Estate Market
            </h2>
            <p class="font-body-lg text-body-lg text-on-surface-variant mb-10 leading-relaxed max-w-lg" style="font-size: 1.125rem;">
              Direct access to premier developer pricing with <span class="font-bold text-primary">zero buyer brokerage fees</span>. Secured growth, permanent stability, and high-yield potential.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 items-center">
              <Link href="/consult" class="bg-primary text-on-primary px-6 py-3 font-label-md text-label-md uppercase tracking-widest sm:hover:translate-y-[-2px] active:translate-y-[-2px] transition-all shadow-card active:scale-95 text-center w-full sm:w-auto block rounded-lg cursor-pointer">
                Book a Consultation
              </Link>
              <Link href="/investments" class="border border-primary text-primary px-6 py-3 font-label-md text-label-md uppercase tracking-widest hover:bg-primary/5 transition-all active:scale-95 text-center w-full sm:w-auto block">
                Explore Properties
              </Link>
            </div>
          </div>
        </div>
      </section>

      <!-- Why Dubai? Section -->
      <section class="py-32 bg-surface ghaf-vein-overlay">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
          <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6">
            <div class="max-w-xl">
              <h2 class="font-headline-lg text-primary mb-4" style="font-family:'Montserrat',sans-serif;">Why Invest in Dubai?</h2>
              <p class="font-body-md text-body-md text-on-surface-variant">The global hub for innovation and wealth preservation, offering unmatched stability for international investors.</p>
            </div>
            <div class="h-[1px] flex-grow bg-outline-variant mb-4 hidden md:block mx-12"></div>
          </div>
          <!-- Bento Grid for Benefits -->
          <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
            <!-- Benefit 1 -->
            <div class="bg-white p-10 border border-outline-variant hover:border-secondary transition-colors group">
              <span class="material-symbols-outlined text-4xl text-secondary mb-6 block" data-icon="account_balance_wallet">account_balance_wallet</span>
              <h3 class="font-headline-md text-headline-md text-primary mb-3">Tax-Friendly</h3>
              <p class="text-on-surface-variant leading-relaxed">Enjoy 0% personal income tax, 0% capital gains tax, and 0% property tax on residential investments.</p>
            </div>
            <!-- Benefit 2 -->
            <div class="bg-white p-10 border border-outline-variant hover:border-secondary transition-colors group">
              <span class="material-symbols-outlined text-4xl text-secondary mb-6 block" data-icon="precision_manufacturing">precision_manufacturing</span>
              <h3 class="font-headline-md text-headline-md text-primary mb-3">Infrastructure</h3>
              <p class="text-on-surface-variant leading-relaxed">World-class connectivity, ultra-modern transport, and a business ecosystem designed for the future.</p>
            </div>
            <!-- Benefit 3 -->
            <div class="bg-white p-10 border border-outline-variant hover:border-secondary transition-colors group">
              <span class="material-symbols-outlined text-4xl text-secondary mb-6 block" data-icon="trending_up">trending_up</span>
              <h3 class="font-headline-md text-headline-md text-primary mb-3">Rental Demand</h3>
              <p class="text-on-surface-variant leading-relaxed">High occupancy rates and some of the world's most attractive rental yields ranging from 6% to 10%.</p>
            </div>
            <!-- Benefit 4 -->
            <div class="bg-white p-10 border border-outline-variant hover:border-secondary transition-colors group">
              <span class="material-symbols-outlined text-4xl text-secondary mb-6 block" data-icon="public">public</span>
              <h3 class="font-headline-md text-headline-md text-primary mb-3">International Investor‑Friendly Market</h3>
              <p class="text-on-surface-variant leading-relaxed">A regulatory environment that welcomes global investors with transparent laws and tax incentives.</p>
            </div>
            <!-- Benefit 5 -->
            <div class="bg-white p-10 border border-outline-variant hover:border-secondary transition-colors group">
              <span class="material-symbols-outlined text-4xl text-secondary mb-6 block" data-icon="payment">payment</span>
              <h3 class="font-headline-md text-headline-md text-primary mb-3">Flexible Payment Plans</h3>
              <p class="text-on-surface-variant leading-relaxed">Choose from staged payments, mortgages, and developer‑backed financing tailored to your cash flow.</p>
            </div>
            <!-- Benefit 6 -->
            <div class="bg-white p-10 border border-outline-variant hover:border-secondary transition-colors group">
              <span class="material-symbols-outlined text-4xl text-secondary mb-6 block" data-icon="apartment">apartment</span>
              <h3 class="font-headline-md text-headline-md text-primary mb-3">High‑Quality Developments</h3>
              <p class="text-on-surface-variant leading-relaxed">World‑class projects built by renowned developers with premium finishes and cutting‑edge design.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- Investment Tree Visual -->
      <section class="py-24 bg-primary text-on-primary overflow-hidden relative">
        <div class="absolute right-0 top-0 w-1/2 h-full opacity-20 pointer-events-none"></div>
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
          <div>
            <h2 class="font-headline-lg mb-8" style="font-family:'Montserrat',sans-serif;">Deep Roots, Infinite Growth</h2>
            <p class="font-body-lg text-body-lg text-on-primary-container mb-8 leading-relaxed">
              Like the Ghaf tree, Dubai real estate offers resilience against market volatility. Our data-driven approach ensures your portfolio is rooted in stability while reaching for the highest returns.
            </p>
            <div class="space-y-6">
              <div class="flex items-start gap-4">
                <div class="w-1 bg-secondary h-12"></div>
                <div>
                  <h4 class="font-headline-md text-secondary-fixed">8.2% Avg ROI</h4>
                  <p class="text-on-primary-container">Market-wide rental yield average in 2023.</p>
                </div>
              </div>
              <div class="flex items-start gap-4">
                <div class="w-1 bg-secondary h-12"></div>
                <div>
                  <h4 class="font-headline-md text-secondary-fixed">$2.4B Invested</h4>
                  <p class="text-on-primary-container">In the last quarter by overseas HNWIs.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="relative">
            <div class="bg-white/10 p-8 rounded-xl backdrop-blur-sm border border-white/20">
              <h3 class="font-headline-md text-secondary-fixed mb-6 text-center">ROI Growth Simulator</h3>

              <!-- Inputs -->
              <div class="space-y-5 mb-6">
                <div>
                  <div class="flex justify-between mb-1">
                    <label class="text-caption opacity-70">Investment Amount</label>
                    <span class="text-caption font-bold text-secondary-fixed">${{ formatNum(investment) }}</span>
                  </div>
                  <input v-model="investment" type="range" min="50000" max="2000000" step="10000"
                    class="roi-slider w-full" />
                  <div class="flex justify-between text-caption opacity-40 mt-1">
                    <span>$50K</span><span>$2M</span>
                  </div>
                </div>

                <div>
                  <div class="flex justify-between mb-1">
                    <label class="text-caption opacity-70">Annual ROI (%)</label>
                    <span class="text-caption font-bold text-secondary-fixed">{{ roi }}%</span>
                  </div>
                  <input v-model="roi" type="range" min="4" max="15" step="0.5"
                    class="roi-slider w-full" />
                  <div class="flex justify-between text-caption opacity-40 mt-1">
                    <span>4%</span><span>15%</span>
                  </div>
                </div>

                <div>
                  <div class="flex justify-between mb-1">
                    <label class="text-caption opacity-70">Holding Period</label>
                    <span class="text-caption font-bold text-secondary-fixed">{{ years }} yrs</span>
                  </div>
                  <input v-model="years" type="range" min="1" max="20" step="1"
                    class="roi-slider w-full" />
                  <div class="flex justify-between text-caption opacity-40 mt-1">
                    <span>1 yr</span><span>20 yrs</span>
                  </div>
                </div>
              </div>

              <!-- Bar Chart -->
              <div class="flex items-end gap-1 h-28 mb-4">
                <div v-for="(val, i) in chartBars" :key="i"
                  class="flex-1 rounded-t-sm transition-all duration-500 relative group"
                  :style="{ height: val.pct + '%', backgroundColor: i === years - 1 ? 'var(--color-secondary)' : 'rgba(255,255,255,0.2)' }">
                  <div v-if="i === years - 1"
                    class="absolute -top-6 left-1/2 -translate-x-1/2 text-caption text-secondary-fixed font-bold whitespace-nowrap">
                    ${{ formatNum(val.value) }}
                  </div>
                </div>
              </div>
              <div class="flex justify-between text-caption opacity-40 mb-5">
                <span>Yr 1</span><span>Yr {{ Math.ceil(years / 2) }}</span><span>Yr {{ years }}</span>
              </div>

              <!-- Summary -->
              <div class="grid grid-cols-3 gap-3 border-t border-white/10 pt-5">
                <div class="text-center">
                  <p class="text-caption opacity-60 mb-1">Total Value</p>
                  <p class="font-bold text-secondary-fixed text-sm">${{ formatNum(totalValue) }}</p>
                </div>
                <div class="text-center border-x border-white/10">
                  <p class="text-caption opacity-60 mb-1">Net Profit</p>
                  <p class="font-bold text-secondary-fixed text-sm">${{ formatNum(netProfit) }}</p>
                </div>
                <div class="text-center">
                  <p class="text-caption opacity-60 mb-1">Total ROI</p>
                  <p class="font-bold text-secondary-fixed text-sm">{{ totalRoiPct }}%</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Who We Are Section -->
      <section class="py-32 bg-white">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-24 items-center">
            <div class="relative">
              <div class="w-full aspect-[4/5] bg-cover bg-center rounded-sm" :style="{ backgroundImage: `url(${teamImage})` }"></div>
              <div class="absolute -bottom-10 -right-10 hidden md:block w-48 h-48 bg-secondary-fixed p-6 shadow-xl">
                <p class="text-primary font-bold text-headline-md leading-tight">15+ Years</p>
                <p class="text-primary font-body-md mt-2">Combined expertise in GCC markets.</p>
              </div>
            </div>
            <div>
              <span class="text-secondary font-label-md text-label-md tracking-widest uppercase block mb-4">ABOUT US</span>
              <h2 class="font-headline-lg text-primary mb-6" style="font-family:'Montserrat',sans-serif;">Who We Are</h2>
              <div class="space-y-6 text-on-surface-variant font-body-md leading-relaxed">
                <p>ETaxPlanner Investments is committed to connecting qualified investors with carefully selected Dubai property opportunities through trusted developer partnerships and professional guidance.</p>
                <p>Our goal is to provide a seamless, transparent acquisition experience, leveraging our deep market expertise to secure assets that align with your long-term wealth strategy.</p>
              </div>
              <!-- <button class="mt-12 flex items-center gap-3 text-primary font-bold hover:text-secondary transition-colors group">
                Learn more about our philosophy
                <span class="material-symbols-outlined group-hover:translate-x-2 transition-transform" data-icon="arrow_forward">arrow_forward</span>
              </button> -->
            </div>
          </div>
        </div>
      </section>

      <!-- CTA Section -->
      <section class="py-24 bg-surface-container border-y border-outline-variant">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop text-center">
          <h2 class="font-headline-xl text-primary mb-6" style="font-family:'Montserrat',sans-serif; font-size:clamp(1.75rem,3vw,3rem); font-weight:700; letter-spacing:-0.02em;">Ready to grow your roots in Dubai?</h2>
          <p class="font-body-lg text-body-lg text-on-surface-variant mb-12 max-w-2xl mx-auto">
            Receive a tailored investment catalog based on your financial goals and risk profile.
          </p>
          <div class="max-w-md mx-auto">
            <form @submit.prevent="submitCatalog" class="space-y-6">
              <input v-model="catalogForm.email" class="w-full bg-transparent editorial-input py-4 px-2 font-body-md text-primary placeholder:text-outline" placeholder="Your corporate email address" type="email" required />
              <button class="w-full bg-primary text-on-primary py-4 font-label-md text-label-md hover:bg-primary-container transition-all" type="submit" :disabled="catalogForm.processing">
                {{ catalogForm.processing ? 'Requesting...' : 'Request Private Catalog' }}
              </button>
              <p v-if="catalogForm.errors.email" class="text-red-600 font-body-sm mt-2">{{ catalogForm.errors.email }}</p>
            </form>
          </div>
        </div>
      </section>

      <!-- Footer -->
      <Footer source="landing" />
    </main>
  </div>
</template>

<script setup>
import { ref, computed, onMounted, onBeforeUnmount } from 'vue';
import { Link, useForm } from '@inertiajs/vue3';
import heroBg from '@images/etax_invest_bg.png';
import teamImage from '@images/team_image.png';
import NavBar from '@/Components/NavBar.vue';
import Footer from '@/Components/Footer.vue';

const catalogForm = useForm({
  email: ''
});

const submitCatalog = () => {
  catalogForm.post('/catalog-request', {
    preserveScroll: true
  });
};

// ROI Simulator
const investment = ref(500000);
const roi        = ref(8.2);
const years      = ref(10);

const totalValue  = computed(() => Math.round(investment.value * Math.pow(1 + roi.value / 100, years.value)));
const netProfit   = computed(() => totalValue.value - investment.value);
const totalRoiPct = computed(() => Math.round((netProfit.value / investment.value) * 100));

const chartBars = computed(() => {
  const arr = [];
  let max = 0;
  for (let i = 1; i <= years.value; i++) {
    const v = Math.round(investment.value * Math.pow(1 + roi.value / 100, i));
    arr.push({ value: v });
    if (v > max) max = v;
  }
  return arr.map(b => ({ ...b, pct: Math.round((b.value / max) * 100) }));
});

function formatNum(n) {
  if (n >= 1_000_000) return (n / 1_000_000).toFixed(2) + 'M';
  if (n >= 1_000)     return (n / 1_000).toFixed(0) + 'K';
  return n;
}

// Header scroll handled by NavBar component
</script>

<style scoped>
.roi-slider {
  -webkit-appearance: none;
  appearance: none;
  height: 4px;
  border-radius: 2px;
  background: rgba(255,255,255,0.2);
  outline: none;
  cursor: pointer;
}
.roi-slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  width: 16px;
  height: 16px;
  border-radius: 50%;
  background: var(--color-secondary);
  cursor: pointer;
  border: 2px solid white;
}
.roi-slider::-moz-range-thumb {
  width: 16px;
  height: 16px;
  border-radius: 50%;
  background: var(--color-secondary);
  cursor: pointer;
  border: 2px solid white;
}
</style>
