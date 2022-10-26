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
            <span  style="background: #fff; padding: 1.6rem; display: block; width: 60%; margin: 0 auto;">
                <h1 style="color: #3d4852; font-size: 16px; font-weight: bold;"> Services details: </h1>
                <h4 style="color: #3d4852; font-size: 14px; font-weight: regular;"> The Age Is {{ $data->age }} !</h4>

                <strong>Services details: </strong><br>
<strong>Distance: </strong>{{ $data->distance }} <br>
<strong>Gender: </strong>{{ $data->gender }} <br>
<strong>Days: </strong>{{ $data->days }} <br>
<strong>Desired: </strong>{{ $data->desired }} <br>
<strong>License: </strong>{{ $data->license }} <br>
<strong>Candidate Status: </strong>{{ $data->candidate_status }} <br>
<strong>Experience: </strong>{{ $data->experience }} <br>
<strong>Other: </strong>{{ $data->other }} <br>
<strong>Services: </strong>{{ $data->services }} <br>
<strong>Specifieke Ervaring: </strong>{{ $data->specific_experience }} <br>

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