<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>XMLHttpRequest Message Example</title>
</head>
<body>

    <h2>Read Text File using XMLHttpRequest</h2>
    <button onclick="loadTextFile()">Load Data</button>
    
    <p id="output"></p>

    <script>
        function loadTextFile() {
            const output = document.getElementById('output');

            output.textContent = "Loading data, please wait...";

            const xhr = new XMLHttpRequest();

            xhr.open('GET', 'data.txt', true);

            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    output.textContent = xhr.responseText;
                }
            };

            xhr.send();
        }
    </script>

</body>
</html>