<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Converting PhP</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        .box{
            width:200px;
            
        }
        .box:not(:first-child){
            padding:0px 10px;
        }
        form{
            position:absolute;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);
            background:#f8f8f8;
            padding:40px;
            border-radius:10px;
        }
    </style>
</head>
<body>

        <form action="csv.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <h2>Add Filters</h2>
                <div class="d-flex">
                    <div class="box">
                        <label for="USERID">User ID</label>
                        <input type="text" name="UserID" placeholder="e.g sample.user" class="form-control">
                     </div>
                     <div class="box">
                        <label for="USERID">First Name</label>
                        <input type="text" name="FirstName" class="form-control">
                     </div>
                     <div class="box">
                        <label for="USERID">Last Name</label>
                        <input type="text" name="LastName" class="form-control">
                     </div>
                </div>
            </div>

            <!-- <div class="form-group">
              
            </div>

            <div class="form-group">
                
            </div> -->


            <div class="form-group">
                <label for="USERID">Status</label>
                <select name="Status" class="form-control">
                    <option value="SELECTSTATUS">Select Status</option>
                    <option value="STARTED">STARTED</option>
                    <option value="COMPLETED">COMPLETED</option>
                </select>
            </div>
            <h2>Add Columns To Your Datas</h2>
            <div class="form-group">
                <input type="checkbox" name="AddColumns[]" value="STATUS" >
                <label for="vehicle1">Status</label><br>


                <input type="checkbox" name="AddColumns[]" value="COMPLETED DATE">
                <label for="vehicle1">Completed Date</label><br>
            </div>

            <h2>Upload CSV Here</h2>
                <input type="hidden" name="sample" value="sample">
                <input type="file" name="file">
                <button type="submit" value="submit">Submit</button>
        </form>

    
</body>
</html>