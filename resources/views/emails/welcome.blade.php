<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to {{ config('app.name') }}</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f4;
        }

        .container {
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            border-bottom: 3px solid #1F356E;
            background: linear-gradient(135deg, #1F356E 0%, #1F356E 100%);
            margin: -30px -30px 30px -30px;
            padding: 40px 30px;
            border-radius: 10px 10px 0 0;
            color: #FFEA96;
        }

        .header h1 {
            margin: 0;
            font-size: 32px;
        }



        .content {
            margin: 30px 0;
        }

        .info-box {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
        }

        .info-row {
            display: flex;
            padding: 8px 0;
            border-bottom: 1px solid #e0e0e0;
        }

        .info-row:last-child {
            border-bottom: none;
        }

        .info-label {
            font-weight: bold;
            width: 170px;
            color: #555;
        }

        .credentials-box {
            padding: 25px;
            border-radius: 8px;
            margin: 25px 0;
            text-align: center;
        }

        .credential-item {
            background: rgba(255, 255, 255, 0.2);
            padding: 15px;
            border-radius: 5px;
            margin: 10px 0;
            text-align: left;
        }

        .button {
            display: inline-block;
            padding: 15px 40px;
            background: #6d54ffff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin: 20px 0;
            font-weight: bold;
        }

        .alert-box {
            background: #fff3cd;
            border-left: 4px solid #ffc107;
            padding: 15px;
            margin: 20px 0;
            border-radius: 5px;
            color: #856404;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #e0e0e0;
            color: #777;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div class="container">

        <div class="header">
            <h1>Welcome! {{ $registration->name }}</h1>
            <p>TPA Registration Successful</p>
        </div>

        <div class="content">

            <p>
                Alhamdulillah, the TPA registration for
                <strong>{{ $registration->name }}</strong>
                has been successfully verified and your account has been created.
            </p>

            <div class="credentials-box">
                <h3>Your Login Information</h3>

                <div class="credential-item">
                    <small>Email / Username</small>
                    <div><strong>{{ $user->email }}</strong></div>
                </div>

                <div class="credential-item">
                    <small>Password</small>
                    <div><strong>{{ $plainpassword }}</strong></div>
                </div>
            </div>



            <h3> Registration Summary</h3>

            <h4>Child Information</h4>
            <div class="info-box">
                <div class="info-row">
                    <div class="info-label">Full Name</div>
                    <div>{{ $registration->name }}</div>
                </div>
                <div class="info-row">
                    <div class="info-label">Gender</div>
                    <div>{{ $registration->gender->label() }}</div>
                </div>
                <div class="info-row">
                    <div class="info-label">Date of Birth</div>
                    <div>{{ $registration->datebirth->format('d F Y') }}</div>
                </div>
                <div class="info-row">
                    <div class="info-label">Age</div>
                    <div>{{ $registration->datebirth->age }} years</div>
                </div>
            </div>

            <h4>Parent Information</h4>
            <div class="info-box">
                <div class="info-row">
                    <div class="info-label">Father's Name</div>
                    <div>{{ $registration->name_father }}</div>
                </div>
                <div class="info-row">
                    <div class="info-label">Mother's Name</div>
                    <div>{{ $registration->name_mother }}</div>
                </div>
                <div class="info-row">
                    <div class="info-label">WhatsApp</div>
                    <div>{{ $registration->whatsapp }}</div>
                </div>
                <div class="info-row">
                    <div class="info-label">Email</div>
                    <div>{{ $registration->email }}</div>
                </div>
            </div>

            <p>
                If you have any questions, feel free to contact us via WhatsApp or email.
            </p>

            <div style="display:flex; align-items:center; justify-content:center; gap:15px; flex-wrap:wrap;">


                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', config('tpasetting.indo_number')) }}?text={{ urlencode(
                    'Hello, my name is ' . $registration->name . '. I have already registered and would like to know the next steps.',
                ) }}"
                    target="_blank" class="button"
                    style="background:linear-gradient(135deg,#25D366 0%,#1ebe5d 100%); display:inline-flex; align-items:center; gap:10px;">
                    <!-- WhatsApp SVG -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32"
                        fill="white">
                        <path
                            d="M16.01 3C9.38 3 4 8.38 4 15.01c0 2.65.87 5.1 2.34 7.09L4 29l7.13-2.29A12.9 12.9 0 0 0 16.01 27C22.63 27 28 21.63 28 15.01 28 8.38 22.63 3 16.01 3z" />
                    </svg>

                    Contact via WhatsApp
                </a>
                <div style="text-align:center;">
                    <a href="{{ route('login') }}" class="button"> Login Now</a>
                </div>



            </div>
            <p>
                Barakallahu fiikum,<br>
                <strong>{{ config('app.name') }} Team</strong>
            </p>

        </div>

        <div class="footer"
            style="text-align:center; margin-top:30px; padding-top:20px; border-top:1px solid #e0e0e0; color:#777; font-size:14px;">

            <p><strong>{{ config('app.name') }}</strong></p>
            <p>This email was sent automatically. Please do not reply.</p>

            <!-- Contact Info -->
            <div style="margin:15px 0; display:inline-block; text-align:left;">

                <!-- Phone -->
                <div style="display:flex; align-items:center; gap:8px; margin-bottom:8px;">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="#4CAF50"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.01-.24c1.12.37 2.33.57 3.58.57a1 1 0 011 1V20a1 1 0 01-1 1C10.07 21 3 13.93 3 5a1 1 0 011-1h3.5a1 1 0 011 1c0 1.25.2 2.46.57 3.59a1 1 0 01-.25 1.01l-2.2 2.19z" />
                    </svg>
                    <span>{{ config('tpasetting.indo_number') }}</span>
                </div>

                <!-- Email -->
                <div style="display:flex; align-items:center; gap:8px; margin-bottom:8px;">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="#2196F3"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                    </svg>
                    <span>{{ config('mail.from.address') }}</span>
                </div>

                <!-- Instagram -->
                <div style="display:flex; align-items:center; gap:8px;">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="#E1306C"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M7 2C4.24 2 2 4.24 2 7v10c0 2.76 2.24 5 5 5h10c2.76 0 5-2.24 5-5V7c0-2.76-2.24-5-5-5H7zm10 2a3 3 0 013 3v10a3 3 0 01-3 3H7a3 3 0 01-3-3V7a3 3 0 013-3h10zm-5 3a5 5 0 100 10 5 5 0 000-10zm0 2a3 3 0 110 6 3 3 0 010-6zm4.5-.75a1.25 1.25 0 100 2.5 1.25 1.25 0 000-2.5z" />
                    </svg>
                    <a href="https://instagram.com/{{ config('tpasetting.instagram') }}" target="_blank"
                        style="color:#777; text-decoration:none;">
                        @ {{ config('tpasetting.instagram') }}
                    </a>
                </div>

            </div>

            <p style="margin-top:15px; font-size:12px; color:#999;">
                &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
            </p>
        </div>


    </div>
</body>

</html>
