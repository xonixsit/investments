<!DOCTYPE html>
<html><head><meta charset="utf-8"><style>
body{font-family:Inter,sans-serif;background:#fbf9f4;color:#1b1c19;margin:0;padding:0}
.wrap{max-width:600px;margin:40px auto;background:#fff;border-top:4px solid #775a19;padding:40px}
h1{font-family:Montserrat,sans-serif;font-size:22px;color:#041627;margin:0 0 8px}
.sub{color:#44474c;font-size:14px;margin:0 0 28px}
table{width:100%;border-collapse:collapse}
td{padding:10px 0;border-bottom:1px solid #f0eee9;font-size:15px;vertical-align:top}
td:first-child{color:#74777d;width:38%}
.footer{margin-top:28px;font-size:12px;color:#74777d;border-top:1px solid #f0eee9;padding-top:16px}
</style></head>
<body>
<div class="wrap">
  <h1>New Contact Inquiry</h1>
  <p class="sub">A new investor inquiry was submitted via the Contact Us page.</p>
  <table>
    <tr><td>Name</td><td><strong>{{ $inquiry->name }}</strong></td></tr>
    <tr><td>Email</td><td>{{ $inquiry->email }}</td></tr>
    <tr><td>Phone</td><td>{{ $inquiry->phone ?: '—' }}</td></tr>
    <tr><td>Country</td><td>{{ $inquiry->country ?: '—' }}</td></tr>
    <tr><td>Preferred Contact</td><td>{{ $inquiry->contact_method }}</td></tr>
    <tr><td>Property Interest</td><td>{{ $inquiry->property_type ?: '—' }}</td></tr>
    <tr><td>Investment Budget</td><td>{{ $inquiry->budget ?: '—' }}</td></tr>
    <tr><td>Message</td><td>{{ $inquiry->message ?: '—' }}</td></tr>
  </table>
  <p class="footer">Submitted {{ $inquiry->created_at->format('d M Y, H:i') }} UTC &nbsp;·&nbsp; ETAXPLANNER PROPERTY CONNECT &nbsp;·&nbsp; RERA #29482</p>
</div>
</body></html>
