<!DOCTYPE html>
<html class="scroll-smooth" lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Toyota Viola Case Study | Product Designer Portfolio</title>
  <meta content="Case study for Toyota Viola - Official Toyota car dealership website and CMS." name="description" />
  <!-- Preconnect to Google Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
  <!-- Google Fonts: Manrope & Inter -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Manrope:wght@500;600;700;800&display=swap" rel="stylesheet" />
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <!-- Tailwind Config -->
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            'brand-blue': '#4479CE',
            'brand-navy': '#0f172a',
          },
          fontFamily: {
            sans: ['Inter', 'system-ui', '-apple-system', 'sans-serif'],
          },
        }
      }
    }
  </script>
  <!-- Custom Styles -->
  <link rel="stylesheet" href="assets/css/main.css">
  <style data-purpose="layout-and-animations">
    .reveal {
      opacity: 0;
      transform: translateY(20px);
      transition: all 0.8s ease-out;
    }

    .reveal.active {
      opacity: 1;
      transform: translateY(0);
    }

    /* WCAG 2.2 compliant focus styles */
    *:focus-visible {
      outline: 2px solid #2563EB;
      outline-offset: 4px;
    }

    /* Skip link styles */
    .skip-link {
      position: absolute;
      top: -40px;
      left: 0;
      background: #000;
      color: white;
      padding: 8px;
      text-decoration: none;
      z-index: 100;
    }

    .skip-link:focus {
      top: 0;
    }
  </style>
</head>

<body class="bg-white text-slate-800 font-sans antialiased">
  <?php include 'components/header.php'; ?>
  <!-- BEGIN: HeroSection -->
  <section class="relative overflow-hidden pt-16 pb-24 lg:pt-32 lg:pb-40 bg-slate-50" data-purpose="hero-section" aria-labelledby="hero-title">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid lg:grid-cols-2 gap-12 items-center">
        <div class="reveal">
          <h1 id="hero-title" class="font-heading text-6xl md:text-7xl font-extrabold text-slate-900 mb-6">
            Toyota Viola
          </h1>
          <p class="text-xl md:text-2xl text-slate-500 font-medium mb-8 leading-relaxed">
            UX/UI Design <span class="mx-2 text-slate-300">•</span> Car Dealership & CMS
          </p>
          <div class="flex flex-wrap gap-4 items-center">
            <span class="px-4 py-1.5 bg-brand-100 text-brand-900 rounded-full text-xs font-bold tracking-wider uppercase">E-commerce</span>
            <span class="px-4 py-1.5 bg-slate-200 text-slate-700 rounded-full text-xs font-bold tracking-wider uppercase">Custom CMS</span>
            <span class="px-4 py-1.5 bg-slate-200 text-slate-700 rounded-full text-xs font-bold tracking-wider uppercase">Automotive</span>
          </div>
        </div>
        <div class="relative reveal" style="transition-delay: 200ms;">
          <div class="relative z-10 rounded-xl overflow-hidden shadow-2xl border border-slate-200 bg-white">
            <img alt="Toyota Viola website showing the homepage with vehicle listings and modern interface" class="w-full h-auto" src="assets/images/sections/case-studies/C2/toyota.jpg" />
          </div>
          <!-- Decorative circle -->
          <div class="absolute -top-12 -right-12 w-64 h-64 bg-brand-100 rounded-full mix-blend-multiply filter blur-3xl opacity-70" aria-hidden="true"></div>
        </div>
      </div>
    </div>
  </section>
  <!-- END: HeroSection -->

  <!-- BEGIN: ToolsSection -->
  <section class="py-12 border-b border-slate-100" aria-labelledby="tools-heading">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <h2 id="tools-heading" class="sr-only">Tools Used</h2>
      <div class="flex flex-wrap justify-center gap-8 md:gap-16">
        <!-- Figma -->
        <div class="flex flex-col items-center gap-2 group">
          <div class="w-12 h-12 rounded-full bg-brand-500 flex items-center justify-center text-white font-bold text-sm shadow-lg group-hover:scale-110 transition-transform" aria-hidden="true">FI</div>
          <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Figma</span>
        </div>
        <!-- HTML -->
        <div class="flex flex-col items-center gap-2 group">
          <div class="w-12 h-12 rounded-full bg-orange-500 flex items-center justify-center text-white font-bold text-sm shadow-lg group-hover:scale-110 transition-transform" aria-hidden="true">HT</div>
          <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">HTML</span>
        </div>
        <!-- CSS -->
        <div class="flex flex-col items-center gap-2 group">
          <div class="w-12 h-12 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold text-sm shadow-lg group-hover:scale-110 transition-transform" aria-hidden="true">CS</div>
          <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">CSS</span>
        </div>
        <!-- PHP -->
        <div class="flex flex-col items-center gap-2 group">
          <div class="w-12 h-12 rounded-full bg-indigo-500 flex items-center justify-center text-white font-bold text-sm shadow-lg group-hover:scale-110 transition-transform" aria-hidden="true">PH</div>
          <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">PHP</span>
        </div>
        <!-- JavaScript -->
        <div class="flex flex-col items-center gap-2 group">
          <div class="w-12 h-12 rounded-full bg-yellow-500 flex items-center justify-center text-white font-bold text-sm shadow-lg group-hover:scale-110 transition-transform" aria-hidden="true">JS</div>
          <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">JavaScript</span>
        </div>
      </div>
    </div>
  </section>
  <!-- END: ToolsSection -->

  <!-- BEGIN: MyRole -->
  <section class="py-24 bg-white" data-purpose="role-section" aria-labelledby="role-heading">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="reveal">
        <h2 id="role-heading" class="font-heading text-4xl font-extrabold text-slate-900 mb-10">My Role</h2>
        <div class="bg-slate-50 p-8 md:p-12 rounded-2xl border border-slate-100 leading-relaxed text-slate-600 space-y-6">
          <p>I worked as the Lead UX/UI Designer and Front-end Developer for the Toyota Viola website redesign project. My responsibilities included the complete redesign and rebuild of both the public-facing website and the internal content management system.</p>
          <div class="grid md:grid-cols-2 gap-8">
            <ul class="space-y-3 list-disc pl-5 marker:text-brand-500">
              <li>UX research and stakeholder interviews</li>
              <li>Complete website redesign strategy</li>
              <li>Custom CMS architecture design</li>
              <li>E-commerce user flow optimization</li>
            </ul>
            <ul class="space-y-3 list-disc pl-5 marker:text-brand-500">
              <li>UI design and component system</li>
              <li>Front-end implementation (HTML/CSS/JS)</li>
              <li>PHP backend integration</li>
              <li>Training and handoff to client team</li>
            </ul>
          </div>
          <p class="pt-4 border-t border-slate-200 text-sm">Worked closely with: 2 Project Managers, 1 Marketing Director, 4 Developers.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- END: MyRole -->

  <!-- BEGIN: BriefAndProblemSection -->
  <section class="py-24 bg-slate-50" data-purpose="problem-section" aria-labelledby="brief-heading">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="reveal space-y-12">
        <div class="max-w-3xl">
          <h2 id="brief-heading" class="font-heading text-4xl font-extrabold text-slate-900 mb-6">Brief & Context</h2>
          <p class="text-lg text-slate-600 leading-relaxed">
            Toyota Viola is an official Toyota car dealership with multiple locations. They needed a complete digital transformation of their online presence to support vehicle sales, savings plans, service inquiries, and marketing campaigns. The project involved redesigning and rebuilding the entire website and developing a custom content management system tailored to their specific business needs.
          </p>
        </div>
        <div class="space-y-8">
          <h2 class="font-heading text-4xl font-extrabold text-slate-900">Problem</h2>
          <div class="bg-white p-8 md:p-12 rounded-2xl border border-slate-200 shadow-sm leading-relaxed text-slate-600">
            <p class="mb-6">The existing website was outdated, not mobile-responsive, and lacked the functionality needed to support their growing online business. Key challenges included:</p>
            <ul class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
              <li class="flex items-center gap-2 font-semibold text-slate-900">
                <div class="w-1.5 h-1.5 rounded-full bg-brand-500" aria-hidden="true"></div> Non-responsive design
              </li>
              <li class="flex items-center gap-2 font-semibold text-slate-900">
                <div class="w-1.5 h-1.5 rounded-full bg-brand-500" aria-hidden="true"></div> Complex vehicle search
              </li>
              <li class="flex items-center gap-2 font-semibold text-slate-900">
                <div class="w-1.5 h-1.5 rounded-full bg-brand-500" aria-hidden="true"></div> Manual content updates
              </li>
              <li class="flex items-center gap-2 font-semibold text-slate-900">
                <div class="w-1.5 h-1.5 rounded-full bg-brand-500" aria-hidden="true"></div> No savings plan calculator
              </li>
            </ul>
            <p>The dealership needed a modern, responsive website with an intuitive CMS that would allow their marketing team to manage vehicle inventory, promotions, and content without technical assistance.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END: BriefAndProblemSection -->

  <!-- BEGIN: DesignProcess -->
  <section class="py-24 bg-white" data-purpose="process-section" aria-labelledby="process-heading">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="reveal mb-16">
        <h2 id="process-heading" class="font-heading text-4xl font-extrabold text-slate-900 mb-12">Design Process</h2>
        <div class="grid md:grid-cols-2 gap-8 mb-12">
          <div class="space-y-4">
            <img alt="Toyota Viola homepage design mockup showing vehicle listings and hero section" class="rounded-xl border border-slate-200 shadow-md w-full" src="assets/images/sections/case-studies/C2/toyota.jpg" />
            <p class="text-xs font-semibold text-slate-400 italic">Homepage Design</p>
          </div>
          <div class="space-y-4">
            <img alt="Custom CMS interface for managing vehicle inventory and content" class="rounded-xl border border-slate-200 shadow-md w-full" src="assets/images/sections/case-studies/C2/toyota.jpg" />
            <p class="text-xs font-semibold text-slate-400 italic">Custom CMS Interface</p>
          </div>
        </div>
        <div class="grid gap-10 lg:grid-cols-5 py-12 border-y border-slate-100">
          <div class="space-y-4">
            <div class="w-10 h-10 rounded-full bg-brand-500 text-white flex items-center justify-center font-bold" aria-hidden="true">1</div>
            <h3 class="font-heading font-bold text-slate-900">Discovery</h3>
            <p class="text-sm text-slate-500">Stakeholder interviews and analysis of dealership workflows to understand business requirements.</p>
          </div>
          <div class="space-y-4">
            <div class="w-10 h-10 rounded-full bg-brand-500 text-white flex items-center justify-center font-bold" aria-hidden="true">2</div>
            <h3 class="font-heading font-bold text-slate-900">UX Structure</h3>
            <p class="text-sm text-slate-500">Information architecture for vehicle catalog, service booking, and savings plan modules.</p>
          </div>
          <div class="space-y-4">
            <div class="w-10 h-10 rounded-full bg-brand-500 text-white flex items-center justify-center font-bold" aria-hidden="true">3</div>
            <h3 class="font-heading font-bold text-slate-900">Wireframing</h3>
            <p class="text-sm text-slate-500">Low-fidelity wireframes for vehicle search, detail pages, and CMS dashboard layouts.</p>
          </div>
          <div class="space-y-4">
            <div class="w-10 h-10 rounded-full bg-brand-500 text-white flex items-center justify-center font-bold" aria-hidden="true">4</div>
            <h3 class="font-heading font-bold text-slate-900">UI Design</h3>
            <p class="text-sm text-slate-500">High-fidelity designs aligned with Toyota brand guidelines, creating a premium automotive feel.</p>
          </div>
          <div class="space-y-4">
            <div class="w-10 h-10 rounded-full bg-brand-500 text-white flex items-center justify-center font-bold" aria-hidden="true">5</div>
            <h3 class="font-heading font-bold text-slate-900">Development</h3>
            <p class="text-sm text-slate-500">Front-end and back-end implementation with custom PHP CMS and responsive design.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END: DesignProcess -->

  <!-- BEGIN: SolutionsResults -->
  <section class="py-24 bg-slate-50" data-purpose="results-section" aria-labelledby="results-heading">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="reveal space-y-16">
        <h2 id="results-heading" class="font-heading text-4xl font-extrabold text-slate-900">Solutions & Results</h2>
        <div class="bg-white p-8 md:p-16 rounded-2xl border border-slate-200 shadow-xl">
          <h3 class="font-heading text-2xl font-bold text-slate-900 mb-6">Results</h3>
          <p class="text-slate-600 mb-12 max-w-4xl leading-relaxed">
            The new Toyota Viola website transformed the dealership's digital presence. The responsive design improved mobile engagement significantly, while the custom CMS empowered the marketing team to manage content independently. The vehicle savings plan calculator became a key lead generation tool.
          </p>
          <div class="grid lg:grid-cols-2 gap-16">
            <div class="space-y-10">
              <div>
                <h4 class="font-heading font-bold text-brand-500 uppercase tracking-widest text-xs mb-4">Key Features</h4>
                <ul class="space-y-6">
                  <li>
                    <p class="font-bold text-slate-900 text-sm">Responsive Vehicle Catalog</p>
                    <p class="text-sm text-slate-500">Advanced search and filtering for new and used vehicles with detailed specification pages.</p>
                  </li>
                  <li>
                    <p class="font-bold text-slate-900 text-sm">Savings Plan Calculator</p>
                    <p class="text-sm text-slate-500">Interactive tool allowing customers to calculate monthly payments and savings plan options.</p>
                  </li>
                  <li>
                    <p class="font-bold text-slate-900 text-sm">Service Booking System</p>
                    <p class="text-sm text-slate-500">Online appointment scheduling for maintenance and service inquiries.</p>
                  </li>
                </ul>
              </div>
            </div>
            <div class="space-y-10">
              <div>
                <h4 class="font-heading font-bold text-brand-500 uppercase tracking-widest text-xs mb-4">Impact</h4>
                <ul class="space-y-3">
                  <li class="flex items-start gap-2 text-sm text-slate-600">
                    <div class="mt-1.5 w-1.5 h-1.5 bg-brand-500 rounded-full shrink-0" aria-hidden="true"></div> 45% increase in mobile traffic
                  </li>
                  <li class="flex items-start gap-2 text-sm text-slate-600">
                    <div class="mt-1.5 w-1.5 h-1.5 bg-brand-500 rounded-full shrink-0" aria-hidden="true"></div> 60% reduction in content update time
                  </li>
                  <li class="flex items-start gap-2 text-sm text-slate-600">
                    <div class="mt-1.5 w-1.5 h-1.5 bg-brand-500 rounded-full shrink-0" aria-hidden="true"></div> 30% increase in online leads
                  </li>
                </ul>
              </div>
              <div>
                <h4 class="font-heading font-bold text-brand-500 uppercase tracking-widest text-xs mb-4">Users</h4>
                <p class="text-sm text-slate-600 mb-2 font-bold">Car Buyers</p>
                <p class="text-sm text-slate-500 mb-4">Individuals and families looking for new or used Toyota vehicles.</p>
                <p class="text-sm text-slate-600 mb-2 font-bold">Marketing Team</p>
                <p class="text-sm text-slate-500">Internal users managing inventory, promotions, and content updates.</p>
              </div>
            </div>
          </div>
          <div class="mt-20 pt-12 border-t border-slate-100">
            <h4 class="text-center font-heading font-bold text-slate-900 mb-12">Key Metrics</h4>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
              <div class="text-center">
                <div class="text-5xl font-black text-brand-500 mb-2">45%</div>
                <div class="text-xs font-bold text-slate-400 uppercase tracking-widest">Mobile traffic increase</div>
              </div>
              <div class="text-center">
                <div class="text-5xl font-black text-brand-500 mb-2">60%</div>
                <div class="text-xs font-bold text-slate-400 uppercase tracking-widest">Content update time reduction</div>
              </div>
              <div class="text-center">
                <div class="text-5xl font-black text-brand-500 mb-2">30%</div>
                <div class="text-xs font-bold text-slate-400 uppercase tracking-widest">Online leads increase</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END: SolutionsResults -->

  <!-- BEGIN: FullWidthImage -->
  <section class="py-24 bg-white overflow-hidden" aria-label="Project showcase image">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="reveal rounded-3xl overflow-hidden shadow-2xl border border-slate-100">
        <img alt="Toyota Viola website displayed on multiple devices showing responsive design" class="w-full object-cover" src="assets/images/sections/case-studies/C2/toyota.jpg" />
      </div>
    </div>
  </section>
  <!-- END: FullWidthImage -->
  </main>
  <!-- END: Main Content -->

  <!-- BEGIN: PaginationFooter -->
  <footer role="contentinfo">
    <div class="bg-slate-50 border-t border-slate-200 py-12">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row items-center justify-between gap-8">
          <a class="group flex items-center gap-3 text-slate-500 hover:text-brand-500 transition-colors" href="case-study.php">
            <svg class="h-5 w-5 transform group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path d="M15 19l-7-7 7-7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
            </svg>
            <span class="font-bold text-sm">Previous Case Study (Brumby)</span>
          </a>
          <a class="px-8 py-3 bg-brand-blue text-white rounded-lg font-bold text-sm hover:bg-blue-700  transition-all shadow-md" href="index.php#case-studies">
            Back to Portfolio
          </a>
          <a class="group flex items-center gap-3 text-slate-500 hover:text-brand-500 transition-colors" href="case-study-3.php">
            <span class="font-bold text-sm">Next Case Study (Brokers)</span>
            <svg class="h-5 w-5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
            </svg>
          </a>
        </div>
      </div>
    </div>
    <!-- bottom footer -->
    <div class="py-12 px-6 bg-brand-navy text-white" role="contentinfo">
      <div class="mx-auto px-6 max-w-7xl flex flex-col md:flex-row items-center justify-between">
        <div class="mb-8 md:mb-0">
          <h3 class="text-xl font-bold mb-3">Patricio Solé</h3>
          <a class="text-slate-400 hover:text-white transition-colors flex items-center space-x-2 text-sm" href="mailto:patriciosole.web@gmail.com">
            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
            </svg>
            <span>patriciosole.web@gmail.com</span>
          </a>
        </div>

        <div class="flex items-center space-x-8">
          <!-- LinkedIn -->
          <a class="flex items-center space-x-2 text-sm font-medium hover:text-brand-blue transition-colors group" href="https://linkedin.com" target="_blank" rel="noopener noreferrer">
            <div class="bg-slate-800 p-2 rounded-lg group-hover:bg-brand-blue transition-colors">
              <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"></path>
              </svg>
            </div>
            <span>LinkedIn</span>
          </a>

          <!-- Behance -->
          <a class="flex items-center space-x-2 text-sm font-medium hover:text-brand-blue transition-colors group" href="https://behance.net" target="_blank" rel="noopener noreferrer">
            <div class="bg-slate-800 p-2 rounded-lg group-hover:bg-brand-blue transition-colors">
              <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                <path d="M7.5 11c1.5 0 2.3-.8 2.3-2s-.8-2-2.3-2h-4v4h4zm-4 2v5h4c1.5 0 2.5-1 2.5-2.5s-1-2.5-2.5-2.5h-4zm9-7h6v-1.5h-6v1.5zm3 4c-3 0-3.5 2.5-3.5 4s.5 4 3.5 4c2 0 3.5-1.5 3.5-3.5h-2.5c0 1-.5 1.5-1 1.5s-1-.5-1-1.5h4.5c0-2.5-.5-5-3.5-5z"></path>
              </svg>
            </div>
            <span>Behance</span>
          </a>
        </div>
      </div>
    </div>
  </footer>
  <!-- END: PaginationFooter -->

  <!-- BEGIN: ScrollRevealScript -->
  <script data-purpose="reveal-logic">
    document.addEventListener('DOMContentLoaded', () => {
      const observerOptions = {
        threshold: 0.1
      };

      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('active');
          }
        });
      }, observerOptions);

      document.querySelectorAll('.reveal').forEach(el => {
        observer.observe(el);
      });
    });
  </script>
  <!-- END: ScrollRevealScript -->
</body>

</html>