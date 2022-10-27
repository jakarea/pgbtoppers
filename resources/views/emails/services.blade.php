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
                <h1 style="color: #3d4852; font-size: 16px; font-weight: bold;"> Diensten details: </h1>
                <h4 style="color: #3d4852; font-size: 14px; font-weight: regular;"> The Age Is {{ $data->age }} !</h4>

                <strong>Diensten details: </strong><br>
<strong>Afstand: </strong>{{ $data->distance }} <br>
<strong>Geslacht: </strong>{{ $data->gender }} <br>
<strong>Dagen: </strong>{{ $data->days }} <br>
<strong>Gewenst: </strong>{{ $data->desired }} <br>
<strong>Licentie: </strong>{{ $data->license }} <br>
<strong>Kandidaatstatus: </strong>{{ $data->candidate_status }} <br>
<strong>Beleven: </strong>{{ $data->experience }} <br>
<strong>Ander: </strong>{{ $data->other }} <br>
<strong>Diensten: </strong>{{ $data->services }} <br>
<strong>Specifieke ervaring: </strong>{{ $data->specific_experience }} <br>

                <span style="display: block; margin-top: 30px; font-size: 14px; text-align: center;">Dank je</span>
            </span>
        </td>
    </tr>
    <tr>
        <td style="text-align: center; padding: 20px 0px;">
            &copy; Alle rechten voorbehouden door <a href="https://pgbtoppers.nl/">PPGToppers</a>
        </td>
    </tr>
</table>