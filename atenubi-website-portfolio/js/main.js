document.addEventListener('DOMContentLoaded', () => {

  /* ---------- Generic form-status helper ---------- */
  function showStatus(el, text, ok) {
    el.textContent = text;
    el.classList.remove('ok', 'error');
    el.classList.add('show', ok ? 'ok' : 'error');
  }

  function setFieldError(input, message) {
    input.classList.toggle('is-invalid', Boolean(message));
    let feedback = input.parentElement.querySelector('.invalid-feedback');
    if (!feedback) {
      feedback = document.createElement('div');
      feedback.className = 'invalid-feedback';
      input.insertAdjacentElement('afterend', feedback);
    }
    feedback.textContent = message || '';
  }

  /* ---------- Contact form ---------- */
  const contactForm = document.getElementById('contactForm');
  if (contactForm) {
    const status = document.getElementById('contactStatus');

    contactForm.addEventListener('submit', async (e) => {
      e.preventDefault();

      const name = document.getElementById('cName');
      const email = document.getElementById('cEmail');
      const message = document.getElementById('cMessage');
      const subject = document.getElementById('cSubject');

      [name, email, message].forEach(el => setFieldError(el, ''));

      let valid = true;
      if (!name.value.trim()) { setFieldError(name, 'Please enter your name.'); valid = false; }
      if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value.trim())) { setFieldError(email, 'Please enter a valid email.'); valid = false; }
      if (message.value.trim().length < 10) { setFieldError(message, 'Say a little more — at least 10 characters.'); valid = false; }

      if (!valid) return;

      const submitBtn = contactForm.querySelector('button[type="submit"]');
      const originalLabel = submitBtn.textContent;
      submitBtn.disabled = true;
      submitBtn.textContent = 'Sending…';

      try {
        const res = await fetch('php/contact-handler.php', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify({
            name: name.value.trim(),
            email: email.value.trim(),
            subject: subject.value,
            message: message.value.trim(),
          }),
        });
        const result = await res.json();

        if (result.success) {
          showStatus(status, result.message, true);
          contactForm.reset();
        } else {
          showStatus(status, result.message || 'Something went wrong.', false);
          if (result.errors) {
            if (result.errors.name) setFieldError(name, result.errors.name);
            if (result.errors.email) setFieldError(email, result.errors.email);
            if (result.errors.message) setFieldError(message, result.errors.message);
          }
        }
      } catch (err) {
        showStatus(status, 'Could not reach the server. Is PHP running?', false);
      } finally {
        submitBtn.disabled = false;
        submitBtn.textContent = originalLabel;
      }
    });
  }

  /* ---------- Newsletter form ---------- */
  const newsletterForm = document.getElementById('newsletterForm');
  if (newsletterForm) {
    const status = document.getElementById('newsletterStatus');

    newsletterForm.addEventListener('submit', async (e) => {
      e.preventDefault();
      const email = document.getElementById('newsletterEmail');

      if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value.trim())) {
        showStatus(status, 'Please enter a valid email address.', false);
        return;
      }

      const submitBtn = newsletterForm.querySelector('button[type="submit"]');
      const originalLabel = submitBtn.textContent;
      submitBtn.disabled = true;
      submitBtn.textContent = 'Subscribing…';

      try {
        const res = await fetch('php/newsletter-handler.php', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify({ email: email.value.trim() }),
        });
        const result = await res.json();
        showStatus(status, result.message, result.success);
        if (result.success) newsletterForm.reset();
      } catch (err) {
        showStatus(status, 'Could not reach the server. Is PHP running?', false);
      } finally {
        submitBtn.disabled = false;
        submitBtn.textContent = originalLabel;
      }
    });
  }

  /* ---------- Close mobile nav after clicking a link ---------- */
  const navCollapse = document.getElementById('mainNav');
  if (navCollapse) {
    navCollapse.querySelectorAll('a.nav-link').forEach(link => {
      link.addEventListener('click', () => {
        const bsCollapse = bootstrap.Collapse.getInstance(navCollapse);
        if (bsCollapse && navCollapse.classList.contains('show')) bsCollapse.hide();
      });
    });
  }

});
