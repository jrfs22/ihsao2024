<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test real time</title>
</head>

<body>

    <script>
        async function getRealTime() {
            try {
                const response = await fetch('https://worldtimeapi.org/api/ip');
                const data = await response.json();

                console.log(data);
                // Extract the current time from the response
                const currentTime = new Date(data.utc_datetime);

                // Log the current time
                console.log('Real Time:', currentTime);
            } catch (error) {
                console.error('Error fetching real time:', error);
            }
        }

        // Call the function to get the real-time
        getRealTime();

        function getUserTimeZone() {
            try {
                // Create a date object to represent the current time
                const now = new Date();

                // Get the user's time zone using Intl.DateTimeFormat
                const userTimeZone = Intl.DateTimeFormat().resolvedOptions().timeZone;

                // Log the user's time zone
                console.log('User\'s Time Zone:', userTimeZone);

                // Check if the user is in WIT, WITA, or WIB
                if (userTimeZone === 'Asia/Pontianak') {
                    console.log('User is in WIT (Western Indonesian Time).');
                } else if (userTimeZone === 'Asia/Makassar') {
                    console.log('User is in WITA (Central Indonesian Time).');
                } else if (userTimeZone === 'Asia/Jakarta') {
                    console.log('User is in WIB (Western Indonesian Time).');
                } else {
                    console.log('User is in a different time zone.');
                }
            } catch (error) {
                console.error('Error checking user\'s time zone:', error);
            }
        }

        // Call the function to check user's time zone
        getUserTimeZone();
    </script>
</body>

</html>
