<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>XHR with Callback</title>
</head>
<body>

    <h2>XMLHttpRequest with a Callback Function</h2>
    <button onclick="loadDataWithCallback()">Load Data</button>
    
    <p id="output"></p>

    <script>
         function getTextFile(url, myCallback) {
            const xhr = new XMLHttpRequest();
            xhr.open('GET', url, true);

            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                     myCallback(xhr.responseText);
                }
            };

            xhr.send();
        }

         function showOutput(textData) {
            document.getElementById('output').textContent = textData;
        }

         function loadDataWithCallback() {
            document.getElementById('output').textContent = "Loading...";
             getTextFile('data.txt', showOutput);
        }
    </script>

</body>
</html>