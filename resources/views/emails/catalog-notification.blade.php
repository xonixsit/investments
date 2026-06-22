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
  <h1>New Private Catalog Request</h1>
  <p class="sub">A new request for the private investment catalog has been submitted.</p>
  <table>
    <tr><td>Email</td><td><strong>{{ $catalogRequest->email }}</strong></td></tr>
  </table>
  <p class="footer">Submitted {{ $catalogRequest->created_at->format('d M Y, H:i') }} UTC &nbsp;·&nbsp; ETAXPLANNER PROPERTY CONNECT</p>
</div>
</body></html>
