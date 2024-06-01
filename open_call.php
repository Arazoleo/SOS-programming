<?php
    require_once "valid.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Start Request</title>

    <style>
        .homeLogo {
            position: fixed;
            left: 40px;
            top: 40px;
            width: 100px;
            height: 100px;
            border: 5px none transparent;
            border-radius: 50%;
            transition: all 0.2s;
        }
        .homeLogo:hover {
            border: 5px solid blue;
            width: 120px;
            height: 120px;
        }

        #sel {
            margin-top: 50px;
        }
        #desc {
            height: 100px;
            margin-top: 50px;
            text-align: start;
        }
        #sub {
            width: 200px;
            height: 50px;
            position: fixed;
            top: 600px;
            left: 680px;
            background-color: blue;
            border-radius: 20px;
            font-weight: bold;
            font-size: 25px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            box-shadow: 0px 0px 10px blue;
            transition: all 0.2s;
            
        }
        #sub:hover{
            background-color: blueviolet;
            box-shadow: 0px 0px 10px blueviolet;
        }
        #sub:focus{
            background-color: purple;
            box-shadow: 0px 0px 10px purple;
        }
        #fileUpload{
            margin-top: 50px;
        }
    </style>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/1465/1465612.png" type="image/x-icon">
</head>
<body class="bg-dark text-white p-3">
    <div class="container">
        <div>
            <form id="problemForm" method="post" action="device.php" onsubmit="validateForm(event)">
                <input name="user" id="name" class="form-control" type="text" placeholder="Programming Language">

                <select id="sel" class="form-control" name="kind">
                    <option value="">Kind of problem</option>
                    <option>Time limit Exceeded</option>
                    <option>Syntax Problem</option>
                    <option>Logic Problem</option>
                    <option>Wrong Output</option>
                    <option>Runtime Error</option>
                </select>

                <div>
                    <textarea id="desc" class="form-control" rows="3" name="description" placeholder="Description"></textarea>
                </div>
                <label for="fileUpload"><br>Choose a file with your program</label>
                <input type="file" id="fileUpload" name="fileUpload" class = "form-control" placeholder="Choose a file with your program">

                <button type="submit" id="sub" class="btn btn-primary">Send</button>
            </form>
        </div>
    </div>

    <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-danger">
                    <h5 class="modal-title" id="errorModalLabel">Form Submission Error</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-danger" id="errorModalBody">
                    Please Complete all the fields.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <a href="home.php">
        <img class="homeLogo" src="https://png.pngtree.com/element_our/png/20181214/real-estate-house-logo-graphic-design-template-vector-illustration-png_269519.jpg">
    </a>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGaI3sxOn/c1F9I1B05C96Llen" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
        function validateForm(event) {
            event.preventDefault();

            
            let name = document.getElementById('name').value.trim();
            let kind = document.getElementById('sel').value;
            let description = document.getElementById('desc').value.trim();
            let file = document.getElementById("fileUpload").value;

            let errorMsg = false;

        
            if (name === '' || kind === '' || desc === '' || file === '') {
                errorMsg = true;
            }
           
            if (errorMsg == true) {
                
                $('#errorModal').modal('show');
            } else {
                document.getElementById('problemForm').submit(); 
            }
        }
    </script>
</body>
</html>
