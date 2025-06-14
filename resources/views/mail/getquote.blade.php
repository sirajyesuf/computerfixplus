<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quote Request</title>
</head>
<body style="margin: 0; padding: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f8fafc; line-height: 1.6;">
    
    <!-- Main Container -->
    <table width="100%" cellpadding="0" cellspacing="0" style="background-color: #f8fafc; padding: 20px 0;">
        <tr>
            <td align="center">
                
                <!-- Email Content Container -->
                <table width="600" cellpadding="0" cellspacing="0" style="background-color: #ffffff; border-radius: 12px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); overflow: hidden; max-width: 600px; width: 100%;">
                    
                    <!-- Header -->
                    <tr>
                        <td style="background: linear-gradient(135deg, #0b5dc0 0%, #1e40af 100%); padding: 40px 30px; text-align: center;">
                            <h1 style="color: #ffffff; margin: 0; font-size: 28px; font-weight: 700; text-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                                📧 New Quote Request
                            </h1>
                            <p style="color: #e2e8f0; margin: 10px 0 0 0; font-size: 16px; font-weight: 300;">
                                ComputerFixPlus Customer Inquiry
                            </p>
                        </td>
                    </tr>
                    
                    <!-- Content -->
                    <tr>
                        <td style="padding: 40px 30px;">
                            
                            <!-- Customer Info Card -->
                            <div style="background-color: #f8fafc; border-radius: 8px; padding: 25px; margin-bottom: 25px; border-left: 4px solid #f69c32;">
                                <h2 style="color: #1e293b; margin: 0 0 20px 0; font-size: 20px; font-weight: 600;">
                                    👤 Customer Information
                                </h2>
                                
                                <div style="margin-bottom: 15px;">
                                    <span style="display: inline-block; width: 120px; color: #64748b; font-weight: 600; font-size: 14px;">
                                        Full Name:
                                    </span>
                                    <span style="color: #1e293b; font-weight: 500; font-size: 16px;">
                                        {{ $fullname }}
                                    </span>
                                </div>
                                
                                <div style="margin-bottom: 15px;">
                                    <span style="display: inline-block; width: 120px; color: #64748b; font-weight: 600; font-size: 14px;">
                                        Email:
                                    </span>
                                    <span style="color: #0b5dc0; font-weight: 500; font-size: 16px;">
                                        <a href="mailto:{{ $email }}" style="color: #0b5dc0; text-decoration: none;">
                                            {{ $email }}
                                        </a>
                                    </span>
                                </div>
                            </div>
                            
                            <!-- Problem Description Card -->
                            <div style="background-color: #fff7ed; border-radius: 8px; padding: 25px; border-left: 4px solid #f69c32;">
                                <h2 style="color: #1e293b; margin: 0 0 20px 0; font-size: 20px; font-weight: 600;">
                                    🔧 Problem Description
                                </h2>
                                
                                <div style="background-color: #ffffff; border-radius: 6px; padding: 20px; border: 1px solid #e2e8f0;">
                                    <p style="color: #374151; margin: 0; font-size: 15px; line-height: 1.7; white-space: pre-wrap;">{{ $problem }}</p>
                                </div>
                            </div>
                            
                        </td>
                    </tr>
                    
                    <!-- Footer Section -->
                    <tr>
                        <td style="background-color: #f8fafc; padding: 30px; text-align: center; border-top: 1px solid #e2e8f0;">
                            <div>
                                <p style="color: #64748b; margin: 0; font-size: 12px;">
                                    This email was generated from the ComputerFixPlus quote request form.<br>
                                    <strong>{{ now()->format('F j, Y \a\t g:i A') }}</strong>
                                </p>
                            </div>
                        </td>
                    </tr>
                    
                </table>
                
            </td>
        </tr>
    </table>
    
</body>
</html>
