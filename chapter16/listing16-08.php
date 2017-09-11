<form ... >
   <h1>Web Storage Writer</h1>
   <script language="javascript" type="text/javascript">
        if (typeof (localStorage) === "undefined" ||
               typeof (sessionStorage) === "undefined") {
alert("Web Storage is not supported on this browser..."); }
else {
            sessionStorage.setItem("TodaysDate", new Date());
            sessionStorage.FavoriteArtist = "Matisse";
            localStorage.UserName = "Ricardo";
            document.write("web storage modified");
        }
</script>
<p><a href="WebStorageReader.php">Go to web storage reader</a></p> </form>
