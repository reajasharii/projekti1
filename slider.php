<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: 'Courier New', Courier, monospace;
            box-sizing: border-box;
        }
        body{
            background: lightpink;
        }
        .fotot{
            width: 900px;
            display: flex;
            overflow-x: scroll;
        }
        .fotot div{
            width: 100%;
            display: grid;
            grid-template-columns: auto auto auto;
            grid-gap: 20px;
            padding: 10px;
            flex: none;
        }
        .fotot div img{
            width: 250px;
            height: 300px;
            filter: grayscale(100%);
            transition: transform 0.5s;
            border-radius: 10%;
        }
        .fotot::-webkit-scrollbar{
            display: none;
        }
        .fotot1{
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 10% auto;
            margin-top: 20px;
        }
        #buton,#buton1{
            width: 50px;
            cursor: pointer;
            margin: 40px;
            border-radius: 40%;
        }
        .fotot div img:hover{
            filter: grayscale(0);
            cursor: pointer;
            transform: scale(1,1);
        }
        h1{
            text-align: center;
            color: purple;
       
        }
    </style>
     <?php
    include 'hederi.php';
    ?>
    <h1>Cakes That Take the Cake</h1>
  
    <div class="fotot1">
        <img src="IMAGES/download (4).png" id="buton"> 
        <div class="fotot">
            <div>
                <span><img src="IMAGES/download (13).jpg"></span>
                <span><img src="IMAGES/images (9).jpg"></span>
                <span><img src="IMAGES/images (7).jpg"></span>
            </div>
            <div>
                <span><img src="IMAGES/images (10).jpg"></span>
                <span><img src="IMAGES/images (11).jpg"></span>
                <span><img src="IMAGES/download (14).jpg"></span>
            </div>
            <div>
                <span><img src="IMAGES/download (9).jpg"></span>
                <span><img src="IMAGES/download.jpg"></span>
                <span><img src="IMAGES/download (5).jpg"></span>
            </div>
        </div>
        <img src="IMAGES/download.png" id="buton1"> 
    </div>
    <?php
include 'footer.php';
?>
   

    <script type ="text/javascript" src="script/slider.js" ></script>
   
</body>
</html>