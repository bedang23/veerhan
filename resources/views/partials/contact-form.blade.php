<section class="contact" id="contact">
  <div class="contact-inner">

    <!-- Info panel (animates from left) -->
    <div class="contact-info" id="svcContactInfo-{{ $formId ?? 'default' }}">
      <div class="section-label">Contact Us</div>
      <h2 class="section-title">Ready to <span>scale</span> your business?</h2>
      <p class="section-sub">Fill out the form and we'll get back to you within 24 hours — usually much sooner.</p>

      <div class="contact-detail">
        <div class="contact-detail-icon">📧</div>
        <div>
          <span>Email Us</span>
          <a href="mailto:contact@veerhan.com">contact@veerhan.com</a>
        </div>
      </div>
      <div class="contact-detail">
        <div class="contact-detail-icon">📱</div>
        <div>
          <span>Call or WhatsApp</span>
          <a href="tel:+918719036405">+91 87190 36405</a>
        </div>
      </div>
      <div class="contact-detail">
        <div class="contact-detail-icon">⚡</div>
        <div>
          <span>Response Time</span>
          <a href="{{ route('contact') }}">Within 24 hours guaranteed</a>
        </div>
      </div>
    </div>

    <!-- Form box (animates from right via existing .contact-form {opacity:0} CSS) -->
    <div class="contact-form" id="svcContactForm-{{ $formId ?? 'default' }}">

      <!-- SUCCESS STATE -->
      <div class="svc-form-success" id="svcFormSuccess-{{ $formId ?? 'default' }}" style="display:none;">
        <div class="svc-success-icon">🎉</div>
        <h3>Message Sent!</h3>
        <p>Thank you for reaching out. We'll review your details and get back to you within 24 hours.</p>
        <p class="svc-success-note">Check your inbox — we'll follow up shortly.</p>
      </div>

      <!-- FORM -->
      <form id="svcForm-{{ $formId ?? 'default' }}" novalidate>
        @csrf
        <input type="hidden" name="service" value="{{ $serviceName ?? 'General' }}">
        <input type="hidden" name="page_source" value="{{ $pageSource ?? ($serviceName ?? 'Service Page') }}">

        <div class="form-grid">
          <div class="form-row">
            <label>Full Name *</label>
            <input type="text" name="first_name" placeholder="John Doe" required>
          </div>
          <div class="form-row">
            <label>Email Address *</label>
            <input type="email" name="email" placeholder="john@example.com" required>
          </div>
        </div>
        <div class="form-row">
          <label>Phone Number</label>
          <input type="tel" name="phone" placeholder="+91 XXXX XXXX">
        </div>
        <div class="form-row">
          <label>Message *</label>
          <textarea name="message" placeholder="Tell us about your project..." required></textarea>
        </div>
        <button type="submit" class="btn-form" id="svcSubmitBtn-{{ $formId ?? 'default' }}">
          Send Message →
        </button>
      </form>
    </div>

  </div>
</section>

<style>
  /* Section padding (service pages don't have generic section padding for desktop) */
  #contact.contact { padding: 100px 48px; }

  /* Success state inside the form box */
  .svc-form-success {
    text-align: center;
    padding: 40px 16px;
    animation: svcFadeUp 0.55s ease both;
  }
  @keyframes svcFadeUp {
    from { opacity: 0; transform: translateY(20px); }
    to   { opacity: 1; transform: translateY(0); }
  }
  .svc-success-icon { font-size: 48px; margin-bottom: 20px; display: block; }
  .svc-form-success h3 {
    font-family: var(--font-display, 'Syne', sans-serif);
    font-size: 26px; font-weight: 800; color: white; margin-bottom: 12px;
  }
  .svc-form-success p {
    font-size: 15px; color: rgba(255,255,255,0.55);
    line-height: 1.7; max-width: 320px; margin: 0 auto;
  }
  .svc-success-note { margin-top: 10px !important; font-size: 13px !important; opacity: 0.4 !important; }

  /* Mobile */
  @media (max-width: 768px) {
    #contact.contact { padding: 60px 24px; }
  }
</style>

<script>
(function () {
  var formId   = '{{ $formId ?? "default" }}';
  var form     = document.getElementById('svcForm-' + formId);
  var box      = document.getElementById('svcContactForm-' + formId);
  var successEl = document.getElementById('svcFormSuccess-' + formId);
  var submitBtn = document.getElementById('svcSubmitBtn-' + formId);

  if (!form) return;

  form.addEventListener('submit', function (e) {
    e.preventDefault();

    var data = Object.fromEntries(new FormData(this).entries());

    submitBtn.textContent = 'Sending...';
    submitBtn.disabled = true;
    submitBtn.style.opacity = '0.65';

    fetch('{{ route('contact.submit') }}', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
      },
      body: JSON.stringify(data)
    })
    .then(function (r) { return r.json(); })
    .then(function (res) {
      if (res.success) {
        form.style.display = 'none';
        successEl.style.display = 'block';
      } else {
        submitBtn.textContent = 'Error — Try Again';
        submitBtn.disabled = false;
        submitBtn.style.opacity = '1';
      }
    })
    .catch(function () {
      submitBtn.textContent = 'Error — Try Again';
      submitBtn.disabled = false;
      submitBtn.style.opacity = '1';
    });
  });

  /* ====== SCROLL ANIMATIONS ====== */
  /* Runs in DOMContentLoaded — gsap.registerPlugin(ScrollTrigger)
     is called by the service page scripts which load after this partial. */
  document.addEventListener('DOMContentLoaded', function () {
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;

    var contactSection = document.getElementById('contact');
    if (!contactSection) return;

    var infoEl = document.getElementById('svcContactInfo-' + formId);
    var boxEl  = document.getElementById('svcContactForm-' + formId);

    // Info panel: slide from left
    if (infoEl) {
      gsap.from(infoEl, {
        opacity: 0, x: -40, duration: 1, ease: 'power3.out',
        scrollTrigger: {
          trigger: contactSection, start: 'top 78%',
          toggleActions: 'play none none none'
        }
      });
      // Stagger contact-detail items
      gsap.from(infoEl.querySelectorAll('.contact-detail'), {
        opacity: 0, y: 16, duration: 0.6, stagger: 0.1, ease: 'power3.out',
        scrollTrigger: {
          trigger: contactSection, start: 'top 70%',
          toggleActions: 'play none none none'
        }
      });
    }

    // Form box: the CSS already sets opacity:0 transform:translateX(40px)
    // Just animate it to visible
    if (boxEl) {
      gsap.to(boxEl, {
        opacity: 1, x: 0, duration: 1, delay: 0.12, ease: 'power3.out',
        scrollTrigger: {
          trigger: contactSection, start: 'top 78%',
          toggleActions: 'play none none none'
        }
      });
    }

    // Other-services cards: stagger in (they appear just before this section)
    var svcCards = document.querySelectorAll('.svc-nav-card');
    if (svcCards.length) {
      gsap.from(svcCards, {
        opacity: 0, y: 24, duration: 0.6, stagger: 0.08, ease: 'power3.out',
        scrollTrigger: {
          trigger: '.other-services', start: 'top 82%',
          toggleActions: 'play none none none'
        }
      });
    }

    // CTA strip: slide up
    var ctaStrip = document.querySelector('.cta-strip');
    if (ctaStrip) {
      gsap.from(ctaStrip, {
        opacity: 0, y: 30, duration: 0.8, ease: 'power3.out',
        scrollTrigger: {
          trigger: ctaStrip, start: 'top 88%',
          toggleActions: 'play none none none'
        }
      });
    }
  });
})();
</script>
