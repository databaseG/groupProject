<html>

    <head>
        <title> Book Order Website</title>
    </head>

    <body>
        <h1>Book Order Website</h1>
        <p>Enter in your name</p>

        <form action = page1.php method = "post">
           <p> 
               <label> User Name:<input name = "name" type = "text" size = "25"></label><br>
               <label> Password: <input name = "email" type = "password"></label>
           </p>

           <p>
                <label>Professor:<input name = "professor" type = "radio" value = "professor"></label><br>
                <label>Student<input name = "student" type = "radio" value = "Student"></label>

           </p>
            
            <input type = "submit" value = "Submit">
            <input type = "reset" value = "Clear">

        </form>


        <script type = "text/javascript">

            // javascript code can go here.
            // document.write("testing");
        </script>

    </body>
</html>