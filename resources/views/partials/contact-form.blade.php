<section class="contact" id="contact">
  <div class="contact-inner">
    <div class="contact-info">
      <div class="section-label">Contact Us</div>
      <h2 class="section-title">Ready to <span>scale</span> your business?</h2>
      <p class="section-sub">Fill out the form and we'll get back to you within 24 hours.</p>

      <div class="contact-detail">
        <div class="contact-detail-icon">📧</div>
        <div>
          <span>Email Us</span>
          <a href="mailto:hello@veerhan.com">hello@veerhan.com</a>
        </div>
      </div>
      <div class="contact-detail">
        <div class="contact-detail-icon">📱</div>
        <div>
          <span>Call or WhatsApp</span>
          <a href="tel:+918719036405">+91 87190 36405</a>
        </div>
      </div>
    </div>

    <form class="contact-form" id="serviceContactForm">
      @csrf
      <input type="hidden" name="service" value="{{ $serviceName ?? 'General' }}">
      
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

      <button type="submit" class="btn-form" id="serviceSubmitBtn">Send Message →</button>
      <div id="serviceFormStatus" style="margin-top: 15px; font-size: 14px; display: none;"></div>
    </form>
  </div>
</section>

<script>
document.getElementById('serviceContactForm')?.addEventListener('submit', function(e) {
  e.preventDefault();
  const btn = document.getElementById('serviceSubmitBtn');
  const status = document.getElementById('serviceFormStatus');
  const formData = new FormData(this);
  const data = Object.fromEntries(formData.entries());

  btn.textContent = 'Sending...';
  btn.disabled = true;

  fetch('{{ route('contact.submit') }}', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      'X-CSRF-TOKEN': '{{ csrf_token() }}'
    },
    body: JSON.stringify(data)
  })
  .then(r => r.json())
  .then(res => {
    if (res.success) {
      status.textContent = 'Message sent successfully! We will contact you soon.';
      status.style.color = '#22c55e';
      status.style.display = 'block';
      this.reset();
    } else {
      throw new Error();
    }
  })
  .catch(() => {
    status.textContent = 'Something went wrong. Please try again.';
    status.style.color = '#ef4444';
    status.style.display = 'block';
  })
  .finally(() => {
    btn.textContent = 'Send Message →';
    btn.disabled = false;
  });
});
</script>
