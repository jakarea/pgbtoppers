
<table style="width: 100%; height: 100vh; margin: 0 auto; border: 1px solid #ccc; background-color: #edf2f7; font-family: Arial, Helvetica, sans-serif;">
    <tr>
        <th valign="top">
            <a href="#" style="display: block; margin-bottom: 30px;">
                <img src="https://pgbtoppers.nl/images/logo.png" alt="Logo" style="width: 200px; margin-top: 20px;">
            </a>
        </th>
    </tr>
    <tr>
        <td valign="top">
            <span  style="background: #fff; padding: 1.2rem; display: block; width: 80%; margin: 0 auto;">
                <h1 style="color: #3d4852; font-size: 18px; font-weight: bold;">Hey, It's me {{ $data->name }} !</h1> 
 
                <p>Email Address: {{ $data->email }}</p>
                <p>{{ $data->looking_for ? $data->looking_for: ''  }} </p>
                <span style="display: block; margin-top: 30px; font-size: 14px; text-align: center;">Thank you</span>
            </span>
        </td>
    </tr>
    <tr>
        <td style="text-align: center; padding: 20px 0px;">
            &copy; All Right Reserved by <a href="https://pgbtoppers.nl/">PPGToppers</a>
        </td>
    </tr>
</table>