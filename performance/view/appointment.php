

<html>
    <head>
        <Title> book appointment</Title>
        <link rel="stylesheet" href="assets/auth.css">
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
            }

            .container {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }

            .formContainer {
                background-color: #ffffff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            .formControl {
                margin-bottom: 20px;
            }

            .formControl span {
                display: block;
                margin-bottom: 5px;
            }

            .txtField {
                width: 100%;
                padding: 10px;
                box-sizing: border-box;
                border: 1px solid #ccc;
                border-radius: 4px;
            }

            .mb {
                margin-bottom: 10px;
            }

            .label {
                margin-right: 10px;
            }

            .button {
                background-color: #4caf50;
                color: #ffffff;
                padding: 10px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            .button:hover {
                background-color: #45a049;
            }

            a {
                text-decoration: none;
                color: #333;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="formContainer">
                <form action="../controller/appointmentCheck.php" method="REQUEST">
                <div class= "formControl">
                            <span> Name</span>
                            <input type="text"
                                name="name"
                                class="txtField mb"
                                placeholder="Enter your name" >    
                    </div>
                    <div class= "formControl">
                            <span>Date:</span>
                            <input type="date"
                                name="date"
                                class="txtField mb"
                                placeholder="Enter prefered date " >    
                    </div>
                   
                    <div classs = "formControl mb">
                        <span class= "label">Pet Type: </span>
                        <input  type="radio"
                                name="animal">Dog
                        <input  type="radio"
                                name="animal">Cat
                        <input  type="radio"
                                name="animal">Bird
                                
                            </div>
                    <div class = "formControl">
                        <input type="submit" name="submit" class="button">
                        <a href= "home.php"> back home</a>
                    </div>

                </form>
            </div>
        </div>
    </body>
</html>