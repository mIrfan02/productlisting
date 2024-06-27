<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website - Email Template</title>
    <style>
        /* Reset styles */
        body,
        html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        /* Container */
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Header */
        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h1 {
            color: #333;
        }

        /* Content */
        .content {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        /* Footer */
        .footer {
            margin-top: 20px;
            text-align: center;
        }

        .footer p {
            color: #666;
        }

        /* Table styles */
        .details-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .details-table th,
        .details-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .details-table th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">

            <h1>Custom Quote Mail</h1>
            <p>Name: {{ $quoteData['name'] }}</p>
            <p>Email: {{ $quoteData['email'] }}</p>
            <p>Phone: {{ $quoteData['phone'] }}</p>
            Page Url: {{ $quoteData['page_url'] }}
            </p>

        </div>
        <div class="content">
            <table class="details-table">
                <tr>
                    <th>Field</th>
                    <th>Value</th>
                </tr>
                <tr>
                    <td>Product</td>
                    <td>{{ $quoteData['product'] }}</td>
                </tr>
                <tr>
                    <td>Length</td>
                    <td>{{ $quoteData['length'] }}</td>
                </tr>
                <tr>
                    <td>Width</td>
                    <td>{{ $quoteData['width'] }}</td>
                </tr>

                <tr>
                    <td>Height</td>
                    <td>{{ $quoteData['height'] }}</td>
                </tr>

                <tr>
                    <td>Unit</td>
                    <td>{{ $quoteData['unit'] }}</td>
                </tr>

                <tr>
                    <td>Printing</td>
                    <td>{{ $quoteData['printing'] }}</td>
                </tr>

                <tr>
                    <td>Material</td>
                    <td>{{ $quoteData['material'] }}</td>
                </tr>
                <tr>
                    <td>Quantity1</td>
                    <td>{{ $quoteData['quantity1'] }}</td>
                </tr>
                <tr>
                    <td>Quantity2</td>
                    <td>{{ $quoteData['quantity2'] }}</td>
                </tr>
                <tr>
                    <td>Quantity3</td>
                    <td>{{ $quoteData['quantity3'] }}</td>
                </tr>
                <tr>
                    <td>Deadline</td>
                    <td>{{ $quoteData['deadline'] }}</td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td>{{ $quoteData['description'] }}</td>
                </tr>

                <tr>
                    <td>file</td>
                    <td>
                        @if ($quoteData['file_path'])
                            @if (pathinfo($quoteData['file_path'], PATHINFO_EXTENSION) === 'jpg' ||
                                    pathinfo($quoteData['file_path'], PATHINFO_EXTENSION) === 'png' ||
                                    pathinfo($quoteData['file_path'], PATHINFO_EXTENSION) === 'jpeg' ||
                                    pathinfo($quoteData['file_path'], PATHINFO_EXTENSION) === 'gif')
                                <!-- Display the image inline -->
                                <img src="{{ url($quoteData['file_path']) }}" alt="Uploaded Image"
                                    style="width: 7rem !important;">
                            @else
                                <!-- Provide a link to view the file -->
                                <p><a href="{{ url($quoteData['file_path']) }}" target="_blank">View File</a></p>
                            @endif
                        @endif
                    </td>


                </tr>



            </table>
        </div>
        <div class="footer">
            <p>&copy; 2024 CustomBox. All rights reserved.</p>
        </div>
    </div>
</body>

</html>
