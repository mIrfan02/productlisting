         // ---------Graphs-Js---------------------//
            var ctx = document.getElementById('dashedChart').getContext('2d');

            var data = {
                labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'],
                datasets: [
                    {
                        label: 'Blurred Line',
                        borderColor: 'rgba(0, 0, 0, 0.1)', // Black with opacity
                        borderWidth: 2,

                        borderCapStyle: 'round',
                        lineTension: 0.9,
                        borderDash: [5, 5], // Dashed line style
                        pointRadius: 0,      // Set point radius to 0 (hide data points)
                        pointHoverRadius: 0, // Set point hover radius to 0 (hide data points on hover)
                        data: [30000, 18000, 20000, 27000, 20000, 12000, 23000, 34000, 30000, 45000, 32000, 40000],


                    },
                    {
                        label: 'Opacity Black Line',
                        borderColor: 'blue', // Black with higher opacity
                        borderWidth: 4,
                        borderCapStyle: 'round',
                        lineTension: 0.3,
                        // borderDash: [5, 5], // Dashed line style
                        pointRadius: 0,      // Set point radius to 0 (hide data points)
                        pointHoverRadius: 0, // Set point hover radius to 0 (hide data points on hover)
                        data: [20000, 25000, 20000, 11000, 11000, 22000, 42000, 28000, 40000, 48000, 30000, 32000],
                    },
                ],
            };

            var options = {
                scales: {
                    x: {
                        title: {
                            display: false,

                        },
                        grid: {
                            display: false, // Hide x-axis grid lines
                        },
                        ticks: {
                            fontSize: 20,
                            color: '#8D8D8D',  // Set the font size for x-axis labels (1 to 12)
                        },
                    },
                    y: {
                        title: {
                            display: false, // Hide y-axis title
                        },
                        ticks: {
                            callback: function (value, index, values) {
                                return "$" + value / 1000 + 'k'; // Format y-axis labels as '10k', '20k', etc.
                            },
                            stepSize: 10000, // Step size between ticks
                            fontSize: 30,
                            color: '#8D8D8D',    // Set the font size for y-axis labels ("10k")
                        },
                        grid: {
                            display: true, // Hide y-axis grid lines
                        },
                    },
                },
                plugins: {
                    legend: {
                        display: false, // Hide the legend
                    },
                    title: {
                        display: true,
                        text: 'Islamabad Institute Of Arts And Applied Sciences',
                        position: 'top', // Position title at the top
                        align: 'end',    // Align title to the right
                        color: '#000',  // Set the title color to green
                        font: {
                            size: 14      // Set the font size of the title to 20px
                        }  // Set the font size to 200
                    },
                },
            };

            var dashedChart = new Chart(ctx, {
                type: 'line',
                data: data,
                options: options,
            });
            const cta = document.getElementById('stackedAreaChart').getContext('2d');

            const dat = {
                labels: ['', '', '', '', '', '', ''],
                datasets: [
                    {
                        label: 'This Month', // Swap the order of the labels
                        backgroundColor: '#A9DFD8', // Blue
                        borderColor: '#40BBAB',
                        borderWidth: 1,
                        data: [90, 40, 50, 30, 40, 30, 90],
                        fill: 'start', // Fill the area under the line
                    },
                    {
                        label: 'Last Month', // Swap the order of the labels
                        backgroundColor: '#F06EE1', // Red
                        borderColor: '#F06EE1',
                        borderWidth: 1,
                        data: [90, 40, 50, 30, 40, 30, 90],
                        fill: 'start', // Fill the area under the line
                    },
                ],
            };

            const option = {
                scales: {
                    x: {
                        stacked: true,
                    },
                    y: {
                        stacked: true,
                        title: {
                            display: false,
                        },
                        grid: {
                            display: false, // Hide x-axis grid lines
                        },
                        ticks: {
                            fontSize: 20,
                            display: false,
                            color: 'green',  // Set the font size for x-axis labels (1 to 12)
                        },
                    },
                },
                plugins: {
                    legend: {
                        display: true, // Display the legend
                        position: 'bottom', // Position the legend at the bottom
                        labels: {
                            // Adjust the width of the legend items
                            usePointStyle: true,
                            // Use point-style markers
                        },
                    },
                    title: {
                        display: false,
                    },
                    customLabels: {
                        // Create custom labels
                        labels: [
                            {
                                text: 'Last Month',
                                color: 'gray',
                                fontSize: 20,
                            },
                            {
                                text: '$4,087',
                                color: 'gray',
                                fontSize: 20,
                            },
                            {
                                text: 'This Month',
                                color: 'blue',
                                fontSize: 20,
                            },
                            {
                                text: '$4,087',
                                color: 'blue',
                                fontSize: 20,
                            },
                        ],
                    },
                },
            };

            const stackedAreaChart = new Chart(cta, {
                type: 'line', // Use 'line' type for stacked area chart
                data: dat,
                options: option,
            });
//   ----------------Code for data table-----------------------////////////////
            $(document).ready(function () {
                var table = $('#myTable').DataTable({
                    searching: false, // Disable search
                    info: false,
                    paging: true,
                    // Disable showing entries information
                });

                // Set the limit for pagination (e.g., 5 rows)
                var paginationLimit = 5;



                // Check the number of rows in the table
                var numRows = table.rows().count();

                // Enable pagination if the number of rows exceeds the limit
                if (numRows > paginationLimit) {
                    table
                        .paging
                        .page.len(paginationLimit)
                        .draw();
                }
            });
            $(document).ready(function () {
                $('#myTable2').DataTable({
                    searching: false,
                    paging: true,
                    info: false  // Disable search
                });
                // Check the number of rows in the table
                var numRows = table.rows().count();

                // Set a limit for pagination (e.g., 5 rows)
                var paginationLimit = 5;

                // Enable pagination if the number of rows exceeds the limit
                if (numRows > paginationLimit) {
                    table
                        .paging
                        .page.len(paginationLimit)
                        .draw();
                }
            });
            $(document).ready(function () {
                $('#myTable3').DataTable({
                    searching: false,
                    paging: true,
                    info: false  // Disable search
                });
                // Check the number of rows in the table
                var numRows = table.rows().count();

                // Set a limit for pagination (e.g., 5 rows)
                var paginationLimit = 5;

                // Enable pagination if the number of rows exceeds the limit
                if (numRows > paginationLimit) {
                    table
                        .paging
                        .page.len(paginationLimit)
                        .draw();
                }
            });
            $(document).ready(function () {
                $('#myTable4').DataTable({
                    searching: false,
                    paging: true,
                    info: false  // Disable search
                });
                // Check the number of rows in the table
                var numRows = table.rows().count();

                // Set a limit for pagination (e.g., 5 rows)
                var paginationLimit = 5;

                // Enable pagination if the number of rows exceeds the limit
                if (numRows > paginationLimit) {
                    table
                        .paging
                        .page.len(paginationLimit)
                        .draw();
                }
            });
/////////////////End//////////////////////////////////////////////////
//  <!-- ---------------Chat-box------------- -->
        // jQuery(document).ready(function () {

        //     $(".chat-list a").click(function () {
        //         $(".chatbox").addClass('showbox');
        //         return false;
        //     });

        //     $(".chat-icon").click(function () {
        //         $(".chatbox").removeClass('showbox');
        //     });


        // });
 ////////////////////End/////////////////////////////////////////
 //  ----------------Notification-Dropdwown--------// 
        $(document).ready(function () {
            $(".profile .icon_wrap").click(function () {
                $(this).parent().toggleClass("active");
                $(".notifications").removeClass("active");
            });

            $(".notifications .icon_wrap").click(function () {
                $(this).parent().toggleClass("active");
                $(".profile").removeClass("active");
            });

            $(".show_all .link").click(function () {
                $(".notifications").removeClass("active");
                $(".popup").show();
            });

            $(".close").click(function () {
                $(".popup").hide();
            });
        });
   
        // Variable to keep track of the active notification
        let activeNotification = null;

        // JavaScript function to toggle the visibility of notification content
        function toggleNotification(notificationId) {
            // Get the selected notification
            const selectedNotification = document.getElementById(notificationId);

            // If there is an active notification, hide it
            if (activeNotification && activeNotification !== selectedNotification) {
                activeNotification.style.display = 'none';
            }

            // Toggle the visibility of the selected notification
            if (selectedNotification.style.display === 'none' || selectedNotification.style.display === '') {
                selectedNotification.style.display = 'block';
                activeNotification = selectedNotification;
            } else {
                selectedNotification.style.display = 'none';
                activeNotification = null;
            }
        }      