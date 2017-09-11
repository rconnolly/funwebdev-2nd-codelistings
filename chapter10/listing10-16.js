
$.ajax({ url: "vote.php",
   data: $("#voteForm").serialize(),
   async: true,
   type: post,
   headers: {"User-Agent" : "Homebrew Vote Engine",
            "Referer": "http://funwebdev.com"
   }
});