
<html>
    <head>
        <script>
                history.pushState("null","null",document.title);
                window.addEventListener('popstate',function(){
                    history.pushState("null","null",document.title);
                });
        </script>
        <?php
        		

			session_start();
			session_unset();
			session_destroy();
			$_SESSION=array();
			echo "session expired";
?>

                header("location:home.html");
         <?
    </head>
</html>

