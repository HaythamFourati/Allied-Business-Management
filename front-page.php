<?php
/**
 * Front Page Template for Allied Business Management
 */

get_header();
?>


<!-- Hero Section -->
<section id="top" class="relative overflow-hidden bg-gradient-to-br from-slate-900 to-slate-700 text-white">
  <div class="max-w-6xl mx-auto px-4 py-20 md:py-28">
    <div class="grid gap-10 md:grid-cols-2 items-start">
      <div class="reveal transition duration-700 ease-out">
        <h1 class="text-4xl md:text-5xl font-semibold tracking-tight">Allied Business Management</h1>
        <p class="mt-4 text-lg md:text-xl text-slate-200">Guiding businesses toward sustainable growth and operational excellence.</p>
        <div class="mt-8">
          <a href="#contact" class="inline-flex items-center rounded-lg bg-teal-500 px-5 py-3 font-medium text-white hover:bg-teal-600 transition">Schedule a Consultation</a>
        </div>
      </div>
      <div class="reveal transition duration-700 ease-out">
        <div class="grid gap-4 sm:grid-cols-2">
          <div class="flex items-start gap-3 rounded-lg border border-white/15 bg-white/10 p-4">
            <div class="inline-flex h-8 w-8 flex-none items-center justify-center rounded-full border-2 border-teal-300/60 bg-teal-400/10 text-teal-300" aria-hidden="true">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M8.5 12.5l2.5 2.5 4.5-5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <div>
              <h3 class="font-medium text-white">Decades of Experience</h3>
              <p class="text-sm text-slate-200/80">Practical, hands-on expertise.</p>
            </div>
          </div>
          <div class="flex items-start gap-3 rounded-lg border border-white/15 bg-white/10 p-4">
            <div class="inline-flex h-8 w-8 flex-none items-center justify-center rounded-full border-2 border-teal-300/60 bg-teal-400/10 text-teal-300" aria-hidden="true">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M8.5 12.5l2.5 2.5 4.5-5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <div>
              <h3 class="font-medium text-white">Results-Oriented</h3>
              <p class="text-sm text-slate-200/80">Focused on measurable business growth.</p>
            </div>
          </div>
          <div class="flex items-start gap-3 rounded-lg border border-white/15 bg-white/10 p-4">
            <div class="inline-flex h-8 w-8 flex-none items-center justify-center rounded-full border-2 border-teal-300/60 bg-teal-400/10 text-teal-300" aria-hidden="true">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M8.5 12.5l2.5 2.5 4.5-5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <div>
              <h3 class="font-medium text-white">Personalized Strategies</h3>
              <p class="text-sm text-slate-200/80">Tailored solutions, not one-size-fits-all.</p>
            </div>
          </div>
          <div class="flex items-start gap-3 rounded-lg border border-white/15 bg-white/10 p-4">
            <div class="inline-flex h-8 w-8 flex-none items-center justify-center rounded-full border-2 border-teal-300/60 bg-teal-400/10 text-teal-300" aria-hidden="true">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M8.5 12.5l2.5 2.5 4.5-5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <div>
              <h3 class="font-medium text-white">Trusted Guidance</h3>
              <p class="text-sm text-slate-200/80">Long-term support for sustainable success.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="pointer-events-none absolute inset-0 opacity-20" aria-hidden="true">
    <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 800 450"><defs><linearGradient id="g" x1="0" x2="1" y1="0" y2="1"><stop offset="0%" stop-color="#10b981"/><stop offset="100%" stop-color="#06b6d4"/></linearGradient></defs><circle cx="120" cy="60" r="180" fill="url(#g)"/><circle cx="680" cy="360" r="220" fill="url(#g)"/></svg>
  </div>
</section>

<!-- About Section -->
<section id="about" class="py-16 md:py-20 bg-white">
  <div class="max-w-6xl mx-auto px-4 grid md:grid-cols-3 gap-10 items-center">
    <div class="md:col-span-1 flex justify-center">
      <img 
        src="<?php echo esc_url( content_url('/uploads/2025/08/acf73ffb-5aa5-45dd-92d9-c82dffdba48c.png') ); ?>" 
        alt="Garey Simmons" 
        class="h-60 w-60 rounded-full object-cover border border-slate-200" 
        loading="lazy" 
        decoding="async"
      />
    </div>
    <div class="md:col-span-2 reveal transition duration-700 ease-out">
      <h2 class="text-2xl md:text-3xl font-semibold text-slate-900">About Garey Simmons</h2>
      <p class="mt-4 text-slate-700">Garey Simmons leads Allied Business Management with decades of hands-on experience helping business owners, entrepreneurs, and executives grow sustainably. As the direct owner of <a class="text-teal-600 hover:text-teal-700 underline" href="https://www.localvocalmarketing.com" target="_blank" rel="noopener">Local Vocal Marketing</a>, Garey brings a unique blend of strategic insight, operational discipline, and marketing expertise.</p>
      <p class="mt-3 text-slate-700">Our mission is simple: deliver clear strategies, optimize operations, and support leaders in achieving measurable results over the long term.</p>
    </div>
  </div>
</section>

<!-- Services Section -->
<section id="services" class="py-16 md:py-20 bg-slate-50">
  <div class="max-w-6xl mx-auto px-4">
    <h2 class="text-2xl md:text-3xl font-semibold text-slate-900 text-center">Services</h2>
    <p class="mt-3 text-slate-600 text-center max-w-2xl mx-auto">Practical, senior-level guidance focused on growth, efficiency, and performance.</p>

    <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
      <!-- Card 1 -->
      <div class="group rounded-xl border border-slate-200 bg-white p-6 shadow-sm hover:shadow-md transition reveal duration-700 ease-out">
        <div class="h-10 w-10 rounded-md bg-teal-50 text-teal-600 flex items-center justify-center">
          <!-- Strategy Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor"><path d="M3 3h2v2H3V3zm4 0h14v2H7V3zM3 7h2v2H3V7zm4 0h14v2H7V7zM3 11h2v2H3v-2zm4 0h14v2H7v-2zM3 15h2v2H3v-2zm4 0h14v2H7v-2zM3 19h2v2H3v-2zm4 0h14v2H7v-2z"/></svg>
        </div>
        <h3 class="mt-4 font-semibold text-slate-900">Business Strategy & Consulting</h3>
        <p class="mt-2 text-sm text-slate-600">Clarify goals, identify opportunities, and build an actionable roadmap for growth.</p>
      </div>

      <!-- Card 2 -->
      <div class="group rounded-xl border border-slate-200 bg-white p-6 shadow-sm hover:shadow-md transition reveal duration-700 ease-out">
        <div class="h-10 w-10 rounded-md bg-teal-50 text-teal-600 flex items-center justify-center">
          <!-- Operations Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19.14,12.94a7.5,7.5,0,0,0,.06-.94,7.5,7.5,0,0,0-.06-.94l2.11-1.65a.5.5,0,0,0,.12-.64l-2-3.46a.5.5,0,0,0-.6-.22l-2.49,1a7.37,7.37,0,0,0-1.63-.94l-.38-2.65A.5.5,0,0,0,12.63,1H9.37a.5.5,0,0,0-.49.41L8.5,4.06a7.37,7.37,0,0,0-1.63.94l-2.49-1a.5.5,0,0,0-.6.22l-2,3.46a.5.5,0,0,0,.12.64L4.14,11.06a7.5,7.5,0,0,0-.06.94,7.5,7.5,0,0,0,.06.94L2,14.59a.5.5,0,0,0-.12.64l2,3.46a.5.5,0,0,0,.6.22l2.49-1a7.37,7.37,0,0,0,1.63.94l.38,2.65a.5.5,0,0,0,.49.41h3.26a.5.5,0,0,0,.49-.41l.38-2.65a7.37,7.37,0,0,0,1.63-.94l2.49,1a.5.5,0,0,0,.6-.22l2-3.46a.5.5,0,0,0-.12-.64ZM12,15.5A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z"/></svg>
        </div>
        <h3 class="mt-4 font-semibold text-slate-900">Operations & Efficiency</h3>
        <p class="mt-2 text-sm text-slate-600">Streamline processes, reduce waste, and improve execution across teams.</p>
      </div>

      <!-- Card 3 -->
      <div class="group rounded-xl border border-slate-200 bg-white p-6 shadow-sm hover:shadow-md transition reveal duration-700 ease-out">
        <div class="h-10 w-10 rounded-md bg-teal-50 text-teal-600 flex items-center justify-center">
          <!-- Marketing Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M3 3v18l7-5 11 5V3L10 8 3 3z"/></svg>
        </div>
        <h3 class="mt-4 font-semibold text-slate-900">Marketing & Brand Growth</h3>
        <p class="mt-2 text-sm text-slate-600">Strengthen positioning, messaging, and market visibility for sustainable demand.</p>
      </div>

      <!-- Card 4 -->
      <div class="group rounded-xl border border-slate-200 bg-white p-6 shadow-sm hover:shadow-md transition reveal duration-700 ease-out">
        <div class="h-10 w-10 rounded-md bg-teal-50 text-teal-600 flex items-center justify-center">
          <!-- Finance Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor"><path d="M3 3h2v18H3V3zm4 8h2v10H7V11zm4-4h2v14h-2V7zm4 6h2v8h-2v-8zm4-10h2v18h-2V3z"/></svg>
        </div>
        <h3 class="mt-4 font-semibold text-slate-900">Financial & Performance Analysis</h3>
        <p class="mt-2 text-sm text-slate-600">Track the right metrics and translate insights into confident decisions.</p>
      </div>
    </div>
  </div>
</section>

<!-- Why Choose Us Section -->
<section id="why" class="py-16 md:py-20 bg-white">
  <div class="max-w-6xl mx-auto px-4">
    <h2 class="text-2xl md:text-3xl font-semibold text-slate-900 text-center">Why Choose Us</h2>
    <div class="mt-10 grid gap-6 md:grid-cols-3">
      <?php
      $why = [
        ['title' => 'Proven Experience', 'desc' => 'Decades of hands-on leadership guiding companies through change.'],
        ['title' => 'Personalized Strategies', 'desc' => 'No templates—tailored plans that fit your goals and constraints.'],
        ['title' => 'Results-Driven', 'desc' => 'Clarity, accountability, and measurable business outcomes.']
      ];
      foreach ($why as $item): ?>
        <div class="rounded-xl border border-slate-200 p-6 bg-slate-50 reveal transition duration-700 ease-out">
          <div class="h-10 w-10 rounded-full bg-teal-100 text-teal-600 flex items-center justify-center">
            <!-- Check Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.2 4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4z"/></svg>
          </div>
          <h3 class="mt-4 font-semibold text-slate-900"><?php echo esc_html($item['title']); ?></h3>
          <p class="mt-2 text-sm text-slate-600"><?php echo esc_html($item['desc']); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Testimonials / Trust Section -->
<section id="testimonials" class="py-16 md:py-20 bg-slate-50">
  <div class="max-w-6xl mx-auto px-4">
    <h2 class="text-2xl md:text-3xl font-semibold text-slate-900 text-center">What Clients Say</h2>
    <div class="mt-10 grid gap-6 md:grid-cols-3">
      <?php
      $testimonials = [
        ['quote' => 'Clear, practical guidance that moved our business forward.', 'author' => 'CEO, Manufacturing Co.'],
        ['quote' => 'Garey helped us streamline operations and focus on what matters.', 'author' => 'Founder, SaaS Startup'],
        ['quote' => 'Trusted strategic partner with real-world business insight.', 'author' => 'Director, Professional Services']
      ];
      foreach ($testimonials as $t): ?>
        <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm reveal transition duration-700 ease-out">
          <p class="text-slate-700">“<?php echo esc_html($t['quote']); ?>”</p>
          <p class="mt-4 text-sm font-medium text-slate-900"><?php echo esc_html($t['author']); ?></p>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Partner Logos Row -->
    <div class="mt-10 grid grid-cols-2 md:grid-cols-4 gap-6 items-center opacity-80">
      <a href="https://www.google.com" target="_blank" rel="noopener" class="flex items-center justify-center h-10">
        <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" alt="Google" class="h-8 md:h-10 w-auto" loading="lazy" decoding="async" />
      </a>
      <a href="https://www.microsoft.com" target="_blank" rel="noopener" class="flex items-center justify-center h-10">
        <img src="https://upload.wikimedia.org/wikipedia/commons/4/44/Microsoft_logo.svg" alt="Microsoft" class="h-8 md:h-10 w-auto" loading="lazy" decoding="async" />
      </a>
      <a href="https://www.amazon.com" target="_blank" rel="noopener" class="flex items-center justify-center h-10">
        <img src="https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg" alt="Amazon" class="h-8 md:h-10 w-auto" loading="lazy" decoding="async" />
      </a>
      <a href="https://www.ibm.com" target="_blank" rel="noopener" class="flex items-center justify-center h-10">
        <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/IBM_logo.svg" alt="IBM" class="h-8 md:h-10 w-auto" loading="lazy" decoding="async" />
      </a>
    </div>
  </div>
</section>

<!-- Contact / CTA Combined -->
<section id="contact" class="relative overflow-hidden py-16 md:py-20 bg-gradient-to-br from-slate-900 via-slate-900 to-teal-900 text-white">
  <!-- Decorative background shapes -->
  <div aria-hidden="true" class="pointer-events-none absolute inset-0">
    <div class="absolute -top-24 -left-24 h-72 w-72 md:h-96 md:w-96 rounded-full bg-white/10 ring-1 ring-white/10 blur-2xl"></div>
    <div class="absolute -bottom-40 -right-28 h-96 w-96 rounded-full bg-teal-300/20 ring-1 ring-white/10 blur-xl"></div>
    <div class="hidden md:block absolute top-1/3 right-1/4 h-72 w-72 rounded-full bg-cyan-300/10 ring-1 ring-white/10 blur-xl"></div>
  </div>
  <div class="max-w-5xl mx-auto px-4 text-center reveal transition duration-700 ease-out">
    <h2 class="text-3xl md:text-5xl font-semibold">Partner with  <br/> Allied Business Management.</h2>
    <p class="mt-3 text-white/90">Let’s connect. We’re ready to help.</p>

    <div class="mt-10 mx-auto max-w-5xl">
      <div class="rounded-2xl bg-white/10 ring-1 ring-white/25 backdrop-blur-sm shadow-2xl shadow-black/20 p-6 md:p-10 text-left">
        <div class="grid gap-10 md:grid-cols-2 items-start">
          <div>
            <h3 class="font-semibold text-white flex items-center gap-2">
              <!-- Chat Icon -->
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M20 2H4a2 2 0 00-2 2v14l4-4h14a2 2 0 002-2V4a2 2 0 00-2-2z"/></svg>
              Get in touch
            </h3>
            <div class="mt-4 space-y-4">
              <a href="tel:+14438521000" class="group flex items-center gap-4 rounded-xl bg-white/10 hover:bg-white/20 ring-1 ring-white/25 px-5 py-4 transition">
                <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/15 ring-1 ring-white/25">
                  <!-- Phone Icon -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white/90 group-hover:text-white" viewBox="0 0 24 24" fill="currentColor"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.01-.24 11.36 11.36 0 003.56.57 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.36 11.36 0 00.57 3.56 1 1 0 01-.24 1.01l-2.2 2.2z"/></svg>
                </span>
                <div>
                  <div class="text-xs uppercase tracking-wide text-white/70">Call us</div>
                  <div class="font-semibold">(443) 852-1000</div>
                </div>
              </a>
              <a href="mailto:info@localvocalmarketing.com" class="group flex items-center gap-4 rounded-xl bg-white/10 hover:bg-white/20 ring-1 ring-white/25 px-5 py-4 transition">
                <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/15 ring-1 ring-white/25">
                  <!-- Mail Icon -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white/90 group-hover:text-white" viewBox="0 0 24 24" fill="currentColor"><path d="M20 4H4a2 2 0 00-2 2v12a2 2 0 002 2h16a2 2 0 002-2V6a2 2 0 00-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
                </span>
                <div>
                  <div class="text-xs uppercase tracking-wide text-white/70">Email us</div>
                  <div class="font-semibold">info@localvocalmarketing.com</div>
                </div>
              </a>
            </div>
          </div>

          <div class="md:border-l md:border-white/20 md:pl-10">
            <h3 class="font-semibold text-white">Business Details</h3>
            <ul class="mt-4 space-y-3 text-white/90 text-sm">
              <li class="flex items-center gap-3">
                <!-- Building Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M3 21h18v-2H3v2zm2-4h2V5H5v12zm4 0h2V3H9v14zm4 0h2V8h-2v9zm4 0h2V12h-2v5z"/></svg>
                <span>Allied Business Management</span>
              </li>
              <li class="flex items-center gap-3">
                <!-- User Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 12a5 5 0 100-10 5 5 0 000 10zm0 2c-4.418 0-8 2.239-8 5v1h16v-1c0-2.761-3.582-5-8-5z"/></svg>
                <span>Led by Garey Simmons</span>
              </li>
            </ul>
            <div class="mt-5 space-y-2">
              <a href="https://www.linkedin.com/in/gareysimmons/" target="_blank" rel="noopener" class="group inline-flex items-center gap-2 rounded-lg bg-white/10 hover:bg-white/20 ring-1 ring-white/25 px-3 py-2 transition text-white/90 hover:text-white">
                <!-- LinkedIn Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M4.98 3.5C4.98 4.88 3.86 6 2.5 6S0 4.88 0 3.5 1.12 1 2.5 1s2.48 1.12 2.48 2.5zM.5 8h4V24h-4V8zm7 0h3.8v2.2h.1c.5-1 1.8-2.2 3.8-2.2 4.1 0 4.8 2.7 4.8 6.2V24h-4v-7.1c0-1.7 0-3.8-2.3-3.8s-2.7 1.8-2.7 3.7V24h-4V8z"/></svg>
                <span>LinkedIn</span>
              </a>
              <a href="https://www.localvocalmarketing.com" target="_blank" rel="noopener" class="group inline-flex items-center gap-2 rounded-lg bg-white/10 hover:bg-white/20 ring-1 ring-white/25 px-3 py-2 transition text-white/90 hover:text-white">
                <!-- External Link Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M14 3h7v7h-2V6.41l-9.29 9.3-1.42-1.42 9.3-9.29H14V3z"/><path d="M5 5h5V3H3v7h2V5zm0 14h5v2H3v-7h2v5zm14 0v-5h2v7h-7v-2h5z"/></svg>
                <span>LocalVocalMarketing.com</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php get_footer();
