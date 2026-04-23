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
    // Use event delegation for dynamically loaded components
    $(document).on('click', '[aria-label="Toggle mobile menu"]', function (e) {
      e.preventDefault();
      var $mobileMenu = $('#mobile-menu');
      $mobileMenu.toggleClass('hidden').toggleClass('block');

      // Toggle aria-expanded for accessibility
      var isExpanded = $mobileMenu.hasClass('block');
      $(this).attr('aria-expanded', isExpanded);
    });

    // Close mobile menu when clicking on a link
    $(document).on('click', '#mobile-menu a', function () {
      $('#mobile-menu').addClass('hidden').removeClass('block');
      $('[aria-label="Toggle mobile menu"]').attr('aria-expanded', 'false');
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

  // ===== 3.2. Dynamic Component Loading =====
  function initDynamicComponents() {
    const headerContainer = document.getElementById('header-container');
    const footerContainer = document.getElementById('footer-container');

    if (headerContainer) {
      const isCaseStudy = window.location.pathname.includes('case-study');
      const headerUrl = isCaseStudy ? 'components/header-casestudy.html' : 'components/header.html';

      fetch(headerUrl)
        .then(response => response.text())
        .then(html => { headerContainer.innerHTML = html; })
        .catch(err => console.error('Error loading header:', err));
    }

    if (footerContainer) {
      fetch('components/footer.html')
        .then(response => response.text())
        .then(html => { footerContainer.innerHTML = html; })
        .catch(err => console.error('Error loading footer:', err));
    }
  }

  // Store Formspree instance to avoid re-initialization
  var formspreeInstance = null;

  // ===== 3.1. Formspree Submission Handling =====
  function initFormspreeSubmission() {
    // Initialize Formspree global function if not already present
    window.formspree = window.formspree || function () { (formspree.q = formspree.q || []).push(arguments); };

    formspree('initForm', {
      formElement: '#contact-form',
      formId: 'xdayponk', // Ensure this matches your form's data-fs-form-id
      onSuccess: function (data) {
        const $successMsg = $('[data-fs-success]');
        if ($successMsg.length) {
          $successMsg.html('Thank you for your message! I will get back to you soon.')
            .removeClass('hidden')
            .addClass('block');

          // Opcional: Ocultar el mensaje después de unos segundos
          setTimeout(() => {
            $successMsg.addClass('hidden').removeClass('block').removeAttr('data-fs-active').html('');
          }, 5000); // Oculta después de 5 segundos
        }
        // Reinicia el formulario
        $('#contact-form')[0].reset();
        // Importante: Retorna false para evitar que Formspree muestre su mensaje de éxito predeterminado
        return false;
      },
      onError: function (data) {
        const $errorMsg = $('[data-fs-error]');
        if ($errorMsg.length) {
          // Personaliza tu mensaje de error aquí. Puedes usar 'data.errors' para detalles.
          let errorMessage = 'There was an error sending your message. Please try again. Or write me to patriciosole.web@gmail.com';
          if (data && data.errors && data.errors.length > 0) {
            // Filter out hCaptcha errors if they are handled by client-side validation already
            const nonCaptchaErrors = data.errors.filter(err => err.field !== 'h-captcha-response');
            if (nonCaptchaErrors.length > 0) {
              errorMessage = nonCaptchaErrors.map(err => err.message).join('<br>');
            }
          }
          $errorMsg.html(errorMessage).removeClass('hidden').addClass('block');
        }
        // Importante: Retorna false para evitar que Formspree muestre su mensaje de error predeterminado
        return false;
      }
    });
  }

  // ===== 4. Unified Reveal Animations =====
  function initObservers() {
    const observerOptions = {
      root: null,
      rootMargin: '0px 0px -50px 0px',
      threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          // Handles both .reveal and .fade-in-up classes
          const className = entry.target.classList.contains('reveal') ? 'active' : 'is-visible';
          entry.target.classList.add(className);
          observer.unobserve(entry.target);
        }
      });
    }, observerOptions);

    // Select all elements that need scroll animations
    const elements = document.querySelectorAll('.reveal, .fade-in-up');
    elements.forEach(el => observer.observe(el));
  }

  // ===== 5. Utility Functions =====
  function isValidEmail(email) {
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
  }
  // ===== Initialize on Document Ready =====
  $(document).ready(function () {
    initDynamicComponents();
    initMobileNav();
    initSmoothScroll();
    initContactForm();
    initFormspreeSubmission(); // Initialize Formspree submission
    initObservers(); // Initialize all scroll observers
  });

})(jQuery);
