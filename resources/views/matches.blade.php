<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Jogos </title>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta name="x-apple-disable-message-reformatting">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="telephone=no" name="format-detection">

  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
    rel="stylesheet">
</head>

<body style="margin: 0; padding: 0; font-family: Montserrat,sans-serif; line-height: 1.2;">
  <table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
      <td style="padding: 15px 0 15px 0;">
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border-collapse: inherit;">
          <tr>
            <td style="background-color: #ffffff; border: 1px solid #e8eaed; border-radius: 12px 12px 12px 12px;">
              <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                  <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px; text-align: left;">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                      <tr>
                      <td style="color: #1fad9f; font-family: Arial, sans-serif; font-size: 25px; text-align:center;margin: 0 auto;">
                        </td>
                      </tr>
                      <tr>
                        <td style="color: #1fad9f; font-family: Arial, sans-serif; font-size: 25px;">
                        <div class="table-responsive">
                          <table class="table table-striped table-hover table-condensed">
                            <thead>
                              <tr>
                                <th><strong>Time Casa</strong></th>
                                <th><strong>Gols</strong></th>
                                <th><strong>X</strong></th>
                                <th><strong>Gols</strong></th>
                                <th><strong>Time Visitante</strong></th>
                              </tr>
                            </thead>
                            <tbody>
                          @foreach($matches as $key => $data)
                              <tr>    
                                <th>{{$data->house_team_id}}</th>
                                <th>{{$data->score_house_team}}</th>
                                <th><h3>X</h3></th>
                                <th>{{$data->score_guest_team}}</th>
                                <th>{{$data->guest_team_id}}</th>
                              </tr>
                          @endforeach
                        </td>
                      </tr>
                      </tbody>
                      </table>
                    </div>
                      <tr>
                      </tr>
              
                    </table>
                  </td>
                </tr>
               
              </table>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>

</html>