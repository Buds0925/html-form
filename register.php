<html>
    <head>
        <title> Form </title>
    </head>
     <body>
            <form action="action_page.php" method="POST">
                <table border="1" cellpadding= "28" width= "60">
                    <tr>
                            <th>Question</th>
                            <th>Answer</th>
                    </tr>
                    <tr>
                            <td> Name: </td>
                            <td> <input type="text" name="name" placeholder="Enter Fullname" value="Adrian"> </td>
                    </tr>
                    <tr>
                            <td> Gender: </td>
                            <td>
                            <input type="radio" name="gender" value="male" checked> Male
                            <input type="radio" name="gender" value="female"> Female
                            </td>
                    </tr>
                     <tr>
                            <td> Country: </td>
                            <td>
                            <select name="country">
                                <option value="PH"  selected>Philippines</option>
                                <option value="AUS">Australia</option>
                                <option value="US">United States</option>
                            </select>
                            </td>
                    </tr>
                    <tr>
                            <td colspan="2">
                            <input type="submit" name="submit" value="Save">
                            </td>
                    </tr>
                </table>
            </form>
        </body>
    </head>
</html>z    z   
