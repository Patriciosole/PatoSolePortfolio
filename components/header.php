<?php
/**
 * Header Component
 * ----------------
 * Reusable navigation header for all pages.
 * Include this file at the top of each page after the <body> tag.
 *
 * Usage: <?php include 'components/header.php'; ?>
 */

// Detect if we're on the homepage or a subpage
$isHomepage = (basename($_SERVER['PHP_SELF']) === 'index.php');
$currentPage = basename($_SERVER['PHP_SELF']);

// Set navigation links based on current page
$homeLink = $isHomepage ? '#' : 'index.php';
$bioLink = $isHomepage ? '#bio' : 'index.php#bio';
$caseStudiesLink = $isHomepage ? '#case-studies' : 'index.php#case-studies';
$contactLink = $isHomepage ? '#contact' : 'index.php#contact';

// Determine if we're on a case study page
$isCaseStudy = (strpos($currentPage, 'case-study') !== false);

// Set brand color class based on page type
// index.php uses brand-blue, case studies use brand-600
$brandColorClass = $isHomepage ? 'brand-blue' : 'brand-600';
$brandHoverClass = $isHomepage ? 'hover:text-brand-blue' : 'hover:text-brand-600';
?>

<!-- Skip to main content link for accessibility - WCAG 2.2 compliant -->
<a href="#main-content" class="skip-link">Skip to main content</a>

<style>
.skip-link {
  position: absolute;
  top: -40px;
  left: 0;
  background: #000;
  color: white;
  padding: 8px;
  text-decoration: none;
  z-index: 100;
  transition: top 0.3s;
}
.skip-link:focus {
  top: 0;
}
</style>

<!-- ===== Navigation ===== -->
<nav class="fixed top-0 left-0 right-0 z-50 bg-white/80 backdrop-blur-md border-b border-slate-100" role="navigation" aria-label="Main navigation">
  <div class="mx-auto px-6 max-w-7xl h-20 flex items-center justify-between">
    <!-- Logo/Avatar -->
    <a href="index.php" class="flex items-center space-x-3" aria-label="Go to homepage">
      <div class="w-10 h-10 rounded-full overflow-hidden bg-slate-200">
        <img alt="Patricio Solé profile photo" class="w-full h-full object-cover" src="assets/images/profile/avatar.png">
      </div>
    </a>

    <!-- Desktop Nav Links -->
    <div class="hidden md:flex items-center space-x-8">
      <a class="text-sm font-medium transition-colors <?php echo $brandHoverClass; ?>" href="<?php echo $homeLink; ?>">Home</a>
      <a class="text-sm font-medium transition-colors <?php echo $brandHoverClass; ?>" href="<?php echo $bioLink; ?>">Bio</a>
      <a class="text-sm font-medium transition-colors <?php echo $brandHoverClass; ?>" href="<?php echo $caseStudiesLink; ?>">Case Studies</a>
      <?php if ($isCaseStudy): ?>
        <a class="bg-brand-600 text-white px-6 py-2.5 rounded-lg font-bold hover:bg-brand-700 transition-all" href="<?php echo $contactLink; ?>">Contact me</a>
      <?php else: ?>
        <a class="inline-flex items-center justify-center font-semibold transition-all duration-300 bg-brand-blue text-white px-6 py-2.5 rounded-md shadow-sm hover:bg-blue-700" href="<?php echo $contactLink; ?>">Contact me</a>
      <?php endif; ?>
    </div>

    <!-- Mobile Menu Toggle -->
    <button
      class="md:hidden p-2 text-slate-600"
      aria-label="Toggle mobile menu"
      aria-expanded="false"
      aria-controls="mobile-menu"
    >
      <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
      </svg>
    </button>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-slate-100 px-6 py-4">
    <div class="flex flex-col space-y-4">
      <a class="text-sm font-medium transition-colors <?php echo $brandHoverClass; ?>" href="<?php echo $homeLink; ?>">Home</a>
      <a class="text-sm font-medium transition-colors <?php echo $brandHoverClass; ?>" href="<?php echo $bioLink; ?>">Bio</a>
      <a class="text-sm font-medium transition-colors <?php echo $brandHoverClass; ?>" href="<?php echo $caseStudiesLink; ?>">Case Studies</a>
      <?php if ($isCaseStudy): ?>
        <a class="bg-brand-600 text-white px-6 py-2.5 rounded-lg font-bold hover:bg-brand-700 transition-all text-center" href="<?php echo $contactLink; ?>">Contact me</a>
      <?php else: ?>
        <a class="inline-flex items-center justify-center font-semibold transition-all duration-300 bg-brand-blue text-white px-6 py-2.5 rounded-md shadow-sm hover:bg-blue-700 text-center" href="<?php echo $contactLink; ?>">Contact me</a>
      <?php endif; ?>
    </div>
  </div>
</nav>

<!-- ===== Main Content ===== -->
<main id="main-content" class="<?php echo $isCaseStudy ? 'pt-20' : ''; ?>">
