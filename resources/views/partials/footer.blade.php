@php
  $variant = $footerVariant ?? 'service';
@endphp

<footer>
  <div class="footer-inner">
    <div class="footer-brand">
      <div class="nav-logo-text"> <img style="max-width:50px;" src="{{ asset('logo.png') }}" alt="Veerhan Logo" class="nav-logo-img"> </div>
      @if($variant === 'home')
      <p>Built with Courage. Ranked with Purpose. Your complete digital partner for web design, SEO, marketing, and security — serving India and global markets.</p>
      <div class="footer-social" style="margin-top: 20px;">
        <a href="#" class="social-btn">in</a>
        <a href="#" class="social-btn">𝕏</a>
        <a href="#" class="social-btn">ig</a>
        <a href="#" class="social-btn">yt</a>
      </div>
      @else
      <p>Built with Courage. Ranked with Purpose. Your complete digital partner for web design, SEO, marketing, and security — serving India, USA, and Dubai.</p>
      <div class="footer-social">
        <a href="#" class="social-btn" aria-label="LinkedIn">in</a>
        <a href="#" class="social-btn" aria-label="Twitter / X">𝕏</a>
        <a href="#" class="social-btn" aria-label="Instagram">ig</a>
        <a href="#" class="social-btn" aria-label="YouTube">yt</a>
      </div>
      @endif
    </div>
    <div class="footer-col">
      <h4>Services</h4>
      <ul>
        <li><a href="{{ route('services.web-development') }}">Web Design & Development</a></li>
        <li><a href="{{ route('services.seo-digital') }}">SEO & Digital Marketing</a></li>
        <li><a href="{{ route('services.web-security') }}">Web Security & Protection</a></li>
        <li><a href="{{ route('services.ui-ux') }}">UI/UX Design & Branding</a></li>
        <li><a href="{{ route('services.ai') }}">AI Implementation</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h4>Free Resources</h4>
      <ul>
        <li><a href="#">Free SEO Audit</a></li>
        <li><a href="#">Website Consultancy</a></li>
        <li><a href="#">Speed Analysis</a></li>
        <li><a href="#">Competitor Report</a></li>
        <li><a href="#">Security Scan</a></li>
        <li><a href="#">Digital Scorecard</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h4>Company</h4>
      <ul>
        @if($variant === 'home')
        <li><a href="#">About Veerhan</a></li>
        <li><a href="#">Our Work</a></li>
        <li><a href="#">Blog & Insights</a></li>
        <li><a href="#">Careers</a></li>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Terms of Service</a></li>
        @else
        <li><a href="/about">About Veerhan</a></li>
        <li><a href="/work">Our Work</a></li>
        <li><a href="/blog">Blog & Insights</a></li>
        <li><a href="/careers">Careers</a></li>
        <li><a href="/privacy-policy">Privacy Policy</a></li>
        <li><a href="/terms">Terms of Service</a></li>
        @endif
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    <p>© 2025 <span>Veerhan.com</span>. All rights reserved. Made with ❤️ in India.</p>
    @if($variant === 'home')
    <p style="font-size: 12px; color: rgba(255,255,255,0.25);">contact@veerhan.com · +91 87190 36405</p>
    @else
    <p style="font-size: 12px; color: rgba(255,255,255,0.25);">contact@veerhanc.com · +91 87190 36405</p>
    @endif
  </div>
</footer>
