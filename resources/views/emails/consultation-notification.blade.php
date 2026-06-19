<!DOCTYPE html>
<html>
<head><meta charset="utf-8"><style>
body { font-family: Inter, sans-serif; background:#fbf9f4; color:#1b1c19; margin:0; padding:0; }
.wrap { max-width:600px; margin:40px auto; background:#fff; border-top:4px solid #775a19; padding:40px; }
h1 { font-family:Montserrat,sans-serif; font-size:24px; color:#041627; margin:0 0 8px; }
.sub { color:#44474c; font-size:14px; margin:0 0 32px; }
table { width:100%; border-collapse:collapse; }
td { padding:10px 0; border-bottom:1px solid #f0eee9; font-size:15px; }
td:first-child { color:#74777d; width:40%; }
.footer { margin-top:32px; font-size:12px; color:#74777d; }
</style></head>
<body>
<div class="wrap">
  <h1>New Consultation Request</h1>
  <p class="sub">A new investor inquiry was submitted via the website.</p>
  <table>
    <tr><td>Name</td><td><strong>{{ $consultation->name }}</strong></td></tr>
    <tr><td>Email</td><td>{{ $consultation->email }}</td></tr>
    <tr><td>Phone</td><td>{{ $consultation->dial_code }} {{ $consultation->phone }}</td></tr>
    <tr><td>Country</td><td>{{ $consultation->country }}</td></tr>
    <tr><td>Preferred Contact</td><td>{{ $consultation->contact_method }}</td></tr>
    <tr><td>Property Interest</td><td>{{ $consultation->property_interest }}</td></tr>
    <tr><td>Investment Budget</td><td>{{ $consultation->budget_label }}</td></tr>
    <tr><td>Message</td><td>{{ $consultation->message ?: '—' }}</td></tr>
  </table>
  <p class="footer">Submitted at {{ $consultation->created_at->format('d M Y, H:i') }} UTC &nbsp;|&nbsp; ETAXPLANNER PROPERTY CONNECT &nbsp;|&nbsp; RERA #29482</p>
</div>
</body>
</html>
