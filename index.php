<!DOCTYPE html>
<html>
<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <title></title>
    <style type="text/css">
    </style>
</head>
<body class="table-dark">
    <form method="POST" action="makexcel.php">
       <table class="table table-dark">
           <thead>
               <tr>
                <th>Monday</th>
                <th>Tuesday</th>
                <th>Wednesday</th>
                <th>Thursday</th>
                <th>Friday</th>
                <th>Saturday</th>
                <th>Sunday</th>
               </tr>
           </thead>
           <tbody>
               <tr>
                    <td><input type="number" max="24" min="0"  value="0" name="Monday"></td>
                    <td><input type="number" max="24" min="0"  value="0" name="Tuesday"></td>
                    <td><input type="number" max="24" min="0"  value="0" name="Wednesday"></td>
                    <td><input type="number" max="24" min="0"  value="0" name="Thursday"></td>
                    <td><input type="number" max="24" min="0"  value="0" name="Friday"></td>
                    <td><input type="number" max="24" min="0"  value="0" name="Saturday"></td>
                    <td><input type="number" max="24" min="0"  value="0" name="Sunday"></td>
               </tr>
           </tbody>
       </table>
        <input type="submit" class="btn">
    </form>
</body>
</html>