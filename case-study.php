<!DOCTYPE html>

<html class="scroll-smooth" lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Brumby Case Study | Product Designer Portfolio</title>
  <meta content="Case study for Brumby - AI-driven call center analytics platform." name="description" />
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
  <style data-purpose="animations">
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .reveal {
      opacity: 0;
    }

    .reveal.active {
      animation: fadeInUp 0.8s ease-out forwards;
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

<body class="font-manrope bg-white text-slate-900 overflow-x-hidden">
  <?php include 'components/header.php'; ?>
  <!-- BEGIN: Hero Section -->
  <section class="reveal bg-[#fdfcfb] pt-12 md:pt-20 border-b border-slate-100" aria-labelledby="hero-title">
    <div class="max-w-7xl mx-auto px-6 md:px-8">
      <div class="mb-12">
        <h1 id="hero-title" class="text-5xl md:text-7xl font-extrabold text-slate-900 mb-2">Brumby</h1>
        <p class="text-slate-500 text-lg md:text-xl font-medium tracking-tight">Product Designer • Call Center Analytics</p>
      </div>
      <!-- Hero Mockup Container -->
      <div class="relative w-full overflow-hidden rounded-t-3xl shadow-2xl">
        <img alt="Brumby Dashboard interface showing AI-powered call center analytics" class="w-full h-auto object-cover" src="assets/images/sections/case-studies/C1/brumby.jpg" />
      </div>
    </div>
  </section>
  <!-- END: Hero Section -->
  <!-- BEGIN: Tools Section -->
  <section class="reveal py-12 bg-white">
    <div class="max-w-7xl mx-auto px-6 md:px-8">
      <h3 class="text-slate-900 font-bold text-xl mb-8">Tools</h3>
      <div class="flex flex-wrap gap-6 items-center">
        <!-- Tool Item -->
        <div class="flex flex-col items-center gap-2">
          <div class="w-12 h-12 rounded-full bg-blue-600 flex items-center justify-center text-white text-xs font-bold">FI</div>
          <span class="text-[10px] uppercase font-bold text-slate-400">Figma</span>
        </div>
        <div class="flex flex-col items-center gap-2">
          <div class="w-12 h-12 rounded-full bg-indigo-600 flex items-center justify-center text-white text-xs font-bold">RE</div>
          <span class="text-[10px] uppercase font-bold text-slate-400">HTML</span>
        </div>
        <div class="flex flex-col items-center gap-2">
          <div class="w-12 h-12 rounded-full bg-blue-500 flex items-center justify-center text-white text-xs font-bold">TY</div>
          <span class="text-[10px] uppercase font-bold text-slate-400">CSS</span>
        </div>
        <div class="flex flex-col items-center gap-2">
          <div class="w-12 h-12 rounded-full bg-slate-100 flex items-center justify-center text-slate-400 text-xs font-bold border border-slate-200">PY</div>
          <span class="text-[10px] uppercase font-bold text-slate-400">Tailwind</span>
        </div>
        <div class="flex flex-col items-center gap-2">
          <div class="w-12 h-12 rounded-full bg-slate-100 flex items-center justify-center text-slate-400 text-xs font-bold border border-slate-200">PY</div>
          <span class="text-[10px] uppercase font-bold text-slate-400">GIT</span>
        </div>
        <div class="flex flex-col items-center gap-2">
          <div class="w-12 h-12 rounded-full bg-slate-100 flex items-center justify-center text-slate-400 text-xs font-bold border border-slate-200">PY</div>
          <span class="text-[10px] uppercase font-bold text-slate-400">Apex Charts JS</span>
        </div>
      </div>
    </div>
  </section>
  <!-- END: Tools Section -->
  <!-- BEGIN: Content Sections -->
  <main class="max-w-7xl mx-auto px-6 md:px-8 py-16 space-y-24">
    <!-- My Role -->
    <section class="reveal">
      <h2 class="text-4xl font-extrabold text-slate-900 mb-8">My Role</h2>
      <div class="p-8 md:p-12 bg-slate-50 rounded-3xl border border-slate-100">
        <div class="prose prose-slate max-w-none text-slate-600 leading-relaxed space-y-4">
          <p>I worked as the UX/UI Designer and Front-end Designer for the project.</p>
          <p>My responsibilities included the entire design lifecycle, from initial research to front-end implementation.</p>
          <p class="font-bold">Responsibilities included:</p>
          <ul class="list-disc pl-5 space-y-2">
            <li>UX research and workflow discovery with stakeholders</li>
            <li>Information architecture and product structure</li>
            <li>Wireframing and interface design</li>
            <li>Interaction design</li>
            <li>UI design and visual system</li>
            <li>Prototyping</li>
            <li>Front-end layout implementation</li>
            <li>Design handoff and collaboration with developers</li>
          </ul>
          <p class="font-bold mt-6">I worked closely with:</p>
          <ul class="list-disc pl-5 space-y-2">
            <li>1 Product Manager</li>
            <li>3 Developers</li>
          </ul>
          <p>While development was handled by the engineering team, I delivered the HTML/CSS structure using Tailwind, which developers integrated into the React codebase.</p>
        </div>
      </div>
    </section>
    <!-- Brief & Context -->
    <section class="reveal">
      <h2 class="text-4xl font-extrabold text-slate-900 mb-8">Brief &amp; Context</h2>
      <div class="max-w-4xl space-y-6 text-slate-600 text-lg leading-relaxed">
        <p>Brumby is a web application that leverages artificial intelligence to analyze call center conversations and help supervisors improve service quality and agent performance.</p>
        <p>The platform processes recorded calls and extracts valuable insights such as emotional tone, silence detection, interaction dynamics, and conversation transcripts. Supervisors and QA auditors can review calls, analyze performance metrics, and evaluate agents using structured scoring forms.</p>
        <p>The goal of the platform is to reduce the time required to audit calls while improving customer experience and service quality.</p>
      </div>
    </section>
    <!-- Problem -->
    <section class="reveal">
      <h2 class="text-4xl font-extrabold text-slate-900 mb-8">Problem</h2>
      <div class="p-8 md:p-12 bg-white rounded-3xl border border-slate-100 shadow-sm">
        <div class="prose prose-slate max-w-none text-slate-600 leading-relaxed space-y-4">
          <p>Call center supervisors and QA auditors typically need to review large numbers of calls to assess agent performance and identify problematic interactions.</p>
          <p>This process is often:</p>
          <ul class="list-disc pl-5 space-y-2">
            <li>manual</li>
            <li>time-consuming</li>
            <li>inconsistent</li>
            <li>difficult to scale</li>
          </ul>
          <p>Supervisors must listen to entire calls to identify issues such as poor communication, long silences, or negative customer sentiment.</p>
          <p>Brumby addresses this challenge by using AI to automatically analyze calls and highlight key moments, emotional signals, and conversation dynamics.</p>
          <p>This allows auditors to focus on insightful evaluation instead of manual review.</p>
        </div>
      </div>
    </section>
    <!-- Design Process -->
    <section class="reveal">
      <h2 class="text-4xl font-extrabold text-slate-900 mb-12">Design Process</h2>
      <!-- Process Images -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
        <div>
          <img alt="Audio Player Page" class="rounded-xl shadow-md border border-slate-100 mb-4" src="assets/images/sections/case-studies/C1/brumby.jpg" />
          <p class="text-slate-400 text-sm italic">Audio Player Page</p>
        </div>
        <div>
          <img alt="BEM methodology" class="rounded-xl shadow-md border border-slate-100 mb-4" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC47bBJ-qNfFo_iAOeoMiwr7TTxwUP_1Xvj-1aZVt_4RLzyFt2jbVKj0Gm9wn4VBH0Xl14sFs3xD70iXwWDf1rMPMM5QqrlnsSSuYFGSqC5s7iXkLRzmZLhYgYMJG8DoCAc1HhV4B2_IQwgMMID5A70075CwpbyF9OM9bw81mVDBxZFr3mbRk7hcVCPIM5qAgSK13lmUGnNPzXwxX63HUNqY_Yc41xa4KexkxSXoHEXR1eyH3C5cTs3IxkP3Q-by9jdbdlSRyatYZ6P" />
          <p class="text-slate-400 text-sm italic">Use of BEM methodology in Figma layers naming.</p>
        </div>
      </div>
      <!-- Process Steps -->
      <div class="space-y-10">
        <!-- Step 1 -->
        <div class="flex gap-6">
          <div class="flex-shrink-0 w-10 h-10 rounded-full bg-brand-600 text-white flex items-center justify-center font-bold">1</div>
          <div>
            <h4 class="font-bold text-slate-900 mb-2">Discovery &amp; Research</h4>
            <p class="text-slate-500">Stakeholder interviews and workflow analysis helped identify how supervisors and auditors currently evaluate calls.</p>
          </div>
        </div>
        <!-- Step 2 -->
        <div class="flex gap-6">
          <div class="flex-shrink-0 w-10 h-10 rounded-full bg-brand-600 text-white flex items-center justify-center font-bold">2</div>
          <div>
            <h4 class="font-bold text-slate-900 mb-2">UX Structure</h4>
            <p class="text-slate-500">Information architecture and user flows were created to organize the product's main features</p>
          </div>
        </div>
        <!-- Step 3 -->
        <div class="flex gap-6">
          <div class="flex-shrink-0 w-10 h-10 rounded-full bg-brand-600 text-white flex items-center justify-center font-bold">3</div>
          <div>
            <h4 class="font-bold text-slate-900 mb-2">Wireframing &amp; Prototyping</h4>
            <p class="text-slate-500">Low-fidelity wireframes helped define layout structure and data hierarchy.</p>
          </div>
        </div>
        <!-- Step 4 -->
        <div class="flex gap-6">
          <div class="flex-shrink-0 w-10 h-10 rounded-full bg-brand-600 text-white flex items-center justify-center font-bold">4</div>
          <div>
            <h4 class="font-bold text-slate-900 mb-2">UI Design &amp; Implementation</h4>
            <p class="text-slate-500">High-fidelity designs were created in Figma to define the product's visual identity and interactions.</p>
          </div>
        </div>
        <!-- Step 5 -->
        <div class="flex gap-6">
          <div class="flex-shrink-0 w-10 h-10 rounded-full bg-brand-600 text-white flex items-center justify-center font-bold">5</div>
          <div>
            <h4 class="font-bold text-slate-900 mb-2">Front-end Implementation</h4>
            <p class="text-slate-500">The UI was implemented using HTML, CSS, and Tailwind before being integrated into the React development environment.</p>
          </div>
        </div>
      </div>
      <!-- More Process Images -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-16">
        <div>
          <img alt="Dashboard Page" class="rounded-xl shadow-md border border-slate-100 mb-4" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBhKreN2TRoFN8IaE_6aELn6q4hpcmhK_jWGmn7r2_2DMH7apbb1SrwaIyJg7BXgCMQN6As-1UjpNQkfvTUvERN86OGq1I6YrxOFpekPemIwt8GJUefmtRyF3dt7606OtHHvVo0A_K6H1g8k6ZFrh2_o8Vd4IvTeuJNptoX9jW_yPKF18ZMcIPYV8Bw6md-VeWT7Rm7_GsiGNHOaPT-oFMr8aUMYhKvz_pjb9zyJ4v6SRpYe_sxyUiXpWZnMxQvRb9J4rgu-5z7ojNz" />
          <p class="text-slate-400 text-sm italic">Dashboard page</p>
        </div>
        <div>
          <img alt="Create User Form" class="rounded-xl shadow-md border border-slate-100 mb-4" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBUc8mTxmUFqelxPAnxNEcfJWfyXrkWb7w49EArorgekPTMA4IclRwyh2yzVrm2c7hSJ_gD8BXmLToVgoXsgkc0VUm8iFzHjuiPk2Y0C8KDiqLWaj6YP7li86rDdzOd_WenTqL5JVzlEuaM-usx0T0dqtBHgNmwkRZyK_1VY_AkLTd5itfvpfPSLeB_SRJ2iBGQTHerm2o8aDTZIleqGN357Lk2uLRB0ZymS-bk6vn30Gnjz7cf3aqUF1SaFmx0P-bV5gpYx0IZa123" />
          <p class="text-slate-400 text-sm italic">Create User Form</p>
        </div>
      </div>
    </section>
    <!-- Solutions & Results -->
    <section class="reveal">
      <h2 class="text-4xl font-extrabold text-slate-900 mb-12">Solutions &amp; Results</h2>
      <div class="p-8 md:p-16 bg-slate-50 rounded-3xl border border-slate-100">
        <h3 class="text-2xl font-extrabold text-slate-900 mb-6">Results</h3>
        <p class="text-slate-500 mb-12 leading-relaxed max-w-4xl">
          The platform transformed how call center supervisors and QA auditors review customer interactions. By combining AI-driven conversation analysis with a clear and intuitive interface, Brumby makes it possible to quickly identify patterns in calls, evaluate agent performance, and detect issues that would otherwise require hours of manual listening.
          <br /><br />
          Supervisors can now access transcripts, emotional indicators, silence detection, and evaluation tools within a single interface, significantly streamlining the auditing workflow. This enables teams to focus less on manual review and more on improving service quality, coaching agents, and making data-informed decisions.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16">
          <!-- Key Features -->
          <div>
            <h4 class="text-xl font-bold text-brand-600 mb-6">Key Features</h4>
            <ul class="space-y-6 text-slate-600">
              <li>
                <span class="font-bold text-slate-900">Call Analytics Dashboard:</span> The main dashboard allows supervisors to quickly review calls and identify key patterns across interactions. Users can explore:
                <ul class="list-disc pl-5 mt-2 space-y-1 text-slate-500">
                  <li>emotional signals</li>
                  <li>conversation dynamics</li>
                  <li>silence detection</li>
                  <li>interaction markers</li>
                </ul>
              </li>
              <li>
                <span class="font-bold text-slate-900">AI Call Player:</span> The custom audio player enables detailed analysis of conversations. Users can:
                <ul class="list-disc pl-5 mt-2 space-y-1 text-slate-500">
                  <li>listen to calls</li>
                  <li>follow synchronized transcripts</li>
                  <li>identify emotional tone shifts</li>
                  <li>detect silence moments</li>
                  <li>review key interaction events</li>
                </ul>
              </li>
              <li>
                <span class="font-bold text-slate-900">Agent Evaluation System:</span> Supervisors and auditors can evaluate agents using structured forms directly linked to each call. This allows organizations to:
                <ul class="list-disc pl-5 mt-2 space-y-1 text-slate-500">
                  <li>standardize evaluations</li>
                  <li>track performance trends</li>
                  <li>improve training programs</li>
                </ul>
              </li>
              <li>
                <span class="font-bold text-slate-900">Call Management and Search:</span> Users can easily browse and locate calls through a structured interface designed for efficient auditing workflows.
              </li>
            </ul>
          </div>
          <!-- Right Column (Impact & Users) -->
          <div class="space-y-16">
            <div>
              <h4 class="text-xl font-bold text-brand-600 mb-6">Impact</h4>
              <p class="text-slate-500 mb-4">Although the product is still early in its lifecycle, it was designed to support several measurable outcomes:</p>
              <ul class="list-disc pl-5 space-y-1 text-slate-500">
                <li>reduce the time required to audit calls</li>
                <li>improve operational efficiency</li>
                <li>increase service quality insights</li>
                <li>enhance customer satisfaction through better agent performance</li>
              </ul>
            </div>
            <div>
              <h4 class="text-xl font-bold text-brand-600 mb-6">Users</h4>
              <p class="text-slate-500 mb-4">The primary users of the platform are:</p>
              <div class="space-y-4">
                <div>
                  <h5 class="font-bold text-slate-900">Call Center Supervisors</h5>
                  <p class="text-slate-500">Responsible for monitoring service quality and agent performance.</p>
                </div>
                <div>
                  <h5 class="font-bold text-slate-900">QA Auditors</h5>
                  <p class="text-slate-500">Professionals responsible for reviewing calls, evaluating operators, and ensuring quality standards are met.</p>
                </div>
              </div>
              <p class="text-slate-500 mt-6 italic font-medium">These users need tools that allow them to <span class="text-slate-900 font-bold">quickly identify problematic calls and evaluate agents efficiently.</span></p>
            </div>
          </div>
        </div>
        <!-- Key Metrics -->
        <div class="mt-20 pt-20 border-t border-slate-200 text-center">
          <h4 class="text-xl font-extrabold text-slate-900 mb-12">Key Metrics</h4>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
              <div class="text-5xl font-extrabold text-brand-600 mb-2">60/70%</div>
              <div class="text-xs uppercase font-bold text-slate-400 tracking-wider">Audit time reduction</div>
            </div>
            <div>
              <div class="text-5xl font-extrabold text-brand-600 mb-2">~15</div>
              <div class="text-xs uppercase font-bold text-slate-400 tracking-wider">Minutes response time reduction</div>
            </div>
            <div>
              <div class="text-5xl font-extrabold text-brand-600 mb-2">x3</div>
              <div class="text-xs uppercase font-bold text-slate-400 tracking-wider">Faster issue detection</div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- END: Content Sections -->
  <!-- BEGIN: Bottom Visual & Navigation -->
  <section class="reveal w-full" aria-label="Project showcase">
    <div class="max-w-7xl mx-auto px-6 md:px-8">
      <div class="rounded-3xl overflow-hidden shadow-2xl mb-12">
        <div class="relative h-[600px] w-full bg-slate-900">
          <img alt="Brumby platform displayed on multiple devices showing responsive design" class="w-full h-full object-cover opacity-80" src="assets/images/sections/case-studies/C1/brumby.jpg" />
        </div>
      </div>
    </div>
  </section>
  <!-- END: Bottom Visual & Navigation -->
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
  <!-- BEGIN: Reveal Script -->
  <script data-purpose="reveal-animations">
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

      document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
    });
  </script>
  <!-- END: Reveal Script -->
</body>

</html>