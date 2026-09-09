<!DOCTYPE html>
<html>
<head><meta charset="utf-8"><style>
body { font-family: Inter, sans-serif; background:#fbf9f4; color:#1b1c19; margin:0; padding:0; }
.wrap { max-width:600px; margin:40px auto; background:#fff; border-top:4px solid #775a19; padding:40px; }
.icon { width:56px; height:56px; background:#f0eee9; border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 0 24px; }
h1 { font-family:Montserrat,sans-serif; font-size:28px; color:#041627; margin:0 0 12px; }
p { color:#44474c; font-size:16px; line-height:1.6; margin:0 0 24px; }
.steps { display:flex; gap:16px; margin:32px 0; }
.step { flex:1; border-top:2px solid #e4e2dd; padding-top:12px; }
.step-num { font-size:12px; color:#c4c6cd; font-weight:600; margin:0 0 6px; }
.step-title { font-size:12px; font-weight:600; color:#041627; text-transform:uppercase; letter-spacing:0.05em; margin:0 0 6px; }
.step-desc { font-size:13px; color:#44474c; margin:0; }
.inbox-box { background:#f5f3ee; border-left:4px solid #775a19; padding:16px 20px; margin:24px 0; }
.inbox-box p { margin:4px 0; font-size:14px; }
.btn { display:inline-block; background:#041627; color:#fff; padding:14px 32px; font-size:13px; font-weight:600; text-decoration:none; letter-spacing:0.05em; text-transform:uppercase; margin-right:12px; }
.btn-ghost { display:inline-block; border:1px solid #041627; color:#041627; padding:14px 32px; font-size:13px; font-weight:600; text-decoration:none; letter-spacing:0.05em; text-transform:uppercase; }
.footer { margin-top:40px; font-size:12px; color:#74777d; border-top:1px solid #f0eee9; padding-top:16px; }
</style></head>
<body>
<div class="wrap">
  <div class="icon">✓</div>
  <h1>Request Received</h1>
  <p>Thank you, <strong>{{ $consultation->name }}</strong>. Your consultation request has been received. Our team of senior investment advisors is reviewing your profile.</p>

  <div class="steps">
    <div class="step">
      <p class="step-num">01 ————</p>
      <p class="step-title">Profile Review</p>
      <p class="step-desc">We analyze your investment goals and budget to align with the current market landscape.</p>
    </div>
    <div class="step">
      <p class="step-num">02 ————</p>
      <p class="step-title">Matching</p>
      <p class="step-desc">We curate a bespoke shortlist of developer-direct opportunities exclusive to our network.</p>
    </div>
    <div class="step">
      <p class="step-num">03 ————</p>
      <p class="step-title">Contact</p>
      <p class="step-desc">An advisor will reach you within 24 hours to schedule your virtual presentation.</p>
    </div>
  </div>

  <div class="inbox-box">
    <p><strong>✉ Check Your Inbox</strong></p>
    <p>A confirmation email has been sent to <strong>{{ $consultation->email }}</strong>. Please check your spam folder if you don't see it within 5 minutes.</p>
  </div>

  <a class="btn" href="{{ config('app.url') }}/guide">Explore Investor Guide</a>
  <a class="btn-ghost" href="{{ config('app.url') }}/investments">Return to Opportunities</a>

  <p class="footer">ETAXPLANNER PROPERTY CONNECT &nbsp;|&nbsp; RERA Registration #29482 &nbsp;|&nbsp; pro.investment@etaxplanner.com<br>
  Level 12, Emirates Towers, Sheikh Zayed Road, Dubai, UAE</p>
</div>
</body>
</html>
