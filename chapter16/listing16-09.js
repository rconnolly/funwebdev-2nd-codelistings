<form id="form1" runat="server">
  <h1>Web Storage Reader</h1>
  <script language="javascript" type="text/javascript">
    
if (typeof (localStorage) === "undefined" ||
    typeof (sessionStorage) === "undefined") {
    alert("Web Storage is not supported on this browser...");
}
else {
    var today = sessionStorage.getItem("TodaysDate");
    var artist = sessionStorage.FavoriteArtist;
    var user = localStorage.UserName;
    document.write("date saved=" + today);
    document.write("<br/>favorite artist=" + artist);
    document.write("<br/>user name = " + user);
}

  </script>
</form>
