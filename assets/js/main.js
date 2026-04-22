/**
 * FILE INDEX
 * ----------
 * 1. Mobile Navigation Toggle
 * 2. Smooth Scroll for Anchor Links
 * 3. Contact Form Validation & Submission
 * 4. Scroll Animations (Fade In Up)
 * 5. Utility Functions
 */

(function ($) {
  'use strict';

  // ===== 1. Mobile Navigation Toggle =====
  function initMobileNav() {
    var $mobileBtn = $('.mobile-menu-btn');
    var $mobileMenu = $('.mobile-menu');

    $mobileBtn.on('click', function (e) {
      e.preventDefault();
      $mobileMenu.toggleClass('is-open');

      // Toggle aria-expanded for accessibility
      var isExpanded = $mobileMenu.hasClass('is-open');
      $(this).attr('aria-expanded', isExpanded);
    });

    // Close mobile menu when clicking on a link
    $mobileMenu.find('a').on('click', function () {
      $mobileMenu.removeClass('is-open');
      $mobileBtn.attr('aria-expanded', 'false');
    });
  }

  // ===== 2. Smooth Scroll for Anchor Links =====
  function initSmoothScroll() {
    $('a[href^="#"]').on('click', function (e) {
      var target = $(this.getAttribute('href'));

      if (target.length) {
        e.preventDefault();

        // Offset for fixed navigation
        var navHeight = $('nav').outerHeight() || 80;
        var targetPosition = target.offset().top - navHeight;

        $('html, body').animate({
          scrollTop: targetPosition
        }, 600);
      }
    });
  }

  // ===== 3. Contact Form Validation & Submission =====
  function initContactForm() {
    var $form = $('#contact-form');

    if (!$form.length) return;

    $form.on('submit', function (e) {
      e.preventDefault();

      // Clear previous errors
      $('.form-error').remove();
      $('.form-success').remove();

      // Get form values
      var name = $('#name').val().trim();
      var email = $('#email').val().trim();
      var message = $('#message').val().trim();

      var isValid = true;
      var errors = [];

      // Validate name
      if (!name) {
        isValid = false;
        errors.push({ field: 'name', message: 'Please enter your name.' });
      }

      // Validate email
      if (!email) {
        isValid = false;
        errors.push({ field: 'email', message: 'Please enter your email.' });
      } else if (!isValidEmail(email)) {
        isValid = false;
        errors.push({ field: 'email', message: 'Please enter a valid email address.' });
      }

      // Validate message
      if (!message) {
        isValid = false;
        errors.push({ field: 'message', message: 'Please enter a message.' });
      }

      // Show errors or submit
      if (!isValid) {
        // Display errors
        $.each(errors, function (index, error) {
          var $field = $('#' + error.field);
          var $errorMsg = $('<div class="form-error text-red-500 text-sm mt-1"></div>')
            .text(error.message)
            .attr('role', 'alert');

          $field.after($errorMsg);
          $field.attr('aria-invalid', 'true');
        });

        // Focus first error field
        $('#' + errors[0].field).focus();
      } else {
        // Form is valid - simulate submission
        var $submitBtn = $form.find('button[type="submit"]');
        var originalText = $submitBtn.html();

        $submitBtn.prop('disabled', true).html('Sending...');

        // Simulate AJAX submission
        setTimeout(function () {
          // Show success message
          var $successMsg = $('<div class="form-success col-span-1 md:col-span-2 bg-green-50 text-green-700 p-4 rounded-lg mt-4 text-center" role="status" aria-live="polite"></div>')
            .html('<strong>Thank you!</strong> Your message has been sent successfully.');

          $form.append($successMsg);
          $form[0].reset();
          $submitBtn.prop('disabled', false).html(originalText);

          // Focus success message for screen readers
          $successMsg.attr('tabindex', '-1').focus();
        }, 1000);
      }
    });
  }

  // ===== 4. Scroll Animations (Fade In Up) =====
  function initScrollAnimations() {
    var $animatedElements = $('.fade-in-up');

    // Intersection Observer for triggering animations
    if ('IntersectionObserver' in window) {
      var observer = new IntersectionObserver(function (entries) {
        $.each(entries, function (index, entry) {
          if (entry.isIntersecting) {
            $(entry.target).addClass('is-visible');
            observer.unobserve(entry.target);
          }
        });
      }, {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
      });

      $animatedElements.each(function () {
        // Initially hide elements
        $(this).css({ opacity: 0, transform: 'translateY(20px)' });
        observer.observe(this);
      });
    } else {
      // Fallback: show all elements
      $animatedElements.addClass('is-visible');
    }
  }

  // ===== 5. Utility Functions =====
  function isValidEmail(email) {
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
  }

  // Add CSS for animated elements when visible
  function addAnimationStyles() {
    $('<style>')
      .prop('type', 'text/css')
      .html('.fade-in-up.is-visible { opacity: 1 !important; transform: translateY(0) !important; transition: opacity 0.6s ease, transform 0.6s ease; }')
      .appendTo('head');
  }

  // ===== Initialize on Document Ready =====
  $(document).ready(function () {
    initMobileNav();
    initSmoothScroll();
    initContactForm();
    initScrollAnimations();
    addAnimationStyles();
  });

})(jQuery);
