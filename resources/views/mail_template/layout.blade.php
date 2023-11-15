<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Email From Spectro.id</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px;">

  <table border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #f4f4f4;">
    <tr>
      <td align="center">
        <img src="{{ asset('assets/media/spectro.png') }}" alt="Spectro.id Logo" style="max-width: 100px;">
      </td>
    </tr>
  </table>

  <table border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #fff; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin-top: 20px;">
    <tr>
        @yield('email')
    </tr>
  </table>

  <div style="text-align: center; margin-top: 20px; color: #999;">Spectro.id</div>

</body>
</html>


