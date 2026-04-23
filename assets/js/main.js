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

      // Clear previous errors
      $('.form-error').remove();
      // Ocultar contenedores de mensajes y limpiar contenido para que no ocupen espacio
      $('[data-fs-success], [data-fs-error]').addClass('hidden').removeClass('block').removeAttr('data-fs-active').html('');

      // Get form values
      var name = $('#name').val().trim();
      var email = $('#email').val().trim();
      var message = $('#message').val().trim();
      var hCaptchaResponse = $form.find('[name="h-captcha-response"]').val();

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

      // Validate hCaptcha
      if (!hCaptchaResponse) {
        isValid = false;
        errors.push({ field: 'h-captcha', message: 'Please complete the captcha.' });
      }

      // Show errors or submit
      if (!isValid) {
        // Display errors
        $.each(errors, function (index, error) {
          var $field = error.field === 'h-captcha' ? $('.h-captcha') : $('#' + error.field);
          var $errorMsg = $('<div class="form-error text-red-500 text-sm mt-1"></div>')
            .text(error.message)
            .attr('role', 'alert');

          $field.after($errorMsg);
          $field.attr('aria-invalid', 'true');
        });

        // Focus first error field (skip h-captcha to avoid double-click issues)
        if (errors.length > 0) {
          var firstErrorField = errors[0].field;
          if (firstErrorField !== 'h-captcha') {
            $('#' + firstErrorField).focus();
          } else {
            // Scroll to captcha if it's the first error
            $('.h-captcha')[0].scrollIntoView({ behavior: 'smooth', block: 'center' });
          }
        }
        e.preventDefault();
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
