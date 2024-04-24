<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        <form action="8_2_1.php" method="post" enctype="multipart/form">
            name:<input type="text" name="name"><br><br>
            contact<input type="number" name="contact"><br><br>
            email<input type="email" name="email"><br><br>
            Bith date<input type="date" name="bday"><br><br>
            <input type="checkbox" name="check_list[]" value="c"><lable for="c">c</lable>
            <input type="checkbox" name="check_list[]" value="c++"><lable for="c++">c++</lable>
            <input type="checkbox" name="check_list[]" vlue="python"><lable for="python">python</lable>
            <input type="checkbox" name="check_list[]" value="java"><lable for="java">java</lable>
            <input type="checkbox" name="check_list[]" value="php"><lable for="php">php</lable><br><br>

            <lable for="countries">countries</lable>
            <select multiple="multiple" name="fromcountries[]">
                <option value=" " ></option>
                <option value="india">india</option>
                <option value="japan" >japan</option>
                <option value="usa" >usa</option><br><br>
            </select>
            
            <br><br>Blood Group<lable> <br><input type="radio" name="blood" value="ab+">ab+</lable>
            <lable> <input type="radio" name="blood" value="ab-">ab-</lable>
            <lable> <input type="radio" name="blood" value="a+">a+</lable>
            <lable> <input type="radio" name="blood" value="o+">o+</lable><br><br>
            
            <textarea name="exp" rows="5" cols="40" ></textarea><br>
            color:<input type="color" name="color"><br><br>
            resume :<input type="file" name="resume" >
            <input type="submit" value="submit" name="submit">
            
        </form>
    </body> 
</html>
