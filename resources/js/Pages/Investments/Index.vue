<template>
  <div class="bg-background text-on-background min-h-screen" style="font-family:'Inter',sans-serif;">

    <!-- NavBar -->
    <NavBar />

    <main class="ghaf-dot-bg min-h-screen">

      <!-- Hero -->
      <section class="relative py-20 overflow-hidden" style="min-height:380px;">
        <div class="absolute inset-0 z-0">
          <img :src="screenBg" alt="" class="w-full h-full object-cover object-center" />
          <div class="absolute inset-0" style="background:rgba(4,22,39,0.75);"></div>
          <div class="absolute inset-0 opacity-40" style="background-image:radial-gradient(circle at 2px 2px,#E5E1D8 1px,transparent 0);background-size:24px 24px;"></div>
        </div>
        <div class="relative z-10 max-w-container-max mx-auto px-4 md:px-margin-desktop">
          <div class="max-w-3xl">
            <h1 class="text-white mb-6" style="font-family:'Montserrat',sans-serif; font-size:28px; font-weight:700; line-height:36px;">
              <span class="md:hidden">UAE Real Estate: Roots of Stability, Branches of Growth.</span>
              <span class="hidden md:inline" style="font-size:48px; line-height:56px; letter-spacing:-0.02em;">UAE Real Estate: Roots of Stability, Branches of Growth.</span>
            </h1>
            <p class="text-white/80 mb-10 leading-relaxed" style="font-size:18px; line-height:28px;">
              Discover exclusive Dubai investment opportunities curated for high-net-worth portfolios. From premium residential villas to strategic off-plan commercial developments.
            </p>
            <div class="flex flex-wrap gap-4">
              <Link href="#residential" class="bg-primary text-on-primary px-8 py-4 font-label-md uppercase tracking-widest hover:shadow-lg hover:-translate-y-0.5 transition-all active:scale-95 text-center">
                Explore Residential
              </Link>
              <Link href="#offplan" class="border border-white text-white px-8 py-4 font-label-md uppercase tracking-widest hover:bg-white/10 transition-all active:scale-95 text-center">
                View Off-Plan
              </Link>
            </div>
          </div>
        </div>
      </section>

      <!-- Residential Section -->
      <section class="py-16 md:py-24 bg-surface-container-low">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
          <div class="flex items-end justify-between mb-12">
            <div>
              <span class="font-label-md text-secondary uppercase tracking-widest mb-2 block">Curated Luxury</span>
              <h2 class="text-primary" style="font-family:'Montserrat',sans-serif; font-size:2rem; font-weight:600; letter-spacing:-0.01em;">Residential Opportunities</h2>
            </div>
            <a class="hidden md:flex items-center text-primary font-label-md gap-2 group hover:text-secondary transition-colors" href="#">
              Browse All <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
            </a>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">

            <!-- Card 1 — Premium (gold accent) -->
            <div class="bg-white shadow-card flex flex-col group cursor-pointer overflow-hidden" style="border-left:4px solid #e9c176;">
              <div class="h-64 overflow-hidden relative">
                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110"
                  style="background-image:url('https://lh3.googleusercontent.com/aida-public/AB6AXuAa8sA1MxwE2_WEDIVqwy46TegNSM5h7Tg3nfoQ-74eY7X4acaC4Dtu_oXerBleP1lFkiR6B2kx1i2DTefbq7400bABT2kPeDwRga4-Q0SDH_IasyX9QCMogksabUEFJbvEJy3DRDX8qVZe71GAYA0rFCW_2yKpdWDVt_qpBXsLOMR6fZqEr13NPK3dTZOWchhFrorqaQppTBBiWhsk1d45PawzHGsxxag3IKXVoES1FbICFXMv7N7Qr9osnriGcWz4HLdgf_5Z-2qa')">
                </div>
                <div class="absolute top-4 left-4 bg-primary text-on-primary px-3 py-1 font-label-md text-xs uppercase tracking-widest">Villas</div>
              </div>
              <div class="p-6 flex flex-col flex-1">
                <h3 class="font-headline-md text-primary mb-2" style="font-family:'Montserrat',sans-serif;">Emerald Hills Estate</h3>
                <p class="font-body-md text-on-surface-variant mb-4 flex-1">6-Bedroom Luxury Villa with private root-garden architecture in Dubai Hills.</p>
                <div class="flex justify-between items-center border-t border-outline-variant pt-4">
                  <span class="text-secondary font-bold" style="font-family:'Montserrat',sans-serif; font-size:1.25rem;">AED 12.5M</span>
                  <span class="font-label-md text-outline flex items-center gap-1 text-xs">
                    <span class="material-symbols-outlined" style="font-size:14px;">location_on</span> Dubai Hills
                  </span>
                </div>
              </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white shadow-card flex flex-col group cursor-pointer overflow-hidden border border-outline-variant">
              <div class="h-64 overflow-hidden relative">
                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110"
                  style="background-image:url('https://lh3.googleusercontent.com/aida-public/AB6AXuDuBWrfJXS1mzYtHFNILVBAaaUaEo1M5FfX9Xma8ZTb3KmaFOdiM4HnX64rprO-wQ0nzQ5JEGhV925JAB8vREvlkTAt4BwV3N4FBWPF2hMS6KupeKbinhtG0_L4NxblL-DWAYRWEwmGKjHy3I4kY45XHjuQOaUoljcbwz4ONd8KZb7tRES4cqmB0CCAo5e7TQ9P-5T2b6S_QHliS4_RCEz8ZUQVAebEZLlK9h45MWbSsaGMgextl7YkjBejJSW5YOlgHZqZTXQLA6Vl')">
                </div>
                <div class="absolute top-4 left-4 bg-primary text-on-primary px-3 py-1 font-label-md text-xs uppercase tracking-widest">Apartments</div>
              </div>
              <div class="p-6 flex flex-col flex-1">
                <h3 class="font-headline-md text-primary mb-2" style="font-family:'Montserrat',sans-serif;">The Skyline Heights</h3>
                <p class="font-body-md text-on-surface-variant mb-4 flex-1">Waterfront living in Business Bay with infinity pools and stability metrics.</p>
                <div class="flex justify-between items-center border-t border-outline-variant pt-4">
                  <span class="text-secondary font-bold" style="font-family:'Montserrat',sans-serif; font-size:1.25rem;">AED 2.8M</span>
                  <span class="font-label-md text-outline flex items-center gap-1 text-xs">
                    <span class="material-symbols-outlined" style="font-size:14px;">location_on</span> Business Bay
                  </span>
                </div>
              </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-white shadow-card flex flex-col group cursor-pointer overflow-hidden border border-outline-variant">
              <div class="h-64 overflow-hidden relative">
                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110"
                  style="background-image:url('https://lh3.googleusercontent.com/aida-public/AB6AXuBSY6p5so012en8lAtRIwaFKDV-aA9BJh_Go-ycrI2Pxsg6kWitVQVanzeR2-bECL2-G4qXC3SWQx3DhIY_KTv0seaHqxv7fN-MLpmi09pqkuWogJmY7FNugkwjY1AhAePuHiVYfWe-YMyvxei-OUg2tlixig4LQ6FSJfru0ItAHxqJm4KlP-U7pKpB5z9papXk3TztLu3UyWyKAXILewzYXtF85yk_RLKdC8VyaFF1U_MO7NxzGXAmlsTGRTV-5yl6vPAEKrv72Gs7')">
                </div>
                <div class="absolute top-4 left-4 bg-primary text-on-primary px-3 py-1 font-label-md text-xs uppercase tracking-widest">Townhouses</div>
              </div>
              <div class="p-6 flex flex-col flex-1">
                <h3 class="font-headline-md text-primary mb-2" style="font-family:'Montserrat',sans-serif;">Ghaf Grove Residences</h3>
                <p class="font-body-md text-on-surface-variant mb-4 flex-1">Family-centric townhouses integrated with lush, sustainable green canopies.</p>
                <div class="flex justify-between items-center border-t border-outline-variant pt-4">
                  <span class="text-secondary font-bold" style="font-family:'Montserrat',sans-serif; font-size:1.25rem;">AED 4.2M</span>
                  <span class="font-label-md text-outline flex items-center gap-1 text-xs">
                    <span class="material-symbols-outlined" style="font-size:14px;">location_on</span> Tilal Al Ghaf
                  </span>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>

      <section class="py-16 md:py-24 bg-surface transition-all duration-700 ease-out">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
<div class="text-center mb-12">
<span class="font-label-md text-secondary tracking-widest uppercase mb-2 block"> Investment Comparison</span>
<h3 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-primary mb-4">Dubai vs Global Cities</h3>
<p class="font-body-md text-on-surface-variant max-w-2xl mx-auto">Why Dubai Leads the World's Premier Real Estate Markets</p>
</div>
<div class="overflow-x-auto hide-scrollbar soft-elevation border border-outline-variant rounded-sm">
<table class="w-full text-left border-collapse min-w-[800px]">
<thead>
<tr class="bg-primary text-white">
<th class="p-6 font-headline-md text-sm uppercase tracking-wider">Investment Metric</th>
<th class="p-6 font-headline-md text-sm uppercase tracking-wider bg-secondary text-white">Dubai (UAE)</th>
<th class="p-6 font-headline-md text-sm uppercase tracking-wider">London (UK)</th>
<th class="p-6 font-headline-md text-sm uppercase tracking-wider">New York (USA)</th>
</tr>
</thead>
<tbody class="bg-white">
<tr class="border-b border-outline-variant">
<td class="p-6 font-medium text-primary">Rental Yield</td>
<td class="p-6 font-bold text-secondary bg-secondary-container/10">5–6%</td>
<td class="p-6 text-on-surface-variant">2–4%</td>
<td class="p-6 text-on-surface-variant">3–4%</td>
</tr>
<tr class="border-b border-outline-variant">
<td class="p-6 font-medium text-primary">Price per sqft</td>
<td class="p-6 font-bold text-secondary bg-secondary-container/10">$550–650</td>
<td class="p-6 text-on-surface-variant">$1,100–1,500+</td>
<td class="p-6 text-on-surface-variant">$1,500–2,500</td>
</tr>
<tr class="border-b border-outline-variant">
<td class="p-6 font-medium text-primary">Income Tax on Rent</td>
<td class="p-6 font-bold text-secondary bg-secondary-container/10">0%</td>
<td class="p-6 text-on-surface-variant">Up to 45%</td>
<td class="p-6 text-on-surface-variant">Up to 37%+</td>
</tr>
<tr class="border-b border-outline-variant">
<td class="p-6 font-medium text-primary">Capital Gains Tax</td>
<td class="p-6 font-bold text-secondary bg-secondary-container/10">0%</td>
<td class="p-6 text-on-surface-variant">18–28%</td>
<td class="p-6 text-on-surface-variant">15–20% + State</td>
</tr>
<tr class="border-b border-outline-variant">
<td class="p-6 font-medium text-primary">Annual Property Tax</td>
<td class="p-6 font-bold text-secondary bg-secondary-container/10">None</td>
<td class="p-6 text-on-surface-variant">£2,000–5,000/yr</td>
<td class="p-6 text-on-surface-variant">~1% of value/yr</td>
</tr>
<tr class="border-b border-outline-variant">
<td class="p-6 font-medium text-primary">Foreign Ownership</td>
<td class="p-6 font-bold text-secondary bg-secondary-container/10">100% Freehold</td>
<td class="p-6 text-on-surface-variant">Complex</td>
<td class="p-6 text-on-surface-variant">Complex</td>
</tr>
<tr>
<td class="p-6 font-medium text-primary">Residency Pathway</td>
<td class="p-6 font-bold text-secondary bg-secondary-container/10">Golden Visa (AED 2M+)</td>
<td class="p-6 text-on-surface-variant">No Property Route</td>
<td class="p-6 text-on-surface-variant">No Property Route</td>
</tr>
</tbody>
</table>
</div>
<p class="mt-6 text-caption text-outline text-center">*Data based on 2023-2024 market averages for prime residential districts.</p>
</div>
</section>

      <!-- Off-Plan Section -->
      <section class="py-16 md:py-24">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
          <div class="bg-primary text-on-primary p-8 md:p-16 relative overflow-hidden">
            <!-- Subtle vein pattern -->
            <div class="absolute inset-0 opacity-5 pointer-events-none"
              style="background-image:radial-gradient(#ffffff 0.5px, transparent 0.5px); background-size:24px 24px;"></div>
            <div class="relative z-10 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
              <div>
                <span class="font-label-md text-secondary-fixed uppercase tracking-widest mb-4 block">Strategic Future Growth</span>
                <h2 class="mb-6" style="font-family:'Montserrat',sans-serif; font-size:clamp(1.75rem,3vw,3rem); font-weight:700; line-height:1.167; letter-spacing:-0.02em;">
                  Off-Plan Projects &amp; Payment Freedom
                </h2>
                <p class="font-body-lg mb-8 opacity-90" style="font-size:1.125rem;">
                  Secure today's prices for tomorrow's landmarks. Our off-plan portfolio features projects with up to 7-year post-handover payment plans.
                </p>
                <ul class="space-y-4 mb-10">
                  <li class="flex items-center gap-3">
                    <span class="material-symbols-outlined text-secondary-fixed">check_circle</span>
                    <span class="font-body-md">10% Reservation Fee only</span>
                  </li>
                  <li class="flex items-center gap-3">
                    <span class="material-symbols-outlined text-secondary-fixed">check_circle</span>
                    <span class="font-body-md">Zero-Interest Developer Financing</span>
                  </li>
                  <li class="flex items-center gap-3">
                    <span class="material-symbols-outlined text-secondary-fixed">check_circle</span>
                    <span class="font-body-md">Guaranteed High Rental Yields</span>
                  </li>
                </ul>
                <Link href="/consult" class="bg-secondary text-on-secondary px-10 py-4 font-label-md uppercase tracking-widest hover:scale-105 transition-transform active:scale-95 inline-block text-center">
                  Get Payment Plans
                </Link>
              </div>
              <div class="grid grid-cols-2 gap-4">
                <div class="h-72 w-full bg-cover bg-center rounded-sm"
                  style="background-image:url('https://lh3.googleusercontent.com/aida-public/AB6AXuC-X4xw1JnFz9sM__z-3s2pAOMWFNJPhLrMlgaXq1CiFiUJ-81AxV2LUZUPRzMxnK-4e6rETpb2Da6bYfkEx1LkkyS_Zo4gF55g_h-Z8pKD7dqPCcU6KC-Ngc73NxKc31Kqns3C15sV726e-xmgdbTrTSPe31lNy7TtB8K18MxvuGkUDyIl-03tEP81sDYlMyW6qVBiZOmBPoQtfB6yBnnLwlEw-gNKmc2PPuFwvXMrRaHUdAMOttxPWZIwTftYreDiFY9HHNbOIYyI')">
                </div>
                <div class="h-72 w-full bg-cover bg-center rounded-sm mt-8"
                  style="background-image:url('https://lh3.googleusercontent.com/aida-public/AB6AXuABZGTSh0BVarw3CoWRjynrPBDTmmfyfXdVQ2s7GGsKeaUeIoPnbLeYEcKj0I6nlhvRiZNmT107CloW_DGZZbT-nOI33-WyOGXBrH472wyZHLCRmxIidZD_vkDZE5o4bwgm4Wh7NBbw1OlVnBk8tjnG44zPZFrckQNeHKSPXPP_Uq9vl6cR5c1AprNQEeBO7CxtB3Jf9vABeXI6-hHRgd6dsrvvSbQGXMcDurwBKtaoF8ynLom-vzguPL8-CuUnacljzcr3SYxdnghV')">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Commercial Section -->
      <section class="py-16 md:py-24 bg-surface">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
          <div class="flex flex-col md:flex-row md:items-center justify-between mb-12 gap-4">
            <div>
              <span class="font-label-md text-secondary uppercase tracking-widest mb-2 block">Corporate Assets</span>
              <h2 class="text-primary" style="font-family:'Montserrat',sans-serif; font-size:2rem; font-weight:600; letter-spacing:-0.01em;">Commercial &amp; Retail Assets</h2>
            </div>
            <div class="flex gap-2">
              <button class="w-12 h-12 flex items-center justify-center border border-outline-variant hover:bg-primary hover:text-on-primary transition-all">
                <span class="material-symbols-outlined">chevron_left</span>
              </button>
              <button class="w-12 h-12 flex items-center justify-center border border-outline-variant hover:bg-primary hover:text-on-primary transition-all">
                <span class="material-symbols-outlined">chevron_right</span>
              </button>
            </div>
          </div>
          <div class="flex overflow-x-auto gap-gutter pb-8" style="-ms-overflow-style:none; scrollbar-width:none;">
            <!-- Commercial Card 1 -->
            <div class="min-w-[320px] md:min-w-[400px] bg-white shadow-card border border-outline-variant p-2 group flex-shrink-0">
              <div class="h-48 overflow-hidden mb-4 relative">
                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-105"
                  style="background-image:url('https://lh3.googleusercontent.com/aida-public/AB6AXuB9nX28ud1ITOTxWeKEpXp-Fk1bYy6e7Kl-K0CxVkG7Cf8qRlhtaR2UsbBCdTU3j7PlvYwv2gBQBIXpxxFISN9NmXx8tGpuQdZzsRVges8lqcoJaWrFZLJGsYaypoyclYbPdYQ8J7TxG_PgZ3Jg14rxSvdmC4EdD8CN6AcqpP5aUf2-mT4vjJZ1Y0oxYFvCqhpLBRb2xrmujZHwIF4IwMnJZ2OlWD9rYDV0gT4N0SlrcG_58uMDmqoex4I4Jonxz1BGvN9c4bbjrg57')">
                </div>
              </div>
              <div class="px-4 pb-4">
                <span class="text-xs font-bold uppercase tracking-widest bg-secondary-container text-on-secondary-container px-2 py-1 mb-3 inline-block">Offices</span>
                <h3 class="font-headline-md text-primary mb-2" style="font-family:'Montserrat',sans-serif;">DIFC Executive Suites</h3>
                <p class="font-body-md text-on-surface-variant mb-4">Premium office space in Dubai's financial hub with high occupancy history.</p>
                <div class="flex justify-between items-center border-t border-outline-variant pt-4">
                  <span class="text-caption text-outline">Net Yield</span>
                  <span class="font-bold text-secondary" style="font-family:'Montserrat',sans-serif; font-size:1.25rem;">8.4% ROI</span>
                </div>
              </div>
            </div>
            <!-- Commercial Card 2 -->
            <div class="min-w-[320px] md:min-w-[400px] bg-white shadow-card border border-outline-variant p-2 group flex-shrink-0">
              <div class="h-48 overflow-hidden mb-4 relative">
                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-105"
                  style="background-image:url('https://lh3.googleusercontent.com/aida-public/AB6AXuBQ2VBLgJpIIBP9pVPa6J4kQZ9vrZwvNrUCZPcZqApcXjMDTZSWyW56LCsFWz7ywLcpgt-Moot0DuOgodHPD5KZ-kS9S-6N9vTSQAarUMddnorvJrhpCLgEgEjkZC16vZdHogy95LlneCMj_2jD113ykEMy6W0YS9TVVfaLUm0r2wjGpuyHcLyedxlogl0Ak_crGCikkWzjUsQDI8YAynpzIE4eRYngbaS58S8ZukMA_TedyXlS2KWKCBh2kxn9ybrf463UWb16lrvu')">
                </div>
              </div>
              <div class="px-4 pb-4">
                <span class="text-xs font-bold uppercase tracking-widest bg-secondary-container text-on-secondary-container px-2 py-1 mb-3 inline-block">Retail</span>
                <h3 class="font-headline-md text-primary mb-2" style="font-family:'Montserrat',sans-serif;">The Promenade Shops</h3>
                <p class="font-body-md text-on-surface-variant mb-4">Strategic retail units in high-footfall tourist corridors at Palm Jumeirah.</p>
                <div class="flex justify-between items-center border-t border-outline-variant pt-4">
                  <span class="text-caption text-outline">Net Yield</span>
                  <span class="font-bold text-secondary" style="font-family:'Montserrat',sans-serif; font-size:1.25rem;">7.2% ROI</span>
                </div>
              </div>
            </div>
            <!-- Commercial Card 3 -->
            <div class="min-w-[320px] md:min-w-[400px] bg-white shadow-card border border-outline-variant p-2 group flex-shrink-0">
              <div class="h-48 overflow-hidden mb-4 relative">
                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-105"
                  style="background-image:url('https://lh3.googleusercontent.com/aida-public/AB6AXuAbi2oCaUZ_5_ryiNo8rqDYIqAcmESZx8ngM-pVZIKdeEP0U0gU4ndNKfdfVvx4V7Fd9ScVaeKbHmhXtKiWw9eiFyXEakJR3Wi0KxvHAtRCJUUivPm4N1IgGIm7jd6sTYZK3cJJWsgIJcJFSMidXKS7oH9q8L1myWcmx5-BbiwxCceAka-s88caLE83GuphE47UjmS0rnBnq60vIsL01_bLHZQnPCfpS7qrhET8d8n18eVQoLXJSib-ArCLprFZ9P10H0V8hu1PFrb6')">
                </div>
              </div>
              <div class="px-4 pb-4">
                <span class="text-xs font-bold uppercase tracking-widest bg-secondary-container text-on-secondary-container px-2 py-1 mb-3 inline-block">Mixed-Use</span>
                <h3 class="font-headline-md text-primary mb-2" style="font-family:'Montserrat',sans-serif;">Creek Harbor Hub</h3>
                <p class="font-body-md text-on-surface-variant mb-4">Integrated living and working spaces with direct connectivity to Dubai Metro.</p>
                <div class="flex justify-between items-center border-t border-outline-variant pt-4">
                  <span class="text-caption text-outline">Net Yield</span>
                  <span class="font-bold text-secondary" style="font-family:'Montserrat',sans-serif; font-size:1.25rem;">9.1% ROI</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Why Invest Through Us -->
      <section class="py-24 md:py-32 bg-white">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
          <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-primary mb-4" style="font-family:'Montserrat',sans-serif; font-size:2rem; font-weight:600; letter-spacing:-0.01em;">Why Invest Through Us</h2>
            <p class="font-body-md text-on-surface-variant">We bridge the gap between global capital and Dubai's most resilient real estate assets through transparency and local expertise.</p>
          </div>
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12">
            <div class="flex flex-col items-center text-center p-8 hover:bg-surface-container-low transition-colors duration-300">
              <div class="w-20 h-20 bg-primary-container rounded-full flex items-center justify-center mb-6">
                <span class="material-symbols-outlined text-secondary-fixed" style="font-size:2rem;">payments</span>
              </div>
              <h3 class="font-headline-md text-primary mb-4" style="font-family:'Montserrat',sans-serif;">Direct Pricing</h3>
              <p class="font-body-md text-on-surface-variant leading-relaxed">Access 0% commission developer-direct pricing. No hidden fees, just pure investment value.</p>
            </div>
            <div class="flex flex-col items-center text-center p-8 hover:bg-surface-container-low transition-colors duration-300">
              <div class="w-20 h-20 bg-primary-container rounded-full flex items-center justify-center mb-6">
                <span class="material-symbols-outlined text-secondary-fixed" style="font-size:2rem;">diversity_3</span>
              </div>
              <h3 class="font-headline-md text-primary mb-4" style="font-family:'Montserrat',sans-serif;">Personalized Consultation</h3>
              <p class="font-body-md text-on-surface-variant leading-relaxed">Bespoke advisory tailored to your financial goals, tax planning, and portfolio diversification.</p>
            </div>
            <div class="flex flex-col items-center text-center p-8 hover:bg-surface-container-low transition-colors duration-300">
              <div class="w-20 h-20 bg-primary-container rounded-full flex items-center justify-center mb-6">
                <span class="material-symbols-outlined text-secondary-fixed" style="font-size:2rem;">verified_user</span>
              </div>
              <h3 class="font-headline-md text-primary mb-4" style="font-family:'Montserrat',sans-serif;">Verified Opportunities</h3>
              <p class="font-body-md text-on-surface-variant leading-relaxed">Every property in our catalog is rigorously vetted for legal compliance and financial stability.</p>
            </div>
            <div class="flex flex-col items-center text-center p-8 hover:bg-surface-container-low transition-colors duration-300">
              <div class="w-20 h-20 bg-primary-container rounded-full flex items-center justify-center mb-6">
                <span class="material-symbols-outlined text-secondary-fixed" style="font-size:2rem;">support_agent</span>
              </div>
              <h3 class="font-headline-md text-primary mb-4" style="font-family:'Montserrat',sans-serif;">End-to-End Guidance</h3>
              <p class="font-body-md text-on-surface-variant leading-relaxed">From inquiry to handover, our team supports you throughout the process.</p>
            </div>
          </div>
        </div>
      </section>

    </main>

    <!-- Footer -->
    <Footer source="investments" />

    <!-- Mobile Bottom Nav -->
    <nav class="fixed bottom-0 left-0 w-full z-50 flex justify-around items-center h-16 bg-surface border-t border-outline-variant shadow-md md:hidden">
      <Link href="/" class="flex flex-col items-center justify-center text-outline">
        <span class="material-symbols-outlined">home</span>
        <span class="font-label-md" style="font-size:10px;">Home</span>
      </Link>
      <Link href="/investments" class="flex flex-col items-center justify-center text-secondary">
        <span class="material-symbols-outlined">search_insights</span>
        <span class="font-label-md" style="font-size:10px;">Explore</span>
      </Link>
      <a href="#" class="flex flex-col items-center justify-center text-outline">
        <span class="material-symbols-outlined">menu_book</span>
        <span class="font-label-md" style="font-size:10px;">Guide</span>
      </a>
      <a href="#" class="flex flex-col items-center justify-center text-outline">
        <span class="material-symbols-outlined">calendar_month</span>
        <span class="font-label-md" style="font-size:10px;">Consult</span>
      </a>
    </nav>

    <!-- FAB -->
    <!-- <Link href="/consult" class="fixed bottom-24 right-6 md:bottom-12 md:right-12 bg-secondary text-on-secondary w-16 h-16 rounded-full flex items-center justify-center shadow-modal hover:scale-110 active:scale-95 transition-all z-40 group">
      <span class="material-symbols-outlined" style="font-size:1.75rem;">chat</span>
      <span class="absolute right-full mr-4 bg-primary text-on-primary px-4 py-2 text-sm whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity hidden md:block">Speak to an Advisor</span>
    </Link> -->

  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
import screenBg from '@images/screen.png';
import NavBar from '@/Components/NavBar.vue';
import Footer from '@/Components/Footer.vue';
</script>

<style scoped>
section { transition: all 0.7s ease-out; }
</style>
