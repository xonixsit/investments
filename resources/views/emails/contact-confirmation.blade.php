<!DOCTYPE html>
<html><head><meta charset="utf-8"><style>
body{font-family:Inter,sans-serif;background:#fbf9f4;color:#1b1c19;margin:0;padding:0}
.wrap{max-width:600px;margin:40px auto;background:#fff;border-top:4px solid #775a19;padding:40px}
h1{font-family:Montserrat,sans-serif;font-size:26px;color:#041627;margin:0 0 12px}
p{color:#44474c;font-size:16px;line-height:1.6;margin:0 0 20px}
.info{background:#f5f3ee;padding:16px 20px;border-left:4px solid #775a19;margin:24px 0}
.info p{margin:4px 0;font-size:14px}
.btn{display:inline-block;background:#041627;color:#fff;padding:13px 28px;font-size:13px;font-weight:600;text-decoration:none;letter-spacing:0.05em;text-transform:uppercase;margin-right:12px}
.footer{margin-top:36px;font-size:12px;color:#74777d;border-top:1px solid #f0eee9;padding-top:16px}
</style></head>
<body>
<div class="wrap">
  <h1>Inquiry Received</h1>
  <p>Dear <strong>{{ $inquiry->name }}</strong>, thank you for reaching out to ETAXPLANNER PROPERTY CONNECT. We have received your inquiry and a senior advisor will contact you within 24 hours via your preferred method (<strong>{{ $inquiry->contact_method }}</strong>).</p>
  <div class="info">
    <p><strong>Your Inquiry Summary</strong></p>
    <p>Interest: {{ $inquiry->property_type ?: 'General' }}</p>
    <p>Budget: {{ $inquiry->budget ?: 'Not specified' }}</p>
  </div>
  <a class="btn" href="{{ config('app.url') }}/investments">Explore Opportunities</a>
  <a class="btn" href="{{ config('app.url') }}/guide" style="background:#fbf9f4;color:#041627;border:1px solid #041627;">Investor Guide</a>
  <p class="footer">ETAXPLANNER PROPERTY CONNECT &nbsp;·&nbsp; RERA #29482 &nbsp;·&nbsp; pro.investment@etaxplanner.com<br>Suite 1204, Platinum Tower, Business Bay, Dubai, UAE</p>
</div>
</body></html>
